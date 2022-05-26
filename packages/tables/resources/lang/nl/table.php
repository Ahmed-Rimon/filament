<?php

return [

    'fields' => [

        'search_query' => [
            'label' => 'Zoeken',
            'placeholder' => 'Zoeken',
        ],

    ],

    'pagination' => [

        'label' => 'Paginatie navigatie',

        'overview' => 'Toont :first tot :last van :total resultaten',

        'fields' => [

            'records_per_page' => [
                'label' => 'per pagina',
            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Ga naar pagina :page',
            ],

            'next' => [
                'label' => 'Volgende',
            ],

            'previous' => [
                'label' => 'Vorige',
            ],

        ],

    ],

    'buttons' => [

        'filter' => [
            'label' => 'Filter',
        ],

        'open_actions' => [
            'label' => 'Acties openen',
        ],

    ],

    'empty' => [
        'heading' => 'Geen resultaten gevonden',
    ],

    'filters' => [

        'buttons' => [

            'reset' => [
                'label' => 'Reset filters',
            ],

            'close' => [
                'label' => 'Sluit',
            ],

        ],

        'multi_select' => [
            'placeholder' => 'Alles',
        ],

        'select' => [
            'placeholder' => 'Alles',
        ],

        'ternary' => [
            'placeholder' => '-',
            'true' => 'Ja',
            'false' => 'Nee',
        ],

    ],

    'selection_indicator' => [

        'selected_count' => '1 rij geselecteerd.|:count rijen geselecteerd.',


        'buttons' => [

            'select_all' => [
                'label' => 'Selecteer alle :count',
            ],

            'deselect_all' => [
                'label' => 'Deselecteer alles',
            ],

        ],

    ],

];
