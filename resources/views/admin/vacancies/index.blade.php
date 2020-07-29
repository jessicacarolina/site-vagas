@extends('layouts.app')

@section('content')
    <div class="row">
        <a href="create" class="btn btn-lg btn-success" style="margin-left: 7%">Criar Vaga</a>
        <h1 style="margin-left: 20%"><strong>Listagem de vagas</strong></h1>
    </div>
        <div class="container text-center">
            <div class="row text-center">
                @foreach($vacancies as $vacancy)
                    <div class="col-md-4 text-center" style="margin-top: 4%">
                        <div class="card  md-4 text-center" style="">
                            <h1 class="text-center"><strong>{{$vacancy->name}}</strong></h1>
                            <div class="card-body text-center">
                                <div class="row">
                                    <h5 class="text-center">
                                        <strong>Nível: </strong>{{$vacancy->level}}
                                        <strong>Categoria: </strong>{{$vacancy->category}}
                                        <strong>Salário: </strong>R$ {{$vacancy->salary}}</h5>
                                </div>
                                <h5 class="card-title"><strong>Descrição:</strong> {{$vacancy->description}}</h5>
                                <button class="btn btn-dark" type="submit"><strong>{{$vacancy->technology}}</strong></button> <br>
                                <a href="#" style="margin-top: 4%" class="btn btn-primary">Ver detalhes</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endsection
