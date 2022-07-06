<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Activities(){
        return $this->hasMany(Activity::class);
    }
    public function Debits(){
        return $this->hasMany(Debit::class);

    }

}
