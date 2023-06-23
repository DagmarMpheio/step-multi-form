@extends('layout.default-sem-livewire')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{ route('products.create.step.one.post') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">Passo 1: Informações Básicas</div>
                        <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="title">Nome do Produto:</label>
                                    <input type="text" value="{{ $product->name ?? '' }}" class="form-control" id="taskTitle"  name="name">
                                </div>

                                <div class="form-group">
                                    <label for="description">Quantidade:</label>
                                    <input type="text"  value="{{{ $product->amount ?? '' }}}" class="form-control" id="productAmount" name="amount"/>
                                </div>

                                <div class="form-group">
                                    <label for="description">Descrição:</label>
                                    <textarea type="text"  class="form-control" id="taskDescription" name="description">{{{ $product->description ?? '' }}}</textarea>
                                </div>
                        </div>

    
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Próximo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection