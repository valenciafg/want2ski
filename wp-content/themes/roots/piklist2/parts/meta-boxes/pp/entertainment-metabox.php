<?php
/*
Title: Entertainement
Post Type: resort
*/
piklist('field', array(
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
    )
  ));
  piklist('field', array(
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
    )
  ));
    piklist('field', array(
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
    )
  ));
    piklist('field', array(
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
    )
  ));
    piklist('field', array(
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
    )
  ));
  ?>