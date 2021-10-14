<?php

namespace App\Http\Controllers;

use App\Models\SkyNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Vedmant\FeedReader\Facades\FeedReader;

class SkyNewsController extends Controller
{
    public function sky()
    {

        $url = "https://feeds.skynews.com/feeds/rss/world.xml";
        $contents = file_get_contents($url);
        Storage::disk('public')->put('feed.xml', $contents);
        $f = FeedReader::read("feed.xml");

        $data = SkyNews::latest()->get();

        $items = $f->get_items();
        foreach ($items as $item) {
            $media = SkyNews::firstOrNew(['title' => $item->get_title()]);
            $media->image = $item->get_enclosure()->link;
            $media->desc = $item->get_content();
            $media->smalldesc = $item->get_description();
            $media->date = $item->get_date();
            $media->link = $item->get_link();
            $media->save();
        }
        return view('HomePress.skynews')->with('media', $data);
    }
}
