<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Departament(){
        return $this->belongsTo(Departament::class);
    }
    public function Province(){
        return $this->belongsTo(Province::class);
    }
    public function District(){
        return $this->belongsTo(District::class);
    }
}
