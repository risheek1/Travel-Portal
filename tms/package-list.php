<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS  | Package List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/stp.css" rel='stylesheet' type='text/css' />
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" 
      rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>

	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<!--- banner ---->
<div class="banner-3" style="margin-top:-194px;height:350px;">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"></h1>
	</div>
</div>
<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<h2 style="font-size:2.5rem;color:black;margin-left: 450px;">Package List</h2>
           <hr style="width:100%;margin-bottom:65px;"/>
					
<?php $sql = "SELECT * from tbltourpackages";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			
<div class="container mt-32 mx-auto p-4 md:p-0"> <!-- Card wrapper --> <div class="shadow-lg flex flex-wrap w-full lg:w-4/5 mx-auto"> <!-- Card image --> <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative" style="background-image:url('admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>')"> <div class="absolute text-xl"> <i class="fa fa-heart text-white hover:text-red-light ml-4 mt-4 cursor-pointer"></i> </div> </div> <!-- ./Card image --> <!-- Card body --> <div class="bg-white w-full md:w-2/3"> <!-- Card body - outer wrapper --> <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative"> <!-- Card body - inner wrapper --> <div class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center"> <!-- Card title and subtitle --> <div class="w-full lg:w-1/5 lg:border-right lg:border-solid text-center md:text-left"> <bold><h3 style="color:black;"><?php echo htmlentities($result->PackageName);?></h3></bold> <p class="mb-0 mt-3 text-grey-dark text-sm italic"><?php echo htmlentities($result->PackageLocation);?></p> <hr class="w-1/4 md:ml-0 mt-4 border lg:hidden"> </div> <!-- ./Card title and subtitle --> <!-- Card description --> <div class="w-full lg:w-3/5 lg:px-3" style="width:960px;"> <p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-sm"> <?php echo htmlentities($result->PackageDetails);?> <br/>Special Features : <?php echo htmlentities($result->PackageFetures);?> </p> </div> <!-- ./Card description --> <!-- Call to action button --> <div class="w-full lg:w-1/5 mt-6 lg:mt-0 lg:px-4 text-center md:text-left"> <div class="text-lg text-gray-700"><span class="text-gray-900 font-bold">INR  <?php echo htmlentities($result->PackagePrice);?></span> per person*</div> <div class="text-gray-600 ml-2 text-sm md:text-base mt-1">28 reviews</div><a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>"> <button class="bg-grey hover:bg-black-darker hover:text-white border border-solid border-grey w-1/3 lg:w-full py-2" style="background-color:blue;"><b>Visit now</b></button></a> </div> <!-- ./Call to action button --> </div> <!-- ./Card body - inner wrapper --> </div> <!-- ./Card body - outer wrapper --> </div> <!-- ./Card body --> </div> <!-- ./Card wrapper --> </div>

<?php }} ?>
			
		
		
		</div>
	</div>
</div>
<!--- /rooms ---->

<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>