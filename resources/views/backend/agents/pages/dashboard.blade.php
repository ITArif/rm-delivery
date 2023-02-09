@extends('backend.agents.agent_layout')

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
    //     $(document).Toasts('create', {
//   title: 'Toast Title',
//   body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
//   autohide: true,
//   delay: 2000,

// })
</script>
@endsection
@section('navbar')
@include('backend.agents.side_views.navbar')

@endsection
@section('sidebar')
@include('backend.agents.side_views.sidebar')
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
                            <table id="contact_datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Company</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
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