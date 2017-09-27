<?php
$sectionList = [
    'consortia' => [
        'name' => 'Consorcios',
        'link' => 'consortia',
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