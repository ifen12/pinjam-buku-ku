<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>create pinjam</title>
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link rel="stylesheet" href="../css/iconmaterial.css">

	<script src="../js/jquery-3.1.0.min.js"></script>
	<script src="../js/materialize.min.js"></script>
</head>
	<style>
		ul li{
			display: inline-block;
		}
		.www {
			height: 25px;
			width: 60px;
			font-size: 8px;
		}
		.aaa{
			font-size: 18px !important;
			margin-top: -5px;
		}

		#qqq{
			margin-top: -5px;
			font-family: calibri;
		}
	</style>	
<body>
<nav class="blue-grey darken-4">
 	<div class="nav-wrapper container">
      	<a href="#" class="brand-logo">Perpus</a>
    </div>
</nav>

<div class="container row">
	<div class="row">
    	<div class="col s8 card lighten-1 hoverable">

    		<div class="card-panel hoverable"> Input Pinjam XI RPL 2</div>
			<ul>
				<li>
					<a href="/pinjam/" class="waves-effect waves-light btn brown darken-1 www" type="submit" name="action">
						<i class="material-icons right aaa">chevron_left</i><p id="qqq">back</p>
					</a>
				</li>
			</ul>

			<form action="/pinjam" method="post" class="col s12">
				<div class="row">
				
					<div class="input-field col s12">
	          			<i class="material-icons prefix">today</i>
						<input type="text" name="tanggal_pinjam" placeholder="tanggal pinjam" class="datepicker">
					</div>

					<div class="input-field col s12">
	          			<i class="material-icons prefix">today</i>
						<input type="text" name="tanggal_balik" placeholder="tanggal balik" class="datepicker">
					</div>

					<div class="input-field col s12">
	          			<i class="material-icons prefix">person_pin</i>
						<select name="nis">
							<option disabled selected>Silakan Pilih</option>
							@foreach ($siswa as $siswa)
								<option value="{{$siswa->nis}}">
									{{$siswa->nama}}
								</option>
							@endforeach
						</select>
					</div>

			 		<div class="input-field col s12">
			 			<i class="material-icons prefix">verified_user</i>
					    <select name="isbn">
					    	<option disabled selected>Silakan Pilih</option>
							@foreach ($buku as $buku)
								<option value="{{$buku->isbn}}">
									{{$buku->judul}}
								</option>
							@endforeach
						</select>
					</div>
					
					<div class="input-field col s12">
	          			<i class="material-icons prefix">mode_edit</i>
	          			<label for="">Keterangan</label><br>
	          			<p>
					      <input class="with-gap" type="radio" name="keterangan" value="belum" id="test3">
					      <label for="test3">Belum</label>
					    <p>
					    	
					    <p>
					      <input class="with-gap" type="radio" name="keterangan" value="kembali" id="test1">
					      <label for="test1">Sudah</label>
					    </p><br><br>
					</div>

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
					<button class="btn waves-effect waves-light" type="submit" name="action">Submit
					    <i class="material-icons right">send</i>
					</button>

				</div>
			</form>
		</div>

		<div class="col s1 card-panel hoverable">

		</div>
				
		<div class="col s3 card-panel hoverable">
        <!-- Grey navigation panel -->
			<div class="card-panel hoverable"> Hoverable Card Panel</div>
			<a href="#">dahsboard</a>	
    	</div>

	</div>
</div>

<footer class="page-footer blue-grey darken-4">
    <div class="container">
    	<div class="footer-copyright">
            © 2017 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
	</div>
</footer>

<script>
	$(document).ready(function() {
    	$('select').material_select();
  	} );

  	// Materialize Date Picker
    window.picker = $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 15 years to control year
        format: 'yyyy/mm/dd'    
    });
</script>
</body>
</html>