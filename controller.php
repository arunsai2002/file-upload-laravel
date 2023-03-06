<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller
{
   
public function index(){
    return view('index');
}
    public function uploadFile(Request $request)
{
    $validatedData = $request->validate([
        'file' => 'required|file|mimes:pdf,doc,docx'
    ]);
    return $request->file('file')->store('storage/app/public');
    
}



}
