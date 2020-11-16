<?php
header('Content-Type: text/html; charset=ISO-8859-1');


if($_REQUEST['codi'] == 1){
    echo include("texte1.txt");
}
if($_REQUEST['codi'] == 2 ){
    echo include("texte2.txt");
}