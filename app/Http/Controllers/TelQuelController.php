<?php

namespace App\Http\Controllers;

use App\Models\Media24;
use App\Models\TelQuel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mockery\Undefined;
use Vedmant\FeedReader\Facades\FeedReader;

class TelQuelController extends Controller
{
    public function telquel()
    {

        $url = "https://telquel.ma/feed/";
        $contents = file_get_contents($url);
        Storage::disk('public')->put('feed.xml', $contents);
        $f = FeedReader::read("feed.xml");

        $data = TelQuel::latest()->get();

        $items = $f->get_items();
        $descc = $items[4]->get_description();

        $desccc = explode("<p>", $descc);
        foreach ($items as $item) {
            $media = TelQuel::firstOrNew(['title' => $item->get_title()]);
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
        return view('HomePress.Telquel')->with('media', $data);
    }//
}
