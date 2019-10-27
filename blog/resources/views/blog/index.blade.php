@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
{{--                    {{dd($posts)}};--}}
{{--            {{dd($comments)}}--}}

        @foreach($posts as $post)
                <div class="col-md-8">

                <div >
                        <div >
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->description}}</p>
{{--                          <p class="card-text">{{$post->id}}</p>--}}

                        </div>
                </div>
                </div>


                    <div class="row">
                        <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
                            {{ Form::open(['route' => ['comment.store', $post->id], 'method' => 'POST']) }}

                            <div class="row">
                                <div class="col-md-12">
                                    {{ Form::label('name', "Name:") }}
                                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                                </div>

                                <div class="col-md-12">
                                    {{ Form::label('comment', "Comment:") }}
                                    {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}
                                    {{Form::hidden('post_id',$post->id)}}
                                    {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                                </div>
                            </div>

                            {{ Form::close() }}
                        </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection
