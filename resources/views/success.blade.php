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

            <p>We have sent you an e-mail to verify your subscription.</p>

            <div class="bg-green-600 text-white rounded text-center px-5 py-4 mb-5 mt-5">
                <h2 class="font-black mb-2">Verification E-Mail Sent Successfully</h2>
                <p>Please check your inbox!</p>
            </div>

            <p><a href="/" class="text-lg">< Start Again</a></p>
        </div>
    </body>
</html>
