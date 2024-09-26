<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Items extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'todo_items';

    protected $fillable = [
        'name',
        'is_done',
        'description',
        'date_done',
        'tags',
        'is_done_date'
    ];
    protected $casts = [
        'tags' => 'json',
        'is_done' => 'boolean',
    ];




}
