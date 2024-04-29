<?php

require __DIR__ . '../../utils.php';

$dateString = '15/12/2004 3:30PM';

// $date = new DateTime(str_replace('/', '-', $dateString));
$date = DateTime::createFromFormat('d/m/Y g:iA', $dateString)->setTime(0, 0);
$date2 = DateTime::createFromFormat('d/m/Y g:iA', '14/12/2003 5:30PM')->setTime(1, 0);
$interval = new DateInterval('P3M2D');

$date->add($interval);

echo $date->format('d/m/Y g:iA');

$date->sub($interval);

echo $date->format('d/m/Y g:iA');

// dump($date->diff($date2));
// echo $date->diff($date2)->format('')

// dump($date > $date2);
// dump($date < $date2);
// dump($date == $date2);
// dump($date <=> $date2);

// $date = new DateTime('now', new DateTimeZone('Europe/Kyiv'));

// // dump($date);

// $date->setDate(2021, 4, 22)->setTime(4, 55);

// echo $date->format('m/d/Y g:i A') . PHP_EOL;
