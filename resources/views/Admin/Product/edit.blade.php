@push('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endpush
@extends('admin-layout')
@section('content')
    <div class="col-md-8 ml-4">
        <div class="card mx-auto">
            <form method="post" action="{{route('adminProduct.update',$data['id'])}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-header">
                    <h4 class="card-title text-center">
                        Update Products
                    </h4>
                </div>
                <div class="card-content">
                    <div class="form-group">
                        <label>Product name</label>
                        @if($errors->has('title'))
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('title')}}
                            </div>
                        @endif
                        <input type="text" name="title" value="{{$data['title']}}" placeholder="Name"
                               class="form-control"
                               autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        @if($errors->has('price'))
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('price')}}
                            </div>
                        @endif
                        <div class="input-group ">
                            <span class="input-group-addon">$</span>
                            <input type="number" name="price" value="{{$data['price']}}" class="form-control">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="feature_image_path">Feature image</label>
                        @if($errors->has('feature_image_path'))
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('feature_image_path')}}
                            </div>
                        @endif
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="feature_image_path" id="feature_image">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                {!! $data['feature_image_path'] !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gallery_image_id">Gallery image</label>
                        @if($errors->has('gallery_image_id'))
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('gallery_image_id')}}
                            </div>
                        @endif
                        <div class="input-group mb-3">
                            <input type="file" multiple class="form-control" name="gallery_image_id[]"
                                   id="gallery_image_id">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                {!! $data['gallery_image_id'] !!}
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        @if($errors->has('content'))
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('content')}}
                            </div>
                        @endif
                        <div class="form-group">
                            <textarea name="content" class="ckeditor form-control">{{$data['content']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">Description</label>
                        @if($errors->has('desc'))
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('desc')}}
                            </div>
                        @endif
                        <div class="form-group">
                            <textarea class="ckeditor form-control" name="desc">{{$data['desc']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Tags products</label>
                            <select name="product_tags[]" class="form-control productTags"
                                    multiple="multiple"></select>

                        </div>
                    </div>
                    <input type="hidden" id="valueTagsProduct" value="{{$data['product_tags']}}">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="selectpicker" data-style="btn  btn-block" title=""
                                    value="{{$data['category_id']}}"
                                    data-size="7" tabindex="-98">
                                <option class="bs-title-option" value="0">Parent</option>
                                {!! $data['options'] !!}}
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-fill btn-info">Submit</button>
                </div>
            </form>
        </div> <!-- end card -->
    </div>
@endsection
@push('js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        let value = $('#valueTagsProduct').val();
        $('.productTags').select2({
            placeholder: 'write tag ',
            tags: true,
            data: JSON.parse(value),
            tokenSeparators: [',', ' ']
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });

    </script>
@endpush
