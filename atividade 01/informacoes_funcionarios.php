<?php
$id =$_GET['id'];
$func = file("Funcionarios/$id");
foreach($func as $b){
    echo "$b <br>";
}