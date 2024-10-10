@include('layouts.app1')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Setting</a></li>
                 
                </ol>
              </nav>
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
              <h3 class="mb-0">Setting</h3>
            </div>
            <div class="card-body">
    <form action="{{route('addsetting')}}" method="post" class="form" enctype="multipart/form-data">

   
     
    @csrf
         
        <label for="example-mobile-input" class="form-control-label">Current Banner Video of Home page</label>
    <div class="form-group">
        <video width="400" controls>
  <source src="{{asset('bannervideo')}}/{{$getsettingdata->video}} ">
  </video>
   </div>
   
   
   <div class="form-group">
        <label for="example-mobile-input" class="form-control-label">Change Banner Video Of Home Page</label>
        <input class="form-control" type="file" name="video" >
    </div>




 <div class="form-group">
        <label for="example-mobile-input" class="form-control-label">Current Logo</label><br>
   <img  style ="width:10%"src="{{asset('logo')}}/{{$getsettingdata->logo}}">
    </div>
     
    <div class="form-group">
        <label for="example-mobile-input" class="form-control-label">Change the logo</label>
        <input class="form-control" type="file" name="logo" >
    </div>
   
    <div class="form-group">
        <label for="example-mobile-input" class="form-control-label">Copyright</label>
        <input class="form-control" type="text" value="{{$getsettingdata->copyright ?? '' }}"name="copyright" required>
    </div>
    <div class="form-group">
        <label for="example-mobile-input" class="form-control-label">Phone No</label>
        <input class="form-control" type="text" value="{{$getsettingdata->phoneno ?? '' }}"name="phoneno" maxlength="12" required>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Open Hours</label>
        <input class="form-control" type="text" value="{{$getsettingdata->openhours ?? ''}}"name="openhours" required>
    </div>
  
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Address</label>
        <input type="text" class="form-control" value="{{$getsettingdata->address ?? ''}}" name="address" required>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Email</label>
        <input type="email" class="form-control" value="{{$getsettingdata->email ?? ''}}" name="email" required>
    </div>
    
    <!--<div class="form-group">-->
    <!--    <label for="example-text-input" class="form-control-label">About-us Title</label>-->
    <!--    <input type="text" class="form-control" value="{{$getsettingdata->abouttitle ?? ''}}" name="abouttitle" required>-->
    <!--</div>-->
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">About-us Description</label>
        <input type="text" class="form-control" value="{{$getsettingdata->aboutdes ?? ''}}" name="aboutdes" required>
    </div>

    <div class="form-group">
        <label for="example-mobile-input" class="form-control-label">Current Image</label><br>
   <img  style ="width:10%"src="{{asset('logo')}}/{{$getsettingdata->image}}">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">About-us Image</label>
        <input type="file" class="form-control" value="" name="image" >
    </div>


    
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">facebook</label>
        <input type="text" class="form-control" value="{{$getsettingdata->facebook ?? ''}}" name="facebook" >
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Linkedin</label>
        <input type="text" class="form-control" value="{{$getsettingdata->linkedin ?? ''}}" name="linkedin" >
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Instagram</label>
        <input type="text" class="form-control" value="{{$getsettingdata->instagram ?? ''}}" name="instagram" >
    </div> 
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">CIN</label>
        <input type="text" class="form-control" value="{{$getsettingdata->cin ?? ''}}" name="cin" required>
    </div>
<input type="hidden" name="id" value="{{$getsettingdata->id ?? ''}}"> 
   

<input type="submit" name="submit">
</form>
    
    </div>
        </div>
      </div>
      </div>
      <!-- Footer -->
      @include('layouts.footers.footer')
    </div>
  </div>
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
