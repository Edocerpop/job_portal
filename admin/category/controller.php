
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
   
	function doInsert(){
		if(isset($_POST['save'])){
			if ($_POST['CATEGORY'] == "") {
				$messageStats = false;
				message("All fields are required!","error");
				redirect('index.php?view=add');
			} else {
				try {
					$category = new Category();
					$category->CATEGORY = $_POST['CATEGORY'];
					$category->create();
	
					message("New [" . $_POST['CATEGORY'] . "] created successfully!", "success");
					redirect("index.php");
				} catch (Exception $e) {
					if ($e->getCode() == 23000) { 
						$messageStats = false;
						message("Category [" . $_POST['CATEGORY'] . "] already exists!", "error");
						redirect('index.php?view=add');
					} else {
						$messageStats = false;
						message("An error occurred while creating the category: " , "error");

						redirect('index.php?view=add');
					}
				}
			}
		}
	}
	

	function doEdit(){
		if(isset($_POST['save'])){

			$category = New Category();
			$category->CATEGORY	= $_POST['CATEGORY'];
			$category->update($_POST['CATEGORYID']);

			message("[". $_POST['CATEGORY'] ."] has been updated!", "success");
			redirect("index.php");
		}

	}


	function doDelete(){
	

			$id = $_GET['id'];

			$category = New Category();
			$category->delete($id);

			message("Category has been Deleted!","info");
			redirect('index.php');

	
		
	}
?>