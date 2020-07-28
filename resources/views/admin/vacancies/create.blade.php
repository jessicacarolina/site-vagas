@extends('layouts.app')

@section('content')
    <h1>Criar Vaga</h1>
    <form action="" class="form-group" method="post" enctype="multipart/form-data">
        @method("POST")
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label for="">Nome Vaga</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Level</label>
            <input type="text" name="level" class="form-control @error('level') is-invalid @enderror" value="{{old('level')}}">

            @error('level')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Categoria</label>
            <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{old('category')}}">

            @error('category')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Technologia</label>
            <input type="text" name="technology" class="form-control @error('technology') is-invalid @enderror">
            @error('technology')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Salário</label>
            <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror">
            @error('salary')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>


        <div>
            <button type="submit" class="btn btn-lg btn-success">Criar Vaga</button>
        </div>
    </form>
@endsection
