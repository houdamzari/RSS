<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Vedmant\FeedReader\Facades\FeedReader;

class RTController extends Controller
{
    public function rt()
    {

        $url = "https://www.rt.com/rss/";
        $contents = file_get_contents($url);
        Storage::disk('public')->put('feed.xml', $contents);
        $f = FeedReader::read("feed.xml");

        $data = RtModel::latest()->get();

        $items = $f->get_items();
        foreach ($items as $item) {
            $media = RtModel::firstOrNew(['title' => $item->get_title()]);
            $media->image = $item->get_enclosure()->link;
            $media->desc = $item->get_content();
            $media->smalldesc = $item->get_description();
            $media->date = $item->get_date();
            $media->link = $item->get_link();
            $media->save();
        }
        return view('HomePress.rt')->with('media', $data);
    }
}
