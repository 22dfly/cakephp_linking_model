<?php
class User extends AppModel
{
    // has one profile
    public $hasOne = array(
        'Profile' => array(
            'className' => 'Profile'
        )
    );
    
    // has many posts
    public $hasMany = array(
        'Post' => array(
            'className' => 'Post'
        )
    );
    
    // belong to one group
    public $belongsTo = array(
        'Group' => array(
            'className' => 'Group'
        )
    );
}