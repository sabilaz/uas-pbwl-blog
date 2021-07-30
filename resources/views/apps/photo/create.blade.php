@extends('layouts.master')

@section('title-page')
<img src="assets/images/dashboard.png" width="20" height="20" class="icon-img-title" alt=""> 
<h4>Photo</h4>
@endsection

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumbs-item">Pages <i class="fas fa-chevron-right"></i> </li>
    <li class="breadcrumbs-item active">Photo</li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Add Photo</h5></div>

            <form action="{{ route('admin.photo') }}" method="post" class="form-cs">
                @csrf @method('post')
                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Title</label>
                    <input type="text" name="title" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Date</label>
                    <input type="date" name="date" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Text</label>
                    <input type="text" name="text" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Post Title</label>
                    <select name="post_id" class="form-control-cs">
                        <option>- Please Select -</option>
                        @foreach ($post as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="card-footer-cs">
                    <button class="btn-cs btn-cs-success">Simpan</button>
                    <button class="btn-cs btn-cs-danger">Batal</button>
                </div>
            </form>

        </div>
    </div>
</div>    
@endsection