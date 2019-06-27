@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            Book details
        </div>
        <form>
            @csrf
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->author }}</p>
                <p class="card-text">{{ $book->isbn }}</p>
                <button href="#" class="btn btn-primary">Delete</button>
            </div>
        </form>
    </div>
@stop
