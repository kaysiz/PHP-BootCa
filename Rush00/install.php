<?php
include './database.php';
$sql2 = "CREATE TABLE IF NOT EXISTS users ("
. "id int NOT NULL AUTO_INCREMENT,"
. "name varchar(100),"
. "gender varchar(50),"
. "email varchar(100),"
. "phone varchar(100),"
. "occupation varchar(100),"
. "city varchar(150),"
. "country varchar(150),"
. "profile_pic varchar(100),"
. "profile_pic_url varchar(100),"
. "password varchar(1000),"
. "status varchar(50),"
. "confirmation_code varchar(1000),"
. "fb_id varchar(150),"
. "PRIMARY KEY (id));";
try {
	$conn = new PDO("mysql:host=$DB_DSN;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec($sql2);
	echo "Users table created successfully <br>";
} catch (PDOException $e) {
	echo "error: " . $sql2 . "<br>" . $e->getMessage();
}

$conn = null;
?>