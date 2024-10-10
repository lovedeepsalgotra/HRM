@include('layouts.app1')
 <!-- Header -->
    <!-- Header -->
    

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Doctor</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{route('adddoctor')}}" class="btn btn-sm btn-neutral">Add Doctor</a>
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
              <h3 class="mb-0">Doctor Details</h3>
            </div>
            <div class="card-body">
  
    <form action="{{route('updatedoctor')}}" method="post" class="form" enctype="multipart/form-data">
      @csrf

      <div class="custom-file">
      <label for="example-text-input" class="form-control-label">Doctor Current Image</label><br>
      <img alt="" style="width:15%" src="{{ asset('DoctorlistImage') }}/{{{$getdocdata->image}}}">
    </div>
<br><br>


       <div class="custom-file">
        <br> <br> 
       <label for="example-text-input" class="form-control-label">Add Doctor New Image</label><br>
        
        <input type="file" class="custom-file-input" name="newimage">
         </div>
  
    <div class="form-group">
    <br>
        <label for="example-text-input" class="form-control-label">Doctor Name</label>
        <input class="form-control" type="text" value="{{$getdocdata->name}}"name="name" maxlength="60" require>
    </div>
     <div class="form-group">
      
        <label for="example-text-input" class="form-control-label">Doctor Total Experience</label>
        <input class="form-control" type="text" value="{{$getdocdata->experience}}"name="experience" maxlength="10" required>
    </div>
     <div class="form-group">
      <label for="example-text-input" value="" class="form-control-label">Language</label>
    
      @php $selected_laguanges= explode(',', $getdocdata->language); @endphp
      
    <select class="js-example-basic-multiple" name="language[]" multiple="multiple">
       
         
  <option value="English" <?php if(in_array('English', $selected_laguanges)){ echo "selected";} ?> >English</option>

  <option value="Punjabi" <?php if(in_array('Punjabi', $selected_laguanges)){ echo "selected";} ?> >Punjabi</option>
    <option value="Hindi" <?php if(in_array('Hindi', $selected_laguanges)){ echo "selected";} ?>> Hindi</option>
    <option value="Marathi" <?php if(in_array('Marathi', $selected_laguanges)){ echo "selected";} ?>> Marathi</option>
    <option value="Guajarati" <?php if(in_array('Guajarati', $selected_laguanges)){ echo "selected";} ?>> Guajarati</option>
    <option value="Kannada" <?php if(in_array('Kannada', $selected_laguanges)){ echo "selected";} ?>> Kannada</option>
    <option value="Tamil" <?php if(in_array('Tamil', $selected_laguanges)){ echo "selected";} ?>> Tamil</option>
    <option value="Bangla" <?php if(in_array('Bangla', $selected_laguanges)){ echo "selected";} ?>> Bangla</option>
</select>
    </div>
    <div class="form-group">
        <label for="example-mobile-input" class="form-control-label">Doctor Contact Number</label>
        <input type="number" class="form-control" value="{{$getdocdata->mobileno}}" name="mobileno" required pattern="\d*" maxlength="12" placeholder="phone number should be numeric only"require>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Qualification</label>
        <input class="form-control" type="text" value="{{$getdocdata->description}}"name="description" maxlength="70" require>
    </div>
   
  
    
    <div class="form-group">
    <label class="example-email-input">Doctor Email</label>
    <input type="email" class="form-control" value="{{$getdocdata->email}}" name="email" require>
    </div>
    
     
   
     
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">Doctor Speciality</label><br>
    <select  style="width:100%" class="form-select" aria-label="Default select example" name="department">
    
  <option value="">Select Speciality </option>


  @foreach ($departmentname as $dapartmentnames)
 
  @if($getdocdata->dapartment==$dapartmentnames->id)

  <option  value="{{$getdocdata->id}}">{{$getdocdata->dapartment}}</option>
   @else

  <option  value="{{$dapartmentnames->id}}">{{$dapartmentnames->dapartment_name}}</option>  
  @endif
@endforeach
</select>
    </div>
    
<!--<div class="form-group">-->
<!--    <label for="Iocn Link" class="form-control-label">Icon Link</label>-->
<!--    <input type="link" class="form-control" value="{{$getdocdata->iconlink}}" name="iconlink" require>-->

<!--</div>-->

<!--<div class="form-group">-->
<!--    <label for="example-text-input" class="form-control-label">ICON</label><br>-->
<!--    <select  style="width:100%" class="form-select" aria-label="Default select example" name="icon">-->
    
<!--  <option value="">Select Icon for Home Page </option>-->
<!--   @foreach($icons as $icon)-->
<!--  @if($icon->id==$getdocdata->icon)-->
 
<!--  <option selected value="{{$icon->id}}">{{$icon->iconname}}</option>-->
<!--  @else-->

<!--  <option  value="{{$icon->id}}">{{$icon->iconname}}</option>  -->
<!--  @endif-->
<!--  @endforeach-->
 
<!--</select>-->
<!--    </div>-->
   

<div class="form-group">
    <label class="example-link-input">Doctor FaceBook Account Link</label>
    <input  type="link" class="form-control" value="{{$getdocdata->facebooklink}}" name="facebooklink">
    </div>
    <div class="form-group">
    <label class="example-link-input">Doctor Twitter Account Link</label>
    <input type="link" class="form-control" value="{{$getdocdata->twiterlink}}" name="twiterlink">
    </div>
    <div class="form-group">
    <label class="example-link-input">Doctor Linkedin Account Link</label>
    <input type="link" class="form-control" value="{{$getdocdata->linkedinlink}}" name="linkedinlink">
    </div>

<input type="hidden" name="id" value="{{$getdocdata->id}}">

<input type="submit" name="submit">
</form>
</div>
        </div>
      </div>
      </div>    
<br>

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

  <script>
    tinymce.init({
  selector: 'textarea#basic-example',
  height: 500,
  plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'media', 'table', 'help', 'wordcount'
  ],
  toolbar: 'undo redo | blocks | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});

  </script>
</body>

</html>
