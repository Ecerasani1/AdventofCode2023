<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
$my_string = file_get_contents('list.txt');
$my_array = explode("\n", $my_string);

$totalSum = 0; 

foreach ($my_array as $value) {
    $numbers = preg_replace("/[^0-9]/", '', $value);

    if ($numbers !== '') {
        $first_digit = substr($numbers, 0, 1);
        $last_digit = substr($numbers, -1);

        $totalSum += $first_digit . $last_digit; 
    }
}

echo $totalSum; 



?> 
