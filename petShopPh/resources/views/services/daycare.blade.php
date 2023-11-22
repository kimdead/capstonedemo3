@extends('layout')

@section('content')


<link rel="stylesheet" href="{{asset('assets/services.css')}}">

<!-- content -->
<div class="Sign  position-relative d-inline-block" style="background-image: url('../assets/img/daycareTop.jpg'); width: 100%; height: 60vh; background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="text-1">
          <div class="col">
            <h1 id="contactme" class="fw-bold text-light text-center pt-5 mt-5">PET <span> DAYCARE</span></h1>
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
  
                  <form method="POST"
                  class="pt-3 text-start mt-4"
                  id="signupform"
                  action="/services"
                >@csrf

                  {{-- type of pet --}}

                    
                  <h5 class="">what is your pet?</h5>
                  <select class="form-select service" aria-label="Default select example" name="petType">
                    <option class="option" selected value="-">Choose Pet</option>
                    <option value="Dog">Dog</option>
                    <option value="cat">cat</option>
                    <option value="Rabbit">Rabbit</option>
                    <option value="Guinea Pig">Guinea Pig</option>
                    <option value="Bird">Bird</option>
                    <option value="Reptile">Reptile</option>
                    
                  </select>
                
                    {{-- Breed?? --}}

                
                    <h5 class="mt-5">What breed? (optional)</h5>
                    <input class="form-control" type="text" placeholder="What breed is your pet?" aria-label="default input example" class="form-control-lg border-1 breed" name="breed" value="{{old('breed')}}">

                    {{-- petSize --}}

                    <h5 class="mt-5">What is the size of your pet?</h5>
                  
                    <select class="form-select service" aria-label="Default select example" name="petSize">
                        <option class="option" selected value="-">Choose Size</option>
                        <option value="Small (below-10kg)">Small       (below-10kg)</option>
                        <option value="Medium (11-30kg)">Medium   (11-30kg)</option>
                        <option value="Large (31-40kg)">Large        (31-40kg)</option>
                        <option value="Extra Large (41kg-above)">Extra Large    (41kg-above)</option>
                      </select>


                 
                      
                        {{-- anything else? --}}

                     <h5 class="mt-5">Anything else the sitter needs to know? (optional)</h5>
                     <input class="form-control" name="anythingElse" value="{{old('anythingElse')}}" type="text" placeholder="(optional)" aria-label="default input example" class="form-control-lg border-1 breed">

                    {{-- date and time  --}}

                    <h5 class="mt-5">Please pick a starting date and time of the service</h5>

                    <label class="m-2" for="confirm"> <h6>Date *</h6></label>
                    <input type="date" min="2017-08-15" max="2045-08-26" class="set" id="set-time" name="date" value="date">
                    <br>
                    <label class="m-2" for="confirm"> <h6>Time *</h6></label>
                    <input type="time" class="set" id="set-time" name="time" value="time">

          {{-- number of days --}}

          <h5 class="mt-5">Number Of Days Required</h5>
          <input class="form-control" type="text" placeholder="number of days" aria-label="default input example" class="form-control-lg border-1 breed" name="daysreq" value="{{old('daysreq')}}">
          <div id="emailHelp" class="form-text mb-5">a value between 1 and 365 is required</div>

          <div class="d-flex">
            <button type="submit" class="btn-log mx-auto mt-5 justify-content-center">Submit</button>

          </div>
                    
                  </form>
                  
                </div>
              </div>
            </div>
  
            <div class="col-md-5 rounded-end-4" id="FAQ">
              <img src="../assets/img/daycareSide.jpg" alt="" class="rounded-end-4 w-100" style="height: 962px"/>
            </div>
          </div>
        </div>
      </div>
      <!-- extra -->
      <div class="box text-align-center" style="height: 800px">
        <a href=""></a>
      </div>
      
      
@endsection