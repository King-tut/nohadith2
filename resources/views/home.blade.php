<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src=" {{URL::to('js/jquery.js')}} "></script>
<script type="text/javascript" src=" {{URL::to('js/bootstrap.js')}} "></script>

    
   <script type="text/javascript" src="{{URL::to('ckeditor/ckeditor.js')}}"></script>
   <script type="text/javascript" src="{{URL::to('ckfinder/ckfinder.js')}}"></script>
    
   <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.css')}}">
    <link rel="shortcut icon" href="{{URL::to('favicon.ico') }}" >
    
    <style type="text/css">
body{
  background: white;
  padding:0;
  margin:0;
  overflow: auto;

  
 
}

.container{
  background: #bccce5;
  


  
}

.dropdown{
     color:white;
    }
  
  .dropdown ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    background-color: black;

}

.dropdown li a {
    display: block;
    padding: 10px;
    text-align: center;
    color: #6b9eef;
}

.dropdown li a:hover {
    background-color: black;
}

.dropdown li {
    display: inline-block;
}

.dropbutton:hover .droplinks{
    /*Cause the div to be displayed only when a website visitor hovers their mouse over the list item containing the div*/
    display: block;
} 

.droplinks {
    /*Break the div out of the layout flow of the list*/
    position: absolute;
    /*Give the div a background color and width*/
    background-color: black;
    min-width: 140px;
    /*Hide the div from view*/
    display: none;
}

.droplinks a {
    /*Match the padding applied to the other menu items*/
    padding: 10px;
    /*For the links to each fill a complete row in the containing div*/
    display: block;
}


.sub-droplinks{
  position: absolute;
    /*Give the div a background color and width*/
    background-color: black;
    min-width: 140px;
    /*Hide the div from view*/
    display: none;

}

.sub-dropbutton:hover .sub-droplinks {
    /*Match the padding applied to the other menu items*/
    padding: 10px;
    /*For the links to each fill a complete row in the containing div*/
    display: block;
}

.sub-droplinks a{
  display: block;
}

.fab-well{
  background: #6b9eef;
}



.fab-well{
  background: linear-gradient(white, #6b9eef);
}

.ref-links{
  color:#64f4f4;
}

.bolder{
  color:black;
  font-size: 25px;
}


.footer-star{
  list-style: none;
 opacity: 0.6;
 height:23px;

  color:black;
  background: linear-gradient(white, #6b9eef);
}

 #side-list li{
 list-style: none;
}

#footer{
  background: #333333;
  color:#6b9eef;
   text-align: center;

  padding: 0px;
  margin-top: 0px;
  height: 100px;
}

</style>
</head>
 @section('content')
 <body style="background:linear-gradient(lightgray, white); ">
 
<nav class="navbar navbar-default navbar-static-top" style="background: black; ">

            <div class="nav-container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand ref-links active" href="{{ url('/') }}">
                        Home 
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        @if (Auth::guest())
                         <!--Add a class to the list item with the drop menu-->
        <li class="dropbutton"><a href="" style="color: #6b9eef;">Authority of Quran</a> 
         <div class="droplinks">
         @foreach($authority as $a)
        <a href="postdata/{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li>|<!--end of Categories-->
          
        <!--Add a class to the list item with the drop menu-->
        <li class="dropbutton"><a href="" style="color: #6b9eef;">Falsehood of sunnah</a> 
         <div class="droplinks">
         @foreach($falsesunnah as $a)
        <a href="postdata/{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li>|
        <li class="dropbutton"><a href="" style="color: #6b9eef;">Children of Israel</a> 
         <div class="droplinks">
         @foreach($children as $a)
        <a href="postdata/{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>

            <li class="dropbutton"><a href="" style="color: #6b9eef;">Womens Issues</a> 
         <div class="droplinks">
         @foreach($women as $a)
        <a href="postdata/{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li>|

    <li class="dropbutton"><a href="" style="color: #6b9eef;">Sunni VS Shia</a> 
         <div class="droplinks">
         @foreach($vs as $a)
        <a href="postdata/{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li>|

   <li class="dropbutton"><a href="" style="color: #6b9eef;">Miscellaneous</a> 
         <div class="droplinks">
         @foreach($misc as $a)
        <a href="postdata/{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>




     </li>|


     <li><a href="{{ route('login') }}" style="color: white;">Login</a></li>
                            <li><a href="{{ route('register') }}" style="color: white;">Register</a></li>

           

  



                           
                       







                        @else

                         <li class="dropbutton"><a href="" style="color: #6b9eef;">Authority of Quran</a> 
         <div class="droplinks">
         @foreach($authority as $a)
        <a href="postdata/{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li><!--end of Categories-->
          
        <!--Add a class to the list item with the drop menu-->
        <li class="dropbutton"><a href="" style="color: #6b9eef;">Falsehood of sunnah</a> 
         <div class="droplinks">
         @foreach($falsesunnah as $a)
        <a href="postdata/{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li>
        <li class="dropbutton"><a href="" style="color: #6b9eef;">Children of Israel</a> 
         <div class="droplinks">
         @foreach($children as $a)
        <a href="postdata/{{$a->id}}">{{$a->title}}</a>

        @endforeach  
        
             
            </div>
        
  </li>|
     

           
                         <div class="dropdown" style="float:left; margin-top: 12px; margin-right: 12px;">
  
  
             
      







                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:white; background: black">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>



  
  <div class="container allButFooter" style="margin-top: 3px;">

