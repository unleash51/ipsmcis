<?php 
    include('includes/head.php');
    include('includes/header.php');
?>

    <div class="wrapper">
        <div class="container">
            <div class="page-title-box">
                <h3 class="page-title">Registration</h3>
            </div>
            <div class="card m-b-30">
                <h4 class="card-header">Personal Requirements</h4>
                <div class="card-body">
                    <h5 class="card-title">Before proceeding the application make sure to get the following requirements...</h5>
                        <ul>
                            <li>Birth Certificate (NSO Certified)</li>
                            <li>IELTS Result</li>
                            <li>NBI Clearance</li>
                        </ul>
                    <h5 class="card-title">Upon Clicking the "Agree" Button you agree that all items above are now available...</h5>
                    <a href="#custom-modal" class="btn btn-custom waves-effect waves-light" data-animation="slit" data-plugin="custommodal"
                    data-overlaySpeed="200" data-overlayColor="#Agree">Agree</a>
                </div>
            </div>
        </div>
    </div>

<?php 
    include('includes/footer.php');
?>  
            
        <!-- Modal-Effect -->
        <script src="../plugins/custombox/js/custombox.min.js"></script>
        <script src="../plugins/custombox/js/legacy.min.js"></script>
            <div id="custom-modal" class="modal-demo">
                <button type="button" class="close" onclick="Custombox.close();">
                    <span>&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="custom-modal-title">Select Category</h4>
                <div class="custom-modal-text">
                    <form class="form-horizontal" action="#" method="post" id="idForm">

                        <div class="form-group m-b-25">
                            <div class="col-12">
                                <div class="mt-6">
                                    <div class="custom-control custom-radio">
                                        <a class="btn w-lg btn-rounded btn-custom waves-effect waves-light" href="entries-student.php">Student</a>
                                    </div>
                                </div>
                                    <br>
                                <div class="mt-6">
                                    <div class="custom-control custom-radio">
                                        <a class="btn w-lg btn-rounded btn-custom waves-effect waves-light" href="entries-tourist.php">Tourist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
<?php
    include('includes/foot.php');
?>