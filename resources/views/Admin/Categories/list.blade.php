@extends('layouts.app')
@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
        <div class="alert alert-primary" role="alert">
            Danh mục thể loại game
        </div>
        <table class="table table-bordered mx-auto text-center m-t-5">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Image</th>
                <th scope="col">Category Type Name</th>
                <th scope="col">Description</th>
                <th scope="col">Count</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($data))
                @foreach($data as $stt => $item)
                    <tr>
                        <th scope="row">{{$stt+1}}</th>
                        <td><image src="{{asset('images\/'.$item['url'])}}" style="width: 120px;height: 120px"></image></td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['desc']}}</td>
                        <td>{{$item['count']}}</td>
                        <td>
                            <a href="{{route('edit.categoryType',$item['id'])}}"><button type="button" class="btn
                    btn-primary">Edit</button></a>
                            <a href="{{route('delete.categoryType',$item['id'])}}"><button type="button" class="btn btn-warning">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

        <nav aria-label="Page navigation example mx-auto" style="display: flex; justify-content: center">
            {!! $paginate->links() !!}
        </nav>

    </div>
@endsection
