<?php

header('Access-Control-Allow-Origin: *');

$id = $_GET['id'];

$card= [

      'id' => $id,
        'title'=> 'Dashboard Blog',
        'image' => 'https://picsum.photos/id/237/400/400?random='.$id,
        'like' => '61',
        'view' => '5300',
        'user' => [
         'name' => 'plainthing studio',
         'username' => 'plainthingstudio',
         'city' => 'Yogyakarta, Indonesia',
         'avatar' => 'https://cdn.dribbble.com/users/970950/avatars/mini/e0f4e0babc2adf68c37ef783e7695c13.png?1482890298' .id,
         'type' => ['TEAM' , 'PRO'][rand(0 , 1)],

                 ]
      ]; 

echo json_encode($card);

?>