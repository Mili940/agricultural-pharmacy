<?php

namespace App\Http\Controllers;

use App\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\App;


class PDFController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users/{user}')->with('user', $users);
    }


    public function pdf($id)
    {
        $user = User::with('orders')->find($id);
        $orders = $user->orders;

        $pdf = App::make('dompdf.wrapper');
        $pdf = $pdf->loadView('orders.pdf', compact('orders'));

        return $pdf->stream();
    }
}
