<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TerimaBarang extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['masterDataBarang'];

    public function masterDataBarang(): BelongsTo
    {
        return $this->belongsTo(MasterDataBarang::class);
    }
}
