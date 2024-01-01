<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') :: {{ config('app.name') }}</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Lora:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        h1, h2, h3, h4, h5, h6 {
            padding: 0;
            margin: 0;
        }

        body {
            background: #fafafa;

            font-family: 'Lora', serif;
            color: #444;
        }

        a {
            color: #c07e88;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }


        article {
            padding: 1rem;
            background: #fff;
            border: solid 1px #ccc;
            border-radius: 10px;
        }

        article header h1 {
            font-family: 'Jost', sans-serif;
            font-size: 2.4rem;
            color: #d48f8b;
        }

        article .body {
            margin: 1.6rem 0;

            font-size: 1.3rem;
        }

        article footer .meta
        {
            font-size: 0.9rem;
            font-style: italic;
            text-align: right;

        }

        .ctx {
            margin: 0 auto;
            width: 50vw;
        }
    </style>
</head>
<body>
    <main>
        <div class="ctx">
            @yield('content')
        </div>
    </main>
</body>
</html>
