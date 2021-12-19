<?php

namespace App\Http\Controllers;

use App\Modules\Services\MerchantService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request){
        if(!$request->session()->exists('jwt') ) {
            return redirect('/login');
        }
        $getService = new MerchantService($request);
        $response = $getService->getList();
        if($response["status"] != 200){
                return view('pages.dashboard',array(
                    "data"=>array(
                        "lists"=>array()
                    )
                )
            )->with(['gagal' => $response['message']]);
        }
        return view('pages.dashboard',$response);
    }

    public function getOutletList(Request $request,$merchantID){
        if(!$request->session()->exists('jwt') ) {
            return redirect('/login');
        }
        $getService = new MerchantService($request);
        $response = $getService->getOutletList($merchantID);
        if($response["status"] != 200){
                return view('pages.outlet',array(
                    "data"=>array(
                        "lists"=>array()
                    )
                )
            )->with(['gagal' => $response['message']]);
        }
        return view('pages.outlet',$response);
    }

    public function getMerchantsReport(Request $request,$merchantID){
        if(!$request->session()->exists('jwt') ) {
            return redirect('/login');
        }
        $getService = new MerchantService($request);
        $response = $getService->getMerchantsReport($merchantID);
        if($response["status"] != 200){
                return view('pages.report.omzetMerchant',array(
                    "data"=>array(
                        "lists"=>array()
                    )
                )
            )->with(['gagal' => $response['message']]);
        }
        return view('pages.report.omzetMerchant',$response);
    }

    public function getOutletReport(Request $request,$outletID){
        if(!$request->session()->exists('jwt') ) {
            return redirect('/login');
        }
        $getService = new MerchantService($request);
        $response = $getService->getOutletReport($outletID);
        if($response["status"] != 200){
                return view('pages.report.omzetOutlet',array(
                    "data"=>array(
                        "lists"=>array()
                    )
                )
            )->with(['gagal' => $response['message']]);
        }
        return view('pages.report.omzetOutlet',$response);
    }


}
