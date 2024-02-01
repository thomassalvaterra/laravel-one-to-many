@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        @foreach ($games as $game)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ $game->title }}</div>
                <div class="card-body">{{ $game->description }}</div>
                <div class="card-body">
                    <img src="{{ $game->thumb }}" alt="image">
                </div>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{ $game->type ? $game->type->price : 'senza prezzo' }}
                </h6>
                <a type="button" class="btn btn-primary" href="{{ route('admin.game.show', $game->id) }}">Show</a>
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

    img {
        width: 400px;
        height: 300px;
    }
</style>