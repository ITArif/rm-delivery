@extends('backend.layout')

@section('page_title')
Agent Dashboard
@endsection

{{-- custom css file --}}
@section('css-scripts')


@endsection

{{-- custom js scripts --}}
@section('js-scripts')


<!-- Page specific script -->
<script>
    //     $(function () {
//     $("#agent_table").DataTable({
//         // dom: 'Blfrtip',
//         "responsive": true,
//     //   "responsive": true, "lengthChange": false, "autoWidth": true,
//         "processing": true,
//         "serverSide": true,
//         "ajax": '{{ url('/agents/dashboard') }}',
//         "columns": [
//             {data: 'id' , name: 'id'},
//             {data: 'name' , name:'name',searchable:true},
//             {data: 'email' , name:'email',searchable:true,orderable:false},

//             // {
//             //     orderable:true,
//             //     searchable:true
//             // }

//         ],

//     });

//   });
</script>
@endsection
@section('navbar')
@include('backend.side_views.navbar')

@endsection
@section('sidebar')
@include('backend.side_views.admin_sidebar')
@endsection
{{-- main content section start --}}
@section('main_content')



<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center">Agent Dashboard</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="agent_table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection