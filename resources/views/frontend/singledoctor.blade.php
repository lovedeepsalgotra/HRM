@extends('layouts.frontend')

@section('content')
<!-- ======= Singleservice section ======= -->
<section class="service-banner mb-5">
    <div class="container">
        <div class="service-banner-con">
            <h2>Doctors</h2>
        </div>
    </div>
</section>
<div class="service-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- <div class="single-image"></div> -->

                @foreach ($singledoctor as $singledoctors)
                <div class="doctor-cont" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-5">
                            <div class="single-doctor-img">
                                <img src="{{ asset('DoctorlistImage') }}/{{{$singledoctors->image}}}">
                            </div>

                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-7">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="doc-single-text text_center">
                                    <h5>{{$singledoctors->name}}</h5>
                                    <p>{{$singledoctors->description}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dr-single-info text_center">	
                                    <p><a href="#"><i class="fa fa-phone-alt"></i>{{$singledoctors->mobileno}}</a></p>
                                    <p><a href="#"> <i class="fas fa-envelope"></i>{{$singledoctors->email}}</a></p>
                                    </div>
                                    <ul class="doctor-icon d-flex pt-2 text_center">
              
                                      <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                  </ul>
                                   
                                </div>
                             
                            </div><hr>
                            <div class="doctor-intro text_center">
                            <p><b>Total Experience :</b>  {{$singledoctors->experience}}</p>
                            <p><span><b>Language: </b></span>{{$singledoctors->language}}</p>
                            </div>
                           
                        </div>

                    </div>

                    
            
                    <div class="cont-list-single margin-top-20"></div>
                </div>
                @endforeach

                 <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="paginations justify-content-end mb-0">
                <span>{{ $singledoctor->links() }}</span>
                
                  
                
                 
                </ul>
              </nav>
            </div>
               
                <div class="form-sec ">
                    <!-- <h2>Ask a Question</h2> -->
                    <div class="row">
                        <div class="">
                        <!-- <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Full Name"/>
                                    
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        
                                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                    
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                            <div class="single-page-button pt-4">
                                <button type="submit" class="btn">Send Message</button>
                            </div>
                        </form> -->
               
                        </div>
                    </div>
                </div>
            
            </div>

            <!-- ser-sidebar -->
            <div class="col-lg-3">
                <div class="ser-sidebar">
                    <!-- ser-list  -->
                    <div class="ser-bar ser-list">
                        <h4>Name of the Department</h4>
                        <ul class="list p-0">
                            
                            @foreach ($departmentname as $departments)
                            <li><a class="<?php if(isset($pagenames) && $pagenames == $departments->id){echo 'active2';}?>" href="{{ route('doctors', ['id' => $departments->id]) }}">{{$departments->dapartment_name}}</a></li>
                         
                            @endforeach
                        </ul>
                    </div>

                    <!-- wrk-hr -->
                    <div class="ser-bar wrk-hr">
                        <h4 class="margin-bottom-20">Working Hours</h4>
                        <p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                        <div class="wrk-list-single">
                           
                            <ul class="single-list">
                                <li class="title">monday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">tuesday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">wednesday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">thursday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">friday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                            <ul class="single-list">
                                <li class="title">saturday</li>
                                <li class="amount">8.00AM-6.00PM</li>
                            </ul>
                             <ul class="single-list">
                                <li class="title">sunday</li>
                                <li class="amount">closed</li>
                            </ul>
                        </div>
                    </div>

                    <!-- help-line -->
                    <!-- <div class="ser-bar help-line">
                        <span class="icon margin-bottom-10"><i class="fas fa-user-md"></i></span>
                        <h3 class="margin-bottom-10">Online Help 24/7</h3>
                        <h4>+(123) 456-78-90</h4>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>



 <!-- ======= Emergency section ======= -->
 <section>
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="map-direction">
                <i class="fa fa-map-signs map-sign"></i>
                <div class="dire-con">
                    <h3><span>Get Directions</span></h3>
                    <p><a href="{{route('contactus')}}#map-perfector">Find Us on Map</a></p>
                </div>

                </div>

            </div>
            <div class="col-lg-4 p-0">
            <div class="emer-box">
            <i class="fas fa-heartbeat heart"></i>
                <div class="emer-con">
                    <h3><span>Emergency Service?​</span></h3>
                    <p><a href="tel:+91 882 882 2211">+91 882 882 2211</a></p>
                </div>

                </div>
            </div>
            <div class="col-lg-4 p-0">
            <div class="mail-box">
            <i class="fas fa-envelope-open-text mail-sign"></i>
                <div class="mail-con">
                    <h3><span>Contact Us</span></h3>
                    <p><a href="service@perfectors.in">service@perfectors.in</a></p>
                </div>

                </div>
            </div>

        </div>

    </div>
    
 </section>
   <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>

@endsection

</body>

</html>
