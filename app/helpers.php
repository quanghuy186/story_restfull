<?php
if (!function_exists('timeAgo')) {
    function timeAgo($datetime) {
        return \Carbon\Carbon::parse($datetime)->locale('vi')->diffForHumans();
    }
}