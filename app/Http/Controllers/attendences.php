<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Attendence;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;


class attendences extends Controller
{

    public  function emplist(){
        
//         $password = Hash::make('Azimut555!');
// print_r($password);
// die();
$pagename="employee";
       

        $emplist = Employee::get();

     return view('attendence.employee', compact('emplist','pagename'));

    }
    
    public function edit_attendance(Request $request){
        // dd($request->id);
        $pagename="employee";
        $attendance = Attendence::where("id", $request->id)->first();
        $employee = null;
        if($attendance){
            $employee = Employee::where("id", $attendance->emp_id)->first();
        }
        // dd($attendance);
   
        return view('attendence.edit_attendace', compact('attendance','employee','pagename'));
    }
    public function edit_emp_de(Request $request){
        // dd($request->id);
        $pagename="employee";
        $attendance = Attendence::where("id", $request->id)->first();
        $employee = null;
        if($attendance){
            $employee = Employee::where("id", $attendance->emp_id)->first();
        }
        // dd($attendance);
   
        return view('attendence.edit_attendace', compact('attendance','employee','pagename'));
    }
   public function del_attendance(Request $request){
    $pagename = "employee";
    $attendance = Attendence::where("id", $request->id)->first();

    if($attendance){
        $employee = Employee::where("id", $attendance->emp_id)->first();

        // Delete the attendance record
        $attendance->delete();
    } else {
        $employee = null;
    }

return redirect('attendenceslist/');}




public function del_emp_de(Request $request){
    $pagename = "employee";
    $attendance = Attendence::where("id", $request->id)->first();

    if($attendance){
        $employee = Employee::where("id", $attendance->emp_id)->first();

        // Delete the attendance record
        $attendance->delete();
    } else {
        $employee = null;
    }

        return redirect('emplist/');}





     public function add_emp(Request $request){
      $pagename="Add Attendence ";
      $emplist = Employee::get();
        return view('attendence.add_emp',compact('pagename','emplist'));
    }
    
     public function cal_salary(Request $request){
         
        $salary_amount = (int)(str_replace(",","",$request->salary));
        
         
        $deduction_leaves_in_mins = ($request->detuctable_leaves * 9) * 60;
        $total_mins = $request->deuctable_hours + $deduction_leaves_in_mins;
        
        $cost_per_minute = $salary_amount/((9 * $request->total_days_in_month) * 60);
        $cost_per_day = $salary_amount/($request->total_days_in_month);
        
        $deductable_amount = $total_mins * $cost_per_minute;
        
        $salary_payable = round($salary_amount - $deductable_amount);
        
        echo '<b>Cost Per Minute Formula =</b> Salary/((Hours per day * Total days in month) * Minutes per hour) <br>';
        echo '<b>Cost Per Minute = </b>'.$salary_amount . '/' . '((9 * ' . $request->total_days_in_month . ') * 60)<br>';
        echo '<b style="color: green">Cost Per Minute = </b>'.$cost_per_minute;
        
        echo ' <br>';
        echo ' <br>';
        
        echo '<b style="color:brown">Cost Per Day = </b>'.round($cost_per_day, 2);
        
        echo ' <br>';
        echo ' <br>';
        
        echo '<b>Deductable Leaves in minutes Formula =</b> (No. of leave days * Hours per day) * Minutes per hour';
        echo ' <br>';
        echo '<b>Deductable Leaves in minutes =</b> ('. $request->detuctable_leaves.' * 9) * 60';
        echo ' <br>';
        echo '<b style="color: green">Deductable Leaves in minutes =</b> '.$deduction_leaves_in_mins;
        echo ' <br>';echo ' <br>';
        
        
        echo '<b>Total deductable mins =</b> Deductable Leaves in minutes + Deductable short hours in minutes';
        echo ' <br>';
        echo '<b>Total deductable mins =</b> '.$deduction_leaves_in_mins.' + '.$request->deuctable_hours;
        echo ' <br>';
        echo '<b  style="color: green">Total deductable mins = '.$total_mins;
        echo ' <br>';echo ' <br>';echo ' <br>';
        
        echo '<b>Salary to be paid = </b>Salary - Total deductable mins';
        echo ' <br>';
        echo '<h1><b style="color: green">Salary to be paid</b> = '.$salary_payable.'</h1>';
        

        
   
    }
    
