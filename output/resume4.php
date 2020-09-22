<?php
 
$name="";
$email="";
$linkedin="";
$address="";
$phone="";
$object="";


$ed1="";
$degree1="";
$startDate1="";
$endDate1="";
$grade1="";
$activity1="";


$ed2="";
$degree2="";
$startDate2="";
$endDate2="";
$grade2="";
$activity2="";


$ed3="";
$degree3="";
$startDate3="";
$endDate3="";
$grade3="";



$ski="";
$ski2="";
$ski3="";

$sp="";
$sp2="";
$sp3="";


$lan="";
$lan2="";
$lan3="";


$lan_prof1="";
$lan_prof2="";
$lan_prof3="";


$tit_ex="";
$desc_ex="";
$myemployment="";
$work_startDate="";
$work_endDate="";
$learning="";
$contribution="";


$tit_ex2="";
$desc_ex2="";
$myemployment2="";
$work_startDate2="";
$work_endDate2="";
$learning2="";
$contribution2="";



$tit_ex3="";
$desc_ex3="";
$myemployment3="";
$work_startDate3="";
$work_endDate3="";
$learning3="";
$contribution3="";


$pos1="";
$role1="";
$pos_startDate1="";
$pos_endDate1="";
$pos_metric1="";


$pos2="";
$role2="";
$pos_startDate2="";
$pos_endDate2="";
$pos_metric2="";



$pos3="";
$role3="";
$pos_startDate3="";
$pos_endDate3="";
$pos_metric3="";

$achi_name="";
$year="";
$achi_metric="";


$achi_name2="";
$year2="";
$achi_metric2="";


$achi_name3="";
$year3="";
$achi_metric3="";



