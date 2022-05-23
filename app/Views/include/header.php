<header class="header-top" header-theme="light">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="top-menu d-flex align-items-center">
                <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                <div class="header-search">
                    <div class="input-group">
                        <span class="input-group-addon search-close">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon search-btn"><i class="bi bi-search"></i></span>
                    </div>
                </div>
                <button class="nav-link" title="clear cache">
                    <a href="#">
                        <i class="ik ik-battery-charging"></i>
                    </a>
                </button> &nbsp;&nbsp;
                <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
            </div>
            <div class="top-menu d-flex align-items-center">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="<?php echo'/login' ?>" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="<?php echo base_url("/assets/img/user.jpg") ?>" alt=""></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#"><i class="ik ik-user dropdown-icon"></i>Profile</a>

                        <a class="dropdown-item" href="#">
                            <i class="ik ik-power dropdown-icon"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>