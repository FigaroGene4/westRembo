<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Pay Downpayment for Document</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php
        
        $sql = "SELECT * FROM table_documentrequest WHERE id = '$id'";

        //use for MySQLi-OOP
        $query = $conn->query($sql);
        while ($row = $query->fetch_assoc()) {

            echo $row['transactionNumber'];


        }


        ?>  

      