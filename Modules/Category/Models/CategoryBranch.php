<?php
namespace Plenty\Modules\Category\Models;


/**
 * Category Branch
 */
abstract class CategoryBranch 
{
	public		$categoryId;
	public		$category1Id;
	public		$category2Id;
	public		$category3Id;
	public		$category4Id;
	public		$category5Id;
	public		$category6Id;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}