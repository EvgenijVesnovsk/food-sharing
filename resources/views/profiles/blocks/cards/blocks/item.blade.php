<tr>
    <td width="10%">
                <img width="60px" src="{{asset('/storage/images/product_cards/'.$product->id . '/small/'.$product->images[0])}}" alt="...">
{{--        <img width="60px" src="{{$product->images[0]}}" alt="...">--}}
    </td>
    <td width="55%">{{$product->name}}</td>
    <td width="25%">{{$product->category->name}}</td>
    <td width="10%">
        <a href="{{route('profile.edit', ['profile' => $product->id])}}" title="" class="text-decoration-none"> <i class="far fa-edit"></i> </a>
        <form style="display: inline-block"
              action="{{route('profile.destroy', ['profile' => $product->id])}}"
              method="post">
            @csrf
            @method('DELETE')
            <button type="button" class="linkButton">
                <a href="javascript:void(0);">
                    <i class="far fa-trash-alt"></i>
                </a>
            </button>
        </form>
    </td>
</tr>
