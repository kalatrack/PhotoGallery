<?php
	echo "Reading files of specific directory form the directory path .. <br>";
	$dir = ".";
	$a = 0;
	if(is_dir($dir)){
		if($handle = opendir($dir)){
				while($filename = readdir($handle)){
		
					echo "FileName is ".$a++." : {$filename} :<br>";
					//$a++;
				}
			closedir($handle);	
		}
	}
	echo "<hr>";
	$b=0;
		if(is_dir($dir)){
			$dir_array = scandir($dir);
			foreach($dir_array as $file){
				if(stripos($file, '.')>0){
								echo "fileName ".$b++." : {$file}<br>";
							}
			}		
	}


echo "<hr>";
	echo "Permission on filesystem in PHP .<br>";echo "<br>";



echo "<br>";
echo "This Example of Special Constant. That are Used to Identify Directory You might aspect.";echo "<br>";
echo __FILE__ ; echo "<br>";
echo __LINE__;echo "<br>";
echo dirname(__FILE__);echo "<br>";
echo __DIR__;echo "<br>";
echo "<br>";
echo file_exists(__FILE__)? 'Yes':"NO";echo "<br>";//it is telling us the file in which we are working with full path 
echo file_exists(dirname(__FILE__)."/basic.php")? 'Yes' : 'NO';echo "<br>";//this is also telling us path and file existing
echo is_file(__FILE__)? ' Yes': 'no';echo "<br>";//it is taking about directory that we are given and file inside it's also true
echo is_file(dirname(__FILE__)."/basic.php")? 'yes':'no';echo "<br>";//it is also true
echo is_dir(__FILE__)? 'yes':'no';echo "<br>";echo "//it is false in this case file is avalie not directory we are one step next about condition and same directory where file exist<br>";
echo is_dir(dirname(__FILE__)."/basic.php")? 'yes': 'no';echo "<br>";echo " // the above case and this case are same .  ";
echo is_dir(dirname(__FILE__))? 'yes':'no' ;echo "<br>"; echo "  // in this case it will be a directory and next of this main file exist .";

echo is_dir('..')? 'yes':'no';echo "<br>"; echo "  // this case is saimple this telling us one step backword from the main file .";

?>