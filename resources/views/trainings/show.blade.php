@extends("layouts.master")

@section("content")


    <div class="col-sm-8 blog-main">
        @foreach($trainings as $training)
            <div class="blog-post">
                <h1 class="blog-post-title"><a href="trainings/{{ $training->id }}"> {{ $training->title }}</a></h1>

            </div>
        @endforeach

    </div>




@endsection