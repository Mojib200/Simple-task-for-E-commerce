@extends('dashbroad')

@section('content')
<div class="container">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)"> Category Insert/View </a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-4">
            @can('add_category')
            <div class="card-header">
                <h1>Add Category</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('category.insert') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                      <label for=""class="form-label">Category Name </label>
                        <input type="text" class="form-control" name="category_name">
                    </div>
                    @error('category_name')
                    <div class="alert alert-danger mb-3">{{$message}}
                    </div>
                    @enderror
                    <div class="mb-3">
                      <label for=""class="form-label">Category Image </label>
                        <input type="file" class="form-control" name="category_image">
                    </div>
                    @error('category_image')
                    <div class="alert alert-danger mb-3">{{$message}}
                    </div>
                    @enderror
                    <div class="mb-3 pt-2">
                     <button class="btn btn-primary" type="submit">Add Category</button>
                    </div>
                </form>
        
            </div>
            @endcan
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h1  class="text-center">View Category</h1>

                </div>
                <div class="card-body">
                    <table class="table table-striped" >
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Picture</th>
                            <th>Added By</th>
                            <th>Action</th>
                            <th>Create At</th>
                        </tr>
                        @foreach ($categorys as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->category_name}}</td>
                            <td><img src="{{ asset('/categoryimage') }}/{{$category->category_image}}"
                                alt="" width="50" height="50"></td>
                            <td>{{$category->relation_to_user->name}}</td>
                            <td>
                       <div class="mb-2">  @can('category_delete')
                        <a href="{{ route('category.delete',$category->id)}}"class="btn btn-danger">Delete</a>
                        @endcan
                    </div> </td>
                            <td>{{$category->created_at}}</td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
   
@endsection