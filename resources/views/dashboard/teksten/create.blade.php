@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        nivuew tekst toevoegen
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.teksten.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">titel</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('titel') is-invalid @enderror" name="title" value="{{ old('title') }}" required  autofocus>
    
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">tekst</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="30" name="text" id="text">{{ old("text") }}</textarea> 
                                    <br>
                                    <p id="aantalchars">aantal characters: 0 / 500</p>
                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="text-white btn btn-success">
                                        tekst toevoegen
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>

    <script src="{{ @asset('js/charcounter.js') }}" defer></script>
@endsection