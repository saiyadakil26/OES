<?php
        $image = imagecreatetruecolor(80, 30);	//Create a new true color image
		
		$background_color = imagecolorallocate($image, 100,0 , 0);  
		imagefilledrectangle($image,100,100,80, 30,$background_color);
		
		//Set Random Pixels in Image
		$pixel_color = imagecolorallocate($image, 0,0,255);
		for($i=0;$i<1000;$i++) 
		{
			imagesetpixel($image,rand()%80,rand()%30,$pixel_color);
		} 
		
		$textcolor = imagecolorallocate($image, 255, 0, 0);  
		//ImageTTFText ($image, 20, 0, 10, 40, $textcolor, "arial.ttf", "Hello");
		
		$num=rand(1000,9999);
		$_SESSION["capcode"]=$num;
		$textcolor = imagecolorallocate($image, 255,255, 255);  
		imagestring($image, 50, 10, 10, $num, $textcolor);
		
        imagepng($image, "image.png");			//Output a PNG image to either the browser or a file
?>