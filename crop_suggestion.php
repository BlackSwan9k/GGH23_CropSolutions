<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Crop Suggestion</title>
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
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-map"></i></div>
                    <h2 class="fw-bolder">Crop Suggestion</h2>
                    <p class="lead mb-0">Best crops based on location.</p>
                    <p class="lead mb-0">To get started, please enter the following details below: </p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">

                        <!-- to get an API token!-->
                        <form id="crop_recommend" data-sb-form-api-token="API_TOKEN">

                            <!-- State input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="state" type="text" placeholder="Enter state." data-sb-validations="required" />
                                <label for="state">State</label>
                                <div class="invalid-feedback" data-sb-feedback="state:required">State is required.</div>
                            </div>

                            <!-- District input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="district" type="text" placeholder="Enter district." data-sb-validations="required" />
                                <label for="district">District</label>
                                <div class="invalid-feedback" data-sb-feedback="district:required">District is required.</div>
                            </div>

                            <!-- Season input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter season." data-sb-validations="required" />
                                <label for="name">Season</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Season is required.</div>
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