This is the page count {{$new_hit->hits}} 
  <img src="src/images/main.jpg" alt="Quran only" id="main-image" style="height: 400px; width: 100%; margin-top: 0px;">



<section style="padding-bottom: 300px;">
    <div class="row" >
    <div class="col-md-6 col-lg-6">
    <h2 style="text-align: center;">Main Title Here</h2><hr class="main-color-bg" style="height: 10px;">
    <h3>As Salam wa laykum | Peace be upon you</h3>
    <p>In the Name of Allah</p>
  <p style="font-family: sans-serif;font-size: 18px;"> Many of the main beliefs in of Sunni Islam are based upon the things found in the ahadith literature and not found in the Quran, and in many instances, contradicts the Quran. </p><br>
  <p>This site will establish the authority of the Quran over the ahadith literature that has corrupted the true spirt and essence of Islam. Islam predated the Arabic Quran and thereforth it predated any hadith literature.</p><br>

  <h2>Pliiar one | The Shahadah</h2>
  <br>
  <p style="font-family: sans-serif;font-size: 18px;"> Ahadith literature has corrupted even the most basic of beliefs and tenetants of Islam. The simple and pure creed of Islam through the ages from Adam to the last prophet is, There is only <strong>ONE</strong> pillar of Islam and that is that there is only ONE GOD and there is no other but He. </p><br>
  <p style="font-family: sans-serif;font-size: 18px;"> The Quran informs us that with this tremendous declaration was established all that is in the heavens and the earth.</p>
  <blockquote style="background: lightgray;">
  God bears witness that there is no god except He, and so do the angels and those who possess knowledge. Truthfully and equitably, He is the absolute god; there is no god but He, the Almighty, Most Wise.
</blockquote>
<br>
<p style="font-family: sans-serif;font-size: 18px;">So in theory and theologically one does not need to believe in Muhammad or any other prophet for that matter to be a Muslim. One needs to have a firm belief in the Most High in order to be of the Muslims. This is why we find that the Quran describes believers in the past as MUSLIMS. Because belief in GOD is not tied to any single prophet and or messenger.</p></br>

<p style="font-family: sans-serif;font-size: 18px;">The Quran informs us that every prophet and or messenger was sent with the same message and central belief, "There is only one GOD and there is no other but He". It is really that simple. </p>

<p style="font-family: sans-serif;font-size: 18px;">Now all of the sudden after Allah sent prophet after prophet with the same decalration of faith(that there is only one GOD), hadith says that one must not bear witness to the ONE true GOD, one must now single out belief in a messenger as well. The Quran only mentions the name Muhammad 4 times. None of those four times is the name used as in a declaration of faith. He is refered to by title more so than by name. He is called the messenger of Allah. </p>

