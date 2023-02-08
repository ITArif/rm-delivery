@extends('backend.agents.agent_layout')

@section('page_title')
Agent Dashboard
@endsection

{{-- custom css file --}}
@section('css-scripts')

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">

{{-- Datatables --}}
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
{{-- select 2 --}}
<link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

{{-- custom js scripts --}}
@section('js-scripts')

<!-- Bootstrap -->
<script src=" {{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- AdminLTE -->
<script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
{{-- select 2 --}}

<script src="{{ asset('backend/plugins/select2/js/select2.full.min.js') }}"></script>
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
    <section class="content ">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center">Create New Rider</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            {{-- form input start --}}
                            <div class="row">
                                <div class="col-md-12 order-md-last">
                                    <!-- <h4 class="mb-3">Billing address</h4> -->
                                    <form class="needs-validation" action="{{route('registered')}}" method="post">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label for="firstName" class="form-label"
                                                    style="font-weight: bold;">সম্পুন্য আপনার নাম(As Passport/NID)<span
                                                        style="color: red;">*</span></label>
                                                <input type="text" class="form-control" name="full_name"
                                                    placeholder="আপনার নাম">
                                                @if ($errors->has('full_name'))
                                                <span class="text-danger">
                                                    {{ $errors->first('full_name') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="firstName" class="form-label"
                                                    style="font-weight: bold;">আপনার ফোন নাম্বার<span
                                                        style="color: red;">*</span></label>
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="ফোন নাম্বার">
                                                @if ($errors->has('phone'))
                                                <span class="text-danger">
                                                    {{ $errors->first('phone') }}
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="firstName" class="form-label"
                                                    style="font-weight: bold;">আপনার ইমেইল (যদি থাকে)</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="ইমেইল নাম্বার">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="lastName" class="form-label"
                                                    style="font-weight: bold;">আপনার বয়স কত?<span
                                                        style="color: red;">*</span></label>
                                                <input type="text" class="form-control" name="age" placeholder="বয়স">
                                                @if ($errors->has('age'))
                                                <span class="text-danger">
                                                    {{ $errors->first('age') }}
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="state" class="form-label"
                                                    style="font-weight: bold;">লিঙ্গ<span
                                                        style="color: red;">*</span></label>
                                                <select class="form-select" name="gender">
                                                    <option value="">...Choose Gender...</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">FeMale</option>
                                                </select>
                                                @if ($errors->has('gender'))
                                                <span class="text-danger">
                                                    {{ $errors->first('gender') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="lastName" class="form-label"
                                                    style="font-weight: bold;">আপনার জেলা<span
                                                        style="color: red;">*</span></label>
                                                <select class="form-select" name="district">
                                                    <option value="">...Choose District...</option>
                                                    @foreach($districts as $district)
                                                    <option value="{{$district}}">{{$district}}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('district'))
                                                <span class="text-danger">
                                                    {{ $errors->first('district') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="lastName" class="form-label"
                                                    style="font-weight: bold;">থানা<span
                                                        style="color: red;">*</span></label>
                                                <input type="text" class="form-control" name="thana" placeholder="থানা">
                                                @if ($errors->has('thana'))
                                                <span class="text-danger">
                                                    {{ $errors->first('thana') }}
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="lastName" class="form-label"
                                                    style="font-weight: bold;">আপনার বর্তমান ঠিকানা<span
                                                        style="color: red;">*</span></label>
                                                <input type="text" class="form-control" name="present_address"
                                                    placeholder="বর্তমান ঠিকানা">
                                                @if ($errors->has('present_address'))
                                                <span class="text-danger">
                                                    {{ $errors->first('present_address') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="lastName" class="form-label"
                                                    style="font-weight: bold;">আপনার স্থায়ী ঠিকানা<span
                                                        style="color: red;">*</span></label>
                                                <input type="text" class="form-control" name="permanent_address"
                                                    placeholder="permanent_address">
                                                @if ($errors->has('permanent_address'))
                                                <span class="text-danger">
                                                    {{ $errors->first('permanent_address') }}
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="state" class="form-label" style="font-weight: bold;">আপনার
                                                    শিক্ষাগত যোগ্যতা<span style="color: red;">*</span></label>
                                                <select class="form-select" name="education">
                                                    <option value="">...Choose Education...</option>
                                                    <option value="ssc">SSC</option>
                                                    <option value="hsv">HSC</option>
                                                    <option value="horns">Honrs</option>
                                                    <option value="masters">MA Masters</option>
                                                </select>
                                                @if ($errors->has('education'))
                                                <span class="text-danger">
                                                    {{ $errors->first('education') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="state" class="form-label" style="font-weight: bold;">আপনার
                                                    পেশা<span style="color: red;">*</span></label>
                                                <select class="form-select" name="Occupation">
                                                    <option value="">...Choose Occupation...</option>
                                                    <option value="student">Student</option>
                                                    <option value="job">Job</option>
                                                    <option value="business">Business</option>
                                                </select>
                                                @if ($errors->has('Occupation'))
                                                <span class="text-danger">
                                                    {{ $errors->first('Occupation') }}
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="state" class="form-label" style="font-weight: bold;">আপনার
                                                    বৈবাহিক অবস্থা</label>
                                                <select class="form-select" name="marital_status">
                                                    <option value="">...Choose Marital Status...</option>
                                                    <option value="maried">Maried</option>
                                                    <option value="unmaried">Un Maried</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="state" class="form-label" style="font-weight: bold;">আপনি কি
                                                    মোটরসাইকেল চলতে পারেন?<span style="color: red;">*</span></label>
                                                <select class="form-select" name="motorcycle_ride">
                                                    <option value="">...Choose Motorcycle Ride...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                @if ($errors->has('motorcycle_ride'))
                                                <span class="text-danger">
                                                    {{ $errors->first('motorcycle_ride') }}
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="state" class="form-label" style="font-weight: bold;">আপনি কি
                                                    স্মার্ট ফোনের ম্যাপ দেখে যেকোনো স্থানে যেতে সক্ষম?<span
                                                        style="color: red;">*</span></label>
                                                <select class="form-select" name="smart_phone_map">
                                                    <option value="">...Choose smart_phone_map...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                @if ($errors->has('smart_phone_map'))
                                                <span class="text-danger">
                                                    {{ $errors->first('smart_phone_map') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="state" class="form-label" style="font-weight: bold;">আপনার
                                                    পাসপোর্টের কি ১ বছরের মেয়াদ আছে?<span
                                                        style="color: red;">*</span></label>
                                                <select class="form-select" name="passport_validity">
                                                    <option value="">...Choose passport_validity...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                @if ($errors->has('passport_validity'))
                                                <span class="text-danger">
                                                    {{ $errors->first('passport_validity') }}
                                                </span>
                                                @endif
                                            </div>

                                            <!-- <div class="form-check">
                                      <label class="form-check-label" for="save-info">Your Photo</label>
                                    </div>

                                    <div class="row gy-3">
                                      <div class="col-md-6">
                                        <label for="cc-name" class="form-label">Image</label>
                                        <input type="file" name="photo" class="form-control" id="photo">
                                      </div>

                                      <div class="col-md-6">
                                        <label for="cc-number" class="form-label">Image Preview</label><br>
                                           <img id="photo_preview" style="width: 160px;height: 130px; margin-top:10px" src="#" alt="">
                                      </div>
                                    </div><br> -->
                                            <div class="card-footer">
                                                <a href="{{route('home')}}" class="btn btn-warning">Back</a>
                                                <button style="float:right;" type="submit"
                                                    class="btn btn-primary float-right">Register</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                            {{-- form input end --}}

                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Name (As Passport/NID)</span>
                                </div>
                                <div class="input-group">
                                    {{-- <div class="input-group-prepend">
                                        <span class="input-group-text">Name (As Passport/NID)</span>
                                    </div> --}}
                                    <input type="text" class="form-control" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                                </div>

                            </div>
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