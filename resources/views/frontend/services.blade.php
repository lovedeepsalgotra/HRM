@extends('layouts.frontend')

@section('content')


<section class="service-banner">
    <div class="container">
        <div class="service-banner-con">
            <h2>Services</h2>
        </div>
    </div>
 </section>
 <section>
 </section>
  <!-- ======= Services section ======= -->
  <section class="service-sec  pt-5 pb-5">
    <div class="container">
        <h2 data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">Our Services</h2>
        <div class="d-flex justify-content-center pb-5">
        <img src="{{asset('assets/frontend/img/title-separator')}}.png" >
        </div>
       
        <div class="row">

        @foreach ($servicepage as $frontservicepage)
            <div class="col-lg-3 col-md-6">
                <div class="card ser-img" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <img src="{{ asset('ServicesImage') }}/{{$frontservicepage->image}}">
                    <ul class="ser-social-icon">
                        <li> <a href="{{ route('singlepage', ['id' => $frontservicepage->id]) }}"><i class="{{$frontservicepage->classname}}"></i></a></li>
                    </ul>
                    <div class="card-content">
                        <h5><a href="{{ route('singlepage', ['id' => $frontservicepage->id]) }}">{{$frontservicepage->title}}</a></h5>
                        <p>{{$frontservicepage->short_des}}</p>
                    </div>
                </div>

            </div>
            
            @endforeach


			<div class="col-lg-3 col-md-6 d-flex">
                <div class="card ser-img" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <img src="assets/img/rtr.jpg">
                    <ul class="ser-social-icon">
                        <li> <a href="#"><i class="fa fa-ambulance"></i></a></li>
                    </ul>
                    <div class="card-content">
                        <h5><a href="{{route('covid')}}">Covid 19 Care </a></h5>
                        <p>Covid RT PCR Instead of driving through the traffic and queueing for a test at your nearest Hospital, Diagnostics Centers, </p>
                    </div>
                </div>

            </div>
			<div class="col-lg-3 col-md-6 d-flex">
                <div class="card ser-img" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <img src="assets/img/Diagnostics Test - Photo.jfif ">
                    <ul class="ser-social-icon">
                        <li> <a href="#"><i class="fa fa-ambulance"></i></a></li>
                    </ul>
                    <div class="card-content">
                        <h5><a href="{{route('diagnosticstest')}}">Diagnostics Test </a></h5>
                        <p>When you have a health problem, your doctor may order blood tests, imaging, or other tests to help pinpoint the cause of the problem. </p>
                    </div>
                </div>

            </div>
			<div class="col-lg-3 col-md-6 d-flex">
                <div class="card ser-img" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <img src="assets/img/medical_1.jpg">
                    <ul class="ser-social-icon">
                        <li> <a href="#"><i class="fa fa-ambulance"></i></a></li>
                    </ul>
                    <div class="card-content">
                        <h5><a href="{{route('Medicaltourism')}}">Medical Tourism </a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card ser-img" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <img src="assets/img/oncall.png">
                    <ul class="ser-social-icon">
                        <li> <a href="#"><i class="fa fa-phone"></i></a></li>
                    </ul>
                    <div class="card-content">
                        <h5><a href="{{route('doctors')}}">Dr. Oncall (TeleConsultation) </a></h5>
                        <p>We Providing the best medical service to you is our top priority. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card ser-img" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <img src="assets/img/health_check.png">
                    <ul class="ser-social-icon">
                        <li> <a href="#"><i class="fa fa-procedures"></i></a></li>
                    </ul>
                    <div class="card-content">
                        <h5><a href="{{route('frontpackage')}}">Health Check-ups </a></h5>
                        <p>Regular health screening is the key to good employee health management,  </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card ser-img" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <!--<img src="assets/img/Corporate Wellness - Photo.jpg">-->
                     <img src="assets/img/wellness.jpg">
                    <ul class="ser-social-icon">
                        <li> <a href="#"><i class="fa fa-procedures"></i></a></li>
                    </ul>
                    <div class="card-content">
                        <h5><a href="{{route('corporatewellness')}}">Corporate Wellness </a></h5>
                        <p>By addressing employee health, engagement and enjoyment directly with your team</p>
                    </div>
                </div>
            </div>


            
            
            
           
            
           
           

        </div>


    </div>


  </section>
     <div class="card-footer p-0">
              <nav aria-label="...">
                <ul class="paginations justify-content-center mb-0  blogpagination">
                <span>{{ $servicepage->links() }}</span>
                
                  
                
                 
                </ul>
              </nav>
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
                    <p><a href="contactus.php#map-perfector">Find Us on Map</a></p>
                </div>

                </div>

            </div>
            <div class="col-lg-4 p-0">
            <div class="emer-box">
            <i class="fas fa-heartbeat heart"></i>
                <div class="emer-con">
                    <h3><span>Emergency Service?​</span></h3>
                    <p><a href="tel:{{$getsettingdata->phoneno}}">{{$getsettingdata->phoneno}}</a></p>
                </div>

                </div>
            </div>
            <div class="col-lg-4 p-0">
            <div class="mail-box">
            <i class="fas fa-envelope-open-text mail-sign"></i>
                <div class="mail-con">
                    <h3><span>Contact Us</span></h3>
                    <p><a href="mailto:{{$getsettingdata->email}}">{{$getsettingdata->email}}</a></p>
                </div>

                </div>
            </div>

        </div>

    </div>
 </section>
<!-- partial:index.partial.html -->
<!-- <div class="container text-center my-3">
		<div class="row mx-auto my-auto justify-content-center">
			<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="assets/img/depart_3.jpg" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="assets/img/depart_11.jpg" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="assets/img/depart_09.jpg" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="assets/img/depart_4.jpg" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
                                <img src="assets/img/depart_3.jpg" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
                                <img src="assets/img/depart_4.jpg" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				</a>
				<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				</a>
			</div>
		</div>		
	</div> -->
     <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>

@endsection