@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                alle woorden
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>woord</th>
                        <th>voorkomsten in teksten</th>
                        <th>klinkers</th>
                        <th>medeklinkers</th>
                    </tr>
                    <tbody>
                        @foreach ($woorden as $woord)
                        <tr>

                                <td><a href="{{ route('dashboard.tekstenmetwoorden', $woord->id) }}">{{ $woord->word }}</a></td>
                                <td>{{ \App\Models\TextWord::where('word_id', $woord->id)->count() }}</td>
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
