<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'address', 'image'];


    // Mutators
    // It will make the database entry according to the following functions i,e ucfirst() function will make all the entry first letter in capital.

    //Accessories is also used for this purpose but it not change the entry into database

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }


    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }



    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = ucfirst($value);
    }


}
