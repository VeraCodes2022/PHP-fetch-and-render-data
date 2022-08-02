<?php
$link=mysqli_connect('localhost','root','root','phone','3306') or die(
  mysqli_connect_error()
);
mysqli_set_charset($link, 'utf8');

?> 