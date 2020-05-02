<div class="col mb-4">
    <a class="category-link" href="{{route('category.list', ['category' => $category->id])}}">
        <div class="card h-100">
            <img width="347px" height="180px" src="{{asset('/storage/'.$category->image)}}" class="card-img-top"
                 alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$category->name}}</h5>
                <p class="card-text">{{$category->description}}</p>
            </div>
        </div>
    </a>
</div>
