<?php

namespace Code4mk\Multitrust\Models;

use Illuminate\Database\Eloquent\Model;
use Code4mk\Multitrust\Contracts\PermissionHasRelations as PermissionHasRelationsContract;
 use Code4mk\Multitrust\Traits\PermissionHasRelations;
 use Code4mk\Multitrust\Traits\Slugable;

class Permission extends Model implements PermissionHasRelationsContract
{
    use Slugable,PermissionHasRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'model'];

    /**
     * Create a new model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if ($connection = config('multitrust.connection')) {
            $this->connection = $connection;
        }
    }
}
