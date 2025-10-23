@extends('layouts.admin')

@section('title', $viewData['title'])

@section('content')
    <div class="card">
        <div class="card-header">
            Quản lý sản phẩm
        </div>
        <a href="{{route("admin.home.createproduct")}}"><button>create</button></a> 
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
                            <td>{{ $product["id"] }}</td>
                            <td>{{ $product["name"] }}</td>
                            <td><button>Edit</button></td>
                            <td><button>Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection