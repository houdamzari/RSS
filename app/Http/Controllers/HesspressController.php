<?php

namespace App\Http\Controllers;

use App\Models\Media24;
use Illuminate\Http\Request;
use Vedmant\FeedReader\Facades\FeedReader;
use App\Models\Hespress;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HesspressController extends Controller
{
    public function Hesspress()
    {

        $url = "https://fr.hespress.com/feed/";
        $contents = file_get_contents($url);
        Storage::disk('public')->put('feed.xml', $contents);
        $f = FeedReader::read("feed.xml");

        $data = Hespress::latest()->simplePaginate(12);

        $items = $f->get_items();
        foreach ($items as $item) {
            $hespress = Hespress::firstOrNew(['title' => $item->get_title()]);
            $hespress->image = $item->get_enclosure()->link;
            $hespress->desc = $item->get_content();
            $hespress->smalldesc = $item->get_description();
            $hespress->date = $item->get_date();
            $hespress->link = $item->get_link();
            $hespress->save();
        }
        return view('HomePress.Hesspress')->with('hespress', $data);
    }
    public function media()
    {

        $url = "https://telquel.ma/feed/";
        $contents = file_get_contents($url);
        Storage::disk('public')->put('feed.xml', $contents);
        $f = FeedReader::read("feed.xml");

        $data = Media24::latest()->get();

        $items = $f->get_items();
        foreach ($items as $item) {
            $media = Media24::firstOrNew(['title' => $item->get_title()]);
            $media->image = $item->get_enclosure()->link;
            $media->desc = $item->get_content();
            $media->smalldesc = $item->get_description();
            $media->date = $item->get_date();
            $media->link = $item->get_link();
            $media->save();
        }
        return view('HomePress.try')->with('media', $data);
    }
}
