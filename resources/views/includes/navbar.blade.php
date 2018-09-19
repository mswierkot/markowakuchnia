<!--cały div zawierający panel navigacyjny-->
            
              
                  <div class="container-fluid"> 

                    <div id="nav_div_1" class="row menu-top">

                         <div id="nav_div_2" class="container-fluid"> <!-- część z nazwą bloga -->
                          <div id="nav_div_3" class="row">
                              <div id="nav_div_4" class="col col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-4">
                                   <p id="nav_p"> <img class="img-fluid"  src="/image/logo.png"> </p>
                                   <p id="nav_p_1"> Markowa Kuchnia</p>
                                   <p id="nav_p_2"> Kulinarny blog Marka</p>

                               </div>
                          </div>
                      </div>



                     <nav id="nav_bar_1" class="navbar" role="navigation">
 

                       <div class="row" style="text-align:center; font-size:25px; color: white; ">
                          <div class="col col-md-4 col-lg-4"></div>
                           
                              <div id="nav_element" class="col col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">
                               <a style="color:white;" href="{{ action('ArticleController@publicHomePage') }}#kat_element">Przepisy</a>
                              </div>
                              
                              <div id="nav_element" class="col col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">
                               <a target="_blank" style="color: white;" href="https://www.youtube.com/channel/UCEIUh_P4J9RBopGM1kHJLsg?view_as=subscriber">Wideo</a>
                              </div>
                              
                              <div id="nav_element" class="col col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">
                               <a target="_blank" style="color: white;" href="https://www.instagram.com/markowakuchnia/">Instagram</a>
                              </div>
                              
                              <div id="nav_element" class="col col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">
                                <a style="color:white;"  href="{{ action('ContactController@show') }} ">Kontakt</a>
                          
                                </div>
                              
                           <div class="col col-md-4 col-lg-4"></div>
                       </div>

                     </nav>
                     </div>
                     </div> 
 
             <!--koniec diva zawierającego panel navigacyjny-->