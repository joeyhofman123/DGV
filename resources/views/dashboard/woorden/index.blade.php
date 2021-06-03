@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                woorden in tekst
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Woorden</th>
                        <th>Aantal</th>

                    </tr>
                    <tbody>
                    @foreach ($woorden as $woord)

                        <tr>
                            <td>{{$woord->word}}</td>
                            <td>{{ $woord->amount_in_texts }}</td>


                        </tr>
                    @endforeach
                     </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
