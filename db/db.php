<?php

$pizze = [
    new Pizza ('Margherita', 7, ['pomodoro', 'mozzarella', 'basilico', 'olio evo'] ),
    new Pizza ('Diavola', 10, ['pomodoro', 'mozzarella', 'salame piccante'], new Media('diavola.jpg', 'Pizza Diavola') ),
    new Pizza ('Americana', 10, ['mozzarella', 'patatine', 'wurstel'], new Media('americana.webp', 'Pizza Americana') ),
    new Pizza ('Capricciosa', 10, ['mozzarella', 'carciofi', 'olive', 'prosciutto cotto', 'funghi'], new Media('capricciosa.jpg', 'Pizza Capricciosa') ),
];