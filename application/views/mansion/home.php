
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="forms">Mansion</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="well bs-component">
        Significant Messages
        <table class="table table-striped table-hover ">
   <thead>
     <tr>
       <th>ID</th>
       <th>German content</th>
       <th>English content</th>
       <th>Stored Time</th>
       <th>Inserted Time</th>
       <th>Type</th>
     </tr>
   </thead>
   <tbody>
     <?php foreach ($messages as $message): ?>
     <tr class="danger">

       <td><?php echo $message['message_ID']; ?></td>
       <td><?php echo $message['german_content']; ?></td>
        <td><?php echo $message['english_content']; ?></td>
       <td><?php echo $message['stored_date_time']; ?></td>
       <td><?php echo $message['inserted_date_time']; ?></td>
       <td><?php echo $message['stored_type']; ?></td>
    <!--   <td><a href="<//?php echo site_url('spy/'.$message['message_ID']); ?>">Store Message</a></td> -->
     </tr>
   <?php  endforeach; ?>

   </tbody>
 </table>
      </div>
    </div>

    </div>
