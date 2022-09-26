<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saverecharge.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Payment</h4></center>
<hr>
<div id="ac">
<span>Contact person : </span><input type="text" style="width:265px; height:30px;" name="mobile" placeholder="name" Required  /><br>
<span>Type : </span>
<select name="rtype" required  style="width:265px; height:30px; margin-left:-5px;">
	<option value="WA">WARRNTY</option>
    <option value="NOWA">NOWARRANTY</option>
</select><br> 
<span>Operator : </span>
<select name="operator" required  style="width:265px; height:30px; margin-left:-5px;">
	<option value="UPS">UPS</option>
    <option value="BATTERY">BATTERY</option>
    <option value="INVERTER">INVERTER</option>
    </select><br> 
<span>Circle : </span>
<select name="circle" required  style="width:265px; height:30px; margin-left:-5px;">
	<option value="CL">CITY LIMIT</option>
    <option value="OCL">OUTSIDE CITY</option>
</select><br> 
<span>Amount : </span><input type="text" style="width:265px; height:30px;" name="amount" placeholder="Charge Amount" Required/><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-card icon-large"></i> payment</button>
</div>
</div>
</form>