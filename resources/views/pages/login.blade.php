<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ url('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets_login/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets_login/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets_login/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets_login/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets_login/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ url('global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ url('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ url('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ url('global_assets/js/plugins/ui/ripple.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/notifications/pnotify.min.js') }}"></script>
	<!-- /core JS files -->



	<script src="{{ url('assets/js/app.js') }}"></script>


	<!-- /theme JS files -->

</head>

<body>
    <div class="container mt-5 pt-2">
       <div class="row">
            <div class="col-lg-8 bg-dark text-center p-5 shadow-sm rounded d-none d-lg-block d-xl-block " style="background:url('{{ asset('img/background.jpg') }}') no-repeat;background-size:cover;height:500px;">
                &nbsp;
                {{-- <h1><b>S I S T E M &nbsp;&nbsp;&nbsp; M A N A J E M E N &nbsp;&nbsp;&nbsp; B U S</b></h1><br/>
                <h1><b>PT &nbsp;&nbsp;&nbsp; HS &nbsp;&nbsp;&nbsp; BUDIMAN 45 &nbsp;&nbsp;&nbsp; </b></h1><br/> --}}
            </div>
            <div class="col-lg-4 bg-white pt-5 shadow-sm rounded"  style="height:500px;">
                <div class="container mt-5 ">
                    <div class="row  ">
                        <div class="col-lg-12">
                            <h1 class="p-0 m-0"><b>Login</b></h1>
                            <span class="text-grey p-0 m-0 text-muted" style="fo">Silakan login dengan kredensial yang anda miliki</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <form action="/login" method="post">
                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="text" class="form-control" name="username" placeholder="Email">
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                                </div>
                                @csrf
                            </form>
							{{-- <div class="text-center">
								<a href="login_password_recover.html">Forgot password?</a>
							</div> --}}
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>

    @if (session('success'))
        <script>
            $(document).ready(function() {
                (  new PNotify({
                    title: 'Berhasil',
                    text: '{{ session("success") }}',
                    addclass: 'bg-primary border-primary',
                    type: 'info',
                    addclass: 'bg-success border-danger',
                    hide: false
                }));
            });
        </script>
    @endif
    @if (session('gagal'))
        <script>
            $(document).ready(function() {
                (  new PNotify({
                    title: 'Terjadi kesalahan',
                    text: '{{ session("gagal") }}',
                    addclass: 'bg-primary border-primary',
                    type: 'info',
                    addclass: 'bg-danger border-danger',
                    hide: false
                }));
            });
        </script>
    </div>
    @endif

</body>
</html>
