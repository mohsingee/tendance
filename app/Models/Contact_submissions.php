<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_submissions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'subject',
        'how_can_help',
        'how_can_help_message',
        'agreed',
        'created_at',
        'updated_at',
    ];
}
