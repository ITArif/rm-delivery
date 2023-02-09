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
    @if(Session::has('msg'))
        let type = "{{ Session::get('type') }}";
        $(document).Toasts('create', {
            class: '{{ Session::get('type') }}', // make sure type is adminlte toastr default class type
            title: '{{ Session::get('title') }}',
            body: '{{ Session::get('msg') }}',
            autohide: true,
            delay: 2000,

})
    @endif

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
                                    <form class="needs-validation" method="POST"
                                        action="{{ url('agents/rider-create')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-3">

                                            <div class="col-sm-6 form-group">
                                                <label for="name" class="form-label" style="font-weight: bold;">Full
                                                    Name(As Passport/NID)<span style="color: red;">*</span></label>
                                                <input type="text"
                                                    class="form-control  @error('name') is-invalid @enderror"
                                                    name="name" placeholder="Rider Full Name" value="{{ old('name') }}">
                                                @error('name')
                                                <div class=" invalid-feedback">
                                                    {{ $message }}
                                                </div>

                                                @enderror
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label for="phone" class="form-label" style="font-weight: bold;">Phone
                                                    Number<span style="color: red;">*</span></label>
                                                <input type="text"
                                                    class="form-control  @error('phone') is-invalid @enderror"
                                                    name="phone" placeholder="Rider Phone Number"
                                                    value="{{ old('phone') }}">
                                                @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>

                                                @enderror
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label for="email" class="form-label" style="font-weight: bold;">Email
                                                    Address<span style="color: red;">*</span></label>
                                                <input type="text"
                                                    class="form-control  @error('email') is-invalid @enderror"
                                                    name="email" placeholder="Rider Email Address"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>

                                                @enderror
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label for="age" class="form-label" style="font-weight: bold;">Age<span
                                                        style="color: red;">*</span></label>
                                                <input type="number"
                                                    class="form-control  @error('age') is-invalid @enderror" name="age"
                                                    placeholder="Rider Age" value="{{ old('age') }}">
                                                @error('age')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>

                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="gender" class="form-label"
                                                    style="font-weight: bold;">Gender<span
                                                        style="color: red;">*</span></label>
                                                <select class="form-select" name="gender" value="{{ old('gender') }}">
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


                                            <div class="col-sm-6 form-group">
                                                <label for="district" class="form-label"
                                                    style="font-weight: bold;">District<span
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

                                            <div class="col-sm-6 form-group">
                                                <label for="thana" class="form-label" style="font-weight: bold;">Thana
                                                    <span style="color: red;">*</span></label>
                                                <input type="text"
                                                    class="form-control  @error('thana') is-invalid @enderror"
                                                    name="thana" placeholder="Thana">
                                                @error('thana')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>

                                                @enderror
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label for="present_address" class="form-label"
                                                    style="font-weight: bold;">Present Address<span
                                                        style="color: red;">*</span></label>
                                                <input type="text"
                                                    class="form-control  @error('present_address') is-invalid @enderror"
                                                    name="present_address" placeholder="Rider Present Address">
                                                @error('present_address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>

                                                @enderror
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label for="permanent_address" class="form-label"
                                                    style="font-weight: bold;">Permanent Address<span
                                                        style="color: red;">*</span></label>
                                                <input type="text"
                                                    class="form-control  @error('permanent_address') is-invalid @enderror"
                                                    name="permanent_address" placeholder="Rider Permanent Address">
                                                @error('permanent_address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>

                                                @enderror
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label for="education" class="form-label"
                                                    style="font-weight: bold;">Education<span
                                                        style="color: red;">*</span></label>
                                                <select class="form-select" name="education">
                                                    <option value="">...Choose Education...</option>
                                                    <option value="ssc">SSC</option>
                                                    <option value="hsv">HSC</option>
                                                    <option value="horns">Honrs</option>
                                                    <option value="masters">MA Masters</option>
                                                </select>
                                                @error('education')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>

                                                @enderror
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label for="occupation" class="form-label"
                                                    style="font-weight: bold;">Occupation<span
                                                        style="color: red;">*</span></label>
                                                <select class="form-select" name="occupation">
                                                    <option value="">...Choose Occupation...</option>
                                                    <option value="student">Student</option>
                                                    <option value="job">Job</option>
                                                    <option value="business">Business</option>
                                                </select>
                                                @error('occupation')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>

                                                @enderror
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label for="marital_status" class="form-label"
                                                    style="font-weight: bold;">
                                                    Marital Status</label>
                                                <select class="form-select" name="marital_status">
                                                    <option value="">...Choose Marital Status...</option>
                                                    <option value="maried">Maried</option>
                                                    <option value="unmaried">Un-Maried</option>
                                                </select>
                                                @error('marital_status')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>

                                                @enderror
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label for="motorcycle_ride" class="form-label"
                                                    style="font-weight: bold;">
                                                    Rider Can Ride Motor Cycle?<span
                                                        style="color: red;">*</span></label>
                                                <select class="form-select" name="motorcycle_ride">
                                                    <option value="">...Choose Motorcycle Ride...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                @error('motorcycle_ride')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>

                                                @enderror
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label for="smart_phone_map" class="form-label"
                                                    style="font-weight: bold;">Rider Can Use
                                                    Google Map ?<span style="color: red;">*</span></label>
                                                <select class="form-select" name="smart_phone_map">
                                                    <option value="">...Choose smart_phone_map...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                @error('smart_phone_map')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label for="passport_validity" class="form-label"
                                                    style="font-weight: bold;">Passport Validity More Than a Year?<span
                                                        style="color: red;">*</span></label>
                                                <select class="form-select" name="passport_validity">
                                                    <option value="">...Choose passport_validity...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                @error('passport_validity')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label for="profile_pic" class="form-label">Rider Photo</label>
                                                <input class="form-control" type="file" name="profile_pic">
                                                @error('profile_pic')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label for="nid" class="form-label">Rider National ID</label>
                                                <input class="form-control" type="file" name="nid">
                                                @error('nid')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label for="passport_pic" class="form-label">Rider Passport
                                                    photo</label>
                                                <input class="form-control" type="file" name="passport_pic">
                                                @error('passport_pic')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label for="driving_lic" class="form-label">Rider Driving
                                                    License</label>
                                                <input class="form-control" type="file" name="driving_lic">
                                                @error('driving_lic')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="card-footer">
                                                <a href="{{route('home')}}" class="btn btn-warning">Back</a>
                                                <button style="float:right;" type="submit"
                                                    class="btn btn-primary float-right">Register</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                            {{-- form input end --}}

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