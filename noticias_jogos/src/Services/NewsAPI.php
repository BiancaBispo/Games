<?php

namespace Services;

Class NewsAPI {
    
    private $url = "";
    private $applicationID = "";
    private $ApplicationKEY = "";
    
    // Ao ser instanciada autentica-se na api para que novas requests possam ser feitas.
    public function __construct() {
        
        //aqui definimos os parâmetros para conexão com a api de notícias
        
        $this->url = "https://api.aylien.com/news/stories?title=game%20jogos%20&body=game%20confer%C3%AAncia%20&text=game%20PC%20console&language[]=pt&return[]=id&return[]=title&return[]=body&return[]=author&return[]=media&return[]=published_at&return[]=links";
        
        //$this->url="https://api.aylien.com/news/stories?title=game%20jogos&body=game%20conferencia%20eventos&text=game%20PC%20console&language[]=pt&return[]=id&return[]=title&return[]=body&return[]=author&return[]=published_at&return[]=links";
        
        //$this->url = "https://api.aylien.com/news/stories?title=CBloL%20jogo%20v%C3%ADdeo%20game%20&body=playstation%20PS5%20jogo%20confer%C3%AAncia%20&text=v%C3%ADdeo%20game%20PC%20console%20computador&language[]=pt&entities.title.links.dbpedia[]=&return[]=id&return[]=title&return[]=body&return[]=author&return[]=media&return[]=published_at&return[]=links";
        $this->applicationID = "18f833d9";
        $this->ApplicationKEY = "5f976ec42e08a95a16be2f76c0c57f46";
    }
    
    public function get(){

        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1000);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array(
            "accept: application/json",
            "X-AYLIEN-NewsAPI-Application-ID: {$this->applicationID}",
            "X-AYLIEN-NewsAPI-Application-Key: {$this->ApplicationKEY}"
        ));
        
        $res = curl_exec($ch);
        $error = curl_errno($ch);

        $result['data'] = json_decode($res, true);
        $result['info'] = curl_getinfo($ch);
        $result['error'] = curl_strerror($error);
        curl_close($ch);
        
        return $result;
    }

    public function getById($id){
        $url = "https://api.aylien.com/news/stories?id[]={$id}&return[]=id&return[]=title&return[]=body&return[]=author&return[]=media&return[]=published_at&return[]=links";
        file_put_contents('./my-log.txt', $url);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1000);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array(
            "accept: application/json",
            "X-AYLIEN-NewsAPI-Application-ID: {$this->applicationID}",
            "X-AYLIEN-NewsAPI-Application-Key: {$this->ApplicationKEY}"
        ));
        
        $res = curl_exec($ch);
        $error = curl_errno($ch);

        $result['data'] = json_decode($res, true);
        $result['info'] = curl_getinfo($ch);
        $result['error'] = curl_strerror($error);
        curl_close($ch);
        
        return $result;
    }


    public function getByTitle($title){
        $url = "https://api.aylien.com/news/stories?id[]={$id}&return[]=id&return[]=title[]={$title}&return[]=title&return[]=body&return[]=author&return[]=media&return[]=published_at&return[]=links";
        file_put_contents('./my-log.txt', $url);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1000);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array(
            "accept: application/json",
            "X-AYLIEN-NewsAPI-Application-ID: {$this->applicationID}",
            "X-AYLIEN-NewsAPI-Application-Key: {$this->ApplicationKEY}"
        ));
        
        $res = curl_exec($ch);
        $error = curl_errno($ch);

        $result['data'] = json_decode($res, true);
        $result['info'] = curl_getinfo($ch);
        $result['error'] = curl_strerror($error);
        curl_close($ch);
        
        return $result;
    }
}

