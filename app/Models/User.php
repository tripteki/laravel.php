<?php

namespace App\Models;

use DateTimeInterface;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail as VerifyableContract;
use Illuminate\Contracts\Auth\CanResetPassword as ResetableContract;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract, VerifyableContract, ResetableContract
{
    /**********************************************************************************************************/

        use HasFactory, SoftDeletes, Notifiable, Authenticatable, Authorizable, MustVerifyEmail, CanResetPassword;

        const CREATED_AT = "created_at";
        const DELETED_AT = "deleted_at";
        const UPDATED_AT = null;

        /**
         * @return string
         */
        public function receivesBroadcastNotificationsOn()
        {
            return "auth".".".$this->getKey();
        }

    /**********************************************************************************************************/

    /**
     * @var array<string, string>
     */
    protected $casts = [

        "email_verified_at" => "datetime",
    ];

    /**
     * @var array<int, string>
     */
    protected $fillable = [

        "name",
        "email",
        "password",
    ];

    /**
     * @var array<int, string>
     */
    protected $hidden = [

        "password",
        "remember_token",
    ];
}
