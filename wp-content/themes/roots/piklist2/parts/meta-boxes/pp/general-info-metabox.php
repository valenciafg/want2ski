<?php
/*
Title: General Infomation
Post Type: resort
*/

piklist('field', array(
    'type' => 'text'
    ,'field' => 'altitude_range'
    ,'label' => 'Altitude Range'
    ,'description' => 'Village - Top of ski area'
    ,'required' => true
    ,'columns' => 12
    ,'attributes' => array(
      'placeholder' => 'Insert the altitude range'
    )
  ));
piklist('field', array(
'type' => 'select'
,'field' => 'ski_season'
,'value' => '1' // Sets default to Option 2
,'label' => 'Ski Season opening date'
,'description' => '(Stimate)'
,'attributes' => array(
  'class' => 'text'
)
,'choices' => array(
  '1' => 'Junuary'
  ,'2' => 'February '
  ,'3' => 'March'
  ,'4' => 'April'
  ,'5' => 'May'
  ,'6' => 'June'
  ,'7' => 'July'
  ,'8' => 'August'
  ,'9' => 'September'
  ,'10' => 'October'
  ,'11' => 'November'
  ,'12' => 'December'
)
));
piklist('field', array(
    'type' => 'group'
    ,'field' => 'want2ski_contact_group'
    ,'label' => 'Price range for one day ski pass'
    ,'list' => false
    ,'description' => '(Full day - Cheapest)'
    ,'fields' => array(
      array(
        'type' => 'text'
        ,'field' => 'adult_price'
        ,'label' => 'For Adult'
        ,'columns' => 6
        )
      ,array(
        'type' => 'text'
        ,'field' => 'children_price'
        ,'label' => 'For Children'
        ,'columns' => 6
        )
    )
   ));

piklist('field', array(
    'type' => 'radio'
    ,'field' => 'family_discount'
    ,'label' => 'Family discounts'
    ,'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
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