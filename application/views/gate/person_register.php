
<div class="row">
  <div class="col-lg-12">
    <div class="page-header">
      <h1 id="forms">Person</h1>
    </div>
  </div>
</div>

<form action="<?php echo base_url(); ?>index.php/person/add" method="post">
    First name:<br>
    <input type="text" name="first_name" value="Mickey" required="">
    <br>
    last name:<br>
    <input type="text" name="last_name" value="Mickey" required="">
    <br>
    Birth Date:<br>
    <input type="datetime-local" name="bdate" required="">
    <br>
    Select type:<br>
    <select id="ii" name="type">
        <option value="soldier">soldier</option>
        <option value="gov">Gov</option>
        <option value="non_gov">Non-gov</option>
        <option value="spy">spy</option>
        <option value="officer">Military Officer</option>

    </select>
    <br>
    Nick name:<br>
    <input id="nick_name" type="text" name="nick_name" value="Mouse" required="">
    <br>
    Military id:<br>
    <input type="military_id" name="military_id" >
    <br>
    civilian id:<br>
    <input type="civilian_id" name="civilian_id" >
    <br>
    Gov id:<br>
    <input type="gov_id" name="govk_id" >
    <br>
    Rank:<br>
    <select name="rank">
        <option value="rank1">rank1</option>
        <option value="rank2">rank2</option>

    </select>
    <br>
    password:<br>
    <input type="password" name="password" >
    <br>
    Confirm password:<br>
    <input type="password" name="cpassword">
    <br><br>

    <input type="submit" value="Submit">
</form>
