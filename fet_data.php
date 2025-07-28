<?php
require_once"dbconfig.php";
$sql = "SELECT * FROM foods WHERE options = 'ENABLE' and R_ID='".$_REQUEST['id']."'";
$n=select($sql);
$num=mysqli_num_rows($n);
if($num>=1)
{
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

}
else
{
	echo"<div class='col-lg-12 alert alert-danger'>No data found</div>";
}
?>	
<script>

</script>