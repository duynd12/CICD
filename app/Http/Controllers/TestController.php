<?php

namespace App\Http\Controllers;

use App\Facades\Animal;
use App\Services\AnimalService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function __construct(private AnimalService $service)
    // {
    //     $this->service = $service;
    // }

    public function index()
    {
        return Animal::index();
    }
}