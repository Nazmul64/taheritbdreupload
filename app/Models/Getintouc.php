<?php declare(strict_types=1); 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Getintouc extends Model
{
    use HasFactory;
    protected $fillable = [
      'first_name',
      'last_name',
      'email',
      'phone_number',
      'message',
    ];
}
