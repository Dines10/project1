<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveService.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Service Information</h4></center>
<hr>
<div id="ac">
<span>Product Type : </span><input type="text" style="width:265px; height:30px;" name="name" required/><br>
<span>Contact Person : </span><input type="text" style="width:265px; height:30px;" name="cperson" /><br>
<span>Address : </span><input type="text" style="width:265px; height:30px;" name="address" /><br>
<span>Contact No. : </span><input type="text" style="width:265px; height:30px;" name="contact" maxlength="10" pattern="^[6-9][0-9]{9}$" /><br>
<span>Note : </span><textarea style="width:265px; height:80px;" name="note" /></textarea><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>