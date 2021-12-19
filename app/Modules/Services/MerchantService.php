<?php
namespace App\Modules\Services;
use App\Modules\Services\BaseService ;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MerchantService extends BaseService{
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->setHeader("Authorization",$request->session()->get('jwt'));
    }
    public function getList(){
        try {
            $response = $this->get("merchant/list",null);
            if( $response['status'] != 200){
                return array(
                    "status"=>$response['status'],
                    "message"=>$response['message'],
                    "data"=>array()
                );
            }
            return array(
                "status"=>200,
                "message"=>"Succes",
                "data"=> $response['data']
            );
        } catch (\Exception $th) {
            return array(
                "status"=>500,
                "message"=>$th->getMessage(),
                "data"=>array()
            );
        }
    }

    public function getOutletList($merchantID){
        try {
            $response = $this->get("/merchant/".$merchantID."/outlet/list",null);
            if( $response['status'] != 200){
                return array(
                    "status"=>$response['status'],
                    "message"=>$response['message'],
                    "data"=>array()
                );
            }
            return array(
                "status"=>200,
                "message"=>"Succes",
                "data"=> $response['data']
            );
        } catch (\Exception $th) {
            return array(
                "status"=>500,
                "message"=>$th->getMessage(),
                "data"=>array()
            );
        }
    }

    public function getMerchantsReport($merchantID){
        try {
            $response = $this->get("report/merchant/".$merchantID."/omzet",null);
            if( $response['status'] != 200){
                return array(
                    "status"=>$response['status'],
                    "message"=>$response['message'],
                    "data"=>array()
                );
            }
            return array(
                "status"=>200,
                "message"=>"Succes",
                "data"=> $response['data']
            );
        } catch (\Exception $th) {
            return array(
                "status"=>500,
                "message"=>$th->getMessage(),
                "data"=>array()
            );
        }
    }

    public function getOutletReport($outletID){
        try {
            $response = $this->get("report/outlet/".$outletID."/omzet",null);
            if( $response['status'] != 200){
                return array(
                    "status"=>$response['status'],
                    "message"=>$response['message'],
                    "data"=>array()
                );
            }
            return array(
                "status"=>200,
                "message"=>"Succes",
                "data"=> $response['data']
            );
        } catch (\Exception $th) {
            return array(
                "status"=>500,
                "message"=>$th->getMessage(),
                "data"=>array()
            );
        }
    }

}
