<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
     /** @use HasFactory<\Database\Factories\BlogFactory> */
     use HasFactory;
    protected $guarded = [];
}
