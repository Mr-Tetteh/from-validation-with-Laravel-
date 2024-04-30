@extends('layout.master')

@section('content')
    {{--    {{$errors}}--}}
    <div class="col-6 offset-sm-3">
        <h2 class="text-center">Create a post</h2>
        <form method="post" action="{{route('posts.store')}}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid  @enderror " id="title"
                       aria-describedby="titleFeedback" value="{{old('title')}}">
                <div id="titleFeedback" class="invalid-feedback">
                    @error('title')
                    {{$message}}
                    @enderror

                </div>
            </div>

            <div class="mb-3 ">
                <label for="body">Body</label>
                <textarea name="body" class="form-control @error('body') is-invalid @enderror " id="body"
                          aria-describedby="bodyFeedback">
                {{old('body')}}
            </textarea>
                <div id="bodyFeedback" class="invalid-feedback">
                    @error('body')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function (event) {
            axios.post('{{route('posts.store')}}', {title: '', body:  ''})
                .then(function (response) {
                    console.log(response)
                })
        })
    </script>
@endsection
