 @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['favorite.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorite.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-light btn-sm"]) !!}
        {!! Form::close() !!}
    @endif