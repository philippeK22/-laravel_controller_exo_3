<?php

namespace App\Http\Controllers;

use App\Models\Produit ;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        // $perfection =[


        // (object)[
        //     "titre"=>"BLENDED TO PERFECTION",
        //     "monContenu"=>"COFFEES & TEAS",
        //     "photo"=>"products-01.jpg",
        //     "descrip"=>"We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.",

        // ],

        // (object)[
        //     "titre"=>"DELICIOUS TREATS, GOOD EATS",
        //     "monContenu"=>"BAKERY & KITCHEN",
        //     "photo"=>"products-02.jpg",
        //     "descrip"=>"Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.",

        // ],
        // (object)[
        //     "titre"=>"FROM AROUND THE WORLD",
        //     "monContenu"=>"BULK SPECIALITY BLENDS",
        //     "photo"=>"products-03.jpg",
        //     "descrip"=>"Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.",

        // ]

    // ];
    $perfection = Produit::all();



        return view("products",compact("perfection"));

    }
}
