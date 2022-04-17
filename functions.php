<?php

const NAMES = ['Vlad', 'Jenny', 'Masha', 'Robert', 'Victor'];

function task($id): array
{
    return [
        'id' => $id,
        'name' => NAMES[array_rand(NAMES)],
        'age' => rand(18, 45)
    ];
}
