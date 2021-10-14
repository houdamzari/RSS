<?php

namespace App\Http\Controllers;

use App\Models\France24;
use App\Models\Hespress;
use App\Models\Media24;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Vedmant\FeedReader\Facades\FeedReader;

class FranceController extends Controller
{
    public function France(){

        $url = "https://www.france24.com/fr/tag/maroc/rss";
        $contents = file_get_contents($url);
        Storage::disk('public')->put('feed.xml', $contents);
        $f = FeedReader::read("feed.xml");

        $data = France24::latest()->get();

        $items = $f->get_items();
            foreach ($items as $item) {
                $france = France24::firstOrNew(['title' => $item->get_title()]);
                $france->image = $item->get_enclosure()->link;
                $france->desc = $item->get_content();
                $france->smalldesc = $item->get_description();
                $france->date = $item->get_date();
                $france->link = $item->get_link();
                $france->save();
            }
        return view('HomePress.france24')->with('france', $data);
    }


}


