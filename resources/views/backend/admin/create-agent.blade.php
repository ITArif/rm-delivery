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
@include('backend.side_views.navbar')

@endsection
@section('sidebar')
@include('backend.side_views.admin_sidebar')
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
                                    <form class="needs-validation" method="POST" action="{{ url('admin/create-agent')}}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-3">

                                            <div class="col-sm-6 form-group">
                                                <label for="name" class="form-label" style="font-weight: bold;">Full
                                                    Name<span style="color: red;">*</span></label>
                                                <input type="text"
                                                    class="form-control  @error('name') is-invalid @enderror"
                                                    name="name" placeholder="Agent Full Name" value="{{ old('name') }}">
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
                                                    name="phone" placeholder="Agent Phone Number"
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
                                                    name="email" placeholder="Agent Email Address"
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
                                                <label for="address" class="form-label"
                                                    style="font-weight: bold;">Address<span
                                                        style="color: red;">*</span></label>
                                                <input type="text"
                                                    class="form-control  @error('present_address') is-invalid @enderror"
                                                    name="address" placeholder="Full Address">
                                                @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>

                                                @enderror
                                            </div>

                                            <div class="col-sm-6 form-group">
                                                <label for="profile_pic" class="form-label">Agent Photo<span
                                                        style="color: red;">*</span></label>
                                                <input class="form-control" type="file" name="profile_pic">
                                                @error('profile_pic')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>


                                            <div class="card-footer d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary col-3">Add Agent</button>
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