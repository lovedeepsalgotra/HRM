{{-- @include('layouts.app') --}}
{{-- @extends('layouts.app', ['class' => 'bg-default'])

@include('layouts.headers.guest') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- font awesome link --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12 my-5">
              @if(@session()->has('success'))
                 <div class="alert alert-success">{{session()->get('success')}}</div>
              @endif

              @if(@session()->has('error'))
                 <div class="alert alert-danger">{{session()->get('error')}}</div>
              @endif


              <form action="{{ route('storeip')}}" method="post">
                @csrf
                <div id="req_input" class="datainputs">

                  <div class="form-group mb-3">
                    <label for="">IP Address</label>
                    <input name="ip_address[]" placeholder="Enter IP Address" class="form-control @error('ip_address') is-invalid @enderror" value="" type="text">

                    @error('ip_address')
                       <p class="invalid-feedback mt-1">{{$message}}</p>    
                    @enderror
                  </div>
                </div>

                <div class="col-lg-6 my-3 p-0">
                  <button class="btn btn-sm btn-dark" type="submit">Submit</button>
              </div>

              </form>
            
            <button id="addmore" class="add_input btn btn-sm btn-dark"> <i class="fa-solid fa-plus"></i></button>

            </div>
            </div>
        </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="text-center my-3">IP ADDRESS</h4>
          <table class="table table-striped table-hover table-bordered">
            <tr>
              <th>ID</th>
              <th>IP ADDRESS</th>
              <th>Action</th>
            </tr>
      
            @foreach ($IpAddresses as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->ip_address}}</td>
              <td>
                <div class="div px-2">
                  <a href=""><i class="fa-solid fa-pen mx-2 text-dark"></i></a>
                  <a href=""><i class="fa-solid fa-trash text-dark"></i></a>
                </div>
              </td>
            </tr>
                
            @endforeach
          </table>
        </div>
      </div>
    </div>
    


    <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>


    {{-- <script>
        $('.add-more-btn').click(function(){
          let clone = $('.form-main').clone('.form-block');
          $('.form-main').append(clone);
        });
      
        $(".remove").click(function(e) {
          $(this).closest(".form-group").remove();
          e.preventDefault();
        }); 

           
        // $(document).on('click', '.remove', function () {
        //         $(this).closest('.form-group').remove();
        //     });

    </script> --}}






{{-- <script>
  $(document).ready(function() {
  $("#addmore").click(function() {
    $("#req_input").append('<div class="required_inp mb-3 form-group"><input name="ip_address" placeholder="Enter IP Address" type="text">' + '<button type="button" class="inputRemove btn btn-lg btn-dark" value="-"/></div>');
  });
  $('body').on('click','.inputRemove',function() 
    $(this).parent('div.required_inp').remove()
  });
});
</script> --}}


<script>
  $(document).ready(function() {
  $("#addmore").click(function() {
    $("#req_input").append('<div class="required_inp mb-3 form-group col-md-12"><input name="ip_address[]" placeholder="Enter IP Address" type="text">' + '<button class="inputRemove mx-3 btn btn-sm btn-dark" value="Remove"> <i class="fa-solid fa-minus"></i></button></div>');
  });
  $('body').on('click','.inputRemove',function() {
    $(this).parent('div.required_inp').remove()
  });
});
</script>
    
</body>
</html>