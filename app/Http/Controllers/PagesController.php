<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
   	public function index()
   	{
   		return redirect()->action('ArticlesController@index');
   	}

}
