<?php
	 if(!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
	<div class="row">
    <div class="col-lg-12">
            <h1 class="page-header">List of Employee's   </h1>
       		</div>
   		 </div>
                
 
						<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
							<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
							  		<th width="5%">ApplicantNo</th>
							  		 <th>Name</th>
							  		<th>Address</th>
							  		 <th>Sex</th>
							  		 <th>Age</th>
							  		 <th>CivilStatus</th>
							  		 <th>Username</th>
							  	 	<th width="14%" >Action</th> 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php   
							  		$mydb->setQuery("SELECT * 
														FROM   `tblapplicants`");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 
							  		echo '<tr>';
							  		echo '<td>' . $result->APPLICANTID.'</a></td>';
							  		echo '<td>'. $result->LNAME.', '. $result->FNAME.'</td>';
							  		echo '<td>'. $result->ADDRESS.'</td>';
							  		echo '<td>'. $result->SEX.'</td>';
							  		echo '<td>'. $result->AGE.'</td>';
							  		echo '<td>'. $result->CIVILSTATUS.'</td>';
							  		echo '<td>'. $result->USERNAME.'</td>';
					  				echo '<td align="center" >    
					  		              
									  <a title="Remove" href="index.php?action=delete&id=<?php echo $result->APPLICANTID; ?>" class="btn btn-danger btn-xs">
									  <span class="fa fa-trash-o fw-fa"></span> Remove
								  </a>
								  
					  					 </td>';
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody>
							  
								
							</table>
 
							 
							</form>
       
                 
 