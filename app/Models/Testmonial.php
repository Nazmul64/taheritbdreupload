<?php declare(strict_types=1); 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testmonial extends Model
{
    use HasFactory;
    protected $fillable = [
    'testmonial', 'clientsay', 'description_1', 'description_2', 'name', 'title_1', 'photo',
];
}
