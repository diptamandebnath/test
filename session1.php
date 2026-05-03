<?php
session_start();
if(!isset($_SESSION['sccode']))
{

header("Location: index.html");
exit;	
}
else
{
    include 'head1.php';
    $sccode=$_SESSION['sccode'];
    $xe1=mysqli_query($con, "select * from scinfo where sccode='$sccode'");
$xe2=mysqli_fetch_array($xe1);

    
	echo "<h4 align='center' style='background-color: lightblue;' id='session5'> <p align='left'> You have logged in as administrator of <u>$xe2[College]</u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<span style='float:right;'>Click here to <a href='logout.php'>Log Out</a></span></p></h4> ";
$sccode=$_SESSION['sccode'];
    
    
    
}

?>