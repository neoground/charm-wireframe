<?php
/**
 * This file contains the Token model
 */

namespace App\Models;

use Carbon\Carbon;
use Charm\Vivid\C;
use Charm\Vivid\Model;

/**
 * Class Token
 *
 * Token model
 *
 * @package App\Models
 */
class Token extends Model
{
    /** @var string table name */
    protected $table = 'token';
    
    /** @var array fields for mass insert */
    protected $fillable = ['id', 'type', 'token', 'user_id', 'custom_data', 'expiration'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'custom_data' => 'array',
    ];

    /**
     * User relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * Get a new and unique token
     *
     * @param string $type wanted type
     *
     * @return string
     */
    public static function getUniqueToken(string $type) : string
    {
        $token = C::Token()->createToken();

        while (self::where('token', $token)->where('type', $type)->count() > 0) {
            $token = C::Token()->createToken();
        }

        return $token;
    }

    /**
     * Get all token of a specific type for user
     *
     * @param User   $user
     * @param string $type
     *
     * @return mixed
     */
    public static function getTokenForUser(User $user, string $type)
    {
        return self::where('type', $type)
            ->where('user_id', $user->id)
            ->where('expiration', '>=', Carbon::now()->toDateTimeString())
            ->get();
    }

    /**
     * Validate a token for a user
     *
     * @param User   $user  the user
     * @param string $type  wanted type
     * @param string $token token to validate
     *
     * @return bool
     */
    public static function validateTokenForUser(User $user, string $type, string $token): bool
    {
        return self::where('user_id', $user->id)
                ->where('token', $token)
                ->where('type', $type)
                ->where('expiration', '>=', Carbon::now()->toDateTimeString())
                ->count() > 0;
    }
    
}