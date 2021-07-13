<?php

usleep(500000);

header('Access-Control-Allow-Origin: *');

$page=$_GET['page'];

$cards =[];

for($i=1; $i<500; $i++)
{
   $cards[] = [

      'id' => $i,
        'title'=> 'Dashboard Blog',
        'image' => 'https://picsum.photos/id/237/400/400?random='.$i,
        'like' => '61',
        'view' => '5300',
        'user' => [
         'name' => 'plainthing studio',
         'username' => 'plainthingstudio',
         'city' => 'Yogyakarta, Indonesia',
         'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298',

        ],  
   ],
}

echo json_encode(array_slice($cards,($page -1)* 9 ,9));

?>