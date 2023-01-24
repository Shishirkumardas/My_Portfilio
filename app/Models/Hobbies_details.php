<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobbies_details extends Model
{
    use HasFactory;
    private static $hobbies_details;
    public static function getAllHobbiesDetail()
    {
        return[
            0=>[
                'id'=>1,
                'title'=>'Music Covers',
                'short-description'=>'Frontend projects are Done using HTML,CSS and BOOTSTRAP',
                'image'=>'Music_covers.jpg',
            ],
            1=>[
                'id'=>2,
                'title'=>'Harmonica Playing',
                'short-description'=>'All the Laravel projects of this directory are done by me',
                'image'=>'harmonica_playing.jpg',
            ],
            2=>[
                'id'=>3,
                'title'=>'Photography',
                'short-description'=>'These are few of my projects made with springBoot',
                'image'=>'photography.jpg',
            ],
            3=>[
                'id'=>4,
                'title'=>'Artworks and Poetry',
                'short-description'=>'These are few of my game development project using unreal engine',
                'image'=>'poetry_recitation.jpg',
            ],
            4=>[
                'id'=>5,
                'title'=>'Travelling',
                'short-description'=>'The 3D models in this directory are made with Maxcon-cinema4D',
                'image'=>'travelling.jpg',
            ],
            5=>[
                'id'=>6,
                'title'=>'Movie and Series',
                'short-description'=>'These designs are Done using Adobe photoshop and Illustrator',
                'image'=>'movies and series.jpg',
            ],


        ];

    }



    public static function getHobbiesDetailsByID($id){
        self::$hobbies_details = self::getAllHobbiesDetail();
        foreach (self::$hobbies_details as $hobbies_detail){
            if ($hobbies_detail['id'] == $id){
                return $hobbies_detail;
            }
        }
    }
}
