@include('layouts.app1')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
             
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  
                  <li class="breadcrumb-item active" aria-current="page">Attendence List</li> 
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
              <h3 class="mb-0">Employee Attendance</h3>
            </div>
            <div class="col-md-12">
                <form action="{{ route('add_emp_post') }}" method="post">
                    @csrf
                    
                
                 <div class="form-group">
    <label for="employee">Employee</label>
    <select name="employee_id" class="form-control">
           <option value="">Select Employee</option>
        @foreach ($emplist as $employee)
     
            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
                        <label>Date</label>
                        <input type="date"  name="login_date" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Login</label>
                        <input type="time"  name="log_in" class="form-control" value="">
                    </div>
                    
                    <div class="form-group">
                        <label>Logout</label>
                        <input type="time"  name="log_out" class="form-control" value="">
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
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
   <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

  </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</body>

</html>
