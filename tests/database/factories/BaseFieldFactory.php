<?php

use Illuminate\Support\Str;
use Tbruckmaier\Corcelacf\Models\BaseField;
use Tbruckmaier\Corcelacf\Models\Text;
use Tbruckmaier\Corcelacf\Models\Boolean;

$factory->define(BaseField::class, function (Faker\Generator $faker) {
    return [
        'post_author' => $faker->name,
        'post_date' => $faker->dateTimeThisYear,
        'post_date_gmt' => $faker->dateTimeThisYear,
        'post_content' => 'a:12:{s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";i:0;s:17:"conditional_logic";i:0;s:7:"wrapper";a:3:{s:5:"width";s:0:"";s:5:"class";s:0:"";s:2:"id";s:0:"";}s:13:"default_value";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";s:9:"maxlength";s:0:"";s:8:"readonly";i:0;s:8:"disabled";i:0;}',
        'post_title' => $faker->title,
        'post_excerpt' => $faker->word,
        'post_status' => 'publish',
        'comment_status' => 'closed',
        'ping_status' => 'closed',
        'post_password' => '',
        'post_name' => 'field_' . Str::random(13),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTimeThisMonth,
        'post_modified_gmt' => $faker->dateTimeThisMonth,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => 'http://example.com/?p=' . $faker->numberBetween(1, 100),
        'menu_order' => 0,
        'post_type' => 'acf-field',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
});

$factory->state(BaseField::class, 'user', function (Faker\Generator $faker) {
    return [
        'post_content' => 'a:8:{s:4:"type";s:4:"user";s:12:"instructions";s:0:"";s:8:"required";i:0;s:17:"conditional_logic";i:0;s:7:"wrapper";a:3:{s:5:"width";s:0:"";s:5:"class";s:0:"";s:2:"id";s:0:"";}s:4:"role";s:0:"";s:10:"allow_null";i:0;s:8:"multiple";i:0;}',
    ];
});

$factory->state(BaseField::class, 'relationship', function (Faker\Generator $faker) {
    return [
        'post_content' => 'a:12:{s:4:"type";s:12:"relationship";s:12:"instructions";s:0:"";s:8:"required";i:0;s:17:"conditional_logic";i:0;s:7:"wrapper";a:3:{s:5:"width";s:0:"";s:5:"class";s:0:"";s:2:"id";s:0:"";}s:9:"post_type";a:1:{i:0;s:4:"page";}s:8:"taxonomy";a:0:{}s:7:"filters";a:3:{i:0;s:6:"search";i:1;s:9:"post_type";i:2;s:8:"taxonomy";}s:8:"elements";s:0:"";s:3:"min";s:0:"";s:3:"max";s:0:"";s:13:"return_format";s:6:"object";}',
    ];
});

$factory->state(BaseField::class, 'taxonomy', function (Faker\Generator $faker) {
    return [
        'post_content' => 'a:13:{s:4:"type";s:8:"taxonomy";s:12:"instructions";s:0:"";s:8:"required";i:0;s:17:"conditional_logic";i:0;s:7:"wrapper";a:3:{s:5:"width";s:0:"";s:5:"class";s:0:"";s:2:"id";s:0:"";}s:8:"taxonomy";s:8:"category";s:10:"field_type";s:8:"checkbox";s:10:"allow_null";i:0;s:8:"add_term";i:1;s:10:"save_terms";i:0;s:10:"load_terms";i:0;s:13:"return_format";s:2:"id";s:8:"multiple";i:0;}',
    ];
});

$factory->state(BaseField::class, 'taxonomy_single', function (Faker\Generator $faker) {
    return [
        'post_content' => 'a:13:{s:4:"type";s:8:"taxonomy";s:12:"instructions";s:0:"";s:8:"required";i:0;s:17:"conditional_logic";i:0;s:7:"wrapper";a:3:{s:5:"width";s:0:"";s:5:"class";s:0:"";s:2:"id";s:0:"";}s:8:"taxonomy";s:8:"category";s:10:"field_type";s:5:"radio";s:10:"allow_null";i:0;s:8:"add_term";i:1;s:10:"save_terms";i:0;s:10:"load_terms";i:0;s:13:"return_format";s:6:"object";s:8:"multiple";i:0;}',
    ];
});
