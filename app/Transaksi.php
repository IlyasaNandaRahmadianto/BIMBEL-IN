<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['id_user', 'tanggal', 'jenis', 'jumlah', 'status', 'bukti_tf'];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
