<?php
//index.php
if($_POST['name']=='')
{
echo "Please input some text.";
}else
{
echo "Hello World! ".$_POST['name'];
}