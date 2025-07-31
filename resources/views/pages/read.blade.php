<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $story_data['data']['item']['name'] ?? 'Đọc truyện' }} - {{ $current_chapter['chapter_name'] ?? '' }}</title>
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

    <!-- Chapter Header -->
    <div class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-2 md:mb-0">
                    <h1 class="text-xl md:text-2xl font-bold">
                        {{ $story_data['data']['item']['name'] ?? 'Đang tải...' }}
                    </h1>
                    <p class="text-gray-300">{{ $current_chapter['chapter_title'] ?? '' }}</p>
                </div>
                <a href="/truyen-tranh/{{ $story_slug }}" 
                   class="bg-gray-700 hover:bg-gray-600 px-4 py-2 rounded-lg transition flex items-center">
                    <i class="fas fa-list mr-2"></i> Danh sách chương
                </a>
            </div>
        </div>
    </div>

    <!-- Navigation Controls -->
    <div class="bg-white shadow-sm sticky top-16 z-40">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-center space-x-2 md:space-x-4">
                @if($prev_chapter)
                    <a href="/truyen-tranh/{{ $story_slug }}/{{ $prev_chapter['chapter_name'] }}" 
                       class="bg-blue-600 hover:bg-blue-700 text-white px-3 md:px-4 py-2 rounded-lg transition flex items-center text-sm md:text-base">
                        <i class="fas fa-chevron-left mr-1 md:mr-2"></i>
                        <span class="hidden md:inline">Chương trước</span>
                        <span class="md:hidden">Trước</span>
                    </a>
                @else
                    <button class="bg-gray-400 text-white px-3 md:px-4 py-2 rounded-lg cursor-not-allowed flex items-center text-sm md:text-base" disabled>
                        <i class="fas fa-chevron-left mr-1 md:mr-2"></i>
                        <span class="hidden md:inline">Chương trước</span>
                        <span class="md:hidden">Trước</span>
                    </button>
                @endif

                <select class="bg-gray-100 border border-gray-300 rounded-lg px-3 py-2 text-sm md:text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                        onchange="window.location.href=this.value">
                    @if(isset($story_data['data']['item']['chapters'][0]['server_data']))
                        @foreach($story_data['data']['item']['chapters'][0]['server_data'] as $chapter)
                            <option value="/truyen-tranh/{{ $story_slug }}/{{ $chapter['chapter_name'] }}"
                                    {{ isset($current_chapter) && $chapter['chapter_name'] == $current_chapter['chapter_name'] ? 'selected' : '' }}>
                                Chương {{ $chapter['chapter_name'] }}
                            </option>
                        @endforeach
                    @endif
                </select>

                @if($next_chapter)
                    <a href="/truyen-tranh/{{ $story_slug }}/{{ $next_chapter['chapter_name'] }}" 
                       class="bg-blue-600 hover:bg-blue-700 text-white px-3 md:px-4 py-2 rounded-lg transition flex items-center text-sm md:text-base">
                        <span class="hidden md:inline">Chương sau</span>
                        <span class="md:hidden">Sau</span>
                        <i class="fas fa-chevron-right ml-1 md:ml-2"></i>
                    </a>
                @else
                    <button class="bg-gray-400 text-white px-3 md:px-4 py-2 rounded-lg cursor-not-allowed flex items-center text-sm md:text-base" disabled>
                        <span class="hidden md:inline">Chương sau</span>
                        <span class="md:hidden">Sau</span>
                        <i class="fas fa-chevron-right ml-1 md:ml-2"></i>
                    </button>
                @endif
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6">
        <div class="max-w-4xl mx-auto">
            <!-- Chapter Images -->
            <div class="bg-white rounded-lg shadow-lg p-4 md:p-6">
                @if($chapter_content && isset($chapter_content['data']['item']['chapter_image']))
                {{-- @dd($chapter_content['data']['item']['chapter_path']) --}}
                    <div class="space-y-2">
                        @foreach($chapter_content['data']['item']['chapter_image'] as $image)
                            <div class="text-center">
                                <img src="{{'https://sv1.otruyencdn.com/'.$chapter_content['data']['item']['chapter_path'].'/'.$image['image_file'] }}" 
                                     alt="Trang {{ $loop->iteration }}" 
                                     class="max-w-full h-auto mx-auto"
                                     loading="lazy">
                                <p class="text-sm text-gray-500 mt-1">Trang {{ $loop->iteration }}</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-20">
                        <i class="fas fa-exclamation-triangle text-5xl text-yellow-500 mb-4"></i>
                        <p class="text-xl text-gray-700">Không thể tải nội dung chương</p>
                        <p class="text-gray-500 mt-2">Vui lòng thử lại sau hoặc chọn chương khác</p>
                        <a href="/truyen-tranh/{{ $story_slug }}" 
                           class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition">
                            Quay lại danh sách chương
                        </a>
                    </div>
                @endif
            </div>

            <!-- Bottom Navigation -->
            <div class="mt-8 mb-12">
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <div class="flex items-center justify-between">
                        @if($prev_chapter)
                            <a href="/truyen-tranh/{{ $story_slug }}/{{ $prev_chapter['chapter_name'] }}" 
                               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition flex items-center">
                                <i class="fas fa-chevron-left mr-2"></i> Chương trước
                            </a>
                        @else
                            <button class="bg-gray-400 text-white px-4 py-2 rounded-lg cursor-not-allowed flex items-center" disabled>
                                <i class="fas fa-chevron-left mr-2"></i> Chương trước
                            </button>
                        @endif

                        <a href="/truyen-tranh/{{ $story_slug }}" 
                           class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition">
                            <i class="fas fa-list mr-2"></i> Danh sách
                        </a>

                        @if($next_chapter)
                            <a href="/truyen-tranh/{{ $story_slug }}/{{ $next_chapter['chapter_name'] }}" 
                               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition flex items-center">
                                Chương sau <i class="fas fa-chevron-right ml-2"></i>
                            </a>
                        @else
                            <button class="bg-gray-400 text-white px-4 py-2 rounded-lg cursor-not-allowed flex items-center" disabled>
                                Chương sau <i class="fas fa-chevron-right ml-2"></i>
                            </button>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Comments Section (Optional) -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h3 class="text-xl font-bold mb-4">
                    <i class="fas fa-comments mr-2"></i>Bình luận
                </h3>
                <div class="text-center py-8 text-gray-500">
                    <i class="fas fa-comment-slash text-4xl mb-3"></i>
                    <p>Chức năng bình luận đang được phát triển</p>
                </div>
            </div>
        </div>
    </main>

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

        // Mobile menu toggle (if needed)
        document.querySelector('.fa-bars')?.addEventListener('click', function() {
            // Add mobile menu logic here
        });
    </script>
</body>
</html>