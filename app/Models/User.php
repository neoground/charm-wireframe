<?php
/**
 * This file contains the User model
 */

namespace App\Models;

use Charm\Vivid\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 *
 * User model
 *
 * @package App\Models
 */
class User extends Model
{
    /** @var string table name */
    protected $table = 'users';
    
    /** @var array fields for mass insert */
    protected $fillable = ['id'];

    use SoftDeletes;

    /**
     * Get default (system) user
     *
     * @return self
     */
    public static function getDefaultUser()
    {
        return self::where('username', 'system')->first();
    }

    /**
     * Get the display name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->username;
    }
    
}