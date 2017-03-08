
<html>
<header>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</header>
<?php
$json_string = file_get_contents("http://api.iebc.or.ke/candidate/?contest=&token=afd3877583a07e5b77e447332bb98a80");
$data = json_decode($json_string, true);
$array = $data['candidates'];
?>
<?php if (count($array) > 0): ?>
<table class="table table-stripped table-condensed table-hover">
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($array))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($array as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>
</html>


<html>
<header>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</header>
<?php
$json_string = file_get_contents("http://api.iebc.or.ke/pollingstation/?token=8535a3fabceedc9fdc62d9dceb73c568&key=20bf97831e63df28f68d7a4f7f10efeac1914c085c06244e7e391c1169a1792a");
$data = json_decode($json_string, true);
$array = $data['polling_stations'];
?>
<?php if (count($array) > 0): ?>
<table class="table table-stripped table-condensed table-hover">
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($array))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($array as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>
</html?
