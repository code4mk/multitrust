<?php

namespace Code4mk\Multitrust\Models;

use Illuminate\Database\Eloquent\Model;
use Code4mk\Multitrust\Contracts\RoleHasRelations as RoleHasRelationsContract;
use Code4mk\Multitrust\Traits\RoleHasRelations;
use Code4mk\Multitrust\Traits\Slugable;

class Role extends Model implements RoleHasRelationsContract
{
    use Slugable, RoleHasRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'level'];

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
