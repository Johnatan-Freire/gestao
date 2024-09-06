<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provider;

class Product extends Model
{
    use HasFactory;

    public function provider()
{
    return $this->belongsTo(Provider::class, 'provider_id');
}
}
