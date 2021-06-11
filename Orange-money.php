<?php
		if ($_POST['montant'] > 0 && $_POST['montant'] <=1000)
		{
			echo "Frais est egal: " 25;
			total = ($_POST['montant']) + 25 ;

echo "Le montant tOtal est ".$total		}
		if ($_POST['montant'] > 1001 && $_POST['montant'] <=5000)
		{
			echo "Frais est egal: " 180;
			total = ($_POST['montant'])+(180);

echo "Le montant tOtal est ".$total		}
		if ($_POST['montant'] > 5001 && $_POST['montant'] <=10000)
		{
			echo "Frais est egal: " 350;
			total = ($_POST['montant'])+(350);

echo "Le montant tOtal est ".$total		}
		if ($_POST['montant'] > 10001 && $_POST['montant'] <=50000)
		{
			echo "Frais est egal: " 700;
			total = ($_POST['montant'])+(700);

echo "Le montant tOtal est ".$total		}
		if ($_POST['montant'] >50001 && $_POST['montant'] <=100000)
		{
			echo "Frais est egal: " 1400;
			total = ($_POST['montant'])+(1400);
			echo "Le montant tOtal est ".$total
		}
		if ($_POST['montant'] > 100001 && $_POST['montant'] <=500000)
		{
			echo "Frais est egal: " 2800;
			total = ($_POST['montant'])+(2800);
			echo "Le montant tOtal est ".$total
		}
		if ($_POST['montant'] > 500001 && $_POST['montant'] <=1000000)
		{
			echo "Frais est egal: " 5000;
			total = ($_POST['montant'])+(5000);
			echo "Le montant tOtal est ".$total
		}
?>