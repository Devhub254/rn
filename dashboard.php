
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<!-- <li><a href="#">
					<em class="fa fa-home"></em>
				</a></li> 
				<li class="active">Dashboard</li> -->
			</ol>
		</div><!--/.row-->
		
		<!-- <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>/.row -->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-bed color-blue"></em>
							<div class="large"><?php include 'counters/room-count.php'?></div>
							<div class="text-muted">Total Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-bookmark color-orange"></em>
							<div class="large"><?php include 'counters/reserve-count.php'?></div>
							<div class="text-muted">Reservations</div>
						</div>
					</div>
				</div>
			
			

			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-reorder color-red"></em>
							<div class="large"><?php include 'counters/bookedroom-count.php'?></div>
							<div class="text-muted">Reserved</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-check-circle color-green"></em>
							<div class="large"><?php include 'counters/avrooms-count.php'?></div>
							<div class="text-muted">Available Rooms</div>
						</div>
					</div>
				</div>
		
				
				</div>
				
		</div>
		

	

		
</body>
</html>