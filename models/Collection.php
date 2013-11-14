<?
class Collection extends ActiveRecord\Model{
	static $has_many = array(
    	array('collection_attainments'),
    	array('user_collections'),
    	array('attainments', 'through' => 'collection_attainments')
    );
}
?>