@extends('admin-layout')
@section('content')
    <div class="col-md-8 ml-4">
        <div class="card mx-auto">
            <form method="post" action="{{route('adminMenu.update',$data['id'])}}">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4 class="card-title text-center">
                        Edit Menu
                    </h4>
                </div>
                <div class="card-content">
                    <div class="form-group">
                        <label>Name menu</label>
                        @if($errors->has('name'))
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                        <input type="text" name="name" placeholder="Name" class="form-control" autocomplete="off"
                               value="{{$data['name']??''}}">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Parent</label>
                            <select name="parent_id" class="selectpicker" data-style="btn  btn-block"
                                    data-size="7" tabindex="-98">
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
