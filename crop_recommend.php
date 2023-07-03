<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Crop Recommender</title>
        <!-- Favicon-->
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
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
                        <li class="nav-item"><a class="nav-link active" href="#!">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Crop Database</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- section-->
        <section class="bg-light py-5">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-tree"></i></div>
                    <h2 class="fw-bolder">Crop Recommender</h2>
                    <p class="lead mb-0">It recommends crops based on various factors related to soil and temperature.</p>
                    <p class="lead mb-0">To get started, please enter the following details below: </p>
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

                            <!-- pH input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="ph" type="number" step="0.01" placeholder="eg: 7.1" data-sb-validations="required" />
                                <label for="ph">pH value of the soil</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="ph:required">ph of soil is required.</div> -->
                            </div>

                            <!-- Rainfall input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="rain" type="number" step="0.01" min="eg: 67.8"  placeholder="0" data-sb-validations="required" />
                                <label for="rain">Rainfall (in mm)</label>
                                <!-- <div class="invalid-feedback" data-sb-feedback="rain:required">Rainfall is required.</div> -->
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg" name="Crop_Recommend" type="submit">Confirm</button></div>
                        </form>
                    </div>

                    <div id="result">
                        <div class="text-center mb-3">
                            <?php 
                                if(isset($_POST['Crop_Recommend'])){
                                    $n=trim($_POST['n']);
                                    $p=trim($_POST['p']);
                                    $k=trim($_POST['k']);
                                    $t=trim($_POST['temp']);
                                    $h=trim($_POST['humidity']);
                                    $ph=trim($_POST['ph']);
                                    $r=trim($_POST['rain']);
                                    echo "Recommended Crop is : ";

                                    $Jn=json_encode($n);
                                    $Jp=json_encode($p);
                                    $Jk=json_encode($k);
                                    $Jtemp=json_encode($t);
                                    $Jhumidity=json_encode($h);
                                    $Jph=json_encode($ph);
                                    $Jrainfall=json_encode($r);
                                    
                                    $command = escapeshellcmd("python models\Crop_Recommendation\crop_recommender.py $Jn $Jp $Jk $Jtemp $Jhumidity $Jph $Jrainfall ");
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
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">made for GGH 2023</p></div>
            <!-- <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div> -->
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
