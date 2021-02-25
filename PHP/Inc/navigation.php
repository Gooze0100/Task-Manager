        <!-- Navigation and Task Manager ===================================================================== -->
        <section class="navigation-tasks">
            <!-- Navigation ===================================================================== -->
            <header class="navigation">
                <nav class="px-1">
                    <div>
                        <h3 class="name-of-selection">
                            <?php
                            if ($title === 'Dashboard') {
                                echo 'Dashboard';
                            } else if ($title === 'Profile') {
                                echo 'Profile';
                            } else if ($title === 'Weather') {
                                echo 'Weather';
                            } else if ($title === 'Calendar') {
                                echo 'Calendar';
                            } else if ($title === 'Contacts') {
                                echo 'Contacts';
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="nav-icons">
                        <div class="main-nav-icons">
                            <a href="./dashboard.php">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-bell-o" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="profile-settings">
                            <div class="person-icon">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </div>
                            <div class="settings">
                                <a href="./profile.php">
                                    <div class="profile">
                                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                                        <p>Profile</p>
                                    </div>
                                </a>
                                <a href="./login.php">
                                    <div class="logout">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        <p>Logout</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>