CREATE TABLE tbGenero(
    idGenero INT PRIMARY KEY AUTO_INCREMENT
    , genero VARCHAR(100) NOT NULL
);

CREATE TABLE tbFilme(
    idFilme INT PRIMARY KEY AUTO_INCREMENT
    , filme VARCHAR(100) NOT NULL
    , duracao VARCHAR(10) NOT NULL
    , diretor VARCHAR(100) NOT NULL
    , img VARCHAR(100) NOT NULL	
    , sinopse VARCHAR(500) NOT NULL
);

CREATE TABLE tbTag(
    idTag INT PRIMARY KEY AUTO_INCREMENT
    , tag VARCHAR(100) NOT NULL
);

CREATE TABLE tbFilmeTag(
    idFilmeTag INT PRIMARY KEY AUTO_INCREMENT
    , idTag INT
    , FOREIGN KEY (idTag) REFERENCES tbTag(idTag)
    , idFilme INT
    , FOREIGN KEY (idFilme) REFERENCES tbFilme(idFilme)
);

CREATE TABLE tbFilmeGenero(
    idFilmeGenero INT PRIMARY KEY AUTO_INCREMENT
    , idGenero INT
    , FOREIGN KEY (idGenero) REFERENCES tbGenero(idGenero)
    , idFilme INT
    , FOREIGN KEY (idFilme) REFERENCES tbFilme(idFilme)
);




INSERT INTO tbgenero(genero) VALUES ('Ação'), ('Drama'), ('Comédia');
INSERT INTO tbtag(tag) VALUES ('Empolgantes'), ("Girls' Love"), ("Boys' Love"), ('Sombrio'), ('Anime'), ('Cartoon');
INSERT INTO tbfilme(filme, duracao, diretor, img, sinopse) VALUES ('ta chuveno amburgi', '1:21:43', 'joaozinho', '../../assets/breakinglist.png', 'lorem ipsum idolor');
INSERT INTO tbfilme(filme, duracao, diretor, img, sinopse) VALUES ('ta chuveno amburgi2', '1:231:43', 'joaozin2ho', '../../assets/breakin2glist.png', 'lorem ips2um idolor');
INSERT INTO tbfilme(filme, duracao, diretor, img, sinopse) VALUES ('poderoso chefaum', '21:43', 'craudin', '../../assets/chefaum.png', 'este é o caba');
INSERT INTO tbFilmeTag(idFilme, idTag) VALUES (1, 1), (1, 6);
INSERT INTO tbFilmeTag(idFilme, idTag) VALUES (2, 2), (2, 3);
INSERT INTO tbFilmeTag(idFilme, idTag) VALUES (3, 1), (3, 4);
INSERT INTO tbFilmeGenero(idFilme, idGenero) VALUES (1, 3), (1, 2);
INSERT INTO tbFilmeGenero(idFilme, idGenero) VALUES (2, 1), (2, 2);
INSERT INTO tbFilmeGenero(idFilme, idGenero) VALUES (3, 1), (3, 2);