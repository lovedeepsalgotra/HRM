@include('layouts.app1')  


<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
             
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Appointment</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Appointmentlist</li> 
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
              <h3 class="mb-0">Appointmentlist</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">


 
    <tr>
      <th scope="col">Delete/Edit</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">mobileno</th>
      <th scope="col">email</th>
      <th scope="col">message</th>
      <th scope="col">date</th>
      <th scope="col">time</th>




    </tr>
    </thead>
    <tbody class="list">
    @foreach($appointmentlist as $appointmentlists) 
    <tr>
    <td>
      <a href="{{ route('deleteappointment', ['id' => $appointmentlists->id]) }}" role="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this appointment?')"><i class="fa fa-trash-alt"></i></a>
   

    </td>
      <td>{{$appointmentlists->firstname}}</td>
      <td>{{$appointmentlists->lastname}}</td>
      <td>{{$appointmentlists->mobileno}}</td>
      <td>{{$appointmentlists->email}}</td>
      <td>{{$appointmentlists->message}}</td>
      <td>{{$appointmentlists->date}}</td>
      <td>{{$appointmentlists->time}}</td>
      
    </tr>
@endforeach
    
  </tbody>
</table>
</div>
<div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                <span></span>
                
                  
                
                 
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->
      
      <!-- Footer -->
      @include('layouts.footers.footer')
    
 
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
