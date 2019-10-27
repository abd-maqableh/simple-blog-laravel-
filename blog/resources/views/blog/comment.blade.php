@extends('layouts/app')

{{--@extends('blog/index')--}}

@section('content')
{{--                {{dd($comments)}}--}}
        <div class="card" style="width: 18rem;">
          <div class="card-body">
        <h5 class="card-title">{{$post[0]->title}}</h5>
        <p class="card-text">{{$post[0]->description}}</p>

                    @foreach($comments as $comment)
                        <h6>Comments of post </h6>
            <p  class="card-link">{{$comment->name}}</p>
            <p class="card-link">{{$comment->comment}}</p>
                    @endforeach

    </div>
</div>
    @endsection

