<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\UserRepository;

class UserService extends Service
{
    /**
     * Access panel role slugs table.
     *
     * @var array
     */
    public static $canAccessPanelRoles = [
        'admin',
        'moderator'
    ];

    public function __construct(
        protected UserRepository $repository,
    ) {}

    /**
     * 
     * @param array $roles
     * @return bool;
     */
    public static function checkAccessPanelRoles($roles): bool
    {
        $intersection = array_intersect(self::$canAccessPanelRoles, $roles);
        return count($intersection) > 0;
    }
}