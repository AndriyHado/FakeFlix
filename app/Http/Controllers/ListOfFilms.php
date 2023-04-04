<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListOfFilms extends Controller
{
    public static $filmsArry=[
        [
            'id'=>1,
            'filmName'=>'Braking Bad',
            'cover'=>'/img/cover/breaking-bad.jpg'
        ],
        [
            'id'=>2,
            'filmName'=>'THE BOYS',
            'cover'=>'/img/cover/the-boys.jpg'

        ],
        [
            'id'=>3,
            'filmName'=>'DON MATTEO',
            'cover'=>'/img/cover/don-matteo.jpg'

        ],
        [
            'id'=>4,
            'filmName'=>'FRIENDS',
            'cover'=>'/img/cover/friends.jpg'

        ],
        [
            'id'=>5,
            'filmName'=>'HOUSE OF DRAGON',
            'cover'=>'/img/cover/hof.jpg'

        ],
        [
            'id'=>6,
            'filmName'=>'OFFICE',
            'cover'=>'/img/cover/the-office.jpg'

        ]

    ];

    public function  showFilmList(){
        return view('catalogue',['filmList'=>self::$filmsArry]);
    }

    public function userFilm($id){

      foreach (self::$filmsArry as  $value) {
        if($id==$value['id']){
            return view('definiedFilm',['pippo'=>$value] );
        }

      }
    }

}
