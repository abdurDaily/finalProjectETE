<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceStore extends Model
{
    use HasFactory;
    
    public function attendance(){
        return $this->belongsTo(Attendance::class);
    }
    
}