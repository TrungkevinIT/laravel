@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Create Products</h3>
        </div>
        <div class="card-body">
            <form action="{{}}" method="POST" enctype="multipart/form-data">
                @csrf 

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Price:</label>
                        <input type="number" name="price" class="form-control" />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Img:</label>
                    <input type="file" name="image" class="form-control" />
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
