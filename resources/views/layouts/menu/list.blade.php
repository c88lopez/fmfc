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
    'pppIndustries' => [
        'name' => 'PPP Industries',
        'link' => 'pppIndustries',
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