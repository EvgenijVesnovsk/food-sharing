<tbody>
    @foreach($products as $product)
        @include('profiles.blocks.cards.blocks.item', ['product' => $product])
    @endforeach
</tbody>
