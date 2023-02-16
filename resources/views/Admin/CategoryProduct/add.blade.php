@extends('admin-layout')
@section('content')
    <div class="col-md-8 ml-4">
        <div class="card mx-auto">
            <form method="post" action="{{route('categoryProduct.store')}}">
                @csrf
                <div class="card-header">
                    <h4 class="card-title text-center">
                        Add Category Product
                    </h4>
                </div>
                <div class="card-content">
                    <div class="form-group">
                        <label>Name category product</label>
                        @if($errors->has('name'))
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                        <input type="text" name="name" placeholder="Name" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        @if($errors->has('slug'))
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('slug')}}
                            </div>
                        @endif
                        <input type="text" placeholder="slug" name="slug" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Parent id</label>
                            <select name="parent_id" class="selectpicker" data-style="btn  btn-block" title="Single
                            Select"
                                    data-size="7" tabindex="-98">
                                <option class="bs-title-option" value="0">Parent</option>
                                {!! $data !!}}
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-fill btn-info">Submit</button>
                </div>
            </form>
        </div> <!-- end card -->
    </div>
@endsection
