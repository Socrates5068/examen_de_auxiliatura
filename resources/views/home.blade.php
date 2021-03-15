@extends('layouts.app')

@section('content')
<h2 class="text-center my-5">Todos los productos</h2>
<div class="container">
    <div class="row mx-auto bg-white p-4 shadow">
        @foreach($productos as $producto)
            <div class="col-md-4 mb-4">
                <div class="card">
                    {{-- <img src="/storage/{{$producto->imagen}}" class="card-img-top"> --}}
                    <img src="https://fundaciongabo.org/sites/default/files/styles/850px/public/imagenes-falsas.jpg?itok=QYSpPSZw" class="card-img-top">
                    <div class="card-body shadow">
                        <h3 class="d-flex justify-content-center">{{$producto->telefono}}</h3>
                        <a href="{{ route('productos.show', ['producto' => $producto->id]) }}" 
                            class="btn btn-primary d-block mt-4 text-uppercase 
                            font-weight-bold btn-receta">Ver detalle</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{$productos->links()}}
    </div>
</div>
@endsection
