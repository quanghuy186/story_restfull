<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ổ Truyện - Đọc truyện tranh online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-3">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-book text-white text-xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-blue-600">Ổ Truyện</h1>
                </div>
                
                <!-- Search -->
                <div class="flex-1 max-w-xl mx-8">
                    <div class="relative">
                        <input type="text" placeholder="Tìm kiếm truyện..." 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                        <button class="absolute right-3 top-2.5 text-gray-400 hover:text-blue-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                
                <!-- User menu -->
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-blue-500">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="text-gray-600 hover:text-blue-500">
                        <i class="fas fa-bookmark"></i>
                    </button>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        Đăng nhập
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-blue-600 text-white">
        <div class="container mx-auto px-4">
            <div class="flex items-center space-x-8 py-3">
                <a href="#" class="hover:text-blue-200 flex items-center space-x-1">
                    <i class="fas fa-home"></i>
                    <span>Trang chủ</span>
                </a>
                <a href="{{route('categories')}}" class="hover:text-blue-200">Thể loại</a>
                <a href="#" class="hover:text-blue-200">Top truyện</a>
                <a href="#" class="hover:text-blue-200">Truyện mới</a>
                <a href="#" class="hover:text-blue-200">Hoàn thành</a>
                <a href="#" class="hover:text-blue-200">Theo dõi</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-6">
        <div class="flex gap-8">
            <!-- Main content -->
            <main class="flex-1">
                <!-- Hot manga slider -->
                <section class="mb-8">
                    <div class="bg-gradient-to-r from-red-500 to-pink-500 rounded-lg p-6 text-white">
                        <h2 class="text-2xl font-bold mb-4">🔥 Truyện HOT nhất</h2>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white/10 backdrop-blur rounded-lg p-4">
                                <div class="aspect-[3/4] bg-gray-300 rounded mb-3"></div>
                                <h3 class="font-semibold mb-1">One Piece</h3>
                                <p class="text-sm opacity-90">Chapter 1095</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur rounded-lg p-4">
                                <div class="aspect-[3/4] bg-gray-300 rounded mb-3"></div>
                                <h3 class="font-semibold mb-1">Naruto</h3>
                                <p class="text-sm opacity-90">Chapter 700</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur rounded-lg p-4">
                                <div class="aspect-[3/4] bg-gray-300 rounded mb-3"></div>
                                <h3 class="font-semibold mb-1">Attack on Titan</h3>
                                <p class="text-sm opacity-90">Chapter 139</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Recently updated -->
                <section class="mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-800">📅 Truyện mới cập nhật</h2>
                        <a href="#" class="text-blue-600 hover:underline">Xem tất cả</a>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="grid gap-4 p-6">
                            <!-- Manga item -->
                            <div class="flex items-center space-x-4 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                                <div class="w-16 h-20 bg-gray-300 rounded flex-shrink-0"></div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-800 mb-1">Demon Slayer</h3>
                                    <p class="text-sm text-gray-600 mb-2">Tác giả: Koyoharu Gotouge</p>
                                    <div class="flex items-center space-x-4 text-sm">
                                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">Chapter 205</span>
                                        <span class="text-gray-500">2 giờ trước</span>
                                        <div class="flex items-center space-x-1 text-yellow-500">
                                            <i class="fas fa-star"></i>
                                            <span>4.8</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="text-gray-400 hover:text-red-500">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="text-gray-400 hover:text-blue-500">
                                        <i class="fas fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                                <div class="w-16 h-20 bg-gray-300 rounded flex-shrink-0"></div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-800 mb-1">Jujutsu Kaisen</h3>
                                    <p class="text-sm text-gray-600 mb-2">Tác giả: Gege Akutami</p>
                                    <div class="flex items-center space-x-4 text-sm">
                                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">Chapter 245</span>
                                        <span class="text-gray-500">4 giờ trước</span>
                                        <div class="flex items-center space-x-1 text-yellow-500">
                                            <i class="fas fa-star"></i>
                                            <span>4.9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="text-gray-400 hover:text-red-500">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="text-gray-400 hover:text-blue-500">
                                        <i class="fas fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                                <div class="w-16 h-20 bg-gray-300 rounded flex-shrink-0"></div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-800 mb-1">My Hero Academia</h3>
                                    <p class="text-sm text-gray-600 mb-2">Tác giả: Kohei Horikoshi</p>
                                    <div class="flex items-center space-x-4 text-sm">
                                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">Chapter 410</span>
                                        <span class="text-gray-500">6 giờ trước</span>
                                        <div class="flex items-center space-x-1 text-yellow-500">
                                            <i class="fas fa-star"></i>
                                            <span>4.7</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="text-gray-400 hover:text-red-500">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <button class="text-gray-400 hover:text-blue-500">
                                        <i class="fas fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-800">✨ Truyện mới</h2>
                        <a href="#" class="text-blue-600 hover:underline">Xem tất cả</a>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach ($story_news['data']['items'] as $item)
                            <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                                <div class="aspect-[3/4] relative overflow-hidden">
                                    <img src="{{ $item['thumb_url'] ? "https://otruyenapi.com/uploads/comics/".$item['thumb_url'] : '/images/default-manga.jpg' }}" 
                                        alt="{{ $item['name'] }}"
                                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                    @if($item['is_new'] ?? false)
                                        <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                                            NEW
                                        </div>
                                    @endif
                                </div>
                                <div class="p-4">
                                    <h3 class="font-semibold mb-2 line-clamp-2">{{ $item['name'] }}</h3>
                                    @foreach ($item['chaptersLatest'] as $chapter_name)
                                        <p class="text-sm text-gray-600 mb-3">{{ $chapter_name['chapter_name'] ?? 'Chapter 278' }} Chương</p> 
                                    @endforeach
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-1 text-yellow-500 text-sm">
                                            <i class="fas fa-star"></i>
                                            <span>{{ $item['rating'] ?? '4.6' }}</span>
                                        </div>
                                        <span class="text-xs text-gray-500">{{ $item['updatedAt'] ?? '1 ngày trước' }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </main>

            <!-- Sidebar -->
            <aside class="w-80">
                <!-- Top manga ranking -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">🏆 BXH tuần</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-sm">1</div>
                            <div class="w-12 h-16 bg-gray-300 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">One Piece</h4>
                                <p class="text-xs text-gray-600">1.2M lượt xem</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-gray-400 rounded-full flex items-center justify-center text-white font-bold text-sm">2</div>
                            <div class="w-12 h-16 bg-gray-300 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">Naruto</h4>
                                <p class="text-xs text-gray-600">980K lượt xem</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-sm">3</div>
                            <div class="w-12 h-16 bg-gray-300 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">Dragon Ball</h4>
                                <p class="text-xs text-gray-600">876K lượt xem</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Genres -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">📚 Thể loại</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($categories['data']['items'] as $item)
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-blue-200">{{ $item['name'] }}</span>
                        @endforeach
                    </div>
                </div>

                <!-- Recent comments -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">💬 Bình luận mới</h3>
                    <div class="space-y-4">
                        <div class="border-l-4 border-blue-500 pl-3">
                            <p class="text-sm text-gray-700 mb-1">"Chapter này hay quá!"</p>
                            <p class="text-xs text-gray-500">@user123 - One Piece Ch.1095</p>
                        </div>
                        <div class="border-l-4 border-green-500 pl-3">
                            <p class="text-sm text-gray-700 mb-1">"Không thể tin được 😱"</p>
                            <p class="text-xs text-gray-500">@mangafan - Attack on Titan</p>
                        </div>
                        <div class="border-l-4 border-purple-500 pl-3">
                            <p class="text-sm text-gray-700 mb-1">"Đợi chapter tiếp theo"</p>
                            <p class="text-xs text-gray-500">@reader456 - Demon Slayer</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-4 py-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="font-bold mb-4">Ổ Truyện</h4>
                    <p class="text-sm text-gray-400">Trang web đọc truyện tranh online miễn phí, chất lượng cao.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Thể loại</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Action</a></li>
                        <li><a href="#" class="hover:text-white">Romance</a></li>
                        <li><a href="#" class="hover:text-white">Fantasy</a></li>
                        <li><a href="#" class="hover:text-white">Horror</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Hỗ trợ</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Liên hệ</a></li>
                        <li><a href="#" class="hover:text-white">Báo lỗi</a></li>
                        <li><a href="#" class="hover:text-white">Điều khoản</a></li>
                        <li><a href="#" class="hover:text-white">Quyền riêng tư</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Theo dõi</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-discord"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>&copy; 2025 Ổ Truyện. Tất cả quyền được bảo lưu.</p>
            </div>
        </div>
    </footer>
</body>
</html>