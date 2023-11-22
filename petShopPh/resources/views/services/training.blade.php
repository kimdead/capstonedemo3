@extends('layout')

@section('content')
    

<link rel="stylesheet" href="{{asset('assets/services.css')}}">
      <!-- content -->
      <div class="Sign  position-relative d-inline-block" style="background-image: url('../assets/img/petTrainTop.jpg'); width: 100%; height: 60vh; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-1">
          <div class="col">
            <h1 id="contactme" class="fw-bold text-light text-center pt-5 mt-5">PET<span> TRAINING</span></h1>
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
                    action="/services"
                    class="pt-3 text-start mt-4"
                    id="signupform"
                  >@csrf

                  {{-- type of pet --}}

                    
                  <h5 class="">what is your pet?</h5>
                  <select class="form-select service" name="petType" aria-label="Default select example">
                    <option class="option" selected value="-">Choose Pet</option>
                    <option value="Dog">Dog</option>
                    <option value="Cat">cat</option>
                    
                    
                   
                  </select>
                
                    {{-- Breed?? --}}

                
                    <h5 class="mt-5">What breed? (optional)</h5>
                    <input class="form-control" type="text" placeholder="What breed is your pet?" aria-label="default input example" class="form-control-lg border-1 breed" name="breed" value="{{old('breed')}}">
                    
                    
                    {{-- how old --}}

                    <h5 class="mt-5">How old is your pet</h5>
                  <select class="form-select service" name="petAge" aria-label="Default select example">
                    <option class="option" selected value="-">Pet Age</option>
                    <option value="0-6 months">0-6 months</option>
                    <option value="6-12 months">6-12 months</option>
                    <option value="1-2 years old">1-2 years old</option>
                    <option value="2-10 years old">2-10 years old</option>
                    <option value="10 years or older">10 years or older</option>
                      
                  </select>
                    {{-- petSize --}}

                    <h5 class="mt-5">What is the size of your pet?</h5>
                  
                    <select class="form-select service" aria-label="Default select example" name="petSize">
                        <option class="option" selected value="-">Choose Size</option>
                        <option value="Small (below-10kg)">Small       (below-10kg)</option>
                        <option value="Medium (11-30kg)">Medium   (11-30kg)</option>
                        <option value="Large (31-40kg)">Large        (31-40kg)</option>
                        <option value="Extra Large (41kg-above)">Extra Large    (41kg-above)</option>
                      </select>

                        {{-- training course --}}

                      <h5 class="mt-5">Which pet training course are you interested in?</h5>
                  <select class="form-select service" name="petCourse" aria-label="Default select example">
                    <option class="option" selected value="-">Choose Training</option>
                    <option value="Potty training">Potty training</option>
                    <option value="Obedience training">Obedience training</option>
                    <option value="Behavioral training">Behavioral training</option>
                    <option value="Agility training">Agility training</option>
                    <option value="Therapy">Therapy</option>
                      
                  </select>

                    {{-- private. group? --}}


                  <h5 class="mt-5">Are you looking for private lessons, group training or board and training programs?</h5>
                  <select class="form-select service" name="petProgram" aria-label="Default select example">
                    <option class="option" selected value="-">Choose Program</option>
                    <option value="Private training lesson">Private training lesson</option>
                    <option value="Group training lesson">Group training lesson</option>
                    <option value="Board and Train Programs">Board and Train Programs</option>
                    
                      
                  </select>
                      
                        {{-- anything else? --}}

                     <h5 class="mt-5">Anything else the sitter needs to know? (optional)</h5>
                    <input class="form-control" type="text" placeholder="(optional)" aria-label="default input example" class="form-control-lg border-1 breed" name="anythingElse" value="{{old('anythingElse')}}">



                    {{-- pick available time --}}

                    <h5 class="mt-5">What type of training services required?</h5>

                    <div class="dropdown">
                      <button class="btn w-100 text-start dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Programs:
                      </button>
                      <div class="dropdown-menu w-100 px-4" aria-labelledby="dropdownMenuButton" >
                        <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox" value="Weekday mornings" id="checkbox1" name="petTrain">
                          <label class="form-check-label" for="checkbox1">
                              Weekday mornings
                          </label>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox" value="Weekday afternoons" id="checkbox2" name="petTrain">
                          <label class="form-check-label" for="checkbox2">
                              Weekday afternoons
                          </label>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox" value="Weekdays evenings" id="checkbox3" name="petTrain">
                          <label class="form-check-label" for="checkbox3">
                              Weekdays evenings
                          </label>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox" value="Saturday/Sunday" id="checkbox4" name="petTrain">
                          <label class="form-check-label" for="checkbox4">
                              Saturday/Sunday
                          </label>
                        </div>
                        
                        
                        
                      </div>
                    </div>
                    {{-- date and time  --}}

                    <h5 class="mt-5">Pick a preferred date to start training</h5>

                   
                    <label class="m-2" for="confirm"> <h6>Date *</h6></label>
          <input type="date" min="2017-08-15" max="2045-08-26" class="set" id="set-time" name="date" value="date">
          <br>
          <label class="m-2" for="confirm"> <h6>Time *</h6></label>
          <input type="time" class="set" id="set-time" name="time" value="time">

          {{-- button --}}

          <div class="d-flex">
            <button type="submit" class="btn-log mx-auto mt-5 justify-content-center">Submit</button>

          </div>
                    
                  </form>
                  
                </div>
              </div>
            </div>
  
            <div class="col-md-5 rounded-end-4" id="FAQ">
              <img src="../assets/img/petTraining.jpg" alt="" class="rounded-end-4 w-100" style="height: 1265px"/>
            </div>
          </div>
        </div>
      </div>
      <!-- extra -->
      <div class="box text-align-center" style="height: 1100px">
        <a href=""></a>
      </div>
      
      
@endsection