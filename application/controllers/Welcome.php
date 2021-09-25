<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo "<h1>Perkenalkan</h1>";
		echo "Nama : Muhammad Fauzan Rahmat<br>
		Tanggal Lahir : 19 Oktober 2001 <br>
		Tempat Tinggal : Bekasi <br>
		Motivasi Kuliah : Ingin mempunyai gelar supaya mempermudah mencari kerja";
		
	
	}
}
