<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Batch extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'year_start',
        'year_end',
    ];

    
    public function users()
    {
        return $this->hasMany(User::class); 
    }
    public function getFullYearAttribute()
    {
        return "{$this->year_start} - {$this->year_end}";
    }
    
}
