@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    <style>
        .details {
            margin-top: 3%;
            margin-left: 10%;
        }
    </style>
    <div class=" details">
        <div class="row" style="color: #2B2D42">
            <div class="col-md-12 text-center">
                <h2><strong>Detalhes de vagas</strong></h2>
                <br>
            </div>
        </div>

        <div class="row" style="color: #2B2D42; margin-top: 15px">
            <div class="col-md-5 float-left">
                <h3><strong>{{$vacancy->name}}</strong></h3>
            </div>
            <div class="col-md-3">
                <p><img src="{{asset('assets/img/location.svg')}}" alt=""> City</p>
            </div>
            <div class="col-md-3 float-right">
                <p><strong>Salário: R$ </strong>{{number_format($vacancy->salary, '2', ',', '.')}}</p>
            </div>
        </div>

        <div class="row" style="color: #2B2D42; margin-top: 15px">
            <div class="col-md-3">
                <h5><strong>Nível/</strong>{{$vacancy->level}}</h5>
            </div>
            <div class="col-md-3">
                <h5><strong>Categoria/</strong>{{$vacancy->category}}</h5>
            </div>
            <div class="col-md-6">
                <h5><strong>Tecnologia/</strong>{{$vacancy->technology}}</h5>
            </div>
        </div>

        <div class="row text-justify" style="color: #2B2D42; margin-top: 15px">
            <div class="col-md-11">
                <br>
                <h5><strong>Descrição: </strong></h5>
                <h5 style="margin-top: 15px">{{$vacancy->description}}</h5>
            </div>
        </div>
        <a href="#" class="btn btn-lg" style="height: 45px; width: 180px; background-color: #1F7A8C; color: #fff; margin-top: 25px"><strong>Candidatar-se</strong></a>
    </div>




@endsection
