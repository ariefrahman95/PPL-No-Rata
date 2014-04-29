<?php 
	//require_once '/Swift-5.1.0/lib/swift_init.php';
	require_once '/Swift-5.1.0/lib/swift_required.php';
	// Create the Transport
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl");
	$transport->setUsername('destra.bintang.perkasa');
	$transport->setPassword('22.7cil337872');

	/*
	You could alternatively use a different transport such as Sendmail or Mail:

	// Sendmail
	$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

	// Mail
	$transport = Swift_MailTransport::newInstance();
	*/

	// Create the Mailer using your created Transport
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance();
	$message->setSubject('[No Reply] Journal Sosioteknologi Member Verification');
	$message->setFrom(array('journal@sostek.itb.ac.id' => 'Journal Sosioteknologi'));
	$message->setTo(array('t.kesgar@live.com' => 'Ted Kesgar'));
	$message->setBody('
	This is an automatic response sent to those who wish to register
	as a member in Journal Sosioteknologi Official Website.
	
	To register the following email address(t.kesgar@live.com),
	please tap the following link to complete the email registration process.
	
	http://localhost/ppl-no-rata/index.php
	
	Received this message by mistake?
	This message is sent when an email address is registered to a member account.
	in our system. You may have received this email in error
	because another customer entered this email address by mistake.

	If you received this message by mistake, please delete this email.
	Your email address will not be registered.
');
	$result = $mailer->send($message);
	echo $result;
	include "database_connection.php";
	if ((isset($_POST['username']))&&(isset($_POST['password']))){
		$myusername=$_POST['username'];
		$mypassword=$_POST['password'];
		$mynama = $_POST['password'];
		$myorganisasi = $_POST['organisasi'];
		$myemail = $_POST['email'];
		$myphone = $_POST['phone'];
		// To protect MySQL injection (more detail about MySQL injection)
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		$myusername = mysql_real_escape_string($myusername);
		$mypassword = mysql_real_escape_string($mypassword);
		//cek udah ada username apa belum
		$sql_check="SELECT * FROM penulis WHERE username='$myusername'";
		$result=mysql_query($sql_check);
		//if(!($result)) echo mysql_error();
		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
		//kalo udah ada
		if ($count!=0){
			?>
			<script>
				alert("username already exists");
				window.location="register.php";
			</script>
			<?php
		}
		else {
			$sql_add="INSERT INTO penulis (username, password, email, organisasi, nama_lengkap, no_hp) values ('$myusername', '$mypassword', '$myemail', '$myorganisasi', '$mynama', $myphone)";
			$result=mysql_query($sql_add);
			/*if (!mysqli_query($db,$sql_add))
			{
				die('Error: ' . mysqli_error($db));
			}*/
			?>
			<script type="text/javascript">
				localStorage.username='<?php echo $myusername;?>';
				var d = new Date();
				d.setDate(d.getDate() + 30);
				var n = d.getTime();
				localStorage.expired_time=n; 
			</script>
			<?php
				if(isset($_GET['submit'])){
			?>
				<script>
					window.location="submit_form.php";
				</script>
			<?php
				}else{
			?>
				<script>
					window.location="index.php";
				</script>
			<?php
			}
		}
	}