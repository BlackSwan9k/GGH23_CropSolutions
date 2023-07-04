<?php
    include 'connection.php';
    session_start();

    $sql = "SELECT * FROM `rainfall_regions`";
    $all_regions = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rainfall Prediction</title>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand">Crop Solutions</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="index.php#features">Services</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#!">Crop Database</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- section-->
        
        <section class="bg-light py-5">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-map"></i></div>
                    <h2 class="fw-bolder">Rainfall Prediction</h2>
                    <p class="lead mb-0">Using regional and seasonal data, it offers rainfall predictions for specific areas and timeframes.</p>
                    <p class="lead mb-0">To get started, please select the following details below: </p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">

                        <form role="form" action="#result" method="post">

                            <!-- Region input-->
                            <div class="form-floating mb-3">
                                <select class="form-control" id='region' name='region'>
                                    <option value="">Select Region</option>
                                    <?php while ($category = mysqli_fetch_array($all_regions,MYSQLI_ASSOC)):; ?>
                                        <option value="<?php echo $category["region"];?>">
                                            <?php echo $category["region"];?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>

                            <!-- Season input-->
                            <div class="form-floating mb-3">
                                <select class="form-control" name="timee">
                                    <option value="">Select time of the year</option>
                                    <option name="ANNUAL" value="ANNUAL">Annual</option>
                                    <option name="JAN" value="JAN">Jan</option>
                                    <option name="FEB" value="FEB">Feb</option>
                                    <option name="MAR" value="MAR">Mar</option>
                                    <option name="APR" value="APR">Apr</option>
                                    <option name="MAY" value="MAY">May</option>
                                    <option name="JUN" value="JUN">Jun</option>
                                    <option name="JUL" value="JUL">Jul</option>
                                    <option name="AUG" value="AUG">Aug</option>
                                    <option name="SEP" value="SEP">Sep</option>
                                    <option name="OCT" value="OCT">Oct</option>
                                    <option name="NOV" value="NOV">Nov</option>
                                    <option name="DEC" value="DEC">Dec</option>
                                    <option name="JAN-FEB" value="JAN-FEB">Jan-Feb</option>
                                    <option name="MAR-MAY" value="MAR-MAY">Mar-May</option>
                                    <option name="JUN-SEP" value="JUN-SEP">Jun-Sep</option>
                                    <option name="OCT-DEC" value="OCT-DEC">Oct-Dec</option>
                                </select>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg" name="Rainfall_Pred" type="submit">Confirm</button></div>
                        </form>
                    </div>


                    <div id="result">
                        <div class="text-center mb-3">
                            <?php 
                                if(isset($_POST['Rainfall_Pred'])){
                                    $region=trim($_POST['region']);
                                    $timee=trim($_POST['timee']);

                                    echo "Predicted Rainfall for the Region $region in the month of $timee is: ";

                                    $Jregion=json_encode($region);
                                    $Jtime=json_encode($timee);

                                    $command = escapeshellcmd("python models\Rainfall\\rainfall_pred.py $Jregion $Jtime ");
                                    $output = passthru($command);
                                    echo $output;	
                                    echo " mm";				
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-3 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">made for GGH 2023</p></div>
            <!-- <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div> -->
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
