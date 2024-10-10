@include('layouts.app1')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
             
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  
                  <li class="breadcrumb-item active" aria-current="page">Attendance Details</li> 
                 
                  @csrf
                </ol>
                @php
                
                if($month==date('m')){
                
                    $previous_month = date('F, Y', strtotime(date('Y-m')." -1 month"));
                    $previous_month_num = date('m', strtotime(date('Y-m')." -1 month"));
                    $previous_month_year = date('Y', strtotime(date('Y-m')." -1 month"));
                    
                    }else{
                    $previous_month = date('F, Y', strtotime(date('Y-m')));
                    $previous_month_num = date('m', strtotime(date('Y-m')));
                    $previous_month_year = date('Y', strtotime(date('Y-m')));
                    }
                @endphp
                
               
              </nav>

            </div>
           
            <div class="col-lg-6 col-5">

                 @if(isset(auth()->user()->id))
                                 <a style="position: absolute; top: -95px; right: 88px" role="button" class="btn btn-warning" href="{{ route('emp_detail', ['id' => $emp->id, 'month' => $previous_month_num, 'year' => $previous_month_year ]) }}">View {{ $previous_month }}</a>

                 <div class="form-inline" style="float:right">
                    <input type="text" style="border-radius:0px" placeholder="Enter Employee Salary" class="form-control" id="salary">
                    <button style="border-radius:0px"  class="btn btn-primary" id="cal_salary">Calculate Payable Salary</button>
                </div>
                
                @else
                
                                <a style="position: absolute; top: -110px; right: 88px" role="button" class="btn btn-warning" href="{{ route('emp_detail', ['id' => $emp->id, 'month' => $previous_month_num, 'year' => $previous_month_year ]) }}">View {{ $previous_month }}</a>

                  @endif
                

                  
                  

            </div>
            
          
          
          </div>
        </div>
      </div>
    </div>
    
   
    <!-- Page content -->
    <div class="container-fluid mt--6">
        
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                <div class="row">
                    <div class="col-md-2">
                        <small>Employee Name</small>
                        <h3 class="mb-0 text-capitalize" >{{ $emp->name }}</h3>
                    </div>
                    
                    <div class="col-md-1">
                        <small>Sht. Leaves</small>
                        <h3 class="mb-0 text-capitalize" >{{ $short_leaves_count }}</h3>
                    </div>
                    
                    <div class="col-md-2">
                        <small>Short Leaves (hrs)</small>
                        <h3 class="mb-0 text-capitalize" >{!! $short_leaves_minutes !!}</h3>
                    </div>
                    
                    <div class="col-md-2">
                        <small>Working Days</small>
                        <h3 class="mb-0 text-capitalize" >{{ $total_working_days_of_emp }} out  of {{ $total_working_days_of_month }}</h3>
                    </div>
                    
                    
                        <div class="col-md-5" style="background: #f3f3f3;padding: 2px 12px; border: 1px solid #ddd;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <small>Pre-Leaves <br> Bal.</small>
                                            <h3 class="mb-0 text-capitalize" >{{ (int)$emp->leave_bal }}</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <small>Updated Leave <br> Bal</small>
                                            <h3 class="mb-0 text-capitalize" >{{ (int)$emp->leave_bal -  ($total_leaves - count($leave_tobe_deduct))}}</h3>
                                        </div>
                                    </div>
                                    
                                
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                         <div class="col-md-6">
                                            <small>Leaves <br> Taken</small>
                                            <h3 class="mb-0 text-capitalize" >{{ $total_leaves }}</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <small >Deductable <br> leaves</small>
                                            @if(count($leave_tobe_deduct)>0)
                                            <h3 class="mb-0 text-capitalize" style="color: red">{{ count($leave_tobe_deduct) }}</h3>
                                            @else
                                            <h3 class="mb-0 text-capitalize" >{{ count($leave_tobe_deduct) }}</h3>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                 
                    
                    
                    
                    
                </div>
                
                </div>
            
            </div>
        </div>
        </div>
      <div class="row">
        <div class="col-md-9">
         <div class="card" style="display:none" id="salary_detail">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Calculated Salary</h3>
            </div>
            <div class="card-body">
                
            </div>
            
        </div>
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
                                    
                                        @if(isset(auth()->user()->id))
                     <th scope="col" class="sort">Action</th>
                   @endif
                    <th scope="col">Log in time</th>
                    <th scope="col" class="sort">Log out time</th>
                  
                  
                     <th scope="col" class="sort">UnApprove</th>
                  
                   
                    <th scope="col" class="sort">Deduction_hrs </th>
                    
                    <th scope="col" class="sort">login_date</th>
                   
                   
                   
                    
                  </tr>
                </thead>
                <tbody class="list">

                @foreach($attendance_records as $sr => $row)

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
                       @if(isset(auth()->user()->id))
                     <td>
                      <div class="d-flex align-items-center">
                       <a href="{{ route('edit_emp_de', ['id' => $row->id]) }}">Edit</a>
                     &nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="{{ route('del_emp_de', ['id' => $row->id]) }}">Delete</a>
                                              
                      </div>
                    </td>
                   @endif
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
        
        <div class="col-md-3">
            <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Leaves Record</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush" >
                <thead class="thead-light">
