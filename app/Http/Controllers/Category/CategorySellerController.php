<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Http\Controllers\ApiController;
use Facade\FlareClient\Api;
use Illuminate\Http\Request;

class CategorySellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Category $category)
    {
        $sellers = $category->products()->with('seller')
            ->get()
            ->pluck('seller')
            ->unique('id')
            ->values();

        return $this->showAll($sellers);
    }
}
