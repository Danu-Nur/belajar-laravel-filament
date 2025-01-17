<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
