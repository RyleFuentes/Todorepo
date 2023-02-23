<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todoModel extends Model
{
    use HasFactory;
    protected $table = 'list_item';
    protected $fillable = ['content', 'userID'];
}
