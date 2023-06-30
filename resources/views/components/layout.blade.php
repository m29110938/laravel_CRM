<!doctype html>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<title>Laravel From Scratch Blog</title>
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
    <section class="px-6 py-8">
        <div class="container-fluid">
            <div class="row">
                <!-- 側邊欄 -->
                <div class="col-md-3">
                    <section class="px-6 py-8">
                        @include('projects._sidebar')
                    </section>
                </div>
                <!-- 主要內容 -->
                <div class="col-md-9">

                    {{ $slot }}

                </div>
            </div>
        </div>



        @include('projects._footer')


    </section>
    <x-flash />
</body>
