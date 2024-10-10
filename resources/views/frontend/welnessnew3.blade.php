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
		<p>Having good mental health is important to everyday life. Mental wellness involves emotions, how you think, and how you interact with others.... </p>
	</div>
	<section class="mt-5 mb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Relaxation & Rejuvenation</h2> <img src="assets/img/relax.jpg"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<p>The relaxation skill most beneficial for an individual's own needs might be best sought through a qualified therapist... </p> 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal16">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
						<p>Psychological assessment is a process of testing that uses a combination of techniques to help arrive at some hypotheses about a...</p> 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal17">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Psychological Assessments</h2> <img src="assets/img/asse.jpg"> </div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Work Life Balance</h2> <img src="assets/img/worklife.jpg"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<p>Work–life balance is a concept including proper prioritizing between "work" (career and ambition) and "lifestyle"... </p>
                         <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal18">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
						<p>Teachers have multiple roles to perform nowadays. To fulfil their roles professionally, teachers need to be competent... </p> 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal19">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Teachers Training</h2> <img src="assets/img/tea.jpg"> </div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-6">
					<div class="zum-imgg">
						<h2>Positive Parenting</h2> <img src="assets/img/pos.jpg"> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-text pb-4">
						<p>Positive parenting-sometimes called positive discipline, gentle guidance, or loving guidance... </p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal20">Read More</a> </div>
				</div>
			</div>
			<div class="row mt-5 corpo">
				<div class="col-lg-6">
					<div class="zum-text1 pb-4">
						<p>Stress management refers to the wide spectrum of techniques and psychotherapies aimed at controlling a person's...</p> 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal200">Read More</a> </div>
				</div>
				<div class="col-lg-6">
					<div class="zum-imgg1">
						<h2>Stress Management</h2> <img src="assets/img/stress.jpg"> </div>
				</div>
			</div>
		</div>
	</section>
	<div class="text-center">
		<div class="pagination"  id="cor-pag">
		 <a href="{{route('mentalwellness')}}">&laquo;</a>
		  <a class="<?php if($pagename == 'mentalwellness'){echo 'active';}?>" href="{{route('mentalwellness')}}">1</a>
		   <a class="<?php if($pagename == 'welnessnew3'){echo 'active';}?>" href="{{route('welnessnew3')}}">2</a> 
		   <a class="<?php if($pagename == 'welness4'){echo 'active';}?>" href="{{route('welness4')}}">3</a> 
		   <a href="{{route('welness4')}}">&raquo;</a> </div>
	</div>
	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>The relaxation skill most beneficial for an individual's own needs might be best sought through a qualified therapist. Those who desire reduction in general tension, or who wish a rejuvenationduring the workday, may well benefit from less controlled stress reduction techniques. </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
	<!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Work–life balance is a concept including proper prioritizing between "work" (career and ambition) and "lifestyle" (health, pleasure, leisure, family and spiritual development/meditation). This is related to the idea of lifestyle choice.</p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
    <!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Teachers have multiple roles to perform nowadays. To fulfil their roles professionally, teachers need to be competent in their responsibilities towards their students inside and outside the classroom. One important teacher role inside and outside the classroom is to provide guidance and counselling to students.</p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
     <!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Stress management refers to the wide spectrum of techniques and psychotherapies aimed at controlling a person's levels of stress, especially chronic stress, usually for the purpose of improving everyday functioning.   </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
       <!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal200" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Positive parenting -- sometimes called positive discipline, gentle guidance, or loving guidance -- is simply guidance that keeps our kids on the right path, offered in a positive way that resists any temptation to be punitive. As a parent you give your children a good start in life—you nurture, protect and guide them. Parenting is a process that prepares your child for independence. As your child grows and develops, there are many things you can do to help your child.  </p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
	    <!-- POP UP -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="appo-form">
						<div class="appoin-text text-center pb-3">
							<p>Psychological assessment is a process of testing that uses a combination of techniques to help arrive at some hypotheses about a person and their behavior, personality and capabilities.Psychological assessment is also referred to as psychological testing, or performing a psychological battery on a person.
</p>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
@endsection