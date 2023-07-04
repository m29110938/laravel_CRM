<!doctype html>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<title>Dee Laravel CRM</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>


<body style="font-family: Open Sans, sans-serif">
    <section class="">
        <div class="container-fluid">
            <div class="row vh-100">
                <!-- 側邊欄 -->
                <div class="pr-0 col-md-2 d-flex nav nav-pills flex-column"
                    style="background-color: #3F4B62;color:#9FA5B1">
                    <x-_sidebar />
                </div>
                <!-- 主要內容 -->
                <div class="col-md-10">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                        {{ $slot }}

                        <x-_footer />
                    </div>
                </div>
            </div>
        </div>


    </section>
    <x-flash />
</body>
