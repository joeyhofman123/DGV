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
                        <th>voorkomsten in totaal</th>
                        <th>klinkers</th>
                        <th>medeklinkers</th>
                    </tr>
                    <tbody>
                        @foreach ($woorden as $woord)
                        <tr>
<<<<<<< HEAD
                            <td>{{$woord->word}}</td>
                            <td>{{$woord->amount_in_texts }}</td>


                        </tr>
                    @endforeach
                     </tbody>
=======
                                <td><a href="{{ route('dashboard.tekstenmetwoorden', $woord->id) }}">{{ $woord->word }}</a></td>
                                <td>{{ $woord->amount_in_texts }}</td>
                                <td>{{ \App\Models\TextWord::where('word_id', $woord->id)->count() }}</td>
                                <td>{{ $woord->vowels }}</td>
                                <td>{{ $woord->consonants }}</td>
                            </tr>
                        @endforeach
                    </tbody>
>>>>>>> 78374ebf5c86d3c929c47e6fe8631a0c2e14e11d
                </table>
            </div>
        </div>
    </div>
@endsection