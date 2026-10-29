<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mercadorias', function (Blueprint $table) {
            $table->id();
            $table->string('mercadoria');
            $table->text('descricao')->nullable();
            $table->string('marca');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->decimal('preco_custo', 10, 2);
            $table->decimal('preco_venda', 10, 2);
            $table->unsignedInteger('qtd_disponivel')->default(0);
            $table->unsignedInteger('min_estoque')->default(0);
            $table->date('validade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mercadorias');
    }
};
