<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brand';
    protected $guarded = ['id'];

    public function masterDataBarang(): HasOne
    {
        return $this->hasOne(MasterDataBarang::class);
    }
}
