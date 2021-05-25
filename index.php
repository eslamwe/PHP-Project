
<?php
require_once("../PHP-Project/component.php");
require_once("../PHP-Project/operation.php");


?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<meta content="le=edgee">
	<title>Books</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<!-- Custom stylesheet-->
	<link rel="stylesheet" href="style.css">




</head>
<body>

<main>
	<div class="container text-center">
		<h1 class="py-4 bg-dark text-light rounded"><i class = "fas fa-swatchbook" ></i> Book Store</h1>
		<div class="d-flex justify-content-center">
			<form action="" method="post" class="w-50">
				<div class="pt-2">
					<?php inputElement("<i class = 'fas fa-id-badge'></i>" ,"ID" ,  "book_id",setID()  ) ;?>

				<div class="pt-2">
				<?php inputElement("<i class = 'fas fa-book'></i>" ,"Book Name" ,  "book_name",""  ) ;?>
               </div>
s
				</div>
				<div class="row pt-2">
					<div class = "col">
					<?php inputElement("<i class = 'fas fa-people-carry'></i>" ,"Publisher" ,  "book_publisher",""  ) ;?>
               </div>
               <div class = "col">
               	<?php inputElement("<i class = 'fas fa-dollar-sign'></i>" ,"Price" ,  "book_price",""  ) ;?>
               </div>
					</div>
					<div class="d-flex justify-content-center">
					<?php buttonElement
					("btn-create","btn btn-success" ," <i class ='fas fa-plus'></i> ", "create" ,"data-toggle ='tooltip' data-placement = 'bottom' title = 'Create'  ");?>
					<?php buttonElement
					("btn-read","btn btn-primary" ," <i class ='fas fa-sync'></i> ", "read" ,"data-toggle ='tooltip' data-placement = 'bottom' title = 'Read'  ");?>
					<?php buttonElement
					("btn-update","btn btn-light border" ," <i class ='fas fa-pen-alt'></i> ", "update" , "data-toggle ='tooltip' data-placement = 'bottom' title = 'Update'  ");?>
					<?php buttonElement
					("btn-delete","btn btn-danger" ," <i class ='fas fa-trash-alt'></i> ", "delete" ,"data-toggle ='tooltip' data-placement = 'bottom' title = 'Delete'  ");?>
                        <?php deleteBtn()?>

                    </div>
				</div>


        <div class="d-flex table-data">
			<table class="table table-striped table-dark">
				<thead class="thead-dark">
					<tr>
					<th>ID</th> 
					
					<th>Book Name</th>
					<th>Publisher</th>
					<th>Book Price</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody id = "tbody">
				<?php

                if (isset($_POST["read"])){
                    $result = getData();
                    if ($result){
                        while ($row = mysqli_fetch_assoc($result)){?>
                        <tr>
                            <td data-id="<?php echo $row['id']?>"><?php echo $row['id']?></td>
                            <td data-id="<?php echo $row['id']?>"><?php echo $row['book_name']?></td>
                            <td data-id="<?php echo $row['id']?>"><?php echo $row['book_publisher']?></td>
                            <td data-id="<?php echo $row['id']?>"><?php echo '$'. $row['book_price']?></td>
                            <td> <i class="fas fa-edit btnedit" data-id="<?php echo $row['id']?>"></i> </td>
                        </tr>


                            <?php
                        }
                    }
                }


                ?>

			</tbody>
			</table>
			
		</div>

		</div>


</main>

















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="main.js"></script>
</body>
</html>