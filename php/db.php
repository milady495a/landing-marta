<?php

$DB_HOST = '127.0.0.1'; // cuentonokmwriter.mysql.db
$UName = 'root'; // cuentonokmwriter
$Pass = ''; // mC6FLQaGs9rEWL4a
$DB_Name = 'cuentonokmwriter';
$base = 'https://mtornero.com/';
$base_blog = $base . 'blog/';

error_reporting(E_ERROR | E_PARSE);

$conn = mysqli_connect($DB_HOST, $UName, $Pass, $DB_Name);

// Check connection
if ($conn) {

  // session_start();

  $conn->set_charset("utf8");

  $sql = "SELECT title, post_name, date, CONCAT(LEFT(image, LENGTH(image) - LOCATE('.', REVERSE(image))),'-1016x508.',SUBSTRING_INDEX(image, '.', -1)) AS image
  FROM (
    SELECT
    p.post_title AS title,
    -- p.post_status AS 'status',
    p.post_name AS post_name,
    p.post_date AS date,
    (SELECT `guid` FROM wm_posts WHERE id = m.meta_value) AS image
    FROM wm_posts p, wm_postmeta m
    WHERE p.post_type = 'post'
    AND p.post_status = 'publish'
    AND p.id = m.post_id
    AND m.meta_key = '_thumbnail_id'
    ORDER BY date DESC
    LIMIT 4
  ) TT";

  $result = mysqli_query($conn, $sql);

  $posts_aux = mysqli_fetch_all($result, MYSQLI_ASSOC);


  $posts = [];

  foreach ($posts_aux as $key => $post) {

    $image = $post['image'];
    $href = $base_blog . $post['post_name'];

    // Apaño, no se porque pone un punto aveces, lo quitamos
    $image = str_replace(".-1016x508", "-1016x508", $post['image']);

    // Convertimos al formato que espera section-conversacion.php
    $posts[] = [
      'href' => $href,
      'src' => $image,
      'alt' => $post['title'],
    ];
  }

  mysqli_close($conn);

} else {

  // Si falla la conexión usamos los que habían antes

  $posts = [
    [
      'href' => $base_blog . 'talento-para-escribir-mito/',
      'src' => $base . 'img/portfolio/post_1.jpg',
      'alt' => 'post talento para escribir mito',
    ],[
      'href' => $base_blog . 'los-cien-mil-reinos-lectura-critica/',
      'src' => $base . 'img/portfolio/post_2.jpg',
      'alt' => 'post lectura crítica de los cien mil reinos j k jemisin',
    ],[
      'href' => $base_blog . 'los-errores-mas-comunes-de-exposicion-en-narrativa/',
      'src' => $base . 'img/portfolio/post_3.jpg',
      'alt' => 'post los errores más comunes de exposición en narrativa',
    ],[
      'href' => $base_blog . 'foreshadowing-anticipacion-narrativa/',
      'src' => $base . 'img/portfolio/post_4.jpg',
      'alt' => '¿Conoces los 4 grados de foreshadowing o anticipación narrativa?',
    ]
  ];

}

error_reporting(E_ALL);

// echo "<pre>";
// print_r($posts);
// exit();
