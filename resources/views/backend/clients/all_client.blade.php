@extends('backend.master')

@section('title', 'All Clients')
@section('dashboard-title', 'Clients')
@section('side-title', 'All Clients')

@section('stylesheet')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('container')
<h2>All Clients Information</h2>
<div class="table-responsive">
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>gender</th>
        <th>district</th>
        <th>present_address</th>
        <th>education</th>
        <th>Age</th>
        <th>motorcycle_ride</th>
      </tr>
    </thead>
    <tbody>
      @foreach($allClients as $clinets)
      <tr>
        <td>{{$clinets->full_name}}</td>
        <td>{{$clinets->phone}}</td>
        <td>{{$clinets->gender}}</td>
        <td>{{$clinets->district}}</td>
        <td>{{$clinets->present_address}}</td>
        <td>{{$clinets->education}}</td>
        <td>{{$clinets->age}}</td>
        <td>{{$clinets->motorcycle_ride}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

@section('custom_script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
{{-- datatable responsive --}}
{{-- <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script> --}}
{{-- datatable responsive end --}}
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
<script>
  $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        autoWidth:true,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
@endsection