<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pemira;

class PublicController extends Controller
{
  public function home()
  {
    $pemira = new Pemira;
    $pemiras = $pemira->get();

    return view('public/home', [ 'pemiras' => $pemiras]);
  }

  public function details($id)
  {
    $pemira = Pemira::find($id);

    return view('public/details', ['pemira' => $pemira]);
  }
}
