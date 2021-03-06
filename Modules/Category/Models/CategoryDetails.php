<?php
namespace Plenty\Modules\Category\Models;

use Plenty\Modules\Document\Models\Document;

/**
 * CategoryDetails
 */
abstract class CategoryDetails 
{
	public		$categoryId;
	public		$plentyId;
	public		$lang;
	public		$name;
	public		$description;
	public		$description2;
	public		$shortDescription;
	public		$metaKeywords;
	public		$metaDescription;
	public		$nameUrl;
	public		$metaTitle;
	public		$image;
	public		$image2;
	public		$position;
	public		$itemListView;
	public		$singleItemView;
	public		$pageView;
	public		$fulltext;
	public		$placeholderTranslation;
	public		$webTemplateExists;
	public		$metaRobots;
	public		$canonicalLink;
	public		$imageDocument;
	public		$image2Document;
	public		$category;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}