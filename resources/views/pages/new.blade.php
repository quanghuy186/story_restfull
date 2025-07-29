<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truyện mới - Ổ Truyện</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .new-badge {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
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
                        <input type="text" placeholder="Tìm kiếm truyện mới..." 
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
                <a href="#" class="hover:text-blue-200">Thể loại</a>
                <a href="#" class="hover:text-blue-200">Top truyện</a>
                <a href="#" class="text-blue-200 font-semibold">Truyện mới</a>
                <a href="#" class="hover:text-blue-200">Hoàn thành</a>
                <a href="#" class="hover:text-blue-200">Theo dõi</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    ✨ Truyện Mới Nhất
                </h1>
                <p class="text-xl text-blue-100 mb-8">
                    Khám phá những bộ truyện mới được cập nhật hàng ngày
                </p>
                <div class="flex items-center justify-center space-x-6 text-sm">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-calendar-plus text-green-400"></i>
                        <span>Cập nhật hàng ngày</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-star text-yellow-400"></i>
                        <span>Chất lượng cao</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-bolt text-orange-400"></i>
                        <span>Đọc miễn phí</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center space-x-2 text-sm">
                <a href="#" class="text-blue-600 hover:underline">Trang chủ</a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="font-semibold text-gray-800">Truyện mới</span>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex gap-8">
            <!-- Sidebar -->
            <aside class="w-80">
                <!-- Quick Stats -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-chart-line mr-2 text-green-600"></i>
                        Thống kê
                    </h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-3 bg-green-50 rounded-lg">
                            <div class="text-2xl font-bold text-green-600">1,247</div>
                            <div class="text-xs text-gray-600">Truyện mới</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600">89</div>
                            <div class="text-xs text-gray-600">Hôm nay</div>
                        </div>
                        <div class="text-center p-3 bg-purple-50 rounded-lg">
                            <div class="text-2xl font-bold text-purple-600">456</div>
                            <div class="text-xs text-gray-600">Tuần này</div>
                        </div>
                        <div class="text-center p-3 bg-orange-50 rounded-lg">
                            <div class="text-2xl font-bold text-orange-600">1.2M</div>
                            <div class="text-xs text-gray-600">Lượt đọc</div>
                        </div>
                    </div>
                </div>

                <!-- Time Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-clock mr-2 text-blue-600"></i>
                        Thời gian
                    </h3>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="time" class="form-radio text-blue-600" checked>
                            <span class="text-sm">Hôm nay</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded ml-auto">89</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="time" class="form-radio text-blue-600">
                            <span class="text-sm">3 ngày qua</span>
                            <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded ml-auto">234</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="time" class="form-radio text-blue-600">
                            <span class="text-sm">Tuần này</span>
                            <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded ml-auto">456</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="time" class="form-radio text-blue-600">
                            <span class="text-sm">Tháng này</span>
                            <span class="text-xs bg-orange-100 text-orange-800 px-2 py-1 rounded ml-auto">1,247</span>
                        </label>
                    </div>
                </div>

                <!-- Genre Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-tags mr-2 text-purple-600"></i>
                        Thể loại phổ biến
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-blue-200 transition-colors">
                            Action <span class="text-xs">(234)</span>
                        </span>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-green-200 transition-colors">
                            Romance <span class="text-xs">(189)</span>
                        </span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-purple-200 transition-colors">
                            Fantasy <span class="text-xs">(156)</span>
                        </span>
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-red-200 transition-colors">
                            Horror <span class="text-xs">(78)</span>
                        </span>
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-yellow-200 transition-colors">
                            Comedy <span class="text-xs">(145)</span>
                        </span>
                        <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-indigo-200 transition-colors">
                            Sci-fi <span class="text-xs">(89)</span>
                        </span>
                    </div>
                </div>

                <!-- Hot New Manga -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-fire mr-2 text-red-500"></i>
                        Truyện mới HOT
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center text-white font-bold text-sm">1</div>
                            <div class="w-12 h-16 bg-gradient-to-br from-red-400 to-pink-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm line-clamp-2">Chainsaw Man Part 2</h4>
                                <p class="text-xs text-gray-600">15.2K lượt xem</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-sm">2</div>
                            <div class="w-12 h-16 bg-gradient-to-br from-blue-400 to-purple-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm line-clamp-2">Solo Leveling: Ragnarok</h4>
                                <p class="text-xs text-gray-600">12.8K lượt xem</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-sm">3</div>
                            <div class="w-12 h-16 bg-gradient-to-br from-green-400 to-teal-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm line-clamp-2">Jujutsu Kaisen</h4>
                                <p class="text-xs text-gray-600">10.9K lượt xem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="flex-1">
                <!-- Filter Bar -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                        <div class="flex items-center space-x-4">
                            <h2 class="text-xl font-bold text-gray-800">Truyện mới hôm nay</h2>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                89 truyện
                            </span>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <!-- View toggle -->
                            <div class="flex items-center space-x-2">
                                <button class="p-2 bg-blue-600 text-white rounded transition-colors" onclick="toggleView('grid')">
                                    <i class="fas fa-th"></i>
                                </button>
                                <button class="p-2 bg-gray-200 text-gray-600 rounded hover:bg-gray-300 transition-colors" onclick="toggleView('list')">
                                    <i class="fas fa-list"></i>
                                </button>
                            </div>
                            
                            <!-- Sort dropdown -->
                            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                                <option>Mới nhất</option>
                                <option>Cũ nhất</option>
                                <option>Tên A-Z</option>
                                <option>Tên Z-A</option>
                                <option>Lượt xem cao</option>
                                <option>Đánh giá cao</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Today's New Manga Banner -->
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg p-6 mb-8 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-bold mb-2">🎉 Truyện mới hôm nay!</h3>
                            <p class="text-blue-100 mb-4">Khám phá 89 bộ truyện mới được phát hành trong 24h qua</p>
                            <button class="bg-white text-blue-600 px-6 py-2 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                                Xem ngay
                            </button>
                        </div>
                        <div class="hidden md:block">
                            <div class="w-32 h-40 bg-white/20 rounded-lg backdrop-blur"></div>
                        </div>
                    </div>
                </div>

                <!-- Grid View -->
                <div id="manga-grid" class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                    <!-- New Manga Card 1 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden card-hover group">
                        <div class="aspect-[3/4] relative overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-pink-400 to-red-600"></div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                                <button class="bg-white text-black px-4 py-2 rounded-lg font-semibold opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300">
                                    <i class="fas fa-play mr-2"></i>
                                    Đọc ngay
                                </button>
                            </div>
                            <!-- NEW Badge -->
                            <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold new-badge">
                                NEW
                            </div>
                            <!-- Time badge -->
                            <div class="absolute bottom-2 left-2 bg-black/70 text-white px-2 py-1 rounded text-xs">
                                <i class="fas fa-clock mr-1"></i>
                                2 giờ trước
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold mb-2 line-clamp-2 group-hover:text-blue-600">The Beginning After The End</h3>
                            <p class="text-sm text-gray-600 mb-3">Chapter 1 • Mới phát hành</p>
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center space-x-1 text-yellow-500 text-sm">
                                    <i class="fas fa-star"></i>
                                    <span>--</span>
                                </div>
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
                                <span class="text-xs text-gray-500">756 lượt xem</span>
                            </div>
                        </div>
                    </div>

                    <!-- Continue with more cards... -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden card-hover group">
                        <div class="aspect-[3/4] relative overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-indigo-400 to-blue-600"></div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                                <button class="bg-white text-black px-4 py-2 rounded-lg font-semibold opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300">
                                    <i class="fas fa-play mr-2"></i>
                                    Đọc ngay
                                </button>
                            </div>
                            <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold new-badge">
                                NEW
                            </div>
                            <div class="absolute bottom-2 left-2 bg-black/70 text-white px-2 py-1 rounded text-xs">
                                <i class="fas fa-clock mr-1"></i>
                                10 giờ trước
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold mb-2 line-clamp-2 group-hover:text-blue-600">Legend of the Northern Blade</h3>
                            <p class="text-sm text-gray-600 mb-3">Chapter 1 • Mới phát hành</p>
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center space-x-1">
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Mới</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Action</span>
                                </div>
                                <div class="flex items-center space-x-1 text-yellow-500 text-sm">
                                    <i class="fas fa-star"></i>
                                    <span>--</span>
                                </div>
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
                                <span class="text-xs text-gray-500">634 lượt xem</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm overflow-hidden card-hover group">
                        <div class="aspect-[3/4] relative overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-purple-400 to-pink-600"></div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                                <button class="bg-white text-black px-4 py-2 rounded-lg font-semibold opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300">
                                    <i class="fas fa-play mr-2"></i>
                                    Đọc ngay
                                </button>
                            </div>
                            <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold new-badge">
                                NEW
                            </div>
                            <div class="absolute bottom-2 left-2 bg-black/70 text-white px-2 py-1 rounded text-xs">
                                <i class="fas fa-clock mr-1"></i>
                                12 giờ trước
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold mb-2 line-clamp-2 group-hover:text-blue-600">The Great Mage Returns After 4000 Years</h3>
                            <p class="text-sm text-gray-600 mb-3">Chapter 1 • Mới phát hành</p>
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center space-x-1">
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Mới</span>
                                    <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Fantasy</span>
                                </div>
                                <div class="flex items-center space-x-1 text-yellow-500 text-sm">
                                    <i class="fas fa-star"></i>
                                    <span>--</span>
                                </div>
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
                                <span class="text-xs text-gray-500">523 lượt xem</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm overflow-hidden card-hover group">
                        <div class="aspect-[3/4] relative overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-teal-400 to-green-600"></div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                                <button class="bg-white text-black px-4 py-2 rounded-lg font-semibold opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 transition-all duration-300">
                                    <i class="fas fa-play mr-2"></i>
                                    Đọc ngay
                                </button>
                            </div>
                            <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold new-badge">
                                NEW
                            </div>
                            <div class="absolute bottom-2 left-2 bg-black/70 text-white px-2 py-1 rounded text-xs">
                                <i class="fas fa-clock mr-1"></i>
                                15 giờ trước
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold mb-2 line-clamp-2 group-hover:text-blue-600">Nano Machine</h3>
                            <p class="text-sm text-gray-600 mb-3">Chapter 1 • Mới phát hành</p>
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center space-x-1">
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Mới</span>
                                    <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded text-xs">Sci-fi</span>
                                </div>
                                <div class="flex items-center space-x-1 text-yellow-500 text-sm">
                                    <i class="fas fa-star"></i>
                                    <span>--</span>
                                </div>
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
                                <span class="text-xs text-gray-500">445 lượt xem</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- List View (Hidden by default) -->
                <div id="manga-list" class="hidden space-y-6 mb-8">
                    <!-- List Item 1 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-start space-x-6">
                            <div class="w-24 h-32 bg-gradient-to-br from-pink-400 to-red-600 rounded flex-shrink-0 relative">
                                <div class="absolute -top-2 -left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold new-badge">
                                    NEW
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">
                                            The Beginning After The End
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3">
                                            <span class="font-semibold">Tác giả:</span> TurtleMe • 
                                            <span class="font-semibold">Thể loại:</span> Fantasy, Action • 
                                            <span class="font-semibold">Phát hành:</span> 2 giờ trước
                                        </p>
                                        <p class="text-gray-700 mb-4 line-clamp-3">
                                            Vua Grey có sức mạnh, sự giàu có và uy tín tuyệt đối trong một thế giới được cai trị bởi khả năng quân sự và phép thuật. Tuy nhiên, sự cô đơn ăn mòn trái tim những người có sức mạnh lớn. Bên dưới vẻ ngoài quyến rũ của một vị vua quyền lực là vỏ bọc của con người thiếu mục đích và ý chí...
                                        </p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">
                                                Chapter 1 • Mới phát hành
                                            </span>
                                            <div class="flex items-center space-x-1">
                                                <i class="fas fa-eye text-gray-400"></i>
                                                <span class="text-gray-600">1.2K lượt xem</span>
                                            </div>
                                            <div class="flex items-center space-x-1">
                                                <i class="fas fa-clock text-gray-400"></i>
                                                <span class="text-gray-600">2 giờ trước</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-end space-y-3 ml-6">
                                        <div class="flex items-center space-x-2">
                                            <button class="p-2 text-gray-400 hover:text-red-500 transition-colors">
                                                <i class="fas fa-heart text-lg"></i>
                                            </button>
                                            <button class="p-2 text-gray-400 hover:text-blue-500 transition-colors">
                                                <i class="fas fa-bookmark text-lg"></i>
                                            </button>
                                        </div>
                                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                                            Đọc ngay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- List Item 2 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-start space-x-6">
                            <div class="w-24 h-32 bg-gradient-to-br from-blue-400 to-purple-600 rounded flex-shrink-0 relative">
                                <div class="absolute -top-2 -left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold new-badge">
                                    NEW
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">
                                            Return of the Mount Hua Sect
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3">
                                            <span class="font-semibold">Tác giả:</span> LICO • 
                                            <span class="font-semibold">Thể loại:</span> Action, Martial Arts • 
                                            <span class="font-semibold">Phát hành:</span> 4 giờ trước
                                        </p>
                                        <p class="text-gray-700 mb-4 line-clamp-3">
                                            Chung Myung, The 13th Disciple của Great Flowery Mountain Sect, một trong những Tam Đại đệ tử của Ten Great Sects. Sau khi tên độc ma Cheon Ma của Ma giáo được tiêu diệt, anh ta thở hơi thở cuối cùng trên đỉnh núi hoa. Tuy nhiên, anh tỉnh dậy trong cơ thể của một đứa trẻ ...
                                        </p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">
                                                Chapter 1 • Mới phát hành
                                            </span>
                                            <div class="flex items-center space-x-1">
                                                <i class="fas fa-eye text-gray-400"></i>
                                                <span class="text-gray-600">890 lượt xem</span>
                                            </div>
                                            <div class="flex items-center space-x-1">
                                                <i class="fas fa-clock text-gray-400"></i>
                                                <span class="text-gray-600">4 giờ trước</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-end space-y-3 ml-6">
                                        <div class="flex items-center space-x-2">
                                            <button class="p-2 text-gray-400 hover:text-red-500 transition-colors">
                                                <i class="fas fa-heart text-lg"></i>
                                            </button>
                                            <button class="p-2 text-gray-400 hover:text-blue-500 transition-colors">
                                                <i class="fas fa-bookmark text-lg"></i>
                                            </button>
                                        </div>
                                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                                            Đọc ngay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="text-center py-8">
                    <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                        <i class="fas fa-plus mr-2"></i>
                        Tải thêm truyện mới
                    </button>
                    <p class="text-sm text-gray-600 mt-2">Hiển thị 8/89 truyện mới hôm nay</p>
                </div>

                <!-- Weekly New Section -->
                <section class="bg-white rounded-lg shadow-sm p-6 mb-8">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-bold text-gray-800 flex items-center">
                            <i class="fas fa-calendar-week mr-2 text-purple-600"></i>
                            Truyện mới tuần này
                        </h2>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">
                            456 truyện
                        </span>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors cursor-pointer">
                            <div class="w-16 h-20 bg-gradient-to-br from-emerald-400 to-teal-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm line-clamp-2">The World After The Fall</h4>
                                <p class="text-xs text-gray-600 mb-1">3 ngày trước</p>
                                <div class="flex items-center space-x-2">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Ch.1</span>
                                    <span class="text-xs text-gray-500">234 views</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors cursor-pointer">
                            <div class="w-16 h-20 bg-gradient-to-br from-rose-400 to-pink-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm line-clamp-2">Second Life Ranker</h4>
                                <p class="text-xs text-gray-600 mb-1">5 ngày trước</p>
                                <div class="flex items-center space-x-2">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Ch.1</span>
                                    <span class="text-xs text-gray-500">189 views</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors cursor-pointer">
                            <div class="w-16 h-20 bg-gradient-to-br from-amber-400 to-orange-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm line-clamp-2">Tomb Raider King</h4>
                                <p class="text-xs text-gray-600 mb-1">1 tuần trước</p>
                                <div class="flex items-center space-x-2">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Ch.1</span>
                                    <span class="text-xs text-gray-500">156 views</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-6">
                        <button class="text-blue-600 hover:text-blue-800 font-semibold">
                            Xem tất cả truyện mới tuần này →
                        </button>
                    </div>
                </section>
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
                    <h4 class="font-bold mb-4">Truyện mới</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Hôm nay</a></li>
                        <li><a href="#" class="hover:text-white">Tuần này</a></li>
                        <li><a href="#" class="hover:text-white">Tháng này</a></li>
                        <li><a href="#" class="hover:text-white">Phổ biến</a></li>
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

        // Smooth scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card-hover');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            });

            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>