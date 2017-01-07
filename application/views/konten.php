<!-- This one in here is responsive menu for tablet and mobiles -->
		<div class="responsive-navigation visible-sm visible-xs">
			<a href="#" class="menu-toggle-btn">
				<i class="fa fa-bars fa-2x"></i>
			</a>
		<div class="navigation responsive-menu">
			<ul>
				<li class="home"><a href="#templatemo">Beranda</a></li>
				<li class="about"><a href="#about">Categories</a></li>
				<li class="kecam"><a href="#kecam">PRODUCTS</a></li>
				<li class="tanam"><a href="#tanam">CUSTOMERS</a></li>
				<li class="info"><a href="#info">EMPLOYEES</a></li>
				<li class="shippers"><a href="#lahan">SHIPPERS</a></li>
				<li class="suppliers"><a href="#contact">SUPPLIERS</a></li>
			</ul><!-- /.main_menu -->
		</div><!-- /.responsive_menu -->
		</div><!-- /responsive_navigation --> 
		<div id="main-sidebar" class="hidden-xs hidden-sm">
			<div class="logo">
				<center><img src="images/LOGO STMIK1.png" title="WEB DINAMIS LANJUT" />
				<h3>TEKNIK INFORMATIKA</h3>
				<h3>12151495</h3>
				<center>
			</div><!-- /.logo -->
			<div class="navigation">
				<ul class="main-menu">
					<li class="home"><a href="#templatemo">Beranda</a></li>
					<li class="about"><a href="#about">Categories</a></li>
					<li class="kecam"><a href="#kecam">PRODUCTS</a></li>
					<li class="tanam"><a href="#tanam">CUSTOMERS</a></li>
					<li class="info"><a href="#info">EMPLOYEES</a></li>
					<li class="shipper"><a href="#lahan">SHIPPERS</a></li>
					<li class="suppliers"><a href="#contact">SUPPLIERS</a></li>
				</ul>
			</div><!-- /.navigation -->
		</div><!-- /#main-sidebar -->
		<div id="main-content">
			<div id="templatemo">
				<div class="main-slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-caption">
									<h2></h2>
									<p></p>
								</div>
								<img src="images/sarasehan-stmikelrahma.jpeg" alt="Slide 1">
							</li>
							<li>
								<div class="slider-caption">
									<h2></h2>
									<p></p>
								</div>
								<img src="images/Pekan-Taaruf-2016.jpg" alt="Slide 2">
							</li>
							<li>
								<div class="slider-caption">
									<h2></h2>
									<p></p>
								</div>
								<img src="images/diksar20161.jpeg" alt="Slide 3">
							</li>
						</ul>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="welcome-text">
							</div>
						</div>
					</div>
				</div>
			</div><!-- /#sTop -->
			<div class="container-fluid">
				<div id="about" class="section-content">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2>Categories</h2>
							</div>
						</div>
					</div>
					<div class="row our-story">
						
						<div class="col-lg-12">
							<?php
								echo "<table border='1' width='100%'>
			<tr><th>No</th>
			<th>ID Category</th>
			<th>Nama Category</th>
			<th>Deskripsi</th>
			</tr>";
			$no=1;
			foreach($categories as $b)
			{
			echo "<tr>
			<td>$no</td>
			<td>$b->CategoryID</td>
			<td>$b->CategoryName</td>
			<td>$b->Description</td>
			</tr>";
	$no++;}
	echo "</table>";
	?>
	<style type="text/css">
	.table
	{
	float:left;
	margin-left:500px;
	}
	.judul
	{
	float:left;
	font-size:30px;
	color:Blue;
	}
	th
	{
	background-color:green;
	font-color:white;
	}
	tr,td,th{
	padding-left:40px;
	padding-top:20px;}
	</style>
					
						</div>
					</div><!-- /.row -->
				</div><!-- /#about -->
				<div id="kecam" class="section-content">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2>Products</h2>
							</div>
						</div>
					</div>
					<div class="row our-story">
						
						<div class="col-lg-12">
							<?php
								echo "<table border='1' width='100%'>
			<tr><th>No</th>
			<th>ID Product</th>
			<th>Nama Product</th>
			<th>Quantity Per Unit</th>
			</tr>";
			$no=1;
			foreach($products as $b)
			{
			echo "<tr>
			<td>$no</td>
			<td>$b->ProductID</td>
			<td>$b->ProductName</td>
			<td>$b->QuantityPerUnit</td>
			</tr>";
	$no++;}
	echo "</table>";
	?>
	
						</div>
						
					</div>
				</div><!-- /#kecam -->
				<div id="tanam" class="section-content">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2>Customers</h2>
							</div>
						</div>
					</div>
					<div class="row">
						
					</div>
					<div class="row">
						<div class="col-lg-12">
							<?php
								echo "<table border='1' width='100%'>
			<tr><th>No</th>
			<th>ID Customer</th>
			<th>Nama Company</th>
			<th>Contact Name</th>
			</tr>";
			$no=1;
			foreach($customers as $b)
			{
			echo "<tr>
			<td>$no</td>
			<td>$b->CustomerID</td>
			<td>$b->CompanyName</td>
			<td>$b->ContactName</td>
			</tr>";
	$no++;}
	echo "</table>";
	?>
						</div>
					</div>
				</div>
				<div class="container-fluid">
				<div id="info" class="section-content">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2>Employees</h2>
							</div>
						</div>
					</div>
					<div class="row">
						
					</div>
					<div class="row">
						<div class="col-lg-12">
							<?php
								echo "<table border='1' width='100%'>
									<tr><th>No</th>
									<th>ID Employee</th>
									<th>First Name</th>
									<th>Address</th>
									</tr>";
									$no=1;
									foreach($employees as $b)
									{
										echo "<tr>
										<td>$no</td>
										<td>$b->EmployeeID</td>
										<td>$b->FirstName</td>
										<td>$b->Address</td>
										</tr>";
									$no++;}
								echo "</table>";
							?>
					
						</div>
						
					<div id="lahan" class="section-content">
					
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2>Shippers</h2>
							</div>
						</div>
					</div>
					<div class="row" "our-story">
						<div class="col-lg-12">
							<?php
								echo "<table border='1' width='100%'>
									<tr><th>No</th>
									<th>ID Shipper</th>
									<th>Company Name</th>
									<th>Phone</th>
									</tr>";
									$no=1;
									foreach($shippers as $b)
									{
										echo "<tr>
										<td>$no</td>
										<td>$b->ShipperID</td>
										<td>$b->CompanyName</td>
										<td>$b->Phone</td>
										</tr>";
									$no++;}
								echo "</table>";
							?>
							
						</div>
						<div class="col-md-4">
							
						</div>
					</div>
					
				</div>
				<br><br>
				<div id="contact" name="contact" class="section-content">
					
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2>Suppliers</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<?php
								echo "<table border='1' width='100%'>
									<tr><th>No</th>
									<th>ID Supplier</th>
									<th>Company Name</th>
									<th>Contact Name</th>
									<th>Address</th>
									</tr>";
									$no=1;
									foreach($suppliers as $b)
									{
										echo "<tr>
										<td>$no</td>
										<td>$b->SupplierID</td>
										<td>$b->CompanyName</td>
										<td>$b->ContactName</td>
										<td>$b->Address</td>
										</tr>";
									$no++;}
								echo "</table>";
							?>
							
						</div>
						<div class="col-md-4">
							
						</div>
					</div>
					
				</div>
			</div><!-- /.container-fluid -->
			<div class="site-footer">
				<div class="bottom-footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<p class="copyright">Copyright &copy; <?php echo date('Y'); ?> || Web Dinamis Lanjut</p>
							</div>
							<div class="col-md-6 credits">
								<p>Created by Jamhari</p>
								<p>Teknik Informatika || STMIK El Rahma Yogyakarta</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /#main-content -->