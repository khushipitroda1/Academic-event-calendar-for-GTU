<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><b>Book Event</b></h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="<?php echo WEB_ROOT; ?>api/process.php?cmd=book" method="post">
    <div class="box-body">
		<?php
		  $username=($_SESSION['calendar_fd_user']['name']); 
		
		?>
	 
	   <div class="form-group">
        <label for="exampleInputEmail1">Section Head Name</label>
		<span id="sprytf_address">
		
        <input type="text"  name="secname" class="form-control input-sm" placeholder=" <?php echo $username; ?>" id="address" disabled>
	
		</span>
      </div>
	  
	 
	    	  
	  
      <div class="form-group">
      <div class="row">
      	<div class="col-xs-6">
			<label>Reservation Date</label>
			<span id="sprytf_rdate">
        	<input type="text" name="rdate" class="form-control" placeholder="YYYY-mm-dd">
			<span class="textfieldRequiredMsg">Date is required.</span>
			<span class="textfieldInvalidFormatMsg">Invalid date Format.</span>
			</span>
        </div>
        <div class="col-xs-6">
			<label>Event Time</label>
			<span id="sprytf_rtime">
            <input type="text" name="rtime" class="form-control" placeholder="HH:mm">
			<span class="textfieldRequiredMsg">Time is required.</span>
			<span class="textfieldInvalidFormatMsg">Invalid time Format.</span>
			</span>
       </div>
      </div>
	  </div>
			

<div class="form-group">
        <label for="exampleInputPassword1">Event Name</label>
		<span id="sprytf_ucount">
        <input type="text" name="ename" class="form-control input-sm" placeholder="Event Name" >
		<span class="textfieldRequiredMsg">Event Name is required.</span>

      </div>
	  
	    <div class="form-group">
        <label for="exampleInputPassword1">Event Reason</label>
		<span id="sprytf_ucount">
        <input type="text" name="eres" class="form-control input-sm" placeholder="Event Reason" >
			<span class="textfieldRequiredMsg">Reason is required.</span>

      </div>



			
	  <div class="form-group">
        <label for="exampleInputPassword1">No of Peoples</label>
		<span id="sprytf_ucount">
        <input type="text" name="ucount" class="form-control input-sm" placeholder="No of peoples" >
		<span class="textfieldRequiredMsg">No of peoples is required.</span>
		<span class="textfieldInvalidFormatMsg">Invalid Format.</span>
      </div>
	  
	
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box -->
<script type="text/javascript">
<!--
var sprytf_name 	= new Spry.Widget.ValidationSelect("sprytf_name");
var sprytf_address 	= new Spry.Widget.ValidationTextarea("sprytf_address", {minChars:6, isRequired:true, validateOn:["blur", "change"]});
var sprytf_phone 	= new Spry.Widget.ValidationTextField("sprytf_phone", 'none', {validateOn:["blur", "change"]});
var sprytf_mail 	= new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
var sprytf_rdate 	= new Spry.Widget.ValidationTextField("sprytf_rdate", "date", {format:"yyyy-mm-dd", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_rtime 	= new Spry.Widget.ValidationTextField("sprytf_rtime", "time", {hint:"i.e 20:10", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_ucount 	= new Spry.Widget.ValidationTextField("sprytf_ucount", "integer", {validateOn:["blur", "change"]});
//-->
</script>

<script type="text/javascript">
$('select').on('change', function() {
	//alert( this.value );
	var id = this.value;
	$.get('<?php echo WEB_ROOT. 'api/process.php?cmd=user&userId=' ?>'+id, function(data, status){
		var obj = $.parseJSON(data);
		$('#userId').val(obj.user_id);
		$('#email').val(obj.email);
		$('#address').val(obj.address);
		$('#phone').val(obj.phone_no);
	});
	
})
</script>