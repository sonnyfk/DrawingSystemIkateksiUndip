<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\facades\DB;
use App\UserModel;
use Illuminate\Http\Resources\Json\Resource;
use App\Library\LibConnect;
use Illuminate\Support\Facades\Input;



class AdminController extends Controller
{

    public function doorprize()
    {
        $countall = DB::table('subscriber')->count();
        $attend = DB::table('subscriber')->where('attendance','YES')->where('position', 'like','%NON%')->count();

        // Data Pemenang
        $winner = DB::table('subscriber')->where('status','WIN')->count();
        $querywinner = DB::table('subscriber')->where('status','WIN')->get();

        // Acak Data
        $project = DB::table('subscriber')->where('attendance','YES')->where('status','OK')->where('position', 'like','%NON%')->inRandomOrder()->get();
        // dd($project);
        
        $count = count($project);
        // dd($count);
        $arrs = json_encode($project);

        
               
        return view('notika.doorprize',['data' => $querywinner], ['countall' => $countall, 'attend' => $attend, 'winner' => $winner, 'arrs' => $arrs, 'count'=>$count]);

    }


    public function grandprize()
    {
        $countall = DB::table('subscriber')->count();

        $attend = DB::table('subscriber')->where('status','OK')->where('position', 'like','%NON%')->count();

        // ALL
        $winner = DB::table('subscriber')->where('status','WIN')->count();
        $querywinner = DB::table('subscriber')->where('status','WIN')->get();

        $project = DB::table('subscriber')->select('employeeID','company','fullName', 'department')->where('status','OK')->where('position', 'like','%NON%')->inRandomOrder()->get();
        // dd($project);

        $count = count($project);
        $arrs = json_encode($project);     
        // dd($arrs);
        return view('notika.grandprize',['data' => $querywinner], ['countall' => $countall, 'attend' => $attend, 'winner' => $winner, 'arrs' => $arrs, 'count'=>$count]);

    }

    public function subscriber()
    {
        $queryall = DB::table('subscriber')->get();
        $count = count($queryall);

        $queryattend = DB::table('subscriber')->where('status','0')->get();
        $attend = count($queryattend);
        // dd($attend);

        
        //dd($project);
        return view('notika.subscriber',['data' => $queryall], ['count' => $count, 'attend' => $attend]);

        // return view('notika.index');
    }

    public function subscriberattendance(Request $request)
    {
        $queryall = DB::table('subscriber')->where('attendance','YES')->get();
        return view('notika.subscriber-attendance',['data' => $queryall]);
       
        
    }

    public function subscriberattendancedetail(Request $request)
    {
        if ($request->isMethod('GET')){
            $request = $request->all();
            $employeeID= input::get('employeeID');
            $company= input::get('company');
            $project = DB::table('subscriber')->select('employeeID','company','fullName', 'department','attendance','position','entry')->where('employeeID', $employeeID)->where('company', $company)->first();
        // dd($project);
        return view('notika.subscriber-attendance-detail',['data' => $project]);
        }
        else {
            $request = $request->all();
            $employeeID= input::get('employeeID');
            $project = DB::table('subscriber')->where('employeeID', $employeeID)->update(['attendance'=> 'YES']);
            return redirect('/');
        }  
    }

    public function subscribermanual(Request $request)
    {
        
        if ($request->isMethod('GET')){
            return view('notika.subscriber-manual');
       
        }else{
            $request = $request->all();
            // dd($request);
            $employeeID= input::get('employeeID');
            $fullName= input::get('fullName');
            $company= input::get('company');
            $department= input::get('department');
            $position= input::get('position');

            $project=DB::table('subscriber')->insert(
                ['employeeID' => $employeeID,
                'fullName' =>$fullName,
                'company' => $company,
                'department' => $department,
                'position' => $position,
                'status' => 'OK',
                'attendance' =>'YES',
                'entry' =>'manual']
            );
            // dd($project);
            return redirect('/subscriber/manual');    

        }


    }

    public function subscriberregister(Request $request, $employeeID)
    {
     
        if ($request->isMethod('GET')){

        $project = DB::table('subscriber')->select('employeeID','company','fullName', 'department')->where('employeeID', $employeeID)->first();
        // dd($project);
        return view('notika.subscriber-register',['data' => $project]);
        }
        else{
        $project = DB::table('subscriber')->where('employeeID', $employeeID)->update(['attendance'=> 'YES']);
        return redirect('/');    

        }         

    }


    public function listpemenang()
    {

        $project = DB::table('subscriber')->get();
        // dd($project);
        return view('list-pemenang',['data' => $project]);
    }

    public function home(Request $request)

    {
        $project = DB::table('subscriber')->select('employeeID','company','fullName')->where ('status','1')->inRandomOrder()->get();
        $count = count($project);
        // $arrs = '["' . implode('", "', $project) . '"]';
        // $dd = json_encode($project);
        // $temp->extra_services = implode(',',$request->extra_services);
         dd($project);

        $arrs = json_encode($project);
        


        // $arrs = "[";

        // foreach($project as $ss) {
        //     $arrs .= '"'.$ss->employeeID.'-'.$ss->fullName.'-'.$ss->company.'", ';
        //     // dd($ss);
            
        // }
        // $arrs = substr($arrs,0,-2);
        // $arrs .= "]";

        // dd($arrs);


        return view('undian',['arrs' => $arrs], ['count' => $count]);
    }

    public function submitpemenang(request $request){   
        $request = $request->all();
        $pemenang= input::get('pemenang');
        $project = DB::table('subscriber')->where('employeeID', $pemenang)->update(['status'=> 'WIN']);
        return redirect()->back();        
    }



public function attendance()
    {
              
        $countall = DB::table('subscriber')->count();
        $attend = DB::table('subscriber')->where('attendance','YES')->count();
        $attendlist = DB::table('subscriber')->where('attendance','YES')->get();

        // Data Pemenang                      
        return view('notika.attendance',['data' => $attendlist], ['countall' => $countall, 'attend' => $attend]);

    }


}