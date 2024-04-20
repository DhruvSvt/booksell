<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use app\Http\Controllers\EnqueryController;
use App\Models\Enquery;

class EnqueryController extends Controller
{
    public function index()
    {
        return view('visitors.contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $brand = new Enquery;
        $brand->name = $request->name;
        $brand->email = $request->email;
        $brand->message = $request->message;
        $brand->save();

        return back()->with('success', 'Your Query Submitted Successfully');
    }
}
