<?php
/*
Title: Services
Post Type: resort
*/
piklist('field', array(
    'type' => 'radio'
    ,'field' => 'babysitter'
    ,'label' => 'Babysitter'
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
    ,'field' => 'spa'
    ,'label' => 'Spa'
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
    ,'field' => 'pool'
    ,'label' => 'Swimming pool'
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