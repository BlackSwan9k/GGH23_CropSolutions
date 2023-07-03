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


        <!-- Contact section-->
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

                        <!-- to get an API token!-->
                        <form id="crop_recommend" data-sb-form-api-token="API_TOKEN">
                            <!-- Nitrogen input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="n" type="number" placeholder="0" data-sb-validations="required" />
                                <label for="n">N: ratio of nitrogen content in soil</label>
                                <div class="invalid-feedback" data-sb-feedback="n:required">level of Nitrogen is required.</div>
                            </div>

                            <!-- Phosphorus input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="p" type="number" placeholder="0" data-sb-validations="required" />
                                <label for="p">P: ratio of Phosphorous content in soil</label>
                                <div class="invalid-feedback" data-sb-feedback="p:required">level of Phosphorus is required.</div>
                            </div>

                            <!-- Potassium input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="k" type="number" placeholder="0" data-sb-validations="required" />
                                <label for="k">K: ratio of Potassium content in soil</label>
                                <div class="invalid-feedback" data-sb-feedback="k:required">level of Potassium is required.</div>
                            </div>

                            <!-- Temperature input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="temp" type="number" placeholder="0" data-sb-validations="required" />
                                <label for="temp">Temperature (in °C)</label>
                                <div class="invalid-feedback" data-sb-feedback="temp:required">temperature is required.</div>
                            </div>

                            <!-- Humidity input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="humidity" type="number" placeholder="0" data-sb-validations="required" />
                                <label for="humidity">Relative Humidity in %</label>
                                <div class="invalid-feedback" data-sb-feedback="humidity:required">relative humidity is required.</div>
                            </div>

                            <!-- pH input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="ph" type="number" placeholder="0" data-sb-validations="required" />
                                <label for="ph">pH value of the soil</label>
                                <div class="invalid-feedback" data-sb-feedback="ph:required">ph of soil is required.</div>
                            </div>

                            <!-- Rainfall input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="rain" type="number" placeholder="0" data-sb-validations="required" />
                                <label for="rain">Rainfall (in mm)</label>
                                <div class="invalid-feedback" data-sb-feedback="rain:required">Rainfall is required.</div>
                            </div>
                            <!-- Submit Button-->
                            <!-- Submit success message-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit" formtarget="index.php">Confirm</button></div>
                        </form>
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
