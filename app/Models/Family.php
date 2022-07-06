<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Peope(){
        return $this->belongsTo(People::class);
    }
}
