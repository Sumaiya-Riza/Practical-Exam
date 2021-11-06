<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=RocknRoll+One&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Practical Exam - Internship</title>
    <style>
      .table{
  border: 1px solid rgb(16, 31, 78);
  table-layout: auto;
}

.table th{
  text-align: center;
  vertical-align: middle;
}

table,th,td{
  border-collapse:collapse ;
}

#t1 tr:nth-child(even){
  background-color: lightcyan;
}

#t1 tr:nth-child(odd){
  background-color: rgb(144, 190, 216);
}

#t1 th{
  background-color: black;
  color: white;
}

#t2 tr:nth-child(even){
  background-color: lightcyan;
}

#t2 tr:nth-child(odd){
  background-color: rgb(174, 211, 233);
}

#t2 th{
  background-color: rgba(0, 0, 0, 0.259);
  color: white;
}

th{
  height: 30px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  text-align: center;
  padding-left: 20px;
  padding-right: 20px;
}

td{
  vertical-align: middle;
  font-size: 15px;
  font-family: sans-serif;
  padding-left: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  font-weight: bold;
}
</style>

</head>
<section class="vh-100" style="background-color: #eee;">
<div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto text-justify text-justify">
        <div class="row pt-md-5 mt-md-3 mb-5">
          <div class="col-xl-11 col-lg-10 col-md-11 col-11 p-2 mx-auto  title-box">

                <h2 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Bank Details</h2>
                
                <?php
                include '../model/bank_details_model.php';
                $bankObj = new details();
                $bank_result = $bankObj->getBankTable();
                ?>
                <!-- Crud Table -->
                <div class="w3-responsive">

                  <table id="t1" class="w3-table-all w3-card-4" style="margin-top:30px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>View</th>
                            <th>Bank Name</th>
                            <th>Branch</th>
                            <th>Branch Code</th>
                            <th>Account Number</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($bank_result)) {
                            echo "<tr>";
                            echo "<td>" . $row['bank_id'] . "</td>";
                        ?>
                        
                            <td>
                                <a href="viewbank.php?bank_id=<?php echo $row['bank_id']; ?>">
                                    <i class="fas fa-eye fa-lg text-secondary mr-2' name=" view"></i>
                                </a>
                            </td>
                            <?php
                            echo "<td>" . $row['bank_name'] . "</td>";
                            echo "<td>" . $row['branch_name'] . "</td>";
                            echo "<td>" . $row['branch_code'] . "</td>";
                            echo "<td>" . $row['account_number'] . "</td>";
                            ?>
                            <td>
                                <a href="#" data-toggle='modal' title='<h6>edit</h6>' data-html='true' data-target="#editform" data-placement='top' onclick="loadBankData('<?php echo $row['bank_id']; ?>')">
                                    <i class='fas fa-edit fa-lg text-success mr-2' name="update"></i>
                                </a>
                            </td>
                            <td>
                                <a href="admin_edit_staff_table.php?id=<?php $row['bank_id']; ?>" data-toggle='tooltip' title='<h6>edit</h6>' data-html='true' data-placement='top'>
                                    <i class="fas fa-times text-danger fa-2x mr-2'"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
                <!-- End of Crud Table -->


              
          </div>
        </div>
      </div>
    </div>
   </div>
</section>

<!-- Edit Modal -->
<div class="modal fade" id="editform">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog centered " style="margin-top:60px;">
    <div class="modal-content form">
      <div class="modal-header">
        <h4 class="ml-auto formhead">Update Bank Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div id="classBody"></div>
    </div>
  </div>
</div>
                            
<script>
  function loadBankData(x) {
    var url = '../controller/bank_details_contr.php?status=editBank';
    $.post(url, {
      bank_id: x
    }, function(data) {
      $('#classBody').html(data).show();
      
    })
  }
</script>
</html>