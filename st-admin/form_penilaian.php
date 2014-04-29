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
	<title>Form Penilaian - SI Jurnal Sosioteknologi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
	<?php include "topbar.php" ?>
		<div class="container-fluid">
		<div class="row-fluid">
			<?php include "left_menu.php"?>
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
						<h2><i class="icon-picture"></i>Form Penilaian Mitra Bestari</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Nomor Makalah</label>
									<div class="controls">
								  		<input class="input-xlarge focused" id="focusedInput" type="text" value="Sistem penomoran di sostek kayak apa bahkan :v">
									</div>
							  	</div>
							  	<div class="control-group">
							  		<label class="control-label" for="date01">Tanggal Diterima</label>
							  		<div class="controls">
										<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  		</div>
								</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Untuk Penerbitan</label>
									<div class="controls">
								  		<input class="input-xlarge focused" id="focusedInput" type="text" value="Pengennya ini nanti bisa milih opsi penerbitan kapan #ngeyel">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Penulis</label>
									<div class="controls">
								  		<input class="input-xlarge focused" id="focusedInput" type="text" value="Bisa otomatis keisi sesuai naskah yang lagi dinilai? Pake autocomplete mungkin">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Judul</label>
									<div class="controls">
								  		<input class="input-xlarge focused" id="focusedInput" type="text" value="Bisa otomatis keisi sesuai naskah yang lagi dinilai? Pake autocomplete mungkin">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label">Status Makalah</label>
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
											Makalah baru
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
											Makalah hasil revisi
								  		</label>
									</div>
							  	</div>
							  	<h3>A. Substansi</h3>
							  	<p>1. Relevansi dengan Jurnal Sosioteknologi :</p>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" checked="">
											Relevan
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios1" id="optionsRadios2" value="option2">
											Kurang relevan
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios1" id="optionsRadios3" value="option3">
											Tidak relevan
								  		</label>
									</div>
							  	</div>
							  	<p>2. Jenis makalah : </p>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">
											Penelitian teoretis
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios2" id="optionsRadios2" value="option2">
											Kajian ulang metode yang sudah ada
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios2" id="optionsRadios3" value="option3">
											Penelitian eksperimental
								  		</label>
									</div>
							  	</div>
							  	<p>3. Keaslian makalah :</p>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios3" id="optionsRadios1" value="option1" checked="">
											Original
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios3" id="optionsRadios2" value="option2">
											Tidak ada yang baru
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios3" id="optionsRadios3" value="option3">
											Pengembangan dari yang sudah ada
								  		</label>
									</div>
							  	</div>
							  	<p>4. Kualitas makalah :</p>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios4" id="optionsRadios1" value="option1" checked="">
											Bernilai tinggi
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios4" id="optionsRadios2" value="option2">
											Cukup
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios4" id="optionsRadios3" value="option3">
											Kurang
								  		</label>
									</div>
							  	</div>
							  	<p>5. Kelengkapan makalah :</p>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios5" id="optionsRadios1" value="option1" checked="">
											Lengkap
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios5" id="optionsRadios2" value="option2">
											Kurang lengkap (diuraikan dalam bagian C)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios5" id="optionsRadios3" value="option3">
											Berisi hal-hal yang tidak perlu (diuraikan dalam bagian C)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios5" id="optionsRadios4" value="option4">
											Mengandung kesalahan (diuraikan dalam bagian C)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios5" id="optionsRadio5" value="option5">
											Lain-lain :
								  		</label>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput"></label>
									<div class="controls">
										<input class="input-xlarge focused" id="focusedInput" type="text" value="Ini di-disabled dulu kalo radio buttonnya ga di-check">
									</div>
							  	</div>
							  	<p>6. Keterbacaan untuk dipahami :</p>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios6" id="optionsRadios1" value="option1" checked="">
											Mudah dipahami
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios6" id="optionsRadios2" value="option2">
											Sulit dipahami (perlu ditulis ulang)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios6" id="optionsRadios3" value="option3">
											Perlu bahan bacaan lain untuk memahami
								  		</label>
									</div>
							  	</div>
							  	<p>7. Detail penulisan (jika jawabannya tidak, uraikan penjelasan dalam bagian C) :</p>
							  	<ul>
							  	<li>Kesesuaian judul?</li>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios71" id="optionsRadios1" value="option1" checked="">
											ya
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios71" id="optionsRadios2" value="option2">
											tidak
								  		</label>	
									</div>
							  	</div>
							  	<li>Kesesuaian panjang paper?</li>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios72" id="optionsRadios1" value="option1" checked="">
											ya
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios72" id="optionsRadios2" value="option2">
											tidak
								  		</label>	
									</div>
							  	</div>
							  	<li>Kesesuaian ringkasan/kesimpulan?</li>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios73" id="optionsRadios1" value="option1" checked="">
											ya
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios73" id="optionsRadios2" value="option2">
											tidak
								  		</label>	
									</div>
							  	</div>
							  	<li>Kesesuaian daftar pustaka?</li>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios74" id="optionsRadios1" value="option1" checked="">
											ya
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios74" id="optionsRadios2" value="option2">
											tidak
								  		</label>	
									</div>
							  	</div>
							  	</ul>
								<h3>B. Rekomendasi</h3>
							  	<p>1. Nilai keseluruhan :</p>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios8" id="optionsRadios1" value="option1" checked="">
											Di bawah rata-rata
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios8" id="optionsRadios2" value="option2">
											Cukup baik
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios8" id="optionsRadios3" value="option3">
											Baik
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios8" id="optionsRadios4" value="option4">
											Sangat baik
								  		</label>
									</div>
							  	</div>
							  	<p>2. Rekomendasi :</p>
							  	<div class="control-group">
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="optionsRadios9" id="optionsRadios1" value="option1" checked="">
											Diterima langsung
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios9" id="optionsRadios2" value="option2">
											Diterima langsung jika revisi telah dilakukan (tidak perlu review ulang)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios9" id="optionsRadios3" value="option3">
											Ditolak, disarankan untuk direvisi serta diserahkan kembali (alasan disampaikan dalam bagian C)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="optionsRadios9" id="optionsRadios4" value="option4">
											Ditolak (alasan disampaikan dalam bagian C)
								  		</label>
									</div>
							  	</div>
							  	<h3>C. Komentar untuk Perubahan</h3>
							  	<div class="control-group">
							  		<div class="controls">
										<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  		</div>
							  	</div>

							  	<div class="form-actions">
							  		<button type="submit" class="btn btn-primary">Save changes</button>
							  		<button type="reset" class="btn">Cancel</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
		<?php include "modal_settings.php"?>
		<?php include "footer.php"?>
		
	</div><!--/.fluid-container-->

	<?php include "script_dependencies.php"?>
</body>
</html>
