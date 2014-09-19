<?php
/*
Title: Include a new resort
Post Type: resort
*/
piklist('field', array(
    'type' => 'group'
    ,'label' => 'Tourism Office'
    ,'description' => 'Select first the contact type (Want2Ski or Tourist contact)'
    ,'fields' => array(
		array(
			'type' => 'radio'
			,'field' => 'contact_type'
			,'label' => 'You are a want2Ski contact? (Yes or not)'
			,'value' => 'y'
			,'required' => true
			,'columns' => 12
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			)
		)
		,array(
        'type' => 'text'
        ,'field' => 'contact'
        ,'label' => 'Contact Person'
        ,'required' => true
        ,'columns' => 12
        ,'attributes' => array(
          	'placeholder' => 'Contact Person or Website'
        	)
      	)
		,array(
        'type' => 'text'
        ,'field' => 'phone'
        ,'label' => 'Phone Number'
        ,'required' => true
        ,'columns' => 6
        ,'attributes' => array(
          	'placeholder' => '+41 xx xxx xx xx'
        	)
      	)
      	,array(
        'type' => 'text'
        ,'field' => 'email'
        ,'label' => 'Email Address'
        ,'required' => true
        ,'columns' => 6
        ,'attributes' => array(
          	'placeholder' => 'mail@want2ski.ch'
        	)
      	)
	)
));
	
	
	##
	piklist('field', array(
		'type' => 'group'
		,'label' => 'General Information'
		,'fields' => array(
			array(
			'type' => 'radio'
			,'field' => 'discoteque'
			,'label' => 'Discoteque / Club'
			,'value' => 'second'
			,'choices' => array(
			  'first' => 'Yes'
			  ,'second' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
		  ,array(
			'type' => 'radio'
			,'field' => 'bars'
			,'label' => 'Bars'
			,'value' => 'second'
			,'choices' => array(
			  'first' => 'Yes'
			  ,'second' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
		  ,array(
			'type' => 'radio'
			,'field' => 'apres_ski'
			,'label' => 'Apres-Ski'
			,'value' => 'second'
			,'choices' => array(
			  'first' => 'Yes'
			  ,'second' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
  
		  ,array(
			'type' => 'radio'
			,'field' => 'festival'
			,'label' => 'Festival'
			,'value' => 'second'
			,'choices' => array(
			  'first' => 'Yes'
			  ,'second' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))

		  ,array(
			'type' => 'radio'
			,'field' => 'cinema'
			,'label' => 'Cinema'
			,'value' => 'second'
			,'choices' => array(
			  'first' => 'Yes'
			  ,'second' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
		)
	));
	piklist('field', array(
		'type' => 'group'
		,'label' => 'General Information'
		,'fields' => array(
		)
	));
?>