<?php declare(strict_types=1); 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeCategories extends Model
{
    use HasFactory;
    protected $fillable=['status','title','description','designing','progress_1','development','progress_2','optimization','progress_3','photo'];
}
