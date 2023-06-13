http://localhost/hospital_liberdade/hospital_front/src/pages/login.php


--
-- Banco de dados: `crud_hospitalliberdade`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(30) NOT NULL,
  `dt` date NOT NULL,
  `horario` time NOT NULL,
  `fk_usuario` int(11) NOT NULL,
   PRIMARY KEY (`id`)
)
--
-- Despejando dados para a tabela `consulta`
--

INSERT INTO `consulta` (`id`, `especialidade`, `dt`, `horario`, `fk_usuario`) VALUES
(13, 'Cardiologia', '2023-06-23', '01:30:00', 23);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `Nome` varchar(50) NOT NULL,
  `Cpf` varchar(14) NOT NULL,
  `Dt_nascimento` date NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Celular` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_consulta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
)

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`Nome`, `Cpf`, `Dt_nascimento`, `Sexo`, `Celular`, `Email`, `Senha`, `id`, `fk_consulta`) VALUES
('Washington da Silva', '123.123.123-12', '2023-11-06', 'Masculino', '(11)11111-1111', 'teste@teste.com', '$2y$10$vh9QDBnOnw7yaxzWrHLP0eFJ2ypVjQEajM1Y1FmUS74WiuEL0q3YK', 22, 14),
('Lucas', '123.123.123-12', '2023-11-06', 'Masculino', '(11)11111-1111', 'teste2@teste.com', '$2y$10$Jy777ByyK77pd4f09rE8vupEak1I/uEa30zM1wEJh2auNVpmKfo8q', 23, 13),
('Washington da Silva', '545.879.811-22', '2023-11-06', 'Masculino', '(11)11111-1111', 'washington@email.com', '$2y$10$o0hZapSyJ2hHedxKOiUDD.91yOrCpY1UtbLdd8wu/3igl6Ii/zp86', 24, 19);
