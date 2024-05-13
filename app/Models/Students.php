<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'des',
        'tid',
        'pid',
        'cid',
    ];
    public function teacher()
    {
        return $this->belongsTo(Teachers::class);
    }
    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }
    public function student()
    {
        return $this->belongsTo(Classes::class);
    }
}
