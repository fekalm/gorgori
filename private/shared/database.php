<?php
// database credentials
$DB_SERVER = "localhost";
$DB_USER = "root";
$DB_PASSWORD="";
$DB_NAME = "CHMS";

/* 
$DBC= new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD); */

/* $sql = 
" CREATE DATABASE IF NOT exists $DB_NAME;";


if($DBC->query($sql)===TRUE)
    { */
        
        $DBC= new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);
        global $DBC;
   /*  }
else
    {
        echo "error: ".$DBC->error;
    }
$sql = " CREATE TABLE IF NOT exists members( 
        `id` INT(10) NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(20),
        `password` VARCHAR(20),
         PRIMARY KEY(`id`)); ";
//$sql = " DROP TABLE members"; */

/*

//this has been added to modify the first table to hokd more information

$sql = "ALTER TABLE members ADD COLUMN `christ_name` varchar(20)  AFTER `name`;";
 $sql = "ALTER TABLE members ADD COLUMN `age` INT  AFTER `christ_name`,
                            ADD COLUMN `gender` TINYINT,
                            ADD COLUMN `phone` INT,
                            ADD COLUMN `address` VARCHAR(32),
                            ADD COLUMN `email` VARCHAR(20),
                            ADD COLUMN `martial_stat` INT,
                            ADD COLUMN `clerical_pos` INT,
                            ADD COLUMN `reg_date` DATE;";
 $sql = "ALTER TABLE members ADD COLUMN `status` TINYINT ;";
 if($DBC->query($sql))
{
   echo "created table";
}
else{
    echo "error: ".$DBC->error;
}



$sql = " INSERT INTO members(`name`,`password`) VALUES('estifanos','123')";
if($DBC->query($sql))
{
    echo " data added succesfully ";
}
else{
    echo "error: ".$DBC->error;
} */
/* $sql = " SELECT * FROM members ORDER BY `id` ASC";
$result = $DBC->query($sql); */
/* if($result)
{
   for($i=0;$i<mysqli_num_rows($result);$i++)
   {
       $x = mysqli_fetch_assoc($result);
       echo $x['name']."<br/>";
   }
}
else{
    echo "error: ".$DBC->error;
} */
//using while loop

/* while($x = mysqli_fetch_assoc($result))
{
    //echo $x['name']."<br/>";  
} */
?>