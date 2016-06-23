
<div class="row">
  <div class="col-lg-12">
    <div class="page-header">
      <h1 id="forms">Gate</h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="well bs-component">

<form action="<?php echo base_url(); ?>index.php/gate/assign" method="post">

    Select type:<br>
    <select name="type">
        <option value="1">Hut</option>
        <option value="2">Translator</option>
        <option value="3">secret inteligance service</option>
        <option value="4">Mansion</option>
        <option value="5">storage</option>

    </select>
    <br>
    ID number<br>
    <input type="text" name="id" value="Mickey" required="">
   <br>
   <br>
    <input type="submit" value="Submit">
    <br>
</form>

</div>
</div>
</div>
