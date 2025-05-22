<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // your code here
    protected $fillable = ['title', 'description', 'project_url', 'image', 'status'];
}