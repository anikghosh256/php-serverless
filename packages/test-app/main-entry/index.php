<?php

function main(array $args): array
{
    return [
        'body' => 'Hello World',
        'headers' => [
            'content-type' => 'text/plain'
        ]
    ];
}
