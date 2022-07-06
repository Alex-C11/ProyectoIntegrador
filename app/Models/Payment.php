<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Activity(){
        return $this->belongsTo(Activity::class);
    }
    public function Assistence(){
        return $this->belongsTo(Assistence::class);
    }
}
