<?php
    /** @var string $hero_image */

    if (is_array($hero_image)) {
        $hero_image_path = $hero_image['image'];
        $hero_image_title = $hero_image['title'];
    } else {
        $hero_image_path = $hero_image;
        $hero_image_title = '';
    }
?>
<picture>
    <source media="(min-width: 1200px)" srcset="
                http:<?= resized_image_url($hero_image_path, 1920, 'wide') ?> 1920w,
                http:<?= resized_image_url($hero_image_path, 1680, 'wide') ?> 1680w,
                http:<?= resized_image_url($hero_image_path, 1280, 'wide') ?> 1280w
            ">
    <source srcset="
                http:<?= resized_image_url($hero_image_path, 1280, 'tall') ?> 1280w,
                http:<?= resized_image_url($hero_image_path, 800, 'tall') ?> 800w,
                http:<?= resized_image_url($hero_image_path, 480, 'tall') ?> 480w
            ">
    <img alt="<?= htmlentities($hero_image_title) ?>">
</picture>