
</form>
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="forms">Hut</h1>
      </div>
    </div>
  </div>
<?php if(!validation_errors()==NULL){ ?>
 <div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Oh snap!</strong> <a href="#" class="alert-link"><?php echo validation_errors(); ?></a> and try submitting again.
 </div>
 <?php } ?>

  <div class="row">
    <div class="col-lg-6">
      <div class="well bs-component">
        <?php echo form_open('hut/create', 'class="form-horizontal" id="myform"'); ?>

          <fieldset>
            <legend>Enter The Message</legend>

            <div class="form-group">
              <label for="textArea" name="message" class="col-lg-2 control-label">Message</label>
              <div class="col-lg-10">
                <textarea class="form-control" name="message"rows="3" id="textArea"></textarea>
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
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

      <!--  <form class="bs-component">
          <div class="form-group">
            <label class="control-label" for="focusedInput">Focused input</label>
            <input class="form-control" id="focusedInput" type="text" value="This is focused...">
          </div>

          <div class="form-group">
            <label class="control-label" for="disabledInput">Disabled input</label>
            <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
          </div>

          <div class="form-group has-warning">
            <label class="control-label" for="inputWarning">Input warning</label>
            <input type="text" class="form-control" id="inputWarning">
          </div>

          <div class="form-group has-error">
            <label class="control-label" for="inputError">Input error</label>
            <input type="text" class="form-control" id="inputError">
          </div>

          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess">Input success</label>
            <input type="text" class="form-control" id="inputSuccess">
          </div>

          <div class="form-group">
            <label class="control-label" for="inputLarge">Large input</label>
            <input class="form-control input-lg" type="text" id="inputLarge">
          </div>

          <div class="form-group">
            <label class="control-label" for="inputDefault">Default input</label>
            <input type="text" class="form-control" id="inputDefault">
          </div>

          <div class="form-group">
            <label class="control-label" for="inputSmall">Small input</label>
            <input class="form-control input-sm" type="text" id="inputSmall">
          </div>

          <div class="form-group">
            <label class="control-label">Input addons</label>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Button</button>
              </span>
            </div>
          </div>
        </form>  -->


    </div>
  </div>
