<?php declare(strict_types=1); 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'position', 'photo','facebook_link','instagram_link','twitter_link','youtube_link','new_photo'];
}
