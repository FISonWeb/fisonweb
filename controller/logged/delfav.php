<?php
//add and delete to favourite
//favourite module
if (!isset($_SESSION)) session_start();
include_once('model/favourite.php');
class delfav_controller
{
var $bil=1;
var $rows ;
public function __construct()  {}

public function main()
{
	//class function
	
	$function = array();
	$function[0][0] = "deletefavourite";  //name of the function
	$function[0][1] = "true";  //return of a function as a variable

	return $function;
}
public function get_num_func()
{	
	return $this->bil;
}
//user define view
public function view()
{
	//user define view file
	return "addtofav.php";
}
public function view_option()
{
	//include user define view or replace default view
	//option included, excluded
	return "excluded";
}

public function deletefavourite()
{
	$this->favourite = new favourite();
	 $message = $this->favourite->deletefavourite($_SESSION['userid'],$_GET['com']);
	 return $message;
}

}
?>