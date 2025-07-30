<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $get_story['data']['item']['name'] ?? 'Chi tiết truyện' }} - Đọc truyện online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <a href="/" class="text-2xl font-bold text-blue-600">
                        <i class="fas fa-book-open mr-2"></i>Truyện Tranh
                    </a>
                </div>
                <nav class="hidden md:flex space-x-6">
                    <a href="/" class="text-gray-700 hover:text-blue-600 transition">Trang chủ</a>
                    <a href="/the-loai" class="text-gray-700 hover:text-blue-600 transition">Thể loại</a>
                    <a href="/danh-sach/truyen-moi" class="text-gray-700 hover:text-blue-600 transition">Truyện mới</a>
                    <a href="/danh-sach/top-truyen" class="text-gray-700 hover:text-blue-600 transition">Top truyện</a>
                </nav>
                <button class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-3">
        <div class="container mx-auto px-4">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-600 hover:text-blue-600">
                    <i class="fas fa-home"></i>
                </a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-700">{{ $get_story['data']['item']['name'] ?? 'Truyện' }}</span>
            </nav>
        </div>
    </div>

    @if(isset($get_story['data']['item']))
    @php
        $story = $get_story['data']['item'];
        $seoOnPage = $get_story['data']['seoOnPage'] ?? [];
    @endphp

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Column - Story Info -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <!-- Story Header -->
                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- Thumbnail -->
                        <div class="flex-shrink-0">
                            <img src="https://img.otruyenapi.com/uploads/comics/{{ $story['thumb_url'] }}" 
                                 alt="{{ $story['name'] }}"
                                 class="w-48 h-64 object-cover rounded-lg shadow-md">
                        </div>
                        
                        <!-- Story Info -->
                        <div class="flex-1">
                            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">
                                {{ $story['name'] }}
                            </h1>
                            
                            @if(isset($story['origin_name']) && !empty($story['origin_name']))
                            <p class="text-gray-600 mb-3 italic">
                                @if(is_array($story['origin_name']))
                                    {{ implode(', ', $story['origin_name']) }}
                                @else
                                    {{ $story['origin_name'] }}
                                @endif
                            </p>
                            @endif

                            <div class="space-y-2 text-sm">
                                <div class="flex items-center">
                                    <span class="text-gray-500 w-24">Tác giả:</span>
                                    <span class="font-medium">
                                        @if(isset($story['author']))
                                            @if(is_array($story['author']))
                                                {{ implode(', ', $story['author']) }}
                                            @else
                                                {{ $story['author'] }}
                                            @endif
                                        @else
                                            Đang cập nhật
                                        @endif
                                    </span>
                                </div>
                                
                                <div class="flex items-center">
                                    <span class="text-gray-500 w-24">Tình trạng:</span>
                                    <span class="font-medium {{ $story['status'] == 'completed' ? 'text-green-600' : 'text-blue-600' }}">
                                        {{ $story['status'] == 'completed' ? 'Hoàn thành' : 'Đang tiến hành' }}
                                    </span>
                                </div>
                                
                                <div class="flex items-center">
                                    <span class="text-gray-500 w-24">Lượt xem:</span>
                                    <span class="font-medium">{{ number_format($seoOnPage['og_url_visit_count'] ?? 0) }}</span>
                                </div>
                                
                                <div class="flex items-center">
                                    <span class="text-gray-500 w-24">Cập nhật:</span>
                                    <span class="font-medium">
                                        @if(isset($story['updatedAt']))
                                            @if(is_array($story['updatedAt']))
                                                {{ $story['updatedAt']['date'] ?? 'N/A' }}
                                            @else
                                                {{ $story['updatedAt'] }}
                                            @endif
                                        @else
                                            N/A
                                        @endif
                                    </span>
                                </div>
                            </div>

                            <!-- Categories -->
                            @if(isset($story['category']) && count($story['category']) > 0)
                            <div class="mt-4">
                                <span class="text-gray-500 text-sm">Thể loại:</span>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    @foreach($story['category'] as $category)
                                    <a href="/the-loai/{{ $category['slug'] }}" 
                                       class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm hover:bg-blue-200 transition">
                                        {{ $category['name'] }}
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            <!-- Action Buttons -->
                            <div class="flex flex-wrap gap-3 mt-6">
                                @if(isset($story['chapters'][0]['server_data']) && count($story['chapters'][0]['server_data']) > 0)
                                <a href="/truyen-tranh/{{ $story['slug'] }}/{{ $story['chapters'][0]['server_data'][count($story['chapters'][0]['server_data']) - 1]['chapter_name'] }}" 
                                   class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg transition flex items-center">
                                    <i class="fas fa-book-reader mr-2"></i> Đọc từ đầu
                                </a>
                                
                                <a href="/truyen-tranh/{{ $story['slug'] }}/{{ $story['chapters'][0]['server_data'][0]['chapter_name'] }}" 
                                   class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition flex items-center">
                                    <i class="fas fa-forward mr-2"></i> Đọc mới nhất
                                </a>
                                @endif
                                
                                <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg transition flex items-center">
                                    <i class="fas fa-heart mr-2"></i> Yêu thích
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    @if(isset($story['content']) && !empty($story['content']))
                    <div class="mt-6 pt-6 border-t">
                        <h2 class="text-xl font-bold mb-3">
                            <i class="fas fa-info-circle mr-2"></i>Nội dung truyện
                        </h2>
                        <div class="text-gray-700 leading-relaxed prose max-w-none">
                            @if(is_array($story['content']))
                                {{ implode(' ', $story['content']) }}
                            @else
                                {!! nl2br(e($story['content'])) !!}
                            @endif
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Chapters List -->
                <div class="bg-white rounded-lg shadow-lg p-6 mt-6">
                    <h2 class="text-xl font-bold mb-4">
                        <i class="fas fa-list mr-2"></i>Danh sách chương
                    </h2>
                    
                    @if(isset($story['chapters'][0]['server_data']) && count($story['chapters'][0]['server_data']) > 0)
                    <div class="max-h-96 overflow-y-auto">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            @foreach($story['chapters'][0]['server_data'] as $chapter)
                            <a href="/truyen-tranh/{{ $story['slug'] }}/{{ $chapter['chapter_name'] }}" 
                               class="flex items-center justify-between p-3 rounded hover:bg-gray-100 transition group">
                                <span class="text-gray-700 group-hover:text-blue-600">
                                    {{ $chapter['chapter_title'] }}
                                </span>
                                <span class="text-xs text-gray-500">
                                    {{ $chapter['chapter_api_data'] ? 'Có sẵn' : 'Chưa có' }}
                                </span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-inbox text-4xl mb-3"></i>
                        <p>Chưa có chương nào được cập nhật</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Right Column - Sidebar -->
            <div class="lg:col-span-1">
                <!-- Related Stories -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-bold mb-4">
                        <i class="fas fa-book mr-2"></i>Truyện liên quan
                    </h3>
                    <div class="space-y-4">
                        <!-- Placeholder for related stories -->
                        <div class="text-center py-8 text-gray-500">
                            <i class="fas fa-spinner fa-spin text-3xl mb-3"></i>
                            <p class="text-sm">Đang tải truyện liên quan...</p>
                        </div>
                    </div>
                </div>

                <!-- Top Stories -->
                <div class="bg-white rounded-lg shadow-lg p-6 mt-6">
                    <h3 class="text-lg font-bold mb-4">
                        <i class="fas fa-fire mr-2"></i>Truyện hot
                    </h3>
                    <div class="space-y-4">
                        <!-- Placeholder for top stories -->
                        <div class="text-center py-8 text-gray-500">
                            <i class="fas fa-spinner fa-spin text-3xl mb-3"></i>
                            <p class="text-sm">Đang tải truyện hot...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @else
    <!-- Error State -->
    <main class="container mx-auto px-4 py-12">
        <div class="text-center">
            <i class="fas fa-exclamation-triangle text-6xl text-yellow-500 mb-4"></i>
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Không tìm thấy truyện</h2>
            <p class="text-gray-600 mb-6">Truyện bạn tìm kiếm không tồn tại hoặc đã bị xóa.</p>
            <a href="/" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition inline-block">
                <i class="fas fa-home mr-2"></i>Về trang chủ
            </a>
        </div>
    </main>
    @endif

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Về chúng tôi</h3>
                    <p class="text-gray-300">Website đọc truyện tranh online miễn phí, cập nhật liên tục các bộ truyện mới nhất.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liên kết nhanh</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-white transition">Trang chủ</a></li>
                        <li><a href="/the-loai" class="text-gray-300 hover:text-white transition">Thể loại</a></li>
                        <li><a href="/danh-sach/truyen-moi" class="text-gray-300 hover:text-white transition">Truyện mới</a></li>
                        <li><a href="/danh-sach/top-truyen" class="text-gray-300 hover:text-white transition">Top truyện</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Theo dõi chúng tôi</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition text-2xl">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition text-2xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition text-2xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-300">
                <p>&copy; 2024 Truyện Tranh Online. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="fixed bottom-8 right-8 bg-blue-600 hover:bg-blue-700 text-white w-12 h-12 rounded-full shadow-lg transition-all duration-300 opacity-0" 
            id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Show/hide back to top button
        window.addEventListener('scroll', function() {
            const backToTop = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTop.classList.remove('opacity-0');
                backToTop.classList.add('opacity-100');
            } else {
                backToTop.classList.remove('opacity-100');
                backToTop.classList.add('opacity-0');
            }
        });
    </script>
</body>
</html>