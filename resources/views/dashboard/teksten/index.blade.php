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
                                     <a href="#"><h2>{{$tekst->title}}</h2></a>
                                </div>
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

                    <div class="panel-body text-center ">
                        {{$tekst->text}}
                    </div>


                </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="float-sm-left pt-3">
                        <small><em>
                                Letters:{{$tekst->characters}}<br>

                               Hoofdletters: {{$tekst->uppercase}}<br>

                               Kleinletters {{$tekst->uppercase}}<br>

                                Klinkers:{{$tekst->vowels}}<br>

                                Zinnen: {{$tekst->sentences}}<br>

                                Medeklinkers: {{$tekst->consonants}}<br>

                            </em></small>
                    </h6>
                </div>
            </div>

                <div class="panel">
                    <div class="panel-bottom">

                        <div class="text-center">
                            <div class="row">


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



