@extends('layouts.admin')

@section('title', $viewData['title'])

@section('content')
    <div class="card">
        <div class="card-header">
            Quản lý sản phẩm
        </div>
        <a href="{{ route('admin.home.createproduct') }}"><button>create</button></a>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product['id'] }}</td>
                            <td>{{ $product['name'] }}</td>
                            <td><button class="btn btn-primary">
                                    <i class="bi-pencil"></i>
                                </button></td>
                            <td>
                                <form action="{{route('admin.product.delete',['id' => $product->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
