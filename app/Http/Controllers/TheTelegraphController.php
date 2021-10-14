<?php

namespace App\Http\Controllers;

use App\Models\Telegraph;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Vedmant\FeedReader\Facades\FeedReader;

class TheTelegraphController extends Controller
{

    public function telegraph()
    {

        $url = "https://www.telegraph.co.uk/rss.xml";
        $contents = file_get_contents($url);
        Storage::disk('public')->put('feed.xml', $contents);
        $f = FeedReader::read("feed.xml");

        $data = Telegraph::latest()->get();

        $items = $f->get_items();
        foreach ($items as $item) {
            $media = Telegraph::firstOrNew(['title' => $item->get_title()]);
            $media->image = $item->get_enclosure()->link;
            $media->desc = $item->get_content();
            $media->smalldesc = $item->get_description();
            $media->date = $item->get_date();
            $media->link = $item->get_link();
            $media->save();
        }
        return view('HomePress.Telegraph')->with('media', $data);
    }
}
