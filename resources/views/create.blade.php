<div class="mt-5 mb-5">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>$error</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['action'=>'App\Http\Controllers\PostController@store', 'method'=>'post',]) !!}
    {!! Form::label('title', 'Titre du post') !!}
    {!! Form::text('title') !!}
    <br>
    {!! Form::label('sub_title', 'Sous-titre du post') !!}


</div>
