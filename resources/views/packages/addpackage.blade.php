@include('layouts.app1')
<style>
    .add_item_btn, .remove_item_btn{
        padding: 1px 10px;
        margin: 5px;
    }
    .module label{
        color: #fff!important;
    }
</style>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
           
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Packages</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Package</li> 
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              
              <a href="{{ route('packagelist') }}" class="btn btn-sm btn-neutral">Packages list</a>
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
              <h3 class="mb-0">Details</h3>
            </div>
            <div class="card-body">
  
    <form action="{{route('addpackages')}}" method="POST" class="form" enctype="multipart/form-data">
      @csrf

       <!--<div class="custom-file">-->
       <!--  <label class="custom-file-label" for="customFileLang">Image</label>-->
       <!-- <input type="file" class="custom-file-input" name="img">-->
       <!--</div>-->
    <div class="form-group">
      <br>
        <label for="example-text-input" class="form-control-label">Packages Title*</label>
        <input class="form-control" type="text" value=""name="title" required>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Packages Price*</label>
        <input class="form-control" type="text" value=""name="price" required>
    </div>
  
 
<!--    <div class="form-group">-->
<!--    <label for="description" class="form-control-label">Description</label>-->
<!--    <textarea  name="description" class="form-control" >-->
<!--</textarea>-->
<!--</div>-->
<div class="form-group">
    <label for="example-text-input" class="form-control-label">Select Category*</label><br>
    <select Style ="width:100%"  class="form-select form-control" aria-label="Default select example" name="category_id">
    
    
    @foreach ($packagescategorylist as $packagescategorylists) 
  <option value="{{$packagescategorylists->id}}">{{$packagescategorylists->category_name}}</option>

 @endforeach
 
</select>
    </div>
<div class="form-group">
<!--    <label for="description" class="form-control-label">Icon Link</label>-->
<!--    <input class="form-control" value="" name="iconlink" >`-->
    
</textarea>
</div>
<input type="hidden" id="count_value"name="subtitle_count" value="1">
<div class="module">
<div class="submodule p-3 m-3" style="background-color:grey ">
    

<div class="form-group" id="showsubtitle">
    <label for="description" class="form-control-label">Packages Subtitle*</label>
    <input class="form-control" value="" name="package[subtitle1][]" required>
   
    

</div>

<div class="tests">
<div class="form-group"id="show_item">
    <label for="description" class="form-control-label">Packages Test name</label>
    <input class="form-control" value="" id="testname" name="package[subtitle1][test_name1][]">
 
   <button type="button" class="btn btn-primary add_item_btn float-right">+</button>

</div>
</div>

</div>

    </div>
 <button type="button" class="btn btn-primary add_subtitle_btn float-right">Add Packages Subtitle</button>
 <button type="button" class="btn btn-danger remove_subtitle_btn float-right">Remove Packages Subtitle</button>
<input type="submit" name="submit">
</form>
<br>
            </div>
          </div>
        </div>
      </div>
    
  
      <!-- Footer -->
      @include('layouts.footers.footer')
   <script>
       
$(document).ready(function(){
    
    
    
    
    
    $(".add_subtitle_btn").click(function(e){
        
        var count=$('#count_value').val();
        
       count= parseInt(count)+1;
     
     $('#count_value').val(count);
        
        e.preventDefault();
        $(".module").append(`<div class="submodule p-3 m-3" style="background-color:grey">

<div class="form-group" id="showsubtitle">
    <label for="description" class="form-control-label">Subtitle*</label>
    <input class="form-control" value="" name="package[subtitle${count}][]" required>
    
    

</div>
<div class="tests">
<div class="form-group"id="show_item">
    <label for="description" class="form-control-label">Test name</label>
    <input class="form-control" value="" id="testname" name="package[subtitle${count}][test_name${count}][]">
  <button type="button" class="btn btn-primary add_item_btn float-right">+</button>
  

</div>
</div>

</div>`)
    });
    
    $(document).on('click','.remove_subtitle_btn',function(e){
        
        e.preventDefault();
        
        var row_item=$('.submodule').last();
        
        row_item.remove();
    })

    
    
    $("body").on("click",".add_item_btn", function(e){
       
     
        var target = $(this).closest('.submodule').find('.tests');
        var name = target.find('input').attr('name');
        e.preventDefault();
    
        
        target.append(`<div class="form-group"id="show_item">
    <label for="description" class="form-control-label">Test name</label>
    <input class="form-control" value="" id="testname" name="${name}" required>
    <button type="button" class="btn btn-primary add_item_btn float-right">+</button>
  <button type="button" class="btn btn-danger remove_item_btn float-right">-</button>
  </div>`)
    });
    
    $(document).on('click','.remove_item_btn',function(e){
        
        e.preventDefault();
        var row_item=$(this).closest('div');
        
        row_item.remove();
    })
})

           
           
   </script>
  
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


</body>

</html>
