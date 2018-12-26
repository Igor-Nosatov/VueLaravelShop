<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

  class User extends Authenticatable
  {
     use  HasApiTokens;

      protected $fillable = [
          'name', 'email', 'password',
      ];

      protected $hidden = [
          'password', 'remember_token',
      ];

      public function cart()
      {
          return $this->hasMany(Cart::class);
      }
  }
