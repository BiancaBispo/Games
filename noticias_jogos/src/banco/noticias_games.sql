CREATE DATABASE noticias_produtos;

USE noticias_produtos;


CREATE TABLE tbprod001 ( nCdProduto INT  AUTO_INCREMENT  NOT NULL 
                       , cNmproduto VARCHAR      (200)  NOT NULL
                       , nPreco		DECIMAL      (30,0) NOT NULL
                       , cEstoque   INT                 NOT NULL  
					   , cNmNivel1  VARCHAR      (200)  NOT NULL  
					   , cNmNivel2	VARCHAR      (200)  NOT NULL        
					   , cNmNivel3	VARCHAR      (200)
					   , cNmNivel4	VARCHAR      (200)
                       , cImagem    VARCHAR      (50)   NOT NULL
					   ,PRIMARY KEY ( nCdProduto) 
           );
 

INSERT INTO tbprod001 (cNmproduto, nPreco, cEstoque, cNmNivel1, cNmNivel2, cNmNivel3, cNmNivel4, cImagem) VALUES
('Console Playstation 5', '6899', '500', 'Playstation', 'Playstation 5', 'Acessórios e Consoles','Consoles','Play5.png'),
('Console Xbox Series S 512GB Branco', '2800', '50','Xbox','Xbox Series','Acessórios e Consoles','Consoles', 'shopping.png'),
('Console PS4 PRO 1TB Preto', '3625', '10', 'Playstation','Playstation 4','Acessórios e Consoles','Consoles','play4.png'),
('Teclado Gamer', '190', '10', 'Computadores','Periféricos','Teclados','', 'pc intel core I5.png'),
('Resident Evil Village Ps4', '248', '10', 'Playstation','Playstation 4','Jogos','Terror','residente village.png'),
('Sillent Hill Ps4', '150', '10', 'Playstation','Playstation 4','Jogos','Terror','Sillent Hill'),
('HD Externo', '250', '10', 'Computadores','Hardware','HDs Externo','','');

-----FILTROS-----

SELECT DISTINCT nCdProduto 
     , cNmproduto 
	 , nPreco
	 , cEstoque
  FROM tbprod001
 WHERE cNmNivel2 = 'Hardware';

 SELECT *
  FROM tbprod001;
 
 SELECT DISTINCT cNmNivel1
  FROM tbprod001;

   BEGIN TRAN
  UPDATE tbprod001
     SET cNmNivel1 = 'Computadores'
   WHERE nCdProduto = 7;

--COMMIT


SELECT cnmproduto
     , cNmNivel3
     , cNmNivel4
  FROM tbprod001

 WHERE cNmNivel4 is null





CREATE TABLE IF NOT EXISTS `tabela_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_video` varchar(255) NOT NULL,
  `url_video` varchar(2083) NOT NULL,
  `codigo_video` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;


INSERT INTO `tabela_videos` (`id`, `nome_video`, `url_video`, `codigo_video`) VALUES
(1, 'SILENT HILLll', 'https://www.youtube.com/embed/okhezICFJgQ', 'okhezICFJgQ'),
(2, 'RESIDENT EVIL 8 Official Trailer (2021) Resident Evil Village Game HD', 'https://www.youtube.com/embed/JSapXD9vxYA', 'JSapXD9vxYA'),
(3, 'Ratchet e Clank: Rift Apart Gameplay Trailer I PS5', 'https://www.youtube.com/embed/9p_gg9UW9k4', '9p_gg9UW9k4'),
(4, 'Hogwarts Legacy - Official Reveal Trailer | PS5', 'https://www.youtube.com/embed/1O6Qstncpnc', '1O6Qstncpnc'),
(5, 'HELLBLADE 2 Official Trailer 4K (2020) Video Game ULTRA HD', 'https://www.youtube.com/embed/cwgnU_04fsU', 'cwgnU_04fsU'),
(6, 'Age of Empires', 'https://www.youtube.com/embed/TTaCrP_U4ao', 'TTaCrP_U4ao'),
(7, 'Resident Evil Village - 4th Trailer | 4K | HDR', 'https://www.youtube.com/embed/KkWsga0ja-8', 'KkWsga0ja-8'),
(8, 'CHRONO ODYSSEY Trailer (2021) 4K', 'https://www.youtube.com/embed/dEBufqmFOyA', 'dEBufqmFOyA');
COMMIT;
