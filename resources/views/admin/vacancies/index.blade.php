@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    <div class="row">
        <style>
            .btn:hover{
                cursor: pointer;
                opacity: 0.8;
            }
            h2 {
                color: #2B2D42;
                margin-left: 10%;
            }
        </style>
        @auth
            <a href="create" class="btn btn-lg" style="height: 45px; width: 130px; margin-left: 4%; background-color: #1F7A8C; color: #fff"><strong>Criar Vaga</strong></a>
        @endauth
        <h2><strong>Listagem de vagas</strong></h2>
    </div>
        <div class="container text-center">
            <div class="row text-center">
                @foreach($vacancies as $vacancy)
                    <div class="col-md-4 text-center" style="margin-top: 4%">
                        <div class="card  md-4 text-center" style="">
                            <h3 style="color: #2B2D42; margin-top: 15px" class="text-center"><strong>{{$vacancy->name}}</strong></h3>

                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col-md-6 text-center" style="margin-top: -6%; margin-left: -10%">
                                        <p style="color: #2B2D42"><img src="{{asset('assets/img/location.svg')}}" alt=""> City</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 text-center" style="margin-top: 5%">
                                        <button class="btn btn-outline-info" style="border-radius: 8px" >Status</button>
                                    </div>
                                    <div class="col-md-6 text-center"  style="margin-top: 5%">
                                        <a href="#" style=" border-radius: 23px; background-color: #1F7A8C; color: #fff" class="btn">Ver detalhes</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endsection
