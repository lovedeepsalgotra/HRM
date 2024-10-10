@extends('layouts.frontend')

@section('content')


<section class="treatment-banner">
		<div class="container">
			<div class="treat-banner-con">
				<h2>Corporate Wellness Session & Health Risk Assesment</h2> </div>
		</div>
	</section>
	<div class="container well">
		<h2 class="main_title mt-5 mb-5" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">Corporate Wellness Session & Health Risk Assesment</h2>
		<p> By addressing employee health, engagement and
enjoyment directly with your team, we will increase
productivity and impact ROI</p>
		<div class="text-center"> </div>
	</div>
	<section class="corr mt-5 mb-5">
		<div class="container">
			<div class="row mt-5 ">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Zumba</h2>
						 <img src="{{asset('assets/img/zumba2.jpg')}}"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<h5>Available Physical & Virtual Sessions</h5>
						<p>Physical fitness is a state of health and well-being and, more specifically, the ability to perform aspects of sports, occupations and daily activities...</p>
                     <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal11">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo ">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
					<h5>Available Physical & Virtual Sessions</h5>
						<p>The best form of exercise is whatever you enjoy most and will continue to do on a regular, almost daily, basis . With virtual and physical yoga sessions...</p>
                         <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal12">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Yoga</h2>
						 <img src="{{asset('assets/img/yoga2.jpg')}}"> </div>
				</div>
			</div>
			<div class="row mt-5 ">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Electro Muscle Stimulation</h2> <img src="{{asset('assets/img/muc.jpg')}}"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<p>Electro Muscle Stimulation (EMS) training is a 20 minute bodyweight workout, usually done just once a week. It activates 90% to 95% of all your muscle at a time...</p> 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal13">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo ">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
						<h2>What is HRA ?</h2>
						<p>Organization physical and mental fitness Company and gender wise reports will help to take an informed decision...</p> 
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal14">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Health Risk Assesment</h2> <img class="risk2" src="{{asset('assets/img/risk2.png')}}"> </div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<section> </section>
	<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Electro Muscle Stimulation (EMS) training is a 20 minute bodyweight workout, usually done just once a week. It activates 90% to 95% of all your muscle at a time, including your deep back muscles and pelvic floor muscles. Our Muscles contract through electric impulses ( bioelectronics ) in a normal straight. EMS training makes use of this effect. By employing hardly noticeable external electro impulses, the natural effect is additionally intensified and a highly effective training is achieved.</p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Physical fitness is a state of health and well-being and, more specifically, the ability to perform aspects of sports, occupations and daily activities.Access Zumba classes from instructors around the Pan India. Join our global community of divas and dancers for a taste of the Zumba experience! </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
	<!-- POP UP -->
	<!-- Modal -->
    	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>The best form of exercise is whatever you enjoy most and will continue to do on a regular, almost daily, basis . With virtual and physical yoga sessions, everyone has a chance to practice, from wherever possible.</p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
	<!-- POP UP -->
	<!-- Modal -->
        	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Electro Muscle Stimulation (EMS) training is a 20 minute bodyweight workout, usually done just once a week. It activates 90% to 95% of all your muscle at a time, including your deep back muscles and pelvic floor muscles.</p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
	<!-- POP UP -->
	<!-- Modal -->
      	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Organization physical and mental fitness Company and gender wise reports will help to take an informed decision.</p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
    @endsection
