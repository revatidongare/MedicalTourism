<?php
    if(isset($_GET['q'])){
    	$did = $_GET['q'];
    }      
?>


 <?php 
$query="SELECT * FROM `doctor_master` WHERE `id`= $did";
     $stmt=$conn->prepare($query);
     $stmt->execute();
     $row=$stmt->fetch();
?>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">	
	<div class="cbp-l-member-img">
		<img src="img/team/<?php echo $row['image'];?>" alt="">
	</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="cbp-l-member-info">
	<div class="cbp-l-member-name"><b><?php echo $row['name'];?></b></div>
	<div class="cbp-l-member-position">Psychiatrist</div>
	<div class="cbp-l-member-qualification">DPM, DM, MBBS</div>
	<div class="cbp-l-member-locality">Secbad , Hyderabad</div>
	<div class="cbp-l-member-consultant in">Apollo Hospitals Secunderabad, Secbad</div>
	<div class="cbp-l-member-Experience">30 years</div>
	<div class="cbp-l-member-desc">
		<?php echo $row['description']; ?>
	</div>
</div>

</div>
