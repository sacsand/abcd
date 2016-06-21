<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>


<!-- Forms
================================================== -->
<div class="bs-docs-section">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="forms">Forms</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="well bs-component">

        <form class="form-horizontal">
          <fieldset>
            <legend>Enter The Message</legend>

            <div class="form-group">
              <label for="textArea" class="col-lg-2 control-label">Textarea</label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea"></textarea>
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="col-lg-4 col-lg-offset-1">

        <form class="bs-component">
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
        </form>

    </div>
  </div>
</div>