    public function emp_detail(Request $request){
        
        $year = date('Y');
        if(isset($request->year)){
            $year = $request->year;
        }
        $pagename="Employee Attendance (".date("F, Y", strtotime(date($year."-".$request->month."-01"))).")";
        $month = $request->month;
        
        
        $emp = Employee::where("id", $request->id)->first();
        
        $attendance_records = Attendence::where("emp_id", $request->id)
                            ->where("login_date", ">=", $year."-".$request->month."-01")
                            ->where("login_date", "<=", $year."-".$request->month."-31")
                            ->orderBy("login_date", "asc")
                            ->get();
        
        // dd($attendance_records);
        
        $short_leaves_count = 0;
        $short_leaves_minutes = 0;
        $total_working_days_of_month = 0;
        $total_working_days_of_emp = 0;
        $total_leaves = 0;
        $leave_dates = [];
        
        $working_dates = [];
        
        $month_date = date($year."-".$month."-01");


        
        
        foreach($attendance_records as $sr => $row){
            $working_dates[] = $row->login_date;
            if(($row->deduction_hrs)>0){
      
                $short_leaves_count++;
                $short_leaves_minutes = $short_leaves_minutes + $row->deduction_hrs;
           
            }
        
       
            $total_working_days_of_emp++;
      
        }    
        $leave_together = 0;
        $leave_tobe_deduct = [];
        $leave_tobe_deduct_from_bal = [];
        for($i=1; $i<=32; $i++){
            $new_month = date("m", strtotime($month_date));
            $day = date("D", strtotime($month_date));
            $holidays = array('2024-01-01','2024-01-26','2024-10-02');
            
            if($month == $new_month){
               
                if($day=='Sat' || $day=='Sun' || in_array($month_date,$holidays)){
                
                }else{
                    
                    $total_working_days_of_month++;
                    
                    if(!in_array($month_date, $working_dates) && $month_date<(date("Y-m-d"))){
                        
                        if($day=='Mon'){
                            $friday  =date('Y-m-d', strtotime('-3 day', strtotime($month_date)));
                            $saturday  =date('Y-m-d', strtotime('-2 day', strtotime($month_date)));
                            $sunday  =date('Y-m-d', strtotime('-1 day', strtotime($month_date)));
                            if(in_array($friday,$leave_dates)){
                                $leave_dates[] = $saturday;
                                $leave_dates[] = $sunday;
                                $leave_tobe_deduct_from_bal[] = $saturday;
                                $leave_tobe_deduct_from_bal[] = $sunday;
                                $total_leaves+=2;
                            }
                        }
                        if($leave_together==1){
                            $total_leaves++;
                            $leave_dates[] = $month_date;
                            $leave_tobe_deduct[] = $month_date;
                            $leave_together = 1;
                        }else{
                            $total_leaves++;
                            $leave_dates[] = $month_date;
                            $leave_tobe_deduct_from_bal[] = $month_date;
                            $leave_together = 1;
                        }
                       
                    }else{
                        $leave_together = 0;
                    }
                }
                
                $month_date = date('Y-m-d', strtotime($month_date . ' +1 day'));
                
            }
           
        }
        
        $total_leave_bal = (int)$emp->leave_bal;
        foreach($leave_tobe_deduct_from_bal as $leave){
            if($total_leave_bal>0){
                $total_leave_bal--;
            }else{
                $leave_tobe_deduct[] = $leave;
            }
            
        }
        
        // $emp->leave_bal = $total_leave_bal;
        // $emp->save();
        
         $deductable_hours = 0;
        
        if($short_leaves_minutes>240){
            $deductable_hours = $short_leaves_minutes - 240;
        }

        $short_leaves_minutes = $short_leaves_minutes > 240 ?  '<span style="color: red">'. intdiv(($short_leaves_minutes - 240), 60).':'. (($short_leaves_minutes - 240) % 60) . ' (Deductable)</span>':  intdiv($short_leaves_minutes, 60).':'. ($short_leaves_minutes % 60) . ' (Non-Deductable)';
        
       
       

   
        return view('attendence.emp_detail', compact('pagename','emp','attendance_records','year','month','leave_tobe_deduct','deductable_hours','short_leaves_count', 'short_leaves_minutes', 'total_working_days_of_month', 'total_working_days_of_emp','total_leaves','leave_dates'));
    }
    public function edit_attendance_post(Request $request){
        // dd($request->id);
        
        
        $pagename="employee";
        $attendance = Attendence::where("id", $request->id)->first();
        
        
        // dd($request->log_out);
        if($attendance){
            
            $login_default_time = '09:25:00';
            $logout_default_time = '19:00:00';
            
            if($attendance->emp_id == 14){
                $logout_default_time = '16:59:00';
            }
            
            if($attendance->emp_id == 12){
                $login_default_time = '09:45:00';
                $logout_default_time = '18:45:00';
            }
            $log_in = $request->log_in;
            if ($log_in > $login_default_time)
            {
                $start = strtotime('09:00:00');
                $end = strtotime($log_in);
                $mins = ($end - $start) / 60;
                $login_deduction = round($mins);
                $attendance->deduction_hrs = $login_deduction;
                $attendance->log_in = $log_in;
              
            }else{
                $login_deduction = 0;
                $attendance->deduction_hrs = $login_deduction;
                $attendance->log_in = $log_in;
            }
            $log_out = $request->log_out=='00:00' ? null : $request->log_out;
            if ($log_out!="" && $log_out!='00:00' && $log_out < $logout_default_time)
                {
                  
                    if($log_out > '14:30:00'){
                        $start = strtotime($log_out);
                        $end = strtotime('19:00:00');
                        $mins = ($end - $start) / 60;
                        $new_deduction = round($mins);
                        $new_deduction = $new_deduction + $login_deduction;
                        $attendance->deduction_hrs = $new_deduction;
                        $attendance->log_out = $log_out;
                    }else if($log_out > '13:30:00' && $log_out < '14:30:00'){
                        $start = strtotime('13:30:00');
                        $end = strtotime('18:00:00');
                        $mins = ($end - $start) / 60;
                        $new_deduction = round($mins);
                        $new_deduction = $new_deduction + $login_deduction;
                        $attendance->deduction_hrs = $new_deduction;
                        $attendance->log_out = $log_out;
                    }else{
                        $start = strtotime($log_out);
                        $end = strtotime('18:00:00');
                        $mins = ($end - $start) / 60;
                        $new_deduction = round($mins);
                        $new_deduction = $new_deduction + $login_deduction;
                        $attendance->deduction_hrs = $new_deduction;
                        $attendance->log_out = $log_out;
                    }
                   
                    
                }else{
                
                $attendance->log_out = $log_out;
            }
           
           
        }
        
        $attendance->save();
        // dd($attendance);
   
        return redirect('edit_attendance/'.$request->id);
    }
 public function add_emp_post(Request $request){
       
        
    //     $pagename="employee attedance";
    //     $attendance = Attendence::create([
    //     'emp_id' => $request->employee_id,
    //     'log_in' => $request->log_in,
    //     'log_out' => $request->log_out,
    //     'login_date' => $request->login_date 
    // ]);
        
      
        
    //     $attendance->save();
    //     // dd($attendance);
   
    // dd($request->id);
    $pagename = "employee";
    
    // Create a new Attendence instance
    $attendance = new Attendence();
    
    // The rest of the logic remains the same as in the edit_attendance_post function
    $attendance->emp_id = $request->input('employee_id'); // Replace 'emp_id' with the actual input name from the form
    $attendance->login_date = $request->input('login_date'); // Replace 'login_date' with the actual input name from the form


    $login_default_time = '09:25:00';
    $logout_default_time = '19:00:00';

    if ($attendance->emp_id == 14) {
        $logout_default_time = '16:59:00';
    }

    if ($attendance->emp_id == 12) {
        $login_default_time = '09:45:00';
        $logout_default_time = '18:45:00';
    }

    $log_in = $request->log_in;
    if ($log_in > $login_default_time) {
        $start = strtotime('09:00:00');
        $end = strtotime($log_in);
        $mins = ($end - $start) / 60;
        $login_deduction = round($mins);
        $attendance->deduction_hrs = $login_deduction;
        $attendance->log_in = $log_in;
    } else {
        $login_deduction = 0;
        $attendance->deduction_hrs = $login_deduction;
        $attendance->log_in = $log_in;
    }

    $log_out = $request->log_out == '00:00' ? null : $request->log_out;
    if ($log_out != "" && $log_out != '00:00' && $log_out < $logout_default_time) {
        if ($log_out > '14:30:00') {
            $start = strtotime($log_out);
            $end = strtotime('19:00:00');
            $mins = ($end - $start) / 60;
            $new_deduction = round($mins);
            $new_deduction = $new_deduction + $login_deduction;
            $attendance->deduction_hrs = $new_deduction;
            $attendance->log_out = $log_out;
        } else if ($log_out > '13:30:00' && $log_out < '14:30:00') {
            $start = strtotime('13:30:00');
            $end = strtotime('18:00:00');
            $mins = ($end - $start) / 60;
            $new_deduction = round($mins);
            $new_deduction = $new_deduction + $login_deduction;
            $attendance->deduction_hrs = $new_deduction;
            $attendance->log_out = $log_out;
        } else {
            $start = strtotime($log_out);
            $end = strtotime('18:00:00');
            $mins = ($end - $start) / 60;
            $new_deduction = round($mins);
            $new_deduction = $new_deduction + $login_deduction;
            $attendance->deduction_hrs = $new_deduction;
            $attendance->log_out = $log_out;
        }
    } else {
        $attendance->log_out = $log_out;
    }

    $attendance->save();
    // dd($attendance);

        return redirect('add_emp/');
    }

