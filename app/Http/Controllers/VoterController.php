<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemira;

class VoterController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth');
    // }
    public function vote()
    {
      if (\Auth::check() && \Auth::user()->role == 'member'){
        $pemira = new Pemira;
        $pemiras = $pemira->get();

        return view('voter/vote', ['pemiras' => $pemiras]);
      }
      return redirect('/');
    }

    public function storeVote(Request $request)
    {

    }
}
