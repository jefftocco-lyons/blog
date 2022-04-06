<x-layout>
    <section class="py-2">
        <main class="max-w-xl mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Bullsnake Inc Application</h1>
            <p class="my-2 text-xs">It is our policy to comply with all applicable state and federal laws prohibiting discrimination in employment based on race, age, color, sex,
                religion, national origin, disability or other protected classifications.
                Please carefully read and answer all questions to the best of your ability. You will not be considered for employment if you fail to answer all of the required(*) questions
                on this application. </p>
            <form method="Post" action="apply" class="mt-5 mx-auto" style="height: 800px; overflow-y:auto">
                @csrf
                <div class="flex flex-wrap -mx-3 mb">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">First Name*</label>
                        <x-form.input name="first_name" type="first_name" placeholder="First Name"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Last Name*</label>
                        <x-form.input name="last_name" type="last_name" placeholder="Last Name" />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Phone Number*</label>
                        <x-form.input name="phone_number" type="phone_number" placeholder="ex. (111)-222-3333"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                        <x-form.input name="email" type="email" placeholder="ex. joe@example.com"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Home Address</label>
                        <x-form.input name="home_address" type="home_address" placeholder="ex. 800 White St, Boston MA 02112"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Mailing Address*</label>
                        <x-form.input name="mailing_address" type="mailing_address" placeholder="ex. 800 White St, Boston MA 02112"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Do you have a valid DOT medical card?</label>
                        <x-form.input name="valid_dot" type="valid_dot" placeholder="Y/N"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Are you eligible to work in the United States?</label>
                        <x-form.input name="us_work_eligibility" type="us_work_eligibility" placeholder="Y/N"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Which area are you applying for?</label>
                        <x-form.input name="desired_work_area" type="desirec_work_area" placeholder="ex. Baton Rouge, LA"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Full or Part Time?</label>
                        <x-form.input name="full_or_part" type="full_or_part" placeholder=""/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Do you have any specific recurring times you are unavailable?* (This information is required to determine coverage needs should they arise.)</label>
                        <x-form.textarea name="availability" type="availability" placeholder="ex. 800 White St, Boston MA 02112"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Do you have any criminal history that would show up on a background check?*</label>
                        <x-form.textarea name="criminal_history" type="criminal_history" placeholder="ex. 800 White St, Boston MA 02112"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Have you had any driving offenses within the past five years?</label>
                        <x-form.textarea name="recent_offenses" type="recent_offenses" placeholder="ex. 800 White St, Boston MA 02112"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Would you consent to a drug test prior to employment?</label>
                        <x-form.input name="drugtest_op" type="drugtest_op" placeholder="Y/N"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">How many years of professional driving experience do you have?</label>
                        <x-form.input name="relevant_exp" type="relevant_exp" placeholder="One-Two, Three-Five, Five+"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Please list any relevant (USPS contracting or otherwise professional driving) experience, including dates worked.</label>
                        <x-form.textarea name="past_exp" type="past_exp" placeholder=""/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Past Employer Reference 1</label>
                        <x-form.input name="ref_1" type="ref_1" placeholder="Name, Title, Phone"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Past Employer Reference 2</label>
                        <x-form.input name="ref_2" type="ref_2" placeholder="Name, Title, Phone"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Do you have any special considerations you would like us to be aware of?</label>
                        <x-form.textarea name="special_consids" type="special_consids" placeholder=""/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Do you have any questions for us as a potential employer that you would like answered during a phone screening or email?</label>
                        <x-form.textarea name="questions_for_employer" type="questions_for_employer" placeholder=""/>
                    </div>
                </div>
                </div>
                <p class="text-xs py-3">By pressing "Submit" you are agreeing to have your information recorded and reviewed in order to be considered for employment, as well as having your driving record pulled for review.</p>
                <p class="text-xs py-3">After a successful submission, you will be redirected to the blog page. Our HR team will continue correspondence via email/phone using the information you provided to discuss the next steps, typically within 5-7 business days.</p>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                </div>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </main>
    </section>
</x-layout>
