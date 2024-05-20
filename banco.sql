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
    , idGenero INT
    , FOREIGN KEY (idGenero) REFERENCES tbGenero(idGenero)
);


INSERT INTO tbgenero(genero) VALUES ('Ação'), ('Drama'), ('Comédia');

INSERT INTO tbfilme(filme, duracao, diretor, img, idGenero) VALUES ('ta chuveno amburgi', '1:21:43', 'joaozinho', '../../assets/breakinglist.png', 2)