<label><?php echo $count?></label>
<br>

<button onclick="status()">add escort group</button><br><br>


<label id="demo"></label><br><br>


	<?php if($status=='assigned'){ ?>
	<button><a href="<?php echo base_url();?>index.php/gate/escort_proc">add escort</a></button><br><br>
	<?php }?>
	



<script>
function  status() {
    document.getElementById("demo").innerHTML = "<?php echo $status;?>";
}


</script>