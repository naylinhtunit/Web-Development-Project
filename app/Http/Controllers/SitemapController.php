<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Spatie\Sitemap\SitemapGenerator;
use Carbon\Carbon;
use URL;

class SitemapController extends Controller
{
  public function sitemap()
  {
      
    $now = Carbon::now();
    
    SitemapGenerator::create(URL::to('/'), $now, '1.0', 'always')
    ->getSitemap()
    ->add(URL::to('/blog'), $now, '0.8', 'weekly')
    ->add(URL::to('/contact'), $now, '0.8', 'weekly')
    ->writeToFile('sitemap.xml');
    
    return redirect('/sitemap.xml');
  }
}
