<?php
require 'config/koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM testimoni WHERE id=$id");

header("Location: admin/testimoni.php");