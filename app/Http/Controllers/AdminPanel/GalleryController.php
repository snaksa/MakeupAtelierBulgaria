<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Gallery;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller {

    public function AddGalleryPage() {
        return view("AdminPanel.admin_add_gallery");
    }

    public function AddGallery() {
        $title = $_POST["galleryTitle"];

        if (Input::hasFile("galleryPicture")) {
            $file = Input::file("galleryPicture");
            $folder = '/images/';
            $destinationPath = public_path() . $folder;
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $img_path = $folder . $filename;
            $uploadSuccess = $file->move($destinationPath, $filename);
        }

        Gallery::AddGallery($title, $img_path);
        //News::AddNews($title, $text, $img_path, $author);
        //redirect to the list with all galleries
    }

    public function EditGalleryPage() {
        $allGalleries = Gallery::GetAllGalleries();
        $size = count($allGalleries);
        for ($i = 0; $i < $size; $i++) {
            $allGalleries[$i]->image_count = Gallery::GetGalleryImagesCount($allGalleries[$i]->gallery_id);
        }
        $data["galleries"] = $allGalleries;

        return view("AdminPanel.admin_edit_galleries", ["data" => $data]);
    }

    public function EditSingleGalleryPage($id) {
        $gallery = Gallery::GetSingleGalleryInfo($id);
        $data["galleryInfo"] = $gallery;

        $images = Gallery::GetGalleryImages($id);
        $data["gallery_images"] = $images;

        return view("AdminPanel.admin_edit_single_gallery", ["data" => $data]);
    }

    public function UploadGalleryImages($id) {

        if (isset($_POST["editGalleryInfoButton"])) {
            $title = $_POST["galleryTitle"];
            if (Input::hasFile("galleryPicture")) {
                $hasImage = true;
                $file = Input::file("galleryPicture");
                $folder = '/images/';
                $destinationPath = public_path() . $folder;
                $filename = str_random(6) . '_' . $file->getClientOriginalName();
                $uploadSuccess = $file->move($destinationPath, $filename);
                $image = $folder . $filename;
            } else {
                $image = "";
                $hasImage = false;
            }

            Gallery::UpdateGalleryInfo($id, $title, $image, $hasImage);
            return Redirect::to("admin/edit_gallery/" . $id);
        }

        if (isset($_POST["uploadImagesButton"])) {
            echo "uploading";
            $tmp_name_array = $_FILES['imagesToUpload']['tmp_name']; //get the temporary file names
            for ($i = 0; $i < count($tmp_name_array); $i++) { //traverse through them
                $name = "images/" . str_random(6) . '_' . $_FILES['imagesToUpload']['name'][$i];
                //upload file to server
                move_uploaded_file($tmp_name_array[$i], $name);
                Gallery::InsertImageToDB($id, $name);
            }

            return Redirect::back();
        }

        if (isset($_POST["deletePicsButton"])) {
            foreach ($_POST["imagesCheckboxGroup"] as $id) {
                $pd = Gallery::GetSingleImage($id);
                $img = $pd[0]->image_path;
                if (File::exists(public_path() . $img)) {
                    File::delete(public_path() . $img);
                }
                Gallery::DeleteImage($id);
            }
            return Redirect::back();
        }
    }

}
