@extends('profiles.layout')
@section('content')
 
  <div class="card card-body">
    <a class="btn btn-primary  btn-rounded  float-left col-1" href="{{ route('profiles.index') }}">Back </a>

    <h1> Create Profiles </h1>
    <!--Checking and displaying errors -->
    @if($errors->any())
      <div class="alert alert-danger">
        <ul class="list-group">
          @foreach($errors->all() as $error)
            <li class="list-group-item">
              {{ $error }}
            </li>
          @endforeach
        </ul>
      </div>
    @endif 
     
    <form class="needs-validation"  action="{{ route('profiles.store') }}" method="POST">
      @csrf
      <!-- Start of first row -->
      <div class="row"> 
        <div class="form-group col-6">
          <label for="name">Full Name</label>
          <input type="text" class="form-control is-valid" id="name" name="name"  placeholder="Enter full name" required>
          <div class="invalid-feedback">
            Enter a full name
          </div>
        </div>

        <div class="form-group col-6">
          <label for="gender">Select Gender</label>
          <select class="form-control is-valid" id="gender" name="gender" required>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
          <div class="invalid-feedback">
            Select one of them
          </div>
        </div>

      </div>
      <!-- End of first row -->
      
      <!--Start of second row -->
      <div class="row">
        <div class="form-group col-6">
          <label for="email">Your Email</label>
          <input type="email" class="form-control is-valid" id="email" name="email"  placeholder="Enter your email address" required>
          <div class="invalid-feedback">
            Enter your email address
          </div>
        </div>


        <div class="form-group col-6">
          <label for="address">Address</label>
          <input type="text" class="form-control is-valid" id="address" name="address"  placeholder="Enter your full  address" required>
          <div class="invalid-feedback">
            Please enter your full address
          </div>
        </div>
      </div>
    <!--End of second row --> 

     <!-- Start of third row --> 
      <div class='row'>
        <div class="form-group col-6 is-valid">
          <label for="nation">Select Your Nationality</label>
          <select class="form-control is-valid" name="nationality" id="nation">
            <option>Nepali</option>
            <option>Indian</option>
            <option>Chinese</option>
            <option>Americal</option>
            <option>African</option>
            <option>Australian</option>
            <option>Sri lankan</option>
            <option>Britian</option>
            <option>other</option>
          </select>
        </div>


        <div class="form-group col-6">
          <label for="eduction">Education</label>
          <select class="form-control is-valid" id="education" name="education" required>
            <option>HighSchool</option>
            <option>Bacholar</option>
            <option>Degree</option>
          </select>
        </div>
      </div>
     <!--End of third row -->

     <!--Start of fourth row -->
     <div class="row">
      <div class="form-group col-6">
          <label for="contact">Your contact</label>
          <input type="text" class="form-control is-valid" id="contact" name="contact" placeholder="Your contact" required>
          <div class="invalid-feedback">
            Enter your contact
          </div>
      </div>

      <div class="form-group col-6">
        <label for="contact">Your PhoneNumber</label>
        <input type="text" class="form-control is-valid" id="contact" name="phone" placeholder="Your phone number" required>
        <div class="invalid-feedback">
            Enter your phone number
        </div>
      </div>


        
     </div>



     <!--End of fourth row -->

     <div class="form-group ">
          <label for="datapicker-13">Date of Birth</label>
          <input type="text"  id="datepicker-13" class="form-control  is-valid" name="dateofbirth" value="" required />
          <div class="invalid-feedback">
            Pick a date
          </div>
        </div>

    
      
    
     <button class="btn btn-primary  btn-rounded " type="submit">Submit form</button>
    </form>
  </div>

  
  

  <script>
      (function() {
          'use strict';
          window.addEventListener('load', function()
          {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form)
              {
                  form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false)
                      {
                      event.preventDefault();
                      event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                  }, false);
              });
              $( "#datepicker-13" ).datepicker();
          }, false);

          
      })();

      

     
 </script>
@endsection