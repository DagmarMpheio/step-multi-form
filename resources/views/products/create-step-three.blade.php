@extends('layout.default-sem-livewire')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <form action="{{ route('products.create.step.three.post') }}" method="post">
                    {{ csrf_field() }}

                    <div class="card">
                        <div class="card-header">Passo 3: Rever Detalhes</div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>Nome do Produto:</td>
                                    <td><strong>{{ $product->name }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Quantidade:</td>
                                    <td><strong>{{ $product->amount }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Estado:</td>
                                    <td><strong>{{ $product->status ? 'Activo' : 'Não Activo' }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Descrição:</td>
                                    <td><strong>{{ $product->description }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Estoque:</td>
                                    <td><strong>{{ $product->stock }}</strong></td>
                                </tr>
                            </table>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <a href="{{ route('products.create.step.two') }}"
                                        class="btn btn-danger pull-right">Voltar</a>
                                </div>

                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
