<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Vedmant\FeedReader\Facades\FeedReader;
use App\Models\AdminEntry;
use Facade\FlareClient\View;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        $rss = $request->input('rss');


        $contents = file_get_contents($rss . "/feed-rss/articles.xml");
        Storage::disk('public')->put('feed.xml', $contents);
        $f = FeedReader::read("feed.xml");



        $items = $f->get_items();

        foreach ($items as $item) {
            $admin = AdminEntry::firstOrNew(['title' => $item->get_title()]);
            $admin->image = $item->get_enclosure()->link;
            $admin->desc = $item->get_content();
            $admin->smalldesc = $item->get_description();
            $admin->date = $item->get_date();
            $admin->link = $item->get_link();
            $admin->save();
        }
        return redirect('/admin');
    }
    public function get()
    {
        $data = AdminEntry::latest()->get();
        return view('feed')->with('admin', $data);
    }
    public function tryy(){
        return View('main');
    }
}
