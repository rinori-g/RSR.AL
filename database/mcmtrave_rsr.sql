-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2021 at 07:09 AM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcmtrave_rsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_photo` text NOT NULL,
  `title` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_photo`, `title`, `category`, `description`, `created_at`) VALUES
(1, 'rsr_biognost.jpg', 'COVID-19 Rapid Antigen Test', 'Covid-19', 'RSR Kosova as a local partner of Biognost – Croatia of their Antigen Test COVAG020. \r\nCoviGnost AG is a qualitative chromatographic immunoassay for detection of SARS-CoV-2 antigens in human nasopharyngeal swab specimens during the acute phase of infection.\r\n   • The test is intended for use by trained clinical laboratory personnel\r\n   • For professional in vitro diagnostic use only\r\n   • All equipment included\r\n   • Reporting time - up to 15 minutes\r\n   • Sensitivity - 96.4%  or\r\n   • Specificity - 99.2%  or\r\n   • Accuracy - 98.0%\r\n   • CE mark for in vitro medical devices according to Directive 98/79 / EEC', '2021-04-06'),
(2, 'zoll_aed.jpg', 'The ZOLL AED with enhanced CPR feedback ', 'CPR Help', 'The ZOLL AED 3® defibrillator leads the way with Real CPR Help® technology, which provides real-time feedback to guide rescuers in delivering high-quality CPR. The innovative, intuitive design and enhanced features of ZOLL AED 3 gives unexpected heroes both the confidence and the knowledge needed to treat sudden cardiac arrest (SCA).\r\n\r\n<strong>- Enhanced Real CPR Help</strong>\r\nProven Real CPR Help technology helps rescuers deliver high-quality CPR. ZOLL AED 3 has a full-color display with vivid rescue images, a CPR cycle timer, and a large color bar gauge that shows CPR compression depth. In addition to displaying integrated, real-time CPR feedback, the ZOLL AED 3 screen also includes one-of-a-kind intuitive touchscreen capabilities. The touchscreen allows quick access to AED information and enables configuration without the need for additional external devices or software.\r\n\r\n<strong>- Integrated Pediatric Rescue</strong>\r\nThe universal design of the CPR Uni-padz® electrodes gives rescuers a single solution for both adult and pediatric victims of SCA. To treat a child, use the same set of pads and simply activate child mode.\r\n\r\n<strong>- WiFi-connected</strong>\r\nCloud connectivity can enable automatic reporting of device status, giving you confidence your AED is ready in an emergency. WiFi also provides the ability to quickly access and transmit cardiac arrest event data to medical professionals.\r\n\r\n<strong>- Product Features</strong>\r\n   • Enhanced Real CPR Help technology provides real-time CPR feedback on the rate and depth of chest compressions\r\n   • Text and voice prompts provide visual and audible feedback to the rescuer on CPR quality\r\n   • High-resolution LCD touchscreen display with vivid rescue images provides visual guidance to responders\r\n   • A CPR cycle timer and a large color bar gauge show CPR compression depth\r\n   • Universal one-piece CPR Uni-padz electrodes feature a 5-year shelf life\r\n   • 8-second pre-shock analysis pause reduces overall pauses during the rescue\r\n   • Built-in WiFi connectivity can automatically report device readiness and offer fast access to clinical event data, including CPR performance data\r\n   • Integrated pediatric rescue: CPR Uni-padz and child-mode selection softkey offers one solution to treat both adults and children\r\n   • Built to withstand extreme temperatures and altitude, vibration, and shock\r\n   • Rugged design features an IP (ingress protection) rating of IP55 for dust and water\r\n   • 5-year smart battery can report its power status', '2021-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `blogs-shq`
--

CREATE TABLE `blogs-shq` (
  `id` int(11) NOT NULL,
  `blog_photo` text NOT NULL,
  `title` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs-shq`
--

INSERT INTO `blogs-shq` (`id`, `blog_photo`, `title`, `category`, `description`, `created_at`) VALUES
(15, 'rsr_biognost.jpg', 'Testi i shpejtë i antigjenit COVID-19', 'Covid-19', 'RSR Kosova si një partner lokal i Biognost – Kroacia  me Testit të tyre të Antigjenit COVAG020.\r\nCoviGnost AG është një imunotemë cilësore kromatografike për zbulimin e antigjeneve SARS-CoV-2 në ekzemplarët e shtupave nazofaringeale njerëzore gjatë fazës akute të infeksionit.\r\n   • Testi ka për qëllim përdorimin nga personeli i trajnuar i laboratorit klinik\r\n   • Vetëm për përdorim profesional diagnostikues \r\n   • Të gjitha pajisjet e përfshira\r\n   • Koha e raportimit - deri në 15 minuta\r\n   • Ndjeshmëria - 96.4% ose\r\n   • Specifikimi - 99.2% ose\r\n   • Saktësia - 98.0%\r\n   • Shenja CE për pajisjet medicinale in vitro sipas Direktivës 98/79 / KEE', '2021-04-06'),
(16, 'zoll_aed.jpg', 'ZOLL AED me reagime të zgjeruara CPR', 'CPR Help', 'Defibrilator ZOLL AED 3® udhëheq rrugën me teknologjinë Real CPR Help®, e cila siguron reagime në kohë reale për të drejtuar ekipet e shpëtimit në shpërndarjen e CPR me cilësi të lartë. Dizajni inovativ, intuitiv dhe tiparet e zgjeruara të ZOLL AED 3 u japin heronjve të papritur si besimin ashtu edhe njohuritë e nevojshme për të trajtuar arrestin e papritur kardiak (SCA).\r\n\r\n<strong>Ndihma e sofistikuar CPR</strong>\r\nTeknologjia e Provës se sofistikuar  CPR , ndihmon ekipet e shpëtimit të dorëzojnë CPR me cilësi të lartë. ZOLL AED 3 ka një ekran me ngjyra të plota me imazhe të gjalla shpëtimi, një kohëmatës të ciklit CPR dhe një matës të madh të shiritave me ngjyra që tregon thellësinë e kompresimit të CPR. Përveç shfaqjes së reagimeve të integruara, në kohë reale të CPR, ekrani ZOLL AED 3 gjithashtu përfshin aftësi të prekjes intuitive të një lloji. Ekrani me prekje lejon qasje të shpejtë në informacionin AED dhe mundëson konfigurimin pa pasur nevojë për pajisje shtesë të jashtme ose softuer.', '2021-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_image` text NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_image`, `company_name`, `country`, `category`, `description`) VALUES
(1, 'caehealthcare.jpg', 'CAE', 'Canada', 'Laboratory', 'medical simulators and manikins'),
(2, 'biochrom.jpg', 'Biochrom', 'UK', 'Laboratory', 'UV/Vis spectrometers, \r\nELISA systems'),
(3, 'faster.jpg', 'Faster', 'Italy', 'Laboratory', 'Vertical and horizontal laminar cabinets,\r\nmicrobiological laminar cabinets class II,\r\ncuboards for cytostatics, fume cupboards.'),
(4, 'elma.jpg', 'Elma', 'Germany', 'Laboratory', 'Ultrasonic cleaning baths.'),
(5, '3dhistech.jpg', '3D Histech', 'Hungary', 'Laboratory', 'scanners for microscopes slides'),
(6, '3bscientific.jpg', '3B Scientiﬁc', 'Germany', 'Laboratory', 'equipment and materials for education'),
(7, 'microptic.png', 'Microptic', 'Spain', 'Laboratory', 'automated systems for sperm analysis\r\nin human and veterinary medicine'),
(8, 'evoqua.jpg', 'Evoqua', 'Germany', 'Laboratory', 'Laboratory and industrial systems \r\nfor pure and ultrapute water'),
(9, 'velpscientifica.png', 'Velp Scientiﬁca', 'Italy', 'Laboratory', 'Dumas Nitrogen/ Protein Analyzers, Kjeldahl\r\nDigestion/Distillation Units,Oxidation Stability\r\nReactor, Soxhlet Extractors, Raw/Dietary Fiber\r\nAnalyzers, COD/BOD analysis systems, Refrigerated\r\nThermo'),
(10, 'binder.png', 'Binder', 'Germany', 'Laboratory', 'Thermostats (incubators), CO2 incubators,\r\nPARTNERS AND SUPPLIERS\r\ndry sterilizers, drying chambers,\r\nvacuum dryers, ulta-freezers'),
(11, 'nabertherm.png', 'Nabertherm', 'Germany', 'Laboratory', 'Muﬄe, ashing, air circulation, chamber,\r\nmelting, vacuum, brazing, etc.'),
(12, 'liebherr.png', 'Liebherr', 'Germany', 'Laboratory', 'Laboratory and industrial refrigerators, \r\nfreezers\r\n'),
(13, 'systec.png', 'Systec', 'Germany', 'Laboratory', 'Laboratory and industrial autoclaves\r\nand media preparators.'),
(14, 'carlroth.png', 'Carl Roth', 'Germany', 'Laboratory', 'Laboratory catalogue.'),
(15, 'rossmax.png', 'Rossmax', 'Switzerland', 'Laboratory', 'Homecare medical devices.'),
(16, 'ohauss.jpg', 'Ohaus', 'Switzerland', 'laboratory', 'Precision & analytical, portable and\r\nmechanical scales, moisture analysers, \r\nlaboratory centrifuges, thermal and \r\nopen-air shakers, dry block heaters,\r\nhot plates & stirrers - \r\ntrough Bulgaria.'),
(17, 'mettlertoledo.png', 'Mettler Toledo Online', 'Switzerland', 'Laboratory', 'pH/Ion/DO/Cond meters, electrodes, \r\nsensors, buﬀers, electrolytes \r\nand standards, portable \r\ndensity and refractometers,\r\njewelry balances - \r\ntrough Bulgaria'),
(49, 'convatec.png', 'ConvaTec', 'USA', 'Medical', 'modern dressings for wound healing'),
(50, 'cardinalhealth.png', 'Cardinal Health', '', 'Medical', 'manufacturer of medical supplies'),
(51, 'rocamed.png', 'Rocamed', '', 'Medical', 'manufacturer of consumables for endourology and equipment'),
(52, 'zoll.png', 'ZOLL', 'USA', 'Medical', 'medical device manufacturer - defibrillators and respirators'),
(53, 'teknomek.jpg', 'Teknomek', 'TR', 'Opthamology', 'manufacturer of consumables for ophthalmology'),
(54, 'ajo.png', 'AJO', 'USA', 'Opthamology', 'The American Journal of Ophthalmology is a peer-reviewed, scientific publication that welcomes the submission of original, previously unpublished manuscripts directed to ophthalmologists and visual sc'),
(55, 'hoya.png', 'Hoya Vision', 'MY', 'Opthamology', ' We create innovative optical lenses for eye care professionals & spectacle wearers. For the visionaries who change how we see the world.'),
(56, 'lauda.png', 'LAUDA', 'DE', 'Laboratory', 'manufacturer of water baths, cooling, heating, circulating and calibration water thermostats, mono and bidistillators, shakers and shaker incubators, hybridization incubators, etc.'),
(58, 'certoclav.png', 'CertoClav', 'AT', 'Laboratory', 'manufacturing table-top autoclaves for microbiological laboratories, materials testing, research, education, medicine and pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `manufacturer_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `manufacturer`, `manufacturer_link`) VALUES
(1, 'CO₂ incubators', 'binder1.jpg', '<span style=\"color: var(--primary-color);\">Series CB CBF</span>\r\n<span style=\"color: var(--primary-color);\">Series CB-S Solid.Line</span>\r\nBINDER CO₂ incubators offer optimum growth conditions for cell and tissue cultures with minimal risk of contamination because they function without condensing and are particularly easy to clean.', 'Binder', 'https://www.binder-world.com/us/products/co2-incubators'),
(3, 'Standard-Incubators', 'binder2.jpg', '<span style=\"color: var(--primary-color);\">Series BD BF Avantgarde.Line</span>\r\n<span style=\"color: var(--primary-color);\">Series B BD BF Classic.Line</span>\r\n<span style=\"color: var(--primary-color);\">Series BD-S Solid.Line</span>\r\nReliable incubation and reproducible results – these are the hallmarks of BINDER Avantgarde.Line incubators. The efficiency and performance levels of the new incubators make them really stand out from the crowd.', 'Binder', 'https://www.binder-world.com/us/products/standard-incubators'),
(4, 'Refrigerated incubators', 'binder3.jpg', '<span style=\"color: var(--primary-color);\">Series KT KB</span>\r\nWith its wide temperature range and extensive program functions, a BINDER refrigerated incubator ensures reproducible conditions in the microbiology laboratory.', 'Binder', 'https://www.binder-world.com/us/products/refrigerated-incubators'),
(5, 'Growth chambers', 'binder4.jpg', '<span style=\"color: var(--primary-color);\">Series KBW KBWF</span>\r\nThe precise regulation of the parameters light, temperature and humidity makes reproducible growth conditions, for instance for plants or insects, possible – and this can be achieved with great accuracy in every high-performance BINDER humidity chamber.', 'Binder', 'https://www.binder-world.com/us/products/growth-chambers'),
(6, 'Ultra low temperature freezers', 'binder5.jpg', '<span style=\"color: var(--primary-color);\">Series UF V</span>\r\nBINDER ultra low temperature freezers make possible safe storage of sensitive samples for many years at -90 °C. With exemplary environmental friendliness through climate-neutral refrigerants and maximum energy efficiency.', 'Binder', 'https://www.binder-world.com/us/products/ultra-low-temperature-freezers'),
(7, 'Drying and heating chambers', 'binder6.jpg', '<span style=\"color: var(--primary-color);\">Series ED FD FED Avantgarde.Line</span>\r\n<span style=\"color: var(--primary-color);\">Series E ED FD FED FP M Classic.Line</span>\r\n<span style=\"color: var(--primary-color);\">Series ED-S FD-S Solid.Line</span\r\nThe convenient operation and performance levels of the new BINDER drying chambers make them really stand out from the crowd, and guarantee perfect results when drying, heating, and sterilizing samples.', 'Binder', 'https://www.binder-world.com/us/products/drying-and-heating-chambers'),
(8, 'Safety drying chambers', 'binder7.jpg', '<span style=\"color: var(--primary-color);\">Series FDL</span>\r\nDrying coating materials and paint made easy! A BINDER heating oven functions with absolute temperature accuracy and ensures safety and ideal test results in production as well as in the laboratory.', 'Binder', 'https://www.binder-world.com/us/products/safety-drying-chambers'),
(9, 'Vacuum drying chambers', 'binder8.jpg', '<span style=\"color: var(--primary-color);\">Series VD VDL</span>\r\nNon-flammable as well as flammable solvents dry – gently, quickly and with the greatest precision. A BINDER vacuum oven completes these tasks with outstanding performance.', 'Binder', 'https://www.binder-world.com/us/products/vacuum-drying-chambers'),
(10, 'Humidity test chambers', 'binder99.jpg', '<span style=\"color: var(--primary-color);\">Series KBF KBF LQC KBF P KMF</span>\r\n<span style=\"color: var(--primary-color);\">Series KBF-S Solid.Line</span>\r\nEvery humidity chambers from BINDER is an extremely reliable partner in a wide range of stability tests. Precisely stable climatic values make it possible!', 'Binder', 'https://www.binder-world.com/us/products/humidity-test-chambers');

-- --------------------------------------------------------

--
-- Table structure for table `products-shq`
--

CREATE TABLE `products-shq` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `usefor` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `manufacturer_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs-shq`
--
ALTER TABLE `blogs-shq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products-shq`
--
ALTER TABLE `products-shq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blogs-shq`
--
ALTER TABLE `blogs-shq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products-shq`
--
ALTER TABLE `products-shq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
