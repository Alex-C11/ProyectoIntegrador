<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistence extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Payment(){
        return $this->belongsTo(Payment::class);
    }
    public function Associate(){
        return $this->belongsTo(Associate::class);
    }
}
