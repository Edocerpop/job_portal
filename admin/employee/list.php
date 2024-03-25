<?php
if (!isset($_SESSION['ADMIN_USERID'])) {
    redirect(web_root . "admin/index.php");
}
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">List of Employees</h1>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover" id="employee-table">
        <thead>
            <tr>
                <th>Applicant No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Civil Status</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mydb->setQuery("SELECT * FROM `tblapplicants`");
            $employees = $mydb->loadResultList();

            foreach ($employees as $employee) :
            ?>
                <tr>
                    <td><?= $employee->APPLICANTID ?></td>
                    <td><?= $employee->LNAME . ', ' . $employee->FNAME ?></td>
                    <td><?= $employee->ADDRESS ?></td>
                    <td><?= $employee->SEX ?></td>
                    <td><?= $employee->AGE ?></td>
                    <td><?= $employee->CIVILSTATUS ?></td>
                    <td><?= $employee->USERNAME ?></td>
                    <td>
                        <a href="controller.php?action=delete&id=<?= $employee->APPLICANTID ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
