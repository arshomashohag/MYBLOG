<?php
namespace App\Http\Controllers;

use App\Author;
use App\Quote;
use Illuminate\Http\Request;


/**
* 
*/
class ContactController extends Controller
{
	
	function getMessage()
	{
		return view('contact/sayhello');
	}
}


?>