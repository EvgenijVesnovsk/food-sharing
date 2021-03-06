@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::open(['route' => 'profile.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="category">@lang('profiles.card_category')</label>
            {!! Form::select('card_category_id', $categories, '',['id'=>'category','class'=>'form-control']); !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">@lang('profiles.card_name')</label>
            {!! Form::text('name', '', ['id'=>'name', 'class'=>'form-control']); !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="description">@lang('profiles.card_description')</label>
            {!! Form::textarea('description', '', ['rows'=>7,'id'=>'description','class'=>'form-control']); !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="address">@lang('profiles.card_address')</label>
            {!! Form::text('address', Auth::user()->address, ['id'=>'address', 'class'=>'form-control']); !!}
        </div>
    </div>
    <div class="form-row align-items-start">

        <label for="images" style="cursor: pointer;">
            <img class="p-1" height="64" src="data:image/svg+xml;base64,PHN2ZyBpZD0i0KHQu9C+0LlfMSIgZGF0YS1uYW1lPSLQodC70L7QuSAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2E3YTdhNn08L3N0eWxlPjwvZGVmcz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik00Mi42NCA2Ni4zNkg4LjI3di01NEg3N3YyN2ExLjY0IDEuNjQgMCAxMDMuMjcgMFYxMC43M2ExLjY0IDEuNjQgMCAwMC0xLjY0LTEuNjRoLTcyQTEuNjQgMS42NCAwIDAwNSAxMC43M1Y2OGExLjY0IDEuNjQgMCAwMDEuNjQgMS42NGgzNmExLjY0IDEuNjQgMCAxMDAtMy4yN3oiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik00Mi42NCA1OS44MkgxNC44MnYtMTBsOC4zNS04LjM1IDExLjEzIDguMjFhMS42MyAxLjYzIDAgMDAyLjA3LS4xMWwxNy40Ni0xNS45NCA3LjExIDEwYTEuNjQgMS42NCAwIDEwMi42Ni0xLjlsLTguMTgtMTEuNUExLjYzIDEuNjMgMCAwMDUzIDMwTDM1LjE2IDQ2LjI1IDI0IDM4YTEuNjQgMS42NCAwIDAwLTIuMTMuMTZsLTcgN1YxOC45MWg1NS41OHYyMC40NWExLjY0IDEuNjQgMCAxMDMuMjcgMFYxNy4yN2ExLjY0IDEuNjQgMCAwMC0xLjY0LTEuNjRoLTU4LjlhMS42NCAxLjY0IDAgMDAtMS42NCAxLjY0djQ0LjE4YTEuNjQgMS42NCAwIDAwMS42NCAxLjY0aDI5LjQ2YTEuNjQgMS42NCAwIDEwMC0zLjI3eiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTcyLjA5IDQ1LjA5QTIyLjkxIDIyLjkxIDAgMTA5NSA2OGEyMi45MyAyMi45MyAwIDAwLTIyLjkxLTIyLjkxem0wIDQyLjU1QTE5LjY0IDE5LjY0IDAgMTE5MS43MyA2OGExOS42NiAxOS42NiAwIDAxLTE5LjY0IDE5LjY0eiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTczLjczIDU0LjkxaC0zLjI4djExLjQ1SDU5djMuMjhoMTEuNDV2MTEuNDVoMy4yOFY2OS42NGgxMS40NXYtMy4yOEg3My43M1Y1NC45MXpNMjMgMjguNzNhNi41NSA2LjU1IDAgMTA2LjU1LTYuNTVBNi41NSA2LjU1IDAgMDAyMyAyOC43M3ptOS44MiAwYTMuMjcgMy4yNyAwIDExLTMuMjctMy4yNyAzLjI4IDMuMjggMCAwMTMuMjcgMy4yN3oiLz48L3N2Zz4=" alt="">
        </label>

        {!! Form::file('images[]',
            [
            'id'=>'images',
            'class'=>'form-control',
            'style'=>'display: none',
            'multiple'=>true
            ]);
        !!}

    </div>
    <button type="submit" class="btn btn-primary">@lang('profiles.add')</button>
    <a href="{{route('profile.index')}}" class="btn btn-outline-info">@lang('profiles.cansel')</a>
{!! Form::close() !!}
