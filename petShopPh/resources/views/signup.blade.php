@extends('layout')

@section('content')
    
<link rel="stylesheet" href="{{asset('assets/signUp.css')}}">


<!-- content -->
      <div class="Sign  position-relative d-inline-block" style="background-image: url('../assets/img/signUpcover.jpg'); width: 100%; height: 60vh; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-1">
          <div class="col">
            <h1 id="contactme" class="fw-bold text-light text-center pt-5 mt-5">Create an <span>Account</span></h1>
          </div>
        </div>
  
        <!-- form -->
        <div class="container position-absolute" id="formsign-up">
          <div class="row row-cols-md-2 g-0">
            <!-- form -->
  
            <div class="col-md-7">
              <div class="card-group" style="height: 700px">
                <div class="card p-4 text-center rounded-start-4 rounded-end-0">
                  <h2 class="fw-bold pt-md-3">Sign up with <span>NamePetshop</span></h2>
  
                  <form
                    action="process.php"
                    class="pt-3 text-start mt-4"
                    id="signupform"
                  >
                    <div class="row g-3">
                      <div class="col">
                        <div class="mb-4">
                          <input
                            type="text"
                            name="name"
                            id="name"
                            placeholder="First Name"
                            class="form-control-lg w-100 border-1"
                          />
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-4">
                          <input
                            type="text"
                            name="name"
                            id="name"
                            placeholder="Last Name"
                            class="form-control-lg w-100 border-1"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="mb-4">
                      <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Enter your Email"
                        class="form-control-lg w-100 border-1"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Enter password"
                        class="form-control-lg w-100 border-1"
                      />
                    </div>
                    <div class="mb-5">
                      <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Confirm password"
                        class="form-control-lg w-100 border-1"
                      />
                    </div>
                    <div class="d-flex mt-5">
                      <button class="btn btn-submit fw-bold justify-content-center mx-auto">Submit</button>
                    </div>
  
                    <p class="small mt-5 text-center">
                      By clicking next, you acknowledge that you have read and
                      agree to our <a href="#" class="links fw-semibold">Terms of Use</a> and our
                      <a href="#" class="links fw-semibold">Privacy Policy</a>.
                    </p>
                  </form>
                  <h5 class="mt-3">Have an account? <a href="#" class="links">Login</a></h5>
                </div>
              </div>
            </div>
  
            <div class="col-md-5 rounded-end-4" id="FAQ">
              <img src="../assets/img/signup.jpg" alt="" class="rounded-end-4 w-100" />
            </div>
          </div>
        </div>
      </div>
      <!-- extra -->
      <div class="box text-align-center" style="height: 600px">
        <a href=""></a>
      </div>
      
      
@endsection