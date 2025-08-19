@extends('app')

@section('content')
    <div class="bg-white border-b">
            <div class="container mx-auto px-4 py-3">
                <div class="flex items-center space-x-2 text-sm">
                    <a href="#" class="text-blue-600 hover:underline">Trang chủ</a>
                    <i class="fas fa-chevron-right text-gray-400"></i>
                    <span class="text-gray-600">Thể loại</span>
                    <i class="fas fa-chevron-right text-gray-400"></i>
                    <span class="font-semibold text-gray-800">
                            @foreach ($categories['data']['items'] as $item)
                                @if($item['slug'] === request()->segment(2))
                                    {{ $item['name'] }}
                                @endif
                            @endforeach
                    </span>
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
                            <h1 class="text-2xl font-bold text-gray-800 mb-2">Thể loại: 
                                @foreach ($categories['data']['items'] as $item)
                                    @if($item['slug'] === request()->segment(2))
                                        {{ $item['name'] }}
                                    @endif
                                @endforeach 
                            </h1>
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
                                    {{ $action['status'] == 'ongoing' ? 'Đang tiến hành' : 'Hoàn thành'}}
                                </div>
                                
                                <!-- Hot badge -->
                                <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                                    HOT
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold mb-2 line-clamp-2 group-hover:text-blue-600">{{ $action['name'] }}</h3>
                                    @if(isset($action['chaptersLatest']))
                                        @foreach ($action['chaptersLatest'] as $chapter_name)
                                            <p class="text-sm text-gray-600 mb-3">{{ $chapter_name['chapter_name'] ?? 'Chapter 278' }} chương</p> 
                                        @endforeach
                                    @endif
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
@endsection

<style>
        .filter-active {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
        }
    </style>