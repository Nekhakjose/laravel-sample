@if (session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif

<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/">
            <img src="/Images/logo(2).png" alt="Logo"/>
        </a>
    </div>
    <div class="mt-8 md:mt-0">
        <a href="/" class="text-xs font-bold uppercase">Home Page</a>
    </div>
    </nav>    