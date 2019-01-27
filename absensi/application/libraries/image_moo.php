<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class Image_moo
{
	// image vars
	private $main_image="";
 	private $watermark_image;
	private $temp_image;
	private $jpeg_quality=75;
	private $background_colour="#ffffff";
	private $watermark_method;
	// other
	private $filename="";
	// watermark stuff,opacity
	private $watermark_transparency=50;
	// reported errors
	public $errors=FALSE;
	private $error_msg=array();
	// image info
	public $width=0;
	public $height=0;
	function Image_moo()
	{
		log_message('debug',"Image Moo Class Initialized");
	}
	private function _clear_errors()
	{
		$this->error_msg=array();
	}
	private function set_error($msg)
	{
		$this->errors=TRUE;
		$this->error_msg[]=$msg;
	}
	public function display_errors($open='<p>',$close='</p>')
	{
		$str='';
		foreach($this->error_msg as $val)
		{
			$str.=$open.$val.$close;
		}
		return $str;
	}
	public function check_gd()
	{
		if(! extension_loaded('gd'))
		{
			if(! dl('gd.so'))
			{
				$this->set_error('GD library does not appear to be loaded');
				return FALSE;
			}
		}
		if(function_exists('gd_info'))
		{
			$gdarray=@gd_info();
			$versiontxt=ereg_replace('[[:alpha:][:space:]()]+','',$gdarray['GD Version']);
			$versionparts=explode('.',$versiontxt);
			if($versionparts[0]=="2")
			{
				return TRUE;
			}
			else
			{
				$this->set_error('Requires GD2,this reported as '.$versiontxt);
				return FALSE;
			}
		}
		else
		{
			$this->set_error('Could not verify GD version');
			return FALSE;
		}
	}
	private function _check_image()
	{
		if(!is_resource($this->main_image))
		{
			$this->set_error("No main image loaded!");
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	function save_dynamic($filename="")
	{
		if(!$this->_check_image())return $this;
		$this->_copy_to_temp_if_needed();
		if($filename=="")$filename=rand(1000,999999).".jpg";
		$ext=strtoupper(pathinfo($filename,PATHINFO_EXTENSION));
		header("Content-disposition:filename=$filename;");
		header('Content-transfer-Encoding:binary');
		header('Last-modified:'.gmdate('D,d M Y H:i:s'));
		switch($ext)
		{
			case "GIF":
				header("Content-type:image/gif");
				imagegif($this->temp_image);
				return $this;
				break;
			case "JPG":
			case "JPEG":
				header("Content-type:image/jpeg");
				imagejpeg($this->temp_image,NULL,$this->jpeg_quality);
				return $this;
				break;
			case "PNG":
				header("Content-type:image/png");
				imagepng($this->temp_image);
				return $this;
				break;
		}
		$this->set_error('Unable to save,extension not GIF/JPEG/JPG/PNG');
		return $this;
	}
	function save_pa($prepend="",$append="",$overwrite=FALSE)
	{
		if(!$this->_check_image())return $this;
		$parts=pathinfo($this->filename);
		$this->save($parts["dirname"].'/'.$prepend.$parts['filename'].$append.'.'.$parts["extension"],$overwrite);
		return $this;
	}
	function save($filename,$overwrite=FALSE)
	{
		if(!$this->_check_image())return $this;
		$this->_copy_to_temp_if_needed();
		if(!$overwrite)
		{
			if(file_exists($filename))
			{
				$this->set_error('File exists,overwrite is FALSE,could not save over file '.$filename);
				return $this;
			}
		}
		$ext=strtoupper(pathinfo($filename,PATHINFO_EXTENSION));
		switch($ext)
		{
			case "GIF":
				imagegif($this->temp_image,$filename);
				return $this;
				break;
			case "JPG":
			case "JPEG":
				imagejpeg($this->temp_image,$filename,$this->jpeg_quality);
				return $this;
				break;
			case "PNG":
				imagepng($this->temp_image,$filename);
				return $this;
				break;
		}
		$this->set_error('Do no know what '.$ext.' filetype is in filename '.$filename);
		return $this;
	}
	private function _load_image($filename)
	{
		if(!file_exists($filename))
		{
			$this->set_error('Could not locate file '.$filename);
			return FALSE;
		}
		$image_info=getimagesize($filename);
		switch($image_info["mime"])
		{
			case "image/gif":
				return imagecreatefromgif($filename);
				break;
			case "image/jpeg":
				return imagecreatefromjpeg($filename);
				break;
			case "image/png":
 				return imagecreatefrompng($filename);
				break;
		}
		$this->set_error('Unable to load '.$filename.' filetype '.$image_info["mime"].'not recognised');
		return FALSE;
	}
	public function load($filename)
	{
		$this->_clear_errors();
		$this->clear_temp();
		$this->filename=$filename;
		$this->width=0;
		$this->height=0;
		$this->main_image=$this->_load_image($filename);
		if($this->main_image <> FALSE)
		{
			$this->width=imageSX($this->main_image);
			$this->height=imageSY($this->main_image);
		}
		return $this;
	}
	public function load_watermark($filename,$transparent_x=NULL,$transparent_y=NULL)
	{
		if(is_resource($this->watermark_image))imagedestroy($this->watermark_image);
		$this->watermark_image=$this->_load_image($filename);
		if(is_resource($this->watermark_image))
		{
			$this->watermark_method=1;
			if(($transparent_x <> NULL)AND($transparent_y <> NULL))
			{
				$tpcolour=imagecolorat($this->watermark_image,$transparent_x,$transparent_y);
				imagecolortransparent($this->watermark_image,$tpcolour);
				$this->watermark_method=2;
			}
		}
		return $this;
	}
	public function set_watermark_transparency($transparency=50)
	{
		$this->watermark_transparency=$transparency;
		return $this;
	}
	public function set_background_colour($colour="#ffffff")
	{
		$this->background_colour=$this->_html2rgb($colour);
		return $this;
	}
	public function set_jpeg_quality($quality=75)
	{
		$this->jpeg_quality=$quality;
		return $this;
	}
	private function _copy_to_temp_if_needed()
	{
		if(!is_resource($this->temp_image))
		{
			$this->temp_image=imagecreatetruecolor($this->width,$this->height);
			if(!is_resource($this->temp_image))
			{
				$this->set_error('Unable to create temp image sized '.$this->width.' x '.$this->height);
				return FALSE;
			}
			imagecopy($this->temp_image,$this->main_image,0,0,0,0,$this->width,$this->height);
		}
	}
	public function clear()
	{
		if(is_resource($this->main_image))imagedestroy($this->main_image);
		if(is_resource($this->watermark_image))imagedestroy($this->watermark_image);
		if(is_resource($this->temp_image))imagedestroy($this->temp_image);
		return $this;
	}
	public function clear_temp()
	{
		if(is_resource($this->temp_image))imagedestroy($this->temp_image);
		return $this;
	}
	public function resize_crop($mw,$mh)
	{
		if(!$this->_check_image())return $this;
		$this->clear_temp();
		$this->temp_image=imagecreatetruecolor($mw,$mh);
		if(!is_resource($this->temp_image))
		{
			$this->set_error('Unable to create temp image sized '.$mw.' x '.$mh);
			return $this;
		}
		$wx=$this->width / $mw;
		$wy=$this->height / $mh;
		if($wx >=$wy)
		{
			$sy=0;
			$sy2=$this->height;
			$calc_width=$mw*$wy;
			$sx=($this->width - $calc_width)/ 2;
			$sx2=$calc_width;
		}
		else
		{
			$sx=0;
			$sx2=$this->width;
			$calc_height=$mh*$wx;
			$sy=($this->height - $calc_height)/ 2;
			$sy2=$calc_height;
		}
		imagecopyresampled($this->temp_image,$this->main_image,0,0,$sx,$sy,$mw,$mh,$sx2,$sy2);
		return $this;
	}
	public function resize($mw,$mh,$pad=FALSE)
	{
		if(!$this->_check_image())return $this;
		if($this->width > $mw || $this->height > $mh){
			if(($this->width / $this->height)>($mw / $mh)){
				$tnw=$mw;
				$tnh=$tnw*$this->height / $this->width;
			}else{
				$tnh=$mh;
				$tnw=$tnh*$this->width / $this->height;
			}
		}else{
			$tnw=$this->width;
			$tnh=$this->height;
		}
		$this->clear_temp();
		if($pad)
		{
			$tx=$mw;
			$ty=$mh;
			$px=($mw - $tnw)/ 2;
			$py=($mh - $tnh)/ 2;
		}
		else
		{
			$tx=$tnw;
			$ty=$tnh;
			$px=0;
			$py=0;
		}
		$this->temp_image=imagecreatetruecolor($tx,$ty);
		if(!is_resource($this->temp_image))
		{
			$this->set_error('Unable to create temp image sized '.$tx.' x '.$ty);
			return $this;
		}
		if($pad)
		{
			$col=$this->_html2rgb($this->background_colour);
			$bg=imagecolorallocate($this->temp_image,$col[0],$col[1],$col[2]);
			imagefilledrectangle($this->temp_image,0,0,$tx,$ty,$bg);
		}
		imagecopyresampled($this->temp_image,$this->main_image,$px,$py,0,0,$tnw,$tnh,$this->width,$this->height);
		return $this;
	}
	public function stretch($mw,$mh)
	{
		if(!$this->_check_image())return $this;
		$this->clear_temp();
		$this->temp_image=imagecreatetruecolor($mw,$mh);
		if(!is_resource($this->temp_image))
		{
			$this->set_error('Unable to create temp image sized '.$mh.' x '.$mw);
			return $this;
		}
		imagecopyresampled($this->temp_image,$this->main_image,0,0,0,0,$mw,$mh,$this->width,$this->height);
		return $this;
	}
	public function crop($x1,$y1,$x2,$y2)
	{
		if(!$this->_check_image())return $this;
		$this->clear_temp();
		if($x1 < 0 || $y1 < 0 || $x2 - $x1 > $this->width || $y2 - $y1 > $this->height)
		{
			$this->set_error('Invalid crop dimensions,either - passed or width/heigh too large '.$x1.'/'.$y1.' x '.$x2.'/'.$y2);
			return $this;
		}
		$this->temp_image=imagecreatetruecolor($x2-$x1,$y2-$y1);
		if(!is_resource($this->temp_image))
		{
			$this->set_error('Unable to create temp image sized '.$x2-$x1.' x '.$y2-$y1);
			return $this;
		}
		imagecopy($this->temp_image,$this->main_image,0,0,$x1,$y1,$x2 - $x1,$y2 - $y1);
		return $this;
	}
	private function _html2rgb($colour)
	{
		if(is_array($colour))
		{
			if(count($colour)==3)return $colour;								// rgb sent as an array so use it
			$this->set_error('Colour error,array sent not 3 elements,expected array(r,g,b)');
			return false;
		}
		if($colour[0]=='#')
			$colour=substr($colour,1);
		if(strlen($colour)==6)
		{
			list($r,$g,$b)=array($colour[0].$colour[1],
									 $colour[2].$colour[3],
									 $colour[4].$colour[5]);
		}
		elseif(strlen($colour)==3)
		{
			list($r,$g,$b)=array($colour[0].$colour[0],$colour[1].$colour[1],$colour[2].$colour[2]);
		}
		else
		{
			$this->set_error('Colour error,value sent not #RRGGBB or RRGGBB,and not array(r,g,b)');
			return false;
		}
		$r=hexdec($r);$g=hexdec($g);$b=hexdec($b);
		return array($r,$g,$b);
	}
	public function rotate($angle)
	{
		if(!$this->_check_image())return $this;
		$this->_copy_to_temp_if_needed();
		$col=$this->_html2rgb($$this->background_colour);
		$bg=imagecolorallocate($this->temp_image,$col[0],$col[1],$col[2]);
		$this->temp_image=imagerotate($this->temp_image,$angle,$bg);
		return $this;
	}
	public function make_watermark_text($text,$fontfile,$size=16,$colour="#ffffff",$angle=0)
	{
		if(!file_exists($fontfile))
		{
			$this->set_error('Could not locate font file "'.$fontfile.'"');
			return $this;
		}
		if(!$this->_check_image())
		{
			$remove=TRUE;
			$this->main_image=imagecreatetruecolor(1000,1000);
		}
		else
		{
			$remove=FALSE;
		}
		$bbox=imageftbbox($size,$angle,$fontfile,$text);
		$bw=abs($bbox[4] - $bbox[0])+ 1;
		$bh=abs($bbox[1] - $bbox[5])+ 1;
		$bl=$bbox[1];
		if(is_resource($this->watermark_image))imagedestroy($this->watermark_image);
		$this->watermark_image=imagecreatetruecolor($bw,$bh);
		$col=$this->_html2rgb($colour);
		$font_col=imagecolorallocate($this->watermark_image,$col[0],$col[1],$col[2]);
		$bg_col=imagecolorallocate($this->watermark_image,127,128,126);
		$this->watermark_method=2;
		imagecolortransparent($this->watermark_image,$bg_col);
		imagefilledrectangle($this->watermark_image,0,0,$bw,$bh,$bg_col);
		imagefttext($this->watermark_image,$size,$angle,0,$bh-$bl,$font_col,$fontfile,$text);
		if($remove)imagedestroy($this->main_image);
		return $this;
	}
	public function watermark($position,$offset=8,$abs=FALSE)
	{
		if(!$this->_check_image())return $this;
		if(!is_resource($this->watermark_image))
		{
			$this->set_error("Can't watermark image,no watermark loaded/created");
			return $this;
		}
		$this->_copy_to_temp_if_needed();
		$wm_w=imageSX($this->watermark_image);
		$wm_h=imageSY($this->watermark_image);
		$temp_w=imageSX($this->temp_image);
		$temp_h=imageSY($this->temp_image);
		if($wm_w > $temp_w || $wm_h > $temp_h)
		{
			$this->set_error("Watermark is larger than image.WM:$wm_w x $wm_h Temp image:$temp_w x $temp_h");
			return $this;
		}
		if($abs)
		{
			$dest_x=$position;
			$dest_y=$offset;
		}
		else
		{
			switch($position)
			{
				// x left
				case "7":
				case "4":
				case "1":
					$dest_x=$offset;
					break;
				// x middle
				case "8":
				case "5":
				case "2":
					$dest_x=($temp_w - $wm_w)/2;
					break;
				// x right
				case "9":
				case "6":
				case "3":
					$dest_x=$temp_w - $offset - $wm_w;
					break;
				default:
					$dest_x=$offset;
					$this->set_error("Watermark position $position not in vlaid range 7,8,9 - 4,5,6 - 1,2,3");
			}
			switch($position)
			{
				// y top
				case "7":
				case "8":
				case "9":
					$dest_y=$offset;
					break;
				// y middle
				case "4":
				case "5":
				case "6":
					$dest_y=($temp_h - $wm_h)/2;
					break;
				// y bottom
				case "1":
				case "2":
				case "3":
					$dest_y=$temp_h - $offset - $wm_h;
					break;
				default:
					$dest_y=$offset;
					$this->set_error("Watermark position $position not in vlaid range 7,8,9 - 4,5,6 - 1,2,3");
			}
		}
		if($this->watermark_method==1)
		{
			$opacity=$this->watermark_transparency;
			$cut=imagecreatetruecolor($wm_w,$wm_h);
			imagecopy($cut,$this->temp_image,0,0,$dest_x,$dest_y,$wm_w,$wm_h);
			$opacity=100 - $opacity;
			imagecopy($cut,$this->watermark_image,0,0,0,0,$wm_w,$wm_h);
			imagecopymerge($this->temp_image,$cut,$dest_x,$dest_y,0,0,$wm_w,$wm_h,$opacity);
		}
		else
		{
			imagecopymerge($this->temp_image,$this->watermark_image,$dest_x,$dest_y,0,0,$wm_w,$wm_h,$this->watermark_transparency);
		}
		return $this;
	}
	public function border($width=5,$colour="#000")
	{
		if(!$this->_check_image())return $this;
		$this->_copy_to_temp_if_needed();
		$col=$this->_html2rgb($colour);
		$border_col=imagecolorallocate($this->temp_image,$col[0],$col[1],$col[2]);
		$temp_w=imageSX($this->temp_image);
		$temp_h=imageSY($this->temp_image);
		for($x=0;$x<$width;$x++)
		{
			imagerectangle($this->temp_image,$x,$x,$temp_w-$x-1,$temp_h-$x-1,$border_col);
		}
		return $this;
	}
	public function border_3d($width=5,$rot=0,$opacity=30)
	{
		if(!$this->_check_image())return $this;
		$this->_copy_to_temp_if_needed();
		$temp_w=imageSX($this->temp_image);
		$temp_h=imageSY($this->temp_image);
		$border_image=imagecreatetruecolor($temp_w,$temp_h);
		$black=imagecolorallocate($border_image,0,0,0);
		$white=imagecolorallocate($border_image,255,255,255);
		switch($rot)
		{
			case 1:
				$cols=array($white,$black,$white,$black);
				break;
			case 2:
				$cols=array($black,$black,$white,$white);
				break;
			case 3:
				$cols=array($black,$white,$black,$white);
				break;
			default:
				$cols=array($white,$white,$black,$black);
		}
		$bg_col=imagecolorallocate($border_image,127,128,126);
		imagecolortransparent($border_image,$bg_col);
		imagefilledrectangle($border_image,0,0,$temp_w,$temp_h,$bg_col);
		for($x=0;$x<$width;$x++)
		{
			// top
			imageline($border_image,$x,$x,$temp_w-$x-1,$x,$cols[0]);
			// left
			imageline($border_image,$x,$x,$x,$temp_w-$x-1,$cols[1]);
			// bottom
			imageline($border_image,$x,$temp_h-$x-1,$temp_w-1-$x,$temp_h-$x-1,$cols[3]);
			// right
			imageline($border_image,$temp_w-$x-1,$x,$temp_w-$x-1,$temp_h-$x-1,$cols[2]);
		}
		imagecopymerge($this->temp_image,$border_image,0,0,0,0,$temp_w,$temp_h,$opacity);
		imagedestroy($border_image);
		return $this;
	}
	public function shadow($size=4,$direction=3,$colour="#444")
	{
		if(!$this->_check_image())return $this;
		$this->_copy_to_temp_if_needed();
		$sx=imagesx($this->temp_image);
		$sy=imagesy($this->temp_image);
		$bu_image=imagecreatetruecolor($sx,$sy);
		if(!is_resource($bu_image))
		{
			$this->set_error('Unable to create shadow temp image sized '.$this->width.' x '.$this->height);
			return FALSE;
		}
		imagecopy($bu_image,$this->temp_image,0,0,0,0,$sx,$sy);
		imagedestroy($this->temp_image);
		$this->temp_image=imagecreatetruecolor($sx+$size,$sy+$size);
		$col=$this->_html2rgb($this->background_colour);
		$bg=imagecolorallocate($this->temp_image,$col[0],$col[1],$col[2]);
		imagefilledrectangle($this->temp_image,0,0,$sx+$size,$sy+$size,$bg);
		switch($direction)
		{
			// x left
			case "7":
			case "4":
			case "1":
				$sh_x=0;
				$pic_x=$size;
				break;
			// x middle
			case "8":
			case "5":
			case "2":
				$sh_x=$size / 2;
				$pic_x=$size / 2;
				break;
			// x right
			case "9":
			case "6":
			case "3":
				$sh_x=$size;
				$pic_x=0;
				break;
			default:
				$sh_x=$size;
				$pic_x=0;
				$this->set_error("Shadow position $position not in vlaid range 7,8,9 - 4,5,6 - 1,2,3");
		}
		switch($direction)
		{
			// y top
			case "7":
			case "8":
			case "9":
				$sh_y=0;
				$pic_y=$size;
				break;
			// y middle
			case "4":
			case "5":
			case "6":
				$sh_y=$size / 2;
				$pic_y=$size / 2;
				break;
			// y bottom
			case "1":
			case "2":
			case "3":
				$sh_y=$size;
				$pic_y=0;
				break;
			default:
				$sh_y=$size;
				$pic_y=0;
				$this->set_error("Shadow position $position not in vlaid range 7,8,9 - 4,5,6 - 1,2,3");
		}
		$shadowcolour=$this->_html2rgb($colour);
		$shadow=imagecolorallocate($this->temp_image,$shadowcolour[0],$shadowcolour[1],$shadowcolour[2]);
		imagefilledrectangle($this->temp_image,$sh_x,$sh_y,$sh_x+$sx-1,$sh_y+$sy-1,$shadow);
		imagecopy($this->temp_image,$bu_image,$pic_x,$pic_y,0,0,$sx,$sy);
		imagedestroy($bu_image);
		return $this;
	}
	public function filter($function,$arg1=NULL,$arg2=NULL,$arg3=NULL,$arg4=NULL)
	{
		if(!$this->_check_image())return $this;
		$this->_copy_to_temp_if_needed();
		if(!imagefilter($this->temp_image,$function,$arg1,$arg2,$arg3,$arg4))
		{
			$this->set_error("Filter $function failed");
		}
		return $this;
	}
	public function round($radius=5,$invert=False,$corners="")
	{
		if(!$this->_check_image())return $this;
		$this->_copy_to_temp_if_needed();
		if($corners=="")$corners=array(True,True,True,True);
		if(!is_array($corners)|| count($corners)<>4)
		{
			$this->set_error("Round failed,expected an array of 4 items round(radius,tl,tr,br,bl)");
			return $this;
		}
		$corner=imagecreatetruecolor($radius,$radius);
		imageantialias($corner,true);
		$col=$this->_html2rgb($this->background_colour);
		$bg=imagecolorallocate($corner,$col[0],$col[1],$col[2]);
		$xparent=imagecolorallocate($corner,127,128,126);
		imagecolortransparent($corner,$xparent);
		if($invert)
		{
			imagefilledrectangle($corner,0,0,$radius,$radius,$xparent);
			imagefilledellipse($corner,0,0,($radius*2)-1,($radius*2)-1,$bg);
		}
		else
		{
			imagefilledrectangle($corner,0,0,$radius,$radius,$bg);
			imagefilledellipse($corner,$radius,$radius,($radius*2),($radius*2),$xparent);
		}
		$temp_w=imageSX($this->temp_image);
		$temp_h=imageSY($this->temp_image);
		if($corners[0])imagecopymerge($this->temp_image,$corner,0,0,0,0,$radius,$radius,100);
		$corner=imagerotate($corner,270,0);
		if($corners[1])imagecopymerge($this->temp_image,$corner,$temp_w-$radius,0,0,0,$radius,$radius,100);
		$corner=imagerotate($corner,270,0);
		if($corners[2])imagecopymerge($this->temp_image,$corner,$temp_w-$radius,$temp_h-$radius,0,0,$radius,$radius,100);
		$corner=imagerotate($corner,270,0);
		if($corners[3])imagecopymerge($this->temp_image,$corner,0,$temp_h-$radius,0,0,$radius,$radius,100);
		return $this;
	}
}