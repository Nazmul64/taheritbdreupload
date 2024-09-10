<?php declare(strict_types=1); 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeCategoy extends Model
{
    use HasFactory;
    protected $fillable = ['new_about_photo', 'about_title', 'about_description','title','description','designing','progress_1','development','progress_2','optimization','progress_3','photo'];
}
