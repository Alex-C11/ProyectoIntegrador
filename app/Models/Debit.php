<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Associate(){
        return $this->belongsTo(Associate::class);

    }
    public function Association(){
        return $this->belongsTo(Association::class);
    }
}
