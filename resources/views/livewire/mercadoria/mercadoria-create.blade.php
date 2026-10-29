<div class="container py-4">
    <form wire:submit.prevent="create">
        <div class="grid grid-auto-flow-row" style="--bs-columns: 3">
            <div class="mb-3 ">
                <label for="mercadoria" class="form-label">Mercadoria</label>
                <input type="text" class="form-control" wire:model='mercadoria'>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="textarea" class="form-control" wire:model='descricao'>
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" wire:model='marca'>
            </div>
            <div class="mb-3">
    <label for="categoria_id" class="form-label">Categoria</label>

    <select class="form-control" id="categoria_id" wire:model="categoria_id">
        <option value="">Escolha uma categoria...</option>

        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">
                {{ $categoria->categoria }}
            </option>
        @endforeach
    </select>
</div>
            <div class="mb-3 ">
                <label for="mercadoria" class="form-label">Mercadoria</label>
                <input type="text" class="form-control" wire:model='mercadoria'>
            </div>
        </div>
        <button type="submit" class="btn-solid theme-primary">Submit</button>
    </form>
</div>
</div>