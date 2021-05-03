<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\Gate;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::check()) {
            $user = User::find(Auth::User()->id);
            if (Gate::allows('admin', $user)) {
                return redirect(route('admin'));
            } else {
                $products = Product::orderBy('created_at', 'desc')->limit(6)->get();
                return view('home', compact('products'));
            }
        } else {
            $products = Product::orderBy('created_at', 'desc')->limit(6)->get();
            return view('home', compact('products'));
        }
    }
}
