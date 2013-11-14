<?
class UserAttainment extends ActiveRecord\Model{
	static $belongs_to = array(
      	array('user', 'readonly' => true),
      	array('attainment', 'readonly' => true)
    );
}
?>