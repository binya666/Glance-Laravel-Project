<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPersonaModel extends Model
{
    use HasFactory;

    // Define the table name if it's not the default plural form of the model name
    protected $table = 'persona';

    // Specify the fields that can be mass assigned
    protected $fillable = [
        'name',
        'short_description',
        'imgpath'
    ];
}
