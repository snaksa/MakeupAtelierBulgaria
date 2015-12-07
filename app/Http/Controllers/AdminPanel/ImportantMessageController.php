<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\ImportantMessage;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class ImportantMessageController extends Controller {

    public function index() {
        $messageProperties = ImportantMessage::GetMessageProperties();
        
        $message = $messageProperties[0]->message;
        $visibility = $messageProperties[0]->showMessage;
        $data["message"] = $message;
        $data["visibility"] = $visibility;
        return view("AdminPanel.admin_important_message", ["data"=>$data]);
    }
    
    public function update_message(){
        $message = $_POST["editor"];
        $show = $_POST['messageVisibility'];
        ImportantMessage::UpdateMessage($message, $show);
        
        return Redirect::to("admin/important_message");
        
    }
}
