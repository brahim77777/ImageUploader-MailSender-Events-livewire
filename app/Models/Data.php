<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = ['number'];

    public function setNumberAttribute($value){
        $this->attributes['number'] = $value - 500;
    }

    public function getNumberAttribute($value){
        return $this->attributes['number'] * 0;
     }
}
