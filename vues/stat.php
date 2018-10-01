
<!--  CSS -->
<link rel="stylesheet" href="./css/statistiquesFrames.css">

<?php
require_once('/modele/DonDAO.class.php');
require_once('/modele/UserDAO.class.php');
$total=$j=$e=$b="";
$count= DonDAO::countAllDons();
$jour= DonDAO::findMoyenDonsJour();
$e=UserDAO::countAllEmployes();
$b=UserDAO::countAllBenevoles();
if($count!=NULL && $jour!=NULL){
      $total=$count;
      $j=$jour;
}
   
?>
<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4 text-center">
					<h1 class="display-4">Statistiques 2017</h1>
					<hr>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
</div>
<div id="back">
<div class="container-fluid" style="background-color: #f5f5f5;">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-5">
				<div class="row">
					<div class="wrapper">
						<div class="counter col_fourth text-center">
							<i class="fa fa-heart fa-2x"></i>
							<h2 class="display-4">	  <?php echo $total?></h2>
							<p class="count-text ">Total de dons</p>
						</div>
						<div class="counter col_fourth end text-center">
							<i class="fa fa-th-large fa-2x"></i>
							<h2 class="display-4"><?php echo $j?></td></h2>
							<p class="count-text ">Moyen par jour</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="wrapper">
						<div class="counter col_fourth text-center">
							<i class="fa fa-th-list fa-2x"></i>
							<h2 class="display-4">	  <?php echo $b?></h2>
							<p class="count-text ">Total de bénévoles</p>
						</div>
						<div class="counter col_fourth end text-center">
							<i class="fa fa-user fa-2x"></i>
							<h2 class="display-4"><?php echo $e?></td></h2>
							<p class="count-text ">Total d'employes</p>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-5">
				<div id="piechart" style="width: 900px; height: 500px;"></div>
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php
 $con = mysqli_connect('localhost','root','','logidons');
?>
<!-- Script PIECHART-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {

 var data = google.visualization.arrayToDataTable([
 ['status', 'type_don'],
 
 <?php 
 //$query = "SELECT count(ip) AS count, browser FROM visitors GROUP BY browser";
 $query = "SELECT count(type_don) AS don, status FROM don GROUP BY status";
 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['status']."',".$row['don']."],";
 
 }
 ?>
 
 ]);

 var options = {
 title: 'Cantité de dons ',
 <!--  legend: 'none' -->
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart'));
 
 chart.draw(data, options);

 }
 </script>