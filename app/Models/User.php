<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
* USER ATTRIBUTES
* $this->attributes['id'] - int - contains the user primary key (id)
* $this->attributes['name'] - string - contains the user name
* $this->attributes['email'] - string - contains the user email
* $this->attributes['email_verified_at'] - timestamp - contains the user email verification date
* $this->attributes['password'] - string - contains the user password
* $this->attributes['remember_token'] - string - contains the user password
* $this->attributes['role'] - string - contains the user role (client or admin)
* $this->attributes['balance'] - int - contains the user balance
* $this->attributes['created_at'] - timestamp - contains the user creation date
* $this->attributes['updated_at'] - timestamp - contains the user update date
*/

    /**
     * The attributes that are mass assignable.
     *

     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *

     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
