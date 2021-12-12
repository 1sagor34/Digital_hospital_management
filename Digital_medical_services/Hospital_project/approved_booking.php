<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="JS/style.js"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>   
<table>
	<thead>
		<tr>
		    <th>Hospital_name</th>         
            <th>Hospital_address</th> 
            <th>Hospital_availability</th>  
            <th>Hospital_seat</th>     
            <th>Hospital_vacancies</th> 
			<th>User_name</th> 
			<th>Booked_seats</th> 
			<th>Booking_date</th>
			<th>Phone_number</th> 
            <th>Approval</th>  
		</tr>
	</thead> 
<?php 
session_start();
if (isset($_SESSION['husername']) ){require 'Bar/top1.php';}
else{header("location:Login.php");}
    
?>
</table> 
</div>
</div>              
</body>
<?php require 'Bar/footer.php';?>
</html>