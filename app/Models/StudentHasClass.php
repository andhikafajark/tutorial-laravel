<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentHasClass extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function students()
    {
        return $this->belongsTo(Student::class);
    }

    public function homeroom()
    {
        return $this->belongsTo(HomeRoom::class);
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }
}
