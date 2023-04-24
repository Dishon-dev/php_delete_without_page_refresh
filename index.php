<?php include('header.php') ?>
<body>
   <div class="row-fluid">
   <div class="span12">
   <div class="container">
   <br><br>
   <h3 style="text-align:center;">
      Delete Data without Refreshing Page
   </h3>

<table class="table table-striped table-bordered" id="example">
   <thead>
      <tr>
         <th>No.</th>
         <th>Name</th>
         <th>Phone No.</th>
         <th>Date Added</th>
         <th>Operation</th>
      </tr>
   </thead>
   <tbody>
      <?php
         $select = "SELECT * FROM `member`";
         $results = mysqli_query($conn,$select);
         $no = 0;

         for ($count=0; $row_member = mysqli_fetch_assoc($results); $count++){
         $id = $row_member['member_id'];
         $no++;
         ?>
      <tr class="delete<?php echo $id ?>">
         <td><?php echo $no ?></td>
         <td><?php echo $row_member['member_name']; ?></td>
         <td><?php echo $row_member['member_contact']; ?></td>
         <td><?php echo date("M d, Y h:i:s A", strtotime ($row_member['date_added'])); ?></td>
         <td width="80">
            <a class="btn btn-success" id="<?php echo $id; ?>">Delete</a>
         </td>
      </tr>
      <?php } ?>
   </tbody>
</table>

	</div>
	</div>
	</div>

<script src="js/ajax" type="text/javascript"></script>
</body>
</html>


