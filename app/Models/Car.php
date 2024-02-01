<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=["Title","Content","Doors","Image","Active","Passengers","Price","Luggages","Cat_id"];
    function Category(){
        return  $this->belongsTo(Category::class,"Cat_id","id");
    }
}
