<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Applicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('home_address');
            $table->string('mailing_address');
            $table->string('us_work_eligibility');
            $table->string('valid_dot');
            $table->string('desired_work_area');
            $table->string('full_or_part');
            $table->string('availability');
            $table->string('criminal_history');
            $table->string('recent_offenses');
            $table->string('drugtest_op');
            $table->string('relevant_exp');
            $table->string('past_exp');
            $table->string('ref_1');
            $table->string('ref_2');
            $table->string('special_consids');
            $table->string('questions_for_employer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
