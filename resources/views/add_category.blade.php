@extends('layouts.master')
@section('main-content')
    <div class="container">
        <div class="text-end"><a href="{{ route('category.index') }}"><button class="btn btn-primary"><i class="fa fa-list"></i>
                    Product Category List</button></a></div>
        <h2>{{ isset($edit->id) ? 'Update Product Category' : 'Add Product Category' }}</h2>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (isset($edit->id))
            <form class="form1" method="post" action="{{ route('category.update', $edit->id) }}">
                @method('PUT')
            @else
                <form class="form1" method="post" action="{{ route('category.store') }}">
        @endif
        @csrf
        <div class="form-group col-md-12 mb-3">
            <label for="">Category Name</label>
            <input class="form-control mt-2" type="text" name="name" placeholder="Enter Category Name"
                value="{{ old('name', isset($edit->id) ? $edit->name : '') }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-12 mb-3">
            <label for="">Description</label>
            <input class="form-control mt-2" type="text" name="descr" placeholder="Enter Description"
                value="{{ old('descr', isset($edit->id) ? $edit->descr : '') }}">
            @error('descr')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
        <a class="btn btn-danger" href="{{ route('category.index') }}">Cancel</a>
        </form>
    </div>
@endsection
