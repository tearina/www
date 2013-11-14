<?

class Attainment extends ActiveRecord\Model{
	static $has_many = array(
    	array('collection_attainments'),
    	array('user_attainments')
    );
}

?>