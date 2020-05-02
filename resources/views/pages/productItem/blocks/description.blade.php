<h2 class="text-center mt-3">{{$product->name}}</h2>
<hr class="my-4">
@auth
    @include('pages.productItem.blocks.buttons')
@endauth
<p class="mt-3">{{$product->description}}</p>
