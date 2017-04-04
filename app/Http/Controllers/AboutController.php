<?php
namespace App\Http\Controllers;

use App\Author;
use App\Quote;
use Illuminate\Http\Request;


/**
* 
*/
class AboutController extends Controller
{
	
	function getMe()
	{
		return view('about/about');
	}
}


?>