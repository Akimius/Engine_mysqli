<?php

namespace Engine\Db;

class Db
{
	private static $instance = null;
	private $db;

	private function __construct()
	{
		$this->db = new \mysqli('localhost', 'root', '', 'jsstore_db');
	}

	public static function getInstance()
	{

		if(is_null(self::$instance)){
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function query($sql)
	{
		if ($result = $this->db->query($sql)) {

            return $result;

        }else{

            echo 'query is failed';

            exit();
        }
	}

	private function __clone(){}
}