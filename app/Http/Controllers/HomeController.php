<?php

namespace App\Http\Controllers;
use App\Contracts\HomeInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var HomeInterface
     */
    private $HomeInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(HomeInterface $HomeInterface)
    {
        $this->HomeInterface = $HomeInterface;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function changeLocale($locale)
    {
        $this->HomeInterface->changeLocale($locale);
        return redirect()->back();
    }

}
