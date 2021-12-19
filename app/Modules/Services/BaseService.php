<?php
namespace App\Modules\Services;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class BaseService{

    protected $token;
    protected $header;
    protected $baseURL = "http://localhost:8989/";


    public function setHeader($key,$value){
        $this->header[$key] = $value;
    }

    public function get($url,$payload){
        try {

            $response = Http::withHeaders($this->header)->get($this->baseURL.$this->endpoint.$url, $payload);

            $data = json_decode($response->getBody()->getContents(),true);
            if ($response->status() != 200){
                return array(
                    "status"=>$response->status(),
                    "massage"=>$data['Status'],
                    "data"=>array()
                );
            }
            return array(
                "status"=>200,
                "massage"=>"Succes",
                "data"=>$data['Data']
            );
        } catch (\Exception $th) {
            return array(
                "status"=>500,
                "massage"=>$th->getMessage(),
                "data"=>array()
            );
        }
    }
    public function post($url,$data){
        try {

            $response = Http::withHeaders($this->header)->post($this->baseURL.$this->endpoint.$url, $data);
            $data = json_decode($response->getBody()->getContents(),true);
            if ($response->status() != 200){
                return array(
                    "status"=>$response->status(),
                    "massage"=>$data['Status'],
                    "data"=>array()
                );
            }
            return array(
                "status"=>200,
                "massage"=>"Succes",
                "data"=>$data['Data']
            );
        } catch (\Exception $th) {
            return array(
                "status"=>500,
                "massage"=>$th->getMessage(),
                "data"=>array()
            );
        }
    }
    public function update($url,$data){
        try {

            $response = Http::withHeaders($this->header)->put($this->baseURL.$this->endpoint.$url, $data);
            $data = json_decode($response->getBody()->getContents(),true);
            if ($response->status() != 200){
                return array(
                    "status"=>$response->status(),
                    "massage"=>$data['Status'],
                    "data"=>array()
                );
            }
            return array(
                "status"=>200,
                "massage"=>"Succes",
                "data"=>$data['Data']
            );
        } catch (\Exception $th) {
            return array(
                "status"=>500,
                "massage"=>$th->getMessage(),
                "data"=>array()
            );
        }
    }
    public function delete($url,$data){
        try {

            $response = Http::withHeaders($this->header)->delete($this->baseURL.$this->endpoint.$url);
            $data = json_decode($response->getBody()->getContents(),true);
            if ($response->status() != 200){
                return array(
                    "status"=>$response->status(),
                    "massage"=>$data['Status'],
                    "data"=>array()
                );
            }
            return array(
                "status"=>200,
                "massage"=>"Succes",
                "data"=>$data['Data']
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
