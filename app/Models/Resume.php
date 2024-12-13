<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    // Especifica qué campos pueden ser asignados masivamente
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'education', 
        'experience', 
        'skills',
        'languages',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
