<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectclient extends Model
{
    use HasFactory;
    protected $fillable = [
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
