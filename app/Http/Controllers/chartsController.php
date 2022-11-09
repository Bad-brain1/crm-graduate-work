<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class chartsController extends Controller
{
    public function charts()
    {

        $task = DB::table('tasks')
        ->select('id','status')
        ->where('id_user','=','1')
        ->get();
        $allTask = sizeof($task);
        $endTask = 0;
        foreach($task as $e){
            if($e->status != 0){
                $endTask++;
            }
        }



        return $endTask;
        return view('welcome');
    }
}
