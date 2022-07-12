<x-eduka::site title="{{ config('app.name') }}">
    <x-eduka::head>
        <link rel="stylesheet" type="text/css" href="/vendor/dev/css/app.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <!-- /Favicon -->
    </x-eduka::head>
    <x-eduka::body class="font-primary bg-repeat antialised bg-background-900">
        <x-eduka::responsive-breakpoints></x-eduka::responsive-breakpoints>

        <div class="h-screen flex justify-center">
            <div class="w-2/5 flex flex-col justify-center">
            <img class="w-2/6 mx-auto" src="/vendor/dev/images/hero.png">
            <p class="text-primary-500 text-2xl font-bold text-center">BRUNO FALCÃO</p>
            <p class="text-white text-2xl mt-6 leading-9">Hi there 👋! I'm Bruno, and I am passioned by Laravel since the old 5.x version, some years ago.
                You can know me better at <a href="https://twitter.com/brunocfalcao">@brunocfalcao</a> where I often tweet about Laravel, and
                you can see my new videos in my new <a href="#">Youtube channel</a>.</p>
            <p class="text-white text-2xl mt-6 leading-9">I also made some nice Laravel projects and courses that you can find out below 👇</p>
            <p class="text-white text-2xl mt-6 leading-9">www.masteringnova.com</p>
            </div>
        </div>

        <script type="text/javascript" src="/vendor/nova-advanced-ui/js/retina.min.js"></script>
    </x-eduka::body>
</x-eduka::site>