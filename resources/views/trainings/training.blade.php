


@extends("layouts.master")

@section("content")


    <div class="col-sm-8 blog-main">

            <div class="blog-post">

                @auth
                <form method="post">
                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-primary" value="Register">Registreeru</button>
                </form>


                @endauth


                <h1 class=blog-post-title">{{ $training->title }}</h1>
                {{ $training->body }}
            </div>
        @if($if == 1)
            <div class="alert alert-success" role="alert">
                Olete registreeritud!
            </div>

        @elseif($if == 0)

        @endif

    </div>






@endsection

