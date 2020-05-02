<div class="row row-cols-1 row-cols-md-3">
    @foreach($cardCategories as $category)
        @include('pages.home.blocks.item', ['category' => $category])
    @endforeach
</div>
