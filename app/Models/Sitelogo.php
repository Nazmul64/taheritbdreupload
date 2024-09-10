<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitelogo extends Model
{
    use HasFactory;
    protected $fillable = [
        'new_icon',
        'information',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'adderes',
        'phone_1',
        'phone_2',
        'email_1',
        'email_2',
        'site_icon',
        'new_photo',
        'new_icon',
        'photo',  // Ensure 'photo' is listed here
    ];
}
