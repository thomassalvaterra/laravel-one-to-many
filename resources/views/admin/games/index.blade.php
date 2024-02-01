@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        @foreach ($games as $game)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ $game->title }}</div>
                <div class="card-body">{{ $game->description }}</div>
                <div class="card-body">{{ $game->thumb }}</div>
<<<<<<< HEAD
                <a type="button" class="btn btn-primary" href="{{ route('admin.game.show', $game->id) }}">Show</a>
=======
                <a type="button" class="btn btn-primary" href="{{ route('admin.game.show', $game->id) }}">Shoe</a>
>>>>>>> 23be3b45635e840f7dbb08dca535d126091ca20b
                <a type="button" class="btn btn-success" href="{{ route('admin.game.edit', $game->id) }}">Edit</a>
                <form action="{{ route('admin.game.destroy', $game->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    a {
        color: black;
        text-decoration: none
    }
</style>