    public function comeoffice(request $request)
    {
        $id = $request->id;
         
        
       
        try{
             $id = Crypt::decrypt($id);
        }catch(DecryptException $e){
            return "Invalid ID";
        }
        
        $login_default_time = '09:25:00';
        $logout_default_time = '19:00:00';
        
        if($id == 14){
            $logout_default_time = '17:00:00';
        }
        
        if($id == 12){
            $login_default_time = '09:45:00';
            $logout_default_time = '18:45:00';
        }

       

        $employee = Employee::where("id", $id)->first();
        
        if(!$employee){
            return "Invalid ID.";
        }else{
           $today = date("Y-m-d");
        date_default_timezone_set('Asia/Kolkata');
        $currentTime = date('H:i:s', time());

        $data = Attendence::where('emp_id', $id )
        ->where('login_date',$today)
        ->first();

     if ($data != null )
        {
          
            $today = date("Y-m-d");
            $currentTime = date('H:i:s', time());

            $data = Attendence::where('emp_id', $id )
            ->where('login_date',$today)
            ->first();
           
          
           
          
            // $login_date=$data->login_date;
            $log_out = $data->log_out;
            $today = date("Y-m-d");

            // $approve_logout=$data->Approve;
          
            if($log_out == "")
            {
             

                $old_data = $data->deduction_hrs;
                
                // $emp_id = $data->emp_id;
                $log_out = $currentTime;

                $new_deduction = 0;

                if ($log_out < $logout_default_time)
                {
                  
                    if($log_out > '14:30:00'){
                        $start = strtotime($log_out);
                        $end = strtotime('19:00:00');
                        $mins = ($end - $start) / 60;
                        $new_deduction = round($mins);
                        $new_deduction = $new_deduction + $old_data;
                        $today = date("Y-m-d");
                        $data = array(
                            "deduction_hrs" => $new_deduction,
                            "log_out" => $log_out,
                        );
                    }else{
                        $start = strtotime($log_out);
                        $end = strtotime('18:00:00');
                        $mins = ($end - $start) / 60;
                        $new_deduction = round($mins);
                        $new_deduction = $new_deduction + $old_data;
                        $today = date("Y-m-d");
                        $data = array(
                            "deduction_hrs" => $new_deduction,
                            "log_out" => $log_out,
                        );
                    }
                   
                    
                    Attendence::where('emp_id', $id)
                    ->where('login_date',$today)
                    ->update($data);
                }else{
                    $data = array(
                            "deduction_hrs" => 0,
                            "log_out" => $log_out,
                        );
                    Attendence::where('emp_id', $id)
                    ->where('login_date',$today)
                    ->update($data);
                }
            }
        
            else
            {
                $emp_id = $data->emp_id;
                $log_out = $currentTime;
                $today = date("Y-m-d");
                $data = array(
                    "unaproved" => $log_out,
                );
                Attendence::where('emp_id', $id)
                ->where('login_date',$today)
                ->update($data);
            }
        }
        
        
        
        else
        {

            date_default_timezone_set('Asia/Kolkata');
            $currentTime = date('H:i:s', time());
            $deduction = 0;

            $data = Attendence::where('emp_id', $id)->first();
            $emp_id = $id;
       

            $log_in = $currentTime;

            $today = date("Y-m-d");
            
            

            if ($log_in > $login_default_time)
            {
                $start = strtotime('09:00:00');
                $end = strtotime($log_in);
                $mins = ($end - $start) / 60;
                $deduction = round($mins);
                $data = array(
                    "emp_id" => $emp_id,
                    "log_in" => $log_in,
                    "login_date" => $today,
                    "deduction_hrs" => $deduction
                );
              
            }else{
                $data = array(
                    "emp_id" => $emp_id,
                    "log_in" => $log_in,
                    "login_date" => $today,
                    "deduction_hrs" => 0
                );
            }
            Attendence::insert($data);

        }
         $today = date("Y-m-d");
$data = Attendence::where('emp_id', $id)
->where('login_date',$today)
->first();



        echo '<h1 style="text-align: center">Hi '.$employee->name.'!<br>Thank You, Your attendance has been marked.</h1><br><b style="color:green">login time: '.date("h:i a", strtotime($data->log_in)).'<br><br><b style="color:red"> log out time:'.(($data->log_out!=NULL) ? date("h:i a", strtotime($data->log_out)) : 'Not Available'); 
        }

        
    }

    public function attendencelist()
    {

        $pagename = "Attendence";

        $attendencelist = Attendence::select('employees.name','attendence.*')->leftjoin('employees','employees.id','=','attendence.emp_id')
        ->orderBy('id','desc')
        ->get();

     
    

           

        return view('attendence.attendence', compact('attendencelist','pagename'));

        //    return view('pages.tables',$doctorlist);
        

        
    }
    
    

}

