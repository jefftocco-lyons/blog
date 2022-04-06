<x-layout>
    <section class="py-2">
        <main class="max-w-xl mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Bullsnake Inc Application</h1>
            <p class="my-2 text-xs">It is our policy to comply with all applicable state and federal laws prohibiting discrimination in employment based on race, age, color, sex,
                religion, national origin, disability or other protected classifications.
                Please carefully read and answer all questions to the best of your ability. You will not be considered for employment if you fail to answer all of the required(*) questions
                on this application. </p>
            <form method="Post" action="apply" class="mt-5">
                @csrf
                <div class="flex flex-wrap -mx-3 mb">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">First Name</label>
                        <x-form.input name="first_name" type="first_name" placeholder="First Name"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Last Name</label>
                        <x-form.input name="last_name" type="last_name" placeholder="Last Name" />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Phone Number</label>
                        <x-form.input name="phone_number" type="phone_number" placeholder="(111)-222-3333"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                        <x-form.input name="email" type="email" placeholder="joe@example.com"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Home Address</label>
                        <x-form.input name="home_address" type="home_address" placeholder="800 White St, Boston MA 02112"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Mailing Address</label>
                        <x-form.input name="mailing_address" type="mailing_address" placeholder="800 White St, Boston MA 02112"/>
                    </div>
                </div>
                </div>
                <p class="text-xs py-3">By pressing "Submit" you are agreeing to have your information recorded and reviewed in order to be considered for employment, as well as having a driving record pulled.</p>
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
