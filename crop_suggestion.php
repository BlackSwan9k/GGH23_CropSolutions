<?php
    include 'connection.php';
    session_start();

    $sql = "SELECT * FROM `states`";
    $all_states = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>

    <SCRIPT language=JavaScript>
        function reload(form){
            var val=form.state.options[form.state.options.selectedIndex].value;
            self.location='crop_suggestion.php?state=' + val ;
        }
    </SCRIPT>
    



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
                        <li class="nav-item"><a class="nav-link active" href="index.php#features">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Crop Database</a></li>
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
                    <h2 class="fw-bolder">Crop Suggestion</h2>
                    <p class="lead mb-0">Best crops based on location.</p>
                    <p class="lead mb-0">To get started, please select the following details below: </p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">

                        <form role="form" action="#result" method="post">

                            <!-- State input-->
                            <div class="form-floating mb-3">
                                
                                <select class="form-control" id='state' name='state' onchange='reload(this.form)'>
                                    <option value="">Select State</option>
                                    <?php $state=$_GET['state']; ?>
                                    <?php while ($category = mysqli_fetch_array($all_states,MYSQLI_ASSOC)):; ?>
                                        <?php if($category['state_code']==@$state){ ?>
                                            <option selected value="<?php echo $category["state_code"];?>">
                                                <?php echo $category["state_name"];?>
                                            </option>
                                        <?php }
                                        else{ ?>
                                            <option value="<?php echo $category["state_code"];?>">
                                                <?php echo $category["state_name"];?>
                                            </option>
                                        <?php }?>
                                    <?php endwhile; ?>
                                </select>
                            </div>


                            

                            <!-- District input-->
                            <div class="form-floating mb-3">
                                <select class="form-control" name="district">
                                    <option value="">Select District</option>

                                        <?php if(isset($state)){ 
                                            $sql2 = "SELECT * FROM `districts` WHERE state_code=$state ";
                                            $all_districts = mysqli_query($conn,$sql2);
                                            ?>

                                            <?php while ($category2 = mysqli_fetch_array($all_districts,MYSQLI_ASSOC)):;  ?>
                                                <option value="<?php echo $category2["dist_name"];?>">
                                                    <?php echo $category2["dist_name"];?>
                                                </option>
                                            <?php endwhile; ?>
                                        <?php } ?>

                                </select>
                            </div>

                            <!-- Season input-->
                            <div class="form-floating mb-3">
                                <select class="form-control" name="season">
                                    <option value="">Select Season</option>
                                    <option name="Kharif" value="Kharif">Kharif</option>
                                    <option name="Rabi" value="Rabi">Rabi</option>
                                    <option name="Summer" value="Summer">Summer</option>
                                    <option name="Autumn" value="Autumn">Autumn</option>
                                    <option name="Winter" value="Winter">Winter</option>
                                    <option name="Whole Year" value="Whole Year">Whole Year</option>
                                </select>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg" name="Crop_Suggest" type="submit">Confirm</button></div>
                        </form>
                    </div>


                    <div id="result">
                        <div class="text-center mb-3">
                            <?php 
                                if(isset($_POST['Crop_Suggest'])){
                                    $statee=trim($_POST['state']);
                                    $district=trim($_POST['district']);
                                    $season=trim($_POST['season']);

                                    echo "Crops grown in ".$district." during the ".$season." season are :- ";

                                    $Jstate=json_encode($statee);
					                $Jdistrict=json_encode($district);
					                $Jseason=json_encode($season);
                                    
                                    $command = escapeshellcmd("python models\Crop_Suggestion\crop_suggestion.py $Jstate $Jdistrict $Jseason ");
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
