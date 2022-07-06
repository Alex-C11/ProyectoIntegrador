<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Locations(){
        return $this->hasMany(Location::class);
    }

}
