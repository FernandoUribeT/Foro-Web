<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <!-- <img src="" alt="logo"> -->
            </span>
            <div class="text header-text">
                <span class="name">For Us</span>
                <!-- <span class=""></span> -->
            </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class='bx bx-search-alt-2 icon'></i>
                <input type="text" class="search text" placeholder="Search...">
            </li>
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="<?php echo APP_URL; ?>dashboard">
                        <i class='bx bxs-home icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="<?php echo APP_URL; ?>post">
                        <i class='bx bxs-store icon'></i>
                        <span class="text nav-text">Publications</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="<?php echo APP_URL; ?>comment">
                        <i class='bx bxs-paper-plane icon'></i>
                        <span class="text nav-text">Comments</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a>
                        <i class='bx bxs-truck icon'></i>
                        <span class="text nav-text">Reports</span>
                        <i class='bx bx-chevron-right dropdown'></i>
                    </a>
                </li>
                <div class="sub-menu">
                    <a href="" class="text sub-item">Users</a>
                    <a href="" class="text sub-item">Publications</a>
                    <a href="" class="text sub-item">Commets</a>
                </div>

                <li class="nav-link">
                <a href="<?php echo APP_URL; ?>user">
                        <i class='bx bxs-user icon'></i>
                        <span class="text nav-text">Users</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a>
                        <i class='bx bx-history icon'></i>
                        <span class="text nav-text">Activity Log</span>
                        <i class='bx bx-chevron-right dropdown'></i>
                    </a>
                </li>
                <div class="sub-menu">
                    <a href="" class="text sub-item">Users</a>
                    <a href="" class="text sub-item">Publications</a>
                    <a href="" class="text sub-item">Comments</a>
                </div>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bxs-bell icon'></i>
                        <span class="text nav-text">Notifications</span>
                    </a>
                </li>
                <li class="nav-link">
                <a href="<?php echo APP_URL . "userUpdate/" . $_SESSION['id'] . "/" ;?>">
                        <i class='bx bxs-user-circle icon'></i>
                        <span class="text nav-text">My account</span>
                    </a>
                </li> 


                <li class="nav-link">
                <a href="<?php echo APP_URL . "userPhoto/" . $_SESSION['id'] . "/" ;?>">
                        <i class='bx bxs-photo-album icon'></i>
                        <span class="text nav-text">Photo</span>
                    </a>
                </li>


            </ul>
        </div>
        <div class="bottom-content">

            <li class="mode">
                <div class="moon-sun">
                    <i class='bx bxs-moon icon moon'></i>
                    <i class='bx bxs-sun icon sun '></i>
                </div>
                <span class="mode-text text"></span>
                <div class="toggle-switch">
                    <span class="switch">

                    </span>
                </div>
            </li>

            <li  class="">
                <a id="btn_logout" href="<?php echo APP_URL; ?>app/views/content/logout.php">
                    <i class='bx bxs-log-out icon'></i>
                    <span class="text nav-text">Log out</span>
                </a>
            </li>
        </div>
    </div>
</nav>