@extends('layout')

@section('content')


<link rel="stylesheet" href="{{asset('assets/contact.css')}}">

    <!-- Contact Start -->
   <!-- content -->
   
   <div class="contact position-relative d-inline-block">
    <div class="pageTitle">
      <div class="col">
        <h1 id="contactme" class="fw-bold text-center pt-5 mt-5">
          Get In <span>Touch</span>
        </h1>
      </div>
    </div>

    <!-- form -->
    <div class="container position-absolute" id="cont-contacts">
      <div class="row row-cols-md-2 g-0">
        <!-- form -->

        <div class="col-md-7">
          <div class="card-group">
            <div class="card p-4 rounded-start-4 rounded-end-0">
              <h2 class="fw-bold text-center pt-md-3" id="contactform">
                Send Us a Message
              </h2>

              <form
                action="process.php"
                class="pt-3 text-start"
                id="contactform"
              >
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Enter your Name"
                    class="form-control"
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your Email"
                    class="form-control"
                  />
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input
                    type="text"
                    name="phone"
                    id="phone"
                    placeholder="Enter your Phone"
                    class="form-control"
                  />
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Message</label>
                  <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="10"
                    placeholder="Enter your Message"
                    class="form-control"
                  ></textarea>
                </div>
                
                  <button class="btn-submit fw-semibold mt-2">Submit</button>
                
              </form>
            </div>
          </div>
        </div>

        <!-- f a q s -->

        <div class="col-md-5 rounded-end-4" id="FAQ">
          <div class="card-accord text-light">
            <h2 class="fw-bold p-4">FAQ's</h2>
            <div class="accordion accordion-flush" id="accordion">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne"
                    id="faqs"
                  >
                  What should I do if my pet is injured or gets sick?
                  </button>
                </h2>
                <div
                  id="flush-collapseOne"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    This is a good place to showcase your expertise in pet care. Explain that it’s always best to visit a veterinarian if your pet is sick or injured, but for minor issues, there are some DIY methods you can try first or to hold you over in the meantime. Make sure that people understand the seriousness of taking their pets to the vet when it is necessary and explain how proper pet care starts by knowing when to leave the work to someone else.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo"
                    aria-expanded="false"
                    aria-controls="flush-collapseTwo"
                    id="faqs"
                  >
                  How often should I bathe my pet?
                  </button>
                </h2>
                <div
                  id="flush-collapseTwo"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Bathing is often a big part of pet care for mammals and other small creatures. However, there are guidelines and best practices. Just like people, you don’t want to overdo it on bathing your pet because it could dry out their skin and cause a host of other issues. This is a good place to build rapport by providing as much information about keeping pets clean as you possibly can and then inviting people to reach out to you to learn more or get the professional pet care that they need. 
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree"
                    aria-expanded="false"
                    aria-controls="flush-collapseThree"
                    id="faqs"
                  >
                  What kind of pet care services do you provide?
                  </button>
                </h2>
                <div
                  id="flush-collapseThree"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    This is an obvious one, but it still needs to be on the list because it’s one of the most common questions that people ask. After all, it does them no good to find resources they can’t use or don’t need. If you offer pet sitting and in-home care services, list them here. If you offer veterinary care, explain that. If you only work with cats and dogs, you’ll want to let people know. In the same vein, if you specialize in a niche field like equine health or reptiles, you’ll want to make sure that you list those things here, as well. Make sure that you list all the services available, invite people to contact you about custom services, and take the opportunity to link to your service pages here, too. 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
  <!-- extra -->
  <div class="box">
    <a href=""></a>
  </div>
    <!-- Contact End -->

@endsection