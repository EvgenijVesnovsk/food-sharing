<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($product->images as $image)
            @include('pages.productItem.blocks.carousel.indicator', ['$image' => $image])
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($product->images as $image)
            @include('pages.productItem.blocks.carousel.item', ['product' => $product, 'image' => $image])
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
