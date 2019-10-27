@extends('layouts/app')

@section('content')

            <div class="row container">
                <div class="col-md-8">
                    <h1>Create New Post</h1>
                    <hr>
                    {{ Form::open(['route' => 'blog.store']) }}

                        {{Form::label('title','Title:')}}
                       {{Form::text('title',null,array('class'=>'form-control'))}}
                    {{Form::label('description','description:')}}
                     {{Form::textarea('description',null,array('class'=> 'form-control'))}}

                    {{Form::submit('Create Post',array('class'=> 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;'))}}

                    {{ Form::close() }}
                </div>
            </div>

    @endsection
{{--<form class="container" method="post" action="{{route('blog.store')}}">--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <label for="title">create post</label>--}}
{{--        <input type="text"  name="title" class="form-control"  placeholder="title of post">--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="description">description</label>--}}
{{--        <input type="text" class="form-control" name="description" placeholder="Enter your description ">--}}
{{--    </div>--}}

{{--    <button type="submit" name="submit" class="btn btn-primary">Submit</button>--}}
{{--</form>--}}
