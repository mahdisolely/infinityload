<?php

usleep(500000);
header('Access-Control-Allow-Origin: *');
$page=$_GET['page'];

$cards = [
   [
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5300',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],
   [
   	  'id' => 1,
   	  'title'=> 'Luan Kcare',
   	  'image' => 'https://cdn.dribbble.com/users/1071652/screenshots/15830636/media/fe1a63e86a6f89ff28b86fe3311d44fb.png?compress=1&resize=300x225',
   	  'like' => '103',
   	  'view' => '10900',
   	  'user' => [
   	  	'name' => 'unfold',
   	  	'username' => 'unfuld',
   	  	'city' => 'Sarasota Florida',
   	  	'avatar' => 'https://cdn.dribbble.com/users/414979/avatars/mini/1305d804ae3e46b11fd1389fac65cccf.png?1566958767',

   	  ],
   ],
   [
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],
   [
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],
   [
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],
   [
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],
   [
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],
   [
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],
   [
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],[
   	  'id' => 1,
   	  'title'=> 'Dashboard Blog',
   	  'image' => 'https://cdn.dribbble.com/users/3041390/screenshots/15825526/media/d519a86505468b0be5879846ca7ae8dc.png?compress=1&resize=300x225',
   	  'like' => '61',
   	  'view' => '5.3k',
   	  'user' => [
   	  	'name' => 'plainthing studio',
   	  	'username' => 'plainthingstudio',
   	  	'city' => 'Yogyakarta, Indonesia',
   	  	'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

   	  ],
   ],
];

echo json_encode(array_slice($cards,($page -1)* 9 ,9));

?>