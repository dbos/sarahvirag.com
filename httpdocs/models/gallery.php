<?php  defined('C5_EXECUTE') or die("Access Denied.");
class Gallery extends Model {
    public function viewImage($image){
        $db = Loader::db(); 
        $result=$db->query('Select path from dbos_svgallery where handle=?',$image);
        $result=$result->fetchRow();
        $name=$result['path'];
        header("Content-Type: image/png");
        header("Content-Length: " . filesize($_SERVER['DOCUMENT_ROOT'].$name));
        readfile($_SERVER['DOCUMENT_ROOT'].$name);
    }
    public function getIndex(){
        $index=array();
        $index['results']=array();
        $db = Loader::db(); 
        $results=$db->query('Select path,alt from dbos_svgallery');
        while($result=$results->fetchRow()){
            array_push($index['results'],array('url'=>$result['path'],'alt'=>$result['alt']));
        }
        return $index;
    }
}
