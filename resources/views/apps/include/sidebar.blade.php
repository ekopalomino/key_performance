<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
			<li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <li class="nav-item {{ set_active('dashboard.index') }}">
                <a href="{{ route('dashboard.index') }}" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Beranda</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{ set_active(['position.index']) }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Konfigurasi Umum</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ set_active(['position.index']) }}">
                        <a href="{{ route('position.index') }}" class="nav-link">
                            <span class="title">Employee Position</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="nav-link">
                            <span class="title">Department</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="nav-link">
                            <span class="title">Division</span>
                        </a>
                    </li>                                 
                </ul>
            </li>
            <li class="nav-item ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">Manajemen User</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="" class="nav-link ">
                            <span class="title">Daftar User</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="nav-link ">
                            <span class="title">Hak Akses</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{" class="nav-link ">
                            <span class="title">Unit Kerja</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="nav-link ">
                            <span class="title">Log Aktivitas</span>
                        </a>
                    </li>                                    
                </ul>
            </li>
            <li class="nav-item ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">Key Performance Indicator</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="" class="nav-link ">
                            <span class="title">Data KPI</span>
                        </a>
                    </li>                                  
                </ul>
            </li>
        </ul>
    </div>
</div>