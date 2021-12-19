<?php
namespace App\Modules\Services;
use App\Modules\Services\BaseService ;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AuthService extends BaseService{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function login($payload){
        try {
            $response = Http::post($this->baseURL."login", $payload);
            $data = json_decode($response->getBody()->getContents(),true);
            if ($response->status() != 200){
                return array(
                    "status"=>$response->status(),
                    "massage"=>$data['message'],
                    "data"=>array()
                );
            }
            $tokenPayload = $data["data"]["authorization"]["token"];
            return array(
                "status"=>200,
                "massage"=>"Succes",
                "data"=> array(
                    'user'=>$data['data']['users']['user_name'],
                    'userid'=>$data['data']['users']['id'],
                    'jwt'=>$tokenPayload
                )
            );
        } catch (\Exception $th) {
            return array(
                "status"=>500,
                "massage"=>$th->getMessage(),
                "data"=>array()
            );
        }
    }

}
