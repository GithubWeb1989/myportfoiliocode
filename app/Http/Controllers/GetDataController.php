<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class GetDataController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ip = $request->getClientIp();

        // $ip = "104.247.128.118";
        $locationinfo = \Location::get($ip);
        // dd($locationinfo);

        $ip = isset($ip) ? $ip : "";
        $countryName = isset($locationinfo->countryName) ? $locationinfo->countryName : "";
        $cityName = isset($locationinfo->cityName) ? $locationinfo->cityName : "";
        $r_date = array('ipaddress'=>$ip, 'country'=>$countryName, 'city'=>$cityName, 'visitdate'=>date("Y-m-d h:i:sa"));
    
        DB::table('userlocationinfo')->insert($r_date);
        $visitnum = count(DB::table('userlocationinfo')->get()->toArray());

        return view('index' ,array('visitnum'=>$visitnum));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req){

            $name = $req->input('name');
            $email = $req->input('email');
            $subject = $req->input('subject');
            $message = $req->input('message');
    
            $data = array('name'=>$name, 'email'=>$email, 'subject'=>$subject, 'message'=>$message);
    
            DB::table('contactinfo')->insert($data);
    
            return view('contact');
            // echo("Success");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
