<?php

use App\Livewire\Mercadoria\MercadoriaCreate;
use App\Livewire\Mercadoria\MercadoriaIndex;
use App\Livewire\Movimentacao\MovimentacaoCreate;
use App\Livewire\Movimentacao\MovimentacaoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/mercadoria', MercadoriaIndex::class);
Route::get('/mercadoria/create', MercadoriaCreate::class);
Route::get('/movimentacao', MovimentacaoIndex::class);
Route::get('/movimentacao/create', MovimentacaoCreate::class);