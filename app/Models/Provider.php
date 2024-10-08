<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['name', 'uf', 'cnpj', 'email'];
}
