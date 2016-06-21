ionTODO: trip 2 to 3 triger ,,anf update the leave time

  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="forms">Translate</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
        <div class="list-group">
            <a href="#" class="list-group-item active">  User Assigned</a>
            <a href="#" class="list-group-item">user1 </a>
            <a href="#" class="list-group-item">user2  </a>
        </div>
    </div>
    <div class="col-lg-4 col-lg-offset-1">

      <div class="list-group">
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">English Content</h4>
          <p class="list-group-item-text"><?php echo $messages['english_content'];?>.</p>
        </a>
     </div>

     <div class="list-group">
       <a href="#" class="list-group-item">
         <h4 class="list-group-item-heading">German Content</h4>
         <p class="list-group-item-text"><?php echo $messages['german_content'];?></p>
       </a>
    </div>

    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">PASSWORD</h3>
      </div>
          <div class="panel-body">
            Qw4hd-DQCRG-HKM64-GHUKL
          </div>
    </div>
  </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-md-4"> </div>
      <div class="col-xs-6 col-md-4">
      <?php echo form_open('translate/update', 'class="form-horizontal" id="myform"'); ?>
      <input type="hidden" name="trip_id" value="<?php echo 'trip_id' ;?>">
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Send</button>
          </div>
        </div>
     </form>
      </div
      <div class="col-xs-6 col-md-4"> </div>

  </div>
</div>

</div>
