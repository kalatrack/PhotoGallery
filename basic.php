<?php
	$file = 'filename.html';
	if($handle = fopen($file, 'w+r+x')){
		$contents =' kkkk\n tun sy 
			\nlol g ';
		fwrite($handle, $contents);
		
	}else{
		echo "could not open this files.";
	}
		
if($size = file_put_contents($file, $contents)){
	echo "the size of file is {$size} byte. ";
}else 'some the goes wrong.';
$pos = ftell($handle);
fseek($handle, $pos-5);
fwrite($handle, 'string to make');
rewind($handle);
fwrite($handle, 'string this is form the start and get next to .');fclose($handle);
$a = dirname(__FILE__);echo "<br>";
echo "<a href={$file}>file bane</a>";


// if(fclose($handle)){
// 	unlink($file);

// }else "you are not able to do it";
echo "<br>";


?>