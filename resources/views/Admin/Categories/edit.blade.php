@extends('layouts.app')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Category Type</li>
            </ol>
        </nav>
        <div class="alert alert-primary" role="alert">
            Edit category type name.
        </div>

        <form method="post" action="{{route('edit.category.type')}}" class="col-lg-8" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                @if($errors->has('name'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('name')}}
                    </div>
                @endif
                <label for="exampleInputEmail1">1.Category name type</label>
                <input type="text" class="form-control" value="{{$data['category_type_name']}}" name="name"
                       id="exampleInputEmail1"
                       aria-describedby="emailHelp">

            </div>

            <div class="form-group">
                @if($errors->has('fileName'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('fileName')}}
                    </div>
                @endif
                <label for="exampleFormControlFile1">2.Upload thumbnail image</label>
                <input type="hidden" name="oldImageId" value="{{$data['imgId']}}">
                <input type="hidden" name="id" value="{{$data['id']}}">
                <input type="file" class="form-control-file" name="fileName" value="{{$data['url']}}"
                       id="exampleFormControlFile1">
                <br>
                <image src="{{asset('images\/'.$data['url'])}}" style="width: 120px;height: 120px"></image>
            </div>

            <div class="form-group">
                @if($errors->has('desc'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('desc')}}
                    </div>
                @endif
                <label for="exampleFormControlTextarea1">3.Description</label>
                <textarea name="desc" class="form-control" id="exampleFormControlTextarea1"
                          rows="3">{{$data['desc']}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
