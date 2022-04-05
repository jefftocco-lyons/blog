<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <p>Creating an account will let you leave comments on posts.</p>
            <form method="Post" action="register" class="mt-10">
                @csrf
                <x-form.input name="name" type="name"/>
                <x-form.input name="username" type="username"/>
                <x-form.input name="email" type="email"/>
                <x-form.input name="password" type="password"/>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                </div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 text-xs">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
            </form>
        </main>
    </section>
</x-layout>
