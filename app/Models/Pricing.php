<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    protected $fillable  =[
      'basic',
      'price',
      'life_time_update',
      'month',
      'permitted_domain',
      'personal_project',
      'email_support',
      'skype_support',
      'anydesk_support',
      'whatsapp_support',
      'installation_cpanel',
      'photo',
      'watchus_title',
        'see_how_title',
        'clientphoto',
        'video_id',
        'happy_client1',
        'happy_count1',
        'happy_client2',
        'happy_count2',
        'happy_client3',
        'happy_count3',
        'happy_client4',
        'happy_count4',
    ];
}
