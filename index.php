<?php
require_once"dbconfig.php";
//print_r($_SESSION);
if(!isset($_SESSION['login_user2']))
{
header("location: login.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
<style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
</style>
</head>

<body>

  <!-- Navigation -->
  <?php include"nav.php";?>

  <!-- Page Content -->
  </br>
  </br>

  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Restaurants</h1>
        <div class="list-group">
		<?php
		$r=select("select * from restaurant");
		while($t=mysqli_fetch_array($r))
		{
			?><a href="#" idd="<?=$t[0]?>" class="res list-group-item"><?=ucwords($t[1])?> </a>
         	<?php
		}
		?>
          
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/c1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/c2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/c3.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row" id="showdata"></div>
        <div class="row" id="olddata">

         
<?php
$limit = 6; 
$page = '';

    if (isset($_REQUEST["page"] )) 
        {
        $page  = $_REQUEST["page"]; 
        } 
    else 
       {
        $page=1; 
       };  
	   $record_index= ($page-1) * $limit;   
$sql = "SELECT * FROM foods WHERE options = 'ENABLE' ORDER BY F_ID LIMIT $record_index, $limit ";
$n=select($sql);
$data=mysqli_num_rows($n);
while($row=mysqli_fetch_array($n))
{
	extract($row);


?>        <div class="col-lg-4 col-md-6 mb-4">
<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
  
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="admin/img/<?=$images_path?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?=ucwords($name)?></a>
                </h4>
                <h5><?=$price?>.00 INR</h5>
                <p class="card-text"><?=ucwords($description)?></p>
              </div>
              <div class="card-footer">
                <p class="card-text">Quantity: 
				<input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </p>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
              </div>
            </div></form>
          </div>
<?php
}
?>
          
<div style="text-align:center" class="col-lg-12"><?php
					  if($data>=1)
					  {
$sql  ="SELECT * FROM foods WHERE options = 'ENABLE' ORDER BY F_ID desc";
$retval1 = mysqli_query($cid, $sql);  
$row = mysqli_fetch_row($retval1);  
$total_records = $row[0];
    
$total_pages = ceil($total_records / $limit);  
 echo "<div style='text-align:center' class='pagination'>";

    
    
for ($i=1; $i<=$total_pages; $i++) {  

   echo "<a class='pagination_link' href='index.php?page=".$i."'>".$i."</a>";
               
}
 


    echo"</div>";   
  
					  }				  
					  
					  ?>

				</div>
        


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
  $(document).ready(function(){
	  $(".res").on('click' ,function(){
		  var id= $(this).attr('idd');
		  $.ajax({
			url: "fet_data.php", 
            method: "POST",  
            data:{id:id},  
            success:function(data){
                 $('#olddata').hide();  
                 $('#showdata').html(data);  
           }  
			  
			  
		  });
		  return false;
	  });
	  /*$(document).on("click",".pagination_link",function(e){
		   var page = $(this).attr('hre');  
		   
             $('#aboutdata').hide();
		     $('#aboutdata1').hide();
			 $.ajax({
			type: 'POST',
			url: 'index.php',
			data: {"page":page},
			success: function(data){
				 
				
			}
});
return false;
            
      }); */
  });
  
  </script>

</body>

</html>
