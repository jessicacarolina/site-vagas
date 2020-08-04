@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

    <h2 class="text-center" style="color: #2B2D42"><strong>Criar Vaga</strong></h2>
    <form action="" class="form-group" style="margin-left: 20%; margin-right: 20%" method="post">
        @method("POST")
        <div class="form-group">
            <label for="name">Título da Vaga</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" autofocus>

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" cols="30" rows="7" class="form-control @error('description') is-invalid @enderror" ></textarea>

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="level">Nível</label>
                    <input type="text" id="level" name="level" class="form-control @error('level') is-invalid @enderror" value="{{old('level')}}">

                    @error('level')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category">Categoria</label>
                    <input type="text" id="category" name="category" class="form-control @error('category') is-invalid @enderror" value="{{old('category')}}">

                    @error('category')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="technology">Tecnologias</label>
            <input type="text" id="technology" name="technology" class="form-control @error('technology') is-invalid @enderror">
            @error('technology')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="salary">Salário</label>
            <input type="text" id="salary" name="salary" class="form-control @error('salary') is-invalid @enderror">
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
