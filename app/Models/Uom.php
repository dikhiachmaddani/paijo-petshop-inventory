<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Uom extends Model
{
    use HasFactory;

    protected $table = 'uom';
    protected $guarded = [];

    public function masterDataBarang(): HasOne
    {
        return $this->hasOne(MasterDataBarang::class);
    }
}
