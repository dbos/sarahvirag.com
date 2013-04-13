<?php 
defined('C5_EXECUTE') or die("Access Denied.");
class GalleryController extends Controller {
    public function view($image=1){
        Loader::model('gallery');
        Gallery::viewImage($image);
    }
    public function json($image=false){
        header("Content-Type: application/json");
        Loader::model('gallery');
        echo json_encode(Gallery::getIndex());
        exit;
    }
}
