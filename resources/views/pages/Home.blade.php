@extends('app')

@section('content')
    <section class="mb-8">
                    <div class="bg-gradient-to-r from-red-500 to-pink-500 rounded-lg p-6 text-white">
                        <h2 class="text-2xl font-bold mb-4">🔥 Truyện HOT nhất</h2>
                        <div class="grid md:grid-cols-3 gap-4">
                            @foreach (array_slice($story_hots['data']['items'], 0, 3) as $item)
                                <div class="bg-white/10 backdrop-blur rounded-lg p-4">
                                    <img class="aspect-[3/4] bg-gray-300 rounded mb-3" src="{{ $item['thumb_url'] ? "https://otruyenapi.com/uploads/comics/".$item['thumb_url'] : '/images/default-manga.jpg' }}" alt="">
                                    <h3 class="font-semibold mb-1">{{ $item['name'] }}</h3>
                                </div>
                            @endforeach
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
                                <a href="{{ route('story', $item['slug']) }}">
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
                                </a>
                                
                                <div class="p-4">
                                    <h3 class="font-semibold mb-2 line-clamp-2">{{ $item['name'] }}</h3>
                                    @if (isset($item['chaptersLatest']))
                                        @foreach ($item['chaptersLatest'] as $chapter_name)
                                            <p class="text-sm text-gray-600 mb-3">{{ $chapter_name['chapter_name'] ?? 'Chapter 278' }} Chương</p> 
                                        @endforeach
                                    @endif
                                    
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-1 text-yellow-500 text-sm">
                                            <i class="fas fa-star"></i>
                                            <span>{{ $item['rating'] ?? '4.6' }}</span>
                                        </div>
                                        <span class="text-xs text-gray-500">{{ timeAgo($item['updatedAt']) ?? '1 ngày trước' }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
@endsection

@section('slidebar')

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
                    </div>
                </div>

                <!-- Genres -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">📚 Thể loại</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($categories['data']['items'] as $item)
                            <a href="{{ route('list_category', $item['slug']) }}">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm cursor-pointer hover:bg-blue-200">{{ $item['name'] }}</span>
                            </a>
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
@endsection