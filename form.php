<html>
<head>
    <title>
        Form | CV Builder
    </title>
    <style>
        body {
            background: url(img/intro-bg.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 <link href="stylesheets/basic-grey.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>    
<script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="/vendors/formvalidation/dist/js/plugins/Tachyons.min.js"></script>
<script src="/vendors/formvalidation/dist/js/plugins/StartEndDate.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('demoForm'),
        {
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'The event name is required'
                        },
                    }
                },
                startDate: {
                    validators: {
                        notEmpty: {
                            message: 'The start date is required'
                        },
                    }
                },
                endDate: {
                    validators: {
                        notEmpty: {
                            message: 'The end date is required'
                        },
                    }
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                tachyons: new FormValidation.plugins.Tachyons(),
                submitButton: new FormValidation.plugins.SubmitButton(),
                icon: new FormValidation.plugins.Icon({
                    valid: 'fa fa-check',
                    invalid: 'fa fa-times',
                    validating: 'fa fa-refresh',
                }),
                startEndDate: new FormValidation.plugins.StartEndDate({
                    format: 'YYYY/MM/DD',
                    startDate: {
                        field: 'startDate',
                        message: 'The start date must be a valid date and ealier than the end date'
                    },
                    endDate: {
                        field: 'endDate',
                        message: 'The end date must be a valid date and later than the start date'
                    },
                }),
            },
        }
    );
});
</script>


<body>

<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="templates.php">Change Template</a>



        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
    </div>
    <!-- /.container -->
</nav>
<br><br><br>

<form action="output/resume

<?php
echo $_GET["tmp"];
?>

.php" method="post" class="basic-grey">
            <center><h1>Basic Information</h1></center>
            <label><span>Full Name: </span><input name="name" placeholder="First and Last name" id="in" type="text" /></label>
            <label><span>Address:</span><input name="address" placeholder="Insert your address" id="in" type="text" /></label>

            <label><span>Phone Number:</span><input name="phone" placeholder="Enter Phone number" id="in" type="text" /></label>
            <label><span>Email:</span><input name="email" placeholder="Enter E-mail Address" id="in" type="text" /></label>
             <label><span>Linkedin:</span><input name="linkedin" placeholder="Enter Linkedin Profile link" id="in" type="text" /></label>

        <label><span>Objective:</span><textarea name="object" placeholder="Enter your objective."></textarea></label>



    <br><center><h1>Education History</h1></center>

    <center><h4>University:</h4></center>
    <label><span>Name of university</span><input name="ed1" placeholder="" id="in4" type="text"/></label>
    <label><span>Name of degree</span><input name="degree1" placeholder="" id="in5" type="text"/></label>
     <!-- The start date field -->
        <label><span>Start date</span><input type="text" name="startDate1" id="in5" placeholder="mm/yyyy" /></label>

        <!-- The end date field -->
        <label><span>End date</span><input type="text" name="endDate1" id="in5" placeholder="mm/yyyy" /></label>
        <label><span>Grade Achieved</span><input name="grade1" placeholder="" id="in5" type="text" /></label>
<label><span>Activities and Socities</span><input name="activity1" placeholder="" id="in5" type="text" /></label>
   
     <center><h4>Secondary School:</h4></center>
    <label><span>Name of School</span><input name="ed2" placeholder="" id="in4" type="text"/></label>
    <label><span>Exam Grade</span><input name="grade2" placeholder="" id="in5" type="text"/></label>
     <!-- The start date field -->
      <label><span>Start date</span><input type="text" name="startDate2" id="in5" placeholder="mm/yyyy" /></label>

        <!-- The end date field -->
        <label><span>End date</span><input type="text" name="endDate2" id="in5" placeholder="mm/yyyy" /></label>
        <label><span>Subjects Taken</span><input name="degree2" placeholder="" id="in5" type="text" /></label>
<label><span>Activities and Socities</span><input name="activity2" placeholder="" id="in5" type="text" /></label>



 <center><h4>Summer School/Courses:</h4></center>
    <label><span>Name of institution</span><input name="ed3" placeholder="" id="in4" type="text"/></label>
    <label><span>Name of course</span><input name="degree3" placeholder="" id="in5" type="text"/></label>
     <!-- The start date field -->
        <label><span>Start date</span><input type="text" name="startDate3" id="in5" placeholder="mm/yyyy" /></label>

        <!-- The end date field -->
        <label><span>End date</span><input type="text" name="endDate3" id="in5" placeholder="mm/yyyy" /></label>
        <label><span>Grade Achieved</span><input name="grade3" placeholder="" id="in5" type="text" /></label>
    <br>
    <br>

    <center><h1>Employment History</h1></center>

        <center><h4>Work Experience 1:</h4></center>
          <br><center><label>Please select an employment area:
