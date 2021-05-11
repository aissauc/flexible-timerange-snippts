<?php

$start = new DateTime();
$start->setTime(8, 0, 0);

$end = clone $start;
$end->setTime(18, 0, 0);
/*
the range time i want 
P => mean period [required];
T => mean time
30M => 30 min i want between time
*/
$interval = new DateInterval('PT30M');

$dateRange = new DatePeriod($start, $interval, $end);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="">
		<select name="time" id="time">
			<?php foreach ($dateRange as $date): ?>
				<option value="<?= $date->format('H:i:s'); ?>"><?= $date->format('H:i:s'); ?></option>
			<?php endforeach ?>
		</select>
	</form>
</body>
</html>