<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

// Profile
$PFullName = $_POST['PFullName'];
$PTitle = $_POST['PTitle'];
$PAbout = $_POST['PAbout'];

// Project Experience 
$PENameProject = $_POST['PENameProject'];
$PEPeriod = $_POST['PEPeriod'];
$PEResponsibility = $_POST['PEResponsibility'];
$PETools = $_POST['PETools'];
$PEPosition = $_POST['PEPosition'];

// Work Experience
$WECompanyName = $_POST['WECompanyName'];
$WEPosition = $_POST['WEPosition'];
$WEPeriod = $_POST['WEPeriod'];

//Education
$ESchoolName = $_POST['ESchoolName'];
$EMajor = $_POST['EMajor'];
$EPeriod = $_POST['EPeriod'];
$EDesc = $_POST['EDesc'];

//Skills
$SProSkills = $_POST['SProSkills'];
$SProSkillsRange = $_POST['SProSkillsRange'];
$SPerSkills = $_POST['SPerSkills'];
$SPerSkillsRange = $_POST['SPerSkillsRange'];

//Achievement
$AchNameAch = $_POST['AchNameAch'];
$AchNameProject = $_POST['AchNameProject'];
$AchDesc = $_POST['AchDesc'];


$html = 
'
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> CV Candidat IDstar </title>
	</head>

	<style>

		body {
			font-family: arial;
			background: url("img/watermark.png");
			background-position: center;
			background-repeat: no-repeat;
		}
		.imgprofil, .titleName, .posisiName {
			text-align: center;
		}
		.fs-14 {
			font-size: 14px;
		}
		.titleName {
			line-height: -1px;
		}
		.posisiName {
			line-height: -5px;
		}
		.spacing {
			letter-spacing: 1px;
			text-transform: uppercase;
		}
		table {
			width: 100%;
			font-weight: normal;
			font-size: 12px;
		}

		table tr th {
			text-align: left;
		}

		table tr td {
			text-align: left;
		}

		table tr.TRtitle th {
			text-align: left;
		}

		.progressbarCont {
			width: 100%;
			border: 1px solid rgba(0,0,0,1);
			height: 10px;
		}
		.progressbar1 {
			width: 10%;
			background-color: rgba(0,0,0,1);
			height: 10px;
		}

	</style>

	<body>
		<img src="img/idstar_logo.jpg">

		<div class="imgprofil"> <img src="img/profil.jpg"> </div>
		<div class="titleName"> <h1> '. $PFullName .'  </h1> </div>
		<div class="posisiName"> <h4> '. $PTitle .' </h4> </div>

		<table cellpadding="5">
	 		<tr class="TRtitle">
	 			<th width="30"> <img src="img/blank_small.jpg"> </th>
	 			<th class="fs-14"> PROFILE </th>
	 		</tr>
	 	</table>

	 	<table cellpadding="5">
	 		<tr> 
	 			<td>  
	 				'. $PAbout .'
				</td>
			</tr>
	 	</table>


	 	<table cellpadding="5">
	 		<tr class="TRtitle">
	 			<th width="30"> <img src="img/blank_small.jpg"> </th>
	 			<th class="fs-14"> PROJECT EXPERIENCE </th>
	 		</tr>
	 	</table>

	 	<table cellpadding="5">
	 		<tr>
	 			<th width="300"> '. $PENameProject .' </th> <!-- Name of Project -->
	 			<th class="spacing"> '. $PEPosition .' </th> <!-- Position on Project -->
	 		</tr>

	 		<tr> 
	 			<td> '. $PEPeriod .' </td> <!-- Period of Project -->
	 			<th> Project Responsibility </th>

	 		</tr>

	 		<!-- ---- ### Repeat Project Exp Here ### ---- -->
	 		<tr>
	 			<td> </td>
	 			<td> 
	 				<ul class="bawaan">
	 					<!-- ---- ## Repeat Project Desc Here ## ---- -->
	 					<li> '. $PEResponsibility .' </li> <!-- Project Responsibility -->
	 					<!-- ---- ## End Repeat Project Desc Here ## ---- -->
	 				</ul> 
	 			</td> 
	 		</tr>

	 		<!-- ######### Tools ######### -->
	 		<tr>
	 			<td> </td>
	 			<th> Tools on Project </th>
	 		</tr>

	 		<tr>
	 			<td> </td>
	 			<td> 
	 				<ul>
	 					<!-- ---- ## Repeat Tools Here ## ---- -->
	 					<li> '. $PETools .' </li>
	 					<!-- ---- ## End Repeat Tools Here ## ---- -->
	 				</ul>
	 			</td>
	 		</tr>
	 		<!-- ---- ### End Repeat Project Here ### ---- -->

	 	</table>

	 	<table cellpadding="5">
	 		<tr class="TRtitle">
	 			<th width="30"> <img src="img/blank_small.jpg"> </th>
	 			<th class="fs-14"> WORK EXPERIENCE </th>
	 		</tr>
	 	</table>

	 	<table cellpadding="5">
	 		<tr>
	 			<th width="300"> '. $WECompanyName .' </th> <!-- Company Name -->
	 			<th class="spacing"> '. $WEPosition .' </th> <!-- Position on Name -->
	 		</tr>

	 		<tr> 
	 			<td> '. $WEPeriod .' </td>
	 			<td> </td>

	 		</tr>
	 	</table>


	 	<table cellpadding="5">
	 		<tr class="TRtitle">
	 			<th width="30"> <img src="img/blank_small.jpg"> </th>
	 			<th class="fs-14"> EDUCATION </th>
	 		</tr>
	 	</table>

	 	<!-- ---- ### Repeat Education Here ### ---- -->
	 	<table cellpadding="5">
	 		<tr>
	 			<th width="300"> '. $ESchoolName .' </th>
	 			<th> '. $EMajor .' </th>
	 		</tr>

	 		<tr>
	 			<td> '. $EPeriod .' </td>
	 			<td>
	 				<ul>
	 					<!-- ---- ## Repeat Education Description Here ## ---- -->
	 					<li> '. $EDesc .' </li>
	 					<!-- ---- ## End Repeat Education Description Here ## ---- -->
	 				</ul>
	 			</td>
	 		</tr>

	 		<tr>
	 			<td> </td>
	 			<td> <hr> </td>
	 		</tr>
	 	</table>
	 	<!-- ---- ### End Repeat Education Here ### ---- -->


	 	<table cellpadding="5">
	 		<tr class="TRtitle">
	 			<th width="30"> <img src="img/blank_small.jpg"> </th>
	 			<th class="fs-14"> SKILLS </th>
	 		</tr>
	 	</table>

	 	<table cellpadding="5">
	 		<tr>
	 			<th width="300"> Professional Skills </th>
	 			<td> '. $SProSkills .' </td>
	 			<td> <div class="progressbarCont"> <div class="progressbar1"> </div> </div> </td>
	 		</tr>

	 		<tr>
	 			<td> </td>
	 			<td colspan="4"> <hr> </td>
	 		</tr>

	 		<tr>
	 			<th width="300"> Personal Skills </th>
	 			<td> '. $SPerSkills .' </td>
	 			<td> <div class="progressbarCont"> <div class="progressbar1"> </div> </div> </td>
	 		</tr>
	 	</table>


	 	<table cellpadding="5">
	 		<tr class="TRtitle">
	 			<th width="30"> <img src="img/blank_small.jpg"> </th>
	 			<th class="fs-14"> ACHIEVEMENT </th>
	 		</tr>
	 	</table>

	 	<table cellpadding="5">
	 		<tr>
	 			<th width="300"> '. $AchNameAch .' </th>
				<th> '. $AchNameProject .' </th>
	 		</tr>

	 		<tr>
	 			<td> </td>
	 			<td> 
	 				<ul class="bawaan">
	 					<!-- ---- ### Repeat Achievement Here ### ---- -->
	 					<li> '. $AchDesc .' </li>
	 					<!-- ---- ### End Repeat Achievement Here ### ---- -->
	 				</ul>
	 			</td>
	 		</tr>

	 	</table>


	</body>

</html>

';


$mpdf->WriteHTML($html);
$mpdf->Output();


?>