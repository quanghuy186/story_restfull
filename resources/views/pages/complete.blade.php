<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truyện hoàn thành - Ổ Truyện</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .completed-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
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
        .completed-badge {
            animation: completedPulse 3s infinite;
        }
        @keyframes completedPulse {
            0%, 100% { 
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
            }
            50% { 
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(34, 197, 94, 0);
            }
        }
        .progress-bar {
            background: linear-gradient(90deg, #10b981 0%, #059669 100%);
        }
        .chapter-counter {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        }
        .rating-stars {
            filter: drop-shadow(0 0 3px rgba(255, 193, 7, 0.5));
        }
        .featured-glow {
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);
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
                        <input type="text" placeholder="Tìm truyện hoàn thành..." 
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

    <!-- Hero Section -->
    <section class="completed-gradient text-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="inline-block mb-4">
                    <i class="fas fa-flag-checkered text-6xl text-green-300 animate-bounce"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    ✅ Truyện Hoàn Thành
                </h1>
                <p class="text-xl text-blue-100 mb-8">
                    Thưởng thức những câu chuyện đã có kết thúc trọn vẹn
                </p>
                <div class="flex items-center justify-center space-x-8 text-sm">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check-double text-green-400"></i>
                        <span>Kết thúc hoàn chỉnh</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-book-open text-yellow-400"></i>
                        <span>Đọc từ đầu đến cuối</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-medal text-orange-400"></i>
                        <span>Chất lượng đảm bảo</span>
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
                <span class="font-semibold text-gray-800">Truyện hoàn thành</span>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex gap-8">
            <!-- Sidebar -->
            <aside class="w-80">
                <!-- Completion Stats -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-chart-pie mr-2 text-green-600"></i>
                        Thống kê hoàn thành
                    </h3>
                    <div class="space-y-4">
                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <div class="text-3xl font-bold text-green-600 mb-1">3,247</div>
                            <div class="text-sm text-gray-600">Truyện hoàn thành</div>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <div class="text-center p-3 bg-blue-50 rounded-lg">
                                <div class="text-xl font-bold text-blue-600">456</div>
                                <div class="text-xs text-gray-600">Năm nay</div>
                            </div>
                            <div class="text-center p-3 bg-purple-50 rounded-lg">
                                <div class="text-xl font-bold text-purple-600">89</div>
                                <div class="text-xs text-gray-600">Tháng này</div>
                            </div>
                        </div>
                        <div class="text-center p-3 bg-orange-50 rounded-lg">
                            <div class="text-2xl font-bold text-orange-600">15.6M</div>
                            <div class="text-sm text-gray-600">Tổng lượt đọc</div>
                        </div>
                    </div>
                </div>

                <!-- Length Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-ruler mr-2 text-blue-600"></i>
                        Độ dài truyện
                    </h3>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded">
                            <span class="text-sm">Ngắn (1-50 chap)</span>
                            <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded ml-auto">234</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded" checked>
                            <span class="text-sm">Trung bình (51-200 chap)</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded ml-auto">1,456</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded">
                            <span class="text-sm">Dài (201-500 chap)</span>
                            <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded ml-auto">987</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded">
                            <span class="text-sm">Rất dài (500+ chap)</span>
                            <span class="text-xs bg-orange-100 text-orange-800 px-2 py-1 rounded ml-auto">570</span>
                        </label>
                    </div>
                </div>

                <!-- Year Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-calendar-check mr-2 text-purple-600"></i>
                        Năm hoàn thành
                    </h3>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="year" class="form-radio text-blue-600" checked>
                            <span class="text-sm">2025</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded ml-auto">89</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="year" class="form-radio text-blue-600">
                            <span class="text-sm">2024</span>
                            <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded ml-auto">456</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="year" class="form-radio text-blue-600">
                            <span class="text-sm">2023</span>
                            <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded ml-auto">623</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="year" class="form-radio text-blue-600">
                            <span class="text-sm">2022 trước đó</span>
                            <span class="text-xs bg-gray-100 text-gray-800 px-2 py-1 rounded ml-auto">2,079</span>
                        </label>
                    </div>
                </div>

                <!-- Genre Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-tags mr-2 text-orange-600"></i>
                        Thể loại phổ biến
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-blue-200 transition-colors">
                            Action <span class="text-xs">(892)</span>
                        </span>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-green-200 transition-colors">
                            Romance <span class="text-xs">(745)</span>
                        </span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-purple-200 transition-colors">
                            Fantasy <span class="text-xs">(634)</span>
                        </span>
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-red-200 transition-colors">
                            Drama <span class="text-xs">(523)</span>
                        </span>
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-yellow-200 transition-colors">
                            Comedy <span class="text-xs">(445)</span>
                        </span>
                        <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-indigo-200 transition-colors">
                            Slice of Life <span class="text-xs">(334)</span>
                        </span>
                    </div>
                </div>

                <!-- Hall of Fame -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-trophy mr-2 text-yellow-500"></i>
                        Danh đường hoàn thành
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div class="w-12 h-16 bg-gradient-to-br from-yellow-400 to-orange-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">One Piece</h4>
                                <p class="text-xs text-gray-600">1095 chapters • 4.9⭐</p>
                                <p class="text-xs text-green-600 font-semibold">Kinh điển</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-gray-400 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="w-12 h-16 bg-gradient-to-br from-blue-400 to-purple-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">Naruto</h4>
                                <p class="text-xs text-gray-600">700 chapters • 4.8⭐</p>
                                <p class="text-xs text-green-600 font-semibold">Huyền thoại</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="w-12 h-16 bg-gradient-to-br from-green-400 to-teal-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">Death Note</h4>
                                <p class="text-xs text-gray-600">108 chapters • 4.7⭐</p>
                                <p class="text-xs text-green-600 font-semibold">Masterpiece</p>
                            </div>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">📚 Truyện hoàn thành mới nhất</h2>
                            <p class="text-gray-600">3,247 bộ truyện đã hoàn thành - Đọc ngay những câu chuyện trọn vẹn</p>
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
                                <option>Mới hoàn thành</option>
                                <option>Cũ hoàn thành</option>
                                <option>Đánh giá cao</option>
                                <option>Số chapter nhiều</option>
                                <option>Lượt xem cao</option>
                                <option>Tên A-Z</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Featured Completed Series -->
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-lg p-6 mb-8 text-white featured-glow">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="flex items-center space-x-2 mb-2">
                                <i class="fas fa-star text-yellow-300"></i>
                                <span class="text-sm font-semibold">SERIES NỔI BẬT</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-2">🎉 Vừa hoàn thành trong tháng!</h3>
                            <p class="text-green-100 mb-4">
                                Khám phá 89 bộ truyện vừa kết thúc hành trình trong tháng này
                            </p>
                            <button class="bg-white text-green-600 px-6 py-2 rounded-lg font-semibold hover:bg-green-50 transition-colors">
                                Xem ngay
                            </button>
                        </div>
                        <div class="hidden md:block">
                            <div class="w-32 h-40 bg-white/20 rounded-lg backdrop-blur flex items-center justify-center">
                                <i class="fas fa-flag-checkered text-4xl text-white/80"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grid View -->
                <div id="manga-grid" class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                    @foreach ($complete_stories['data']['items'] as $item)
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden card-hover">
                            <div class="aspect-[3/4] relative overflow-hidden">
                                <a href="{{ route('story', $item['slug']) }}"> 
                                    <img src="{{ $item['thumb_url'] ? "https://otruyenapi.com/uploads/comics/".$item['thumb_url'] : '/images/default-manga.jpg' }}" alt="" class="w-full h-full bg-gradient-to-br from-emerald-400 to-teal-600">
                                    <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                                        <button class="bg-white text-black px-4 py-2 rounded-lg font-semibold opacity-0 hover:opacity-100 transform scale-75 hover:scale-100 transition-all duration-300">
                                            <i class="fas fa-book-open mr-2"></i>
                                            Đọc từ đầu
                                        </button>
                                    </div>
                                    <div class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-bold completed-badge">
                                        HOÀN THÀNH
                                    </div>
                                </a>
                                
                                <div class="absolute bottom-0 left-0 right-0 h-1 progress-bar"></div>
                                <div class="absolute bottom-2 right-2 chapter-counter text-white px-2 py-1 rounded text-xs font-bold">
                                    <i class="fas fa-list-ol mr-1"></i>
                                    @if(!empty($item['chaptersLatest']))
                                        @foreach ($item['chaptersLatest'] as $chapter)
                                                {{ $chapter['chapter_name'] ?? 'Chapter 278' }}
                                        @endforeach
                                    @else
                                        0
                                    @endif
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold mb-2 line-clamp-2 hover:text-blue-600 cursor-pointer">{{ $item['name'] ?? 'chưa cập nhật' }}</h3>
                                <p class="text-sm text-gray-600 mb-3">Hoàn thành • 2021</p>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-1 text-yellow-500 text-sm rating-stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="ml-1 font-bold text-gray-800">4.8</span>
                                    </div>
                                    <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded font-semibold">
                                        Kết thúc tuyệt vời
                                    </span>
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
                                    <span class="text-xs text-gray-500">1.2M lượt đọc</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>

                <!-- Load More Section -->
                <div class="bg-white rounded-lg shadow-sm p-8 mb-8">
                    <div class="text-center">
                        <button class="bg-green-600 text-white px-8 py-3 rounded-lg hover:bg-green-700 transition-colors font-semibold mb-4">
                            <i class="fas fa-plus mr-2"></i>
                            Tải thêm truyện hoàn thành
                        </button>
                        <p class="text-sm text-gray-600">Hiển thị 8/3,247 truyện hoàn thành</p>
                        
                        <!-- Progress indicator -->
                        <div class="mt-4 w-full bg-gray-200 rounded-full h-2 max-w-md mx-auto">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 15%"></div>
                        </div>
                    </div>
                </div>

                <!-- Completion Categories -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-crown mr-3 text-yellow-500"></i>
                        Danh mục hoàn thành đặc biệt
                    </h2>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Legendary Completed -->
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg p-6 text-white">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-bold">👑 Huyền thoại</h3>
                                <i class="fas fa-trophy text-2xl"></i>
                            </div>
                            <p class="text-sm mb-4 opacity-90">
                                Những bộ truyện kinh điển đã tạo nên lịch sử manga
                            </p>
                            <div class="space-y-2 mb-4">
                                <div class="flex justify-between text-sm">
                                    <span>One Piece</span>
                                    <span>4.9⭐</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Dragon Ball</span>
                                    <span>4.8⭐</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Naruto</span>
                                    <span>4.9⭐</span>
                                </div>
                            </div>
                            <button class="w-full bg-white text-orange-600 py-2 rounded font-semibold hover:bg-orange-50 transition-colors">
                                Xem tất cả 12 truyện →
                            </button>
                        </div>

                        <!-- Recently Completed -->
                        <div class="bg-gradient-to-br from-green-400 to-emerald-500 rounded-lg p-6 text-white">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-bold">🆕 Mới hoàn thành</h3>
                                <i class="fas fa-flag-checkered text-2xl"></i>
                            </div>
                            <p class="text-sm mb-4 opacity-90">
                                Những bộ truyện vừa kết thúc trong năm 2025
                            </p>
                            <div class="space-y-2 mb-4">
                                <div class="flex justify-between text-sm">
                                    <span>Jujutsu Kaisen</span>
                                    <span>Tháng 1</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Chainsaw Man P1</span>
                                    <span>Tháng 2</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Spy x Family</span>
                                    <span>Tháng 3</span>
                                </div>
                            </div>
                            <button class="w-full bg-white text-green-600 py-2 rounded font-semibold hover:bg-green-50 transition-colors">
                                Xem tất cả 89 truyện →
                            </button>
                        </div>

                        <!-- Short & Sweet -->
                        <div class="bg-gradient-to-br from-purple-400 to-indigo-500 rounded-lg p-6 text-white">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-bold">⚡ Ngắn gọn</h3>
                                <i class="fas fa-bolt text-2xl"></i>
                            </div>
                            <p class="text-sm mb-4 opacity-90">
                                Truyện ngắn dưới 50 chap, đọc xong trong 1 ngày
                            </p>
                            <div class="space-y-2 mb-4">
                                <div class="flex justify-between text-sm">
                                    <span>Death Note</span>
                                    <span>108 chap</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Akira</span>
                                    <span>38 chap</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Monster</span>
                                    <span>162 chap</span>
                                </div>
                            </div>
                            <button class="w-full bg-white text-purple-600 py-2 rounded font-semibold hover:bg-purple-50 transition-colors">
                                Xem tất cả 234 truyện →
                            </button>
                        </div>
                    </div>
                </section>

                <!-- Completion Timeline -->
                <section class="bg-white rounded-lg shadow-sm p-6 mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-timeline mr-2 text-blue-600"></i>
                        Timeline hoàn thành gần đây
                    </h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-3 h-3 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-semibold text-gray-800">Attack on Titan</h4>
                                    <span class="text-sm text-gray-500">3 ngày trước</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-2">
                                    Kết thúc sau 12 năm với 139 chapters đầy cảm xúc
                                </p>
                                <div class="flex items-center space-x-4 text-xs">
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded">139 chapters</span>
                                    <span class="text-yellow-500">⭐ 4.8</span>
                                    <span class="text-blue-600">👁 1.2M views</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-semibold text-gray-800">Demon Slayer</h4>
                                    <span class="text-sm text-gray-500">1 tuần trước</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-2">
                                    Hoàn thành hành trình diệt quỷ với 205 chapters
                                </p>
                                <div class="flex items-center space-x-4 text-xs">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">205 chapters</span>
                                    <span class="text-yellow-500">⭐ 4.6</span>
                                    <span class="text-blue-600">👁 956K views</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-3 h-3 bg-purple-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-semibold text-gray-800">Tokyo Revengers</h4>
                                    <span class="text-sm text-gray-500">2 tuần trước</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-2">
                                    Kết thúc câu chuyện du hành thời gian với 278 chapters
                                </p>
                                <div class="flex items-center space-x-4 text-xs">
                                    <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded">278 chapters</span>
                                    <span class="text-yellow-500">⭐ 4.2</span>
                                    <span class="text-blue-600">👁 723K views</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-6">
                        <button class="text-blue-600 hover:text-blue-800 font-semibold">
                            Xem timeline đầy đủ →
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
                    <h4 class="font-bold mb-4">Truyện hoàn thành</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Huyền thoại</a></li>
                        <li><a href="#" class="hover:text-white">Mới hoàn thành</a></li>
                        <li><a href="#" class="hover:text-white">Truyện ngắn</a></li>
                        <li><a href="#" class="hover:text-white">Đánh giá cao</a></li>
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

        // Animate cards on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card-hover');
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

            // Animate completion timeline
            const timelineItems = document.querySelectorAll('.timeline-item');
            timelineItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                }, index * 200);
            });
        });

        // Progress bar animation
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.width = '100%';
                bar.style.transition = 'width 2s ease-in-out';
            }, 1000);
        });
    </script>
</body>
</html>
                

