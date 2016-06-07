<?php
declare(strict_types=1);
namespace bluefin\image\rotate;
interface rotate
{
	public function rotate(int $angle=90):bool;
}
