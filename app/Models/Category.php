<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Category extends Model
{
    use HasFactory;
    protected $fillable=["Category_Name"];
    function Car(){
        return $this->hasMany(Car::class,"Cat_id","id");
    }
}
