@extends('admin-layout')
@section('content')
    <div class="col-md-12">
        <h4 class="title">List Menu</h4>
        <p class="category">this is menu</p>

        <br>

        <div class="card">
            <div class="card-content">
                <div class="toolbar">
                    <!--Here you can write extra buttons/actions for the toolbar-->
                    <input type="hidden" id="userData" value="{{route('menuApiDatatable')}}">
                </div>
                <div class="fresh-datatables">
                    <div  class="dataTables_wrapper form-inline dt-bootstrap">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="menuTable"
                                       class="table table-striped table-no-bordered table-hover dataTable dtr-inline display"
                                       cellspacing="0" width="100%" style="width: 100%;" role="grid"
                                       aria-describedby="datatables_info">
                                    <thead>
                                    <tr role="row">
                                        <th >Id</th>
                                        <th >Name</th>
                                        <th >Created At</th>
                                        <th >Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th >Id</th>
                                        <th >Name</th>
                                        <th >Created At</th>
                                        <th >Action</th>
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
            $('#menuTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: urlData,
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action' },
                ]
            });
        });
    </script>
@endpush
