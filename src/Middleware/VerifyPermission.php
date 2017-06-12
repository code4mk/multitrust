<?php

namespace Code4mk\Multitrust\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Code4mk\Multitrust\Exceptions\PermissionDeniedException;

class VerifyPermission
{
    /**
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @param int|string $permission
     * @return mixed
     * @throws \Ultraware\Roles\Exceptions\PermissionDeniedException
     */
    public function handle($request, Closure $next, $permission)
    {
        if ($this->auth->check() && $this->auth->user()->hasPermission($permission)) {
            return $next($request);
        }

        throw new PermissionDeniedException($permission);
    }
}
