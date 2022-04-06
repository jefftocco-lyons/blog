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
            'us_work_eligibility' => ['required', 'max:255'],
            'valid_dot' => ['required', 'max:255'],
            'desired_work_area' => ['required', 'max:255'],
            'full_or_part' => ['required', 'max:255'],
            'availability' => ['required', 'max:255'],
            'criminal_history' => ['required', 'max:255'],
            'recent_offenses' => ['max:255'],
            'drugtest_op' => ['required', 'max:255'],
            'relevant_exp' => ['required', 'max:255'],
            'past_exp' => ['max: 500'],
            'ref_1' => ['max:255'],
            'ref_2' => ['max:255'],
            'special_consids' => ['max: 255', 'required'],
            'questions_for_employer' => ['max:255']
        ]);

        Applicant::create($attributes);

        return redirect('/')->with('success', "Your application has been submitted.");
    }
}
