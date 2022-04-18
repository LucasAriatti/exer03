<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\fornecedor;

class produto extends Model
{
    use HasFactory;
    protected $table = "produtos";

    function produtos()
    {
        return $this->belongsTo(fornecedor::class, 'id_fornecedor', 'id');
    }
}
