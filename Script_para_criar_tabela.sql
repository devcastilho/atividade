CREATE TABLE estoque_oleos (
  id_oleo INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  origem VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  raridade VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  ingestao VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  historia VARCHAR(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  nota1 VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  nota2 VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  nota3 VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  nota4 VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  nota5 VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  nota6 VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  nota7 VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  nota8 VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  nota9 VARCHAR(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (id_oleo)
)