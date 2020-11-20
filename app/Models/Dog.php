<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    public function path () {
        return "/dog/$this->id";
    }

    public function getPathAttribute () {
        return $this->path();
    }

    public function owner () {
        return $this -> belongsTo (Owner::class);
    }

}
