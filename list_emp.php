<?php
    include("include/connecation.php");
    include("include/header.php");
	   if(!empty($_POST['search'])){
		      $search=$_POST['search'];
		      $sql="SELECT * FROM employee"; 
	           $sql .=" WHERE CONCAT(em_name,em_fname,em_surname,em_job) like '%$search%'";
	           $reslut=mysqli_query($c,$sql);
 
	   }else{
		    $sql="SELECT * FROM employee"; 
	   mysqli_set_charset($c,"utf8");
	   $reslut=mysqli_query($c,$sql);
 
	   }
	 
?>
		
		
		
		<div class="row" id="menu">
	        <div class="col-md-4">
			  <ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="add_item.php">جنس جدید</a></li>
				  <li role="presentation"><a href="add_emp.php">کارمند جدید</a></li>
				  <li role="presentation"><a href="index.php">لیست اجناس</a></li>
				</ul>
			</div>
			 <div class="col-md-6" id="fsearch">
			 <form class="form-inline" action="" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="search" placeholder="جستجو">
                    <button type="submit" class="btn btn-success">جستجو</button>
				</div>
              </form>
			</div>
			 <div class="col-md-2">
			<h2 class="title">لیست کارمندان</h2>
			</div>
	    </div>
		<br/>
		<div class="row" id="content">
	        <div class="col-md-12">
			 <table class="table table-striped" dir="rtl">
			       <thead>
				     <tr class="info">
					   <th>نام کارمند</th>
					   <th>نام پدر</th>
					   <th>تخلص</th>
					   <th>وظیفه</th>
					   <th>عملیات</th>
					 </tr>
				   </thead>
				   <tbody>
				      <?php
					 
						if(mysqli_num_rows($reslut)>0){
							while($row=mysqli_fetch_row($reslut)){
								echo"<tr>";
								  echo"<td>".$row[1]."</td>";
								  echo"<td>".$row[2]."</td>";
								  echo"<td>".$row[3]."</td>";
								  echo"<td>".$row[4]."</td>";
								  echo"<td><a href='edit_emp.php?id=".$row[0]."'>اصلاح</td>";
								echo"</tr>";
							}
						}
					  ?>
				   
				   </tbody>
			 </table>
			</div>
	    </div>
	
	
	</div>
	
	
	
	
	
	
	
	
	
	



