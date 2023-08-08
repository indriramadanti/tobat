<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Aplikasi Web Perpustakaan</title>
</head>
<body>
<input type="checkbox" id="menu-toggle">
	<div class="sidebar">
		<div class="side-header">
			<h3><b><b>P</b></b><span><b><b>ERPUSTAKAAN MI</b></b></span></h3>
		</div>

		<div class="side-content">
			<div class="profile">
				<div class="profile-img bg-img" style="background-image: url(img/profile1.jpg);"></div>
				<h4 style="color: white;"><b>Arsyi R Ningrum</b></h4>
			</div>
		</div>

		<div class="side-menu">
			<ul>
				<li>
					<a href="index.html" style="text-decoration: none;">
						<span class="fa-solid fa-gauge"></span>
						<small>Dashboard</small>
					</a>
				</li>
				<li>
					<a href="dataBuku.html" style="text-decoration: none;">
						<span class="fa-solid fa-book"></span>
						<small>Data Buku</small>
					</a>
				</li>
				<li>
					<a href="dataAnggota.html" style="text-decoration: none;">
						<span class="fa-solid fa-user"></span>
						<small>Data Anggota</small>
					</a>
				</li>
				<li>
					<a href="dataAdmin.html" style="text-decoration: none;">
						<span class="fa-solid fa-lock"></span>
						<small>Data Admin</small>
					</a>
				</li>
				<li>
					<a href="peminjaman.html" style="text-decoration: none;">
						<span class="fa-solid fa-rotate-right"></span>
						<small>Peminjaman</small>
					</a>
				</li>
				<li>
					<a href="pengembalian.html" style="text-decoration: none;">
						<span class="fa-solid fa-rotate-left"></span>
						<small>Pengembalian</small>
					</a>
				</li>
				<li>
					<a href="peraturan.html" class="active" style="text-decoration: none;">
						<span class="fa-solid fa-gear"></span>
						<small>Peraturan</small>
					</a>
				</li>
			</ul>
		</div>
	</div>

<div class="main-content">
		
		<header>
			<div class="header-content">
				<label for="menu-toggle">
					<span class="fa-solid fa-bars mt-3"></span>
				</label>

			<div class="dropdown">
				<span><i class="fa-solid fa-user mr-1"></i></span>
			  <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration:none; color: black;">
			    <b>Arsyi R Ningrum</b>
			  </a>

			  <ul class="dropdown-menu">
			    <li><a class="dropdown-item" href="detailAdmin1.html">Profile</a></li>
			    <li><a class="dropdown-item" href="login.html">Logout</a></li>
			  </ul>
			</div>
			</div>
		</header>

		<main>

		<div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold" style="color:black;">PERATURAN (Lama Peminjaman dan Denda)</h6>
                 </div>

			<div class="analytics">
       <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <table class="table table-striped">

                  <thead style="background-color: #D9D9D9;">
                    <tr>
                      <th scope="col" width="300px">Tipe Anggota</th>
                      <th scope="col">:  Dosen</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Maksimal Jumlah Peminjaman</td>
                      <td>:  2 Buah</td>
                    </tr>
                    <tr>
                      <td>Denda Harian</td>
                      <td>:  5.000</td>
                    </tr>
                    <tr>
                      <td>Lama Pinjam Maksimal</td>
                      <td>:  14 Hari</td>
                    </tr>
                  </tbody>
                </table>

            <table class="table table-striped">
                <thead style="background-color: #D9D9D9;">
                    <tr>
                      <th scope="col" width="300px">Tipe Anggota</th>
                      <th scope="col">:  Mahasiswa</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Maksimal Jumlah Peminjaman</td>
                      <td>:  1 Buah</td>
                    </tr>
                    <tr>
                      <td>Denda Harian</td>
                      <td>:  5.000</td>
                    </tr>
                    <tr>
                      <td>Lama Pinjam Maksimal</td>
                      <td>:  7 Hari</td>
                    </tr>
                  </tbody>
                </table>
           </table>
         </div>


			</div>
		</div>

		</main>
<script type="text/javascript" src="index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>