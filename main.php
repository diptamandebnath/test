<?php
include 'head1.php';
include 'session1.php';

$sccode = $_SESSION['sccode'];
?>

<html>
<style type="text/css">
h1 {
	color: #fff;
	text-shadow: 0px -1px 4px white, 0px -2px 10px yellow, 0px -10px 20px #ff8000, 0px -18px 40px red;
	font: 50px 'BlackJackRegular';
}

body { background-color: #ffff99; }

.clickme {
    background-color: #EEEEEE;
    padding: 8px 20px;
    text-decoration:none;
    font-weight:bold;
    border-radius:5px;
    cursor:pointer;
}

.success {
    background-color:#00EB89;
    color: #FFFFFF;
}

.success1 {
    background-color:#00EB89;
    color: red;
}

.success:hover {
    background-color:#00D77E;
    color: #FFFFFF;
}

.success1:hover {
    background-color:#00D77E;
    color: yellow;
}

ul {
    padding: 0;
    list-style: none;
}
ul li {
    display: inline-block;
    position: relative;
}
ul li a {
    display: block;
    padding: 8px 25px;
    color: #333;
    text-decoration: none;
}
ul li a:hover {
    color: #fff;
    background: #939393;
}
ul li ul.dropdown {
    min-width: 100%;
    background: #f2f2f2;
    display: none;
    position: absolute;
    z-index: 999;
}
ul li:hover ul.dropdown {
    display: block;
}
</style>

<body>
</body>
</html>

<?php

$xe1 = mysqli_query($con, "select * from scinfo where sccode='$sccode'");
$xe2 = mysqli_fetch_array($xe1);

echo "<br/><h1 style='color:#0000FF'>
<marquee direction='up'>
<div align='center'>
Welcome <br/>to<br/> $xe2[College]<br/>
(Study Centre Code: $sccode)
</div>
</marquee>
</h1>";

echo "<table cellpadding='10'><tr><td style='vertical-align:top'>";

// Left side links
echo "<div><a href='room4.php' target='_blank' class='clickme success'>Update Exam Hall Details</a></div><br/><br/>";
echo "<div><a href='asr1.php' target='_blank' class='clickme success'>Distribution in Rooms</a></div><br/><br/>";
echo "<div><a href='ee2d.html' target='_blank' class='clickme success1'>Prepare Sessionwise Exam Documents</a></div><br/><br/>";
echo "<div><a href='smsp1.php' target='_blank' class='clickme success'>Manual Master Seat Plan</a></div><br/><br/>";
echo "<div><a href='mspp1.php' target='_blank' class='clickme success'>Manual Master Seat Plan-2</a></div><br/><br/>";
echo "<div><a href='rout6.php' target='_blank' class='clickme success'>View Routine</a></div><br/><br/>";
echo "<div><a href='rout6a.php' target='_blank' class='clickme success'>Set Despatch Destination</a></div><br/><br/>";
echo "<div><a href='misc1.html' target='_blank' class='clickme success'>Prepare Exam Papers</a></div><br/><br/>";

echo "</td><td style='vertical-align:top'>";

// Right side links
echo "<div><a href='room5.php' target='_blank' class='clickme success'>View Room arrangement</a></div><br/><br/>";
echo "<div><a href='qc1.php' target='_blank' class='clickme success'>Exam Dates in large font</a></div><br/>";

echo "<ul>
<li>
<a href='#' class='clickme success'>Exam Routine ▼</a>
<ul class='dropdown'>
<li><a href='http://www.ignou.ac.in/userfiles/DATE%20SHEET.pdf' target='_blank'>Original Routine</a></li>
</ul>
</li>
</ul><br/>";

echo "<div><a href='sn1.php' target='_blank' class='clickme success'>Seat Number Slip</a></div><br/><br/>";
echo "<div><a href='abstract1.php' target='_blank' class='clickme success'>Abstract</a></div><br/><br/>";
echo "<div><a href='rout2.php' target='_blank' class='clickme success'>Abstract-2</a></div><br/><br/>";
echo "<div><a href='abstract3.php' target='_blank' class='clickme success'>Abstract-3</a></div><br/><br/>";
echo "<div><a href='invdt1g.php' target='_blank' class='clickme success'>Invigilation Duty</a></div><br/><br/>";
echo "<div><a href='upload1.php' target='_blank' class='clickme success'>Upload Documents</a></div><br/><br/>";
echo "<div><a href='view1.php' target='_blank' class='clickme success'>View Documents</a></div><br/><br/>";
echo "<div><a href='roominsert.php' target='_blank' class='clickme success'>Insert Room</a></div><br/><br/>";
echo "<div><a href='auto1.php' target='_blank' class='clickme success'>Auto 1</a></div><br/><br/>";
echo "<div><a href='step2.php' target='_blank' class='clickme success'>Step 2</a></div><br/><br/>";

echo "</td></tr></table>";

?>