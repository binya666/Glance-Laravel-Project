<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminFaqsModel extends Model
{
    use HasFactory;
    protected $table = 'faqs';

    protected $fillable = [
        'faq_title',
        'description',
    ];
}
