<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudiController extends Controller
{
    public function index()
    {
        $imagesCards =[
        'https://farm2.staticflickr.com/1913/43675081920_a6340153a1_o.jpg',
        'https://s2.glbimg.com/LU4JfOvMdoN5c7PNGaqpYW4oQf4=/0x0:1500x974/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2021/8/1/0hdeVPS76ocpwo9NqCUw/a203794-medium.jpg',
        'https://revistacarro.com.br/wp-content/uploads/2022/03/Audi-A4-Sedan-2022.jpg'
    ];
        $imagesCarrousel = [
            'https://www.turbo.pt/wp-content/uploads/Audi-e-tron-GT-2-1111.jpg',
            'https://quatrorodas.abril.com.br/wp-content/uploads/2020/09/804A0414-e1600269680499.jpg?quality=70&strip=info',
            ' https://img.olhardigital.com.br/wp-content/uploads/2021/05/Audi-e-Tron-GT-695x500.jpg'
        ];

        $imageText = [
            'https://media.gettyimages.com/photos/audi-a4-quattro-sedans-picture-id459005525?s=2048x2048',
            'https://staticp.0aos100.pt/posts/1619033635audiq4e-tron01jpg_1980x600.jpg',
        ];

        return view('audi.index', [
            'imagesCards' => $imagesCards,
            'imagesCarrousel' => $imagesCarrousel,
            'imageText' => $imageText
        ]);
    }
}
