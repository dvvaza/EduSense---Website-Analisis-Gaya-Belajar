<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    // Menentukan tabel yang digunakan, jika nama tabel tidak mengikuti konvensi plural
    protected $table = 'choices';

    // Kolom yang bisa diisi secara massal
    protected $fillable = ['choice_text', 'score', 'question_id'];

    // Relasi Many to One dengan model Question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
