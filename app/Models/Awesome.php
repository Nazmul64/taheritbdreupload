<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awesome extends Model
{
    use HasFactory;
   protected $fillable=['awesome_title', 'awesome_description', 'photo','status'];
}
