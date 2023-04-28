<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Country extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'country';
    protected $primaryKey = 'id';

    public function city()
    {
        return $this->hasManyThrough(
            City::class,
            State::class,
            'state_id', // Foreign key on the environments table...
            'country_id', // Foreign key on the deployments table...
            'id', //. Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }

    public function state()
    {
        return $this->hasMany(State::class, "country_id", "id"); //city table forigne key , primary key
    }
}
