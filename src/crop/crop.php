<?php
declare(strict_types=1);
namespace bluefin\image\crop;
interface crop
{
	public function setZoom(bool $zoom):bool;
	public function setCoord(int $x=0, int $y=0):bool;
	public function setSize(int $width, int $height):bool;
}
