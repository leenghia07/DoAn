<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\lichlamviec;
use App\Models\khenthuong;
use App\Models\kyluat;
use App\Models\phongban;
use App\Models\nhanvien;
use Carbon\Carbon;


class WorkUserController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $weekStartDate=new Carbon(now()->startOfWeek()->format('Y-m-d').'00:00:00');
        $weekEndDate=new Carbon(now()->endOfWeek()->format('Y-m-d').'00:00:00');
        
      // $now = Carbon::now();
       
      
        // $weekStartDate=new Carbon(Carbon::now()->startOfWeek()->format('Y-m-d').'00:00:00');
        // $weekEndDate=new Carbon(Carbon::now()->endOfWeek()->format('Y-m-d').'00:00:00');

        // $dateto=new Carbon('2022-05-07 00:00:00');
        //  $start =  strtotime('2022-05-01');
        //  $end = strtotime('2022-05-07');
        
        // // // echo $weekEndDa  te->modify('+7 day');
        // for($i = $weekStartDate; $i <= $weekEndDate; $i->modify('+1 day'))
        // {
        //     // echo $i->format('d-m-Y').'  ';
        //     echo $i.'    ';
        // }

        $employees=nhanvien::where('Id_NhanVien','=',session()->get('user_id'))
                        ->get();
        $employeeLaudatory=khenthuong::where('Ngay','>',$now->firstOfMonth()->format('Y-m-d'))
                                    ->where('Ngay','<=',$now->endOfMonth()->format('Y-m-d'))
                                    ->with('nhanvien')
                                    ->get();
        $employeeDiscipline=kyluat::where('Ngay','>',$now->firstOfMonth()->format('Y-m-d'))
                                    ->where('Ngay','<=',$now->endOfMonth()->format('Y-m-d'))
                                    ->with('nhanvien')
                                    ->get();
        return view('user.work.index',compact('weekStartDate','employees','weekEndDate','employeeLaudatory','employeeDiscipline'));

    //     $rowspan='';
    //     $datework=array();
    //     $count='';  
    //    $calendarWork=[];
        //tuần
        // for($i = $weekStartDate; $i <= $weekEndDate; $i++)
        // {
        //     echo Carbon::parse($i)->format('l d-m-Y');
        //     $datework[]=Carbon::parse($i)->format('l d-m-Y');
        //     echo '/';
        //     foreach($employees as $employee)
        //     {
        //         $count=lichlamviec::where('Id_PhongBan','=', $employee->Id_PhongBan)
        //                                     ->where('Ngay','=',$i)
        //                                     ->count();
        //         $calendarWork=lichlamviec::where('Id_PhongBan','=', $employee->Id_PhongBan)
        //                                    ->where('Ngay','=',$i)
        //                                 // ->where('Ngay','<=',$weekEndDate)
        //                                 ->get();
        //         // echo $i;
        //         foreach($calendarWork as $work)
        //         {
        //             echo $work->ThoiGian;
        //             echo $work->NoiDung;
        //         }
        //         // echo 'so cong viec'. $count;
        //     }
        // }
        // dd($calendarWork);
        // print_r ($calendarWork);
        // foreach($calendarWork as $work)
        // {
        //     echo $work->NoiDung;
        // }
        // $work=$datework->toArray();
        // echo $time;
        // return view('user.work.index',compact('calendarWork','weekStartDate','weekEndDate'),array("work"=>$datework,'countWorks'=>$count));
        // 
        // echo Carbon::createFromFormat('l',$datework[0]);
        // $start    = (new DateTime($now->format('Y-m-d')))->modify('first day of this month');
        // $end      = (new DateTime(($now->addMonths($futureM))->format('Y-m-d')))->modify('first day of next month');
        // $interval = DateInterval::createFromDateString('1 month');
        // $period   = new DatePeriod($start, $interval, $end);
        // $months = array();
        // foreach ($period as $dt) {
        //     array_push($months, array('month'=>$dt->format("F/Y"), 'days'=> ));
        // }
        // $day=array();
        // for ($i = 1; $i < 7; $i++) {
        //     echo $day[] = Carbon::now()->subDays($i)->format('D');
        // }
        // echo Carbon::now()->format( 'l' );
        // echo Carbon::parse($now->format('Y-m-d'))->daysInMonth;
        // return $months;
        // print_r($datework);
        // echo $datework;
        // dd($calendarWork);
        // echo($date->toDateString());
        // return view('user.work.index',compact('calendarWork','weekStartDate','weekEndDate'));
        // return view('user.work.index');
    }
   
}
