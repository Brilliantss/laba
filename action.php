<?
	$name = $_GET['name'];
	$fname = $_GET['fname'];
    $number = $_GET['number'];
	file_put_contents("data.txt", "{$name}|{$fname}|{$number}");
?>

