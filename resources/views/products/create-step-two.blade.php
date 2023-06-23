@extends('layout.default-sem-livewire')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{ route('products.create.step.two.post') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">Passo 2: Estado & Estoque</div>
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
                                    <label for="description">Estado</label><br/>
                                    <label class="radio-inline"><input type="radio" name="status" value="1" {{{ (isset($product->status) && $product->status == '1') ? "checked" : "" }}}> Activo</label>
                                    <label class="radio-inline"><input type="radio" name="status" value="0" {{{ (isset($product->status) && $product->status == '0') ? "checked" : "" }}}> Não Activo</label>
                                </div>

                                <div class="form-group">
                                    <label for="description">Estoque</label>
                                    <input type="text"  value="{{{ $product->stock ?? '' }}}" class="form-control" id="productAmount" name="stock"/>
                                </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <a href="{{ route('products.create.step.one') }}" class="btn btn-danger pull-right">Voltar</a>
                                </div>

                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-primary">Próximo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection