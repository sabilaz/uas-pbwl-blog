@extends('layouts.master')

@section('title-page')
<img src="assets/images/dashboard.png" width="20" height="20" class="icon-img-title" alt=""> 
<h4>Post</h4>
@endsection

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumbs-item">Pages <i class="fas fa-chevron-right"></i> </li>
    <li class="breadcrumbs-item active">Post</li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Add Post</h5></div>

            <form action="{{ route('admin.post') }}" method="post" class="form-cs">
                @csrf @method('put')
                <input type="hidden" name="id" value="{{ $post->id }}">

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Date</label>
                    <input type="date" name="date" value="{{ $post->date }}" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Slug</label>
                    <input type="text" name="slug" value="{{ $post->slug }}" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Text</label>
                    <input type="text" name="text" value="{{ $post->text }}" class="form-control-cs">
                </div>
                
                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Category</label>
                    <select name="category_id" class="form-control-cs">
                        <option>- Please Select -</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}" 
                                @if ($item->id == $post->category_id)
                                    selected
                                @endif>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="card-footer-cs">
                    <button type="submit" class="btn-cs btn-cs-success">Simpan</button>
                    <button class="btn-cs btn-cs-danger">Batal</button>
                </div>
            </form>

        </div>
    </div>
</div>    
@endsection