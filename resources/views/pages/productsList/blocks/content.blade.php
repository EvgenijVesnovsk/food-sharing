<div class="row row-cols-1 row-cols-md-3">
    @foreach($products as $product)
        @include('pages.productsList.blocks.item', ['product' => $product])
    @endforeach
</div>
