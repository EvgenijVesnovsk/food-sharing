<div class="row-comment comment">
    <div class="head-comment">
        <small><strong class="user-comment">{{$comment->user->name}}</strong> {{$comment->created_at->format('d-m-Y')}}</small>
    </div>
    <p>{{$comment->comment}}</p>
</div>
