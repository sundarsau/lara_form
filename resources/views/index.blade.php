@extends('layouts.master')
@section('main-content')
<div class="container">
    <div class="text-end mt-5 mb-3">
        <a href="{{ route('category.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Product Category</a>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    

<div class="table-responsive">
    <h2>Product Category List</h2>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>Serial No.</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($cat as $index=>$row )
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->descr}}</td>
                    <td>
                        <a href={{ route('category.edit', $row->id) }} class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                    </td>
                </tr>
                    
                @empty
                    <tr>
                        <td colspan="3">No Data found</td>
                    </tr>
                @endforelse
            </tbody>
    </table>
</div>
</div>

@endsection
