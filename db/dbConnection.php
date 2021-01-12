
<?php

if(!class_exists('connection'))
{

class connection
{

var $con,$res;

function getconnection()
{
	$this->con=new mysqli("localhost","root","","healthandtaste");
		
}

function execute($sql)
{
	$this->getconnection();
	$this->res=$this->con->query($sql);
	return $this->res;
}

function msg($ms)
{
	$this->message="<script>alert('" . $ms . "')</script>";
	return $this->message;
}

function redirect($location)
{
	echo '<meta http-equiv="Refresh" Content="0; URL='.$location.'">';
	exit;
}


}

}
