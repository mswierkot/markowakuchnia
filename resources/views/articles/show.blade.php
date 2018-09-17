<!DOCTYPE html>
<html>
  @include('includes.head')

<body id="sec_contact">
 
             
              @include('includes.navbar')

                  
                
                <div style="font-family: 'Amatic SC', cursive; margin-top:30px; " class="container-fluid">
                   <div class="container">
                   
                   <h2><a href="{{ action('ArticleController@publicHomePage') }}"><- Wróć</a></h2>
                   
                   <div class="row">
                       <h2 style="font-weight:bold; margin-top: 50px; font-size: 35px;">->> {{ $article -> title}}  </h2>
                   </div>
                    <div style="margin-top: 30px;" class="row">
                        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                            <img id="img1" src="{{ $article -> sciezka}}" alt="">
                        </div>
                        <div style="background-color: #ececdc; font-size: 27px; border-right: 4px dashed gray;  " class="col col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                            <h1 style="font-weight:bold;">->> Co muszisz kupić?</h1>
                            <p>  
                            
                                {!! str_replace('<br>', '<br>', $article -> lista) !!}
                            </p>
                        </div>
                    </div>
                    
                    <div style="margin-top: 80px; margin-bottom: 40px; font-size: 20px; text-align: justify;" class="row">
                        <div class="col-lg-12">
                            
                            <h1 style="font-weight:bold; margin-bottom: 20px;">->> A teraz co z tym zrobić?</h1>
                            
                            <p style="background-color: #ececdc; font-size: 27px; padding: 5px;">
                           {!! str_replace('<br>', '<br>', $article -> body) !!}
                            
                            </p>
                        </div>
                    </div>
                    
                    <div class="row">
                      
                        <h1 style="font-weight:bold; margin-bottom: 20px;">->> Jak to wyglądało?</h1>
                        <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12" style="float:left; margin-top: 8px;">
                            <div id="sec_recipie_img" style="background-image:url({{ $article -> miniatura1}}); height:300px;"></div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="float:left; margin-top: 8px;">
                            <div id="sec_recipie_img" style="background-image:url({{ $article -> miniatura2}}); height:300px;"></div>
                        </div>
                          
                               
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12" style="float:left; margin-top: 8px;">
                            <div id="sec_recipie_img" style="background-image:url({{ $article -> miniatura3}}); height:300px;"></div>
                        </div>
                
                    </div>
                

                <!--<a class="btn btn-primary" href="{{ route('admin.index') }}"> Wróć</a>-->
          
     
    </div>
    
    
    </div>
    
    <div class="container" style="margin-top:50px;">
        <div class="row">
           <h1 style="font-weight:bold; margin-bottom: 20px; font-family: 'Amatic SC', cursive;">->> Daj znać, co sądzisz!</h1>
            <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
 
var disqus_config = function () {
this.page.url = '{{ Request::url() }}'  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{ $article -> id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
 
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://markowa-kuchnia.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
    </div>
   
       
       
         @include('includes.footer')
                
 

</body>
</html>