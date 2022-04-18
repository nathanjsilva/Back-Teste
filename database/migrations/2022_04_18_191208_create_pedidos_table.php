<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cliente', 100);
            $table->string('documento_cliente',14);
            $table->string('nome_sanduiche', 50);
            $table->string('qtd_sanduiche', 10);
            $table->string('status_pedido', 10);
            $table->decimal('valor_sanduiche', 12,2);
            $table->decimal('valor_total', 12,2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
