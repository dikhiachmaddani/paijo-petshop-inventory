<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class KeluarBarang extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['users', 'masterDataBarang'];

    public function masterDataBarang(): BelongsTo
    {
        return $this->belongsTo(MasterDataBarang::class, 'master_data_barang_id');
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
