 @extends('layouts.blog')

 @section('content')

            <!-- Koniec sekcji o mnie -->
                  
               
                <div id="sec_omnie_1"  class="container-fluid">
                          <div style="margin-top:20px;" class="row">

                             <div class="col col-xs-0 col-sm-0 col-md-1 col-lg-2 col-xl-2"></div>

                             <div class="col col-xs-12 col-sm-12 col-md-5 col-lg-3 col-xl-3">
                                  <img class="image-responsive" id="sec_omnie_zdj" src="https://scontent-lhr3-1.xx.fbcdn.net/v/t1.0-9/37312701_2052375064979497_1392062423199907840_n.jpg?_nc_cat=0&oh=e045e63d9142c88f1933cd39218bb575&oe=5C23C5C7" alt="">
                             </div>

                             <div id="sec_omnie_text" class="col col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">

                                   <h2>-Cześć, jestem Marek!</h2>
                                   
                                    <p id="sec_omnie_p">

                                       Moim hobby jest gotowanie, lubię gotować dla siebie, dla bliskich i znajomych. Inspiracji szukam w odwiedzanych restauracjach i w internecie.
                                       Gotując, najbardziej lubię robić wszystko sam, nie wykorzustując gotowych produktów. Zapraszam, zajrzyj czasem, co ostatnio zdarzyło mi się ugotować!
                                        
                                    </p>
                                  
                                    <h3 id="sec_omnie_h">Może sam lub sama znajdziesz tu inspirację...</h3>

                             </div>

                          </div>
                 </div>
                 

              <!-- Koniec sekcji o mnie -->   
              
              
              
              <!-- Sekcja przepisów -->   
             
          
     
          
          <div class="container-fluid" id="sek_recipie">
              <div>
                     <h1 id="secRecipeHmain">
                       <a href="{{ action('ArticleController@publicHomePage') }}#kat_element"> >> Co ostatnio u mnie na talerzu? << </a></h1> 
               <div id="sec_kategorie" class="row">
                  <div class="col col-xs-0 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
         
                 <div id="kat_element" class="col col-xs-6 col-sm-2 col-md-2 col-lg-2 col-xl-2"><img style="width: 30%;" src="/image/sniadanie.png"><a href="{{ action('ArticleController@publicHomePageSniadania') }}#kat_element"><br>Śniadania</a></div>
                 <div id="kat_element" class="col col-xs-6 col-sm-2 col-md-2 col-lg-2 col-xl-2"><img style="width: 30%;" src="/image/obiad.png"><a href="{{ action('ArticleController@publicHomePageDaniaglowne') }}#kat_element"><br>Dania główne</a></div>
                 
                 
                 <div id="kat_element" class="col col-xs-6 col-sm-2 col-md-2 col-lg-2 col-xl-2"><img style="width: 30%;" src="/image/deser.png"><a href="{{ action('ArticleController@publicHomePageDesery') }}#kat_element"><br>Desery</a></div>
                 
                 
                 <div style="border-right: 2px gray dashed;" id="kat_element" class="col col-xs-6 col-sm-2 col-md-2 col-lg-2 col-xl-2"><img style="width: 30%;" src="/image/pozostale.png"><a href="{{ action('ArticleController@publicHomePagePozostale') }}#kat_element"><br>Pozostałe</a>
                 
                 </div>
                 
                  <div class="col col-xs-0 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                     
                 
                 </div>
                  
                  
                  
               
              
                @foreach($articles as $article)
                
               <div style="margin-top: 50px; " class="col col-xs-12 col-sm-6 col-md-6 col-xl-4 col-lg-4" >
                  
                   <div style=" margin-bottom:5px; padding-bottom: 5px;"  class="col-12">
                       
                       <div id="sec_recipie_img" style="background-image:url({{ $article -> sciezka}});">
                       
                           <h2 id="sec_recipie_h"> <a id="sec_recipie_a"  href="{{ route('articles.show',$article->id) }}">-{{ $article -> title}}-</a></h2>
                       
                       </div>
                   
                   </div>
                  
                </div>
              
                 @endforeach
               
                   <div class="row"> <!-- pasek przewijania artykułów -->
                     
                      <div style="font-family: 'Amatic SC', cursive; font-size: 25px; color:black; border: none;" class="col-md-4 col-md-offset-5 col-xs-4 col-xs-offset-4 col-sm-4 col-sm-offset-4 col-lg-2 col-lg-offset-5"  >
                          
                          {!! $articles->links() !!}
                      </div>
                        
                   </div>
                
            </div>
            
        </div>
   
 
@stop