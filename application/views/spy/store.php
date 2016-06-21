<a href="<?php echo site_url('spy/'); ?>">Back</a>
<div class="row">
  <div class="col-lg-12">
    <div class="page-header">
      <h1 id="forms">Spy</h1>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
      <div class="well well-lg">
            Message ID : <?php echo $messages['message_ID'] ;?>
      </div>

      <div class="well well-sm">
           Inserted Time : <?php echo $messages['inserted_date_time'] ;?>
      </div>
      <div class="well well-sm">
           Store Time : <?php echo $messages['stored_date_time'] ;?>
      </div>

      <div class="well well-sm">
           Stored Type : <?php echo $messages['stored_type'] ;?>
      </div>




 </div>
  <div class="col-lg-4">

    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">German Message</h3>
  </div>
  <div class="panel-body">
  <?php echo $messages['german_content'] ;?>
  </div>
</div>

</div>

<div class="col-lg-4">

  <div class="panel panel-success">
 <div class="panel-heading">
   <h3 class="panel-title">English Message</h3>
 </div>
 <div class="panel-body">
   <?php echo $messages['english_content'] ;?>
 </div>
</div>


</div>
</div>

<div class="row">
    <div class="col-lg-8">
<?php echo form_open('spy/store', 'class="form-horizontal"'); ?>
  <fieldset>
    <legend>Select Message Type</legend>

    <div class="form-group">
      <label class="col-lg-2 control-label">Store Type</label>
      <div class="col-lg-10">
        <input type="hidden" name="message_id"  value="<?php echo $messages['message_ID']?>">
        <div class="radio">
          <label>
            <input type="radio" name="stype" id="optionsRadios1" value="significant">
            Significant
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="stype" id="optionsRadios2" value="non significant">
            Non Siginificant
          </label>
        </div>

        <div class="radio">
          <label>
            <input type="radio" name="stype" id="optionsRadios2" value="NULL">
            Remove from store
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

  </fieldset>
</form>


</div></div>
