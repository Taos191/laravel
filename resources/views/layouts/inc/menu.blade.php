<div class="dlabnav">
	<div class="dlabnav-scroll">
		<ul class="metismenu" id="menu">

        @if(Auth::user()->roles == 'Administrator')
		<li>
            <a href="/dashboard" class="ai-icon" aria-expanded="false">
		        <i class="flaticon-381-networking"></i>
		        <span class="nav-text">Dashboard</span>
		    </a>
		</li>

        <li>
            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-layer-1"></i>
                <span class="nav-text">Departments</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="/department">Departments</a></li>
                <li><a href="/add-department">Add Department</a></li>
                <li><a href="/add-employee">Add Employee</a></li>
            </ul>
        </li>
        @endif
        
        @if(Auth::user()->roles == 'User')
		<li>
            <a href="/dashboard" class="ai-icon" aria-expanded="false">
		        <i class="flaticon-381-networking"></i>
		        <span class="nav-text">Dashboard</span>
		    </a>
		</li>

        <li>
            <a href="/profile" class="ai-icon" aria-expanded="false">
		        <i class="flaticon-381-user-4"></i>
		        <span class="nav-text">Profile</span>
		    </a>
		</li>

        <li>
            <a href="/inbox" class="ai-icon" aria-expanded="false">
		        <i class="fa fa-envelope"></i>
		        <span class="nav-text">Inbox</span>
		    </a>
		</li>

        <li>
            <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="ai-icon" aria-expanded="false">
		        <i class="fa fa-sign-out"></i>
		        <span class="nav-text">Logout</span>
		    </a>
		</li>
        @endif

		</ul>

	</div>
</div>