@extends('layout.layout')

@section('content')

<!-- Random comment to show version control -->
<div class="container mt-3">


    <div class="row">
        <div class="col-sm-4">
            <div class="m-0">
                <h1 class="display-XL-4"> Welcome to my page</h1>
                <img class=" img-fluid  rounded" src="/assets/images/background/giphy.gif">
                <p class="mt-2">Feel free to look around</p>
            </div>
            <div>

                <ul class="nav nav-pills flex-column">

                    <li class="nav-item">
                        <a class="nav-link " href="https://www.instagram.com/leslie_s2001/" target="_blank">
                            <i class="fab fa-instagram icons"></i> My Instagram</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="https://www.linkedin.com/in/leslie-scherbeijn-020231173/" target="_blank">
                            <i class="fab fa-linkedin icons"></i> My LinkedIn</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="https://www.facebook.com/leslie.scherbeijn" target="_blank">
                            <i class="fab fa-facebook-square icons"></i> My Facebook</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="https://github.com/LeslieScherbeijn" target="_blank">
                            <i class="fab fa-github icons"></i> My Github</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
        </div>

        <div class="col-sm-8 text-center">
            <div>
                <h1 class="display-XL-4">
                    Who am I?
                </h1>

                <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="nl_NL" data-type="vertical" data-theme="dark" data-vanity="leslie-scherbeijn-020231173"><a class="LI-simple-link" href='https://nl.linkedin.com/in/leslie-scherbeijn-020231173?trk=profile-badge'>Leslie Scherbeijn</a></div>
                <!-- <img class="img-fluid" src="./assets/images/profile/profilepic.jpeg" width="300"
                         height="500" alt="This is me"> -->
                <p class="mt-2">
                    Hi, my name is Leslie Scherbeijn. I am a 19 year old IT student currently living in the
                    Netherlands,
                    welcome to my page
                </p>
                <hr class="d-sm-none">
            </div>

            <div>
                <h1 class="display-Xl-4">
                    My Instagram feed
                </h1>
                <p>I have a photography account on Instagram, you can find my feed right here. But by all means feel
                    free to check out my instagram posts and while you're at it, maybe follow me on there.</p>
                <!-- Place <div> tag where you want the feed to appear -->
                <div id="curator-feed-default-feed-layout">
                    <a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    /* curator-feed-default-feed-layout */
    (function() {
        var i, e, d = document,
            s = "script";
        i = d.createElement("script");
        i.async = 1;
        i.src = "https://cdn.curator.io/published/c79a2b60-ae02-4cd0-b8d5-a92edef5d975.js";
        e = d.getElementsByTagName(s)[0];
        e.parentNode.insertBefore(i, e);
    })();
</script>
@endsection