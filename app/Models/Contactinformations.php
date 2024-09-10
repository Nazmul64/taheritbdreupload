<?php declare(strict_types=1); 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactinformations extends Model
{
    use HasFactory;
    protected $fillable =['main_photo', 'icon_photo', 'information_one', 'information_two', 'patner_photo', 'Location', 'address_1', 'address_2', 'Location_photo', 'emailaddress_photo','title','description','designing','progress_1','development','progress_2','optimization','progress_3','photo'];
}
