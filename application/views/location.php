<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>test</title>
</head>
<body>
  <form method="post" action="<?php echo base_url();?>location/get_test_city">
<input type="text" name="id">
<input type="submit" name="submit" value="submit"></form>
<form method="post" action="<?php echo base_url();?>location/get_test_state">
<input type="text" name="id">
<input type="submit" name="submit" value="submit"></form>
</body>
</html>