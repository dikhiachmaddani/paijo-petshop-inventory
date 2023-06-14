<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterDataBarang extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['brand', 'uom', 'category'];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function uom(): BelongsTo
    {
        return $this->belongsTo(Uom::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
