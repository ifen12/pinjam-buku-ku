@if(auth::user()->pilih == 'ADMIN')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index buku</title>

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
			font-size: 13px !important;
			margin-top: -5px;
		}

		#qqq{
			margin-top: -5px;
			font-family: calibri;
		}

		.menu-header .dropdown-content{
			margin-top: 65px !important;
			border-bottom: 3px solid #680cea;
		}

		.menu-header .dropdown-content{
			width: 200px !important;
			background-color: #202020 !important; 
		}
		
		.menu-header .dropdown-content li a{
			color: #fff !important;
			font-size: 12px !important;
		}
		
		.sss{
			font-size: 18px !important;
			margin-top: -20px;
		}
	</style>
<body>
	<nav class="menu-header blue-grey darken-4">
		<div class="container">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">Perpus</a>

				<a href="#" data-activates="mobile-demo" class="button-collapse">
				<i class="material-icons">menu</i></a>

				<!-- dropdown materializ -->
				<ul id='dropdown1' class='dropdown-content'>
						<li>
                            <a href="{{ route('logout') }}" 
                            	onclick="event.preventDefault();
                            	document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </li>
						<li class="divider"></li>
				</ul>

				<!-- nav 1 materializ -->
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li>
						<a href="#" class="dropdown-button" data-activates="dropdown1">
							{{ Auth::user()->name }}
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
				</ul>

				<!-- nav 2 materializ -->
				<ul class="side-nav" id="mobile-demo">
					<li><a href="">Home</a></li>
					<li><a href="">Daftar guru</a></li>
					<li><a href="">Daftar siswa</a></li>
				</ul>
			</div><!-- and nav-wrapper -->
		</div><!-- and container -->	
	</nav><!-- and nav -->

<div class="container row">
	<div class="row">
    	<div class="col s8 card lighten-1 hoverable">
        <!-- Teal page content  -->
			<div class="card-panel hoverable"> Data Buku XI RPL 2</div>

			<a href="/buku/create" class="waves-effect waves-light btn blue-grey darken-4" type="submit" name="action">
				<i class="material-icons left">add</i>add
			</a>
			<table class="centered bordered responsive-table">
	        	<thead>
	        		<tr>
						<th>isbn</th>
						<th>judul</th>
						<th>pengarang</th>
						<th>penerbit</th>
						<th>actios</th>
					</tr>
				</thead>
				@foreach($buku as $buku)
				<tbody>
					<tr>
						<td>{{$buku->isbn}}</td>
						<td>{{$buku->judul}}</td>
						<td>{{$buku->pengarang}}</td>
						<td>{{$buku->penerbit}}</td>
						<td>
							<ul>
								<li>
									<a href="/buku/{{$buku->isbn}}" class="waves-effect waves-light btn green www" type="submit" name="action">
										<i class="material-icons right aaa">visibility</i><p id="qqq">detail</p>
									</a>
								</li>
								<li>
									<a href="/buku/{{$buku->isbn}}/edit" class="waves-effect waves-light btn blue www" type="submit" name="action">
										<i class="material-icons  right aaa">settings</i><p id="qqq">edit</p>
									</a>
								</li>
								<li>
									<form action="/buku/{{$buku->isbn}}" method="post">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="_method" value="delete">
										<button class="btn waves-effect waves-light red www" type="submit" name="action">
							    			<i class="material-icons right aaa">delete</i><p id="qqq">delete</p>
										</button>
									</form>
								</li>
							</ul>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			{!! $buku->paginate('1') !!}
		</div>

		<div class="col s1 card-panel hoverable">

		</div>
				
		<div class="col s3 card-panel hoverable">
        <!-- Grey navigation panel -->
			<div class="card-panel hoverable"> Halaman Lain !!!</div>
			<nav class="blue-grey darken-4" style="margin-bottom: 10px;">
				<div class="nav-wrapper">
					<ul id="nav-mobile" class="center hide-on-med-and-down" style="margin-left: 10px;">
						<li>
							<a href="/siswa" class="waves-effect waves-light btn blue-grey lighten-2 www" type="submit" name="action">
								<i class="material-icons right sss">person_pin</i><p id="qqq">Siswa</p>
							</a>
						</li>
						{{-- <li>
							<a href="/pinjam" class="waves-effect waves-light btn blue-grey lighten-2 www" type="submit" name="action">
								<i class="material-icons right sss">mode_edit</i><p id="qqq">pinjam</p>
							</a>
						</li> --}}
					</ul>
				</div>
			</nav>	

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

@endif