@extends('app')

@section('content')
    <section class="following-gradient text-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="inline-block mb-4">
                    <i class="fas fa-bookmark text-6xl text-yellow-300"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    📚 Danh Sách Theo Dõi
                </h1>
                <p class="text-xl text-blue-100 mb-8">
                    Quản lý và theo dõi tiến độ đọc truyện của bạn
                </p>
                <div class="flex items-center justify-center space-x-8 text-sm">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-chart-line text-green-400"></i>
                        <span>Theo dõi tiến độ</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-bell text-yellow-400"></i>
                        <span>Thông báo chapter mới</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-list-ul text-orange-400"></i>
                        <span>Quản lý danh sách</span>
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
                <span class="font-semibold text-gray-800">Theo dõi</span>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex gap-8">
            <!-- Sidebar -->
            <aside class="w-80">
                <!-- Reading Stats -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-chart-pie mr-2 text-blue-600"></i>
                        Thống kê đọc truyện
                    </h3>
                    <div class="space-y-4">
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-3xl font-bold text-blue-600 mb-1">47</div>
                            <div class="text-sm text-gray-600">Đang theo dõi</div>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <div class="text-center p-3 bg-green-50 rounded-lg">
                                <div class="text-xl font-bold text-green-600">12</div>
                                <div class="text-xs text-gray-600">Hoàn thành</div>
                            </div>
                            <div class="text-center p-3 bg-orange-50 rounded-lg">
                                <div class="text-xl font-bold text-orange-600">8</div>
                                <div class="text-xs text-gray-600">Tạm dừng</div>
                            </div>
                        </div>
                        <div class="text-center p-3 bg-purple-50 rounded-lg">
                            <div class="text-2xl font-bold text-purple-600">2,347</div>
                            <div class="text-sm text-gray-600">Chapter đã đọc</div>
                        </div>
                    </div>
                </div>

                <!-- Status Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-filter mr-2 text-green-600"></i>
                        Trạng thái đọc
                    </h3>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded" checked>
                            <span class="text-sm">Đang đọc</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded ml-auto">23</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded" checked>
                            <span class="text-sm">Hoàn thành</span>
                            <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded ml-auto">12</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded" checked>
                            <span class="text-sm">Tạm dừng</span>
                            <span class="text-xs bg-orange-100 text-orange-800 px-2 py-1 rounded ml-auto">8</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded">
                            <span class="text-sm">Bỏ dở</span>
                            <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded ml-auto">3</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" class="form-checkbox text-blue-600 rounded">
                            <span class="text-sm">Dự định đọc</span>
                            <span class="text-xs bg-gray-100 text-gray-800 px-2 py-1 rounded ml-auto">15</span>
                        </label>
                    </div>
                </div>

                <!-- Update Notifications -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-bell mr-2 text-yellow-500"></i>
                        Chapter mới
                        <span class="ml-auto w-2 h-2 bg-red-500 rounded-full notification-badge"></span>
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3 p-2 bg-blue-50 rounded-lg new-chapter">
                            <div class="w-10 h-12 bg-gradient-to-br from-blue-400 to-purple-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">One Piece</h4>
                                <p class="text-xs text-gray-600">Chapter 1096 • 2 giờ trước</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 p-2 bg-green-50 rounded-lg">
                            <div class="w-10 h-12 bg-gradient-to-br from-green-400 to-teal-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">Jujutsu Kaisen</h4>
                                <p class="text-xs text-gray-600">Chapter 246 • 5 giờ trước</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 p-2 bg-orange-50 rounded-lg">
                            <div class="w-10 h-12 bg-gradient-to-br from-orange-400 to-red-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">My Hero Academia</h4>
                                <p class="text-xs text-gray-600">Chapter 411 • 1 ngày trước</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full mt-4 text-blue-600 hover:text-blue-800 font-semibold text-sm">
                        Xem tất cả thông báo →
                    </button>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-tools mr-2 text-purple-600"></i>
                        Thao tác nhanh
                    </h3>
                    <div class="space-y-3">
                        <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                            <i class="fas fa-plus mr-2"></i>
                            Thêm truyện mới
                        </button>
                        <button class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                            <i class="fas fa-download mr-2"></i>
                            Xuất danh sách
                        </button>
                        <button class="w-full bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700 transition-colors">
                            <i class="fas fa-sync mr-2"></i>
                            Đồng bộ dữ liệu
                        </button>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="flex-1">
                <!-- Header -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">📖 Danh sách theo dõi của bạn</h2>
                            <p class="text-gray-600">47 truyện đang theo dõi • 5 chapter mới cần đọc</p>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <!-- View toggle -->
                            <div class="flex items-center space-x-2">
                                <button class="p-2 bg-blue-600 text-white rounded transition-colors" onclick="toggleView('list')">
                                    <i class="fas fa-list"></i>
                                </button>
                                <button class="p-2 bg-gray-200 text-gray-600 rounded hover:bg-gray-300 transition-colors" onclick="toggleView('grid')">
                                    <i class="fas fa-th"></i>
                                </button>
                            </div>
                            
                            <!-- Sort dropdown -->
                            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                                <option>Cập nhật gần đây</option>
                                <option>Tên A-Z</option>
                                <option>Tên Z-A</option>
                                <option>Ngày thêm</option>
                                <option>Tiến độ đọc</option>
                                <option>Đánh giá</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Reading Progress Summary -->
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg p-6 mb-8 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-bold mb-2">🎯 Tiến độ đọc hôm nay</h3>
                            <p class="text-blue-100 mb-4">Bạn đã đọc 8 chapter từ 3 bộ truyện khác nhau</p>
                            <div class="flex items-center space-x-6">
                                <div class="text-center">
                                    <div class="text-2xl font-bold">8</div>
                                    <div class="text-sm opacity-90">Chapters</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold">2.5h</div>
                                    <div class="text-sm opacity-90">Thời gian</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold">3</div>
                                    <div class="text-sm opacity-90">Truyện</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="w-32 h-32 bg-white/20 rounded-full backdrop-blur flex items-center justify-center">
                                <i class="fas fa-chart-pie text-4xl text-white/80"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- List View -->
                <div id="manga-list" class="space-y-4 mb-8">
                    <!-- Following Item 1 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 card-hover">
                        <div class="flex items-center space-x-6">
                            <div class="w-16 h-20 bg-gradient-to-br from-blue-400 to-purple-600 rounded flex-shrink-0 relative">
                                <div class="absolute -top-2 -right-2 w-4 h-4 bg-red-500 rounded-full notification-badge"></div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">
                                            One Piece
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3">
                                            Tác giả: Eiichiro Oda • Action, Adventure
                                        </p>
                                        <div class="flex items-center space-x-4 mb-3">
                                            <div class="flex items-center space-x-2">
                                                <span class="text-sm text-gray-600">Tiến độ:</span>
                                                <span class="font-semibold">1094/1095</span>
                                                <div class="w-24 h-2 bg-gray-200 rounded-full">
                                                    <div class="reading-progress h-2 rounded-full" style="width: 99.9%"></div>
                                                </div>
                                                <span class="text-xs text-green-600 font-semibold">99.9%</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="status-reading text-white px-3 py-1 rounded-full font-semibold">
                                                Đang đọc
                                            </span>
                                            <div class="flex items-center space-x-1 text-yellow-500">
                                                <i class="fas fa-star"></i>
                                                <span>4.9</span>
                                            </div>
                                            <span class="text-gray-500">Thêm 2 năm trước</span>
                                            <span class="text-red-500 font-semibold">Chapter mới!</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button class="p-2 text-gray-400 hover:text-red-500 transition-colors" title="Thích">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="p-2 text-gray-400 hover:text-blue-500 transition-colors" title="Cài đặt">
                                            <i class="fas fa-cog"></i>
                                        </button>
                                        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors">
                                            Đánh giá
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Following Item 4 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 card-hover">
                        <div class="flex items-center space-x-6">
                            <div class="w-16 h-20 bg-gradient-to-br from-orange-400 to-red-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">
                                            My Hero Academia
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3">
                                            Tác giả: Kohei Horikoshi • Action, Superhero
                                        </p>
                                        <div class="flex items-center space-x-4 mb-3">
                                            <div class="flex items-center space-x-2">
                                                <span class="text-sm text-gray-600">Tiến độ:</span>
                                                <span class="font-semibold">385/410</span>
                                                <div class="w-24 h-2 bg-gray-200 rounded-full">
                                                    <div class="bg-orange-600 h-2 rounded-full" style="width: 94%"></div>
                                                </div>
                                                <span class="text-xs text-orange-600 font-semibold">94%</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="status-paused text-white px-3 py-1 rounded-full font-semibold">
                                                Tạm dừng
                                            </span>
                                            <div class="flex items-center space-x-1 text-yellow-500">
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </div>
                                            <span class="text-gray-500">Dừng 2 tháng trước</span>
                                            <span class="text-orange-500 font-semibold">25 chapter mới</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button class="p-2 text-gray-400 hover:text-red-500 transition-colors" title="Thích">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="p-2 text-gray-400 hover:text-blue-500 transition-colors" title="Cài đặt">
                                            <i class="fas fa-cog"></i>
                                        </button>
                                        <button class="bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700 transition-colors">
                                            Tiếp tục
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Following Item 5 -->
                    <div class="bg-white rounded-lg shadow-sm p-6 card-hover">
                        <div class="flex items-center space-x-6">
                            <div class="w-16 h-20 bg-gradient-to-br from-indigo-400 to-purple-600 rounded flex-shrink-0"></div>
                            <div class="flex-1">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 cursor-pointer">
                                            Solo Leveling
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3">
                                            Tác giả: Chugong • Action, Fantasy
                                        </p>
                                        <div class="flex items-center space-x-4 mb-3">
                                            <div class="flex items-center space-x-2">
                                                <span class="text-sm text-gray-600">Tiến độ:</span>
                                                <span class="font-semibold">0/179</span>
                                                <div class="w-24 h-2 bg-gray-200 rounded-full">
                                                    <div class="bg-gray-400 h-2 rounded-full" style="width: 0%"></div>
                                                </div>
                                                <span class="text-xs text-gray-600 font-semibold">0%</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="status-planning text-white px-3 py-1 rounded-full font-semibold">
                                                Dự định đọc
                                            </span>
                                            <div class="flex items-center space-x-1 text-yellow-500">
                                                <i class="fas fa-star"></i>
                                                <span>4.6</span>
                                            </div>
                                            <span class="text-gray-500">Thêm 1 tuần trước</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button class="p-2 text-gray-400 hover:text-red-500 transition-colors" title="Thích">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="p-2 text-gray-400 hover:text-blue-500 transition-colors" title="Cài đặt">
                                            <i class="fas fa-cog"></i>
                                        </button>
                                        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors">
                                            Bắt đầu đọc
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grid View (Hidden by default) -->
                <div id="manga-grid" class="hidden grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                    <!-- Grid Item 1 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden card-hover">
                        <div class="aspect-[3/4] relative">
                            <div class="w-full h-full bg-gradient-to-br from-blue-400 to-purple-600"></div>
                            <div class="absolute top-2 left-2 status-reading text-white px-2 py-1 rounded text-xs font-bold">
                                Đang đọc
                            </div>
                            <div class="absolute top-2 right-2 w-3 h-3 bg-red-500 rounded-full notification-badge"></div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 reading-progress"></div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold mb-2 line-clamp-2">One Piece</h3>
                            <div class="text-xs text-gray-600 mb-2">1094/1095 • 99.9%</div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-red-500 font-semibold">Chapter mới!</span>
                                <button class="text-blue-600 text-xs font-semibold">Đọc tiếp</button>
                            </div>
                        </div>
                    </div>

                    <!-- More grid items... -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden card-hover">
                        <div class="aspect-[3/4] relative">
                            <div class="w-full h-full bg-gradient-to-br from-green-400 to-teal-600"></div>
                            <div class="absolute top-2 left-2 status-reading text-white px-2 py-1 rounded text-xs font-bold">
                                Đang đọc
                            </div>
                            <div class="absolute top-2 right-2 w-3 h-3 bg-red-500 rounded-full notification-badge"></div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 reading-progress"></div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold mb-2 line-clamp-2">Jujutsu Kaisen</h3>
                            <div class="text-xs text-gray-600 mb-2">245/246 • 99.6%</div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-red-500 font-semibold">Chapter mới!</span>
                                <button class="text-blue-600 text-xs font-semibold">Đọc tiếp</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm overflow-hidden card-hover">
                        <div class="aspect-[3/4] relative">
                            <div class="w-full h-full bg-gradient-to-br from-purple-400 to-pink-600"></div>
                            <div class="absolute top-2 left-2 status-completed text-white px-2 py-1 rounded text-xs font-bold">
                                Hoàn thành
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 h-1 bg-purple-600"></div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold mb-2 line-clamp-2">Attack on Titan</h3>
                            <div class="text-xs text-gray-600 mb-2">139/139 • 100%</div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-purple-600 font-semibold">Đã xem xong</span>
                                <button class="text-purple-600 text-xs font-semibold">Đánh giá</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Timeline -->
                <section class="bg-white rounded-lg shadow-sm p-6 mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-history mr-2 text-blue-600"></i>
                        Hoạt động gần đây
                    </h3>
                    
                    <div class="relative activity-timeline pl-8">
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mt-2 flex-shrink-0 relative z-10"></div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-semibold text-gray-800">Đọc One Piece Chapter 1095</h4>
                                        <span class="text-sm text-gray-500">2 giờ trước</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">
                                        Hoàn thành chapter mới nhất. Cốt truyện ngày càng hấp dẫn!
                                    </p>
                                    <div class="flex items-center space-x-4 text-xs">
                                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">Chapter 1095</span>
                                        <span class="text-gray-500">⏱ 15 phút đọc</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-3 h-3 bg-green-500 rounded-full mt-2 flex-shrink-0 relative z-10"></div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-semibold text-gray-800">Thêm Solo Leveling vào danh sách</h4>
                                        <span class="text-sm text-gray-500">1 tuần trước</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">
                                        Đã thêm vào danh sách "Dự định đọc" sau khi xem nhiều review tích cực
                                    </p>
                                    <div class="flex items-center space-x-4 text-xs">
                                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded">Dự định đọc</span>
                                        <span class="text-gray-500">179 chapters</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-3 h-3 bg-purple-500 rounded-full mt-2 flex-shrink-0 relative z-10"></div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-semibold text-gray-800">Hoàn thành Attack on Titan</h4>
                                        <span class="text-sm text-gray-500">6 tháng trước</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">
                                        Kết thúc hành trình 12 năm theo dõi. Đánh giá 5 sao!
                                    </p>
                                    <div class="flex items-center space-x-4 text-xs">
                                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded">Hoàn thành</span>
                                        <span class="text-yellow-500">⭐⭐⭐⭐⭐</span>
                                        <span class="text-gray-500">139 chapters</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-3 h-3 bg-orange-500 rounded-full mt-2 flex-shrink-0 relative z-10"></div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-semibold text-gray-800">Tạm dừng My Hero Academia</h4>
                                        <span class="text-sm text-gray-500">2 tháng trước</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">
                                        Dừng tại chapter 385. Sẽ quay lại khi có thời gian rảnh
                                    </p>
                                    <div class="flex items-center space-x-4 text-xs">
                                        <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded">Tạm dừng</span>
                                        <span class="text-gray-500">385/410 chapters</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-6">
                        <button class="text-blue-600 hover:text-blue-800 font-semibold">
                            Xem tất cả hoạt động →
                        </button>
                    </div>
                </section>

                <!-- Reading Goals -->
                <section class="bg-white rounded-lg shadow-sm p-6 mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-target mr-2 text-green-600"></i>
                        Mục tiêu đọc tháng này
                    </h3>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <div class="w-20 h-20 mx-auto mb-3 relative">
                                <svg class="w-20 h-20 transform -rotate-90" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="40" stroke="#e5e7eb" stroke-width="8" fill="none"></circle>
                                    <circle cx="50" cy="50" r="40" stroke="#3b82f6" stroke-width="8" fill="none"
                                            stroke-dasharray="251.3" stroke-dashoffset="75.4" stroke-linecap="round"></circle>
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-lg font-bold text-blue-600">70%</span>
                                </div>
                            </div>
                            <h4 class="font-semibold mb-1">Chapters đọc</h4>
                            <p class="text-2xl font-bold text-blue-600">140/200</p>
                            <p class="text-sm text-gray-600">60 chapters nữa</p>
                        </div>

                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <div class="w-20 h-20 mx-auto mb-3 relative">
                                <svg class="w-20 h-20 transform -rotate-90" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="40" stroke="#e5e7eb" stroke-width="8" fill="none"></circle>
                                    <circle cx="50" cy="50" r="40" stroke="#10b981" stroke-width="8" fill="none"
                                            stroke-dasharray="251.3" stroke-dashoffset="100.5" stroke-linecap="round"></circle>
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-lg font-bold text-green-600">60%</span>
                                </div>
                            </div>
                            <h4 class="font-semibold mb-1">Truyện mới</h4>
                            <p class="text-2xl font-bold text-green-600">3/5</p>
                            <p class="text-sm text-gray-600">2 truyện nữa</p>
                        </div>

                        <div class="text-center p-4 bg-purple-50 rounded-lg">
                            <div class="w-20 h-20 mx-auto mb-3 relative">
                                <svg class="w-20 h-20 transform -rotate-90" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="40" stroke="#e5e7eb" stroke-width="8" fill="none"></circle>
                                    <circle cx="50" cy="50" r="40" stroke="#8b5cf6" stroke-width="8" fill="none"
                                            stroke-dasharray="251.3" stroke-dashoffset="125.6" stroke-linecap="round"></circle>
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-lg font-bold text-purple-600">50%</span>
                                </div>
                            </div>
                            <h4 class="font-semibold mb-1">Hoàn thành</h4>
                            <p class="text-2xl font-bold text-purple-600">1/2</p>
                            <p class="text-sm text-gray-600">1 truyện nữa</p>
                        </div>
                    </div>
                </section>

                <!-- Load More -->
                <div class="text-center py-8">
                    <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                        <i class="fas fa-chevron-down mr-2"></i>
                        Tải thêm truyện theo dõi
                    </button>
                    <p class="text-sm text-gray-600 mt-2">Hiển thị 5/47 truyện trong danh sách</p>
                </div>
            </main>
        </div>
        </div>
