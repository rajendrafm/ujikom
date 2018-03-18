<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;

class ApiController extends Controller
{
	public function listdata()
	{
		return berita::all();
	}
}
