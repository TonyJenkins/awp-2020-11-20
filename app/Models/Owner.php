<?php

namespace App\Models;

use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    public function dogs () {
        return $this -> hasMany (Dog::class);
    }

    public function getAvatarUrlAttribute () {
        return Gravatar::get( $this -> email );
    }
}
