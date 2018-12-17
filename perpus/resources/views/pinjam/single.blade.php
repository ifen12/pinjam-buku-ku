<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>detail pinjam</title>
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link rel="stylesheet" href="../css/iconmaterial.css">

	<script src="../js/jquery-3.1.0.min.js"></script>
	<script src="../js/materialize.min.js"></script>
</head>
	<style>
		.top{
			margin-bottom: 70px;
			margin-top: 50px;
		}

		ul li{
			display: inline-block;
		}
		.www {
			height: 25px;
			width: 60px;
			font-size: 8px;
		}
		.aaa{
			font-size: 13px !important;
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

<div class="container row top">
	<div class="row">
    	<div class="col s8 card lighten-1 hoverable">
        <!-- Teal page content  -->
			<div class="card-panel hoverable"> Data pinjam XI RPL 2</div>
			<ul>
				<li>
					<a href="/pinjam/" class="waves-effect waves-light btn brown darken-1 www" type="submit" name="action">
						<i class="material-icons right aaa">chevron_left</i><p id="qqq">back</p>
					</a>
				</li>

				<li>
					<a href="/pinjam/{{$pinjam->id_pinjam}}/edit" class="waves-effect waves-light btn blue www" type="submit" name="action">
						<i class="material-icons  right aaa">settings</i><p id="qqq">edit</p>
					</a>
				</li>

				<li>
					<form action="/pinjam/{{$pinjam->id_pinjam}}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="_method" value="delete">
						<button class="btn waves-effect waves-light red www" type="submit" name="action">
							<i class="material-icons right aaa">delete</i><p id="qqq">delete</p>
						</button>
					</form>
				</li>	
			</ul>
			
			<table class="centered bordered responsive-table">
	        	<thead>
					<tr>
						<th>1.</th>
						<th>id peminjaman</th>
						<td>{{$pinjam->id_pinjam}}</td>
					</tr>

					<tr>
						<th>2.</th>
						<th>tanggal pinjam</th>
						<td>{{$pinjam->tanggal_pinjam}}</td>
					</tr>

					<tr>
						<th>3.</th>
						<th>tanggal kembali</th>
						<td>{{$pinjam->tanggal_balik}}</td>
					</tr>

					<tr>
						<th>4.</th>
						<th>nis</th>
						<td>{{$pinjam->nis}}</td>
					</tr>

					<tr>
						<th>5.</th>
						<th>isbn</th>
						<td>{{$pinjam->isbn}}</td>
					</tr>

					<tr>
						<th>6.</th>
						<th>keterangan</th>
						<td>{{$pinjam->keterangan}}</td>
					</tr>
				</thead>
			</table>
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