<input list="employment_area" name="myemployment" /></label></center>
<datalist id="employment_area">
 
  <option value="Finance">
  <option value="Consulting">
  <option value="Law">
  <option value="Financial analysis">
  <option value="Market analysis">
  <option value="Profit maximisation">
  <option value="Equity capital markets">
  <option value="Risk management">
</datalist><br>
            <label><span>Name of Workplace</span><input name="tit_ex" placeholder="Name of Workplace" id="in4" type="text" /><span>Name of role</span><input name="desc_ex" placeholder="Name of role" id="in5" type="text" /><span</span>

             <!-- The start date field -->
        <label><span>Start date</span><input type="text" name="work_startDate" placeholder="mm/yyyy" /></label>

        <!-- The end date field -->
        <label><span>End date</span><input type="text" name="work_endDate" placeholder="mm/yyyy" /></label>

        <label><center>What did you learn?</center><span></span><input type="text" name="learning" placeholder="" /></label>
        <label><center>What notable contributions did you make?</center><input type="text" name="contribution" placeholder="" /><span></span></label>
    </label>

<center><h4>Work Experience 2:</h4></center>
          <br><center><label>Please select an employment area:
<input list="employment_area" name="myemployment2" /></label></center>
<datalist id="employment_area">
 <option value="Finance">
  <option value="Consulting">
  <option value="Law">
  <option value="Financial analysis">
  <option value="Market analysis">
  <option value="Profit maximisation">
  <option value="Equity capital markets">
  <option value="Risk management">
</datalist><br>
            <label><span>Name of Workplace</span><input name="tit_ex2" placeholder="Name of Workplace" id="in4" type="text" /><span>Name of role</span><input name="desc_ex2" placeholder="Name of role" id="in5" type="text" /><span</span>

             <!-- The start date field -->
        <label><span>Start date</span><input type="text" name="work_startDate2" placeholder="mm/yyyy" /></label>

        <!-- The end date field -->
        <label><span>End date</span><input type="text" name="work_endDate2" placeholder="mm/yyyy" /></label>

        <label><center>What did you learn?</center><span></span><input type="text" name="learning2" placeholder="" /></label>
        <label><center>What notable contributions did you make?</center><input type="text" name="contribution2" placeholder="" /><span></span></label>
    </label>


<center><h4>Work Experience 3:</h4></center>
          <br><center><label>Please select an employment area:
<input list="employment_area" name="myemployment3" /></label></center>
<datalist id="employment_area">
 <option value="Finance">
  <option value="Consulting">
  <option value="Law">
  <option value="Financial analysis">
  <option value="Market analysis">
  <option value="Profit maximisation">
  <option value="Equity capital markets">
  <option value="Risk management">
</datalist><br>
            <label><span>Name of Workplace</span><input name="tit_ex3" placeholder="Name of Workplace" id="in4" type="text" /><span>Name of role</span><input name="desc_ex3" placeholder="Name of role" id="in5" type="text" /><span</span>

             <!-- The start date field -->
        <label><span>Start date</span><input type="text" name="work_startDate3" placeholder="mm/yyyy" /></label>

        <!-- The end date field -->
        <label><span>End date</span><input type="text" name="work_endDate3" placeholder="mm/yyyy" /></label>

        <label><center>What did you learn?</center><span></span><input type="text" name="learning3" placeholder="" /></label>
        <label><center>What notable contributions did you make?</center><input type="text" name="contribution3" placeholder="" /><span></span></label>
    </label>

       <br><center><h1>Positions of responsibility</h1></center>

        <center><h4>Position 1:</h4></center>
            <label><span>Name</span><input name="pos1" placeholder="Name" id="in4" type="text" /><span>Role</span><input name="role1" placeholder="Role" id="in5" type="text" /><span</span>

             <!-- The start date field -->
        <label><span>Start date</span><input type="text" name="pos_startDate1" placeholder="mm/yyyy" /></label>

        <!-- The end date field -->
        <label><span>End date</span><input type="text" name="pos_endDate1" placeholder="mm/yyyy" /></label>

        <label><span>Metric</span><input type="text" name="pos_metric1" placeholder="" /></label>
    </label>


     <center><h4>Position 2:</h4></center>
            <label><span>Name</span><input name="pos2" placeholder="Name2" id="in4" type="text" /><span>Role</span><input name="role2" placeholder="Role" id="in5" type="text" /><span</span>

             <!-- The start date field -->
        <label><span>Start date</span><input type="text" name="pos_startDate2" placeholder="mm/yyyy" /></label>

        <!-- The end date field -->
        <label><span>End date</span><input type="text" name="pos_endDate2" placeholder="mm/yyyy" /></label>

        <label><span>Metric</span><input type="text" name="pos_metric2" placeholder="" /></label>
    </label>


     <center><h4>Position 3:</h4></center>
            <label><span>Name</span><input name="pos3" placeholder="Name" id="in4" type="text" /><span>Role</span><input name="role3" placeholder="Role" id="in5" type="text" /><span</span>

             <!-- The start date field -->
        <label><span>Start date</span><input type="text" name="pos_startDate3" placeholder="mm/yyyy" /></label>

        <!-- The end date field -->
        <label><span>End date</span><input type="text" name="pos_endDate3" placeholder="mm/yyyy" /></label>

        <label><span>Metric</span><input type="text" name="pos_metric3" placeholder="" /></label>
    </label>


     <br><center><h1>Achievements / awards</h1></center>

        <center><h4>Achievement / award 1:</h4></center>
            <label><span>Name</span><input name="achi_name" placeholder="Name" id="in4" type="text" />

        <label><span>Year</span><input type="text" name="year" placeholder="yyyy" /></label>

        <label><span>Metric</span><input type="text" name="achi_metric" placeholder="" /></label>
    </label>

    <center><h4>Achievement / award 2:</h4></center>
            <label><span>Name</span><input name="achi_name2" placeholder="Name" id="in4" type="text" />

        <label><span>Year</span><input type="text" name="year2" placeholder="yyyy" /></label>

        <label><span>Metric</span><input type="text" name="achi_metric2" placeholder="" /></label>
    </label>

    <center><h4>Achievement / award 3:</h4></center>
            <label><span>Name</span><input name="achi_name3" placeholder="Name" id="in4" type="text" />

        <label><span>Year</span><input type="text" name="year3" placeholder="yyyy" /></label>

        <label><span>Metric</span><input type="text" name="achi_metric3" placeholder="" /></label>
    </label>

