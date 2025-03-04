<?php

use RyanChandler\Color\Color;

use function Puny\ok;
use function Puny\test;

test('it can be created', function () {
    $color = new Color(255, 254, 253);

    ok($color instanceof Color, 'instantiated correctly');
    ok($color->toString() === '(255, 254, 253)', 'colors are stored correctly');

    $static = Color::new(255, 254, 253);

    ok($static instanceof Color, 'statically instantiated correctly');
    ok($static->toString() === '(255, 254, 253)', 'colors are stored correctly statically');
});

test('it can limit RGBA colors', function () {
    $color = new Color(256, 257, 258, 2.0);

    ok($color->alpha === 1.0, 'colors alpha value limited to 1.0');
    ok($color->toString() === '(255, 255, 255)', 'colors are limited to 255');
});

test('it can be created using ::random()', function () {
    $random = Color::random();

    ok($random instanceof Color, 'instantiated correctly');
});

test('it can be created using ::hex()', function () {
    $hex = Color::hex('#819758');

    ok($hex instanceof Color, 'instantiated correctly');
    ok($hex->toString() === '(129, 151, 88)', 'hex converted correctly.');
});

test('it can be created using abbreviated hex values', function () {
    $hex = Color::hex('#aaa');

    ok($hex instanceof Color, 'instantiated correctly');
    ok($hex->toString() === '(170, 170, 170)', 'hex converted correctly.');
});
