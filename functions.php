<?php 
	function number_format_cost($cost) {
		if ($cost <= 1000) {
			echo "<span class='lot__cost'>" . $cost . ' ' . '₽' . "</span>";
		} elseif ($cost > 1000) {
			echo "<span class='lot__cost'>" . $number_format	= number_format($cost, 0, '', ' ') . ' ' . '₽' . "</span>";
		}
	}	