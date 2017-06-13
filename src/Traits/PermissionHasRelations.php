<?php

namespace Code4mk\Multitrust\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
// use Code4mk\Multitrust\Models\Role;
// use Illuminate\Database\Eloquent\Collection;
trait PermissionHasRelations
{
    /**
     * Permission belongs to many roles.
     *
     * @return BelongsToMany
     */
     public function roles()
     {
         return $this->belongsToMany(config('multitrust.models.role'))->withTimestamps();
     }

    /**
     * Permission belongs to many users.
     *
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(config('auth.providers.users.model'))->withTimestamps();
    }
  
}
