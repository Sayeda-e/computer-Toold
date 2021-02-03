<?php
    include("include/connecation.php");
    include("include/header.php");
	$name="";
	$idate="";
	$price="";
	$emp="";
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
		$insertsql ="INSERT INTO item VALUE(Null,'$name',$price,'$idate',$emp)";
		if(!empty($name)&&!empty($idate)&&!empty($price)){
		 if(mysqli_query($c,$insertsql)){
			 echo "رکورد موافقانه اضافه شد .";
		 }else{
			 echo "اضافه کردن معلومات با مشکل مواجه شد!!!";
		 }
		}else{
			echo"هیچ قیمت خالی بوده نمیتواند .";
		}
	}
		
		$sql="SELECT em_id, em_name from employee";
		$r=mysqli_query($c,$sql);
		

	  
	 
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
           <h2 class="title">اضافه کردن جنس جدید</h2>
		   <br/>
		     <form class="form-horizontal" action="" method="post">
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="name" name="name" placeholder="نام جنس">
					</div>
					<label for="name" class="col-sm-2 control-label">نام جنس</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="price" name="price" placeholder="قیمت">
					</div>
					<label for="name" class="col-sm-2 control-label">قیمت</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="idate" name="idate" placeholder="تاریخ">
					</div>
					<label for="name" class="col-sm-2 control-label">تاریخ</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					 <select name="employee" id="employee" class="form-control">
					   <?php
					     if(isset($r)){
							 while($row=mysqli_fetch_row($r)){
								 echo "<option value='".$row[0]."'>".$row[1]."</option>";
							 }
						 }
					   ?>
					 </select>
					</div>
					<label for="name" class="col-sm-2 control-label">کارمند</label>
				  </div>
				 
				  <div class="form-group">
				  <div class="col-md-2">
					  <button type="submit" name="subbtn" class="btn btn-success btn-block">اضافه کردن</button>
					</div>
				  <div class="col-md-10"> </div>
					
				  </div>
				</form>
				   
				  
			</div>
	    </div>
	
	
</div>
	
	
	
	
	
	
	
	
	
	



