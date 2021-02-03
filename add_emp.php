<?php
    include("include/connecation.php");
    include("include/header.php");
	  $name="";
	  $fname="";
	  $surname="";
	  $job="";
	  if(isset($_POST['subbtn'])){
			if(!empty($_POST['name'])){
			 $name=$_POST['name'];	  
		  }
		   if(!empty($_POST['fname'])){
			 $fname=$_POST['fname'];	  
		  }
		   if(!empty($_POST['surname'])){
			 $surname=$_POST['surname'];	  
		  }
		   if(!empty($_POST['job'])){
			 $job=$_POST['job'];	  
		  }
		  $sql= "INSERT INTO employee VALUE(NULL,'$name','$fname','$surname','$job')";
		  if(mysqli_query($c,$sql)){
			  echo "رکورد موافقانه اضافه شد .";
		  }else{
			  echo "اضافه کردن معلومات با مشکل مواجه شد!!!";
		  }  
	  }
	  
	 
?>


		<div class="row" id="menu">
	        <div class="col-md-4">
			  <ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="list_emp.php">برگشت</a></li>
				</ul>
			</div>
	    </div>
		<br/>
		<div class="row" id="content">
	         <div class="col-md-8 col-md-offset-2" dir="rtl">
           <h2 class="title">اضافه کردن کارمند جدید</h2>
		   <br/>
		     <form class="form-horizontal" action="" method="post">
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="name" name="name" placeholder="نام کارمند">
					</div>
					<label for="name" class="col-sm-2 control-label">نام کارمند</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="fname" name="fname" placeholder="نام پدر">
					</div>
					<label for="name" class="col-sm-2 control-label">نام پدر</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="surname" name="surname" placeholder="تخلص">
					</div>
					<label for="name" class="col-sm-2 control-label">تخلص</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="job" name="job" placeholder="وظیفه">
					</div>
					<label for="name" class="col-sm-2 control-label">وظیفه</label>
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
	
	
	
	
	
	
	
	
	
	



