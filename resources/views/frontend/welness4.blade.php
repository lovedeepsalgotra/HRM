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
		<p>Having good mental health is important to everyday life. Mental wellness involves emotions, how you think, and how you interact with others... </p>
	</div>
	<section class="mt-5 mb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Anger Management</h2> <img src="assets/img/anger.jpg"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<p>Anger management is a term used to describe the skills you need to recognise that you...</p> 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal31">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo ">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
						<p>Exams are a crucial part of education and the source of stress for many students. In order to avoid...</p> 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal32">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Dealing With Exam Stress</h2> <img src="assets/img/deal.jpg"> </div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Improving Concentration</h2> <img src="assets/img/const.jpg"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<p>Concentration requires a great amount of effort and time. Even if you practice it for one week or even a month... </p>
                         <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal33">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
						<p>Personality development is the relatively enduring pattern of thoughts, feelings, and behaviors that distinguish...</p>
                         <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal34">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Personality Development</h2> <img src="assets/img/perdev.jpg"> </div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Special Needs Children</h2> <img src="assets/img/child.jpg"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<p>Special-needs children include those who have: Mental Retardation, which causes them to develop more slowly than...</p> 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal35">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
						<p>Counseling is a type of talking therapy that allows a person to talk about their problems and feelings in a confidential...</p> 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal36">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Counseling</h2> <img src="assets/img/coun.jpg"> </div>
				</div>
			</div>
		</div>
	</section>
	<div class="text-center">
		<div class="pagination"  id="cor-pag">
		 <a href="{{route('welnessnew3')}}">&laquo;</a>
		  <a class="<?php if($pagename == 'mentalwellness'){echo 'active';}?>" href="{{route('mentalwellness')}}">1</a>
		   <a class="<?php if($pagename == 'welnessnew3'){echo 'active';}?>" href="{{route('welnessnew3')}}">2</a> 
		   <a class="<?php if($pagename == 'welness4'){echo 'active';}?>" href="{{route('welness4')}}">3</a> 
		   <a href="#">&raquo;</a> </div>
	</div><!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal31" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Anger management is a term used to describe the skills you need to recognise that you, or someone else, is becoming angry and take appropriate action to deal with the situation in a positive way. Anger management does not mean internalising or suppressing anger.</p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal32" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Exams are a crucial part of education and the source of stress for many students. In order to avoid crippling anxiety from these pesky evaluations, it is important to approach them with a clear mind and an understanding of how to deal with stressful situations more broadly.</p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
    <!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal33" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Concentration requires a great amount of effort and time. Even if you practice it for one week or even a month, the result won't be productive if your brain isn’t performing well. Still, there are fairly easy ways to improve your concentration quickly and effectively. </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
    <!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal34" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Personality development is the relatively enduring pattern of thoughts, feelings, and behaviors that distinguish individuals from one another. The dominant view in the field of personality psychology today holds that personality emerges early and continues to change in meaningful ways throughout the lifespan.</p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
    <!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal35" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Special-needs children include those who have: Mental Retardation, which causes them to develop more slowly than other children. Speech and Language Impairment, such as a problem expressing themselves or understanding others. Physical Disability, such as vision problem, cerebral palsy, or other conditions.  </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
    <!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal36" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Counseling is a type of talking therapy that allows a person to talk about their problems and feelings in a confidential and dependable environment.  </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
    
@endsection