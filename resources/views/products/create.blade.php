@extends('layouts.dashboard')

@section('header')
    <i class="fas fa-box"></i> Criar produto
@endsection

@section('content')
    <form method="POST" action="/products">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <label class="w-100">
                    Nome
                    <input class="form-control" type="text" name="name" maxlength="256" required>
                </label>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <label class="w-100">
                    Quantidade em estoque
                    <input class="form-control" type="number" min="0" name="quantity" value="0">
                </label>
            </div>
            <div class="col-md-8">
                <label class="w-100">
                    Descrição
                    <input class="form-control" type="text" name="description" maxlength="1024">
                </label>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-6">
                <a class="btn w-100 btn-danger" href="/products">Voltar</a>
            </div>
            <div class="col-sm-6">
                <input type="submit" class="btn w-100 btn-success" value="Criar">
            </div>
        </div>
    </form>
@endsection

@section('footer')
    <p class="text-muted mb-0">Os dados são atualizados junto com a pagina.</p>
@endsection
