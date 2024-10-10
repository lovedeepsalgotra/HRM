@extends('layouts.frontend')

@section('content')
	<section class="treatment-banner">
		<div class="container">
			<div class="treat-banner-con">
				<h2>Mental Wellness</h2> </div>
		</div>
	</section>
	<div class="container well">
		<h2 class="main_title mt-5 mb-5" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">Mental Wellness</h2>
		<p>Having good mental health is important to everyday life. Mental wellness involves emotions, how you think, and how you interact with others.</p>
	</div>
	<section class="mt-5 mb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Special Education</h2> <img src="assets/img/edu.jpg"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<p>Special education is specially designed instruction, support, and services provided to students with...</p> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo ">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
						<p>A psychologist can help you work through such problems. Through psychotherapy, psychologists help people of... </p>
                         <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Psychotherapy</h2> <img src="assets/img/psy.jpg"> </div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Career Guidance</h2> <img src="assets/img/carr.jpg"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<p>Mind Healers offers you a wealth of accurate and up-to-date information to help you make the right choices...</p>
                         <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
						<p>Special education is specially designed instruction, support, and services provided to students with an identified... </p>
                         <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Special Education</h2> <img src="assets/img/spec.jpg"> </div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Remedial Services</h2> <img src="assets/img/rem.jpg"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<p>The psychiatric disorder must impair the person’s functioning in their relationships and interactions with others in the... </p>
                         <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal4">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
						<p>Life Skills are psychosocial competences which enable an individual develop adaptive and positive behaviour so as to deal...</p>
                         <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal5">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Life Skill Education</h2> <img src="assets/img/lifew.jpg"> </div>
				</div>
			</div>
		</div>
	</section>
	<div class="text-center">
		<div class="pagination" id="cor-pag">
		 <a href="#">&laquo;</a>
		  <a class="<?php if($pagename == 'mentalwellness'){echo 'active';}?>" href="{{route('mentalwellness')}}">1</a>
		   <a class="<?php if($pagename == 'welnessnew3'){echo 'active';}?>" href="{{route('welnessnew3')}}">2</a> 
		   <a class="<?php if($pagename == 'welness4'){echo 'active';}?>" href="{{route('welness4')}}">3</a> 
		   <a href="#">&raquo;</a> </div>
	</div>
	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>A psychologist can help you work through such problems. Through psychotherapy, psychologists help people of all ages live happier, healthier and more productive lives. In psychotherapy, psychologists apply scientifically validated procedures to help people develop healthier, more effective habits. There are several approaches to psychotherapy — including cognitive-behavioral, interpersonal and other kinds of talk therapy — that help individuals work through their problems. </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Special education is specially designed instruction, support, and services provided to students with an identified disability requiring an individually designed instructional program to meet their unique learning needs. </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
    	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Mind Healers offers you a wealth of accurate and up-to-date information to help you make the right choices. To make a career and thus a living is very important in a life. You have to be very objective in deciding a career and you can find help doing that over here </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
     	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>The psychiatric disorder must impair the person’s functioning in their relationships and interactions with others in the family or community. Remedial Services assist individuals in learning age appropriate ways and skills to manage theirbehaviors and regain self-control. </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
     	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Life Skills are psychosocial competences which enable an individual develop adaptive and positive behaviour so as to deal effectively with challenges and demands of everyday life. The development of Life Skills is a life long process that starts in early childhood and continues throughout ones life.  </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
	@endsection