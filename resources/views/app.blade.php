<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ổ Truyện - Đọc truyện tranh online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1802811099891545"
     crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    @include('components/header')

    @include('components/nav')
    <div class="container mx-auto px-4 py-6">
        <div class="flex gap-8">
            
            <!-- Main content -->
            <main class="flex-1">
                @yield('content')
            </main>

            {{-- slidebar --}}
            @yield('slidebar')
            {{-- @include('components/slidebar') --}}
        </div>
    </div>
    @include('components/footer')
    @yield('script')
</body>
</html>