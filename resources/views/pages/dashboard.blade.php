@extends('layout.main')
{{-- @section('breadcrumb')
@endsection --}}
@section('header-left')
    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
@endsection
@section('mainpage')
    <div class="row">
        <div class="col-xl-12">
            <div class="card pb-5 pt-0">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Dashboard</h6>
                </div>
                <div class="card-body pb-5 pt-0">
                    <div class="row">


                            <div class="col-md-4">
                                <div class="card text-white bg-primary mb-3">
                                    {{-- <div class="card-header">PP</div> --}}
                                    <div class="card-body  bg-warning style="font-size:20px;">
                                        <div class="row">
                                            <div class="col-md-2 p-0">
                                                <i class="icon-bus " style="font-size:40px;"></i>
                                            </div>
                                            <div class="col-md-10 text-right">
                                                <h1 class=""><b>0</b></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-blue  text-center p-0 py-1">
                                        <h6>Jumlah SPJ yang belum atau sedang di proses</h6>
                                      </div>
                                  </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card text-white  mb-3 ">
                                    {{-- <div class="card-header">PP</div> --}}
                                    <div class="card-body bg-warning" style="font-size:20px;">
                                        <div class="row">
                                            <div class="col-md-2 p-0">
                                                <i class="icon-bus " style="font-size:40px;"></i>
                                            </div>
                                            <div class="col-md-10 text-right">
                                                <h1 class=""><b>0</b></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-blue text-center p-0 py-1">
                                        <h6>Jumlah kendaraan perlu di perbaiki</h6>
                                      </div>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-white bg-primary mb-3 ">
                                    {{-- <div class="card-header">PP</div> --}}
                                    <div class="card-body  bg-warning style="font-size:20px;">
                                        <div class="row">
                                            <div class="col-md-2 p-0">
                                                <i class="icon-bus " style="font-size:40px;"></i>
                                            </div>
                                            <div class="col-md-10 text-right">
                                                <h1 class=""><b>0</b></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-blue  text-center p-0 py-1">
                                        <h6>Jumlah kendaraan perlu di perpanjangan surat</h6>
                                      </div>
                                  </div>
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
