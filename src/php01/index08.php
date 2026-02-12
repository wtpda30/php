<?php
$people = [
  ['firstname' => 'Taro',
  'age' => 25,
  'gender' => 'men'
  ],
  ['firstname'  => 'Jiro',
  'age' => 20,
  'gender' => 'men'
  ]
  ['firstname'  => 'hanako',
  'age' => 16,
  'gender' => 'women'
  ]
]
foreach ($people as $firstname ) {
  print $firstname . "(" . $age . $gender . ")";
}