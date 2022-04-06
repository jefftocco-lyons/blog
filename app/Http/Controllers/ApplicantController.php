<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function create(){
        return view('apply.create');
    }

    public function store(){
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'phone_number' => ['required'],
            'email' => ['max:255'],
            'home_address' => ['required', 'max:255'],
            'mailing_address' => ['required', 'max:255'],
        ]);

        Applicant::create($attributes);

        return redirect('/')->with('success', "Your application has been submitted.");
    }
}
