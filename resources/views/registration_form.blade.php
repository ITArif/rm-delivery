<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Registration Form</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link href="{{asset('frontend/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    @include('includes.favicon')
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/checkout.css')}}" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="card">
      <img class="card-img-top" src="{{asset('frontend/images/dubai.jpg')}}" alt="Card image" style="width:100%;height: 197px;">
  <div class="card-body">
      <h4 class="text-center">দুবাইতে চাকরির সুযোগ</h4>
      <p>RM Delivery Service LLC দুবাই ভিত্তিক একটি স্বনামধন্য প্রতিষ্ঠান। ২০২২ সাল থেকে সুনামের সহিত দুবাইয়ে খাদ্যপণ্য, ঔষুধ, নিত্যপ্রয়োজনীয় পণ্য এবং পার্সেল ডেলিভারি সার্ভিস প্রদান করে আসছে।</p>
      <p>বর্তমানে ডেলিভারি সার্ভিসের ব্যাপক চাহিদা বাড়ায়, প্রতিষ্ঠানটি ভারত, পাকিস্তান, নেপাল এবং বাংলাদেশ থেকে দক্ষ মোটরসাইকেল রাইডার নিয়োগ দিচ্ছে।</p>
      <p>আপনি বা আপনার পরিচিত কেউ যদি চাকরির বিষয়ে বিস্তারিত জানতে চান, বা এপ্লাই করতে চান তাহলে নিম্মেবর্ধিত ফর্মটিতে সঠিক তথ্য দিয়ে, রেজিস্ট্রেশন সম্পন্ন করুন।</p>
      <!-- <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <!-- @include('backend.partials._message') -->
      @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ Session::get('success') }}
      </div>
    @endif

    <div class="row">
      <div class="col-md-12 order-md-last">
        <!-- <h4 class="mb-3">Billing address</h4> -->
        <form class="needs-validation" action="{{route('registered')}}" method="post">
        @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label" style="font-weight: bold;">সম্পুন্য আপনার নাম(As Passport/NID)<span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="full_name" placeholder="আপনার নাম">
              @if ($errors->has('full_name'))
              <span class="text-danger">
                  {{ $errors->first('full_name') }}
              </span>
             @endif
            </div>

            <div class="col-sm-6">
              <label for="firstName" class="form-label" style="font-weight: bold;">আপনার ফোন নাম্বার<span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="phone" placeholder="ফোন নাম্বার">
              @if ($errors->has('phone'))
              <span class="text-danger">
                  {{ $errors->first('phone') }}
              </span>
             @endif
            </div>
            <div class="col-sm-6">
              <label for="firstName" class="form-label" style="font-weight: bold;">আপনার ইমেইল (যদি থাকে)</label>
              <input type="email" class="form-control" name="email" placeholder="ইমেইল নাম্বার">
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label" style="font-weight: bold;">আপনার বয়স কত?<span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="age" placeholder="বয়স">
              @if ($errors->has('age'))
              <span class="text-danger">
                  {{ $errors->first('age') }}
              </span>
             @endif
            </div>
            <div class="col-md-6">
              <label for="state" class="form-label" style="font-weight: bold;">লিঙ্গ<span style="color: red;">*</span></label>
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
              <label for="lastName" class="form-label" style="font-weight: bold;">আপনার জেলা<span style="color: red;">*</span></label>
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
              <label for="lastName" class="form-label" style="font-weight: bold;">থানা<span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="thana" placeholder="থানা">
              @if ($errors->has('thana'))
              <span class="text-danger">
                  {{ $errors->first('thana') }}
              </span>
             @endif
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label" style="font-weight: bold;">আপনার বর্তমান ঠিকানা<span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="present_address" placeholder="বর্তমান ঠিকানা">
              @if ($errors->has('present_address'))
              <span class="text-danger">
                  {{ $errors->first('present_address') }}
              </span>
             @endif
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label" style="font-weight: bold;">আপনার স্থায়ী ঠিকানা<span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="permanent_address" placeholder="permanent_address">
              @if ($errors->has('permanent_address'))
              <span class="text-danger">
                  {{ $errors->first('permanent_address') }}
              </span>
             @endif
            </div>
            <div class="col-sm-6">
              <label for="state" class="form-label" style="font-weight: bold;">আপনার শিক্ষাগত যোগ্যতা<span style="color: red;">*</span></label>
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
              <label for="state" class="form-label" style="font-weight: bold;">আপনার পেশা<span style="color: red;">*</span></label>
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
              <label for="state" class="form-label" style="font-weight: bold;">আপনার বৈবাহিক অবস্থা</label>
              <select class="form-select" name="marital_status">
                <option value="">...Choose Marital Status...</option>
                <option value="maried">Maried</option>
                <option value="unmaried">Un Maried</option>
               </select>
            </div>

            <div class="col-sm-6">
              <label for="state" class="form-label" style="font-weight: bold;">আপনি কি মোটরসাইকেল চলতে পারেন?<span style="color: red;">*</span></label>
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
              <label for="state" class="form-label" style="font-weight: bold;">আপনি কি স্মার্ট ফোনের ম্যাপ দেখে যেকোনো স্থানে যেতে সক্ষম?<span style="color: red;">*</span></label>
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
              <label for="state" class="form-label" style="font-weight: bold;">আপনার পাসপোর্টের কি ১ বছরের মেয়াদ আছে?<span style="color: red;">*</span></label>
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
         <button style="float:right;" type="submit" class="btn btn-primary float-right">Register</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
  </main>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{asset('frontend/assets/dist/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('frontend/checkout.js')}}"></script>
 <script>
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#photo_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }
  $("#photo").change(function() {
    readURL(this);
  });
 </script>
  </body>
</html>
