<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomBaseController extends Controller
{
    protected $_service;
    protected $_response = array(
        "status_code"=>200,
        "massage"=>"",
        "warning"=>array(),
        "data"=>array(
            "list"=>array(),
        )
    );
    protected $_data = array(
        "title"=>"",
        "url"=>"",
        "breadcrumb"=>"",
        "user"=>"",
        "page"=>"",
        "activeAction"=>"",
        "isShow"=>FALSE,
        "select"=>array(),
        "data"=> array(
            "list"=>array(),
        )
    );
    public function create(Request $request){
        // $this->_data["data"] = $this->_service->all()["data"];
        $this->_data["activeAction"] = "Tambah Data ".$this->_data['title'];
        $this->_getDataForShow();
        return view("pages.".$this->_data['page'].".create",$this->_data);
    }

    protected function _getDataForShow(){
        $this->_data["data"]["form"] = array();
    }

    public function show(Request $request, $id){
        $this->_data["isShow"] = TRUE;
        $response = $this->_service->get($id);
        if($response["status"]!=200){
            return redirect()->back()->with('failed',$response['massage']);
        }
        $this->_data["data"]["show"] = $response['data'];
        $this->_getDataForShow();
        $this->_data["activeAction"] = "Detail ".$this->_data['title'];
        return view("pages.".$this->_data['page'].".create",$this->_data);
    }

    public function index(Request $request){
        $this->_data["data"] = $this->_service->all($this->_data["select"],25)["data"];
        $this->_data["activeAction"] = "Index";
        return view("pages.".$this->_data['page'].".index",$this->_data);
    }

    public function actCreate(Request $request){
        $validator = Validator::make($request->all(),
            $this->_service->rule(),
            $this->_service->ruleMassage()
        );
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $create = $this->_service->create($request);
        if($create['status']!=200){
            return redirect()->back()->with('failed',$create['massage']);
        }
        return redirect()->route($this->_data['url'].'.index')->with('success',"Data ".$this->_data['title']." ".$create['data']['show']['name'] ." Berhasil di buat");

    }

    public function actUpdate(Request $request,$id){
        $validator = Validator::make(
            array("external_id"=>$id),
            $this->_service->ruleGetId(),
            $this->_service->ruleMassageGetId()
        );
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $validator = Validator::make($request->all(),
            $this->_service->rule(),
            $this->_service->ruleMassage()
        );
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $update = $this->_service->update($request,$id);
        if($update['status']!=200){
            return redirect()->back()->with('failed',$update['massage']);
        }
        return redirect()->back()->with('success',"Data ".$this->_data['title']." ".$update['data']['show']['name'] ." Berhasil di rubah");
    }

    public function actDelete($id){
        $validator = Validator::make(
            array("external_id"=>$id),
            $this->_service->ruleGetId(),
            $this->_service->ruleMassageGetId()
        );
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $update = $this->_service->delete($id);
        if($update['status']!=200){
            return redirect()->back()->with('failed',$update['massage']);
        }
        return redirect()->back()->with('success',"Data ".$this->_data['title']." ".$update['data']['show']['name'] ." Berhasil di rubah");
    }

}
