<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('homepage.home')</a></li>
        <li class="breadcrumb-item"><a href="{{route('category.list', ['category' => $product->category->id])}}">{{$product->category->name}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
    </ol>
</nav>
