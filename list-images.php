<?php
$directory = 'image/belt/';
$images = glob($directory . '*.{jpg,jpeg,png,webp}', GLOB_BRACE);

$items = array_map(function($image) {
    return [
        'imageSrc' => $image,
        'imageAlt' => pathinfo($image, PATHINFO_FILENAME),
        'name' => 'Item Name ' . pathinfo($image, PATHINFO_FILENAME),
        'code' => 'Item code ' . pathinfo($image, PATHINFO_FILENAME)
    ];
}, $images);

header('Content-Type: application/json');
echo json_encode($items);
?>
