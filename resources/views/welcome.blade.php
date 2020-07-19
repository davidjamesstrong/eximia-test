<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Awesome Newsletter</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="h-screen">
        <div class="container mx-auto h-screen flex flex-col justify-center items-center">
            <img src="https://www.eximiacomms.co.uk/wp-content/uploads/2018/11/eximia-logo-1.svg" class="mb-5">

            <h1 class="text-4xl">Awesome Newsletter</h1>

            <p>Please enter your details to subscribe to our awesome newsletter!</p>

            <form method="POST" action="/subscribe" class="flex flex-col mt-5">
                @csrf

                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600">

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600">

                <label for="email_address">E-Mail Address:</label>
                <input type="text" id="email_address" name="email_address" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600">

                <input type="submit" value="Subscribe" class="bg-pink-600 text-white p-2 rounded mt-3">
            </form>

        </div>
    </body>
</html>
