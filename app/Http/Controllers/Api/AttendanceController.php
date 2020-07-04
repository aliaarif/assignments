<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Attendance;
use Carbon\Carbon;
use App\Department;
use App\User;
use App\Profile;
use DB;

class AttendanceController extends Controller
{


public function convertDate($date) {

echo $strDate = substr($date,4,11);
    $new_date = date('yyyy-mm-dd', strtotime($strDate));

return $new_date;


}




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Users = User::all();
        $Departments = Department::all();
        return view('staff.attendance.create', compact('Users', 'Departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required|date',
        ]);

        $Attendance = [];

        $Users = $request->except('_token', 'date', 'department_id', 'batch', 'datatable_length');

        foreach ($Users as $ID => $Status) {
            $Attendance[] = [
                'user_id' => $ID,
                'department_id' => $request->department_id,
                'date' => Carbon::parse($request->date),
                'attendance' => $Status,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        Attendance::insert($Attendance);

        return redirect()->route('staff.attendance.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




    public function getAttendances($type, $date, $standard){
        $date_now = now(); 
        $dateValidation = $date_now > $date;
        if ($dateValidation) {
            $dateStatus ='Valid';
            if($type == 'Staff'){
                return $this->getAttendancesForStaffOnly('Teacher', $date, $dateStatus);    
            }else{
                return $this->getAttendancesForStudentsOnly($type, $date, $standard, $dateStatus);    
            }
        }else{
            $dateStatus ='Invalid';
            return response()->json(['status' => true, 'dateStatus' => $dateStatus], 200);
        }
    }


    public function getAttendancesForStaffOnly($type, $date, $dateStatus){

        $date = substr($date, 0, 10);

        $attendanceHeading =  'Attendances of '.$type. ' for '.$date;  

        $existingAttendances = DB::table('attendances AS att')
        ->rightJoin('profiles AS user', 'user.user_id', '=', 'att.user_id')
        ->select('user.user_id as id')
        ->distinct()
        ->where('user.utype', '=', $type)
        ->where('att.attendance_date', $date)
        ->pluck('id');
        
        $attendancesArr1 = DB::table('attendances AS att')
        ->rightJoin('profiles AS user', 'user.user_id', '=', 'att.user_id')
        ->select('user.user_id as id', 'user.role_no as role_no', 'user.ucode as ucode', 'user.name as name', 'att.attendance', 'att.attendance_date')
        ->distinct()
        ->where('user.utype', '=', $type)
        ->where('att.attendance_date', $date)
        //->orderBy('user.user_id', 'asc')
        ->get()->toArray();

        $attendancesArr2 =  DB::table('attendances')
        ->rightJoin('profiles','profiles.user_id','=','attendances.user_id')
        ->select('profiles.user_id AS id', 'profiles.role_no', 'profiles.ucode', 'profiles.name', 'attendances.attendance')
        ->distinct()
        ->where('profiles.utype', '=', $type)
        ->whereNotIn('profiles.user_id', $existingAttendances)
        ->get()->toArray();
        $collection = array_merge($attendancesArr2, $attendancesArr1);
        $attendances = collect($collection)->unique('id')->sortby('id')->values()->all();

        return response()->json(['status' => true, 'attendanceHeading' => $attendanceHeading, 'users' => $attendances, 'dateStatus' => $dateStatus], 200);

        

    }



    public function getAttendancesForStudentsOnly($type, $date, $standard , $dateStatus){
        $date = substr($date, 0, 10);

        if($type == 'Staff'){
            $attendanceHeading =  'Attendances of '.$type. ' for '.$date;   

            return response()->json(['status' => true, 'attendanceHeading' => $attendanceHeading, 'users' => $attendances, 'dateStatus' => $dateStatus], 200);
        }else{
            $attendanceHeading = 'Attendances of '.$type. ' with class '.$standard.' of  '.$date;


        }
    }




    public function showAttendances(Request $request)
    {


//return $request->attendance_date;

if(!$request->attendance_date){
    $date = substr(now(), 0, 10);
}else{
    $date = $this->convertDate($request->attendance_date);
}
        //return $date;

        if(!$request->filters){
            $mainContentsViews = $request->mainContentsViews;
            $date = $request->attendance_date;
            $date = substr($date, 0, 10);
            $type = $request->attendance_type;
            $standard = $request->standard;
            if($mainContentsViews == 'Principal'){
                return $this->getAttendances($type, $date, $standard);
            }else if($mainContentsViews == 'Teacher'){

            }else{

            }
        }else{
            $filters = get_object_vars(json_decode($request->filters));
            $mainContentsViews = $filters['mainContentsViews'];
            $date = $filters['attendanceDate'];
            $date = substr($date, 0, 10);
            $type = $filters['attendanceType'];
            $standard = $filters['standard'];
            if($mainContentsViews == 'Principal'){
                return $this->getAttendances($type, $date, $standard);
            }else if($mainContentsViews == 'Teacher'){

            }else{

            }

        }
    }


    public function saveAttendance(Request $request)
    {


        if($request->attendance_type == 'Staff'){
            $attendanceExists = Attendance::where('user_id', $request->id)->where('attendance_date', $request->attendance_date)->first();
            if(!$attendanceExists){
              $attendance = new Attendance;
              $attendance->user_id = $request->id;
              $attendance->attendance_type = $request->attendance_type;
              $attendance->attendance_date = $request->attendance_date;
              $attendance->attendance = $request->attendance;
              $attendance->save();
              if($attendance){

                 return $this->getAttendances($request->attendance_type, $request->attendance_date, $request->standard);
             }
         }else{


$updateAttendance =  Attendance::where('user_id', $request->id)->where('attendance_date', $request->attendance_date)->first('attendance');

if($updateAttendance->attendance != $request->attendance){
  $updateAttendance =  Attendance::where('user_id', $request->id)->where('attendance_date', $request->attendance_date)->update([
            'attendance' => $request->attendance
        ]);

        if($updateAttendance){
            return $this->getAttendances($request->attendance_type, $request->attendance_date, $request->standard);
        }
}else{
    $deleteAttendance =  Attendance::where('user_id', $request->id)->where('attendance_date', $request->attendance_date)->delete();

    if($deleteAttendance){
            return $this->getAttendances($request->attendance_type, $request->attendance_date, $request->standard);
        }
        
}


         

    }    
}

}



}
