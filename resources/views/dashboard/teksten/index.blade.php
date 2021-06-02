@extends('layouts.dashboard')

@section('content')
<div class="container">
    @foreach($teksten as $tekst)
    <div class="row ml-5 mt-5 border-bottom border-dark pb-5">
        <div class="col-md-1 ml-5"></div>
        <div class="col-md-6 ml-5">
                <div class="panel text-center table-dark">
                            <div class="row">
                                <div class="col-sm-9">
                                     <a href="{{ route('dashboard.woorden.show', $tekst->id) }}"><h2>{{$tekst->title}}</h2></a>
                                </div>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-{{ $tekst->id }}">
                                    Statistieken
                                </button>
                                <div class="col-sm-9">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="float-sm-right">
                                        <small><em>
                                                Posted at: {{$tekst->created_at}}
                                            </em></small>
                                    </h6>
                                </div>
                            </div>

                    <div class="panel-body text-center">
                        {{$tekst->text}}
                    </div>


                </div>


            <div class="modal fade" id="modal-{{ $tekst->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Statistieken</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="modal-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="float-sm-left pt-3">
                                        <small><em>
                                                  Tekens: {{$tekst->characters}}
                                                <br>
                                                  Hoofdletters: {{$tekst->uppercase}}
                                                <br>
                                                  Kleinletters {{$tekst->uppercase}}
                                                <br>
                                                  Klinkers: {{$tekst->vowels}}
                                                <br>
                                                 woorden: {{ sizeOf(explode(' ', $tekst->text)) }}
                                                 <br>
                                                 Leestekens: {{ preg_match_all("/[\.]|[\,]|[\,]|[\!]|[\?]|[\:]|[\;]/", $tekst->text) }}
                                                 <br>
                                                 Zinnen: {{$tekst->sentences}}
                                                <br>
                                                 Medeklinkers: {{$tekst->consonants}}

                                            </em></small>
                                    </h6>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endforeach

<div class="container">\
    <div class="d-flex justify-content-center">
        {{ $teksten->links() }}
    </div>
</div>
@endsection



