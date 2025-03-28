<?php

require_once "../config/db.php";

class Crud {

    private $link;

        public function __construct($link)
        {
            $this->link = $link;
        }

        protected function QueryType( $type)	
        {
		switch ($type) {
			case 'create':
				$query_type = 'INSERT INTO';
				break;
			case 'read':
				$query_type = 'SELECT';
				break;
			case 'update':
				$query_type = 'UPDATE';
				break;
			case 'delete':
				$query_type = 'DELETE FROM';
				break;
		
		}
		return $query_type;
	}

	public function crud( $type,  $table,  $column = null) 
	{
		$query = $this->QueryType($type);


		if($type == 'read'):

			$columns = implode(", ",$column);

			$query = ''.$query.' '.$columns.' FROM '.$table.'';

			$dbh_query = $this->link->prepare($query);

			$dbh_query->execute();

			$dbh_querys = $dbh_query->fetchAll();

			return $dbh_querys;


		elseif($type == 'create'):

			$columns = array_keys($column);
			$col_value = implode(", :",$columns);
			$col_prepare = implode(", ",$columns);

			$query = ''.$query.' '.$table.' ('.$col_prepare.') VALUES (:'.$col_value.')';

			$dbh_query = $this->link->prepare($query);

			$dbh_query->execute($column);	


			return $dbh_query;

		elseif($type == 'update'):

			$columns = array_keys($column);
			$col_set = implode(",",$columns);

			$query_array = [];

			foreach ($column as $key => $value):

				if($key == 'id'):
					$query_array_id = $key.' = :'.$key;
				else:
					$query_array[] = $key.' = :'.$key;
				endif;

			endforeach;

			$query = ''.$query.' '.$table.' SET '.implode(", ",$query_array).' WHERE '.$query_array_id.'';

			$dbh_query = $this->link->prepare($query);

			$dbh_query->execute($column);


			return $dbh_query;

		elseif($type == 'delete'):

			$columns = array_keys($column);
			$col_set = implode(",",$columns);

			$query = ''.$query.' '.$table.' WHERE '.$col_set.'= :'.$col_set.'';

			$dbh_query = $this->link->prepare($query);

			$dbh_query->execute($column);

			return $dbh_query;
		endif;
	}
}
$user = new Crud($link);


// $user->crud("create", "users", ["name" => "foullane", "email" => "test@gmail.com", "pwd" => "newPass"]);

// $user->crud("delete", "users", ["id" => 10]);
// var_dump($user->crud("read", "users", ["id","name","email", "pwd"]));

$user->crud("update", "users", ["id" => 4,"name" => "me"]);

var_dump($user->crud("read", "users", ["id","name","email", "pwd"]));
