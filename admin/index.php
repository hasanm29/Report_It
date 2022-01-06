<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Total Admin Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Registered Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $query = "SELECT id FROM register ORDER BY id";
                                $query_run  = mysqli_query($connection, $query);

                                $row = mysqli_num_rows($query_run);
                                echo '<h4> Total Admin: ' . $row . '</h4>';
                                ?>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sexual Harassment (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Sexual Harassment</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sexual Assault (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sexual Assault
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                            <!-- <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">7</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rape Count Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Rape</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

</div>
<!-- /.container-fluid -->

<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Bar chart starts  -->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sexual Harassment', 'Sexual Assualt', 'Rape'],
                <?php
                $query = "SELECT *FROM charttest";
                $query_run  = mysqli_query($connection, $query);
                while ($data = mysqli_fetch_array($query_run)) {
                    $year = $data['year'];
                    $sale = $data['sale'];
                    $expenses = $data['expenses'];
                    $profit = $data['profit'];
                ?>['<?php echo $year; ?>', <?php echo $sale; ?>, <?php echo $expenses; ?>, <?php echo $profit; ?>],
                <?php
                }
                ?>
            ]);

            var options = {
                chart: {
                    title: 'Yearly Performance of ReportIt',
                    subtitle: 'Sexual Harassment, Sexual Assault, and Rape: 2018-2021',
                },
                bars: 'vertical' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        //  Bar chart Ends 

        //  Pie chart starts 
    </script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Incident Location', 'count per week'],
                ['On Campus', 5],
                ['Outside Campus', 4],
                ['Home', 2],
                ['Other', 9],

            ]);

            var options = {
                title: 'Location of Incidents',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>

    <!-- line chart starts -->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['line']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'Day');
            data.addColumn('number', 'Sexual Harassment');
            data.addColumn('number', 'Sexual Assault');
            data.addColumn('number', 'Rape');

            data.addRows([
                [1, 8, 8, 4],
                [2, 3, 9, 4],
                [3, 5, 7, 2],
                [4, 1, 1, 0],
                [5, 1, 1, 1],
                [6, 8, 3, 0],
                [7, 6, 1, 0],
                [8, 3, 2, 1],
                [9, 9, 4, 1],
                [10, 8, 3, 1],
                [11, 3, 9, 0],
                [12, 6, 4, 2],
                [13, 8, 3, 0],
                [14, 2, 2, 4],
                [15, 8, 8, 1],
                [16, 9, 5, 4],
                [17, 4, 7, 2],
                [18, 7, 8, 1],
                [19, 9, 1, 1],
                [20, 8, 1, 0],
                [21, 6, 1, 6],
                [22, 3, 2, 1],
                [23, 9, 4, 1],
                [24, 8, 3, 0],

            ]);

            var options = {
                chart: {
                    title: 'Total Incident Count in a Month',
                    //   subtitle: 'in millions of dollars (USD)'
                },
                width: 900,
                height: 500,
                axes: {
                    x: {
                        0: {
                            side: 'top'
                        }
                    }
                }
            };

            var chart = new google.charts.Line(document.getElementById('line_top_x'));

            chart.draw(data, google.charts.Line.convertOptions(options));
        }
    </script>
</head>

<body>
    <div class="px-3">

        <div class="px-5 d-flex justify-content-center fs-2 fw-2"><strong>Yearly Report Of The Incidents</strong></div>
        <div id="barchart_material" style="width: 900px; height: 500px;"></div>
        <div class="px-5 d-flex justify-content-center fs-2 fw-2"><strong>Total Incident Count by Location</strong></div>
        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
        <div class="px-5 d-flex justify-content-center fs-2 fw-2"><strong>Daily Report Count of Each Incident</strong></div>
        <div id="line_top_x"></div>
    </div>

</body>

</html>


<!-- bar Chart Ends -->

</div>
<!-- End of Main Content -->

<?php
include('includes/script.php');
include('includes/footer.php');
?>