@extends('layouts.master')

@section('title-page')
<img src="assets/images/dashboard.png" width="20" height="20" class="icon-img-title" alt=""> 
<h4>Category</h4>
@endsection

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumbs-item">Pages <i class="fas fa-chevron-right"></i> </li>
    <li class="breadcrumbs-item active">Category</li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Category Data</h5></div>

            <div class="row">
                <div class="col-6">
                    <a href="{{ route('admin.category.create') }}">
                        <button class="btn-cs btn-cs-success">Add</button>
                    </a>
                </div>
            </div>

            <div class="table-responsive" style="margin-top: 10px">
                <table class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Name</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                        <tr>
                            <td>{{ $loop->iteration + $skipped }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('admin.category.edit', $item->id) }}">
                                    <button class="btn-cs btn-cs-warning">Edit</button>
                                </a>

                                <form action="{{ route('admin.category') }}" method="post" style="display: inline-block">
                                    @csrf @method('delete')
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn-cs btn-cs-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>    
@endsection