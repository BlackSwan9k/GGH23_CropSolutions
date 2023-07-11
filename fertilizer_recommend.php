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
        <title>Fertilizer Recommender</title>
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
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-archive-fill"></i></div>
                    <h2 class="fw-bolder">Fertilizer Recommender</h2>
                    <p class="lead mb-0">Using regional and seasonal data, it offers rainfall predictions for specific areas and timeframes.</p>
                    <p class="lead mb-0">To get started, please select the following details below: </p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">

                        <form role="form" action="#result" method="post">

                            <!-- Nitrogen input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="n" type="number" min="0" placeholder="eg: 80" data-sb-validations="required" />
                                <label for="n">N: ratio of nitrogen content in soil</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="n:required">level of Nitrogen is required.</div> -->
                            </div>

                            <!-- Phosphorus input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="p" type="number" min="0" placeholder="eg: 50" data-sb-validations="required" />
                                <label for="p">P: ratio of Phosphorous content in soil</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="p:required">level of Phosphorus is required.</div> -->
                            </div>

                            <!-- Potassium input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="k" type="number" min="0" placeholder="eg:50" data-sb-validations="required" />
                                <label for="k">K: ratio of Potassium content in soil</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="k:required">level of Potassium is required.</div> -->
                            </div>

                            <!-- Temperature input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="temp" type="number" step="0.01" placeholder="eg: 25" data-sb-validations="required" />
                                <label for="temp">Temperature (in °C)</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="temp:required">temperature is required.</div> -->
                            </div>

                            <!-- Humidity input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="humidity" type="number" step="0.01" min="eg: 80.01"  placeholder="0" data-sb-validations="required" />
                                <label for="humidity">Relative Humidity in %</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="humidity:required">relative humidity is required.</div> -->
                            </div>

                            <!-- Moisture input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="moist" type="number" step="0.01" placeholder="eg: 23.1" data-sb-validations="required" />
                                <label for="moist">Moisture of the soil in %</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="ph:required">moisture of soil is required.</div> -->
                            </div>

                            <!-- dsoil = {"Black": 0, "Clayey": 1, "Loamy": 2, "Red": 3, "Sandy": 4} -->
                            <!-- dcrop = {"Barley": 0, "Cotton":	1, "Ground Nuts": 2, "Maize": 3, "Millets":	4,
                                "Oil seeds": 5, "Paddy": 6,"Pulses": 7, "Sugarcane": 8, "Tobacco": 9, "Wheat": 10} -->

                            <!-- Soil Type input-->
                            <div class="form-floating mb-3">
                                <select class="form-control" name="soil">
                                    <option value="">Select the Soil Type</option>
                                    <option name="Sandy" value=4>Sandy</option>
                                    <option name="Loamy" value=2>Loamy</option>
                                    <option name="Black" value=0>Black</option>
                                    <option name="Red" value=3>Red</option>
                                    <option name="Clayey" value=1>Clayey</option>
                                </select>
                            </div>

                            <!-- Crop Type input-->
                            <div class="form-floating mb-3">
                                <select class="form-control" name="crop">
                                    <option value="">Select the Crop Type</option>
                                    <option name="Maize" value=3>Maize</option>
                                    <option name="Sugarcane" value=8>Sugarcane</option>
                                    <option name="Cotton" value=1>Cotton</option>
                                    <option name="Tobacco" value=9>Tobacco</option>
                                    <option name="Paddy" value=6>Paddy</option>
                                    <option name="Barley" value=0>Barley</option>
                                    <option name="Wheat" value=10>Wheat</option>
                                    <option name="Millets" value=4>Millets</option>
                                    <option name="Oil seeds" value=5>Oil seeds</option>
                                    <option name="Pulses" value=7>Pulses</option>
                                    <option name="Ground Nuts" value=2>Ground Nuts</option>
                                </select>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg" name="Fertilizer_Pred" type="submit">Confirm</button></div>
                        </form>
                    </div>


                    <div id="result">
                        <div class="text-center mb-3">
                            <?php 
                                if(isset($_POST['Fertilizer_Pred'])){
                                    $n=trim($_POST['n']);
                                    $p=trim($_POST['p']);
                                    $k=trim($_POST['k']);
                                    $t=trim($_POST['temp']);
                                    $h=trim($_POST['humidity']);
                                    $moist=trim($_POST['moist']);
                                    $soil=trim($_POST['soil']);
                                    $crop=trim($_POST['crop']);
                                    echo "Recommended Fertilizer is : ";

                                    $Jn=json_encode($n);
                                    $Jp=json_encode($p);
                                    $Jk=json_encode($k);
                                    $Jtemp=json_encode($t);
                                    $Jhumidity=json_encode($h);
                                    $Jmoist=json_encode($moist);
                                    $Jsoil=json_encode($soil);
                                    $Jcrop=json_encode($crop);

                                    // $region=trim($_POST['region']);
                                    // $timee=trim($_POST['timee']);

                                    // echo "Predicted Fertilizer for the crop $crop in with soil of $timee is: ";

                                    // $Jregion=json_encode($region);
                                    // $Jtime=json_encode($timee);

                                    $command = escapeshellcmd("python models\Fertilizer_Prediction\Fertilizer.py $Jn $Jp $Jk $Jtemp $Jhumidity $Jmoist $Jsoil $Jcrop");
                                    $output = passthru($command);
                                    echo $output;				
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
