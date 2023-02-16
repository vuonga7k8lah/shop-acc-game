
@extends('admin-layout')
@section('content')
    <div class="col-md-12">
        <h4 class="title">List Product</h4>
        <p class="category">this is list product</p>

        <br>

        <div class="card">
            <div class="card-content">
                <div class="toolbar">
                    <!--Here you can write extra buttons/actions for the toolbar-->
                    <input type="hidden" id="userData" value="{{route('productApiDatatable')}}">
                </div>
                <div class="fresh-datatables">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="productTable"
                                       class="table table-striped table-no-bordered table-hover dataTable dtr-inline display"
                                       cellspacing="0" width="100%" style="width: 100%;" role="grid"
                                       aria-describedby="datatables_info">
                                    <thead>
                                    <tr role="row">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Feature image</th>
                                        <th>Gallery image</th>
                                        <th>Category</th>
                                        <th>Sku</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Feature image</th>
                                        <th>Gallery image</th>
                                        <th>Category</th>
                                        <th>Sku</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div><!--  end card  -->
    </div>
@endsection
@push('js')
    <script>
        $(function () {
            let urlData = $('#userData').val();
            $('#productTable').DataTable({
                dom: 'Blfrtip',
                processing: true,
                serverSide: true,
                ajax: urlData,
                columns: [
                    {data: 'stt', name: 'stt'},
                    {data: 'title', name: 'title'},
                    {data: 'price', name: 'price'},
                    {data: 'feature_image', name: 'feature_image'},
                    {data: 'gallery_image', name: 'gallery_image'},
                    {data: 'category', name: 'category'},
                    {data: 'sku', name: 'sku'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action'},
                ]
            });
        });
    </script>
@endpush
