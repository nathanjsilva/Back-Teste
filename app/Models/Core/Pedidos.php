<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $primaryKey = 'id';

    protected $fillable   = [
        'nome_cliente',
        'documento_cliente',
        'nome_sanduiche',
        'qtd_sanduiche',
        'valor_sanduiche',
        'status_pedido',
        'valor_total'
    ];
}
