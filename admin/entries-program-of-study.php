<?php 
    include('includes/head.php');
    include('includes/header.php');
?>
    <div class="wrapper">
        <div class="container">
            <div class="page-title-box">
                <h3 class="page-title">Register New Program</h3>
            </div>
            <div class="card m-b-30">
                <h4 class="card-header">Program Information</h4>
                <div class="card-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <div class="col-6">
                                <p class="mb-1 mt-4 font-weight-bold ">Program Offered</p>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-4 font-weight-bold ">Program Category</p>
                                <select style="width: 845px;" class="form-control" name="category" required="required">
                                    <option value="Post Graduate">Post Graduate</option>
                                    <option value="Skills Practicum Certificate">Skills Practicum Certificate</option>
                                    <option value="Vocational">Vocational</option>
                                    <option value="Graduate Studies">Graduate Studies</option>
                                    <option value="Under Graduate">Under Graduate</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <p class="mb-1 mt-4 font-weight-bold ">School Name</p>
                                <select style="width: 845px;" class="form-control" name="school" required="required">
                                    <option value="123" class="category">ACG New Zealand International College</option>
                                    <option value="183" class="category">Al-Madinah International University</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-4 font-weight-bold ">Tuition(PHP)</p>
                                <input type="number" class="form-control" value="">
                            </div>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary center">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php 
    include('includes/footer.php');
    include('includes/foot.php');
?>  