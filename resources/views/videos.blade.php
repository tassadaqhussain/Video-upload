<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>Your title</title>


    <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
    <script src="https://unpkg.com/video.js/dist/video.js"></script>
    <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>

</head>
<body>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mr-auto ml-auto mt-5">
    <h3 class="text-center">
        Videos
    </h3>

    @foreach($videos as $video)
        <div class="row mt-5">
            <div class="video" >
                <div class="title">
                    <h4>
                        {{$video->title}}
                    </h4>
                </div>
                @if($video->processed)

                    <video id="my_video_1" class="video-js vjs-fluid vjs-default-skin" controls preload="auto"
                           data-setup='{}'>
                        <source src="{{storage_path('app/public/'.$video->stream_path)}}" type="application/x-mpegURL">
                    </video>
                @else
                    <div class="alert alert-info w-100">
                        Video is currently being processed and will be available shortly
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>
<script>
    var player = videojs('my_video_1');
    player.play();
</script>

</body>
</html>