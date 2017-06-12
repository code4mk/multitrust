<?php

namespace Code4mk\Multitrust\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Code4mk\Multitrust\Exceptions\LevelDeniedException;

class VerifyLevel
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
     * @param int $level
     * @return mixed
     * @throws \Ultraware\Roles\Exceptions\LevelDeniedException
     */
    public function handle($request, Closure $next, $level)
    {
        if ($this->auth->check() && $this->auth->user()->level() >= $level) {
            return $next($request);
        }

        throw new LevelDeniedException($level);
    }
}
