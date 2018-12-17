<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit siswa</title>
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

    		<div class="card-panel hoverable"> Input Sisiwa XI RPL 2</div>

			<ul>
				<li>
					<a href="/siswa/" class="waves-effect waves-light btn brown darken-1 www" type="submit" name="action">
						<i class="material-icons right aaa">chevron_left</i><p id="qqq">back</p>
					</a>
				</li>
			</ul>

			<form action="/siswa/{{$siswa->nis}}" method="post" class="col s12">
				<div class="row">

	      			<div class="input-field col s12">
	        			<i class="material-icons prefix">person_pin</i> 
						<input type="text" name="nis" placeholder="nis" value="{{$siswa->nis}}" disabled><br>
		  			</div>

					<div class="input-field col s12">
	          			<i class="material-icons prefix">perm_identity</i>
						<input type="text" name="nama" placeholder="nama siswa" value="{{$siswa->nama}}"><br>
					</div>

					<div class="input-field col s12">
	          			<i class="material-icons prefix">store</i>
						<input type="text" name="kelas" placeholder="kelas" value="{{$siswa->kelas}}"><br>
					</div>

					<div class="input-field col s12">
	          			<i class="material-icons prefix">my_location</i>
						<input type="text" name="alamat" placeholder="alamat" value="{{$siswa->alamat}}"><br>
					</div>

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					<input type="hidden" name="_method" value="put">

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
</body>
</html>