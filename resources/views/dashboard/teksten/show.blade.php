@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
               <p>{{ $tekst->title }}</p>
               <button class="btn btn-success">statistieken</button>
            </div>
            <div class="card-body">
                {{ $tekst->text }}
            </div>
        </div>
    </div>
@endsection