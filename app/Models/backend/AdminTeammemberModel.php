<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTeammemberModel extends Model
{
    use HasFactory;
    protected $table = "member";
    protected $primary_key = "id";
}