if(isset($_POST["sub"]))
{
    if($_POST["name"] !== "")
    {
        $name = $_POST["name"];
    }

    if($_POST["email"] !== "")
    {
        $email = $_POST["email"];
    }

    if($_POST["linkedin"] !== "")
    {
        $linkedin = $_POST["linkedin"];
    }
    if($_POST["address"] !== "")
    {
        $address = $_POST["address"];
    }
    if($_POST["phone"] !== "")
    {
        $phone = $_POST["phone"];
    }

    if($_POST["object"] !== "")
    {
        $object = $_POST["object"];
    }
    if($_POST["ed1"] !== "")
    {
        $ed1 = $_POST["ed1"];
    }
    if($_POST["ed2"] !== "")
    {
        $ed2 = $_POST["ed2"];
    }
    if($_POST["ed3"] !== "")
    {
        $ed3 = $_POST["ed3"];
    }
    if($_POST["degree1"] !== "")
    {
        $degree1 = $_POST["degree1"];
    }
    if($_POST["degree2"] !== "")
    {
        $degree2 = $_POST["degree2"];
    }

    if($_POST["degree3"] !== "")
    {
        $degree3 = $_POST["degree3"];
    }

    if($_POST["startDate1"] !== "")
    {
        $startDate1 = $_POST["startDate1"];
    }

    if($_POST["startDate2"] !== "")
    {
        $startDate2 = $_POST["startDate2"];
    }

    if($_POST["startDate3"] !== "")
    {
        $startDate3 = $_POST["startDate3"];
    }

    if($_POST["endDate1"] !== "")
    {
        $endDate1 = $_POST["endDate1"];
    }

    if($_POST["endDate2"] !== "")
    {
        $endDate2 = $_POST["endDate2"];
    }

    if($_POST["endDate3"] !== "")
    {
        $endDate3 = $_POST["endDate3"];
    }

    if($_POST["grade1"] !== "")
    {
        $grade1 = $_POST["grade1"];
    }

    if($_POST["grade2"] !== "")
    {
        $grade2 = $_POST["grade2"];
    }

    if($_POST["grade3"] !== "")
    {
        $grade3 = $_POST["grade3"];
    }

     if($_POST["activity1"] !== "")
    {
        $activity1 = $_POST["activity1"];
    }

    if($_POST["activity2"] !== "")
    {
        $activity2 = $_POST["activity2"];
    }

    if($_POST["myemployment"] !== "")
    {
        $myemployment = $_POST["myemployment"];
    }

    if($_POST["myemployment2"] !== "")
    {
        $myemployment2 = $_POST["myemployment2"];
    }
    if($_POST["myemployment3"] !== "")
    {
        $myemployment3 = $_POST["myemployment3"];
    }
    if($_POST["work_startDate"] !== "")
    {
        $work_startDate = $_POST["work_startDate"];
    }
    if($_POST["work_startDate2"] !== "")
    {
        $work_startDate2 = $_POST["work_startDate2"];
    }
    if($_POST["work_startDate3"] !== "")
    {
        $work_startDate3 = $_POST["work_startDate3"];
    }

    if($_POST["work_endDate"] !== "")
    {
        $work_endDate = $_POST["work_endDate"];
    }
    if($_POST["work_endDate2"] !== "")
    {
        $work_endDate2 = $_POST["work_endDate2"];
    }
    if($_POST["work_endDate3"] !== "")
    {
        $work_endDate3 = $_POST["work_endDate3"];
    }

    if($_POST["learning"] !== "")
    {
        $learning = $_POST["learning"];
    }
    if($_POST["learning2"] !== "")
    {
        $learning2 = $_POST["learning2"];
    }
    if($_POST["learning3"] !== "")
    {
        $learning3= $_POST["learning3"];
    }

    if($_POST["contribution"] !== "")
    {
        $contribution = $_POST["contribution"];
    }
    if($_POST["contribution2"] !== "")
    {
        $contribution2 = $_POST["contribution2"];
    }
    if($_POST["contribution3"] !== "")
    {
        $contribution3= $_POST["contribution3"];
    }

     if($_POST["pos1"] !== "")
    {
        $pos1 = $_POST["pos1"];
    }

     if($_POST["pos2"] !== "")
    {
        $pos2= $_POST["pos2"];
    }

     if($_POST["pos3"] !== "")
    {
        $pos3 = $_POST["pos3"];
    }

     if($_POST["role1"] !== "")
    {
        $role1 = $_POST["role1"];
    }
    if($_POST["role2"] !== "")
    {
        $role2 = $_POST["role2"];
    }

    if($_POST["role3"] !== "")
    {
        $role3 = $_POST["role3"];
    }

    if($_POST["pos_startDate1"] !== "")
    {
        $pos_startDate1 = $_POST["pos_startDate1"];
    }

    if($_POST["pos_startDate2"] !== "")
    {
        $pos_startDate2 = $_POST["pos_startDate2"];
    }

    if($_POST["pos_startDate3"] !== "")
    {
        $pos_startDate3 = $_POST["pos_startDate3"];
    }

     if($_POST["pos_endDate1"] !== "")
    {
        $pos_endDate1 = $_POST["pos_endDate1"];
    }

    if($_POST["pos_endDate2"] !== "")
    {
        $pos_endDate2 = $_POST["pos_endDate2"];
    }

    if($_POST["pos_endDate3"] !== "")
    {
        $pos_endDate3 = $_POST["pos_endDate3"];
    }

     if($_POST["pos_metric1"] !== "")
    {
        $pos_metric1 = $_POST["pos_metric1"];
    }

    if($_POST["pos_metric2"] !== "")
    {
        $pos_metric2 = $_POST["pos_metric2"];
    }

    if($_POST["pos_metric3"] !== "")
    {
        $pos_metric3 = $_POST["pos_metric3"];
    }

       if($_POST["achi_name"] !== "")
    {
        $achi_name = $_POST["achi_name"];
    }

    if($_POST["achi_name2"] !== "")
    {
        $achi_name2 = $_POST["achi_name2"];
    }

    if($_POST["achi_name3"] !== "")
    {
        $achi_name3 = $_POST["achi_name3"];
    }


    if($_POST["year"] !== "")
    {
        $year = $_POST["year"];
    }

     if($_POST["year2"] !== "")
    {
        $year2= $_POST["year2"];
    }

     if($_POST["year3"] !== "")
    {
        $year3 = $_POST["year3"];
    }

    if($_POST["achi_metric"] !== "")
    {
        $achi_metric = $_POST["achi_metric"];
    }

    if($_POST["achi_metric2"] !== "")
    {
        $achi_metric2 = $_POST["achi_metric2"];
    }

    if($_POST["achi_metric3"] !== "")
    {
        $achi_metric3 = $_POST["achi_metric3"];
    }

    if($_POST["ski"] !== "")
    {
        $ski = $_POST["ski"];
    }
    // if($_POST["ski2"] !== "")
    // {
    //     $ski2 = $_POST["ski2"];
    // }
    // if($_POST["ski3"] !== "")
    // {
    //     $ski3 = $_POST["ski3"];
    // }

    if($_POST["sp"] !== "")
    {
        $sp = $_POST["sp"];
    }
    if($_POST["sp2"] !== "")
    {
        $sp2 = $_POST["sp2"];
    }
    if($_POST["sp3"] !== "")
    {
        $sp3 = $_POST["sp3"];
    }

    if($_POST["lan"] !== "")
    {
        $lan = $_POST["lan"];
    }
    if($_POST["lan2"] !== "")
    {
        $lan2 = $_POST["lan2"];
    }
    if($_POST["lan3"] !== "")
    {
        $lan3 = $_POST["lan3"];
    }

    if($_POST["lan_prof1"] !== "")
    {
        $lan_prof1 = $_POST["lan_prof1"];
    }
    if($_POST["lan_prof2"] !== "")
    {
        $lan_prof2 = $_POST["lan_prof2"];
    }
    if($_POST["lan_prof3"] !== "")
    {
        $lan_prof3 = $_POST["lan_prof3"];
    }

    if($_POST["tit_ex"] !== "")
    {
        $tit_ex = $_POST["tit_ex"];
    }
    if($_POST["desc_ex"] !== "")
    {
        $desc_ex = $_POST["desc_ex"];
    }
    if(isset($_POST["tit_ex2"]))
    {
        $tit_ex2 = $_POST["tit_ex2"];
    }
    if(isset($_POST["desc_ex2"]))
    {
        $desc_ex2 = $_POST["desc_ex2"];
    }
    if(isset($_POST["tit_ex3"]))
    {
        $tit_ex3 = $_POST["tit_ex3"];
    }
    if(isset($_POST["desc_ex3"]))
    {
        $desc_ex3 = $_POST["desc_ex3"];
    }


    $cv = "<html>

<head>
<meta http-equiv=Content-Type content=\"text/html; charset=windows-1252\">
<meta name=Generator content=\"Microsoft Word 15 (filtered)\">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Shruti;
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:\"Cambria Math\";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Georgia;
	panose-1:2 4 5 2 5 4 5 2 3 3;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	font-size:11.0pt;
	font-family:\"Georgia\",serif;}
h1
	{mso-style-link:\"Heading 1 Char\";
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:5.0pt;
	margin-left:0cm;
	page-break-after:avoid;
	border:none;
	padding:0cm;
	font-size:12.0pt;
	font-family:\"Georgia\",serif;
	color:black;
	text-transform:uppercase;
	letter-spacing:1.25pt;}
h2
	{mso-style-link:\"Heading 2 Char\";
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	font-size:11.0pt;
	font-family:\"Georgia\",serif;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-size:11.0pt;
	font-family:\"Georgia\",serif;}
p.Name, li.Name, div.Name
	{mso-style-name:Name;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	text-align:center;
	font-size:20.0pt;
	font-family:\"Georgia\",serif;
	font-weight:bold;}
p.ContactInfo, li.ContactInfo, div.ContactInfo
	{mso-style-name:\"Contact Info\";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	font-size:10.0pt;
	font-family:\"Georgia\",serif;}
span.Heading1Char
	{mso-style-name:\"Heading 1 Char\";
	mso-style-link:\"Heading 1\";
	font-family:\"Georgia\",serif;
	color:black;
	text-transform:uppercase;
	letter-spacing:1.25pt;
	font-weight:bold;}
span.Heading2Char
	{mso-style-name:\"Heading 2 Char\";
	mso-style-link:\"Heading 2\";
	font-family:\"Arial\",sans-serif;
	font-weight:bold;}
span.NormalBold
	{mso-style-name:\"Normal Bold\";
	font-weight:bold;}
span.NormalItalic
	{mso-style-name:\"Normal Italic\";
	font-family:\"Arial\",sans-serif;
	font-style:italic;}
p.Contactinfo0, li.Contactinfo0, div.Contactinfo0
	{mso-style-name:\"Contact info\";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:4.5pt;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Calibri\",sans-serif;
	color:#969696;}
.MsoChpDefault
	{font-family:\"Calibri\",sans-serif;}
.MsoPapDefault
	{margin-top:8.0pt;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	border:solid windowtext 1.0pt;
	padding:31.0pt 31.0pt 31.0pt 31.0pt;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>

</head>

<body lang=EN-GB link=blue vlink=purple>
<div class=WordSection1>

";

    if($name != "")
    {
        $cv .= "<p class=Name><span lang=EN-US>$name</span></p>";
    }

    if($address != "")
    {
        $cv .= "<p class=ContactInfo><span lang=EN-US>$address</span></p><br>";
    }

    if($phone != "")
    {
        $cv .= "<p class=ContactInfo><span lang=EN-US>$phone
";
    }



    if($email!="")
    {
        $cv .= " | $email</span>";
    }

 
   
    if($linkedin!="")
    {
        $cv .= " | $linkedin</span></p>";
    }



    $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>

<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>";

    if($object != "")
    {
        $cv .= "<h1><span lang=EN-US>objective</span></h1>

</div><p class=MsoNormal><span lang=EN-US>$object</span></p>

<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>";

}


 
 if($ed1!="" || $ed2!="" || $ed3!="")
    {

        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>

<h1><span lang=EN-US>Education History</span></h1>

</div>";

        if($ed1!="" && $degree1!="" && $startDate1!="" && $endDate1!="" && $grade1!="" && $activity1!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$ed1</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$startDate1-$endDate1</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Degree: $degree1</span></p>
<p class=MsoNormal><span lang=EN-US>Activity: $activity1</span></p>
<p class=MsoNormal><span lang=EN-US>Grade: $grade1</span></p>
";
        }

          if($ed2!="" && $degree2!="" && $startDate2!="" && $endDate2!="" && $grade2!="" && $activity2!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$ed2</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$startDate2-$endDate2</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Subjects Taken: $degree2</span></p>
<p class=MsoNormal><span lang=EN-US>Activity: $activity2</span></p>
<p class=MsoNormal><span lang=EN-US>Grade: $grade2</span></p>
";
        }

        if($ed3!="" && $degree3!="" && $startDate3!="" && $endDate3!="" && $grade3!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$ed3</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$startDate3-$endDate3</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Name of Course: $degree3</span></p>
<p class=MsoNormal><span lang=EN-US>Grade: $grade3</span></p>
";
        }

        $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";
    }


    if($tit_ex!="" || $tit_ex2!="" || $tit_ex3!=""|| $desc_ex!="" || $desc_ex2!="" || $desc_ex3!="")
    {

        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>

<h1><span lang=EN-US>Employment History</span></h1>

</div>";

        if($tit_ex!="" && $desc_ex!="" &&$myemployment!="" && $work_startDate!="" && $work_endDate!="" && $learning!="" && $contribution!="" )
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$tit_ex</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$work_startDate-$work_endDate</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Employment area: $myemployment</span></p>
<p class=MsoNormal><span lang=EN-US>Description: $desc_ex</span></p>
<p class=MsoNormal><span lang=EN-US>Learning: $learning</span></p>
<p class=MsoNormal><span lang=EN-US>Contribution: $contribution</span></p>
";
        }

        if($tit_ex2!="" && $desc_ex2!="" &&$myemployment2!="" && $work_startDate2!="" && $work_endDate2!="" && $learning2!="" && $contribution2!="" )
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$tit_ex2</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$work_startDate2-$work_endDate2</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Employment area: $myemployment2</span></p>
<p class=MsoNormal><span lang=EN-US>Description: $desc_ex2</span></p>
<p class=MsoNormal><span lang=EN-US>Learning: $learning2</span></p>
<p class=MsoNormal><span lang=EN-US>Contribution: $contribution2</span></p>
";
        }

        if($tit_ex3!="" && $desc_ex3!="" &&$myemployment3!="" && $work_startDate3!="" && $work_endDate3!="" && $learning3!="" && $contribution3!="" )
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$tit_ex3</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$work_startDate3-$work_endDate3</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Employment area: $myemployment3</span></p>
<p class=MsoNormal><span lang=EN-US>Description: $desc_ex3</span></p>
<p class=MsoNormal><span lang=EN-US>Learning: $learning3</span></p>
<p class=MsoNormal><span lang=EN-US>Contribution: $contribution3</span></p>
";
        }

        $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";
    }


    if($pos1!="" || $pos2!="" || $pos3!="" )
    {

        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>

<h1><span lang=EN-US>Positions of Responsibility</span></h1>

</div>";

        if($pos1!="" && $role1!=""  && $pos_startDate1!="" && $pos_endDate1!="" && $pos_metric1!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$pos1</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$pos_startDate1-$pos_endDate1</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Role: $role1</span></p>
<p class=MsoNormal><span lang=EN-US>Position metrics: $pos_metric1</span></p>
";
        }

        if($pos2!="" && $role2!="" && $pos_startDate2!="" && $pos_endDate2!="" && $pos_metric2!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$pos2</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$pos_startDate2-$pos_endDate2</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Role: $role2</span></p>
<p class=MsoNormal><span lang=EN-US>Position metrics: $pos_metric2</span></p>
";
        }

        if($pos3!="" && $role3!=""  && $pos_startDate3!="" && $pos_endDate3!="" && $pos_metric3!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$pos3</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$pos_startDate3-$pos_endDate3</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Role: $role3</span></p>
<p class=MsoNormal><span lang=EN-US>Position metrics: $pos_metric3</span></p>
";
        }

        $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";
    }

  if($achi_name!="" || $achi_name2!="" || $achi_name3!="" )
    {

        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>

<h1><span lang=EN-US>Achivements / Awards </span></h1>

</div>";

        if($achi_name!="" && $year!=""  && $achi_metric!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$achi_name</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$year</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Achivement Metrics: $achi_metric</span></p>
";
        }

         if($achi_name2!="" && $year2!=""  && $achi_metric2!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$achi_name2</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$year2</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Achivement Metrics: $achi_metric2</span></p>
";
        }

         if($achi_name3!="" && $year3!=""  && $achi_metric3!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$achi_name3</span></span><span
lang=EN-US>                                                                                                           </span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$year3</span></span><span
lang=EN-US>                                                                                                           </span></p>
<p class=MsoNormal><span lang=EN-US>Achivement Metrics: $achi_metric3</span></p>
";
        }

        $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";
    }

        if($sp!="" || $sp2!="" || $sp3!="")
    {

        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>

<h1><span lang=EN-US>Sports and Hobbies</span></h1>

</div>";

        if($sp!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$sp</span></p>";
        }

        if($sp2!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$sp2</span></p>";
        }

        if($sp3!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$sp3</span></p>";
        }
    }


        if($lan!="" || $lan2!="" || $lan3!="")
    {

        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>

<h1><span lang=EN-US>Languages</span></h1>

</div>";

        if($lan!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$lan</span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$lan_prof1</span></span><span
lang=EN-US>                                                                                                           </span></p>

</p>"


;
        }

        if($lan2!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$lan2</span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$lan_prof2</span></span><span
lang=EN-US>                                                                                                           </span></p>
</p>";
        }

        if($lan3!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$lan3</span>
&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</span></span><span class=NormalBold><span lang=EN-US>$lan_prof3</span></span><span
lang=EN-US>                                                                                                           </span></p>

</p>";
        }
    }

    if($ski!="")
    {

        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>

<h1><span lang=EN-US>Skills</span></h1>

</div>";

        if($ski!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$ski</span></p>";
        }
    }

    $cv .= "</div></body>";

    if($_POST['rad'] == 'doc')
    {


        $cv .= "</html>";
        $file = fopen($name.".doc","w");
        fwrite($file,$cv);
        fclose($file);

        header("Content-disposition: attachment; filename=".$name.".doc");

        header("Content-type: application/msword");
        readfile($name.".doc");

    }








        if($_POST['rad'] == 'print')
    {
        $cv .= "<script language=\"javascript\" type=\"text/javascript\">
<!--
   window.print();
//-->
</script>
</html>
";
        echo $cv;
    }

}