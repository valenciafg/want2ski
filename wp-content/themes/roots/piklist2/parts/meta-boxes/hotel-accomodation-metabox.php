<?php
/*
Title: Hotel / Accomodation
Post Type: resort
*/
piklist('field', array(
    'type' => 'radio'
    ,'field' => 'place'
    ,'label' => '5* / Place'
    ,'value' => 'y'
    ,'choices' => array(
      'y' => 'Yes'
      ,'n' => 'No'
    )
    ,'on_post_status' => array(
      'value' => 'lock'
    )
  ));

  
  
  piklist('field', array(
    'type' => 'radio'
    ,'field' => 'yhostel'
    ,'label' => 'Youth hostel/ 2*'
    ,'value' => 'y'
    ,'choices' => array(
      'y' => 'Yes'
      ,'n' => 'No'
    )
    ,'on_post_status' => array(
      'value' => 'lock'
    )
  ));
  ?>