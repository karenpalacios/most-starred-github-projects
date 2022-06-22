<?php

class Database {

    public function __construct() {
		return $this->connection = new Mysql(Config::Database('mysql','host'),
                                      Config::Database('mysql','user'),
                                      Config::Database('mysql','pass'),
                                      Config::Database('mysql','db'));
    }
}