@endsection
<body class="bg-gray-50">
  

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-4 py-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="font-bold mb-4">Ổ Truyện</h4>
                    <p class="text-sm text-gray-400">Trang web đọc truyện tranh online miễn phí, chất lượng cao.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Quản lý theo dõi</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Đang đọc</a></li>
                        <li><a href="#" class="hover:text-white">Hoàn thành</a></li>
                        <li><a href="#" class="hover:text-white">Dự định đọc</a></li>
                        <li><a href="#" class="hover:text-white">Đánh giá</a></li>
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
            const listView = document.getElementById('manga-list');
            const gridView = document.getElementById('manga-grid');
            const listBtn = document.querySelector('button[onclick="toggleView(\'list\')"]');
            const gridBtn = document.querySelector('button[onclick="toggleView(\'grid\')"]');
            
            if (viewType === 'list') {
                listView.classList.remove('hidden');
                gridView.classList.add('hidden');
                listBtn.classList.add('bg-blue-600', 'text-white');
                listBtn.classList.remove('bg-gray-200', 'text-gray-600');
                gridBtn.classList.remove('bg-blue-600', 'text-white');
                gridBtn.classList.add('bg-gray-200', 'text-gray-600');
            } else {
                listView.classList.add('hidden');
                gridView.classList.remove('hidden');
                gridBtn.classList.add('bg-blue-600', 'text-white');
                gridBtn.classList.remove('bg-gray-200', 'text-gray-600');
                listBtn.classList.remove('bg-blue-600', 'text-white');
                listBtn.classList.add('bg-gray-200', 'text-gray-600');
            }
        }

        // Animate progress bars
        document.addEventListener('DOMContentLoaded', function() {
            const progressBars = document.querySelectorAll('.reading-progress');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.width = width;
                    bar.style.transition = 'width 1.5s ease-in-out';
                }, 500);
            });

            // Animate circular progress
            setTimeout(() => {
                const circles = document.querySelectorAll('circle[stroke-dashoffset]');
                circles.forEach(circle => {
                    circle.style.transition = 'stroke-dashoffset 2s ease-in-out';
                });
            }, 1000);

            // Animate cards on scroll
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
        });
    </script>
</body>
</html>
                                           