<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends BaseModel
{
    use HasFactory;
    protected $fillable = ['name', 'descripcion', 'completed'];
}
