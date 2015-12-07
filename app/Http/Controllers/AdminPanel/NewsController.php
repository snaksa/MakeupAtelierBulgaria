<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ImportantMessage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Product;
use App\Models\News;

class NewsController extends Controller {

    public function AddNewsPage() {
        return view("AdminPanel.admin_addNews");
    }
    
    public function AddNews() {
        $title = $_POST["newsTitle"];
        $text = $_POST["newsText"];
        $author = $_POST["newsAuthor"];

        if (Input::hasFile("news_picture")) {
            $file = Input::file("news_picture");
            $folder = '/images/';
            $destinationPath = public_path() . $folder;
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $img_path = $folder . $filename;
            $uploadSuccess = $file->move($destinationPath, $filename);
        }
        
        News::AddNews($title, $text, $img_path, $author);
        //redirect to the list with all news
    }
    
    public function EditNews(){
        $news = News::GetNews();
        $data["news"] = $news;
        return view("AdminPanel.admin_edit_news", ["data"=>$data]);
    }
    
    public function EditSingleNews($id){
        $news = News::GetSingleNews($id);
        $data["singleNews"] = $news[0];
        return view("AdminPanel.admin_edit_single_news", ["data"=>$data]);
    }
    
    public function EditSelectedNews($id){
        $title = $_POST["newsTitle"];
        $text = $_POST["newsText"];
        $author = $_POST["newsAuthor"];

        if (Input::hasFile("news_picture")) {
            $file = Input::file("news_picture");
            $folder = '/images/';
            $destinationPath = public_path() . $folder;
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $img_path = $folder . $filename;
            $uploadSuccess = $file->move($destinationPath, $filename);
            
            $pd = News::GetSingleNews($id);
            $img = $pd[0]->news_image;
            if(File::exists(public_path().$img)){
                File::delete(public_path().$img);
            }
        }
        else{
            $n = News::GetSingleNews($id);
            $img_path = $n[0]->news_image;
        }
        
        News::UpdateNews($title, $text, $img_path, $author, $id);
        return Redirect::back();
    }
}
