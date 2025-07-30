<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thể loại truyện - Ổ Truyện</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .filter-active {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
        }
    </style>
</head>
<body class="bg-gray-50">
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
                <a href="{{ route('list_story', 'top-truyen') }}" class="hover:text-blue-200">Top truyện</a>
                <a href="{{ route('list_story', 'truyen-moi') }}" class="text-blue-200 font-semibold">Truyện mới</a>
                <a href="{{ route('list_story', 'hoan-thanh') }}" class="hover:text-blue-200">Hoàn thành</a>
                <a href="#" class="hover:text-blue-200">Theo dõi</a>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center space-x-2 text-sm">
                <a href="#" class="text-blue-600 hover:underline">Trang chủ</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600">Thể loại</span>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="font-semibold text-gray-800">Action</span>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-6">
        <div class="flex gap-8">
            <!-- Sidebar Filters -->
            <aside class="w-80">
                <!-- Category Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-filter mr-2 text-blue-600"></i>
                        Lọc theo thể loại
                    </h3>
                    <div class="space-y-2">
                        @foreach ($categories['data']['items'] as $item)
                            <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" class="form-checkbox text-blue-600 rounded" checked>
                                <span class="text-sm">{{ $item['name'] }}</span>
                                <span class="text-xs text-gray-500 ml-auto">(1,234)</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Status Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-clock mr-2 text-green-600"></i>
                        Tình trạng
                    </h3>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="status" class="form-radio text-blue-600" checked>
                            <span class="text-sm">Tất cả</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="status" class="form-radio text-blue-600">
                            <span class="text-sm">Đang cập nhật</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="status" class="form-radio text-blue-600">
                            <span class="text-sm">Hoàn thành</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="status" class="form-radio text-blue-600">
                            <span class="text-sm">Tạm dừng</span>
                        </label>
                    </div>
                </div>

                <!-- Rating Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-star mr-2 text-yellow-500"></i>
                        Đánh giá
                    </h3>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded">
                            <div class="flex items-center space-x-1 text-yellow-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-xs text-gray-500">5 sao</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded">
                            <div class="flex items-center space-x-1 text-yellow-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-xs text-gray-500">4+ sao</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded">
                            <div class="flex items-center space-x-1 text-yellow-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-xs text-gray-500">3+ sao</span>
                        </label>
                    </div>
                </div>

                <!-- Clear Filters -->
                <button class="w-full bg-gray-200 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-300 transition-colors">
                    <i class="fas fa-times mr-2"></i>
                    Xóa bộ lọc
                </button>
            </aside>

            <!-- Main Content -->
            <main class="flex-1">
                <!-- Header with title and sorting -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-800 mb-2">Thể loại: Action</h1>
                            <p class="text-gray-600">Tìm thấy 1,234 truyện</p>
                        </div>
                        
                        <!-- View toggle and sort -->
                        <div class="flex items-center space-x-4">
                            <!-- View toggle -->
                            <div class="flex items-center space-x-2">
                                <button class="p-2 bg-blue-600 text-white rounded" onclick="toggleView('grid')">
                                    <i class="fas fa-th"></i>
                                </button>
                                <button class="p-2 bg-gray-200 text-gray-600 rounded hover:bg-gray-300" onclick="toggleView('list')">
                                    <i class="fas fa-list"></i>
                                </button>
                            </div>
                            
                            <!-- Sort dropdown -->
                            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                                <option>Mới nhất</option>
                                <option>Cũ nhất</option>
                                <option>A-Z</option>
                                <option>Z-A</option>
                                <option>Đánh giá cao</option>
                                <option>Lượt xem nhiều</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Manga Grid -->
                <div id="manga-grid" class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                    @foreach ($item_categories['data']['items'] as $action)
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300 group">
                            <div class="aspect-[3/4] relative overflow-hidden"> 
                                <a href="{{ route('story', $action['slug']) }}">
                                    <img class="w-full h-full bg-gradient-to-br from-blue-400 to-purple-600" src="{{ $action['thumb_url'] ? "https://otruyenapi.com/uploads/comics/".$action['thumb_url'] : '/images/default-manga.jpg' }}" alt="">
                                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                                        <button class="bg-white text-black px-4 py-2 rounded-lg font-semibold opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300">
                                            <i class="fas fa-play mr-2"></i>
                                            Đọc ngay
                                        </button>
                                    </div>
                                </a>
                                <!-- Status badge -->
                                <div class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">
                                    Hoàn thành
                                </div>
                                <!-- Hot badge -->
                                <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                                    HOT
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold mb-2 line-clamp-2 group-hover:text-blue-600">{{ $action['name'] }}</h3>
                                <p class="text-sm text-gray-600 mb-3">Chapter 369</p>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-1 text-yellow-500 text-sm">
                                        <i class="fas fa-star"></i>
                                        <span>4.4</span>
                                    </div>
                                    <span class="text-xs text-gray-500">2 tuần trước</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <button class="text-gray-400 hover:text-red-500 transition-colors">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-blue-500 transition-colors">
                                            <i class="fas fa-bookmark"></i>
                                        </button>
                                    </div>
                                    <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded">Action</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- List View (Hidden by default) -->
                <div id="manga-list" class="hidden space-y-4 mb-8">
                    <!-- List Item 1 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-center space-x-6">
                            <div class="w-20 h-28 bg-gradient-to-br from-blue-400 to-purple-600 rounded flex-shrink-0 relative">
                                <div class="absolute top-1 left-1 bg-green-500 text-white px-1 py-0.5 rounded text-xs font-bold">
                                    Hoàn thành
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">One Piece</h3>
                                        <p class="text-sm text-gray-600 mb-2">Tác giả: Eiichiro Oda</p>
                                        <p class="text-gray-700 mb-3 line-clamp-2">Câu chuyện kể về Monkey D. Luffy, một cậu bé có khả năng co giãn như cao su sau khi vô tình ăn phải trái ác quỷ...</p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">Chapter 1095</span>
                                            <div class="flex items-center space-x-1 text-yellow-500">
                                                <i class="fas fa-star"></i>
                                                <span>4.9</span>
                                            </div>
                                            <span class="text-gray-500">2 giờ trước</span>
                                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Action</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button class="text-gray-400 hover:text-red-500 transition-colors p-2">
                                            <i class="fas fa-heart text-lg"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-blue-500 transition-colors p-2">
                                            <i class="fas fa-bookmark text-lg"></i>
                                        </button>
                                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                            Đọc ngay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- List Item 2 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-center space-x-6">
                            <div class="w-20 h-28 bg-gradient-to-br from-green-400 to-blue-600 rounded flex-shrink-0 relative">
                                <div class="absolute top-1 left-1 bg-blue-500 text-white px-1 py-0.5 rounded text-xs font-bold">
                                    Đang cập nhật
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">Attack on Titan</h3>
                                        <p class="text-sm text-gray-600 mb-2">Tác giả: Hajime Isayama</p>
                                        <p class="text-gray-700 mb-3 line-clamp-2">Hơn 100 năm trước, những người khổng lồ xuất hiện trên trái đất và đẩy nhân loại đến bờ vực tuyệt chủng...</p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">Chapter 139</span>
                                            <div class="flex items-center space-x-1 text-yellow-500">
                                                <i class="fas fa-star"></i>
                                                <span>4.8</span>
                                            </div>
                                            <span class="text-gray-500">5 giờ trước</span>
                                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Action</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button class="text-gray-400 hover:text-red-500 transition-colors p-2">
                                            <i class="fas fa-heart text-lg"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-blue-500 transition-colors p-2">
                                            <i class="fas fa-bookmark text-lg"></i>
                                        </button>
                                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                            Đọc ngay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex items-center justify-between bg-white rounded-lg shadow-sm p-6">
                    <div class="text-sm text-gray-600">
                        Hiển thị 1-20 trong 1,234 kết quả
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="px-3 py-2 text-gray-400 hover:text-gray-600 disabled:opacity-50" disabled>
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-2 bg-blue-600 text-white rounded">1</button>
                        <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded">2</button>
                        <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded">3</button>
                        <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded">4</button>
                        <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded">5</button>
                        <span class="px-3 py-2 text-gray-400">...</span>
                        <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded">62</button>
                        <button class="px-3 py-2 text-gray-600 hover:text-gray-800">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </main>
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

    <script>
        function toggleView(viewType) {
            const gridView = document.getElementById('manga-grid');
            const listView = document.getElementById('manga-list');
            const gridBtn = document.querySelector('button[onclick="toggleView(\'grid\')"]');
            const listBtn = document.querySelector('button[onclick="toggleView(\'list\')"]');
            
            if (viewType === 'grid') {
                gridView.classList.remove('hidden');
                listView.classList.add('hidden');
                gridBtn.classList.add('bg-blue-600', 'text-white');
                gridBtn.classList.remove('bg-gray-200', 'text-gray-600');
                listBtn.classList.remove('bg-blue-600', 'text-white');
                listBtn.classList.add('bg-gray-200', 'text-gray-600');
            } else {
                gridView.classList.add('hidden');
                listView.classList.remove('hidden');
                listBtn.classList.add('bg-blue-600', 'text-white');
                listBtn.classList.remove('bg-gray-200', 'text-gray-600');
                gridBtn.classList.remove('bg-blue-600', 'text-white');
                gridBtn.classList.add('bg-gray-200', 'text-gray-600');
            }
        }

        // Add line-clamp CSS class
        const style = document.createElement('style');
        style.textContent = `
            .line-clamp-2 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
                    

                    