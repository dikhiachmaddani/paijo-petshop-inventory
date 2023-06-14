<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $guarded = ['id'];

    public function masterDataBarang(): HasOne
    {
        return $this->hasOne(MasterDataBarang::class);
    }
}
