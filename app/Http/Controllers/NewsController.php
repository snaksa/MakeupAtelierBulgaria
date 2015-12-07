<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller {

    public function GetNews() {
        $news = News::GetNews();
        $data["news"] = $news;
        return view("news", ["data" => $data]);
    }

    public function GetSingleNews($id) {
        $n = News::GetSingleNews($id);
        $news = $n[0];
        $data["news"] = $news;
        
        $latestNews = News::GetLatestNews(3);
        $data["latestNews"] = $latestNews;
        
        return view("single_news", ["data"=>$data]);
    }

}
