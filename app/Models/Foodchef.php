<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodchef extends Model
{
    use HasFactory;
    protected $fillable = ['name','speciality','image'];
}