<p style="font-family: sans-serif;font-size: 18px;">
Using one of the books of Allah before the Quran, we find that the declaration of faith id the same as that which is found in the Quran. That there is only one GOD and that there is no other but He. This declaration of faith is known as Shema Yisrael. This is the testomony of faith that all the prophets and Muslims from among the children of Israel made for thousands of years before the Quran. 
</p>
<p style="font-family: sans-serif;font-size: 18px;">
 So in closing, the proofs and simple logic prove to be overwhealming that there is a corruption of the testomony of faith in Islam and that the hadith literature that is attributed to the last prophet contradics the Quran on this fundemuntal belief.
</p>

<p style="font-family: sans-serif;font-size: 18px;">The word Tawhid is not to be found anywhere in the Quran. This word is only found in the hadith literature. In fairness, the concept of the word Tawhid is found in the Quran, but I will not be using this word to describe the oneness of GOD, as this word is foreign to the Quranic text. The Quran as well as the previous books of Allah include the concept of the oneness of GOD. As any reader of any of the divine scriptures can attest to, the oneness of GOD is a central belief and concept. The first of the 10 commandments is the that there is one GOD and there is no other but He.</p>

  <blockquote style="background: lightgray;">And God spoke all these words:

 “I am the Lord your God, who brought you out of Egypt, out of the land of slavery.

 “You shall have no other gods besides me." 

 Exodus:20</blockquote>






  <h2>Pillar Two | The 5 daily prayers</h2>
  <p style="font-family: sans-serif;font-size: 18px;">
  The so called 5 daily prayers is one of the biggest proofs that the ahadith literature contridicts the Quran. Ther are so many issues or questions that can be posed by those who do not have an understanding of the Quran and what came before it in regards to the prayers. One of the main questions that a hadith believer will ask is how do you know how to pray if its not for the hadith?<br>

  This question would be valid or have some validitity if the prayer originated with the Quran. But the prayer had been around for thousands of years. The Quran informs us of numerous prophets and messengers who  made the salat to ALLAH. The 83rd verse of the second chapter of the Quran informs us that the salat was enjoined upon the children of Israel as was the Zakat.
  </p> 

  <p style="font-family: sans-serif;font-size: 18px;">
  There is no real specific number placed upon those prayers in the previous books of Allah. There are refrences to 3 daily prayers in the Hebrew scripture that came before the Quran. This is consistant with the Quran as well, as it never mentions once there being 5 prayers. But the Quran does mention the salat and the number 3 along with the names of those 3 prayers.
  </p>

  <p style="font-family: sans-serif;font-size: 18px;">
  The link between this strange number of 5 and the Zoroastrian Religion being the official State Religion of the Persian Empire is not to be understated. Bukhari and all the major hadith collectors of from Sunni Islam are of Persian heratage. The same way one can see the Roman Empires influence upon the CHristians NT is the same way one can spot the Persian Empires influence upon the hadith literature. 
  </p>

 <h2>Pillar Three | Zakat</h2>
 <p style="font-family: sans-serif;font-size: 18px;">
  The Zakat like the prayer was enjoined upon the children of Israel before the Arabic Quran was revealed. When the Quran mentions the Zakat it is relaying it in a way in which the intended audiance already knows what it is. This is because the children of Israel are the main audiance of the Qurans recisitation. See <a href="#">The Imporatance of the children of Israel</a> for more about that topic.
 </p>

 <p style="font-family: sans-serif;font-size: 18px;">
 No where does the Quran mention that ther is a set number to the Zakat let alone that it is being set at a meager 2.5% of ones anual income. I was once in a mosque and the Zakat for the year was $7 if one had a job and $5 if the person was unemployed. May Allah give us all the correct understanding of what Zakat is. 
 </p>

<p style="font-family: sans-serif;font-size: 18px;">
Again the Zakats origins can be traced back to Abraham. The Quran informs us that the Zakat was made known to Abraham and the Hebrew word for Zakat is like its counter part in Arabic. Again the hadith literature contradicts the Quran about Zakat.
</p>

<h2>Pillar Four | The Fast of Ramadan </h2>

