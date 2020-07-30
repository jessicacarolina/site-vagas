@extends('layouts.app')

@section('content')
    <h1 class="text-center" style="color: #2B2D42"><strong>Atualizar Vaga</strong></h1>
    <form action="{{route('admin.vacancies.update', ['vacancy'=> $vacancy->id])}}" class="form-group" style="margin-left: 20%; margin-right: 20%" method="post">
        @method("PUT")
        <div class="form-group">
            <label for="">Título da Vaga</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$vacancy->name}}">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" value="{{$vacancy->description}}"></textarea>
        </div>

        <div class="form-group">
            <label for="">Nível</label>
            <input type="text" name="level" class="form-control @error('level') is-invalid @enderror" value="{{$vacancy->level}}">
        </div>

        <div class="form-group">
            <label for="">Categoria</label>
            <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{$vacancy->category}}">
        </div>

        <div class="form-group">
            <label for="">Tecnologias</label>
            <input type="text" name="technology" class="form-control @error('technology') is-invalid @enderror" value="{{$vacancy->technology}}">
        </div>

        <div class="form-group">
            <label for="">Salário</label>
            <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror" value="{{$vacancy->salary}}">
        </div>


        <div>
            <a href="{{'vacancies'}}" class="btn btn-lg btn-success">Atualizar Vaga</a>
        </div>
    </form>
@endsection
