<?php
/**
 *classe responsável pelos models no que se refere aos posts
 */
class Post extends AppModel
{

 	public $name = "Post";

    public $validate = [
    	'title' => [ 'rule' => 'notBlank' ],
    	'body'  => [ 'rule' => 'notBlank' ]
   	];

}
