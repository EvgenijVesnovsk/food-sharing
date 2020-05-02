@php
    use App\Models\Comment;
    $comment = Comment::class;
@endphp

<div class="container mt-3">
    <div class="row-comment">
        <h2>@lang('productItem.comments') |@php echo count($product->comments) @endphp|
            @auth
                <div class="pull-right">
                    <a href="javascript:void(0);" id="addacomment"
                       class="btn btn-primary">@lang('productItem.addComment')</a>
                </div>
            @endauth
        </h2>
    </div>
    @auth
        <div class="row-comment" id="addcomment" style="display: none;">
            <form onsubmit="return false">
                <textarea id="textComment" class="form-control"
                          placeholder="@lang('productItem.commentContent')"></textarea><br/>
                <button id="commentStore" class="btn btn-primary">@lang('productItem.sendComment')</button>
            </form>
        </div>
    @endauth

    <hr class="hr-comment">
    <div id="comments">
        @foreach($product->comments as $comment)
            @include('pages.productItem.blocks.comments.item', ['comment' => $comment])
        @endforeach
    </div>
    <hr class="hr-comment">
</div>
