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
    .btnAddMore {
        background: linear-gradient(90deg,#2193b0,#6dd5ed);
        color: #fff;
        font-weight: bold;
        border: none;
        margin-top: 15px;
        margin-bottom: 10px;
    }

    .btnAddMore:hover {
        background: #e6e6e6;
        color: #272727;
    }

    .btnProses {
        margin-top: 25px;
        width: 35%;
        background-color: #5CB85C;
        color: #fff;
        font-weight: bold;
        float: right;
    }

    .rowForm {
        margin: 0px;
    }

    .btnDel {
        margin-top: 15px;
        float: left;
        font-weight: bold;
        border: none;
        color: #fff;
        width: 150px;
    }

    .btnDel {
        background-color: #f44336;
        margin-right: 15px;
    }
    hr.dividerDelSave {
        margin: 5px;
        display: none;
    }

    a {
        cursor: pointer;
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
            <div class="row rowForm"> 
                <div class="col-sm-6"> 
                    <div class="form-group">
                        <label> Full Name </label>
                        <input type="text" name="PFullName" class="form-control" placeholder="Steven">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label> Title </label>
                        <input type="text" name="PTitle" class="form-control" placeholder="UI / UX Designer">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label> About Me </label>
                        <textarea class="form-control" rows="5" name="PAbout"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12"> <hr> </div>
            </div>

            <!-- ###### PROJECT EXPERIENCE ####### -->
            <div class="row rowForm">
                <div class="col-sm-12 text-center"> <h2> Project Experience </h2> </div>

                <div class="col-sm-12 box">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name of Project</label>
                            <input type="text" name="PENameProject" class="form-control" placeholder="Create Awesome Project">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> Position on Project </label>
                            <input type="text" name="PEPosition" class="form-control" placeholder="Back End Developer">
                        </div>
                    </div>

                    <div class="row rowForm">
                        <div class="col-sm-6">
                            <label> Start date </label>
                        </div>
                        <div class="col-sm-6">
                            <label> End date </label>
                        </div>
                    </div>
                    <div class="row rowForm">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="PEstartYear">
                                    <option> - </option>
                                    <option> 2005 </option>
                                    <option> 2006 </option>
                                    <option> 2007 </option>
                                    <option> 2008 </option>
                                    <option> 2009 </option>
                                    <option> 2010 </option>
                                    <option> 2011 </option>
                                    <option> 2012 </option>
                                    <option> 2013 </option>
                                    <option> 2014 </option>
                                    <option> 2015 </option>
                                    <option> 2016 </option>
                                    <option> 2017 </option>
                                    <option> 2018 </option>
                                    <option> 2019 </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="PEstartMonth">
                                    <option> - </option>
                                    <option> Januari </option>
                                    <option> Februari </option>
                                    <option> Maret </option>
                                    <option> April </option>
                                    <option> Mei </option>
                                    <option> Juni </option>
                                    <option> July </option>
                                    <option> Agustus </option>
                                    <option> September </option>
                                    <option> Oktober </option>
                                    <option> November </option>
                                    <option> Desember </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="PEendYear">
                                    <option> - </option>
                                    <option> 2005 </option>
                                    <option> 2006 </option>
                                    <option> 2007 </option>
                                    <option> 2008 </option>
                                    <option> 2009 </option>
                                    <option> 2010 </option>
                                    <option> 2011 </option>
                                    <option> 2012 </option>
                                    <option> 2013 </option>
                                    <option> 2014 </option>
                                    <option> 2015 </option>
                                    <option> 2016 </option>
                                    <option> 2017 </option>
                                    <option> 2018 </option>
                                    <option> 2019 </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="PEendMonth">
                                    <option> - </option>
                                    <option> Januari </option>
                                    <option> Februari </option>
                                    <option> Maret </option>
                                    <option> April </option>
                                    <option> Mei </option>
                                    <option> Juni </option>
                                    <option> July </option>
                                    <option> Agustus </option>
                                    <option> September </option>
                                    <option> Oktober </option>
                                    <option> November </option>
                                    <option> Desember </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> Project Responsibility </label>
                            <textarea class="form-control" rows="3" name="PEResponsibility"></textarea>
                        </div>
                        <a id="add_PEResponsibility"> + Add New Responsibility </a>
                    </div>
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label> Tools on Project </label>
                            <input type="text" name="PETools" class="form-control" placeholder="Adobe Photoshop">
                        </div>
                        <a id="add_PETools"> + Add New Tools </a>
                    </div>

                    <div class="col-sm-12"> <hr class="dividerDelSave"> </div>
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-default btnDel"> Delete </a>
                        <a id="add_moreProjectExp" class="btn btn-info btnAddMore"> + Add Project Experience </a>
                    </div>

                </div> <!-- Tutup Box Project Experience -->
            </div>
            <!-- ###### Tutup PROJECT EXPERIENCE ####### -->

            <div class="row">
                <div class="col-sm-12"> <hr> </div>
            </div>

            <!-- ###### WORK EXPERIENCE ####### -->
            <div class="row rowForm">
                <div class="col-sm-12 text-center"> <h2> Work Experience </h2> </div>

                <div class="col-sm-12 box">
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label> Company Name </label>
                            <input type="text" name="WECompanyName" class="form-control" placeholder="PT. Jaya Maju">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="WEPosition" class="form-control" placeholder="Front End Designer">
                        </div>
                    </div>

                    <div class="row rowForm">
                        <div class="col-sm-6">
                            <label> Start date </label>
                        </div>
                        <div class="col-sm-6">
                            <label> End date </label>
                        </div>
                    </div>
                    <div class="row rowForm">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="WEstartYear">
                                    <option> - </option>
                                    <option> 2005 </option>
                                    <option> 2006 </option>
                                    <option> 2007 </option>
                                    <option> 2008 </option>
                                    <option> 2009 </option>
                                    <option> 2010 </option>
                                    <option> 2011 </option>
                                    <option> 2012 </option>
                                    <option> 2013 </option>
                                    <option> 2014 </option>
                                    <option> 2015 </option>
                                    <option> 2016 </option>
                                    <option> 2017 </option>
                                    <option> 2018 </option>
                                    <option> 2019 </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="WEstartMonth">
                                    <option> - </option>
                                    <option> Januari </option>
                                    <option> Februari </option>
                                    <option> Maret </option>
                                    <option> April </option>
                                    <option> Mei </option>
                                    <option> Juni </option>
                                    <option> July </option>
                                    <option> Agustus </option>
                                    <option> September </option>
                                    <option> Oktober </option>
                                    <option> November </option>
                                    <option> Desember </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="WEendYear">
                                    <option> - </option>
                                    <option> 2005 </option>
                                    <option> 2006 </option>
                                    <option> 2007 </option>
                                    <option> 2008 </option>
                                    <option> 2009 </option>
                                    <option> 2010 </option>
                                    <option> 2011 </option>
                                    <option> 2012 </option>
                                    <option> 2013 </option>
                                    <option> 2014 </option>
                                    <option> 2015 </option>
                                    <option> 2016 </option>
                                    <option> 2017 </option>
                                    <option> 2018 </option>
                                    <option> 2019 </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="WEendMonth">
                                    <option> - </option>
                                    <option> Januari </option>
                                    <option> Februari </option>
                                    <option> Maret </option>
                                    <option> April </option>
                                    <option> Mei </option>
                                    <option> Juni </option>
                                    <option> July </option>
                                    <option> Agustus </option>
                                    <option> September </option>
                                    <option> Oktober </option>
                                    <option> November </option>
                                    <option> Desember </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12"> <hr class="dividerDelSave"> </div>

                    <div class="col-sm-6">
                        <a href="#" class="btn btn-default btnDel"> Delete </a>
                        <a class="btn btn-info btnAddMore"> + Add Work Experience </a>
                    </div>

                </div> <!-- Tutup Box Experience -->
            </div>
            <!-- ###### Tutup WORK EXPERIENCE ####### -->

            <div class="row">
                <div class="col-sm-12"> <hr> </div>
            </div>

            <!-- ###### SKILLS ####### -->
            <div class="row rowForm"> 
                <div class="col-sm-12 text-center"> <h2> Skills </h2>  </div>
                
                <div class="col-sm-12 box"> 
                    <div class="col-sm-6">
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
                    
                    <div class="col-sm-6">
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
                    </div>
                    <div class="col-sm-12"> <hr class="dividerDelSave"> </div>
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-default btnDel"> Delete </a>
                        <a id="#" class="btn btn-info btnAddMore"> + Add Skills </a>
                    </div>
                </div> <!-- Tutup Box Skills -->
            </div>
            <!-- tutup SKILLS -->

            <div class="row">
                <div class="col-sm-12"> <hr> </div>
            </div>

            <!-- ###### EDUCATION ####### -->
            <div class="row rowForm"> 
                <div class="col-sm-12 text-center"> <h2> Education </h2> </div>
                <div class="col-sm-12 box"> 
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>School Name</label>
                            <input type="text" name="ESchoolName" class="form-control" placeholder="International School">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Major</label>
                            <input type="text" name="EMajor" class="form-control" placeholder="Architect">
                        </div>
                    </div>

                    <div class="row rowForm">
                        <div class="col-sm-6">
                            <label> Start date </label>
                        </div>
                        <div class="col-sm-6">
                            <label> End date </label>
                        </div>
                    </div>
                    <div class="row rowForm">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="EstartYear">
                                    <option> - </option>
                                    <option> 2005 </option>
                                    <option> 2006 </option>
                                    <option> 2007 </option>
                                    <option> 2008 </option>
                                    <option> 2009 </option>
                                    <option> 2010 </option>
                                    <option> 2011 </option>
                                    <option> 2012 </option>
                                    <option> 2013 </option>
                                    <option> 2014 </option>
                                    <option> 2015 </option>
                                    <option> 2016 </option>
                                    <option> 2017 </option>
                                    <option> 2018 </option>
                                    <option> 2019 </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="EstartMonth">
                                    <option> - </option>
                                    <option> Januari </option>
                                    <option> Februari </option>
                                    <option> Maret </option>
                                    <option> April </option>
                                    <option> Mei </option>
                                    <option> Juni </option>
                                    <option> July </option>
                                    <option> Agustus </option>
                                    <option> September </option>
                                    <option> Oktober </option>
                                    <option> November </option>
                                    <option> Desember </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="EendYear">
                                    <option> - </option>
                                    <option> 2005 </option>
                                    <option> 2006 </option>
                                    <option> 2007 </option>
                                    <option> 2008 </option>
                                    <option> 2009 </option>
                                    <option> 2010 </option>
                                    <option> 2011 </option>
                                    <option> 2012 </option>
                                    <option> 2013 </option>
                                    <option> 2014 </option>
                                    <option> 2015 </option>
                                    <option> 2016 </option>
                                    <option> 2017 </option>
                                    <option> 2018 </option>
                                    <option> 2019 </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="" name="EendMonth">
                                    <option> - </option>
                                    <option> Januari </option>
                                    <option> Februari </option>
                                    <option> Maret </option>
                                    <option> April </option>
                                    <option> Mei </option>
                                    <option> Juni </option>
                                    <option> July </option>
                                    <option> Agustus </option>
                                    <option> September </option>
                                    <option> Oktober </option>
                                    <option> November </option>
                                    <option> Desember </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6"> </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label> Education Description </label>
                            <textarea class="form-control" rows="5" name="EDesc"></textarea>
                        </div>
                        <a href="#"> + Add New Edcuation Description </a>
                    </div>
                </div> <!-- Tutup Box Education -->
                <div class="col-sm-6">
                    <a href="#" class="btn btn-default btnDel"> Delete </a>
                    <a href="#" class="btn btn-info btnAddMore"> + Add Education </a>
                </div>
            </div>

            <!-- ### Achievement ### -->
            <div class="row rowFrom">
                <div class="col-sm-12 text-center"> <h2> Achievement </h2> </div>
                <div class="col-sm-12 box">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name of Achievement </label>
                            <input type="text" name="AchNameAch" class="form-control" placeholder="Best Performance">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name of Project</label>
                            <input type="text" name="AchNameProject" class="form-control" placeholder="Awesome Project">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label> Achievement Description </label>
                            <textarea class="form-control" rows="5" name="AchDesc"></textarea>
                        </div>
                    </div>
                </div> <!-- Tutup Box Achievement -->
                <div class="col-sm-6">
                    <a href="#" class="btn btn-default btnDel"> Delete </a>
                    <a href="#" class="btn btn-info btnAddMore"> + Add Achievement </a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12"> <hr> </div>
            </div>

            <div class="col-sm-12">
                <button type="submit" class="btn btn-default btnProses"> Generate PDF </button>
            </div>
        </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>

        $(document).ready(function(){
            var i = 1;
            $("#add_row").click(function(){
            $('#addr'+i) 
                .html("<td>" + (i+1) + "</td> <td> <input name='user" + i + "' type='text' placeholder='User' class='form-control input-md'  /> </td> <td> <input  name='pass"+i+"' type='text' placeholder='Password' class='form-control input-md' /> </td> <td> <input  name='ip" + i + "' type='text' placeholder='IP' class='form-control input-md'> </td> <td> <input  name='country" + i + "' type='text' placeholder='Country'  class='form-control input-md'> </td> <td> <input  name='ipDisp" + i + "' type='text' placeholder='IP details'  class='form-control input-md'> </td>");

            $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
            i++; 
        });
            $("#delete_row").click(function(){
                if(i>1){
                $("#addr"+(i-1)).html('');
                i--;
                }
            });

        });
    </script>







    
  </body>
</html>