<?php
namespace Plenty\Modules\Frontend\Session\Storage\Models;


/**
 * session storage model for forum data
 */
abstract class Forum 
{
	public		$forumGroupId;
	public		$forumUsername;
	public		$forumConfig;
	public		$forumPermissions;
	public		$forumLastVisitTime;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}