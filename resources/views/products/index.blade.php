@extends('layout.default-sem-livewire')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Gerir Produto</div>
                    <div class="card-body">
                        <a href="{{ route('products.create.step.one') }}" class="btn btn-primary pull-right">Novo Produto</a>

                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome do Produto</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Estoque</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ $product->amount }}</td>
                                        <td>{{ $product->status ? 'Activo' : 'Não Activo' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
