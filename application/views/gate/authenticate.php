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


<form action="<?php echo base_url(); ?>index.php/gate/authenticate" method="post">

    <div>
        Select Category<br>
        <select name="type">
          <option>Select Category</option>

        <option value="military_commander">Military commander</option>
        <option value="public_servant">Public servant</option>
        <option value="storage_person">Storage Person</option>
        <option value="translator">Translator</option>
        <option value="hut_person">Hut person</option>
        <option value="spy">Spy</option>
        </select>
    </div>

    <br>

    <div class="military_commander translator box">
    military ID<br>
    <input type="text" name="mid"  required="">
    <br>
    </div>
    <div class="storage_person translator box">
    civilian id<br>
    <input type="text" name="cid"  required="">
    <br>
    </div>
    <div class="public_servant hut_person hut_person translator box">
    Gov id<br>
    <input type="text" name="gid" required="">
    <br>
    </div>
    <div class="red spy military_commander hut_person public_servant hut_person translator box">
     Birthday<br>
    <input type="date" name="bdate" required="">
    <br>
    </div>

    <div class="red military_commander public_servant box">
    secret password<br>
    <input type="password" name="secret_password"  required="">
    <br>
    </div>

    <div class="red spy military_commander box">
    Nick Name<br>
    <input type="password" name="nick_name" required="">
    <br>
    </div>
    <br>
    <input type="submit" value="Submit">
    <br>
</form>
</div>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="spy"){
                $(".box").not(".spy").hide();
                $(".spy").show();
            }
            else if($(this).attr("value")=="military_commander"){
                $(".box").not(".military_commander").hide();
                $(".military_commander").show();
            }
            else if($(this).attr("value")=="public_servant"){
                $(".box").not(".public_servant").hide();
                $(".public_servant").show();
            }
            else if($(this).attr("value")=="translator"){
                $(".box").not(".translator").hide();
                $(".translator").show();
            }
             else if($(this).attr("value")=="hut_person"){
                $(".box").not(".hut_person").hide();
                $(".hut_person").show();
            }
            else if($(this).attr("value")=="storage_person"){
                $(".box").not(".storage_person").hide();
                $(".storage_person").show();
            }
            else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
