<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MyController extends Controller
{
    public function liste()
    {
        $liste = DB::table('administrateur')->get();
        // echo $liste;
        return view('liste', ['liste' => $liste]);
    }

    public function insertForm()
    {
        return view('insert');
    }

    public function detailArticle($id)
    {
        $detail = DB::table('produit')->where('idproduit', $id)->get();
        echo $detail;
        return view('detail', ['detail' => $detail]);
    }

    public function dbConnect()
    {
        try {
            $dbname = DB::connection()->getDatabaseName();
            echo (DB::table('categorie')->get());
            return "database name is: ($dbname)";
        } catch (\Exception $e) {
            return "Error in connecting to the database";
        }
    }


    public function home(): View
    {
        $liste = DB::table('publications')->get();
        $data['publication'] = $liste;
        return view('pages.home', $data);
    }

    public function admin(): View
    {
        $data['article'] = DB::table('article')->get();
        return view('pages.homeadmin', $data);
    }

    public function verifier(Request $request)
    {
        $email = $request->input('email');
        $pass = $request->input('pass');
        // echo ('de aon ony');
        $admin = DB::table('administrateur')->where('email',$email)->where('mdp',$pass)->get();
        if($admin!=null){
            $liste = DB::table('article')->get();
            return view('pages.homeadmin', $liste);
        }
        else{
        return redirect()->back()->with('error', 'misy probleme');
        }
    }

    public function detail($id)
    {
        $detail = DB::table('article')->where('idarticle', $id)->get();
        return view('pages.detail', $detail);
    }

    public function search(Request $request)
    {
        $article = new Article();
        $article->titre = $request['titre'];
        $article->soustitre = $request['soustitre'];
        $article->articledescription = $request['articledescription'];
        $data = DB::table('article')->where('titre', $article->titre)->where('soustitre', $article->soustitre)->where('articledescription', $article->articledescription)->get();
        echo $article->titre;
        // return view('pages.result',$data);
    }

    public function insertArticle(Request $request)
    {
        $article = Article::create([
            'titre' => $request['titre'],
            'soustitre' => $request['soustitre'],
            'articledescription' => $request['description'],
            'articleimage' => $request['image'],
        ]);
        $article->save();
        return redirect()->back()->with('success', 'Data inserted successfully.');
    }
}