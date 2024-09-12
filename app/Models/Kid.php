<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'grade_id', 'phone', 'birth_date', 'points', 'address', 'notes'];

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }
}
