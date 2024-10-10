@extends('layouts.frontend')

@section('content')




<section>
    <div class="banner-sec">
        <div class="containerr">
            <video width="100%"  autoplay="autoplay" loop>
                <source src="{{asset('bannervideo')}}/{{$getsettingdata->video}}" id="vid">
            </video>
        </div>
    </div>
 </section>


 <!-- ======= About section ======= -->
   <section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
           <div class="col-lg-8">
                <div class="abot-content" data-aos="fade-right" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000" >
                    <!--<h2>ABOUT US</h2>-->
                     <h2 class="title dark-blue-color">
                       Message from
                            <b class="dir">The Director</b>
                        </h2>
                     <p>{{$getsettingdata->aboutdes}}</p>
                   <div class="about-button mt-4">
                    <a href="{{route('aboutus')}}">READ MORE</a>
                   </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="profile-box card-box p-3" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <img src="{{asset('logo')}}/{{$getsettingdata->image}}" width="100%" height="300px">
                </div>
            </div>  
        </div>
    </div>
 </section> 
 
 
 
 
 
 
<!--  <section class="about-info-section pb-5">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-5 col-lg-3 col-sm-6 col-12">-->
<!--                <div class="profile-box card-box">-->
<!--                    <img src="assets/img/dir.jpeg" alt="Nazneen Shaikh" title="Nazneen Shaikh" width="100%">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-7 col-lg-9 col-sm-12 col-12">-->
<!--                <div class="d-flex align-items-center h-100">-->
<!--                    <div class="about-info">-->
<!--                        <h2 class="title dark-blue-color">-->
<!--                            Message from-->
<!--                            <b class="dir">The Director</b>-->
<!--                        </h2>-->
<!--                        <p class="gray-color">In 2022, the Innovative Healthcare wellness aggregator in India was launched, that is PerfectorsHealthcare Private Limited Powered by technology, 5k Webtech. We’re helping India to go places with healthcare services each pin codes , metropolitan andnon metropolitans cities through our powerful portfolio of brands and No.1 services. Perfectors provides the hybrid model of approach driven by an AI integrated platform wherecustomers in one click will get the Health services facility at the home, User will get theadvantage of getting the best discount offers through Certified Hospital and Lab Partners of thePerfectors. perfectors.in brings to you an online platform, which can be accessed for all your health needs.We are trying to make healthcare a hassle-free experience for you. Online doctor consultations, lab test bookings, medicine delivery, corporate health and wellnessservices - we make sure each and every healthcare need is taken care of. It helps people to take the right service at the right time. Perfectors has been established to offerhome healthcare services in india. We perfectors are revolutionizing the healthcare industry by providing best in class healthcareservices to the users with our expertise in the medical field.</p>-->
<!--                        <span><b>- Nazneen Shaikh</b></span>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
  <!-- ======= Services section ======= -->
 
  <section class="service-sec  pt-5 pb-5">
    <div class="container">
        <h2 data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">OUR SERVICES</h2>
        <div class="row">
        @foreach($services as $service)
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <img src="{{ asset('ServicesImage') }}/{{$service->image}}">
                    <ul class="ser-social-icon">
                        <li> <a href="{{ route('singlepage', ['id' => $service->id]) }}"><i class="{{$service->classname}}"></i></a></li>
                    </ul>
                    <div class="card-content">
                        <h5><a href="{{ route('singlepage', ['id' => $service->id]) }}">{{$service->title}}  </a></h5>
                        <p>{{$service->short_des}} </p>
                        <a class="read-button" href="{{ route('singlepage', ['id' => $service->id]) }}"> Read More</a>
                    </div>
                </div>

            </div>
            @endforeach
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <img src="assets/img/oncall.png">
                    <ul class="ser-social-icon">
                        <li> <a href="{{route('doctors')}}"><i class="fa fa-phone"></i></a></li>
                    </ul>
                    <div class="card-content">
                        <h5><a href="{{route('doctors')}}">Dr. Oncall (TeleConsultation) </a></h5>
                        <p> We Providing the best medical service to you is our top priority.</p>
                        <a class="read-button" href="{{route('doctors')}}"> Read More</a>
                    </div>
                </div>

            </div>
            
            
            
          
       

        </div>
        <div class="sevice-button mb-4">
            <a href="{{route('servicepage')}}">View All Services</a>
        </div>

    </div>
  </section>

        <!-- ======= Doctor Team section ======= -->
        <section class="team-section  pb-5 pt-5">
            <div class="container">
                <div class="team-con">
                    <p>MEET OUR DOCTORS</p>
                    <h2 data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">DEDICATED & EXPERIENCED TEAM</h2>
                </div>
                <div class="row">
                @foreach($homedoctorlist as $homedoctor)
                    <div class="col-lg-3 col-md-6 ">
                        <div class="card" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                            <img src="{{asset('DoctorlistImage') }}/{{{$homedoctor->image}}}" class="img-fluid">
                            <ul class="team-social-icon">
                                <!-- <li><a href="{{$homedoctor->iconlink}}"><i class="{{$homedoctor->classname}}"></i></a></li> -->
                                <li> <a href="{{$homedoctor->facebooklink}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$homedoctor->twiterlink}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{$homedoctor->linkedinlink}}"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <div class="card-con">
                                <h3><a href="#">{{$homedoctor->name}}</a></h3>
                                <p>
                                {{$homedoctor->description}}
