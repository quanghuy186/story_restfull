<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top truyện - Ổ Truyện</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .ranking-gradient {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }
        .top-card {
            transition: all 0.3s ease;
        }
        .top-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .rank-1 { background: linear-gradient(135deg, #FFD700, #FFA500); }
        .rank-2 { background: linear-gradient(135deg, #C0C0C0, #A0A0A0); }
        .rank-3 { background: linear-gradient(135deg, #CD7F32, #B87333); }
        .rank-default { background: linear-gradient(135deg, #6B73FF, #9F40FF); }
        
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .trophy-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .sparkle {
            animation: sparkle 2s linear infinite;
        }
        
        @keyframes sparkle {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
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
                        <input type="text" placeholder="Tìm kiếm trong top truyện..." 
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
                <a href="#" class="text-blue-200 font-semibold">Top truyện</a>
                <a href="#" class="hover:text-blue-200">Truyện mới</a>
                <a href="#" class="hover:text-blue-200">Hoàn thành</a>
                <a href="#" class="hover:text-blue-200">Theo dõi</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="ranking-gradient text-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="trophy-animation inline-block mb-4">
                    <i class="fas fa-trophy text-6xl text-yellow-300"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    🏆 Top Truyện Hay Nhất
                </h1>
                <p class="text-xl text-pink-100 mb-8">
                    Bảng xếp hạng những bộ truyện được yêu thích nhất
                </p>
                <div class="flex items-center justify-center space-x-8 text-sm">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-star sparkle text-yellow-300"></i>
                        <span>Xếp hạng theo đánh giá</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-eye sparkle text-blue-300"></i>
                        <span>Lượt xem cao nhất</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-heart sparkle text-red-300"></i>
                        <span>Được yêu thích nhất</span>
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
                <span class="font-semibold text-gray-800">Top truyện</span>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex gap-8">
            <!-- Sidebar -->
            <aside class="w-80">
                <!-- Ranking Categories -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-list-ol mr-2 text-yellow-600"></i>
                        Bảng xếp hạng
                    </h3>
                    <div class="space-y-2">
                        <button class="w-full text-left p-3 bg-blue-50 border border-blue-200 rounded-lg text-blue-800 font-semibold">
                            <i class="fas fa-star mr-2"></i>
                            Đánh giá cao nhất
                        </button>
                        <button class="w-full text-left p-3 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-eye mr-2 text-gray-600"></i>
                            Lượt xem nhiều nhất
                        </button>
                        <button class="w-full text-left p-3 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-heart mr-2 text-gray-600"></i>
                            Yêu thích nhất
                        </button>
                        <button class="w-full text-left p-3 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-comment mr-2 text-gray-600"></i>
                            Nhiều bình luận nhất
                        </button>
                        <button class="w-full text-left p-3 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-bookmark mr-2 text-gray-600"></i>
                            Được lưu nhiều nhất
                        </button>
                        <button class="w-full text-left p-3 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-calendar-week mr-2 text-gray-600"></i>
                            Top tuần này
                        </button>
                        <button class="w-full text-left p-3 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-calendar-alt mr-2 text-gray-600"></i>
                            Top tháng này
                        </button>
                    </div>
                </div>

                <!-- Time Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-clock mr-2 text-green-600"></i>
                        Thời gian
                    </h3>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="time" class="form-radio text-blue-600" checked>
                            <span class="text-sm">Mọi thời gian</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="time" class="form-radio text-blue-600">
                            <span class="text-sm">Hôm nay</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="time" class="form-radio text-blue-600">
                            <span class="text-sm">Tuần này</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="time" class="form-radio text-blue-600">
                            <span class="text-sm">Tháng này</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="time" class="form-radio text-blue-600">
                            <span class="text-sm">Năm này</span>
                        </label>
                    </div>
                </div>

                <!-- Genre Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-tags mr-2 text-purple-600"></i>
                        Thể loại
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-blue-200 transition-colors">
                            Tất cả
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-gray-200 transition-colors">
                            Action
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-gray-200 transition-colors">
                            Romance
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-gray-200 transition-colors">
                            Fantasy
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-gray-200 transition-colors">
                            Horror
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-gray-200 transition-colors">
                            Comedy
                        </span>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-chart-bar mr-2 text-orange-600"></i>
                        Thống kê nhanh
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Tổng truyện:</span>
                            <span class="font-bold text-blue-600">12,456</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Đang theo dõi:</span>
                            <span class="font-bold text-green-600">8,923</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Hoàn thành:</span>
                            <span class="font-bold text-purple-600">3,533</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Lượt xem hôm nay:</span>
                            <span class="font-bold text-orange-600">2.1M</span>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="flex-1">
                <!-- Header -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">🌟 Top đánh giá cao nhất</h2>
                            <p class="text-gray-600">Những bộ truyện có điểm đánh giá cao nhất từ cộng đồng</p>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <!-- View toggle -->
                            <div class="flex items-center space-x-2">
                                <button class="p-2 bg-blue-600 text-white rounded transition-colors" onclick="toggleView('ranking')">
                                    <i class="fas fa-list-ol"></i>
                                </button>
                                <button class="p-2 bg-gray-200 text-gray-600 rounded hover:bg-gray-300 transition-colors" onclick="toggleView('grid')">
                                    <i class="fas fa-th"></i>
                                </button>
                            </div>
                            
                            <!-- Export button -->
                            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                                <i class="fas fa-download mr-2"></i>
                                Xuất danh sách
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Top 3 Podium -->
                <div class="bg-white rounded-lg shadow-sm p-8 mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">
                        🏆 Bục vinh danh
                    </h3>
                    <div class="flex items-end justify-center space-x-4 md:space-x-8">
                        <!-- 2nd Place -->
                        <div class="text-center">
                            <div class="w-20 h-28 md:w-24 md:h-32 bg-gradient-to-br from-gray-300 to-gray-500 rounded-lg mb-3 relative">
                                <div class="absolute -top-3 -right-3 w-8 h-8 rank-2 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    2
                                </div>
                            </div>
                            <div class="bg-gray-100 p-3 rounded-lg">
                                <h4 class="font-bold text-sm mb-1">Attack on Titan</h4>
                                <div class="flex items-center justify-center space-x-1 text-yellow-500 text-sm">
                                    <i class="fas fa-star"></i>
                                    <span>4.8</span>
                                </div>
                                <p class="text-xs text-gray-600">1.2M lượt xem</p>
                            </div>
                        </div>

                        <!-- 1st Place -->
                        <div class="text-center">
                            <div class="w-24 h-32 md:w-28 md:h-36 bg-gradient-to-br from-yellow-300 to-yellow-600 rounded-lg mb-3 relative">
                                <div class="absolute -top-4 -right-4 w-10 h-10 rank-1 rounded-full flex items-center justify-center text-white font-bold">
                                    1
                                </div>
                                <div class="absolute -top-2 left-1/2 transform -translate-x-1/2">
                                    <i class="fas fa-crown text-yellow-400 text-2xl"></i>
                                </div>
                            </div>
                            <div class="bg-yellow-50 p-4 rounded-lg border-2 border-yellow-200">
                                <h4 class="font-bold text-base mb-2">One Piece</h4>
                                <div class="flex items-center justify-center space-x-1 text-yellow-500 mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ml-1 font-bold">4.9</span>
                                </div>
                                <p class="text-sm text-gray-600">2.8M lượt xem</p>
                            </div>
                        </div>

                        <!-- 3rd Place -->
                        <div class="text-center">
                            <div class="w-20 h-28 md:w-24 md:h-32 bg-gradient-to-br from-orange-300 to-orange-600 rounded-lg mb-3 relative">
                                <div class="absolute -top-3 -right-3 w-8 h-8 rank-3 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    3
                                </div>
                            </div>
                            <div class="bg-orange-50 p-3 rounded-lg">
                                <h4 class="font-bold text-sm mb-1">Demon Slayer</h4>
                                <div class="flex items-center justify-center space-x-1 text-yellow-500 text-sm">
                                    <i class="fas fa-star"></i>
                                    <span>4.7</span>
                                </div>
                                <p class="text-xs text-gray-600">980K lượt xem</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ranking List View -->
                <div id="ranking-view" class="space-y-4 mb-8">
                    <!-- Rank 4 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 top-card">
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rank-default rounded-full flex items-center justify-center text-white font-bold text-lg">
                                    4
                                </div>
                                <div class="w-16 h-20 bg-gradient-to-br from-purple-400 to-pink-600 rounded flex-shrink-0"></div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">
                                            Naruto
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3">
                                            Tác giả: Masashi Kishimoto • Thể loại: Action, Adventure • Chapter 700
                                        </p>
                                        <div class="flex items-center space-x-6">
                                            <div class="flex items-center space-x-1">
                                                <div class="flex text-yellow-500">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="font-bold text-lg ml-2">4.6</span>
                                                <span class="text-gray-500 text-sm">(45,678 đánh giá)</span>
                                            </div>
                                            <div class="flex items-center space-x-1 text-blue-600">
                                                <i class="fas fa-eye"></i>
                                                <span class="font-semibold">856K lượt xem</span>
                                            </div>
                                            <div class="flex items-center space-x-1 text-red-500">
                                                <i class="fas fa-heart"></i>
                                                <span class="font-semibold">234K</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button class="text-gray-400 hover:text-red-500 transition-colors p-2">
                                            <i class="fas fa-heart text-lg"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-blue-500 transition-colors p-2">
                                            <i class="fas fa-bookmark text-lg"></i>
                                        </button>
                                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                                            Đọc ngay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rank 5 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 top-card">
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rank-default rounded-full flex items-center justify-center text-white font-bold text-lg">
                                    5
                                </div>
                                <div class="w-16 h-20 bg-gradient-to-br from-green-400 to-teal-600 rounded flex-shrink-0"></div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">
                                            My Hero Academia
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3">
                                            Tác giả: Kohei Horikoshi • Thể loại: Action, Superhero • Chapter 410
                                        </p>
                                        <div class="flex items-center space-x-6">
                                            <div class="flex items-center space-x-1">
                                                <div class="flex text-yellow-500">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="font-bold text-lg ml-2">4.5</span>
                                                <span class="text-gray-500 text-sm">(38,923 đánh giá)</span>
                                            </div>
                                            <div class="flex items-center space-x-1 text-blue-600">
                                                <i class="fas fa-eye"></i>
                                                <span class="font-semibold">723K lượt xem</span>
                                            </div>
                                            <div class="flex items-center space-x-1 text-red-500">
                                                <i class="fas fa-heart"></i>
                                                <span class="font-semibold">189K</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button class="text-gray-400 hover:text-red-500 transition-colors p-2">
                                            <i class="fas fa-heart text-lg"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-blue-500 transition-colors p-2">
                                            <i class="fas fa-bookmark text-lg"></i>
                                        </button>
                                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                                            Đọc ngay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rank 6 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 top-card">
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rank-default rounded-full flex items-center justify-center text-white font-bold text-lg">
                                    6
                                </div>
                                <div class="w-16 h-20 bg-gradient-to-br from-red-400 to-pink-600 rounded flex-shrink-0"></div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">
                                            Jujutsu Kaisen
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3">
                                            Tác giả: Gege Akutami • Thể loại: Action, Supernatural • Chapter 245
                                        </p>
                                        <div class="flex items-center space-x-6">
                                            <div class="flex items-center space-x-1">
                                                <div class="flex text-yellow-500">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="font-bold text-lg ml-2">4.4</span>
                                                <span class="text-gray-500 text-sm">(42,156 đánh giá)</span>
                                            </div>
                                            <div class="flex items-center space-x-1 text-blue-600">
                                                <i class="fas fa-eye"></i>
                                                <span class="font-semibold">634K lượt xem</span>
                                            </div>
                                            <div class="flex items-center space-x-1 text-red-500">
                                                <i class="fas fa-heart"></i>
                                                <span class="font-semibold">156K</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button class="text-gray-400 hover:text-red-500 transition-colors p-2">
                                            <i class="fas fa-heart text-lg"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-blue-500 transition-colors p-2">
                                            <i class="fas fa-bookmark text-lg"></i>
                                        </button>
                                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                                            Đọc ngay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rank 7 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 top-card">
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rank-default rounded-full flex items-center justify-center text-white font-bold text-lg">
                                    7
                                </div>
                                <div class="w-16 h-20 bg-gradient-to-br from-indigo-400 to-purple-600 rounded flex-shrink-0"></div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">
                                            Solo Leveling
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3">
                                            Tác giả: Chugong • Thể loại: Action, Fantasy • Chapter 179
                                        </p>
                                        <div class="flex items-center space-x-6">
                                            <div class="flex items-center space-x-1">
                                                <div class="flex text-yellow-500">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="font-bold text-lg ml-2">4.3</span>
                                                <span class="text-gray-500 text-sm">(67,892 đánh giá)</span>
                                            </div>
                                            <div class="flex items-center space-x-1 text-blue-600">
                                                <i class="fas fa-eye"></i>
                                                <span class="font-semibold">512K lượt xem</span>
                                            </div>
                                            <div class="flex items-center space-x-1 text-red-500">
                                                <i class="fas fa-heart"></i>
                                                <span class="font-semibold">134K</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button class="text-red-500 hover:text-red-600 transition-colors p-2">
                                            <i class="fas fa-heart text-lg"></i>
                                        </button>
                                        <button class="text-blue-500 hover:text-blue-600 transition-colors p-2">
                                            <i class="fas fa-bookmark text-lg"></i>
                                        </button>
                                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                                            Đọc ngay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rank 8 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 top-card">
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rank-default rounded-full flex items-center justify-center text-white font-bold text-lg">
                                    8
                                </div>
                                <div class="w-16 h-20 bg-gradient-to-br from-yellow-400 to-orange-600 rounded flex-shrink-0"></div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">
                                            Dragon Ball Super
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3">
                                            Tác giả: Akira Toriyama • Thể loại: Action, Adventure • Chapter 102
                                        </p>
                                        <div class="flex items-center space-x-6">
                                            <div class="flex items-center space-x-1">
                                                <div class="flex text-yellow-500">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <span class="font-bold text-lg ml-2">4.2</span>
                                                <span class="text-gray-500 text-sm">(29,734 đánh giá)</span>
                                            </div>
                                            <div class="flex items-center space-x-1 text-blue-600">
                                                <i class="fas fa-eye"></i>
                                                <span class="font-semibold">478K lượt xem</span>
                                            </div>
                                            <div class="flex items-center space-x-1 text-red-500">
                                                <i class="fas fa-heart"></i>
                                                <span class="font-semibold">123K</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <button class="text-gray-400 hover:text-red-500 transition-colors p-2">
                                            <i class="fas fa-heart text-lg"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-blue-500 transition-colors p-2">
                                            <i class="fas fa-bookmark text-lg"></i>
                                        </button>
                                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                                            Đọc ngay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grid View (Hidden by default) -->
                <div id="grid-view" class="hidden grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                    <!-- Grid Item 1 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden top-card">
                        <div class="aspect-[3/4] relative">
                            <div class="w-full h-full bg-gradient-to-br from-purple-400 to-pink-600"></div>
                            <div class="absolute top-2 left-2 w-8 h-8 rank-default rounded-full flex items-center justify-center text-white font-bold text-sm">
                                4
                            </div>
                            <div class="absolute top-2 right-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">
                                TOP
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold mb-2 line-clamp-2">Naruto</h3>
                            <div class="flex items-center space-x-1 text-yellow-500 text-sm mb-2">
                                <i class="fas fa-star"></i>
                                <span class="font-bold">4.6</span>
                                <span class="text-gray-500 text-xs">(45K)</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-blue-600">856K views</span>
                                <span class="text-red-500">234K ❤</span>
                            </div>
                        </div>
                    </div>

                    <!-- More grid items... -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden top-card">
                        <div class="aspect-[3/4] relative">
                            <div class="w-full h-full bg-gradient-to-br from-green-400 to-teal-600"></div>
                            <div class="absolute top-2 left-2 w-8 h-8 rank-default rounded-full flex items-center justify-center text-white font-bold text-sm">
                                5
                            </div>
                            <div class="absolute top-2 right-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold">
                                TOP
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold mb-2 line-clamp-2">My Hero Academia</h3>
                            <div class="flex items-center space-x-1 text-yellow-500 text-sm mb-2">
                                <i class="fas fa-star"></i>
                                <span class="font-bold">4.5</span>
                                <span class="text-gray-500 text-xs">(39K)</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-blue-600">723K views</span>
                                <span class="text-red-500">189K ❤</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More & Pagination -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex flex-col items-center space-y-4">
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                            <i class="fas fa-chevron-down mr-2"></i>
                            Xem thêm 10 truyện tiếp theo
                        </button>
                        
                        <!-- Pagination -->
                        <div class="flex items-center space-x-2">
                            <button class="px-3 py-2 text-gray-400 hover:text-gray-600 disabled:opacity-50" disabled>
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="px-3 py-2 bg-blue-600 text-white rounded">1</button>
                            <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded">2</button>
                            <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded">3</button>
                            <span class="px-3 py-2 text-gray-400">...</span>
                            <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded">25</button>
                            <button class="px-3 py-2 text-gray-600 hover:text-gray-800">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        
                        <p class="text-sm text-gray-600">Hiển thị 1-10 trong 250 truyện</p>
                    </div>
                </div>

                <!-- Other Rankings Preview -->
                <section class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-trophy mr-3 text-yellow-500"></i>
                        Các bảng xếp hạng khác
                    </h2>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Most Viewed -->
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="font-bold text-lg mb-4 flex items-center">
                                <i class="fas fa-eye mr-2 text-blue-600"></i>
                                Lượt xem nhiều nhất
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <span class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-xs font-bold">1</span>
                                    <div class="w-10 h-12 bg-gradient-to-br from-blue-400 to-purple-600 rounded"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-sm">One Piece</p>
                                        <p class="text-xs text-gray-600">2.8M views</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="w-6 h-6 bg-gray-400 rounded-full flex items-center justify-center text-white text-xs font-bold">2</span>
                                    <div class="w-10 h-12 bg-gradient-to-br from-green-400 to-teal-600 rounded"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-sm">Naruto</p>
                                        <p class="text-xs text-gray-600">1.9M views</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center text-white text-xs font-bold">3</span>
                                    <div class="w-10 h-12 bg-gradient-to-br from-red-400 to-pink-600 rounded"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-sm">Attack on Titan</p>
                                        <p class="text-xs text-gray-600">1.6M views</p>
                                    </div>
                                </div>
                            </div>
                            <button class="w-full mt-4 text-blue-600 hover:text-blue-800 font-semibold text-sm">
                                Xem toàn bộ →
                            </button>
                        </div>

                        <!-- Most Liked -->
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="font-bold text-lg mb-4 flex items-center">
                                <i class="fas fa-heart mr-2 text-red-600"></i>
                                Yêu thích nhất
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <span class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-xs font-bold">1</span>
                                    <div class="w-10 h-12 bg-gradient-to-br from-pink-400 to-red-600 rounded"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-sm">Demon Slayer</p>
                                        <p class="text-xs text-gray-600">456K ❤</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="w-6 h-6 bg-gray-400 rounded-full flex items-center justify-center text-white text-xs font-bold">2</span>
                                    <div class="w-10 h-12 bg-gradient-to-br from-purple-400 to-blue-600 rounded"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-sm">One Piece</p>
                                        <p class="text-xs text-gray-600">423K ❤</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center text-white text-xs font-bold">3</span>
                                    <div class="w-10 h-12 bg-gradient-to-br from-indigo-400 to-purple-600 rounded"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-sm">Solo Leveling</p>
                                        <p class="text-xs text-gray-600">389K ❤</p>
                                    </div>
                                </div>
                            </div>
                            <button class="w-full mt-4 text-blue-600 hover:text-blue-800 font-semibold text-sm">
                                Xem toàn bộ →
                            </button>
                        </div>

                        <!-- Weekly Top -->
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="font-bold text-lg mb-4 flex items-center">
                                <i class="fas fa-calendar-week mr-2 text-green-600"></i>
                                Top tuần này
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <span class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-xs font-bold">1</span>
                                    <div class="w-10 h-12 bg-gradient-to-br from-emerald-400 to-teal-600 rounded"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-sm">Jujutsu Kaisen</p>
                                        <p class="text-xs text-gray-600">89K views</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="w-6 h-6 bg-gray-400 rounded-full flex items-center justify-center text-white text-xs font-bold">2</span>
                                    <div class="w-10 h-12 bg-gradient-to-br from-orange-400 to-red-600 rounded"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-sm">Chainsaw Man</p>
                                        <p class="text-xs text-gray-600">76K views</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <span class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center text-white text-xs font-bold">3</span>
                                    <div class="w-10 h-12 bg-gradient-to-br from-blue-400 to-indigo-600 rounded"></div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-sm">Tokyo Revengers</p>
                                        <p class="text-xs text-gray-600">64K views</p>
                                    </div>
                                </div>
                            </div>
                            <button class="w-full mt-4 text-blue-600 hover:text-blue-800 font-semibold text-sm">
                                Xem toàn bộ →
                            </button>
                        </div>
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
                    <h4 class="font-bold mb-4">Top Rankings</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Đánh giá cao nhất</a></li>
                        <li><a href="#" class="hover:text-white">Lượt xem nhiều nhất</a></li>
                        <li><a href="#" class="hover:text-white">Yêu thích nhất</a></li>
                        <li><a href="#" class="hover:text-white">Top tuần</a></li>
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
            const rankingView = document.getElementById('ranking-view');
            const gridView = document.getElementById('grid-view');
            const rankingBtn = document.querySelector('button[onclick="toggleView(\'ranking\')"]');
            const gridBtn = document.querySelector('button[onclick="toggleView(\'grid\')"]');
            
            if (viewType === 'ranking') {
                rankingView.classList.remove('hidden');
                gridView.classList.add('hidden');
                rankingBtn.classList.add('bg-blue-600', 'text-white');
                rankingBtn.classList.remove('bg-gray-200', 'text-gray-600');
                gridBtn.classList.remove('bg-blue-600', 'text-white');
                gridBtn.classList.add('bg-gray-200', 'text-gray-600');
            } else {
                rankingView.classList.add('hidden');
                gridView.classList.remove('hidden');
                gridBtn.classList.add('bg-blue-600', 'text-white');
                gridBtn.classList.remove('bg-gray-200', 'text-gray-600');
                rankingBtn.classList.remove('bg-blue-600', 'text-white');
                rankingBtn.classList.add('bg-gray-200', 'text-gray-600');
            }
        }

        // Animate ranking cards on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.top-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 100);
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