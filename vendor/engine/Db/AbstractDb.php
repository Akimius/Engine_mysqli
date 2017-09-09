<?php

namespace Engine\Db;

use Engine\Db\Db;

abstract class AbstractDb
{
	public $db; //
	
	public function __construct()
	{
		$this->db = Db::getInstance();
	}

}