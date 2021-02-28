<?php
// Title ========================================
$title = 'Dashboard';
// Includes ========================================
require_once './Inc/head.php';
require_once './Inc/main.php';
require_once './Inc/sidebar.php';
require_once './Inc/navigation.php';
?>
<!-- Main Panel ===================================================================== -->
<section class="main-panel">
    <article class="cards m-3">
        <div class="card">
            <div class="icons-txt">
                <div class="icons i-1">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                </div>
                <div class="txt-for-card">
                    <p>Tasks Completed</p>
                    <!-- Count numbers true/false -->
                    <h3>10</h3>
                </div>
            </div>
            <hr />
            <div class="note mt-1">
                <i class="fa fa-check-circle-o green-color" aria-hidden="true"></i>
                <p>Tracked from Database</p>
            </div>
        </div>
        <div class="card">
            <div class="icons-txt">
                <div class="icons i-2">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                </div>
                <div class="txt-for-card">
                    <p>Tasks Incomplete</p>
                    <!-- Count numbers true/false -->
                    <h3>30</h3>
                </div>
            </div>
            <hr />
            <div class="note mt-1">
                <i class="fa fa-times-circle-o red-color" aria-hidden="true"></i>
                <p>Tracked from Database</p>
            </div>
        </div>
        <div class="card">
            <div class="icons-txt">
                <div class="icons i-3">
                    <i class="fa fa-thermometer-full" aria-hidden="true"></i>
                </div>
                <div class="txt-for-card">
                    <p>Weather</p>
                    <!-- Selected cities -->
                    <div class="weathers">
                        <h3>Kretinga</h3>
                        <p>orai</p>
                    </div>
                </div>
            </div>
            <hr />
            <div class="note mt-1">
                <i class="fa fa-cloud blue-color" aria-hidden="true"></i>
                <p>API</p>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="icons i-4">
                    <i class="fa fa-thermometer-full" aria-hidden="true"></i>
                </div>
                <div class="txt-for-card">
                    <p>Weather</p>
                    <!-- Selected cities -->
                    <div class="weathers">
                        <h3>Vilnius</h3>
                        <p>orai</p>
                    </div>
                </div>
            </div>
            <hr />
            <div class="note mt-1">
                <i class="fa fa-cloud blue-color" aria-hidden="true"></i>
                <p>API</p>
            </div>
        </div>
    </article>
    <article class="task-manager">
        <div class="all-filters">
            <div class="filters">
                <h3>
                    <i class="fa fa-sort" aria-hidden="true"></i>
                    Tasks:
                </h3>
                <a href="#">
                    <div class="filter">
                        <i class="fa fa-exclamation-circle yellow-color" aria-hidden="true"></i>
                        Issues
                    </div>
                </a>
                <a href="#">
                    <div class="filter">
                        <i class="fa fa-check-circle-o green-color" aria-hidden="true"></i>
                        Completed
                    </div>
                </a>
                <a href="#">
                    <div class="filter">
                        <i class="fa fa-times-circle-o red-color" aria-hidden="true"></i>
                        Incomplete
                    </div>
                </a>
            </div>
        </div>
        <div class="tasks">
            <!-- sukti nuo cia -->
            <div class="task">
                <div>
                    <input type="checkbox" name="task" id="task" />
                    <p>Some text...</p>
                </div>
                <div class="task-btns">
                    <div>
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </div>
                    <div>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <!-- cia uzbaigti -->
        </div>
    </article>
</section>
<?php
// Includes - Footer ========================================
require_once './Inc/footer.php';
?>