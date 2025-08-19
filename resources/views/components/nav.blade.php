<!-- Navigation -->
    <nav class="bg-blue-600 text-white">
        <div class="container mx-auto px-4">
            <div class="flex items-center space-x-8 py-3">
                <a href="#" class="hover:text-blue-200 flex items-center space-x-1">
                    <i class="fas fa-home"></i>
                    <span>Trang chủ</span>
                </a>
                <a href="{{route('list_category', 'action')}}" class="hover:text-blue-200">Thể loại</a>
                <a href="{{ route('list_story', 'top-truyen') }}" class="hover:text-blue-200">Top truyện</a>
                <a href="{{ route('list_story', 'truyen-moi') }}" class="text-blue-200 font-semibold">Truyện mới</a>
                <a href="{{ route('list_story', 'hoan-thanh') }}" class="hover:text-blue-200">Hoàn thành</a>
                <a href="#" class="hover:text-blue-200">Theo dõi</a>
            </div>
        </div>
    </nav>