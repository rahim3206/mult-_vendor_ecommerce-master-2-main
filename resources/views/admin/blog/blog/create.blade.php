  @extends('admin.layouts.app')
  @section('title')
      Add Blog
  @endsection
  @section('admin_content')

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Add Blog</p>
              </div>
            </div>
            <div class="card-body">
              <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
              <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Main Image</label>
                      <input class="form-control dropify" type="file" name="image">
                      @error('image')
                        <span class="validated_txt">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Title</label>
                    <input class="form-control" type="text" placeholder="Product Title" name="title">
                      @error('title')
                          <span class="validated_txt">{{ $message }}</span>
                      @enderror
                  </div>
                </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Category</label>
                  <select class="form-control" name="category_id" id="category_id" data-url="{{route('admin.product.get_sub_categories')}}">
                      <option selected disabled>Select Category</option>
                      @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->title }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Sub Category</label>
                  <select class="form-control" name="sub_category_id" id="sub_category_append">

                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Status</label>
                  <select class="form-control" name="status" required >
                      <option selected disabled>Select Status</option>
                      <option value="1">Published</option>
                      <option value="0">Draft</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Description</label>
                  <textarea class="form-control"  name="description"></textarea>
                    @error('description')
                        <span class="validated_txt">{{ $message }}</span>
                    @enderror
                </div>
              </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Content</label>
                  <textarea class="summernote" name="content"></textarea>
                  </div>
                  @error('description')
                      <span class="validated_txt">{{ $message }}</span>
                    @enderror
                </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="checkbox" name="is_featured" class="" id="is_featured" value="1">
                  <label for="is_featured" class="form-control-label">Is Featured</label>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">SEO INFO</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Meta Title</label>
                    <input class="form-control" type="text" placeholder="Meta Title" name="meta_title">
                    @error('meta_title')
                      <span class="validated_txt">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Meta description</label>
                    <textarea class="form-control" type="text" placeholder="Meta description" name="meta_description"></textarea>
                    @error('meta_description')
                      <span class="validated_txt">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Meta Keywords</label>
                    <input class="form-control" type="text" placeholder="meta_keywords" name="meta_keywords">
                    @error('meta_keywords')
                      <span class="validated_txt">{{ $message }}</span>
                    @enderror
                  </div>
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