<tr>
                                     <th scope="col" class="sort">Sr.no</th>
                                    
                                     
                    
                   
                    <th scope="col">Date</th>
                   
                   
                    
                  </tr>
                </thead>
                <tbody class="list">

                @foreach($leave_dates as $sr => $row)

                
                  <tr>

                  
             <td>
                      <div class="d-flex align-items-center">
                        <span>{{$sr + 1}}</span>
                       
                      </div>
                    </td>
                     
                   @if(in_array($row, $leave_tobe_deduct))
                    <td style="background-color: #d1a400; color:white">
                      <div class="d-flex align-items-center">
                          
                        <b>({{date("D", strtotime($row))}}) </b> &nbsp; <span > {{ date("d-m-Y", strtotime($row)) }}</span>
                        
    
                      </div>
                    </td>
                    
                    @else
                        <td>
                      <div class="d-flex align-items-center">
                          
                        <b>({{date("D", strtotime($row))}}) </b> &nbsp; <span > {{ $row }}</span>
                        
    
                      </div>
                    </td>
                        @endif
                    
                  
                    
                   
                  </tr>
                 @endforeach
                  
                
                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
      <!-- Dark table -->
      
      <!-- Footer -->
      @include('layouts.footers.footer')
    
  
  <!-- Argon Scripts -->
  <!-- Core -->


 
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js') }}"></script>
   <script>
    $(document).ready( function () {
        var d = new Date();
        var month = d.getMonth()+1;
var day = d.getDate();

var year = d.getFullYear();
    $('#myTable').DataTable({
        "pageLength": 50
//         "search": {
//     "search": day+'-'+month+'-'+year
//   }
    });
     
    
    $("#cal_salary").click(function(){
        
        const price = 1470000.15;
        
        var total_days_in_month = <?php echo cal_days_in_month(CAL_GREGORIAN,$month,$year); ?>;
        var detuctable_leaves = <?php echo count($leave_tobe_deduct); ?>;
        var deuctable_hours = <?php echo $deductable_hours; ?>;
        var salary = $("#salary").val();
        var token = $('input[name="_token"]').val();
        
        
        $.ajax({
            url: "{{ route('cal_salary') }}",
            method: "post",
            data: {_token:token, total_days_in_month:total_days_in_month, detuctable_leaves:detuctable_leaves, deuctable_hours:deuctable_hours, salary:salary},
            success: function(result){
               
                $("#salary_detail .card-body").html(result);
                 $("#salary_detail").show();
            }
        })
        
    })
    
    $("#salary").on('keyup', function(){
    var n = parseInt($(this).val().replace(/\D/g,''),10);
    $(this).val(n.toLocaleString());
});
} );

  </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</body>

</html>
