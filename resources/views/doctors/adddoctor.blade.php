@include('layouts.app1')

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
           
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Doctor</li> 
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              
              <a href="{{route('doctorlist')}}" class="btn btn-sm btn-neutral">Doctor list</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0"> Doctor Details</h3>
            </div>
            <div class="card-body">
  
    <form action="{{route('adddoctor')}}" method="POST" class="form" enctype="multipart/form-data">
      @csrf
<label class="form-control-label">Doctor Image*</label>   
       <div class="custom-file">
                
         <label class="custom-file-label" for="customFileLang">Image</label>
        <input type="file" class="custom-file-input" name="image" required>
       
    </div>
    <div class="form-group">
      <br>
        <label for="example-text-input" class="form-control-label">Doctor Name*</label>
        <input class="form-control" type="text" value=""name="name" maxlength="60" required>
    </div>
     <div class="form-group">
      <br>
        <label for="example-text-input" class="form-control-label">Doctor Total Experience*</label>
        <input class="form-control" type="text" value=""name="experience" required maxlength="10">
    </div>
    <div class="form-group">
      <label for="example-text-input" class="form-control-label">Language*</label>
    <select class="js-example-basic-multiple" name="language[]" multiple="multiple">
  <option value="English">English</option>

  <option value="Punjabi">Punjabi</option>
    <option value="Hindi">Hindi</option>
     <option value="Marathi">Marathi</option>
      <option value="Guajarati">Guajarati</option>
      <option value="Kannada">Kannada</option>
      <option value="Tamil">Tamil</option>
      <option value="Bangla">Bangla</option>
      
</select>
   </div>
  
    <div class="form-group">
        <label for="example-mobile-input" class="form-control-label">Doctor Contact Number*</label>
        <input type="number" class="form-control" value="" name="mobileno" required pattern="\d*" maxlength="12" placeholder="phone number should be numeric only">
    </div>
        <div class="form-group">
        <label for="example-mobile-input" class="form-control-label">Doctor Qualification*</label>
        <input type="text" class="form-control" value="" name="description" required maxlength="70">
    </div>
    <div class="form-group">
    <label for="example-email-input" class="form-control-label">Doctor Email*</label>
    <input type="email" class="form-control" value="" name="email" required>
    </div>
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">Doctor Speciality*</label><br>
    <select Style ="width:100%"  class="form-select" aria-label="Default select example" name="department" required>
    
  <option value="">Select Speciality</option>
   @foreach($departmentname as $departments)
  <option value="{{$departments->id}}">{{$departments->dapartment_name}}</option>
  @endforeach
 
</select>
    </div>
<!--<div class="form-group">-->
<!--    <label for="icon" class="form-control-label">Icon Link</label>-->
<!--    <input class="form-control" value="" name="iconlink">-->
    
<!--</textarea>-->
<!--</div>-->
<!--<div class="form-group">-->
<!--    <label for="example-text-input" class="form-control-label">Select Icon</label><br>-->
<!--    <select Style ="width:100%"  class="form-select" aria-label="Default select example" name="icon" >-->
    
<!--  <option value="">Select Doctor First Icon </option>-->
<!--   @foreach($icons as $icon)-->
<!--  <option value="{{$icon->id}}">{{$icon->iconname}}</option>-->
<!--  @endforeach-->
 
<!--</select>-->
<!--    </div>-->
    <div class="form-group">
    <label class="example-email-input">Doctor FaceBook Account Link</label>
    <input  type="link" class="form-control" value="" name="facebooklink">
    </div>
    <div class="form-group">
    <label class="example-email-input">Doctor Twitter Account Link</label>
    <input type="link" class="form-control" value="" name="twiterlink">
    </div>
    <div class="form-group">
    <label class="example-email-input">Doctor Linkedin Account Link </label>
    <input type="link" class="form-control" value="" name="linkedinlink">
    </div>
    

<input type="submit" name="submit">
</form>
<br>
            </div>
          </div>
        </div>
      </div>



      <!-- Footer -->
      @include('layouts.footers.footer')
   
  
  <!-- Argon Scripts -->
  <!-- Core -->
  
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
    <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/6/tinymce.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
         $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
        
    </script>

</body>

</html>
