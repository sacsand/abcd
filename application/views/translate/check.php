

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
       <?php echo form_open('translate/check', 'class="form-horizontal"'); ?>
          <fieldset>
            <legend>Message Validation</legend>

          <div class="panel panel-default">
            <div class="panel-heading">Receved message ID:<?php echo $messages['message_ID'];?></div>
          </div>

          <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Enter Password</label>
        <div class="col-lg-10">
          <input type="text"class="form-control" name="password" id="inputPassword" placeholder="Password">
          <input type="hidden" name="message_id" value="<?php echo $messages['message_ID'];?>">
        </div>
    </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="col-lg-4 col-lg-offset-1">

    

    </div>
  </div>
