
@extends('layout')

@section('content')


<link rel="stylesheet" href="{{asset('assets/services.css')}}">

<!-- content -->
<div class="Sign  position-relative d-inline-block" style="background-image: url('../assets/img/petGroomTop.jpg'); width: 100%; height: 60vh; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="text-1">
          <div class="col">
            <h1 id="contactme" class="fw-bold text-light text-center pt-5 mt-5">PET<span> GROOMING</span></h1>
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

                  {{-- type of pet --}}

                    
                  <h5 class="">what is your pet?</h5>
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


                      {{-- grooming services --}}

                      <h5 class="mt-5">What type of grooming services required?</h5>

                      <div class="dropdown">
                        <button class="btn w-100 text-start dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          include:
                        </button>
                        <div class="dropdown-menu w-100 px-4" aria-labelledby="dropdownMenuButton">
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">
                                Bath *hypo- Allergenic
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                            <label class="form-check-label" for="checkbox2">
                                Conditioning Treatment
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                            <label class="form-check-label" for="checkbox2">
                                Ears Flushed & cleaned
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                            <label class="form-check-label" for="checkbox2">
                                Watering Plants
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                            <label class="form-check-label" for="checkbox2">
                                Hand scissor Finish
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                            <label class="form-check-label" for="checkbox2">
                                Setting lenght of Coat
                            </label>
                          </div>
                          
                          
                        </div>
                      </div>
                      
                        {{-- anything else? --}}

                     <h5 class="mt-5">Anything else the groomer needs to know? (optional)</h5>
                    <input class="form-control" type="text" placeholder="(optional)" aria-label="default input example" class="form-control-lg border-1 breed">

                    {{-- date and time  --}}

                    <h5 class="mt-5">Please pick a date and time of the service</h5>

                    <label class="m-2" for="confirm"> <h6>Date *</h6></label>
          <input type="date" min="2017-08-15" max="2045-08-26" class="set" id="set-time">
          <br>
          <label class="m-2" for="confirm"> <h6>Time *</h6></label>
          <input type="time" class="set" id="set-time">

          <div class="d-flex">
            <button type="submit" class="btn-log mx-auto mt-5 justify-content-center">Submit</button>

          </div>
                    
                  </form>
                  
                </div>
              </div>
            </div>
  
            <div class="col-md-5 rounded-end-4" id="FAQ">
              <img src="../assets/img/petgroom.jpg" alt="" class="rounded-end-4 w-100" style="height: 950px"/>
            </div>
          </div>
        </div>
      </div>
      <!-- extra -->
      <div class="box text-align-center" style="height: 800px">
        <a href=""></a>
      </div>
      
      
      @endsection