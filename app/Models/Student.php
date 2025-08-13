<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'batch_id',
        'student_bio',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
    
    
}
