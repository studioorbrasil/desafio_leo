-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Fev-2022 às 14:33
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`hotacad`@`localhost` PROCEDURE `sp_AlunoCurso` (IN `SP_IDCURSO` INT(11), IN `PSQ` VARCHAR(300))  NO SQL
BEGIN
    IF PSQ = "" THEN
    	select i.id, i.id_curso,i.id_aluno,i.id_Ead, a.nome, a.email, a.foto, a.cpf, a.sexo
        from inscricoes i inner join alunos a on a.id = i.id_aluno  where id_Curso = SP_IDCURSO;
     
    ELSE
        select i.id, i.id_curso,i.id_aluno,i.id_Ead, a.nome, a.email, a.foto, a.cpf, a.sexo  
        from inscricoes i 
        inner join alunos a on a.id = i.id_aluno  
        where id_Curso =  SP_IDCURSO and a.tags LIKE CONCAT('%', PSQ , '%');
    END IF;
END$$

CREATE DEFINER=`hotacad`@`localhost` PROCEDURE `sp_getTempo` (IN `idc` INT(11))  NO SQL
BEGIN

-- Marcos Pinheiro
SET @segundos = 0;
SET @totalHoras = "00:00:00";

SELECT SUM(TIME_TO_SEC(duracao)) as totalSeg into @segundos from aulas where id_curso = idc;

SELECT sec_to_time(SUM(TIME_TO_SEC(duracao))) as totalHoras into @totalHoras from aulas where id_curso = idc;

UPDATE cursos set segundos = @segundos, horas = @totalHoras WHERE id = idc;

SELECT ROW_COUNT() as linhas;


END$$

CREATE DEFINER=`hotacad`@`localhost` PROCEDURE `SP_inAulas` (IN `idc` INT(11))  NO SQL
BEGIN

-- Marcos Pinheiro
SET @temAulas = 0;
SET @flagSeq = 0;
select COUNT(*) as total into @temaulas from aulas where id_curso = idc;

IF @temAulas > 0 THEN
	select 1 as result into @flagSeq;
END IF;

select @flagSeq as flag;

END$$

CREATE DEFINER=`hotacad`@`localhost` PROCEDURE `SP_listaAlunosCurso` (IN `SP_IDCURSO` INT(11))  NO SQL
SELECT i.id_curso,i.id_aluno,i.id_Ead,a.nome,a.email,a.foto,
a.cpf,a.sexo,u.sobrenome,c.titulo
FROM inscricoes i 
INNER JOIN alunos a on a.id = i.id_aluno 
INNER JOIN usuariosAlunos u on u.id_aluno = i.id_aluno
INNER JOIN cursos c WHERE i.id_Curso = SP_IDCURSO$$

CREATE DEFINER=`hotacad`@`localhost` PROCEDURE `SP_meusCursos` (IN `idaluno` INT(11), IN `PSQ` VARCHAR(50))  NO SQL
BEGIN
    IF PSQ = "" THEN

	select * from inscricoes i inner join cursos c on c.id = i.id_Curso where i.id_aluno = idaluno;
     
    ELSE
    
	select * from inscricoes i inner join cursos c on c.id = i.id_Curso where i.id_aluno = idaluno and c.palavras LIKE CONCAT('%', PSQ , '%');  

    END IF;
END$$

CREATE DEFINER=`hotacad`@`localhost` PROCEDURE `SP_selAulas` (IN `idc` INT(11))  NO SQL
BEGIN
select * from aulas where id_curso = idc order BY id ASC;
END$$

CREATE DEFINER=`hotacad`@`localhost` PROCEDURE `SP_selCurso` (IN `idc` INT(11))  NO SQL
BEGIN

	IF idc <> "" THEN
		select c.id, c.titulo, c.horas, (select nome from professores where id= c.professor) as professor, (select foto from professores where id= c.professor) as foto from cursos c where c.id = idc;

	ELSE
	
      select 0 as result;

	END IF;
END$$

CREATE DEFINER=`hotacad`@`localhost` PROCEDURE `SP_selModulos` (IN `idc` INT(11))  NO SQL
BEGIN
select * from modulos where id_curso = idc order BY id ASC;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(8) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL,
  `linkurl` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `titulo`, `descricao`, `img`, `linkurl`) VALUES
(14, 'Curso de Inglês', 'Curso completo de inglês para Jovens e Crianças', 'imagens/cursos/2022.02.23-02.17.44.jpg', 'https://www.youtube.com/embed/MN7Vm_g_ySs'),
(15, 'Curso completo de espanhol', 'Curso completo de espanhol para Adultos.', 'imagens/cursos/2022.02.23-02.22.58.jpg', 'https://www.youtube.com/embed/LlzhuO8Mg5Q'),
(16, 'Curso de Node JS completo', 'Curso completo de Node Js do Zero ao avançado.', 'imagens/cursos/2022.02.23-10.19.14.jpg', 'https://www.youtube.com/embed/XN705pQeoyU'),
(17, 'Curso completo de HTML e CSS', 'Curso completo de HTML e CSS para iniciantes.', 'imagens/cursos/2022.02.23-02.39.07.jpg', 'https://www.youtube.com/embed/1LJGQb_pn6k'),
(19, 'Curso completo de Libras', 'Aprenda a linguagem de sinais usada pelas pessoas com deficiência auditiva no Brasil.', 'imagens/cursos/2022.02.23-02.44.54.png', 'https://www.youtube.com/embed/Ba_ACZtmsYw'),
(20, 'Curso completo de Hebraico', 'Curso completo de Hebraico, Bíblico e Moderno para todas as idades.', 'imagens/cursos/2022.02.23-02.52.51.jpg', 'https://www.youtube.com/embed/sm_RRS2vnrw'),
(24, 'Curso de Inglês completp', 'Curso completo de inglês para Jovens e Crianças', 'imagens/cursos/2022.02.23-10.15.18.jpg', 'https://www.youtube.com/embed/MN7Vm_g_ySs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `descricao`) VALUES
(1, 'Não informar'),
(2, 'Masculino'),
(3, 'Feminino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(200) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `senha` varchar(256) DEFAULT NULL,
  `sexo` varchar(2) NOT NULL,
  `sexo_id_sexo` int(11) NOT NULL,
  `foto` varchar(300) DEFAULT NULL,
  `bloq` int(1) NOT NULL DEFAULT 1,
  `acesso` varchar(25) NOT NULL,
  `modal` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `celular`, `senha`, `sexo`, `sexo_id_sexo`, `foto`, `bloq`, `acesso`, `modal`) VALUES
(76, 'mordechai', 'a', 'mordechai.oren.ba@gmail.com', '(11) 98798-7987', 'MTIzNDU2', '', 1, NULL, 1, '23/02/2022 09:52:05', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuarios_sexo1_idx` (`sexo_id_sexo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_sexo1` FOREIGN KEY (`sexo_id_sexo`) REFERENCES `sexo` (`id_sexo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
