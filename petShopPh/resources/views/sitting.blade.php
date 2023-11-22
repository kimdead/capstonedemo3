@extends('layout')

@section('content')
    


<link rel="stylesheet" href="{{asset('assets/services.css')}}">

<!-- content -->
<div class="Sign  position-relative d-inline-block" style="background-image: url('../assets/img/sittingTop.jpg'); width: 100%; height: 60vh; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-1">
          <div class="col">
            <h1 id="contactme" class="fw-bold text-light text-center pt-5 mt-5">PET<span> SITTING</span></h1>
          </div>
        </div>
  
        <!-- form -->
        <div class="container position-absolute" id="formsign-up">
          <div class="row row-cols-md-2 g-0">
            <!-- form -->
  
            <div class="col-md-7">
              <div class="card-group" style="height: 950px">
                <div class="card p-4 text-center rounded-start-4 rounded-end-0">
                  {{-- <h2 class="fw-bold pt-md-3"><span>Grooming</span></h2> --}}
  
                  <form
                    action="process.php"
                    class="pt-3 text-start mt-4"
                    id="signupform"
                  >


                  {{-- petSize --}}

                  <h5 class="">Visit Type?</h5>
                  
                  <select class="form-select service" aria-label="Default select example">
                      <option class="option" selected>visit type</option>
                      <option value="1">Stay Overnight</option>
                      <option value="2">1 Visit</option>
                      <option value="3">2 Visits</option>
                      <option value="4">3 Visits</option>
                    </select>


                  {{-- type of pet --}}

                    
                  <h5 class="mt-5">what is your pet?</h5>
                  <select class="form-select service" aria-label="Default select example">
                    <option class="option" selected>Choose Pet</option>
                    <option value="1">Dog</option>
                    <option value="2">cat</option>
                   
                  </select>
                
                    {{-- Breed?? --}}

                
                    <h5 class="mt-5">What breed? (optional)</h5>
                    <input class="form-control" type="text" placeholder="What breed is your pet?" aria-label="default input example" class="form-control-lg border-1 breed">
                  
                    {{-- petSize --}}

                    <h5 class="mt-5">What is the size of your pet?</h5>
                  
                    <select class="form-select service" aria-label="Default select example">
                        <option class="option" selected>Choose Size</option>
                        <option value="1">Small       (below-10kg)</option>
                        <option value="2">Medium   (11-30kg)</option>
                        <option value="3">Large        (31-40kg)</option>
                        <option value="4">Extra Large    (41kg-above)</option>
                      </select>

                      
                        {{-- anything else? --}}

                     <h5 class="mt-5">Anything else the groomer needs to know? (optional)</h5>
                    <input class="form-control" type="text" placeholder="(optional)" aria-label="default input example" class="form-control-lg border-1 breed">

                    {{-- date and time  --}}

                    <h5 class="mt-5">Pick a starting date of the service</h5>

                    <label class="m-2" for="confirm"> <h6>Date *</h6></label>
          <input type="date" min="2017-08-15" max="2045-08-26" class="set" id="set-time">
          <br>
          <label class="m-2" for="confirm"> <h6>Time *</h6></label>
          <input type="time" class="set" id="set-time">

           {{-- number of days --}}

           <h5 class="mt-5">Number Of Days Required</h5>
           <input class="form-control" type="text" placeholder="number of days" aria-label="default input example" class="form-control-lg border-1 breed">
           <div id="emailHelp" class="form-text mb-5">a value between 1 and 365 is required</div>

          <div class="d-flex">
            <button type="submit" class="btn-log mx-auto mt-5 justify-content-center">Submit</button>

          </div>
                    
                  </form>
                  
                </div>
              </div>
            </div>
  
            <div class="col-md-5 rounded-end-4" id="FAQ">
              <img src="../assets/img/sittingSide.jpg" alt="" class="rounded-end-4 w-100" style="height: 1080px"/>
            </div>
          </div>
        </div>
      </div>
      <!-- extra -->
      <div class="box text-align-center" style="height: 900px">
        <a href=""></a>
      </div>
      
      
@endsection