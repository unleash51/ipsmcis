<?php 
    include('includes/head.php');
    include('includes/header.php');
?>
        <div class="wrapper">
            <div class="container-fluid">

                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>

                <div class="card-box">
                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>

                <div class="page-title-box">
                    <h4 class="page-title">Rankings</h4>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Most Visited Countries</h4>
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Country</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Canada</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Vietnam</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Cambodia</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Famous School</h4>
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>School Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>University of Technology Sydney</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Australian National University</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Bond University</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">In-demand Courses</h4>
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Executive Master of Business Administration, M.B.A.</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Graduate Certificate in Business Administration</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Computer Science (Masters)</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

    
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
            window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "light1", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Number of Student / Tourist per Month"
                },
                data: [{
                    type: "column", //change type to bar, line, area, pie, etc
                    //indexLabel: "{y}", //Shows y value on all Data Points
                    indexLabelFontColor: "#5A5757",
                    indexLabelPlacement: "outside",
                    dataPoints: [
                        { label: "January", y: 71 },
                        { label: "February", y: 55 },
                        { label: "March", y: 50 },
                        { label: "April", y: 65 },
                        { label: "May", y: 92, indexLabel: "Highest" },
                        { label: "June", y: 68 },
                        { label: "July", y: 38 },
                        { label: "August", y: 71 },
                        { label: "September", y: 54 },
                        { label: "October", y: 60 },
                        { label: "November", y: 36 },
                        { label: "December", y: 21, indexLabel: "Lowest" }
                    ]
                }]
            });
            chart.render();

            }
    </script>
<?php
    include('includes/footer.php');
    include('includes/foot.php');
?>