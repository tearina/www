<?
class UserCollection extends ActiveRecord\Model{
	static $belongs_to = array(
     	array('user', 'readonly' => true),
     	array('collection', 'readonly' => true)
    );
}
?>