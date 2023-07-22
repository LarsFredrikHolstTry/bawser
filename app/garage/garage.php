<?php

include 'functions/cars.php';

$cars = $db->run("SELECT * FROM garage WHERE GA_acc_id = ".$_SESSION['ID'])->fetchAll();

?>
<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
        <iconify-icon class="iconify-for-header" icon="mdi:garage-variant"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			Garasje
		</div>
	</div>
	
	<div class="df fdc fg-10 main_content_context">
		<div class="tac py-1 text-dark">
			Her ser du en oversikt over dine biler! Disse kan selges for penger
		</div>

    <?php

    if(!$cars){
        echo alert('default', 'Du har ingen biler i din garasje');
    } else {

    ?>
    <table class="table">
        <tr class="table-header">
            <th>Bil</th>
            <th>Verdi</th>
        </tr>
        <?php

        $i = 0;

        foreach($cars as $car){

            $i++;

            ?>
            <tr>
                <td><?= $carsArray[$car['GA_car_id']]['car_model'] ?></td>
                <td><?= number($carsArray[$car['GA_car_id']]['value']) ?> kr</td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
?>
	</div>
</div>
