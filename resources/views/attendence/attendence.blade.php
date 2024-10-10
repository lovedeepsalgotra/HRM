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
          
          
           <div class="col-lg-6 col-5">

               

                 <div class="form-inline" style="float:right">
                   
                   <a style="position: absolute; top: -110px; right: 88px" role="button" class="btn btn-warning" href="{{ route('add_emp') }}">Add Attendence</a>
                </div>
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
              <h3 class="mb-0">Attendance Record</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="myTable">
                <thead class="thead-light">
<tr>
                                     <th scope="col" class="sort">Sr.no</th>
                                     <th scope="col" class="sort">Action</th>
                                     
                    
                    <th scope="col" class="sort">Employee Name</th>
                    <th scope="col">Log in time</th>
                    <th scope="col" class="sort">Log out time</th>
                  
                  
                     <th scope="col" class="sort">UnApprove</th>
                  
                   
                    <th scope="col" class="sort">Deduction_hrs </th>
                    
                    <th scope="col" class="sort">login_date</th>
                   
                   
                    
                  </tr>
                </thead>
                <tbody class="list">

                @foreach($attendencelist as $sr => $row)

                @if($row->unaproved!=null)
                <tr style="background-color: #ff7675;color:white">
                  @else
                  <tr>
                  @endif
                  
                  
             <td>
                      <div class="d-flex align-items-center">
                        <span>{{$sr + 1}}</span>
                       
                      </div>
                    </td>
                     <td>
                      <div class="d-flex align-items-center">
                       <a href="{{ route('edit_attendance', ['id' => $row->id]) }}">Edit</a>
&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="{{ route('del_attendance', ['id' => $row->id]) }}">Delete</a>
                       
                      </div>
                    </td>
                      <td>
                      <div class="d-flex align-items-center">
                        <span>{{$row->name}}</span>
                       
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span>{{$row->log_in !=null ?  date("h:i a", strtotime($row->log_in)) : ''}}</span>
    
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span>{{$row->log_out =='00:00:00' || $row->log_out ==null ? '' : date("h:i a", strtotime($row->log_out)) }}</span>
                       
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span>{{$row->unaproved !=null ?  date("h:i a", strtotime($row->unaproved)) : ''}}</span>
                       
                      </div>
                    </td>
                    @if($row->deduction_hrs > 0)
                    <td style="background-color: #d1a400; color:white">
                    @else
                    <td>
                    @endif
                      <div class="d-flex align-items-center">
                        <span>
{{ intdiv($row->deduction_hrs, 60).':'. ($row->deduction_hrs % 60) }}
                          </span>
                       
                      </div>
                    </td>
                     <td>
                      <div class="d-flex align-items-center">
                        <span>{{date("d-m-Y", strtotime($row->login_date))}}</span>
                       
                      </div>
                    </td>
                  
                    
                   
                  </tr>
                 @endforeach
                  
                
                </tbody>
              </table>
            </div>
       
            <!--  pagination -->
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
   <script>
    $(document).ready( function () {
        var d = new Date();
        var month = d.getMonth()+1;
var day = d.getDate();

var year = d.getFullYear();
    $('#myTable').DataTable({
        "search": {
    "search": day+'-'+month+'-'+year
  }
    });
} );

  </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</body>

</html>
