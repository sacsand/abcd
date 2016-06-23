<?php ?>


<script type="text/javascript">

</script>


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
       <?php echo form_open('translate/trans', 'class="form-horizontal"'); ?>
          <fieldset>
            <legend>Message Translation</legend>

          <div class="panel panel-default">
            <div class="panel-heading">Message ID: <?php echo $messages['message_ID'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inserted-Time : <?php echo $messages['inserted_date_time'];?></div>
            <div class="panel-body">
              <?php echo $messages['german_content'];?>
            </div>
          </div>
          <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Translated Message</label>
                <div class="col-lg-10">
                  <textarea class="form-control" name="message_g" rows="3" id="textArea"></textarea>
                  <input type="hidden" name="message_id" value="<?php echo $messages['message_ID'];?>">
                  <span class="help-block"></span>
                </div>
              </div>


            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
        </div>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="col-lg-4 col-lg-offset-1">

    

    </div>
  </div>
