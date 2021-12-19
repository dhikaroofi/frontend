	<!-- Page header -->
	<div class="page-header">
		{{-- <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Das</a>
					<span class="breadcrumb-item active">Dashboard</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div> --}}

		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
                @yield('header-left')

			</div>

			<div class="header-elements d-none mb-3 mb-md-0">
                @yield('header-right')
				{{-- <div class="btn-group">
					<button type="button" class="btn bg-pink-400 dropdown-toggle" data-toggle="dropdown"><i class="icon-pulse2 mr-2"></i> Activity</button>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-header">Actions</div>
						<a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View reports</a>
						<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit reports</a>
						<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
						<div class="dropdown-header">Export</div>
						<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to PDF</a>
						<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to CSV</a>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
	<!-- /page header -->
