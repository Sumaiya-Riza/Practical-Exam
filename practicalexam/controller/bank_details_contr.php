<?php
$status = $_REQUEST['status'];
include '../model/bank_details_model.php';
$bankObj = new details();

switch ($status) {

    case "addingBank":
        try {
            $bank_name = $_POST['bank_name'];
            $branch_name = $_POST['branch_name'];
            $branch_code = $_POST['branch_code'];
            $account_number = $_POST['account_number'];

            if ($bank_name == "") {
                throw new Exception("Please enter Bank Name!!!");
            }
            if ($branch_name == "") {
                throw new Exception("Please enter Branch Name!!!");
            }
            if ($branch_code == "") {
                throw new Exception("Please enter Branch Code!!!");
            }
            if ($account_number == "") {
                throw new Exception("Please enter Account No.!!!");
            }

            

            $bankObj->addDetails(
                $bank_name,
                $branch_name,
                $branch_code,
                $account_number,
            );

            $msg = "Added Successfully!!!";
            $msg = base64_encode($msg);
            header("location: ../view/bank_details_view.php?msg=$msg");
        } catch (Exception $th) {
            $msg = $th->getMessage();
            $msg = base64_encode($msg);
            header("location: ../view/bank_details_view.php?error=$msg");
        }

        break;


    case "editBank":
        $bank_id = $_POST["bank_id"];
        $result = $bankObj->getBankDetails($bank_id);
        $Result = $result->fetch_assoc();

?>
        <form name="editbank" id="editvalidatebank" action="../controller/bank_details_contr.php?status=updatebank" method="post" enctype="multipart/form-data" class="mx-1 mx-md-4">

<div class="d-flex flex-row align-items-center mb-4">
  <i class="fas fa-university fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
    <input type="text" name="ebank_name" id="ebank_name" class="form-control" placeholder="Bank Name" />
  </div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
  <i class="fas fa-map-marker-alt fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
    <input type="text" name="ebranch_name" id="ebranch_name" class="form-control" placeholder="Branch" />
  </div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
  <i class="fas fa-search-location fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
    <input type="number" name="ebranch_code" id="ebranch_code" class="form-control" placeholder="Branch Code" />
  </div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
  <i class="fas fa-money-check-alt fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
    <input type="number" name="eaccount_number" id="ebank_name" class="form-control" placeholder="Account Number" />
  </div>
</div>

<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
</div>

</form>
<?php

        break;

    case "updateBank":
        try {
            $ebank_name = $_POST['ebank_name'];
            $ebranch_name = $_POST['ebranch_name'];
            $ebranch_code = $_POST['ebranch_code'];
            $eaccount_number = $_POST['eaccount_number'];


            $bankObj->updateBank($ebank_id,$ebank_name,$ebranch_name,$ebranch_code,$eaccount_number);

            $msg = "$es_epfno Updated Successfully!!!";
            $msg = base64_encode($msg);
            header("location: ../view/bank_details_view.php?msg=$msg");
        } catch (Exception $th) {
            $msg = $th->getMessage();
            $msg = base64_encode($msg);
            header("location: ../view/bank_details_view.php?error=$msg");
        }

        break;

    case "deleteBank":
        try {
            $dbank_name = $_POST['dbank_name'];
            $dbranch_name = $_POST['dbranch_name'];
            $dbranch_code = $_POST['dbranch_code'];
            $daccount_number = $_POST['deaccount_number'];


            $bankObj->deleteBank($dbank_id,$dbank_name,$dbranch_name,$dbranch_code,$daccount_number);

            $msg = "Deleted Successfully!!!";
            $msg = base64_encode($msg);
            header("location: ../view/bank_details_view.php?msg=$msg");
        } catch (Exception $th) {
            $msg = $th->getMessage();
            $msg = base64_encode($msg);
            header("location: ../view/bank_details_view.php?error=$msg");
        }

        break;
}
