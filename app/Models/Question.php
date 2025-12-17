<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // Menentukan tabel yang digunakan, jika nama tabel tidak mengikuti konvensi plural
    protected $table = 'questions';

    // Kolom yang bisa diisi secara massal
    protected $fillable = ['question_text'];

    // Relasi One to Many dengan model Choice
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
