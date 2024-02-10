<?php
/**
 * Playground
 *
 */

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Playground\Models\User as Authenticatable;

/**
 * \App\Models\User
 *
 * This model includes RBAC and supports Sanctum.
 */
class User extends Authenticatable
{
    use HasApiTokens;
}
