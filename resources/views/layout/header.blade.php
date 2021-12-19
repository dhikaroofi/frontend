<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ url('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

    @yield('cssCustom')

	<!-- Core JS files -->
	<script src="{{ url('global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ url('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ url('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<script src="{{ url('global_assets/js/plugins/ui/ripple.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ url('global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script src="{{ url('global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script src="{{ url('global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script src="{{ url('global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ url('global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/notifications/pnotify.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    {{-- <script src="{{ asset('global_assets/js/demo_pages/form_select2.js') }}"></script> --}}


    <script src="{{ asset('global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/switch.min.js') }}"></script>
    {{-- <script src="{{ asset('global_assets/js/plugins/forms/styling/switchery.min.js') }}') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/switch.min.js') }}"></script> --}}

	<script src="{{ url('assets/js/app.js') }}"></script>

    <script src="{{ asset('global_assets/js/demo_pages/datatables_basic.js') }}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/form_checkboxes_radios.js') }}"></script>
	{{-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js'"></script> --}}

    <script src="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>


	<!-- /theme JS files -->
    <style>

    </style>
</head>
