<?php
	session_start();
	if(!isset($_SESSION['mibes'])){
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Home | Website Jurnal Sosioteknologi</title>
	<?php include "meta_and_css.php" ?>
</head>

<body>
	<?php include "topbar.php" ?>
		<div class="container-fluid">
		<div class="row-fluid">
			<?php include "left_menu.php" ?>
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-filter"></i>Journals To Review</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group" id="group2">
								<?php
									include "database_connection.php";
									$query_jurnal = "select * from jurnal where status='2'";
									$hasil = mysql_query($query_jurnal,$db);
									$count = mysql_num_rows($hasil);
									$i=0;
									while($row = mysql_fetch_array($hasil)){
										echo'<label class="checkbox" id="Checkbok'.$i.'b">';
										echo'<input type="checkbox" id="Checkbox'.$i.'b"  name="Checkbox'.$i.'b" value="'.$row['id'].'"> <a href="form_penilaian.php?id='.$row['id'].'" target="_blank">'.$row["judul"].'</a>';
								  		echo'</label>';
										$i++;
									}
									?>
								</div>
							</fieldset>
						</form>
						<div class="form-actions" align="center">
							<button type="submit" class="btn" onclick="reject_checked()" >Reject</button>
							<button type="submit" class="btn" onclick="accept_revision()">Accept with Revision</button>
							<button type="submit" class="btn" onclick="accept_checked()" >Accept</button>
						</div>
					</div>
				</div><!--/span-->
			
			<div class="row-fluid sortable">
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-trash"></i> Ditolak</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group" id="group1">
									
							  	</div>
							</fieldset>
						</form>
						<div class="form-actions" align="center">
							<button type="submit" class="btn btn-danger" onclick="undo_reject()">Undo Reject</button>
						</div>
					</div>
				</div><!--/span-->
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-inbox"></i> Diterima dengan revisi</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group" id="group4">
								</div>
							</fieldset>
						</form>
						<div class="form-actions" align="center">
							<button type="submit" class="btn btn-danger" onclick="undo_accept_revision()">Undo Accept with Revision</button>
						</div>
					</div>
				</div><!--/span-->
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-briefcase"></i> Diterima</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group" id="group3">
								</div>
							</fieldset>
						</form>
						<div class="form-actions" align="center">
							<button type="submit" class="btn btn-danger" onclick="undo_accept()">Undo Accept</button>
						</div>
					</div>
				</div><!--/span-->

			
			</div><!--/row-->

			<fieldset>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary" onclick="apply()"><i class="icon-ok"> </i> Apply</button>
					<button type="reset" class="btn" onclick="cancel()">Cancel</button>
				</div>
			</fieldset>
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
		<?php include "modal_settings.php" ?>
		<?php include "footer.php" ?>
		
	</div><!--/.fluid-container-->

	<?php include "script_dependencies.php" ?>
</body>
<script>
	function reject_checked(){
		var i;
		for(i=0; i<<?php echo $count;?>; i++){
			if((document.getElementById("Checkbox"+i+"b").checked)&&(document.getElementById("Checkbok"+i+"b").parentNode==document.getElementById("group2"))){
				//alert(document.getElementById("Checkbox"+i+"b").value);
				document.getElementById("group1").appendChild(document.getElementById("Checkbok"+i+"b"));
			}
		}
	}
	function undo_reject(){
		var i;
		for(i=0; i<<?php echo $count;?>; i++){
			if((document.getElementById("Checkbox"+i+"b").checked)&&(document.getElementById("Checkbok"+i+"b").parentNode==document.getElementById("group1"))){
				//alert(document.getElementById("Checkbox"+i+"b").value);
				document.getElementById("group2").appendChild(document.getElementById("Checkbok"+i+"b"));
			}
		}
	}
	function accept_checked(){
		var i;
		for(i=0; i<<?php echo $count;?>; i++){
			if((document.getElementById("Checkbox"+i+"b").checked)&&(document.getElementById("Checkbok"+i+"b").parentNode==document.getElementById("group2"))){
				//alert(document.getElementById("Checkbox"+i+"b").value);
				document.getElementById("group3").appendChild(document.getElementById("Checkbok"+i+"b"));
			}
		}
	}
	function accept_revision(){
		var i;
		for(i=0; i<<?php echo $count;?>; i++){
			if((document.getElementById("Checkbox"+i+"b").checked)&&(document.getElementById("Checkbok"+i+"b").parentNode==document.getElementById("group2"))){
				//alert(document.getElementById("Checkbox"+i+"b").value);
				document.getElementById("group4").appendChild(document.getElementById("Checkbok"+i+"b"));
			}
		}
	}
	function undo_accept(){
		var i;
		var count = <?php echo $count;?>;
		for(i=0; i<<?php echo $count;?>; i++){
			if((document.getElementById("Checkbox"+i+"b").checked)&&(document.getElementById("Checkbok"+i+"b").parentNode==document.getElementById("group3"))){
				//alert(document.getElementById("Checkbox"+i+"b").value);
				document.getElementById("group2").appendChild(document.getElementById("Checkbok"+i+"b"));
			}
		}
	}
	function undo_accept_revision(){
		var i;
		var count = <?php echo $count;?>;
		for(i=0; i<<?php echo $count;?>; i++){
			if((document.getElementById("Checkbox"+i+"b").checked)&&(document.getElementById("Checkbok"+i+"b").parentNode==document.getElementById("group4"))){
				//alert(document.getElementById("Checkbox"+i+"b").value);
				document.getElementById("group2").appendChild(document.getElementById("Checkbok"+i+"b"));
			}
		}
	}
	function cancel(){
		window.location="index.php";
	}
	function apply(){
		var xmlhttp;
		var xmlhttp2;
		var state = 0;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
			xmlhttp2=new XMLHttpRequest();
		}
		else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
	    }
		var i;
		var reject = "";
		var accept = "";
		var count = <?php echo $count;?>;
		for(i=0; i<count; i++){
			if((document.getElementById("Checkbox"+i+"b").checked)&&(document.getElementById("Checkbok"+i+"b").parentNode==document.getElementById("group3"))){
				accept = accept + "&id" + i + "=" + document.getElementById("Checkbox"+i+"b").value;
			}
			else if((document.getElementById("Checkbox"+i+"b").checked)&&(document.getElementById("Checkbok"+i+"b").parentNode==document.getElementById("group1"))){
				reject = reject + "&id" + i + "=" + document.getElementById("Checkbox"+i+"b").value;
			}			
		}
		if(accept.length!=0){
			xmlhttp.open("POST","send_to_mibes.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("count="+count+accept);
			//alert("send_to_mibes" + document.getElementById("Checkbox"+i+"b").value);
			xmlhttp.onreadystatechange = function () {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					state++;
				}
			}
		}
		
		if(reject.length!=0){
			xmlhttp2.open("POST","reject.php",true);
			xmlhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp2.send("count="+count+reject);
			//alert("reject" + document.getElementById("Checkbox"+i+"b").value);
			xmlhttp2.onreadystatechange = function () {
				if (xmlhttp2.readyState==4 && xmlhttp2.status==200){
					state++;
				}
			}
		}
		window.location="index.php";
	}
</script>
</html>
