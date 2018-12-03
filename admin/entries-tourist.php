<?php 
    include('includes/head.php');
    include('includes/header.php');
?>
    <div class="wrapper">
        <div class="container">
            <div class="page-title-box">
                <h3 class="page-title">Visa Application</h3>
            </div>
            <div class="card m-b-30">
                <h4 class="card-header">Tourist Profile Information</h4>
                <div class="card-body">
                    <div class="card m-b-30">
                        <h5 class="card-header">Account Information <span class="pull-right">Category: Tourist</span></h5>
                        <div class="card-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <p class="mb-1 mt-4 font-weight-bold ">Username</p>
                                        <input type="text" class="form-control" value="">
                                    </div>

                                    <div class="col-6">
                                        <p class="mb-1 mt-4 font-weight-bold ">Password</p>
                                        <input type="password" class="form-control" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card m-b-30">
                        <h5 class="card-header">Personal Information</h5>
                        <div class="card-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group row">
                                    <div class="col-3">
                                        <p class="mb-1 mt-4 font-weight-bold">Title</p>
                                        <div class="row">
                                            <div class="custom-control custom-radio col-4">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Mr.</label>
                                            </div>
                                            <div class="custom-control custom-radio col-4">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Ms.</label>
                                            </div>
                                            <div class="custom-control custom-radio col-4">
                                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">Mrs.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <p class="mb-1 mt-4 font-weight-bold ">First Name</p>
                                        <input type="text" class="form-control" value="">
                                    </div>

                                    <div class="col-3">
                                        <p class="mb-1 mt-4 font-weight-bold ">Middle Name</p>
                                        <input type="text" class="form-control" value="">
                                    </div>

                                    <div class="col-3">
                                        <p class="mb-1 mt-4 font-weight-bold ">Last Name</p>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-4">
                                        <p class="mb-1 mt-4 font-weight-bold ">Gender</p>
                                        <div class="row">
                                            <div class="custom-control custom-radio col-4">
                                                <input type="radio" id="male" name="gender" class="custom-control-input">
                                                <label class="custom-control-label" for="male">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio col-4">
                                                <input type="radio" id="female" name="gender" class="custom-control-input">
                                                <label class="custom-control-label" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <p class="mb-1 mt-4 font-weight-bold ">Date of Birth</p>
                                        <input class="form-control" type="date" name="date">
                                    </div>

                                    <div class="col-4">
                                        <p class="mb-1 mt-4 font-weight-bold ">Nationality</p>
                                        <input class="form-control" type="text" name="text" disabled="" value="Filipino">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <p class="mb-1 mt-4 font-weight-bold">Complete Address</p>
                                        <input class="form-control" type="text" name="date">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-4">
                                        <p class="mb-1 mt-4 font-weight-bold">Home Phone Number</p>
                                        <input class="form-control" type="text" name="date">
                                    </div>

                                    <div class="col-4">
                                        <p class="mb-1 mt-4 font-weight-bold">Mobile Phone Number</p>
                                        <input class="form-control" type="text" name="date">
                                    </div>

                                    <div class="col-4">
                                        <p class="mb-1 mt-4 font-weight-bold">E-mail Address</p>
                                        <input class="form-control" type="text" name="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-3">
                                        <p class="mb-1 mt-4 font-weight-bold">NSO</p>
                                        <input type="file" class="form-control">
                                    </div>

                                    <div class="col-3">
                                        <p class="mb-1 mt-4 font-weight-bold">IELTS Result</p>
                                        <input type="file" class="form-control">
                                    </div>

                                    <div class="col-3">
                                        <p class="mb-1 mt-4 font-weight-bold">NBI Clearance</p>
                                        <input type="file" class="form-control">
                                    </div>

                                    <div class="col-3">
                                        <p class="mb-1 mt-4 font-weight-bold">Picture</p>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary center">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    include('includes/footer.php');
    include('includes/foot.php');
?>  