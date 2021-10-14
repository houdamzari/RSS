<?php

namespace App\Http\Controllers;

use App\Models\TodaysModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Vedmant\FeedReader\Facades\FeedReader;

class TodayController extends Controller
{
    public function today()
    {

        $url = "https://aujourdhui.ma/category/actualite/feed/";
        $contents = file_get_contents($url);
        Storage::disk('public')->put('feed.xml', $contents);
        $f = FeedReader::read("feed.xml");

        $data = TodaysModel::latest()->get();

        $items = $f->get_items();
        $descc = $items[4]->get_description();

        $desccc = explode("<p>", $descc);
        foreach ($items as $item) {
            $media = TodaysModel::firstOrNew(['title' => $item->get_title()]);
            //  $media->enable_order_by_date();
            //$media->desc = $item->get_content();
            $desc = $item->get_description();
            $desc1 = explode("<p>", $desc);
            if (isset($desc1[1] )) {

                $desc2 = explode("</p>", $desc1[1]);
            }
            $media->image = $desc2[0];
            if (isset($desc2[1])){
                $media->desc = $desc2[1];
                $media->smalldesc = $desc2[1];
            }

            $media->date = $item->get_date();
            $media->link = $item->get_link();
            $media->save();
        }
        return view('HomePress.today')->with('media', $data);
    }//
}
