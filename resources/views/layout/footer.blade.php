	<!-- Footer -->
	<div class="navbar navbar-expand-lg navbar-light">
		<div class="text-center d-lg-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
				<i class="icon-unfold mr-2"></i>
				Footer
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text ml-lg-auto">
				&copy; Made with <b style="font-size: 17px;">&hearts;</b> by digikarya.id
			</span>
		</div>
	</div>
    <!-- /footer -->


    @if (session('success'))
        <script>
            $(document).ready(function() {
                (  new PNotify({
                    title: 'Berhasil',
                    text: '{{ session("success") }}',
                    // addclass: 'bg-success border-success',
                    type: 'info',
                    addclass: 'bg-success border-success',
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

    @endif

    @if ($errors->any())
        <script>
            $(document).ready(function() {
                (  new PNotify({
                    title: 'Silakan cek kembali data anda',
                    text: `@foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach`,
                    addclass: 'bg-info border-info',
                    type: 'info',
                    // addclass: 'bg-danger border-danger',
                    hide: false
                }));
            });
        </script>
    @endif
