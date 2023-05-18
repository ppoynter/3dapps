<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="application/css/bootstrap.min.css" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' href='application/css/x3dom.css'>

    <link rel="stylesheet" href="application/css/custom.css" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="application/css/jquery.fancybox.min.css">
    
    <title>Coca-Cola 3D Court</title>

  </head>
  <body id="bodyColor">
      <!--Header to show logo, and menus-->
      <nav id="header" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
            <div class="logo">
              <a id="logo" class="navbar-brand navbar-text" href="#">
                <h2>My Coca-Cola Court</h2>
                <p>Playing the game, of tasty drinks</p>
              </a>
            </div>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About this Assignment">About</a>
                  </li>
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Check Out the X3D Models">Models</a>
                  </li>
                  <li class="nav-item">
                    <a id="navContact" class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
                </ul>
            </div>
      </nav>


      <div class="container-fluid">
        <!--Home page contents-->
          <div id="home" class="main_contents">
            <div class="row">
              <div class="col-sm-12 mainVideo">
                <!--Slide show on home page-->
                <div id="carouselIndicators" class="carousel slide" data-interval="false" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselIndicators" onClick="playAudio()" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" onClick="playAudio()" data-slide-to="1"></li>
                  </ol>
                    <div class="carousel-inner">
                      <div id="pour" class="carousel-item active">
                        <video id="main_video" autoplay="" loop="" muted="">
                          <source src="application/assets/videos/Pouring_Coke_1_Videvo.mov" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>
                        <audio id="canPour" src="application/assets/sound/canPour.mp3"></audio>
                        <div id="main_text" class="col-sm-4">
                          <div id="title_home"></div>
                          <div id="subtitle_home"></div>
                          <div id="description_home"></div>
                        </div> 
                      </div>
                      <div id="open" class="carousel-item">
                        <video autoplay="" loop="" muted="">
                          <source src="application/assets/videos/OpeningSodaCan1Videvo.mov" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>
                        <audio id="canAudio" src="application/assets/sound/canOpen.wav"></audio>
                      </div>
                      <a class="carousel-control-prev" href="#carouselIndicators" role="button" onclick="playAudio()" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselIndicators" role="button" onclick="playAudio()" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
              </div>
            </div>  
            <!--Rows for each drink description-->
            <div class="row justify-content-md-center">
                  <div class="col-sm-5">
                      <div class="card">
                          <a href="application/assets/images/coke.jpg" data-fancybox data-caption="Coca-Cola Logo">
                            <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/coke.jpg" alt="Coca Cola">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                                <a id="findOut" href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">The real deal...</a>                 
                          </div>
                      </div>
                  </div>
            </div>
            <div class="row justify-content-md-center">
                  <div class="col-sm-5">
                      <div class="card">
                          <a href="application/assets/images/sprite.png" data-fancybox data-caption="Sprite Logo" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/sprite.png" alt="Sprite">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a id="findOut" href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">The real deal...</a>
                          </div>
                          
                      </div>
                  </div>
            </div>
            <div class="row justify-content-md-center"> 
                  <div class="col-sm-5">
                      <div class="card">
                          <a href="application/assets/images/dr_pepper.jpg" data-fancybox data-caption="Dr Pepper Logo" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/dr_pepper.jpg" alt="Dr Pepper">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                            <a id="findOut" href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">The real deal...</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div>
      
          <!--About page contents-->
          <div id="about" style="display:none;">
            <div class="row justify-content-md-center">
              <div class="col-sm-11 description">
                  <div class="card modelCard">
                      <div class="card-body">
                        <div id="welcome" class="card-title drinksText"></div>
                        <div id="welcomeText" class="card-text drinksText"></div>   
                      </div>
                  </div>
              </div>
            </div>
            <div class="row justify-content-md-center">
              <div class="col-sm-11 description">
                  <div class="card modelCard">
                      <div class="card-body">
                        <div id="github" class="card-title drinksText"></div>
                        <div id="githubText" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Gihtub Codebase</a>                 
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Gihtub VRML/X3D models</a>         
                      </div>
                  </div>
              </div>
            </div>
            <div class="row justify-content-md-center">
              <div class="col-sm-11 description">
                  <div class="card modelCard">
                      <div class="card-body">
                        <div id="statement" class="card-title drinksText"></div>
                        <div id="statementText" class="card-text drinksText"></div>        
                      </div>
                  </div>
              </div>
            </div>
            <div id="bibliography" class="row justify-content-md-center">
              <div class="col-sm-11 description">
                  <div class="card modelCard">
                      <div class="card-body">
                        <div class="card-title drinksText"><h2>Bibliography</h2></div>
                        <div class="card-text drinksText">
                          <p>Here is a list of various resources used to help with the production of this website.</p>
                          <ol class="list-group">
                            <li class="list-group-item">
                              <p>Coca cola logo 1080P, 2K, 4K, 5K HD wallpapers free download | Wallpaper Flare. (n.d.). Retrieved May 01, 2023, from <a href="https://www.wallpaperflare.com/search?wallpaper=coca+cola+logo">https://www.wallpaperflare.com/search?wallpaper=coca+cola+logo</a></p>
                            </li>
                            <li class="list-group-item">
                              <p>Sprite Logo Wallpapers - Top Free Sprite Logo Backgrounds - WallpaperAccess. (n.d.). Retrieved May 02, 2023, from <a href="https://wallpaperaccess.com/sprite-logo">https://wallpaperaccess.com/sprite-logo</a></p>
                            </li>
                            <li class="list-group-item">
                              <p>Dr Pepper Wallpapers - Top Free Dr Pepper Backgrounds - WallpaperAccess. (n.d.). Retrieved May 02, 2023, from <a href="https://wallpaperaccess.com/dr-pepper">https://wallpaperaccess.com/dr-pepper</a></p>
                            </li>
                            <li class="list-group-item">
                              <p>Grid system · Bootstrap. (n.d.). Retrieved May 07, 2023, from <a href="https://getbootstrap.com/docs/4.0/layout/grid/">https://getbootstrap.com/docs/4.0/layout/grid/</a></p>
                            </li>
                            <li class="list-group-item">
                              <p>HTML Video. (n.d.). Retrieved May 07, 2023, from <a href="https://www.w3schools.com/html/html5_video.asp">https://www.w3schools.com/html/html5_video.asp</a></p>
                            </li>
                            <li class="list-group-item">
                              <p>Opening Soda Can Close Up Free Stock Video Footage Download Clips. (n.d.). Retrieved May 09, 2023, from <a href="https://www.videvo.net/video/opening-soda-can-close-up/1536/">https://www.videvo.net/video/opening-soda-can-close-up/1536/</a></p>
                            </li>
                            <li class="list-group-item">
                              <p>Pouring Cola 1 - Slow Motion Free Stock Video Footage Download Clips. (n.d.). Retrieved May 09, 2023, from <a href="https://www.videvo.net/video/pouring-cola-1-slow-motion/2131/">https://www.videvo.net/video/pouring-cola-1-slow-motion/2131/</a></p>
                            </li>
                            <li class="list-group-item">
                              <p>Carousel · Bootstrap. (n.d.). Retrieved May 08, 2023, from <a href="https://getbootstrap.com/docs/4.0/components/carousel/">https://getbootstrap.com/docs/4.0/components/carousel/</a></p>
                            </li>
                            <li class="list-group-item">
                              <p>Bootstrap 4 Hamburger menu - examples & tutorial. (n.d.). Retrieved May 11, 2023, from <a href="https://mdbootstrap.com/docs/b4/jquery/navigation/hamburger-menu/">https://mdbootstrap.com/docs/b4/jquery/navigation/hamburger-menu/</a></p>
                            </li>
                            <li class="list-group-item">
                              <p>Freesound - “Quick Pour” by elliotlp. (n.d.). Retrieved May 11, 2023, from <a href="https://freesound.org/people/elliotlp/sounds/235779/">https://freesound.org/people/elliotlp/sounds/235779/</a></p>
                            </li>
                            <li class="list-group-item">
                              <p>Freesound - “Fizzy Drink Can, Opening, A.wav” by InspectorJ. (n.d.). Retrieved May 12, 2023, from <a href="https://freesound.org/people/InspectorJ/sounds/393877/">https://freesound.org/people/InspectorJ/sounds/393877/</a></p>
                            </li>
                          </ol>
                        </div>        
                      </div>
                  </div>
              </div>
            </div>
            
          </div>  

          <!--3D models contents-->
          <div id="models" class="main_contents" style="display:none;">
            <div class="row justify-content-md-center">
              <div class="col-sm-7">
                <div class="card text-left">
                  <div class="card-body">
                    <div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                        <div class="model3D">
                          <x3d id="wireframe">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model"  mapDEFToID="true" onclick="shake();" url="application/assets/x3d/coke_animation.x3d" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="shake();" url="application/assets/x3d/sprite_animation.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="shake();" url="application/assets/x3d/drp_animation.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <div class="gallery" id="gallery"></div>
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="interaction" class="col-sm-4" style="display:none;">
                <div class="row justify-content-md-center">
                    <div class="card text-center modelCard">
                        <div class="card-body">
                          <div id="x3dCameraTitle" class="card-Title drinksText"></div>                            
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraFront();">Front</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraTop();">Top</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBottom();">Bottom</a>
                          <div id="x3dCameraDescription" class="card-text drinksText"></div>
                        </div>
                    </div>
                    <div class="card text-center modelCard">
                    <div class="card-body">
                      <div id="animationTitle" class="card-Title drinksText"></div>
                      <a href="#" class="btn btn-primary btn-responsive" onclick="shake();">Shake!</a>
                      <a href="#" class="btn btn-primary btn-responsive" onclick="stopShake();">Stop</a>
                      <div id="animationDescription" class="card-text drinksText"></div>
                    </div>
                    </div>
                    <div class="card text-center modelCard">
                    <div class="card-body">
                      <div id="renderTitle" class="card-Title drinksText"></div>
                      <a href="#" class="btn btn-primary btn-responsive" onclick="wireFrame();">Wireframe Mode</a>
                      <div id="renderDescription" class="card-text drinksText"></div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div id="cokeDescription" class="row justify-content-md-center" style="display:none;">
              <div class="col-sm-11 description">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_coke" class="card-title drinksText"></div>
                          <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                          <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Take a look at the real Coke!</a>                 
                      </div>
                  </div>
              </div>
          </div> 

          <div id="spriteDescription" class="row justify-content-md-center" style="display:none;">
              <div class="col-sm-11 description">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_sprite" class="card-title drinksText"></div>
                          <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                          <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Take a look at the real Sprite!</a>                 
                      </div>
                  </div>
              </div>
          </div>

          <div id="pepperDescription" class="row justify-content-md-center" style="display:none;">
              <div class="col-sm-11 description">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Take a look at the real Dr. Pepper!</a>                 
                      </div>
                  </div>
              </div>
          </div> 
      </div> 
      
      <!--Footer bar-->
      <nav id="footer" class="navbar-fixed-bottom  navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-middle">Brought to you by pp326 | <a id="footerLink" href="javascript:changeLook()">Restyle</a></span></p>
              </div>
              <div class="navbar-text float-right social">
                <a id="footerLink" href="https://github.com/ppoynter/3dapps/tree/main/assignment"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav> 
 
      <!--Pop up window for the contact button-->
      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title">3D Assignment Contact Details</h2>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <div class="modal-body">
                  <p>pp326@sussex.ac.uk</p>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>


      <script src="application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="application/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="application/js/fontawesome-all.min.js"></script>

      <script src="application/js/custom.js" crossorigin="anonymous"></script>
 
      <script src="application/js/swap_restyle.js"></script>

      <script type='text/javascript' src='application/js/x3dom-1.7.2/x3dom.js'></script>
 
      <script type="text/javascript" src="application/js/gallery_generator.js"></script>

      <script src="application/js/getJsonData.js"></script>

      <script src="application/js/modelInteractions.js"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="application/js/jquery.fancybox.min.js"></script>
  </body>
</html>