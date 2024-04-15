<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'aboutus';
    protected $fillable = ['title', 'description'];
}