<p style="font-family: sans-serif;font-size: 18px;">
The word Ramadan is only mentioned in the Quran once. The literal translation of the word ramadan is burining heat or burining hot. The Quran informs us that there are 12 months in the year and that sacres days are to remain sacred. In short, the month of Ramadan is supposed to be the same every year. It is in the month of burning heat. 
</p>
  
  <p style="font-family: sans-serif;font-size: 18px;">
  Agian the fast is also something we find that was enjoined upon the Muslism before the Quran. How can one know when the last 10 days are if you dont know when the fast ends? The fast is also a set number of days according to the Quran. It is not supposed to be alternating. 
  </p>

  <h2>Pillar Five | Hajj</h2>

  <p style="font-family: sans-serif;font-size: 18px;">
   Lastly, there is the Hajj. Pilgramage to Makkah. Again this can be raced back to Abraham. This is one of the biggest proofs of how dangerous the hadith literature can be. The Hajj has become a pagan rock kissing and thowing custom. People are trampled to death by the hundreds participating in these foreign acts to the pure Quranic injunctions of the Hajj. 
  </p>

  <p style="font-family: sans-serif;font-size: 18px;">
  People believe that if they can touch or kiss a rock that it can have all their sins forgivrn. This is only found in hadith literature and is in total opposition to the Quran.
  </p>

<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->

<hr><br>
<h2>
    Leave a comment 
</h2>
<form action="" method="POST">
    

 <textarea id="comment" name="comment" class="comment-box" cols="60" rows="10">
     

 </textarea>
  {{ csrf_field() }}
  <input type="hidden" name="pageid" id="pageid" value="1">
 <br>
 @if(Auth::guest())
   <p>If you want to leave a comment or subscribe to our news letter you must <a href="{{route('register')}}">register</a> or <a href="{{route('login')}}">login</a> </p>
  @else
  <br>
  <button class="btn btn-success" id="comment-btn">Add Comment</button>
  @endif
</form>
  @if($fil)
  <h3>Latest comments</h3>
@foreach($fil as $f)
<br>
 <h4 class="name" style="background:lightblue;">Posted By: {{$f->name}}</h4><br>
      <p class="comment">{{$f->comment}}</p> <br>
    <p class="time">{{$f->created_at}}</p>
    <hr style="background: white;">

@endforeach

@else
<h1>There are no comments</h1>
@endif

 </div><!--end of the first col-->
  

  <div class="col-md-4">

<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
</div>


 

 <div class="col-md-4" style="float: right;">
<h3 style="font-weight: bolder;">Featured Posts</h3>
 @foreach($favfive as $five)
  <div class="thumbnail fab-well">
      <img src="src/images/main/{{$five->pic}}" alt="..."  style="max-height: 140px; max-width: 200px;">
      <div class="caption">
     <p style="font-weight: bold; font-size: 16px;">{{$five->title}}</p>
     {{$five->description}}
     <a href="postdata/{{$five->id}}" style="color:white">....Read More</a>
  
</div>
 </div>
 <br>
 @endforeach

</div><!--end COL Cats-->

<div class="col-md-4" style="float: right; margin-top: 150px;">
<h3 style="font-weight: bolder;">Most Recent Posts</h3>
 @foreach($latestfooter as $five)
  <div class="thumbnail fab-well">
      <img src="src/images/main/{{$five->pic}}" alt="..."  style="max-height: 140px; max-width: 200px;">
      <div class="caption">
     <p style="font-weight: bold; font-size: 16px;">{{$five->title}}</p>
     {{$five->description}}
     <a href="postdata/{{$five->id}}" style="color:white">....Read More</a>
  
</div>
 </div>
 <br>
 @endforeach

</div><!--end COL Cats-->


</section>
</div>
</div>



 
  

    






   <!--<h2>Latest Comments</h2>
   <br>
    <ul style="float: right;">
   @foreach($latestcomments as $latest)
     <img src="src/images/star.png" style="max-height: 20px; max-width: 20px; background: white;" ><li class="footer-star">{{$latest->name}}</li>
     <li class="footer-star">{{$latest->comment}}</li>

   
   @endforeach
   </ul>-->


    

   <div id="footer_container">
    <div id="footer">
    <a href="#">Valid XHTML</a> | <a href="http://fotogrph.com/">Images</a> | with thanks to <a href="#">e-shot</a> | website template by <a href="#">ARaynorDesign</a>
    </div><!--close footer-->  
  </div><!--close footer_container-->   

</body>

