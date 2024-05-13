<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    protected $fillable = [

        'tname',
        'email',
        'subject',
        'bio',
        'schedule',
    ];
    public function students()
    {
        return $this->hasMany(Students::class);
    }
}
