<?php
    include("include/connecation.php");
    include("include/header.php");
	$name="";
	$idate="";
	$price="";
	$emp="";
	$id=$_GET['id'];
	if(isset($_POST['subbtn'])){
		if(!empty($_POST['name'])){
			$name=$_POST['name'];
		}
		if(!empty($_POST['idate'])){
			$idate=$_POST['idate'];
		}
		if(!empty($_POST['price'])){
			$price=$_POST['price'];
		}
		if(!empty($_POST['employee'])){
			$emp=$_POST['employee'];
		}
		$upsql="UPDATE item set item_name='$name', item_price=$price, item_date='$idate', item_empoly_id='$emp' WHERE item_id=$id";
		   
		    if(mysqli_query($c,$upsql)){
				echo"موافقانه ویرایش شد.";
                 header("Location: index.php");				
			}else{
				echo "ویرایش با مشکل مواجه شد!!!";
				 header("Location: edit_item.php?id=$id");
			}
		  
		
	}
		
		$sql="SELECT em_id, em_name from employee";
		$r=mysqli_query($c,$sql);
		
		$isql="SELECT * from item WHERE item_id=$id";
		$ir=mysqli_query($c,$isql);
		$irow=mysqli_fetch_row($ir);

	  
	 
?>
		<div class="row" id="menu">
	        <div class="col-md-4">
			  <ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="index.php">برگشت</a></li>
				</ul>
			</div>
	    </div>
		<br/>
		<div class="row" id="content">
	          <div class="row">
	    <div class="col-md-8 col-md-offset-2" dir="rtl">
           <h2 class="title">ویرایش جنس</h2>
		   <br/>
		     <form class="form-horizontal" action="" method="post">
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" value="<?php if(!empty($irow[1])){echo $irow[1];}?>" 
					  class="form-control" id="name" name="name" placeholder="نام جنس">
					</div>
					<label for="name" class="col-sm-2 control-label">نام جنس</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" value="<?php if(!empty($irow[2])){echo $irow[2 ];}?>"
					  class="form-control" id="price" name="price" placeholder="قیمت">
					</div>
					<label for="name" class="col-sm-2 control-label">قیمت</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" value="<?php if(!empty($irow[3])){echo $irow[3];}?>"  
					  class="form-control" id="idate" name="idate" placeholder="تاریخ">
					</div>
					<label for="name" class="col-sm-2 control-label">تاریخ</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					 <select name="employee" id="employee" class="form-control">
					   <?php
					     if(isset($r)){
							 while($row=mysqli_fetch_row($r)){
								 if($irow[4]==$row[0]){
									 echo "<option selected='selected' value='".$row[0]."'>".$row[1]."</option>";
								 }else{
									 echo "<option value='".$row[0]."'>".$row[1]."</option>";
								 }
								 
							 }
						 }
					   ?>
					 </select>
					</div>
					<label for="name" class="col-sm-2 control-label">کارمند</label>
				  </div>
				 
				  <div class="form-group">
				  <div class="col-md-2">
					  <button type="submit" name="subbtn" class="btn btn-success btn-block">ویرایش</button>
					</div>
				  <div class="col-md-10"> </div>
					
				  </div>
				</form>
				   
				  
			</div>
	    </div>
	
	
</div>
	
	
	
	
	
	
	
	
	
	



