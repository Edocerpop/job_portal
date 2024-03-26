
<?php
require_once ("../../include/initialize.php");
 	 if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

 
	}
   
	function doInsert() {
		if(isset($_POST['save'])) {
			if ($_POST['COMPANYNAME'] == "" || $_POST['COMPANYADDRESS'] == "" || $_POST['COMPANYCONTACTNO'] == "") {
				$messageStats = false;
				message("All fields are required!","error");
				redirect('index.php?view=add');
			} else {
				try {
					$company = new Company();
					$company->COMPANYNAME = $_POST['COMPANYNAME'];
					$company->COMPANYADDRESS = $_POST['COMPANYADDRESS'];
					$company->COMPANYCONTACTNO = $_POST['COMPANYCONTACTNO'];
					$company->create();
	
					message("New company created successfully!", "success");
					redirect("index.php");
				} catch (Exception $e) {
					if ($e->getCode() == 23000) { 
						$messageStats = false;
						message("Company with the name [" . $_POST['COMPANYNAME'] . "] already exists!", "error");
						redirect('index.php?view=add');
					} else {
						$messageStats = false;
						message("An error occurred while creating the company: " , "error");
						redirect('index.php?view=add');
					}
				}
			}
		}
	}
	

	function doEdit(){
		if(isset($_POST['save'])){

			$company = New Company();
			$company->COMPANYNAME		= $_POST['COMPANYNAME'];
			$company->COMPANYADDRESS	= $_POST['COMPANYADDRESS'];
			$company->COMPANYCONTACTNO	= $_POST['COMPANYCONTACTNO'];
			$company->update($_POST['COMPANYID']);

			message("Company has been updated!", "success");
			redirect("index.php");
		}

	}


	function doDelete(){
	
			$id = $_GET['id'];

			$company = New Company();
			$company->delete($id);

			message("Company has been Deleted!","info");
			redirect('index.php');

	}
?>