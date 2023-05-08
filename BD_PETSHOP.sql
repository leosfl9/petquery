-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Maio-2023 às 16:17
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_petshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `ID_ADM` int(5) NOT NULL,
  `NOME` varchar(50) DEFAULT NULL,
  `SOBRENOME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`ID_ADM`, `NOME`, `SOBRENOME`) VALUES
(1, 'adm', 'petquery');

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos_rec`
--

CREATE TABLE `amigos_rec` (
  `ID_AMG_REC` int(5) NOT NULL,
  `NOME` varchar(50) DEFAULT NULL,
  `SOBRENOME` varchar(50) DEFAULT NULL,
  `FUNCAO` varchar(100) NOT NULL,
  `LINK` varchar(500) NOT NULL,
  `VALOR` decimal(6,2) NOT NULL,
  `FK_AMG_SER` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `amigos_rec`
--

INSERT INTO `amigos_rec` (`ID_AMG_REC`, `NOME`, `SOBRENOME`, `FUNCAO`, `LINK`, `VALOR`, `FK_AMG_SER`) VALUES
(1, 'Bruno', 'Santos', 'Passeador Pet', 'https://www.instagram.com/doggopetservice/', '75.00', NULL),
(2, 'Casinha', 'Cinza', 'Hospedagem Pet', 'https://www.instagram.com/casinhacinza.hospedagempet/', '90.00', NULL),
(3, 'MV', 'Pet', 'Creche Pet', 'https://www.instagram.com/_mvpet/', '85.00', NULL),
(4, 'Anderson ', 'Santos', 'Adestramento Pet', 'https://www.instagram.com/adestrador_andersonzl/', '100.00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID_CLIENTE` int(5) NOT NULL,
  `NOME` varchar(100) DEFAULT NULL,
  `SOBRENOME` varchar(100) DEFAULT NULL,
  `CPF` char(11) DEFAULT NULL,
  `DDD` char(2) DEFAULT NULL,
  `TELEFONE` char(9) DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `EMAIL` varchar(250) DEFAULT NULL,
  `DATA_ENTRADA` datetime DEFAULT NULL,
  `DATA_SAIDA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_amigos`
--

CREATE TABLE `endereco_amigos` (
  `ID_END_AMG` int(5) NOT NULL,
  `BAIRRO` varchar(250) DEFAULT NULL,
  `CEP` char(8) DEFAULT NULL,
  `NUMERO` int(6) DEFAULT NULL,
  `UF` char(2) DEFAULT NULL,
  `CIDADE` varchar(200) DEFAULT NULL,
  `FK_AMG_END` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `endereco_amigos`
--

INSERT INTO `endereco_amigos` (`ID_END_AMG`, `BAIRRO`, `CEP`, `NUMERO`, `UF`, `CIDADE`, `FK_AMG_END`) VALUES
(1, 'Casa Grande', '09961660', 64, 'SP', 'Diadema', 1),
(2, 'Vila Ré', '03669040', 140, 'SP', 'Penha', 2),
(3, 'Vila Dom Pedro I', '04267020', 211, 'SP', ' São Paulo', 3),
(4, 'Vila Gomes Cardim', '03318000', 458, 'SP', 'São Paulo', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_cliente`
--

CREATE TABLE `endereco_cliente` (
  `ID_ENDERECO_CLIENTE` int(5) NOT NULL,
  `BAIRRO` varchar(250) DEFAULT NULL,
  `CEP` char(8) DEFAULT NULL,
  `COMPLEMENTO` varchar(50) DEFAULT NULL,
  `LOGADOURO` varchar(250) DEFAULT NULL,
  `NUMERO` int(6) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `CIDADE` varchar(250) DEFAULT NULL,
  `FK_CLI_END` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_funcionario`
--

CREATE TABLE `endereco_funcionario` (
  `ID_ENDERECO_FUNCIONARIO` int(5) NOT NULL,
  `BAIRRO` varchar(250) DEFAULT NULL,
  `CEP` char(8) DEFAULT NULL,
  `COMPLEMENTO` varchar(250) DEFAULT NULL,
  `LOGADOURO` varchar(250) DEFAULT NULL,
  `NUMERO` varchar(200) DEFAULT NULL,
  `UF` char(2) DEFAULT NULL,
  `CIDADE` varchar(200) DEFAULT NULL,
  `FK_FUN_END` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `ID_FUNCIONARIO` int(5) NOT NULL,
  `SOBRENOME` varchar(250) DEFAULT NULL,
  `NOME` varchar(50) DEFAULT NULL,
  `CPF` char(11) DEFAULT NULL,
  `DDD` char(2) DEFAULT NULL,
  `TELEFONE` char(9) DEFAULT NULL,
  `EMAIL` varchar(250) DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `PROFISSAO` varchar(50) DEFAULT NULL,
  `DATA_ENTRADA` datetime DEFAULT NULL,
  `DATA_SAIDA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `ID_HISTORICO` int(5) NOT NULL,
  `SERVIÇO` varchar(50) DEFAULT NULL,
  `DATA_HISTORICO` date DEFAULT NULL,
  `HORARIO` time DEFAULT NULL,
  `FK_SERV_HIST` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_cli`
--

CREATE TABLE `historico_cli` (
  `ID_HIST_CLI` int(5) NOT NULL,
  `DATA_ENTR` datetime DEFAULT NULL,
  `DATA_SAIDA` datetime DEFAULT NULL,
  `FK_CLI_HSIT` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_fun`
--

CREATE TABLE `historico_fun` (
  `ID_HIST_FUN` int(5) NOT NULL,
  `DATA_ENTR` datetime DEFAULT NULL,
  `DATA_SAIDA` datetime DEFAULT NULL,
  `FK_FUN_HSIT` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_adm`
--

CREATE TABLE `login_adm` (
  `ID_LOGIN` int(5) NOT NULL,
  `SENHA` varchar(100) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `FK_LOGIN` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `login_adm`
--

INSERT INTO `login_adm` (`ID_LOGIN`, `SENHA`, `USERNAME`, `FK_LOGIN`) VALUES
(1, 'aa1bf4646de67fd9086cf6c79007026c', 'adm', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_cliente`
--

CREATE TABLE `login_cliente` (
  `ID_LOGIN_CLIENTE` int(5) NOT NULL,
  `USERNAME` varchar(250) DEFAULT NULL,
  `SENHA` varchar(100) DEFAULT NULL,
  `DATA_DE_ENTRADA` datetime DEFAULT NULL,
  `DATA_DE_SAIDA` datetime DEFAULT NULL,
  `FK_CLI_LOG` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_funcionario`
--

CREATE TABLE `login_funcionario` (
  `ID_LOGIN_FUNCIONARIO` int(5) NOT NULL,
  `USERNAME` varchar(250) DEFAULT NULL,
  `SENHA` varchar(100) DEFAULT NULL,
  `DATA_DE_ENTRADA` datetime DEFAULT NULL,
  `DATA_DE_SAIDA` datetime DEFAULT NULL,
  `FK_FUN_LOG` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `ID_PET` int(5) NOT NULL,
  `NOME_PET` varchar(200) DEFAULT NULL,
  `DATA_CADASTRO` date DEFAULT NULL,
  `PET` varchar(50) DEFAULT NULL,
  `COR` varchar(250) DEFAULT NULL,
  `RACA` varchar(50) DEFAULT NULL,
  `PESO` varchar(4) DEFAULT NULL,
  `SEXO` char(1) DEFAULT NULL,
  `DATA_NASCIMENTO_PET` date DEFAULT NULL,
  `FK_PET_CLI` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `ID_AGED_CLST` int(5) NOT NULL,
  `SERVIÇO` varchar(50) DEFAULT NULL,
  `DATA_SERVICOS` date DEFAULT NULL,
  `HORARIO` time DEFAULT NULL,
  `VALOR` decimal(6,2) NOT NULL,
  `FK_PET_AGE` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`ID_ADM`);

--
-- Índices para tabela `amigos_rec`
--
ALTER TABLE `amigos_rec`
  ADD PRIMARY KEY (`ID_AMG_REC`),
  ADD KEY `FK_AMG_SER` (`FK_AMG_SER`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CLIENTE`);

--
-- Índices para tabela `endereco_amigos`
--
ALTER TABLE `endereco_amigos`
  ADD PRIMARY KEY (`ID_END_AMG`),
  ADD KEY `FK_AMG_END` (`FK_AMG_END`);

--
-- Índices para tabela `endereco_cliente`
--
ALTER TABLE `endereco_cliente`
  ADD PRIMARY KEY (`ID_ENDERECO_CLIENTE`),
  ADD KEY `FK_CLI_END` (`FK_CLI_END`);

--
-- Índices para tabela `endereco_funcionario`
--
ALTER TABLE `endereco_funcionario`
  ADD PRIMARY KEY (`ID_ENDERECO_FUNCIONARIO`),
  ADD KEY `FK_FUN_END` (`FK_FUN_END`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`ID_FUNCIONARIO`);

--
-- Índices para tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`ID_HISTORICO`),
  ADD KEY `FK_SERV_HIST` (`FK_SERV_HIST`);

--
-- Índices para tabela `historico_cli`
--
ALTER TABLE `historico_cli`
  ADD PRIMARY KEY (`ID_HIST_CLI`),
  ADD KEY `FK_CLI_HSIT` (`FK_CLI_HSIT`);

--
-- Índices para tabela `historico_fun`
--
ALTER TABLE `historico_fun`
  ADD PRIMARY KEY (`ID_HIST_FUN`),
  ADD KEY `FK_FUN_HSIT` (`FK_FUN_HSIT`);

--
-- Índices para tabela `login_adm`
--
ALTER TABLE `login_adm`
  ADD PRIMARY KEY (`ID_LOGIN`),
  ADD KEY `FK_LOGIN` (`FK_LOGIN`);

--
-- Índices para tabela `login_cliente`
--
ALTER TABLE `login_cliente`
  ADD PRIMARY KEY (`ID_LOGIN_CLIENTE`),
  ADD KEY `FK_CLI_LOG` (`FK_CLI_LOG`);

--
-- Índices para tabela `login_funcionario`
--
ALTER TABLE `login_funcionario`
  ADD PRIMARY KEY (`ID_LOGIN_FUNCIONARIO`),
  ADD KEY `FK_FUN_LOG` (`FK_FUN_LOG`);

--
-- Índices para tabela `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`ID_PET`),
  ADD KEY `FK_PET_CLI` (`FK_PET_CLI`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`ID_AGED_CLST`),
  ADD KEY `FK_PET_AGE` (`FK_PET_AGE`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `ID_ADM` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `amigos_rec`
--
ALTER TABLE `amigos_rec`
  MODIFY `ID_AMG_REC` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_CLIENTE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `endereco_amigos`
--
ALTER TABLE `endereco_amigos`
  MODIFY `ID_END_AMG` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `endereco_cliente`
--
ALTER TABLE `endereco_cliente`
  MODIFY `ID_ENDERECO_CLIENTE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `endereco_funcionario`
--
ALTER TABLE `endereco_funcionario`
  MODIFY `ID_ENDERECO_FUNCIONARIO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `ID_FUNCIONARIO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `ID_HISTORICO` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historico_cli`
--
ALTER TABLE `historico_cli`
  MODIFY `ID_HIST_CLI` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historico_fun`
--
ALTER TABLE `historico_fun`
  MODIFY `ID_HIST_FUN` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login_adm`
--
ALTER TABLE `login_adm`
  MODIFY `ID_LOGIN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `login_cliente`
--
ALTER TABLE `login_cliente`
  MODIFY `ID_LOGIN_CLIENTE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `login_funcionario`
--
ALTER TABLE `login_funcionario`
  MODIFY `ID_LOGIN_FUNCIONARIO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pet`
--
ALTER TABLE `pet`
  MODIFY `ID_PET` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `ID_AGED_CLST` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `amigos_rec`
--
ALTER TABLE `amigos_rec`
  ADD CONSTRAINT `amigos_rec_ibfk_1` FOREIGN KEY (`FK_AMG_SER`) REFERENCES `servicos` (`ID_AGED_CLST`);

--
-- Limitadores para a tabela `endereco_amigos`
--
ALTER TABLE `endereco_amigos`
  ADD CONSTRAINT `endereco_amigos_ibfk_1` FOREIGN KEY (`FK_AMG_END`) REFERENCES `amigos_rec` (`ID_AMG_REC`);

--
-- Limitadores para a tabela `endereco_cliente`
--
ALTER TABLE `endereco_cliente`
  ADD CONSTRAINT `endereco_cliente_ibfk_1` FOREIGN KEY (`FK_CLI_END`) REFERENCES `cliente` (`ID_CLIENTE`);

--
-- Limitadores para a tabela `endereco_funcionario`
--
ALTER TABLE `endereco_funcionario`
  ADD CONSTRAINT `endereco_funcionario_ibfk_1` FOREIGN KEY (`FK_FUN_END`) REFERENCES `funcionario` (`ID_FUNCIONARIO`);

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `historico_ibfk_1` FOREIGN KEY (`FK_SERV_HIST`) REFERENCES `servicos` (`ID_AGED_CLST`);

--
-- Limitadores para a tabela `historico_cli`
--
ALTER TABLE `historico_cli`
  ADD CONSTRAINT `historico_cli_ibfk_1` FOREIGN KEY (`FK_CLI_HSIT`) REFERENCES `cliente` (`ID_CLIENTE`);

--
-- Limitadores para a tabela `historico_fun`
--
ALTER TABLE `historico_fun`
  ADD CONSTRAINT `historico_fun_ibfk_1` FOREIGN KEY (`FK_FUN_HSIT`) REFERENCES `funcionario` (`ID_FUNCIONARIO`);

--
-- Limitadores para a tabela `login_adm`
--
ALTER TABLE `login_adm`
  ADD CONSTRAINT `login_adm_ibfk_1` FOREIGN KEY (`FK_LOGIN`) REFERENCES `adm` (`ID_ADM`);

--
-- Limitadores para a tabela `login_cliente`
--
ALTER TABLE `login_cliente`
  ADD CONSTRAINT `login_cliente_ibfk_1` FOREIGN KEY (`FK_CLI_LOG`) REFERENCES `cliente` (`ID_CLIENTE`);

--
-- Limitadores para a tabela `login_funcionario`
--
ALTER TABLE `login_funcionario`
  ADD CONSTRAINT `login_funcionario_ibfk_1` FOREIGN KEY (`FK_FUN_LOG`) REFERENCES `funcionario` (`ID_FUNCIONARIO`);

--
-- Limitadores para a tabela `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`FK_PET_CLI`) REFERENCES `cliente` (`ID_CLIENTE`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`FK_PET_AGE`) REFERENCES `pet` (`ID_PET`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
