<?php include_once("../noticias_jogos/src/view/edição_dados_admin/conexao_dbvendas.php");
$result_video = sprintf("SELECT * FROM tabela_videos LIMIT 4,3");
$result_video1 = sprintf("SELECT * FROM tabela_videos  LIMIT 3");
$result_video2 = sprintf("SELECT * FROM tabela_videos LIMIT 7,8");

//SELECT * FROM tabela ORDER BY RAND() LIMIT 1


//$result_cursos = sprintf("SELECT * FROM tabela_videos ORDER BY  RAND(%d)", time()%(24*60*60));
//$result_cursos = sprintf("SELECT * FROM tabela_videos WHERE RAND(%d)", time()%(24*60*60));
$resultado_video = mysqli_query($conn, $result_video);
$resultado_video1 = mysqli_query($conn, $result_video1);
$resultado_video2 = mysqli_query($conn, $result_video2);

?>

<script src="./src/Scripts/video.js"></script>

<style>

    .header-site-vid{
        background-image: url('/noticias_jogos/src/media/fundo-7.jpg');
        background-position: center top;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        /*cor letra*/
        color: rgb(0, 0, 0);
        padding-top: 300px;
        padding-bottom: 300px;
    }
    </style>

<!--INICIO VIDEOS-->
<section id="videos" class="videos py-5 header-site-vid">
    <div class="container" >
        <div class="row thumbnails owl-carousel owl-theme text-strong">
            <div class="col-10 mx-auto col-sm-6 text-center">
                <br>
                <h1 class="text-capitalize product-title text-white ">Lançamentos</h1>
                <p class="lead text-strong text-white "> Encontre aqui os trailers e eventos do momento!</p> <br>
            </div>
        </div>
        
        <!--Carousel Wrapper-->
        <div id="multi-item" class="carousel slide carousel-multi-item" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item" data-slide-to="1"></li>
                <li data-target="#multi-item" data-slide-to="2"></li>

            </ol>
            <!--/.Indicators
            <div class="col">-->
            <div class="embed">
            <!--Slides-->
                <div class="carousel-inner text-center" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item carousel-item-video active">
                        <!-- <div class="row py-4 d-flex align-items-center">
                        <div class="col-10 mx-auto col-sm-10 text-center" style="float:left"> -->
                        <?php while($rows_video = mysqli_fetch_assoc($resultado_video)){ ?>
                             <div class="col-sm mx-auto col-md-6 col-lg-4 my-3 " style="float:left">                             
                                <!-- Modal -->
                                <button type="button" class="btn btn-color-video video-btn video-anima" data-toggle="modal" data-src="<?php echo $rows_video['url_video']; ?>" data-target="#myModal">
                                <?php echo '<img src="https://img.youtube.com/vi/' . $rows_video['codigo_video'] .'/0.jpg" style="width: 20rem" />'; ?>
                                </button>
                            </div>
                    <!-- </div> -->
                        <?php } ?>
                    </div>
                    <!--/.primeiro slide-->

                    <div class="carousel-item carousel-item-video">
                    <!-- <div class="row py-4 d-flex align-items-center"> -->
                        <?php while($rows_video1 = mysqli_fetch_assoc($resultado_video1)){ ?>
                         <!--    <div id="player"class="col-sm mx-auto col-md-6 col-lg-4 my-3 " style="float:left"> -->                             
                             <div class="col-sm mx-auto col-md-6 col-lg-4 my-3 " style="float:left">                             
                                <!-- Modal -->
                                <button type="button" class="btn btn-color-video video-btn video-anima" data-toggle="modal" data-src="<?php echo $rows_video1['url_video']; ?>" data-target="#myModal">
                                <?php echo '<img src="https://img.youtube.com/vi/' . $rows_video1['codigo_video'] .'/0.jpg" style="width: 20rem" />'; ?>
                                </button>
                            </div>
                    <!-- </div> -->
                        <?php } ?>
                    </div>
                    <!--/.segundo slide-->

                    <div class="carousel-item carousel-item-video">
                    <!-- <div class="row py-4 d-flex align-items-center"> -->
                        <?php while($rows_video2 = mysqli_fetch_assoc($resultado_video2)){ ?>
                         <!--    <div id="player"class="col-sm mx-auto col-md-6 col-lg-4 my-3 " style="float:left"> -->                             
                             <div class="col-sm mx-auto col-md-6 col-lg-4 my-3 " style="float:left">                             
                                <!-- Modal -->
                                <button type="button" class="btn btn-color-video video-btn video-anima" data-toggle="modal" data-src="<?php echo $rows_video2['url_video']; ?>" data-target="#myModal">
                                <?php echo '<img src="https://img.youtube.com/vi/' . $rows_video2['codigo_video'] .'/0.jpg" style="width: 20rem" />'; ?>
                                </button>
                            </div>
                    <!-- </div> -->
                        <?php } ?>
                    </div>
                    <!--/.terceiro slide-->
                </div>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>    
                                    </button>        
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                <!--Controls-->
                <div class="text-center" style="height:90px;">
                    <a class="btn-floating" href="#multi-item" data-slide="prev"><!--<span class="service-icon"><i class="fas fa-chevron-left"></i></span>--></a>
                    <a class="btn-floating" href="#multi-item" data-slide="next"><!--<span class="service-icon"><i class="fas fa-chevron-right"></i></span>--></a>
                <!--/.Controls--></div>
                </div>
            </div>
        </div>
                   
    </div>
</section>
<!--FIM VIDEOS-->

<!--IFrames API-->
<script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      
      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '200',
          width: '200',
          videoId: '',
          playerVars: {
            'playsinline': 1
          },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
</script>