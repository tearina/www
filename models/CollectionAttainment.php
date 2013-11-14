<?
class CollectionAttainment extends ActiveRecord\Model{
	static $belongs_to = array(
    	array('collection', 'readonly' => true),
 		array('attainment', 'readonly' => true)
    );
}
?>