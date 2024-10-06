<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"><span>Main</span></li>
				<li class="{{ Request::is('admin/index_admin') ? 'active' : '' }}">
					<a href="{{ url('admin/index_admin') }}"><i data-feather="home"></i> <span>Dashboard</span></a>
				</li>

				<li class="{{ Request::is('admin.index') ? 'active' : '' }}">
					<a href="{{ route('admin.index') }}"><i data-feather="copy"></i> <span>Admins</span></a>
				</li>
				<li class="{{ Request::is('admin/categories','admin/sub-category') ? 'active' : '' }}">
					<a href="{{ url('admin/categories') }}"><i data-feather="copy"></i> <span>Roles</span></a>
				</li>
								<li class="{{ Request::is('admin/categories','admin/sub-category') ? 'active' : '' }}">
					<a href="{{ url('admin/categories') }}"><i data-feather="copy"></i> <span>Employers</span></a>
				</li>

				<li class="{{ Request::is('admin/categories','admin/sub-category') ? 'active' : '' }}">
					<a href="{{ url('admin/categories') }}"><i data-feather="copy"></i> <span>Freelancers</span></a>
				</li>

				<li class="{{ Request::is('admin/categories','admin/sub-category') ? 'active' : '' }}">
					<a href="{{ route('industries.index') }}"><i data-feather="copy"></i> <span>Industries</span></a>
				</li> 

				<li class="{{ Request::is('admin/categories','admin/sub-category') ? 'active' : '' }}">
					<a href="{{ route('sub-industries.index') }}"><i data-feather="copy"></i> <span>Sub Industries</span></a>
				</li> 

				{{-- <li class="{{ Request::is('admin/projects') ? 'active' : '' }}">
					<a href="{{ url('admin/projects') }}"><i data-feather="database"></i> <span>Projects</span></a>
				</li>
				<li class="{{ Request::is('admin/users','admin/activities','admin/user-active','admin/user-inactive','admin/user-suspended','admin/user-administrator','admin/user-profile') ? 'active' : '' }}" >
					<a href="{{ url('admin/users') }}"><i data-feather="users"></i> <span>Freelancer</span></a>
				</li>
				<li class="{{ Request::is('admin/deposit','admin/deposit-cancelled','admin/deposit-completed','admin/deposit-hold','admin/deposit-pending') ? 'active' : '' }}" >
					<a href="{{ url('admin/deposit') }}"><i data-feather="user-check"></i> <span>Deposit</span></a>
				</li>
				<li class="{{ Request::is('admin/withdrawn','admin/withdrawn-cancelled','admin/withdrawn-completed','admin/withdrawn-pending','admin/withdrawn') ? 'active' : '' }}" >
					<a href="{{ url('admin/withdrawn') }}"><i data-feather="user-check"></i> <span>Withdrawn</span></a>
				</li>
				<li class="{{ Request::is('admin/transaction','admin/transaction-deposit','admin/transaction-withdraw','admin/transaction-pending','admin/transaction-onhold','admin/transaction-completed') ? 'active' : '' }}" >
					<a href="{{ url('admin/transaction') }}"><i data-feather="clipboard"></i> <span>Transaction</span></a>
				</li>
				<li class="{{ Request::is('admin/providers') ? 'active' : '' }}">
					<a href="{{ url('admin/providers') }}"><i data-feather="user-check"></i> <span>Providers</span></a>
				</li>
				<li class="{{ Request::is('admin/subscription','admin/employe-list','admin/freelance-list','admin/subscripe-freelancer','admin/view-price-employe','admin/view-price-freelance') ? 'active' : '' }}">
					<a href="{{ url('admin/subscription') }}"><i data-feather="user-check"></i> <span>Subscription</span></a>
				</li>
				<li class="{{ Request::is('admin/reports','admin/earning-employer','admin/earning-freelancer','admin/project-bidding','admin/project-earnings','admin/project-invoice','admin/projects-fees') ? 'active' : '' }}">
					<a href="{{ url('admin/reports') }}"><i data-feather="pie-chart"></i> <span>Reports</span></a>
				</li>
				<li class="{{ Request::is('admin/roles','admin/roles-permission') ? 'active' : '' }}">
					<a href="{{ url('admin/roles') }}"><i data-feather="clipboard"></i> <span>Roles</span></a>
				</li>
				<li class="{{ Request::is('admin/skills') ? 'active' : '' }}">
					<a href="{{ url('admin/skills') }}"><i data-feather="award"></i> <span>Skills</span></a>
				</li>
				<li class="{{ Request::is('admin/verify-identity') ? 'active' : '' }}">
					<a  href="{{ url('admin/verify-identity') }}"><i data-feather="user-check"></i> <span>Verify Identity</span></a>
				</li>
				<li class="{{ Request::is('admin/change-password','admin/delete-account','admin/email-settings','admin/localization-details','admin/others-settings','admin/payment-settings','admin/seo-settings','admin/settings','admin/social-links','admin/social-settings','admin/tax-types') ? 'active' : '' }}">
					<a href="{{ url('admin/settings') }}"><i data-feather="settings"></i> <span>Settings</span></a>
				</li> --}}
				{{-- <li class="menu-title"><span>UI Interface</span></li>
				<li class="{{ Request::is('admin/components') ? 'active' : '' }}">
					<a href="{{ url('admin/components') }}"><i data-feather="pocket"></i> <span>Components</span></a>
				</li>
				<li class="{{ Request::is('admin/form-basic-inputs','admin/form-horizontal','admin/form-input-groups','admin/form-mask','admin/form-validation','admin/form-vertical') ? 'active' : '' }} submenu">
					<a href="javascript:void(0);"><i data-feather="file-minus"></i> <span> Forms</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="{{ Request::is('admin/form-basic-inputs') ? 'active' : '' }}" href="{{ url('admin/form-basic-inputs') }}">Basic Inputs </a></li>
						<li><a class="{{ Request::is('admin/form-input-groups') ? 'active' : '' }}" href="{{ url('admin/form-input-groups') }}">Input Groups </a></li>
                        <li><a class="{{ Request::is('admin/form-horizontal') ? 'active' : '' }}" href="{{ url('admin/form-horizontal') }}">Horizontal Form</a></li>
						<li><a class="{{ Request::is('admin/form-vertical') ? 'active' : '' }}" href="{{ url('admin/form-vertical') }}"> Vertical Form </a></li>
						<li><a class="{{ Request::is('admin/form-mask') ? 'active' : '' }}" href="{{ url('admin/form-mask') }}"> Form Mask </a></li>
						<li><a class="{{ Request::is('admin/form-validation') ? 'active' : '' }}" href="{{ url('admin/form-validation') }}"> Form Validation </a></li>
					</ul>
				</li>
				<li class="{{ Request::is('admin/tables-basic','admin/data-tables') ? 'active' : '' }} submenu">
					<a href="javascript:void(0);"><i data-feather="align-justify"></i> <span> Tables</span> <span class="menu-arrow"></span></a>
					<ul>
						<li><a class="{{ Request::is('admin/tables-basic') ? 'active' : '' }}" href="{{ url('admin/tables-basic') }}">Basic Tables</a></li>
						<li><a class="{{ Request::is('admin/data-tables') ? 'active' : '' }}" href="{{ url('admin/data-tables') }}">Data Table</a></li>
					</ul>
				</li> --}}
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->