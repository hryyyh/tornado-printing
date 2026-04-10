<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/product', function () {
    return view('pages.product');
})->name('product');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/product/{slug}', function ($slug) {

    $products = [

        // =============================
        // DEFAULT PRODUCTS (NO CUSTOM ICON)
        // =============================

        'cup-pp-datar' => [
            'name' => 'Cup PP Datar',
            'images' => [
                'images/katalog/cup datar/1.png',
                'images/katalog/cup datar/2.png',
                'images/katalog/cup datar/3.png',
                'images/katalog/cup datar/4.png',
                'images/katalog/cup datar/5.png',
                'images/katalog/cup datar/tutup1.png',
                'images/katalog/cup datar/tutup2.png',
            ]
        ],

        'cup-pp-oval' => [
            'name' => 'Cup PP Oval',
            'images' => [
                'images/katalog/cup oval/1.png',
                'images/katalog/cup oval/2.png',
                'images/katalog/cup oval/3.png',
                'images/katalog/cup oval/4.png',
                'images/katalog/cup oval/5.png',
            ]
        ],

        'custom-pet' => [
            'name' => 'Cup PET',
            'images' => [
                'images/katalog/cup pet/1.png',
                'images/katalog/cup pet/2.png',
                'images/katalog/cup pet/3.png',
            ]
        ],

        'cup-injection' => [
            'name' => 'Cup Injection',
            'images' => [
                'images/katalog/cup injection/1.png',
                'images/katalog/cup injection/2.png',
                'images/katalog/cup injection/3.png',
                'images/katalog/cup injection/4.png',
                'images/katalog/cup injection/tutup.png',
            ]
        ],

        'paper-cup' => [
            'name' => 'Paper Cup',
            'images' => [
                'images/katalog/paper cup/1.png',
                'images/katalog/paper cup/2.png',
            ]
        ],

        'mangkok-plastik' => [
            'name' => 'Mangkok Plastik',
            'images' => [
                'images/katalog/mangkok plastik/1.png',
            ]
        ],

        'cup-jumbo' => [
            'name' => 'Cup Jumbo',
            'images' => [
                'images/katalog/cup jumbo/1.png',
            ]
        ],

        'paper-bowl' => [
            'name' => 'Paper Bowl',
            'images' => [
                'images/katalog/paper bowl/1.png',
                'images/katalog/paper bowl/2.png',
                'images/katalog/paper bowl/3.png',
                'images/katalog/paper bowl/4.png',
            ]
        ],

        'lunch-box' => [
            'name' => 'Lunch Box',
            'images' => [
                'images/katalog/lunch box/1.png',
                'images/katalog/lunch box/2.png',
                'images/katalog/lunch box/3.png',
                'images/katalog/lunch box/4.png',
            ],
            'specs' => [
                [
                    'icon' => 'fa-solid fa-ruler-combined',
                    'text' => 'Custom Size Available'
                ],
                [
                    'icon' => 'fa-solid fa-shield',
                    'text' => 'Food Grade Material'
                ],
                [
                    'icon' => 'fa-solid fa-droplet',
                    'text' => 'Leak Proof'
                ],
                [
                    'icon' => 'fa-solid fa-print',
                    'text' => 'Custom Printing'
                ],
            ]
        ],

        // =============================
        // CUSTOM ICON PRODUCTS
        // =============================

        'tumblr' => [
            'name' => 'Tumblr',
            'images' => [
                'images/katalog/tumblr/1.png',
            ],
            'specs' => [
                [
                    'icon' => 'fa-solid fa-palette',
                    'text' => 'Many Colour Options'
                ],
                [
                    'icon' => 'fa-solid fa-pen-nib',
                    'text' => 'Custom Design, Logo, Name'
                ],
                [
                    'icon' => 'fa-solid fa-print',
                    'text' => 'Custom DTF Printing'
                ],
                [
                    'icon' => 'fa-solid fa-repeat',
                    'text' => '1 Side, 2 Sides, or Full Print'
                ],
            ]
        ],

        'banner' => [
            'name' => 'Banner',
            'images' => [
                'images/katalog/banner/1.png',
                'images/katalog/banner/2.png',
                'images/katalog/banner/3.png',
            ],
            'specs' => [
                [
                    'icon' => 'fa-solid fa-tags',
                    'text' => 'Affordable Price'
                ],
                [
                    'icon' => 'fa-solid fa-calendar-check',
                    'text' => 'Suitable for All Events'
                ],
                [
                    'icon' => 'fa-solid fa-pen-ruler',
                    'text' => 'Free Custom Design'
                ],
            ]
        ],

        'sticker' => [
            'name' => 'Sticker',
            'images' => [
                'images/katalog/sticker/1.png',
                'images/katalog/sticker/2.png',
                'images/katalog/sticker/3.png',
                'images/katalog/sticker/4.png',
                'images/katalog/sticker/5.png',
                'images/katalog/sticker/6.png',
            ],
            'specs' => [
                [
                    'icon' => 'fa-solid fa-sun',
                    'text' => 'Fade Resistant Printing'
                ],
                [
                    'icon' => 'fa-solid fa-layer-group',
                    'text' => 'Premium Sticker Material'
                ],
                [
                    'icon' => 'fa-solid fa-shapes',
                    'text' => 'Custom Shape Available'
                ],
                [
                    'icon' => 'fa-solid fa-droplet',
                    'text' => 'Waterproof'
                ],
            ]
        ],

        'keychain' => [
            'name' => 'Keychain',
            'images' => [
                'images/katalog/ganci/1.png',
            ],
            'specs' => [
                [
                    'icon' => 'fa-solid fa-gem',
                    'text' => 'Acrylic Material'
                ],
                [
                    'icon' => 'fa-solid fa-print',
                    'text' => 'Fade Resistant Printing'
                ],
                [
                    'icon' => 'fa-solid fa-pen-ruler',
                    'text' => 'Free Custom Design'
                ],
            ]
        ],

        'snack-paper' => [
            'name' => 'Snack-Paper',
            'images' => [
                'images/katalog/snack paper/1.png',
            ],
            'specs' => [
                [
                    'icon' => 'fa-solid fa-gem',
                    'text' => 'leak Proof'
                ],
                [
                    'icon' => 'fa-solid fa-print',
                    'text' => 'Custom Design'
                ],
                [
                    'icon' => 'fa-solid fa-shield',
                    'text' => 'Foodgrade Material'
                ],
            ]
        ],

        'spoon' => [
            'name' => 'Spoon',
            'images' => [
                'images/katalog/spoon/1.png',
            ],
            'specs' => [
                [
                    'icon' => 'fa-solid fa-gem',
                    'text' => 'leak Proof'
                ],
                [
                    'icon' => 'fa-solid fa-print',
                    'text' => 'Custom Design'
                ],
                [
                    'icon' => 'fa-solid fa-shield',
                    'text' => 'Foodgrade Material'
                ],
            ]
        ],

        'sleeve' => [
            'name' => 'Sleeve',
            'images' => [
                'images/katalog/sleeve/1.png',
                'images/katalog/sleeve/2.png',
            ],
            'specs' => [
                [
                    'icon' => 'fa-solid fa-gem',
                    'text' => 'leak Proof'
                ],
                [
                    'icon' => 'fa-solid fa-print',
                    'text' => 'Custom Design'
                ],
                [
                    'icon' => 'fa-solid fa-shield',
                    'text' => 'Foodgrade Material'
                ],
            ]
        ],

    ];

    if (!array_key_exists($slug, $products)) {
        abort(404);
    }

    return view('product-detail', [
        'product' => $products[$slug]
    ]);
});