<html>
<header>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-**+*/*" crossorigin="anonymous">
</header>
<?php
$json_string = file_get_contents("http://api.iebc.or.ke/party/?token=a***0");
$data = json_decode($json_string, true);
$array = $data['parties'];
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
