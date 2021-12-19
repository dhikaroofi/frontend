@extends('layout.main')
{{-- @section('breadcrumb')
@endsection --}}
@section('header-left')
    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> </h4>
    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
@endsection

@section('header-right')
    {{-- <button class="btn btn-primary">Tambah Data Baru</button> --}}
@endsection
@section('mainpage')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">List Omzet Merchants </h6>
            </div>
            <div class="card-body py-0">
                <div class="row">

                </div>
            </div>
            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="40%">Nama</th>
                        <th width="30%" class="text-left">Omzet</th>
                        <th width="30%" class="text-right">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['lists'] as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ Str::ucfirst($item['merchant_name']) }}</td>
                            <td class="text-left">Rp. {{ number_format($item['omzet']) }}</td>
                            <td class="text-right">{{ date("d F Y",strtotime( $item['date'])) }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