<br><center><h1>I.T Knowledge</h1></center>
<center><input list="IT_Skill" name="ski" /></label></center>
<datalist id="IT_Skill">
 <option value="Microsoft Office">
  <option value="JavaScript">
  <option value="C++">
  <option value="Python">
  <option value="SQL">
</datalist><br>
           

<br><center><h1>Languages </h1></center>

   <label><span>1: </span><input name="lan" placeholder="" id="in2" type="text" /></label>
    <br><center><label>Choose a proficiency level:
<input list="proficiency" name="lan_prof1" /></label></center>
<datalist id="proficiency">
  <option value="Native">
  <option value="Professional working proficiency">
  <option value="Limited Working Proficiency">
  <option value="Working Knowledge">
</datalist><br>
 

    <label><span>2: </span><input name="lan2" placeholder="" id="in2" type="text" /></label>
     <br><center><label>Choose a proficiency level:
<input list="proficiency" name="lan_prof2" /></label></center>
<datalist id="proficiency">
  <option value="Native">
  <option value="Professional working proficiency">
  <option value="Limited Working Proficiency">
  <option value="Working Knowledge">
</datalist><br>
 

    <label><span>3: </span><input name="lan3" placeholder="" id="in2" type="text" /></label><span></span>
     <br><center><label>Choose a proficiency level:
<input list="proficiency" name="lan_prof3" /></label></center>
<datalist id="proficiency">
  <option value="Native">
  <option value="Professional working proficiency">
  <option value="Limited Working Proficiency">
  <option value="Working Knowledge">
</datalist><br>
 

<br><center><h1>Sports & Hobbies</h1></center>
      <center><input list="sports" name="sp" /></label></center>
<datalist id="sports">
    <optgroup label="Creative Hobbies">
    <option value="Writing">
    <option value="Music">
    <option value="Reading">
    <option value="Photography">
    <option value="Videography">
    <option value="Podcasting">
    <option value="Result-oriented thinking">
    <option value="Perseverance">
    <option value="Situational awareness">
    <option value="Responding flexibly">
    <option value="Creative thinking">

    <optgroup label="Communicational Hobbies">
    <option value="Debate">
    <option value=" Writing">
    <option value="Blogging">
    <option value="Team sports">
    <option value="Scout">
    <option value="Entrepreneurship">
    <option value="Public speaking">
    <option value="Marketing">
    <option value="Advertising">
    <option value="Volunteering ">


    <optgroup label="Startegic Hobbies">
    <option value="Problem analysis">
    <option value="Tactical behaviour">
    <option value=" Situational awareness">
    <option value="Responding flexibly">
    <option value="Written communication">
    <option value="Interpersonal relationships">
    <option value="Presentation">
    <option value="Accountability for others">
    <option value="Concrete organisation">
</datalist><br>

 <!--  <label><span>1: </span><input name="sp" placeholder="" id="in2" type="text" /></label>
    <label><span>2: </span><input name="sp2" placeholder="" id="in2" type="text" /></label>
    <label><span>3: </span><input name="sp3" placeholder="" id="in2" type="text" /></label>
 -->
 <span></span><input type="radio" value="print" name="rad" checked="checked">Print resume &nbsp;&nbsp; <input type="radio" value="doc" name="rad">Download as .doc
    </label>
    <br>
    <label><span></span><input name="sub" type="submit" id="sub" value="Create your resume" class="button"/></label>


    </div>
</form>

</body>
</html>