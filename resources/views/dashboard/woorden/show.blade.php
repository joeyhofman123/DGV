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
                        <th>woord</th>
                        <th>voorkomsten in tekst</th>
                        <th>klinkers</th>
                        <th>medeklinkers</th>
                    </tr>
                    <tbody>
                        @foreach ($woorden as $woord)
                        <tr>
                                <td><a href="#">{{ $woord->word }}</a></td>
                                <td>{{ $woord->amount_in_texts }}</td>
                                <td>{{ $woord->vowels }}</td>
                                <td>{{ $woord->consonants }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection