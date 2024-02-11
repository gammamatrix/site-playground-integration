<?php
/**
 * Playground
 */
namespace App\Models;

use Laravel\Sanctum;
use Playground\Models\User as BaseUser;

/**
 * \App\Models\User
 *
 * This model includes RBAC and supports Sanctum.
 */
class User extends BaseUser implements Sanctum\Contracts\HasApiTokens
{
    use Sanctum\HasApiTokens;
}
