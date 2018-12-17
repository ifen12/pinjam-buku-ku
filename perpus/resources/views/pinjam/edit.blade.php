<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>create pinjam</title>
	<link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/iconmaterial.css')}}">

	<script src="{{asset('js/jquery-3.1.0.min.js')}}"></script>
	<script src="{{asset('js/materialize.min.js')}}"></script>
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

				<form action="/pinjam/{{$pinjam->id_pinjam}}" method="post">
					id pinjam      :<br>
					<input type="text" name="id_pinjam" placeholder="masukan id pinjam" value="{{$pinjam->id_pinjam}}"><br>
					tanggal pinjam :<br>
					<input type="text" name="tanggal_pinjam" placeholder="tanggal pinjam" value="{{$pinjam->tanggal_pinjam}}"><br>
					tanggal balik  :<br>
					<input type="text" name="tanggal_balik" placeholder="tanggal balik" value="{{$pinjam->tanggal_balik}}"><br>
					nis            :<br>
					<input type="text" name="nis" placeholder="nis" value="{{$pinjam->nis}}"><br>
					isbn           :<br>
					<input type="text" name="isbn" placeholder="isbn" value="{{$pinjam->isbn}}"><br>
					keterangan     :<br>
					<input type="text" name="keterangan" placeholder="keterangan" value="{{$pinjam->keterangan}}"><br><br>

					<input type="hidden" name="_method" value="put">

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