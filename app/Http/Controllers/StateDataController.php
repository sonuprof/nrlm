<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Record;
use Session;
use App\Models\PG;
use App\Models\PE;
use App\Models\FPO;

class StateDataController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    
   

    public function saveClickedState(Request $request)
    {
        $state = $request->input('state');
        $request->session()->put('clicked_state', $request->state);
        return response()->json(['message' => 'Clicked state saved successfully']);
    }
    
   

    public function detail(Request $request)
    {
        $clickedState = $request->session()->get('clicked_state');
          if ($clickedState) {
        $data['clickedState'] = $request->session()->get('clicked_state');
        // $data['district']=DB::table('records')->select('*')->where('state', $clickedState)->get();
        // $data['total_district']=Record::where('state', $clickedState)->distinct()->count('district');
        $data['total_pg']=PG::where('state', $clickedState)->count('district');
        $data['total_fpo']=FPO::where('state', $clickedState)->count('district');
        $data['total_pe']=PE::where('state', $clickedState)->count('district');
          }
                     return view('detail',$data);
    }
    
}

