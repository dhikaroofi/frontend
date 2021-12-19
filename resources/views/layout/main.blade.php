@include('layout.header')
<body>
    @include('layout.nav-main')
    @include('layout.nav-page')

    	<!-- Page content -->
	<div class="page-content pt-0">

        @include('layout.sidebar')
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
                @yield('mainpage')
			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

    @include('layout.footer')
</body>
</html>
