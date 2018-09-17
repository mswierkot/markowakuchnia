<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Article;
 

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        

     public function publicHomePage()
     {
         $articles = Article::latest()->paginate(6);
         return view('articles/publicHomePageTemplate', ['articles'=>$articles]);
     }
    
     public function publicHomePageSniadania()
     {
         $articles = Article::where('category', 'sniadanie')->paginate(6); 
         return view('articles/publicHomePageTemplate', ['articles'=>$articles]);
     }
    
     public function publicHomePageDaniaglowne()
     {
         $articles = Article::where('category', 'kolacja')->paginate(6); 
         return view('articles/publicHomePageTemplate', ['articles'=>$articles]);
     }
    
     public function publicHomePageDesery()
     {
         $articles = Article::where('category', 'deser')->paginate(6); 
         return view('articles/publicHomePageTemplate', ['articles'=>$articles]);
     }
    
     public function publicHomePagePozostale()
     {
         $articles = Article::where('category', 'pozostale')->paginate(6); 
         return view('articles/publicHomePageTemplate', ['articles'=>$articles]);
     }
    
        public function index()
        {
        $articles = Article::latest()->paginate(6);
        return view('admin.index',compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'sciezka' => 'required',
            'miniatura1' => 'required',
            'miniatura2' => 'required',
            'miniatura3' => 'required',
            'lista' => 'required',
            'category' => 'required',
        ]);
        Article::create($request->all());
   
        return redirect()->route('admin.index')
                        ->with('success','Article created successfully');
   
 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.edit',compact('article'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'sciezka' => 'required',
            'miniatura1' => 'required',
            'miniatura2' => 'required',
            'miniatura3' => 'required',
            'lista' => 'required',
            'category' => 'required',
        ]);
        
        Article::find($id)->update($request->all());
        return redirect()->route('admin.index')
                        ->with('success','Przepis pomyślnie zaktualizowano, szef!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect()->route('admin.index')
                        ->with('success','Przepis pomyślnie wymazano, szef!');
    }
}