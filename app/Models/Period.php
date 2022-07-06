<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Associates(){
        return $this->hasMany(Associate::class);
    }
}
