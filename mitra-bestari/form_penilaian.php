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
	<title>Form Penilaian | Website Jurnal Sosioteknologi</title>
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
				<?php 
					include "database_connection.php";
					$id = $_GET["id"];
					$query_post = "select * from jurnal where id='$id'";
					$hasil = mysql_query($query_post,$db);
					$row = mysql_fetch_array($hasil);
				?>

			<p>Jurnal yang akan dinilai dapat di-download pada tombol "Download Naskah" di bawah: </p>
			<fieldset>
			 	<div class="form-actions" align="center">
					<?php
					echo '<a class="btn btn-large btn-primary" href="../'.$row['path_download'].'" target="_blank">
						<i class="icon-download-alt"></i> Download Naskah
					</a>';
					?>
				</div>
			</fieldset>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Penilaian Mitra Bestari</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="add_penilaian.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
							<fieldset>

								<div class="control-group">
									<label class="control-label" for="nomor_makalah">Nomor Makalah</label>
									<div class="controls">
								  		<input class="input-xlarge focused" name= "nomor_makalah" id="nomor_makalah" type="text" value="">
									</div>
							  	</div>
							  	
							  	<div class="control-group">
							  		<label class="control-label" for="date01">Tanggal Diterima</label>
							  		<div class="controls">
										<input type="text" class="input-xlarge datepicker" name="date01" id="date01" value="02/16/12">
							  		</div>
								</div>
							  	
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Untuk Penerbitan</label>
									<div class="controls">
								  		<input class="input-xlarge focused" name="penerbitan" id="penerbitan" type="text" value="">
									</div>
							  	</div>
							  	
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Penulis</label>
									<div class="controls">
										<?php
								  		echo '<input class="input-xlarge focused" name="penulis" id="penulis" type="text" value="'.$row['penulis'].'">';
										?>
									</div>
							  	</div>
							  	
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Judul</label>
									<div class="controls">
								  		<?php
								  		echo '<input class="input-xlarge focused" name="title" id="title" type="text" value="'.$row['judul'].'">';
										?>
									</div>
							  	</div>
							  	
							  	<div class="control-group">
									<label class="control-label">Status Makalah</label>
									<div class="controls">
								  		<label class="radio">
											<input type="radio" name="status" id="optionsRadios1" value="Makalah baru">
											Makalah baru
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="status" id="optionsRadios2" value="Makalah hasil revisi">
											Makalah hasil revisi
								  		</label>
									</div>
							  	</div>
							  	
							  	<h3>A. Substansi</h3>
							  	
							  	<p>1. Relevansi dengan Jurnal Sosioteknologi :</p>
							  	
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="relevan" id="optionsRadios1" value="Relevan">
											Relevan
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="relevan" id="optionsRadios2" value="Kurang relevan">
											Kurang relevan
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="relevan" id="optionsRadios3" value="Tidak relevan">
											Tidak relevan
								  		</label>
							  	</div>
							  	
							  	<p>2. Jenis makalah : </p>
							  	
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="jenis" id="optionsRadios1" value="Penelitian teoritis">
											Penelitian teoretis
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="jenis" id="optionsRadios2" value="Kajian ulang metode yang sudah ada">
											Kajian ulang metode yang sudah ada
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="jenis" id="optionsRadios3" value="Penelititan eksperimental">
											Penelitian eksperimental
								  		</label>
									
							  	</div>
							  	
							  	<p>3. Keaslian makalah :</p>
							  	
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="keaslian" id="optionsRadios1" value="Original">
											Original
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="keaslian" id="optionsRadios2" value="Tidak ada yang baru">
											Tidak ada yang baru
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="keaslian" id="optionsRadios3" value="Pengembangan dari yang sudah ada">
											Pengembangan dari yang sudah ada
								  		</label>
									
							  	</div>
							  	
							  	<p>4. Kualitas makalah :</p>
							  	
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="kualitas" id="optionsRadios1" value="Bernilai tinggi">
											Bernilai tinggi
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="kualitas" id="optionsRadios2" value="Cukup">
											Cukup
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="kualitas" id="optionsRadios3" value="Kurang">
											Kurang
								  		</label>
									
							  	</div>
							  	
							  	<p>5. Kelengkapan makalah :</p>
							  	
							  	<div class="control-group" id="group1">
										<label class="radio">
											<input type="radio" name="kelengkapan" id="optionsRadios1" value="Lengkap" onclick=disabletextbox()>
											Lengkap
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="kelengkapan" id="optionsRadios2" value="Kurang lengkap" onclick=disabletextbox()>
											Kurang lengkap (diuraikan dalam bagian C)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="kelengkapan" id="optionsRadios3" value="Berisi hal-hal yang tidak perlu" onclick=disabletextbox()>
											Berisi hal-hal yang tidak perlu (diuraikan dalam bagian C)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="kelengkapan" id="optionsRadios4" value="Mengandung kesalahan" onclick=disabletextbox()>
											Mengandung kesalahan (diuraikan dalam bagian C)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="kelengkapan" id="optionsRadio5" value="Lain-lain" onclick=enabletextbox()>
											Lain-lain :
								  		</label>
										<input class="input-xlarge focused" id="kelengkapan_lain" type="text" value="" enabled> 

							  	</div>
							  	
							  	<p>6. Keterbacaan untuk dipahami :</p>
							  	
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="keterbacaan" id="optionsRadios1" value="Mudah dipahami">
											Mudah dipahami
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="keterbacaan" id="optionsRadios2" value="Sulit dipahami">
											Sulit dipahami (perlu ditulis ulang)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="keterbacaan" id="optionsRadios3" value="Perlu bahan bacaan lain untuk memahami">
											Perlu bahan bacaan lain untuk memahami
								  		</label>
									
							  	</div>
							  	
							  	<p>7. Detail penulisan (jika jawabannya tidak, uraikan penjelasan dalam bagian C) :</p>
							  	
							  	<ul>
							  	<li>Kesesuaian judul?</li>
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="kesesuaian_judul" id="optionsRadios1" value="ya">
											ya
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="kesesuaian_judul" id="optionsRadios2" value="tidak">
											tidak
								  		</label>	
									
							  	</div>
							  	<li>Kesesuaian panjang paper?</li>
							  	
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="kesesuaian_panjang" id="optionsRadios1" value="ya">
											ya
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="kesesuaian_panjang" id="optionsRadios2" value="tidak">
											tidak
								  		</label>	
									
							  	</div>
							  	
							  	<li>Kesesuaian ringkasan/kesimpulan?</li>
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="kesesuaian_ringkasan" id="optionsRadios1" value="ya">
											ya
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="kesesuaian_ringkasan" id="optionsRadios2" value="tidak">
											tidak
								  		</label>	
									
							  	</div>
							  	
							  	<li>Kesesuaian daftar pustaka?</li>
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="kesesuaian_dafpus" id="optionsRadios1" value="ya">
											ya
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="kesesuaian_dafpus" id="optionsRadios2" value="tidak">
											tidak
								  		</label>	
									
							  	</div>
							  	</ul>
								
								<h3>B. Rekomendasi</h3>
							  	
							  	<p>1. Nilai keseluruhan :</p>
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="nilai_keseluruhan" id="optionsRadios1" value="Di bawah rata-rata">
											Di bawah rata-rata
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="nilai_keseluruhan" id="optionsRadios2" value="Cukup baik">
											Cukup baik
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="nilai_keseluruhan" id="optionsRadios3" value="Bai">
											Baik
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="nilai_keseluruhan" id="optionsRadios4" value="Sangat baik">
											Sangat baik
								  		</label>
									
							  	</div>
							  	
							  	<p>2. Rekomendasi :</p>
							  	
							  	<div class="control-group">
										<label class="radio">
											<input type="radio" name="rekomendasi" id="optionsRadios1" value="Diterima langsung">
											Diterima langsung
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="rekomendasi" id="optionsRadios2" value="Diterima langsung jika revisi telah dilakukan">
											Diterima langsung jika revisi telah dilakukan (tidak perlu review ulang)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="rekomendasi" id="optionsRadios3" value="Ditolak, disarankan untuk direvisi serta diserahkan kembali">
											Ditolak, disarankan untuk direvisi serta diserahkan kembali (alasan disampaikan dalam bagian C)
								  		</label>
								  		<div style="clear:both"></div>
								  		<label class="radio">
											<input type="radio" name="rekomendasi" id="optionsRadios4" value="Ditolak">
											Ditolak (alasan disampaikan dalam bagian C)
								  		</label>
									
							  	</div>
							  	
							  	<h3>C. Komentar untuk Perubahan</h3>
							  	
							  	<div class="control-group">
									<textarea class="autogrow" id="komentar" name="komentar"></textarea>
							  	</div>

							  	<h3>D. Upload Dokumen Track Changes</h3>
							  	<div class="control-group">
									<label class="control-label">File Upload</label>
									<div class="controls">
								  		<p><input type="file" name="file" id="file" > .docx, .doc</p>
									</div>
							  	</div>

							  	<div class="form-actions">
									<button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Finish</button>
									<button type="reset" class="btn">Cancel</button>
								</div>

							</fieldset>
						</form>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

    		<!-- <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class=" icon-list-alt"></i> Dokumen Track Changes (Opsional)</h2>
					</div>
					
					<div class="box-content">
						<p>Diharapkan menggunakan Microsoft Word untuk penulisan Track Changes.</p>
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group">
									<label class="control-label">File Upload</label>
									<div class="controls">
								  		<p><input type="file" name="file" id="file" accept="application/pdf"> .docx, .doc</p>
									</div>
							  	</div>
							</fieldset>
						</form>
					</div>
				</div>
			
			</div>
 -->
			<!-- <fieldset>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Finish</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset> -->
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
		<?php include "modal_settings.php" ?>
		<?php include "footer.php" ?>
		
	</div><!--/.fluid-container-->

	<?php include "script_dependencies.php" ?>
</body>

<script>
	function enabletextbox(){
		document.getElementById("focusedInput-lain").disabled=false;
	}
	function disabletextbox(){
		document.getElementById("focusedInput-lain").disabled=true;
	}
</script>

</html>
