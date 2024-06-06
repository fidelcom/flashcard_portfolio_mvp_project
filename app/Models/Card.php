<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_id', 'question', 'answer', 'user_id'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
