<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Generate PDF </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <style> 
    body {
        padding-bottom: 90px;
        font-family: 'Lato', sans-serif;
    }
    .container {
        margin-top: 50px;
        padding: 0 150px;
    }
    .navbarIDstar {
        background: #F44336;
        border-radius: 0;
        color: #fff;
    }
    .navbarIDstar ul li a {
        color: #fff;
    }

    .box {
        /* background-color: #000; */
        padding-left: 0;
        padding-right: 0;
        padding-top: 15px;
        padding-bottom: 15px;
        border-radius: 15px;
    }

    ul.navbar-right.nav.navbar-nav li a {
        color: #fff;
    }

    .btnProses {
        margin-top: 25px;
        width: 35%;
        background-color: #F44336;
        color: #fff;
        font-weight: bold;
    }
    </style>

  </head>
  <body>
        <nav class="navbar navbar-default navbarIDstar">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"> <strong> Home </strong> </a></li>
                </ul>
            </div><!-- /.container-fluid -->
        </nav>

    <div class="container">
        <form action="cetak.php" method="POST">
            <div class="col-sm-12 text-center"> <h2> Profile </h2> </div>
<!-- 
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Upload Profile</label>
                        <input type="file" name="CVfotoProfile" id="CVfotoProfile"class="form-control">
                    </div>
                </div>
            </form> -->

            <div class="col-sm-5 col-sm-offset-1"> 
                <div class="form-group">
                    <label> Full Name </label>
                    <input type="text" name="PFullName" class="form-control" placeholder="Dono Steven">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label> Title </label>
                    <input type="text" name="PTitle" class="form-control" placeholder="UI / UX Designer">
                </div>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <div class="form-group">
                    <label> About Me </label>
                    <textarea class="form-control" rows="5" name="PAbout"></textarea>
                </div>
            </div>

            <!-- ###### WORK EXPERIENCE ####### -->
            <div class="col-sm-12 text-center"> <h2> Work Experience </h2> </div>
            <div class="col-sm-12 box">
                <div class="col-sm-5 col-sm-offset-1"> 
                    <div class="form-group">
                        <label> Company Name </label>
                        <input type="text" name="WECompanyName" class="form-control" placeholder="PT. Jaya Maju">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" name="WEPosition" class="form-control" placeholder="Front End Designer">
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Period</label>
                        <input type="text" name="WEPeriod" class="form-control" placeholder="2007 - 2009">
                    </div>
                </div>
            </div> <!-- Tutup Box Experience -->
            <div class="col-sm-10 col-sm-offset-1">
                <a href="#" class="btn btn-default btnAddMore"> + Add More </a>
                <!-- <button type="" class="btn btn-default btnAddMore" id="1"> + Add More </button> -->
            </div>


            <!-- ###### PROJECT EXPERIENCE ####### -->
            <div class="col-sm-12 text-center"> <h2> Project Experience </h2> </div>
            <div class="col-sm-12 box">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Name of Project</label>
                        <input type="text" name="PENameProject" class="form-control" placeholder="Create Awesome Project">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Period</label>
                        <input type="text" name="PEPeriod" class="form-control" placeholder="2007 - 2009">
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group">
                        <label> Position on Project </label>
                        <input type="text" name="PEPosition" class="form-control" placeholder="Back End Developer">
                    </div>
                </div>


                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label> Project Responsibility </label>
                        <textarea class="form-control" rows="3" name="PEResponsibility"></textarea>
                    </div>
                    <a href="#"> + Add New Responsibility </a>
                </div>
                <div class="col-sm-5"> 
                    <div class="form-group">
                        <label> Tools on Project </label>
                        <input type="text" name="PETools" class="form-control" placeholder="Adobe Photoshop">
                    </div>
                    <a href="#"> + Add New Tools </a>
                </div>


            </div> <!-- Tutup Box Project Experience -->
            <div class="col-sm-10 col-sm-offset-1">
                <a href="#" class="btn btn-default btnAddMore"> + Add More </a>
                <!-- <button type="" class="btn btn-default btnAddMore"> + Add More </button> -->
            </div>

            <!-- ###### SKILLS ####### -->
            <div class="col-sm-12 text-center"> <h2> Skills </h2> </div>
            <div class="col-sm-12 box"> 
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label> Professional Skills </label>
                        <input type="text" name="SProSkills" class="form-control" placeholder="Adobe Photoshop">
                    </div>
                    <div class="form-group">
                        <label> Select Range </label>
                        <select class="form-control" id="SProSkillsRange">
                            <option> 1 Basic </option>
                            <option> 2 Intermediate </option>
                            <option> 3 Expert </option>
                            <option> 4 Experience </option>
                            <option> 5 Master </option>
                        </select>
                    </div>
                    <a href="#"> + Add New Professional Skills </a>
                </div>
                
                <div class="col-sm-5">
                    <div class="form-group">
                        <label> Personal Skills </label>
                        <input type="text" name="SPerSkills" class="form-control" placeholder="Presentation">
                    </div>
                    <div class="form-group">
                        <label> Select Range </label>
                        <select class="form-control" id="SPerSkillsRange">
                            <option> 1 Basic </option>
                            <option> 2 Intermediate </option>
                            <option> 3 Expert </option>
                            <option> 4 Experience </option>
                            <option> 5 Master </option>
                        </select>
                    </div>
                    <a href="#"> + Add New Personal Skills  </a>
                </div>
            </div> <!-- Tutup Box Skills -->
            <div class="col-sm-5 col-sm-offset-1">
                <a href="#" class="btn btn-default btnAddMore"> + Add More </a>
                <!-- <button type="" class="btn btn-default"> + Add More </button> -->
            </div>
            <!-- tutup SKILLS -->


            <!-- ###### EDUCATION ####### -->
            <div class="col-sm-12 text-center"> <h2> Education </h2> </div>
            <div class="col-sm-12 box"> 
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>School Name</label>
                        <input type="text" name="ESchoolName" class="form-control" placeholder="International School">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Major</label>
                        <input type="text" name="EMajor" class="form-control" placeholder="Architect">
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Period</label>
                        <input type="text" name="EPeriod" class="form-control" placeholder="2007 - 2009">
                    </div>
                </div>
                <div class="col-sm-5"> </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group">
                        <label> Education Description </label>
                        <textarea class="form-control" rows="5" name="EDesc"></textarea>
                    </div>
                    <a href="#"> + Add New Edcuation Description </a>
                </div>
            </div> <!-- Tutup Box Education -->
            <div class="col-sm-5 col-sm-offset-1">
                <a href="#" class="btn btn-default btnAddMore"> + Add More </a>
                <!-- <button type="" class="btn btn-default"> + Add More </button> -->
            </div>

            <!-- ### Achievement ### -->
            <div class="col-sm-12 text-center"> <h2> Achievement </h2> </div>
            <div class="col-sm-12 box">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Name of Achievement </label>
                        <input type="text" name="AchNameAch" class="form-control" placeholder="Best Performance">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Name of Project</label>
                        <input type="text" name="AchNameProject" class="form-control" placeholder="Awesome Project">
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group">
                        <label> Achievement Description </label>
                        <textarea class="form-control" rows="5" name="AchDesc"></textarea>
                    </div>
                </div>
            </div> <!-- Tutup Box Achievement -->
            <div class="col-sm-5 col-sm-offset-1">
                <a href="#" class="btn btn-default btnAddMore"> + Add More </a>
                <!-- <button type="" class="btn btn-default"> + Add More </button> -->
            </div>

            <div class="col-sm-10 col-sm-offset-1">
                <button type="submit" class="btn btn-default btnProses"> Generate PDF </button>
            </div>
        </form>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>