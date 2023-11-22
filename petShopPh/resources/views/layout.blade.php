<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <title>Petmalu</title>
    <style>
     
     
 
 
</style>



  </head>
  <body>
    
    <div class="container">

      <!-- nav bar -->
      
      <nav
        id="main_menu"
        class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container">
          <a href="index.html" class="navbar-brand">
            <img src="" alt="Petmalu logo" width="" />
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainMenu"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="mainMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
              <li><a href="/" class="nav-link">Home</a></li>
              <li><a href="/about" class="nav-link">About</a></li>
              <li><a href="/contact" class="nav-link">Contact Us</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/services/grooming">Pet Grooming</a></li>
                  <li><a class="dropdown-item" href="/services/boarding">Pet Boarding</a></li>
                  <li><a class="dropdown-item" href="/services/training">Pet Training</a></li>
                  <li><a class="dropdown-item" href="/services/sitting">Pet Sitting</a></li>
                  <li><a class="dropdown-item" href="/services/daycare">Pet Daycare</a></li>
                  <li><a class="dropdown-item" href="/services/petwalking">Pet Walking</a></li>
                </ul>
              </li>
              <li><button type="button" class="btn-modal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Sign in
              </button>
              
              <!-- Modal -->
              <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content p-5">
                    <button type="button" class="btn-close align-self-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-header align-self-center">
                      <h1 class="modal-title fs-1 fw-bold" id="exampleModalLabel">Log<span>in</span></h1>
                      
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label" >Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div id="emailHelp" class="form-text mb-5 text-end">forgot password</div>
                        <div class="d-flex">
                        <button type="submit" class="btn-log mx-auto mt-5 justify-content-center">Submit</button>

                      </div>
                        <div id="emailHelp" class="text-center form-text mt-5 mb-3">Or Sign Up Using</div>

                        <div class="text-center mb-5">
                        <i class="bi bi-facebook fs-1 me-3"></i>
                        <i class="bi bi-google fs-1"></i>
                      </div>


                      <div id="emailHelp" class="text-center form-text mt-5 mb-2">Dont have an account?</div>
                      <div class="d-flex">
                      <a href="/signup" class="signUpLink mx-auto justify-content-center mb-5 ">Sign Up</a></div>
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div></li>
            </ul>
          </div>
        </div>
      </nav>
      </div>



      <main>
      @yield('content')
      </main>

<!-- footer -->
<footer class="footer">
    <div class="imgfooter"><img src="../assets/img/dog footer.png" alt=""></div>
    <div class="text-foot text-center" id="text-foot">
      <h3>Pawsitively Unleashing Happiness!</h3><br>
      <a class="btn-btm fw-bold" href="#">SIGN UP</a>
     </div>
  
    <section
        class="bg-dark text-light p-5 text-center text-sm-start">
  
        
  
          
            <div class="row">
              <div class="col-md-3">
                <img src="./images/logo2.1.png" alt="Petmalu Logo" width="180px" />
                <div class="social">
                  <a href="#"><i class="bi bi-facebook fs-3 m-2"></i></i></a>
                  <a href="#"><i class="bi bi-twitter fs-3 m-2"></i></i></a>
                  <a href="#"><i class="bi bi-youtube fs-3 m-2"></i></a>
                  <a href="#"><i class="bi bi-linkedin fs-3 m-2"></i></a>
                  <a href="#"><i class="bi bi-instagram fs-3 m-2"></i></a>
                </div>
                
              </div>
              <div class="col-md-3" id="footlist">
                <h4 class="mb-4">Shop Schedule</h4>
                <ul class="list-unstyled" >
                  <p>Monday to friday : 8am - 10pm</p>
                  <p>Saturday : 9am - 4pm</p>
                  <p>Sunday : Close</p>
                </ul>
              </div>
              <div class="col-md-3" id="footlist">
                <h4 class="mb-4">Useful links</h4>
                <ul class="list-unstyled" >
                  <li class="mb-4"><a href="#">Help Center</a></li>
                  <li class="mb-4"><a href="#">About Us</a></li>
                  <li class="mb-4"><a href="#">Services</a></li>
                  <li class="mb-4"><a href="#">Testimonies</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h4 class="mb-4">Dont be shy, say Hi</h4>
                <ul class="list-unstyled">
                  <p><i class="bi bi-telephone-fill fs-4"></i> 0915-123-4567</p>
                  <p><i class="bi bi-geo-alt-fill fs-4"></i> 143, PagHanapin st. kungSanMan</p>
                  <p><i class="bi bi-clock-fill fs-4"></i> weekdays : Open | Sunday : close</p>
                  <p><i class="bi bi-c-circle fs-4"></i> 2023 petMalu, All Rights Reserved</p>
                </ul>
                
              </div>
            </div>
            
          
  
  
        
    </section>
  </footer>
      <!-- bootstrap -->
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
      ></script>
    </body>
    </html>