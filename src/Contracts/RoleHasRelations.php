<?php

namespace Code4mk\Multitrust\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Code4mk\Multitrust\Models\Permission;

interface RoleHasRelations
{
    /**
     * Role belongs to many permissions.
     *
     * @return BelongsToMany
     */
    public function permissions();

    /**
     * Role belongs to many users.
     *
     * @return BelongsToMany
     */
    public function users();

    /**
     * Role belongs to many Admins
     * @return BelongsToMany
     */
    public function admins();

    /**
     * Attach permission to a role.
     *
     * @param int|Permission $permission
     * @return int|bool
     */
    public function attachPermission($permission);

    /**
     * Detach permission from a role.
     *
     * @param int|Permission $permission
     * @return int
     */
    public function detachPermission($permission);

    /**
     * Detach all permissions.
     *
     * @return int
     */
    public function detachAllPermissions();

    /**
     * Sync permissions for a role.
     *
     * @param array|Permission[]|Collection $permissions
     * @return array
     */
    public function syncPermissions($permissions);
}
