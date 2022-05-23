@include ('layouts.header');

<div class="content-body">
	<div class="container-fluid">
		<div class="row">
            @yield('content')
		</div>
	</div>
</div>


@include ('layouts.footer');

</div>
<script src="{{url('vendor/global/global.min.js')}}"></script>
	<script src="{{url('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

	<script src="{{url('js/custom.min.js')}}"></script>
	<script src="{{url('js/dlabnav-init.js')}}"></script>


	<script src="{{url('js/dashboard/dashboard-1.js')}}"></script>

	<script src="{{url('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('js/plugins-init/datatables.init.js')}}"></script>

</body>
</html>