<div class="col mb-4">
    <a class="category-link" href="{{route('product.show', ['product' => $product->id])}}">
        <div class="card h-100">
            <img width="347px" height="180px" src="{{asset('/storage/images/product_cards/'.$product->id . '/medium/'.$product->images[0])}}" alt="...">
{{--            <img width="347px" height="180px" src="{{$product->images[0]}}" class="card-img-top" alt="...">--}}
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text"><small class="text-muted">{{$product->updated_at->format('d-m-Y')}}</small></p>
            </div>
        </div>
    </a>
</div>
