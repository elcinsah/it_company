<?php

namespace App\Http\Controllers\admin;

use App\Enums\PagesEnums;
use App\Http\Controllers\Controller;
use App\Models\portfolio;
use App\Models\portfoliocategory;
use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    public function portfolio()
    {
        $portfolio = portfolio::with(['getProfolio'])->paginate(2);;

        return view('admin.pages.portfolio', compact('portfolio'));

    }

    public function portfolioUpdate(Request $req, $id)
    {
        $portfolio = portfolio::with(['getProfolio'])->where('id', $id)->first();
        $catname = portfoliocategory::all();

        // dd($portfolio);
        return view('admin.pages.portfolioupdate', compact('portfolio', 'catname'));
    }

    public function portfolioAdd()
    {
        $catname = portfoliocategory::all();

        return view('admin.pages.portfolioadd', compact('catname'));
    }

    public function portfolioAddForm(Request $req)
    {
        $portfolio = new portfolio();
        $mehsul_haqqinda = strip_tags(trim($req->mehsul_haqqinda));
        $description = strip_tags(trim($req->description));
        $title = strip_tags(trim($req->title));
        $negd_qiymet = strip_tags(trim($req->negd_qiymet));
        $kredit_qiymet = strip_tags(trim($req->kredit_qiymet));
        $ilkin_odenis=strip_tags(trim($req->ilkin_odenis));
        $ayliq_odenis=strip_tags(trim($req->ayliq_odenis));
        $kredit_muddeti=strip_tags(trim($req->kredit_muddeti));

        $portfolio->mehsul_haqqinda = $mehsul_haqqinda;
        $portfolio->title = $title;
        $portfolio->description = $description;
        $portfolio->portfoliocategory_id = $req->catname;
        $portfolio->status = $req->status;
        $portfolio->negd_qiymet = $negd_qiymet;
        $portfolio->kredit_qiymet = $kredit_qiymet;
        $portfolio->satis_novu = $req->satis_novu;
        $portfolio->ilkin_odenis=$ilkin_odenis;
        $portfolio->ayliq_odenis=$ayliq_odenis;
        $portfolio->kredit_muddeti=$kredit_muddeti;

        if ($req->hasFile('image') and $req->image != null) {
            fileUplode($req->image, $portfolio);
        } else {
            $req->image == null;
        }
        $portfolio->save();
        return redirect()->route('portfolio.admin.data');

    }

    public function portfolioChange(Request $req, $id)
    {

        $portfolio = portfolio::with(['getProfolio'])->where('id', $id)->first();

        $mehsul_haqqinda = strip_tags(trim($req->mehsul_haqqinda));
        $description = strip_tags(trim($req->description));
        $title = strip_tags(trim($req->title));
        $negd_qiymet = strip_tags(trim($req->negd_qiymet));
        $kredit_qiymet = strip_tags(trim($req->kredit_qiymet));
        $ilkin_odenis=strip_tags(trim($req->ilkin_odenis));
        $ayliq_odenis=strip_tags(trim($req->ayliq_odenis));
        $kredit_muddeti=strip_tags(trim($req->kredit_muddeti));

        $portfolio->mehsul_haqqinda = $mehsul_haqqinda;
        $portfolio->title = $title;
        $portfolio->description = $description;
        $portfolio->portfoliocategory_id = $req->catname;
        $portfolio->status = $req->status;
        $portfolio->negd_qiymet = $negd_qiymet;
        $portfolio->kredit_qiymet = $kredit_qiymet;
        $portfolio->satis_novu = $req->satis_novu;
        $portfolio->ilkin_odenis=$ilkin_odenis;
        $portfolio->ayliq_odenis=$ayliq_odenis;
        $portfolio->kredit_muddeti=$kredit_muddeti;

        if ($req->hasFile('image') and $req->image != null) {
            fileUplode($req->image, $portfolio);
        } else {
            $req->image == null;
        }
        $portfolio->save();
        return redirect()->route('portfolio.admin.data');


    }

    public function portfolioDelete($id)
    {

        $delport = portfolio::findOrFail($id)->delete();
        return redirect()->back();

    }
}
