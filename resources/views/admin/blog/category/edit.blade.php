@extends('admin.layouts.app')
@section('title', 'Edit Blog Categories')
@section('admin_content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Blog Category</p>
            </div>
          </div>
          <div class="card-body">

            <form action="{{ route('admin.blog.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Title</label>
                            <input class="form-control" type="text" placeholder="Category Name" name="title" value="{{ $category->title }}">
                            @error('title')
                                <span class="validated_txt">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
              <button class="btn btn-primary btn-sm ms-auto float-end" type="submit">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
