<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Termwind\ValueObjects\setElement;

class Portfolio_details extends Model
{
    use HasFactory;
    private static $portfolio_details;
    public static function getAllPortfolioDetail()
    {
        return[
            0=>[
                'id'=>1,
                'title'=>'Frontend Projects',
                'short-description'=>'Frontend projects are Done using HTML,CSS and BOOTSTRAP',
                'image'=>'Front-end-webdev.webp',
            ],
            1=>[
                'id'=>2,
                'title'=>'Laravel Projects',
                'short-description'=>'All the Laravel projects of this directory are done by me',
                'image'=>'laravel-php-framework-backend.jpg',
            ],
            2=>[
                'id'=>3,
                'title'=>'SpringBoot Project',
                'short-description'=>'These are few of my projects made with springBoot',
                'image'=>'springboot-backend.jpg',
            ],
            3=>[
                'id'=>4,
                'title'=>'Unreal Engine Projects',
                'short-description'=>'These are few of my game development project using unreal engine',
                'image'=>'Unreal-Engine-gamedev.jpg',
            ],
            4=>[
                'id'=>5,
                'title'=>'3D Modelling',
                'short-description'=>'The 3D models in this directory are made with Maxcon-cinema4D',
                'image'=>'cinema4d-3Dmodelling-gamedev.jpg',
            ],
            5=>[
                'id'=>6,
                'title'=>'Graphics',
                'short-description'=>'These designs are Done using Adobe photoshop and Illustrator',
                'image'=>'graphicswork.jpg',
            ],


        ];

    }

    public static function getPortfolioDetailsByID($id){
        self::$portfolio_details = self::getAllPortfolioDetail();
        foreach (self::$portfolio_details as $portfolio_detail){
            if ($portfolio_detail['id'] == $id){
                return $portfolio_detail;
            }

        }

    }
}
