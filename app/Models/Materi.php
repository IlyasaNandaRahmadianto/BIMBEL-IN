<?php

namespace App\Models;

use App\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materi extends Model
{
    protected $table = 'materi';
    protected $fillable = ['judul_materi', 'deskripsi_materi', 'id_kelas'];

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}