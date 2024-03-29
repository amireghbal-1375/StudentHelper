<?php

namespace App;
    namespace App\Http\Models;
    use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


    class User extends Model
    {
        protected $fillable = [
            'username',
            'company',
            // add all other fields
        ];
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $table = 'users';
    }