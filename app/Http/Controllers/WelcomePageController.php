<?php


namespace App\Http\Controllers;


use App\Models\Portfolio_details;
use App\Models\Hobbies_details;

class WelcomePageController
{
    public $text, $portfolio_details, $portfolio_detail, $hobbies_details, $hobbies_detail;
    public function index(){
        $this->portfolio_details = Portfolio_details::getAllPortfolioDetail();
        return view('portfolio',['portfolio_details' => $this->portfolio_details]);

    }

    public function cv(){
        return view('cv');
    }

    public function hobbies(){
        return view('hobbies');

    }
    public function detail($id)
    {
        $this->portfolio_detail = Portfolio_details::getPortfolioDetailsByID($id);
        return view('portfolio_details',['portfolio_detail' => $this->portfolio_detail]);
    }
    public function hobbiesDetail($id)
    {
        $this->hobbies_detail = Hobbies_details::getHobbiesDetailsByID();
        return view('hobbies_details',['hobbies_detail' => $this->hobbies_detail]);
    }

    public function hobbiesIndex()
    {
        $this->hobbies_details = Hobbies_details::getAllHobbiesDetail();
        return view('hobbies',['hobbies_details' => $this->hobbies_details]);
    }


}
