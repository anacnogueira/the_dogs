-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Ago 13, 2014 as 09:27 PM
-- Versão do Servidor: 5.1.39
-- Versão do PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `the_dogs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `complement` varchar(100) DEFAULT NULL,
  `neighborhood` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `orders`
--

INSERT INTO `orders` (`id`, `name`, `cpf`, `email`, `address`, `complement`, `neighborhood`, `city`, `state`, `country`, `cep`, `created`, `modified`) VALUES
(2, 'Ana Claudia Nogueira', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba', 'Compl', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:53:31', '2014-08-13 20:53:31'),
(3, 'Ana Claudia Nogueira', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba', 'Compl', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:54:33', '2014-08-13 20:54:33'),
(4, 'Ana Claudia Nogueira', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba', 'Compl', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:55:02', '2014-08-13 20:55:02'),
(5, 'Ana Claudia Nogueira', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba', 'Compl', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:55:17', '2014-08-13 20:55:17'),
(6, 'Ana Claudia Nogueira', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba', 'Compl', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:56:29', '2014-08-13 20:56:29'),
(7, 'Ana Claudia Nogueira', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba', 'Compl', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:56:32', '2014-08-13 20:56:32'),
(8, 'Ana Claudia Nogueira', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba', 'Compl', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:56:39', '2014-08-13 20:56:39'),
(9, 'Ana Claudia Nogueira', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba', 'Compl', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:57:14', '2014-08-13 20:57:14'),
(10, 'Ana Claudia Nogueira', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba', 'Compl', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:57:17', '2014-08-13 20:57:17'),
(11, 'Ana Claudia', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba, 485', 'teste', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:58:06', '2014-08-13 20:58:06'),
(12, 'Ana Claudia', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba, 485', 'teste', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:58:25', '2014-08-13 20:58:25'),
(13, 'Ana Claudia', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba, 485', 'teste', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:58:44', '2014-08-13 20:58:44'),
(14, 'Ana Claudia', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba, 485', 'teste', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:58:46', '2014-08-13 20:58:46'),
(15, 'Ana Claudia', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba, 485', 'teste', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:59:07', '2014-08-13 20:59:07'),
(16, 'Ana Claudia', '330.87264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba, 485', 'teste', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 20:59:35', '2014-08-13 20:59:35'),
(17, 'Ana Claudia Nogueira', '33087264830', 'anacnogueira@gmail.com', 'Av Vale do Paraíba', '', 'pque sto antonio', 'Jacareí', 'São Paulo', 'Brasil', '12309-000', '2014-08-13 21:02:17', '2014-08-13 21:02:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `created`, `modified`) VALUES
(1, 15, 1, 1, '2014-08-13 20:59:07', '2014-08-13 20:59:07'),
(2, 16, 1, 1, '2014-08-13 20:59:35', '2014-08-13 20:59:35'),
(3, 17, 1, 1, '2014-08-13 21:02:17', '2014-08-13 21:02:17'),
(4, 17, 2, 2, '2014-08-13 21:02:17', '2014-08-13 21:02:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `size` enum('mini','small','medium','big') NOT NULL,
  `price` float(10,2) NOT NULL,
  `age` varchar(50) NOT NULL,
  `vaccinated` enum('S','N') NOT NULL,
  `vermifugated` enum('S','N') NOT NULL,
  `pedigree` enum('S','N') NOT NULL,
  `status` enum('S','N') NOT NULL,
  `image` varchar(150) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `color`, `size`, `price`, `age`, `vaccinated`, `vermifugated`, `pedigree`, `status`, `image`, `info`) VALUES
(1, 'Pug', 'branco', 'mini', 500.00, '1 ano', 'S', 'S', 'S', 'S', 'pug.jpg', 'O seu próprio nome já indica o seu tamanho. "Pug" ou "Pug-Dog", como foi apelidade na Inglaterra, significa "coisa diminuta", ou "cão diminuto". É uma raça de temperamento calmo, dócil, que não late à toa, e adora ficar no colo. É um cão quadrado e enxuto, de estrutura compacta e musculatura bem desenvolvida. Sua cabeça é grande, maciça, redonda, sem sulco médio no crânio. O focinho é curto, obtuso, quadrado, mas caído. Tem rugas profundas e grandes. Os olhos são grandes, escuros, brilhantes, e de expressão doce. As orelhas são finas e pequenas. A cauda é o mais enrolado possível sobre o dorso e a pelagem é lisa, fina, suave, curta e brilhante. As cores são o preto, amarelo damasco (abricot) e prata. O peso do Pug fica entre os 6,5 e 8 kg.'),
(2, 'Husky Siberiano', 'Branco', 'medium', 1500.00, '5 meses', 'N', 'N', 'S', 'S', 'husky_siberiano.jpg', 'É um cão de porte médio, de extrema agilidade e muito vigoroso. Originário de Sibéria, era usado para puxar trenós. É muito popular nos Estados Unidos e no Canadá, e é extraordinariamente dócil e carinhoso com todas as pessoas.\r\n\r\nSua pelagem é densa e comprida, formada por duas\r\ncamadas de pêlo, sendo que o sub-pêlo é sedoso, espesso, um pouco lanoso. O pelo externo é igualmente sedoso e suave.\r\n\r\nApresenta-se em todas as cores, inclusive o branco. Sua altura varia de 53 à 60 cm., nos machos e de 51 à 56 cm. nas fêmeas. O peso varia de 16 à 27 kg.'),
(3, 'Jack Russell Terrier', 'marrom', 'small', 2000.00, '3 meses', 'S', 'N', 'S', 'S', 'jack_russel.jpg', ''),
(4, 'Collie Pelo longo', 'branco e caramelo', 'medium', 1800.00, '4 mesmes', 'S', 'N', 'S', 'S', 'collie.jpg', 'Uma de suas principais características é a inteligência, que, aliada ao seu dote físico, lhe permite desenvolver não só tarefas que lhe são próprias, isto é, as de cão pastor, mas também as de adestramento policial, guarda, caça e obediência.\r\n\r\nA estrutura física do Collie expressa força e agilidade. Conquista imediatamente como cão de grande beleza, demonstrando dignidade e nobreza, com cada zona do seu corpo bem proporcionada ao conjunto.\r\nA altura varia de 56 cm. a 61 cm. para os machos; de 51 cm. a 56 cm. para as fêmeas, medidos na altura da cernelha. O peso pode variar de 18 a 29 kg.\r\n\r\n\r\n\r\nA pelagem confere harmonia à forma do cão. Na variedade de pêlo longo (Rough Collie), a pelagem é muito densa, tem cobertura áspera e subpêlo suave e compacto, quase ocultando a pele.\r\n\r\nA coloração admitida inclui três tons: marta e branco, tricolor e azul merle. '),
(5, 'Labrador', 'Amarelo', 'medium', 600.00, '8 meese', 'N', 'S', 'N', 'S', 'labrador.jpg', 'Apaixonado por água, o Labrador é uma maravilhosa raça de porte médio/grande. Possui um excelente temperamento, é companheiro, fiel e está sempre procurando agradar ao seu dono.\r\n\r\nO aspecto geral do Labrador é o de um cão de constituição robusta, curto e sólido, muito ativo, de lombo e traseira largos e robustos, de pêlo curto, aderente e sem franjas, com presença de um espesso subpêlo.\r\n\r\nOs olhos são de tamanho médio, expressam inteligência e bom temperamento, de cor castanha ou avelã. A pelagem é uma característica importante da raça. É curta, espessa, sem ondulação. É muito dura ao tato, e apresenta um subpêlo resistente à água. A cauda, grossa na base, é outra característica própria da raça.'),
(6, 'S&atilde;o Bernardo', 'cinza', 'big', 1100.00, '2 meses', 'S', 'S', 'S', 'S', 'sao_bernardo.jpg', 'O São-Bernardo (Saint Bernardshund) pertence ao segundo grupo (cães de trabalho), e é considerado um cão de guarda e de salvamento. É um cão forte, de peito bem arqueado e ombros largos.\r\n\r\nÉ um excelente companheiro, que adora as crianças. Respeita seu dono, é fiel e devotado à sua família. É muito tranquilo e gosta de companhia.\r\n\r\nAo contrário do que muitos podem pensar, o São-Bernardo não é um cão de difícil manutenção. Apesar de precisar de exercícios diários, mesmo depois de adulto, ele não precisa de tanto espaço. Um bom passeio de coleira diariamente trará a dose ideal de exercício para o cão que não tenha muito\r\nespaço em casa. Para as crianças, é um grande amigo. Sempre muito bem humorado, adora uma boa brincadeira.\r\n\r\nFaz novos amigos com facilidade, mas na ausência de seu dono, o São-Bernardo tende a defender seu território, procurando afastar qualquer pessoa estranha à casa.\r\n\r\nO tamanho mínimo para um São-Bernardo macho é de 70 cm. na altura da cernelha, e para as fêmeas, 65 cm.\r\n\r\nOs exemplares da raça de pelo curto são, geralmente mais leves, atingindo cerca de 75 kg (machos) e 65 kg. (fêmeas). Os machos de pelo longo pesam entre 80 kg. e 100 kg. e as fêmeas pesam até 85 kg.'),
(7, 'Dogue Alem&atilde;o', 'preto', 'big', 700.00, '3 meses', 'N', 'S', 'S', 'S', 'dogue_alemao.jpg', 'Este maravilho gigante é um cão de origem alemã, que hoje em dia é criado em canis especializados por muitos países do mundo, com grande mérito.\r\n\r\nO Dogue Alemão reúne na sua nobre aparência de constituição robusta e bem delineada, ferocidade, força e elegância.\r\n\r\nDestaca-se por sua cabeça expressiva e não revela nervosismo algum, nem sequer nas grandes manifestações afetivas. Exibe-se nobremente ante seus observadores. O caráter do Dogue é essencialmente amistoso, afetuoso com os familiares, em particular com as crianças, esquivo e desconfiado com estranhos. O pêlo é muito curto e espesso, é aderente e reluzente. A cauda do Dogue é de comprimento médio e os olhos são bem enquadrado, de tamanho médio, redondos, o mais escuro possível, com expressão vivaz e inteligente. A altura mínima para os machos é de 80 cm. na altura da cernelha, e as fêmeas devem medir, pelo menos, 72 cm. É desejável, entretanto que esse limite seja superado. '),
(8, 'Yorkshire', 'preto e caramelo', 'mini', 1500.00, '2 meses', 'S', 'S', 'S', 'S', 'yorkshire.jpg', 'eu temperamento é alegre e afetuoso. Ciumento com o seu dono e extremamente apegado, não gosta deser deixado sozinho e sempre que possível estará junto do seu dono na casa.Cão de companhia excelente. Por seu tamanho pequeno, crianças podem vir a machucá-lo durante suas brincadeiras. Além disso esse cãozinho gosta de tranquilidade e normalmente não convive bem com crianças barulhentas demais. Apesar de ladrador é um ótimo cão de apartamento.\r\n\r\nEsta raça é relativamente teimosa, assim como maioria dos terriers, mas que gosta de agradar seu dono, sendo considerado mais obediente que a maioria dos outros cães terriers (27º colocação no ranking de inteligência canina de Stanley Coren).'),
(9, 'Pastor Alem&atilde;o', 'preto', 'medium', 750.00, '3 meses', 'S', 'S', 'S', 'S', 'pastor_alemao.jpg', 'Os cães de pastoreio demonstram coragem, inteligência e combatividade. Além disso, são fortes, velozes, e particularmente resistentes às grandes caminhadas e à interpérie.\r\n\r\nO Pastor Alemão, é o mais conhecido cão pastor. É utilizado hoje em dia, principalmente como guardião e protetor, como auxiliar na luta contra o tráfico de entorpecentes, eficaz para resgate de pessoas feridas, guia de cegos, além de ser um companheiro insuperável.\r\n\r\nÉ, sem dúvida um cão muito inteligente. Gosta do trabalho, e aprende com muita facilidade. Um ótimo companheiro, o Pastor Alemão deve também demonstrar coragem e dureza, em defesa do\r\ndono e de seus bens.'),
(10, 'Dachshund', 'caramelo', 'small', 450.00, '3 meses', 'S', 'N', 'S', 'S', 'dachshund.jpg', '');
