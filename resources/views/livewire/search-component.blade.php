<div class="container mt-3">
    <div class="row">
        <div class="form-group">
            <label>Buscar</label>
            <input wire:model='search' wire:keyup='searchProduct' type="text" class="form-control" placeholder="Ingresa el nombre del producto">
            @if($showlist)
                <ul>
                    @if(!empty($results))
                        @foreach($results as $result)
                            <li wire:click='getProduct({{ $result->id }})'>{{ $result->name }}</li>
                        @endforeach
                    @endif
                </ul>
            @endif
          </div>
    </div>
    <div class="row">
        @if(!empty($product))

            <div class="col-md-6 mt-3">

                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                </div>

                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}">
                </div>

                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                </div>

        @endif
    </div>
</div>
