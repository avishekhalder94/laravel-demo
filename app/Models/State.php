<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class State extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    

    protected $primaryKey = 'id';

    public function city()
    {
        return $this->hasMany(City::class,"state_id","id"); //city table forigne key , primary key
    }

    public function country()
    {
        return $this->hasOne(Country::class,"id","id"); //country table forigne key , primary key
    }

}
