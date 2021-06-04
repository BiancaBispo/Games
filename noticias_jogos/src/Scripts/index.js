async function getNews() {
    var url = 'src/Controllers/RequestController.php'
    let articles = []

    $.ajax({
        url : url,
        type : 'post',
        data : {
            action : "getNews"
        },
        beforeSend : function(){
            //ação antes de enviar requisição (opcional)
            
        }
   })
   .done(function(data){
        res = JSON.parse(data);
        for (let news of res.data.stories) {
            montaCards(news);
        }
   })
   .fail(function(jqXHR, textStatus, data){
        alert(data);
   });
}

async function getNewsById(id) {
    var url = 'src/Controllers/RequestController.php'

    $.ajax({
        url : url,
        type : 'post',
        data : {
            action : "getNewsById",
            id: id
        },
        beforeSend : function(){
            //ação antes de enviar requisição (opcional)
        }
   })
   .done(function(data){
       //Aqui vem o script em javaScript que faz a função getNewsById funcionar, qualquer coisa para abrir e visualizar vem daqui (ou se quiser colocar algo também)
        res = JSON.parse(data);
        for (let news of res.data.stories) {
            montaCards(news);
        }
        
    })
   .fail(function(jqXHR, textStatus, data){
        alert(data);
   });
}

async function getNewsByTitle(title) {
    var url = 'src/Controllers/RequestController.php'

    $.ajax({
        url : url,
        type : 'post',
        data : {
            action : "getNewsByTitle",
            id :id ,
            title : title
        },
        beforeSend : function(){
            //ação antes de enviar requisição (opcional)
        }
   })
   .done(function(data){
       //Aqui vem o script em javaScript que faz a função getNewsById funcionar, qualquer coisa para abrir e visualizar vem daqui (ou se quiser colocar algo também)
        res = JSON.parse(data);
        for (let news of res.data.stories) {
            montaCards(news);
        }
        
    })
   .fail(function(jqXHR, textStatus, data){
        alert(data);
   });
}


function montaCards(news) {
    //caso a imagem exista na noticia a mesma é carregada, se ela não existir a variavel fica vazia
    console.log(news);
    let image = (news.media.length > 0) ? news.media[0].url : "src/media/no-image.jpg";
    
    //monta um card dinâmicamente usando o jQuery e Botstrap e o style do card (se eu quiser mudar o card usa aqui)
    let news_card = $(`
    <div class="container py-3">
        <div class="card video-anima">
            <div class="row">
                <div class="col-md-5" style="width: 50rem; margin: 1rem">
                    <img class="card-img-top" src="${image}" alt="Imagem de capa do card">
                </div>
                <div class="col md-8 px-3" style="width: 50rem; margin: 1rem">
                    <div class="card-block px-3">
                    <h5 class="lead font-weight-bold">${news.title}</h5>
                    <p class="card-text" align="justify">${news.body.substring(0,520)+"..."}</p>
                    <p class="card-text">${news.author.name}</p>
                    <div class="text-right">
                        <a href="${news.links.permalink}" class="btn btn-color-news slide-btn btn-lg" 
                        target="_blank">Visitar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `);

    $("#noticias").append(news_card);
}


//VIDEO MODEL
$(document).ready(function() {

    // Gets the video src from the data-src on each button
    
    var $videoSrc;  
    $('.video-btn').click(function() {
        $videoSrc = $(this).data( "src" );
    });
    console.log($videoSrc);
    
      
      
    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function (e) {
        
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    })
      
    
    
    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src',$videoSrc); 
    }) 
        
      
    // document ready  
    });

