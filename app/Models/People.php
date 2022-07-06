<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Families(){
        return $this->hasMany(Family::class);
    }

    public function Associates(){
        return $this->hasMany(Associate::class);
    }


}