</p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="team-button mt-4 d-flex justify-content-center">
                        <a href="{{route('doctors')}}">VIEW ALL DOCTORS</a>
                    </div>
                </div>
            </div>
        </section>

    
  <!-- ======= Counter section ======= -->
  <section class="cou">
 <div class="container">
    <div class="row">
	<div class="four col-md-3">
		<div class="counter-box colored" data-aos="flip-left" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
       
			<span class="counter">100</span>
			<p>Team Year Of Experience</p>
		</div>
	</div>
	<div class="four col-md-3">
		<div class="counter-box" data-aos="flip-right" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
       
			<span class="counter">3275</span>
			<p>Happy Patients</p>
		</div>
	</div>
	<div class="four col-md-3">
		<div class="counter-box" data-aos="flip-left" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
		
			<span class="counter">1000</span>
			<p>Number Of Doctors</p>
		</div>
	</div>
	<div class="four col-md-3">
		<div class="counter-box" data-aos="flip-right" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
			
			<span class="counter">30</span>
			<p>Number Of Staff</p>
		</div>
	</div>
  </div>	
</div>
 </section>



        <!-- ======= Our Heath care section ======= -->
        <section class="heath-care mt-5 mb-5">
            <div class="container">
                <div class="health-care mt-5 mb-5" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">
                    <!--<h2>"Delivering Quality Care"</h2>-->
                     <!-- <h3>Lorem Ipsum is simply dummy text of the printing</h3>  -->
                     <div class="health-care-img pb-2">
                     <img src="{{asset('assets/frontend/img/indeximage.png')}}" width="100%" >
                     </div>
                
                    <!--<p>No Matter what the situation we promise to be there for you in every medical capacity that you may need us around for.</p>-->

                </div>

            </div>
        </section>


         <!-- ======= Our vision section ======= -->
         <!--<section class="our-vision">-->
         <!--   <div class="container">-->
         <!--       <div class="row">-->
         <!--           <div class="col-lg-4">-->
                        <!-- <div class="cards" >
                            <img src="assets/img/Capture05-removebg-preview (3).png">
                            <h3 class="mt-2">OUR AIM</h3>
                            <p>Our Aim is to provide patient-centered
                                healthcare that, with excellence in quality,
                                service and access, seeks to build a
                                stronger community and help people
                                of all ages thrive.
                                </p>
                        </div> -->
         <!--               <div class="cards" >-->
         <!--                   <img src="assets/img/cap11.png">-->
         <!--                   <h3 class="mt-2">AIM</h3>-->
         <!--                   <p>Our Aim is to provide patient-centered-->
         <!--                       healthcare that, with excellence in quality,-->
         <!--                       service and access, seeks to build a-->
         <!--                       stronger community and help people-->
         <!--                       of all ages thrive.</p>-->
         <!--               </div>-->
         <!--           </div>-->
         <!--           <div class="col-lg-4">-->
         <!--               <div class="cards" >-->
         <!--                   <img src="assets/img/cap2.png">-->
         <!--                   <h3 class="mt-2">VISION</h3>-->
         <!--                   <p>Our Vision is to become a premium-->
         <!--                       healthcare provider to reach each-->
         <!--                       corner / pincodes of the India,-->
         <!--                       where we can deliever our services.</p>-->
         <!--               </div>-->
         <!--           </div>-->
         <!--           <div class="col-lg-4">-->
         <!--               <div class="cards" >-->
         <!--                   <img src="assets/img/cap3.png">-->
         <!--                   <h3 class="mt-2">MISSION</h3>-->
         <!--                   <p>Our mission is to empower users-->
         <!--                       to get highest quality healthcare-->
         <!--                       service regionally and-->
         <!--                       internationally.</p>-->

         <!--               </div>-->
         <!--           </div>-->
         <!--       </div>-->
         <!--   </div>-->
         <!--</section> -->
           <section class="about-company pt-5 pb-5">
    <div class="container">
        <div class="about-com-content">
            <!--<h2>About Company</h2>-->
            <!--<h3 class="pb-5">Quality Healthcare Made Simple</h3>-->
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 d-flex align-items-stretch">
                <div class="list-box text-center H-100">
                    <div class="list-image">
                        <img src="{{asset('assets/frontend/img/icon1.png')}}">
                    </div>
                    <h3> Aim</h3>
                    <p>Our Aim is to provide patient-centered
                                healthcare that, with excellence in quality,
                                service and access, seeks to build a
                                stronger community and help people
                                of all ages thrive. </p>

                </div>

            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 d-flex align-items-stretch">
            <div class="list-box text-center H-100">
                    <div class="list-image">
                        <img src="{{asset('assets/frontend/img/icon2about')}}.png">
                    </div>
                    <h3> Vision</h3>
                    <p>Our Vision is to become a premium
                                healthcare provider to reach each
                                corner/pincodes of the India,
                                where we can deliever our services. </p>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 d-flex align-items-stretch">
  <div class="list-box text-center H-100">
                    <div class="list-image">
                        <img src="{{asset('assets/frontend/img/vision-icon-removebg-preview.png')}}">
                    </div>
                    <h3> Mission</h3>
                    <p>Our mission is to empower users
                                to get highest quality healthcare
                                service regionally and
                                internationally. </p>
                </div>
            </div>
        </div>
    </div>
   </section>
           <!-- ======= Testimonial section ======= -->
           <section>
            <div class="testimonial-section" id="testimonial">
                
<div class="demo">
    <div class="container">
      <h1 class="demo-heading">What Our Client's Say?
    </div>
    <div class="container">
      <div class="row">
     
        <div class="col-md-8">
          <div id="testimonial-slider" class="owl-carousel">
          @foreach($hometestimoniall as $hometes)
            <div class="testimonial">
              <div class="testimonial-content">
                <div class="pic">
                  <img src="{{asset('assets/frontend/img/testi.png')}}" alt="">
                </div>
              </div>
              <p class="description">
              <i class="fa fa-quote-left quat" aria-hidden="true"></i>
              {{$hometes->tesdescription}}
                 <i class="fa fa-quote-right quat" aria-hidden="true"></i>
  
                <br><span class="depositer-name">{{$hometes->authorname}}</span>
              </p>
            </div>
            @endforeach
           
  
          </div>
        </div>
      </div>
    </div>
  </div>
 
            </div>
           </section>
		<section>
            <!-- ======= Testimonial ======= -->



@endsection
