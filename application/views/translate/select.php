
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="forms">Translate</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="well bs-component">
        New Messages
        <table class="table table-striped table-hover ">
   <thead>
     <tr>
       <th>ID</th>
       <th>Inserted Date</th>
       <th>Store</th>
     </tr>
   </thead>
   <tbody>
     <?php foreach ($messages as $message): ?>
     <tr class="danger">

       <td><?php echo $message['message_ID']; ?></td>
       <td><?php echo $message['inserted_date_time']; ?></td>
       <td><a href="<?php echo site_url();?>/translate/getid/<?php echo $message['message_ID']; ?>">Translate</a></td>
     </tr>
   <?php  endforeach; ?>

   </tbody>
 </table>
      </div>
    </div>
    <div class="col-lg-6">

      </div>
  </div>
