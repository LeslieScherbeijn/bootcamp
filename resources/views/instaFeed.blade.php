@extends('layout.layout')

@section('content')


    <div class="container-fluid d-flex justify-content-center text-center">

        <div class="card w-100 h-100 p-0 m-0 rounded">

            <div class="card-header bg-dark ">
                <h1 class="display-Xl-4 headerText">
                    My Instagram feed
                </h1>
            </div>

            <div class="card-body text-center pb-5">

                <!-- Place <div> tag where you want the feed to appear -->
                <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
                <!-- The Javascript can be moved to the end of the html page before the </body> tag -->


            </div>
        </div>
    </div>


    <script type="text/javascript">
        /* curator-feed-default-feed-layout */
        (function(){
            var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
            i.src = "https://cdn.curator.io/published/c79a2b60-ae02-4cd0-b8d5-a92edef5d975.js";
            e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
        })();
    </script>
@endsection
