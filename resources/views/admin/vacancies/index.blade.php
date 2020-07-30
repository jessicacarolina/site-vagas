@extends('layouts.app')

@section('content')
    <div class="row">
        <style>
            .btn:hover{
                cursor: pointer;
                opacity: 0.8;
            }
        </style>
        <a href="create" class="btn btn-lg" style="margin-left: 4%; background-color: #1F7A8C; border-radius: 12px; color: #fff"><strong>Criar Vaga</strong></a>
        <h1 style="margin-left: 20%; color: #2B2D42"><strong>Listagem de vagas</strong></h1>
    </div>
        <div class="container text-center">
            <div class="row text-center">
                @foreach($vacancies as $vacancy)
                    <div class="col-md-4 text-center" style="margin-top: 4%">
                        <div class="card  md-4 text-center" style="">
                            <h2 class="text-center"><strong>{{$vacancy->name}}</strong></h2>

                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col-md-6 text-center" style="margin-top: -6%; margin-left: -10%">
                                        <h6 style="color: #2B2D42"><img src="{{asset('assets/img/location.svg')}}" alt=""> City</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 text-center" style="margin-top: 5%">
                                        <button class="btn btn-outline-info" style="border-radius: 8px" >Status</button>
                                    </div>
                                    <div class="col-md-6 text-center"  style="margin-top: 5%">
                                        <a href="#" style="border-radius: 23px; background-color: #1F7A8C; color: #fff" class="btn">Ver detalhes</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endsection
