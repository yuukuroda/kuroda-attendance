<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;
    protected $fillable = [
        'attendance_id',
        'in',
        'out',
    ];

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
}
