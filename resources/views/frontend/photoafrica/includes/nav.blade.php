<!-- MainMenu-Area -->
<nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('frontend.index')}}"><img src="{{asset('appy/images/photoafrica.jpg')}}" alt="PhotoAfrica Logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="primary_menu">
            <ul class="nav navbar-nav mainmenu">
                <!--<li class="active"><a href="#home_page">Home</a></li>-->
                <!--<li><a href="#about_page">About</a></li>-->
                <!--<li><a href="#features_page">Features</a></li>-->
                <!--<li><a href="#gallery_page">Gallery</a></li>-->
                <!--<li><a href="#price_page">Pricing</a></li>-->
                <!--<li><a href="#questions_page">FAQ</a></li>-->
                <!--<li><a href="blog.html">Blog</a></li>-->
                <!--<li><a href="#contact_page">Contacts</a></li>-->
                <li><a href="{{route('contest-registration')}}">Registration</a></li>
                {{--<li><a href="#">Winners</a></li>--}}
                <li><a href="#">Sponsors</a></li>
                <li><a href="{{route('contestants-gallery')  }}">Gallery</a></li>
                <li><a href="{{route('contact')  }}">Contact</a></li>
                <li><a href="{{route('about')  }}">About</a></li>
                {{--<li><a href="#">Voting Portal</a></li>--}}
                <li><a href="#">Venikbox</a></li>
            </ul>
            <div class="right-button hidden-xs">
                <a href="#"><img src="{{asset('appy/images/venikbox.jpg')}}" width="35"></a>
            </div>
        </div>
    </div>
</nav>
<!-- MainMenu-Area-End -->