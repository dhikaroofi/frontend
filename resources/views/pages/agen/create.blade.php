@extends('layout.main')
{{-- @section('breadcrumb')
@endsection --}}
@section('header-left')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Tambah Data {{ $title }}</h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
@endsection

@section('header-right')
{{-- <button class="btn btn-primary">Tambah Data Baru</button> --}}
@endsection
@section('mainpage')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            {{-- <div class="card-header header-elements-inline">
                    <h6 class="card-title">Form Input Data</h6>
                </div> --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route($url) }}" method="POST">
                            <fieldset class="mb-3">
                                @csrf

                                <legend class="text-uppercase font-size-sm font-weight-bold">{{ $title }}</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Nama</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="nama"
                                            value="@isset($result){{ $result['nama'] }}@endisset">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Tipe</label>
                                    <div class="col-lg-10">
                                        <select name="tipe" id="tipe" class="form-control">
                                            <option value="utama">Utama</option>
                                            <option value="agen">Agen</option>
                                            <option value="garasi">Garasi</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Telpon</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="telpon"
                                            value="@isset($result){{ $result['telpon'] }}@endisset">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Daerah</label>
                                    <div class="col-lg-9">
                                        <select name="daerah" id="daerah" class="form-control" >
                                            @isset($result)
                                                <option value="{{$result['daerah_id']}}" selected>{{ Str::upper($result['kecamatan']).", ".Str::upper($result['kabupaten']) }}</option>
                                            @endisset
                                        </select>

                                    </div>
                                    <button type="button" class="btn btn-success col-lg-1 " data-toggle="modal"
                                        id="btnDaerah" data-target="#modal_daerah"><i
                                            class="icon-folder-search"></i></button>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Alamat</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="alamat"
                                            value="@isset($result){{ $result['alamat'] }}@endisset">
                                    </div>
                                </div>
                                @isset($result)
                                    @method('GET')
                                    <input type="hidden" value="{{ $result['id'] }}" name="id">
                                    <script>
                                        document.getElementById('tipe').value = "{{ $result['tipe'] }}";

                                    </script>
                                @endisset
                            </fieldset>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="modal_daerah" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Daerah</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form id="searchFormDaerah" method="POST" >
                    @csrf
                    <div class="form-group row">
                        {{-- <label class="col-form-label col-lg-2">Nama</label> --}}
                        <div class="col-lg-10">
                            <input type="text" class="form-control" placeholder="ketikan yang ingin anda cari" name="value" >

                        </div>
                        <button type="submit" class="btn btn-primary col-md-2" >Cari <i
                                class="icon-paperplane ml-2"></i></button>

                    </div>

                </form>
                <table class="table " id="tableDaerah">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="30%">Kecamatan</th>
                            <th width="30%">Kabupaten</th>
                            <th width="30%">Provinsi</th>
                            <th width="5%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-link" data-dismiss="modal">Close</button> --}}
                {{-- <button type="button" class="btn bg-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var dataSet = [];
    $('#tableDaerah').dataTable({
            data: dataSet,
            autoWidth: false,
            columnDefs: [
                {"className": "text-center", "targets": 4},
                {
                orderable: false,
                width: 100,
                targets: [ 3 ]
            }],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search  : '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
    });
    async function daerahCari() {
            const url = '{{ route("search.actDaerah") }}';
            let response = await fetch(url, {
                method: "POST",
                body: new FormData(document.getElementById("searchFormDaerah")),

            })
            .then(response => response.json())
            .then(data => {
                    str = "";
                    index = 0;
                    var dataSet = [];
                    var table = document.getElementById('tableDaerah');
                    for (const item of data) {
                        btna = "<button class='btn btn-primary btn-pilih-daerah' onclick='clickDaerah(this)' data-id='"+item.id+"' data-name='"+item.Kecamatan.toUpperCase()+","+item.kabupaten.toUpperCase()+"'>Pilih</button>";
                        dataSet.push( [(index+1),item.Kecamatan.toUpperCase(),item.kabupaten.toUpperCase(),item.provinsi.toUpperCase(),btna]);
                        index++;
                    }

                    $('#tableDaerah').DataTable().clear().rows.add(dataSet).draw();
                    // $('#tableDaerah').dataTable().clear().rows.add(dataSet).draw();
                    // console.log(dataSet);

            })
            .catch(data => {
                $('#modal_daerah').modal('hide');
                $(document).ready(function() {
                    (  new PNotify({
                        title: 'Terjadi kesalahan',
                        text: "Silakan cek kembali inputan anda",
                        addclass: 'bg-primary border-primary',
                        type: 'info',
                        addclass: 'bg-danger border-danger',
                        hide: false
                    }));
                });
            });
    }


    function clickDaerah(event){
        $('#modal_daerah').modal('hide');
        $("#daerah").find('option').remove().end()
        $("#daerah").append(new Option($(event).data('name'), $(event).data('id')));

        @isset($result)
            @php
                $daerah  = Str::upper($result['kecamatan']).", ".Str::upper($result['kabupaten']);
            @endphp
            $("#daerah").append(new Option("{{ $daerah }}", "{{ $result['daerah_id'] }}" ));
        @endisset

        // alert("data-id:"+$(event).data('id'));
    }

    $( "#searchFormDaerah" ).submit(function( e ) {
        e.preventDefault();
        daerahCari();
        // alert("asd");
    });
</script>

@endsection
