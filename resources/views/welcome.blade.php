<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Encryption Key Generator</title>

    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 sm:items-center py-4 sm:pt-0">

    <div class="max-w-3xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="mt-1 text-4xl font-extrabold text-gray-100 sm:text-5xl sm:tracking-tight lg:text-6xl">
                Laravel Encryption Key Generator</p>
            <p class="max-w-xl mt-5 mx-auto text-xl text-gray-300">This page generates a new Laravel
                encryption key on every page request. Perfect if you're ever in the need of a new key, but
                don't have access to a Laravel installation yourself.</p>
        </div>
        <div class="mt-16">
            <div class="bg-gray-300 rounded-lg p-6">
                <div class="text-center font-mono font-semibold text-gray-900 text-lg lg:text-xl select-all ">
                    <pre class="whitespace-pre-line break-all"><code>{{ $key }}</code></pre>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    <svg class="-mt-px w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24"
                         aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                              clip-rule="evenodd"/>
                    </svg>
                    <a href="https://github.com/stefanzweifel/laravel-encryption-key-generator" class="ml-1 underline">
                        Source
                    </a>
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                        <path
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <a href="https://github.com/sponsors/stefanzweifel" class="ml-1 underline">
                        Sponsor
                    </a>
                </div>
            </div>
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                A project by <a href="https://stefanzweifel.dev" class="ml-1 underline">Stefan Zweifel</a>
            </div>
        </div>
    </div>

</div>
</body>
</html>
