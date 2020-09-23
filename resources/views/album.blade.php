<DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.nav')

        <div class="container" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">

            @foreach($posts as $post)

                @include('partials.card', ['post' => $post])

            @endforeach

        </div>

        @include('partials.footer')
    </body>
</html>
