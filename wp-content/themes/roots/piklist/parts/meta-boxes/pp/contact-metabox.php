<?php
/*
Title: Tourism Office
Post Type: resort
*/
piklist('field', array(
    'type' => 'group'
    ,'field' => 'want2ski_contact_group'
    ,'label' => 'For Want2Ski Contact'
    ,'list' => false
    ,'description' => 'A grouped field. Data is not searchable, since it is saved in an array.'
    ,'fields' => array(
    	array(
        'type' => 'text'
        ,'field' => 'contact_person'
        ,'label' => 'Contact Person'
        ,'required' => true
        ,'columns' => 12
        ,'attributes' => array(
          	'placeholder' => 'Street Address'
        	)
      	)
      	,array(
        'type' => 'text'
        ,'field' => 'w2s_phone'
        ,'label' => 'Phone Number'
        ,'required' => true
        ,'columns' => 6
        ,'attributes' => array(
          	'placeholder' => 'Street Address'
        	)
      	)
      	,array(
        'type' => 'text'
        ,'field' => 'w2s_email'
        ,'label' => 'Email Address'
        ,'required' => true
        ,'columns' => 6
        ,'attributes' => array(
          	'placeholder' => 'mail@want2ski.ch'
        	)
      	)
      )
   ));
piklist('field', array(
    'type' => 'group'
    ,'field' => 'tourst_contact_group'
    ,'label' => 'For Tourist Contact'
    ,'list' => false
    ,'description' => 'A grouped field. Data is not searchable, since it is saved in an array.'
    ,'fields' => array(
    	array(
        'type' => 'text'
        ,'field' => 'tourist_website'
        ,'label' => 'Website'
        ,'required' => true
        ,'columns' => 12
        ,'attributes' => array(
          	'placeholder' => 'Street Address'
        	)
      	)
      	,array(
        'type' => 'text'
        ,'field' => 'tourist_phone'
        ,'label' => 'Phone Number'
        ,'required' => true
        ,'columns' => 6
        ,'attributes' => array(
          	'placeholder' => 'Street Address'
        	)
      	)
      	,array(
        'type' => 'text'
        ,'field' => 'tourist_email'
        ,'label' => 'Email Address'
        ,'required' => true
        ,'columns' => 6
        ,'attributes' => array(
          	'placeholder' => 'mail@want2ski.ch'
        	)
      	)
      )
   ));
?>