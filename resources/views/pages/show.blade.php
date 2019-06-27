@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            Book details
        </div>
        <form>
            @crsf
            <div class="card-body">
                <h5 class="card-title">Book title</h5>
                <p class="card-text">Book author</p>
                <p class="card-text">Book content</p>
                <button href="#" class="btn btn-primary">Delete</button>
            </div>
        </form>
    </div>
@stop
