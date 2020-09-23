<DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.nav')

        <div class="container" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; padding-top: 60px;">

            @if (isset($posts))

                @foreach($posts as $post)

                    @include('partials.card', ['post' => $post])

                @endforeach

            @else

                <h2>No post(s) !</h2>

            @endif

        </div>

        @include('partials.footer')
    </body>
</html>
