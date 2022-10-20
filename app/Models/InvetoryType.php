<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvetoryType extends Model
{
    use HasFactory;

    protected $table = 'invetory_types';

    protected $fillable = ['title', 'complekt','created_by', 'modified_by'];
}
