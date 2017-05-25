<?php 
/*
Sample code 
Author: Frederick 
What file does: Retrieves text from a database table and displays it onto the page
*/
session_start();
include_once ("includes/global.php"); 
include "includes/functions.php";
include "includes/store_functions.php";

$access_level="1";
$imagefolder="media/product";
$db= new ps_DB;
$PageTitle="Site facts |".COMPANY_NAME;		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$PageTitle;?></title>
<meta content="" name="keywords">
<meta content="<?="$generaldescription";?>" name="description"/>		

    <?php 
    // call globally used variables
    include("includes/global_includes.php");
    ?>

 </head>

<body>

	
<div class="mainContainer">
    <?php 
	
	$mainsection="about";
	include "includes/header.php";

	?>   
	<div id="content" class="span-24-1"> 
	     <h1>Site facts </h1>

		<?php
		    $query="SELECT Text FROM aboutus ";
				
				if (DEBUG){
					// Logg query for debuging if debug mode is switched on
					$debug_display.="$query";
				}//Debug
				
				$db->query($query);	
				if($db->next_record()){
				// get about us text if record exist
			
						$text=nl2br($db->f("Text"));
						echo $text;
						
				} //end while results
		?>
	          
	</div>
          
</div>
	<?php include "includes/footer.php" ?>

</body>
</html>
