<DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.nav')

        @foreach($posts as $post)

            @include('partials.card', ['post' => $post])

        @endforeach

        @include('partials.footer')
    </body>
</html>
