<?php
$sectionList = [
    'weather' => [
        'name' => 'Weather',
        'link' => 'weather',
    ],
    'reports' => [
        'name' => 'Reports',
        'link' => 'reports',
    ],
];

?>

@foreach ($sectionList as $sectionName => $sectionParameters)
    @include(
        'layouts.menu.item',
        [
            'id'   => $sectionName,
            'name' => $sectionParameters['name'],
            'link' => $sectionParameters['link']
        ]
    )
@endforeach