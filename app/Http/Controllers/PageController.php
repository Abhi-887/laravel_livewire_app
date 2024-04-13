<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Response;

class PageController extends Controller
{
    public function __invoke(Page $page)
    {


        return view('page', [
            'page' => $page,
            'title' => $page->title,
        ]);
    }
}
