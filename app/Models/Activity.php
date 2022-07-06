<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Payments(){
        return $this ->hasMany(Payment::class);
    }
    public function Assistences(){
        return $this->hastMany(Assistence::class);
    }
    public function Association(){
        return $this-> belongsTo(Association::class);
    }
}
