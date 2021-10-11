-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 01:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsral`
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
(2, 'zoll_aed.jpg', 'The ZOLL AED with enhanced CPR feedback ', 'CPR Help', 'The ZOLL AED 3® defibrillator leads the way with Real CPR Help® technology, which provides real-time feedback to guide rescuers in delivering high-quality CPR. The innovative, intuitive design and enhanced features of ZOLL AED 3 gives unexpected heroes both the confidence and the knowledge needed to treat sudden cardiac arrest (SCA).\r\n\r\n<strong>- Enhanced Real CPR Help</strong>\r\nProven Real CPR Help technology helps rescuers deliver high-quality CPR. ZOLL AED 3 has a full-color display with vivid rescue images, a CPR cycle timer, and a large color bar gauge that shows CPR compression depth. In addition to displaying integrated, real-time CPR feedback, the ZOLL AED 3 screen also includes one-of-a-kind intuitive touchscreen capabilities. The touchscreen allows quick access to AED information and enables configuration without the need for additional external devices or software.\r\n\r\n<strong>- Integrated Pediatric Rescue</strong>\r\nThe universal design of the CPR Uni-padz® electrodes gives rescuers a single solution for both adult and pediatric victims of SCA. To treat a child, use the same set of pads and simply activate child mode.\r\n\r\n<strong>- WiFi-connected</strong>\r\nCloud connectivity can enable automatic reporting of device status, giving you confidence your AED is ready in an emergency. WiFi also provides the ability to quickly access and transmit cardiac arrest event data to medical professionals.\r\n\r\n<strong>- Product Features</strong>\r\n   • Enhanced Real CPR Help technology provides real-time CPR feedback on the rate and depth of chest compressions\r\n   • Text and voice prompts provide visual and audible feedback to the rescuer on CPR quality\r\n   • High-resolution LCD touchscreen display with vivid rescue images provides visual guidance to responders\r\n   • A CPR cycle timer and a large color bar gauge show CPR compression depth\r\n   • Universal one-piece CPR Uni-padz electrodes feature a 5-year shelf life\r\n   • 8-second pre-shock analysis pause reduces overall pauses during the rescue\r\n   • Built-in WiFi connectivity can automatically report device readiness and offer fast access to clinical event data, including CPR performance data\r\n   • Integrated pediatric rescue: CPR Uni-padz and child-mode selection softkey offers one solution to treat both adults and children\r\n   • Built to withstand extreme temperatures and altitude, vibration, and shock\r\n   • Rugged design features an IP (ingress protection) rating of IP55 for dust and water\r\n   • 5-year smart battery can report its power status', '2021-04-06'),
(17, 'zoll_aed.jpg', 'Instruments and Cassets AS Medizintechnik tani në Kosovë.', 'CPR Help', 'Instruments and Cassets AS Medizintechnik tani në Kosovë.', '2021-10-07');

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
(16, 'zoll_aed.jpg', 'ZOLL AED me reagime të zgjeruara CPR', 'CPR Help', 'Defibrilator ZOLL AED 3® udhëheq rrugën me teknologjinë Real CPR Help®, e cila siguron reagime në kohë reale për të drejtuar ekipet e shpëtimit në shpërndarjen e CPR me cilësi të lartë. Dizajni inovativ, intuitiv dhe tiparet e zgjeruara të ZOLL AED 3 u japin heronjve të papritur si besimin ashtu edhe njohuritë e nevojshme për të trajtuar arrestin e papritur kardiak (SCA).\r\n\r\n<strong>Ndihma e sofistikuar CPR</strong>\r\nTeknologjia e Provës se sofistikuar  CPR , ndihmon ekipet e shpëtimit të dorëzojnë CPR me cilësi të lartë. ZOLL AED 3 ka një ekran me ngjyra të plota me imazhe të gjalla shpëtimi, një kohëmatës të ciklit CPR dhe një matës të madh të shiritave me ngjyra që tregon thellësinë e kompresimit të CPR. Përveç shfaqjes së reagimeve të integruara, në kohë reale të CPR, ekrani ZOLL AED 3 gjithashtu përfshin aftësi të prekjes intuitive të një lloji. Ekrani me prekje lejon qasje të shpejtë në informacionin AED dhe mundëson konfigurimin pa pasur nevojë për pajisje shtesë të jashtme ose softuer.', '2021-04-06'),
(18, 'zoll_aed.jpg', 'Instruments and Cassets AS Medizintechnik tani në Kosovë.', 'AS Medizintechnik ', 'Instruments and Cassets AS Medizintechnik tani në Kosovë.', '2021-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `category` text NOT NULL,
  `category_short` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `category`, `category_short`) VALUES
(1, 'Clinical', 'clinical.png', 'Laboratory', 'clinical'),
(2, 'Industrial', 'industrial.png', 'Laboratory', 'industrial'),
(5, 'Coming Soon', 'diabetlogo.png', 'Diabet', 'fdwef'),
(6, 'Coming Soon', 'cardiology.png', 'Cardiology', 'sd'),
(7, 'dd', 'dd', 'Medical', 'dd');

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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `manufacturer_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `category`, `manufacturer`, `manufacturer_link`) VALUES
(11, 'Microscope', 'microscope.jpg', 'All industrial inspection and measurement tasks are performed quickly and efficiently with the modular Leica DM ILM inverted microscope.', 'microbiology', 'Leica microsystems', 'https://www.leica-microsystems.com/products/light-microscopes/p/leica-dm-ilm/'),
(12, 'Laminar airflow cabinet class II', 'laminar.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'microbiology', 'Faster', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-classic'),
(13, 'Termostat (incubator)', 'incubator.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'microbiology', 'Binder', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-classic'),
(14, 'CO2 incubator', 'incubator.jpg', 'Series CB-S incubators are suitable for routine cell cultivation applications: They are free from contamination due to 180 °C hot-air sterilization and reliable pH stability thanks to the drift-free infrared CO₂ measurement system.', 'microbiology', 'Binder', 'https://www.binder-world.com/us/products/co2-incubators/series-cb-s-solidline'),
(15, 'Drying oven (dryer) ', 'dryer.jpg', 'The new products in the Solid.Line impress with their tried-and-tested BINDER quality and reliability. They are suited to drying and heating. The attributes of the Solid.', 'microbiology', 'Binder', 'https://www.binder-world.com/us/products/drying-and-heating-chambers/series-ed-s-solidline'),
(16, 'Freezer', 'freezer.jpg', 'retrofittable, connectivity application available as option', 'microbiology', 'Liebherr', 'https://home.liebherr.com/en/isr/products/commercial-appliances/research-and-laboratories/laboratory-freezers/details/lcexv-4010_90459.html'),
(17, 'Refrigerator', 'refrigerator.jpg', 'retrofittable, connectivity application available as option', 'microbiology', 'Liebherr', 'https://home.liebherr.com/en/isr/products/commercial-appliances/research-and-laboratories/laboratory-refrigerators/details/lcexv-4010_90459.html'),
(18, 'Centrifuge', 'centrifuge.jpg', 'Frontier 5000 Multi-Pro Centrifuges are designed for universal use in multiple applications in research, industrial, and clinical laboratories', 'microbiology', 'Ohaus', 'https://us.ohaus.com/en-US/Frontier5000SeriesMultiPro'),
(19, 'Heating magnetic stirrer', 'heating.jpg', 'Reliable and Easy to use', 'microbiology', 'VELP Scientifica', 'https://www.velp.com/en-ww/microstirrer-magnetic-stirrer.aspx'),
(20, 'Autoclave', 'autoclave.png', 'The Systec D-Series are front-loading, bench-top autoclaves available in 7 sizes with chamber capacities ranging from 23 to 200 l.', 'microbiology', 'Systec', 'https://www.systec-lab.com/autoclaves/horizontal-bench-top-autoclaves-23-200-l/'),
(21, 'Balances - analytical and precise', 'balances.jpg', 'When laboratory work and research requires accuracy to the hundred-thousandth, there is simply no room for error.', 'microbiology', 'Ohaus', 'https://us.ohaus.com/en-US/ExplorerSemi-MicroBalances'),
(22, 'Water distiler or clean water system', 'waterdestiler.png', 'Reliable water management solutions for simple deionization with remote monitoring.', 'microbiology', 'Evoqua', 'https://www.evoqua.com/en/evoqua/products--services/digital-water/water-one-services/water-one-sd-services/'),
(23, 'Elisa systems', 'elisasystems.jpg', 'The EZ Read 400 is a simple and robust microplate reader that is an ideal choice for laboratories which require a workhorse instrument for their routine absorbance assays.', 'microbiology', 'BioChrom', 'http://www.biochrom.co.uk/product/85/biochrom-ez-read-400-microplate-reader-.html'),
(24, 'Washing machines for glassware', 'washingmachine.jpg', 'washing up to 95°C - antibacterical thermal disinfection', 'microbiology', 'Smeg instruments', 'https://www.smeg-instruments.com/laboratory-division/glassware-washers-of-small-dimensions/products/gw1160sc/'),
(25, 'Microscope', 'microscope.jpg', 'All industrial inspection and measurement tasks are performed quickly and efficiently with the modular Leica DM ILM inverted microscope.', 'clinical', 'Leica microsystems', 'https://www.leica-microsystems.com/products/light-microscopes/p/leica-dm-ilm/'),
(26, 'Drying oven (dryer) ', 'dryer.jpg', 'The new products in the Solid. Line impress with their tried-and-tested BINDER quality and reliability. They are suited to drying and heating. The attributes of the Solid.', 'clinical', 'Binder', 'https://www.binder-world.com/us/products/drying-and-heating-chambers/series-ed-s-solidline'),
(27, 'Refrigerator', 'refrigerator.jpg', 'retrofittable, connectivity application available as option', 'clinical', 'Liebherr', 'https://home.liebherr.com/en/isr/products/commercial-appliances/research-and-laboratories/laboratory-refrigerators/details/lcexv-4010_90459.html'),
(28, 'Centrifuge', 'centrifuge.jpg', 'Frontier 5000 Multi-Pro Centrifuges are designed for universal use in multiple applications in research, industrial, and clinical laboratories', 'clinical', 'Ohaus', 'https://us.ohaus.com/en-US/Frontier5000SeriesMultiPro'),
(29, 'Water distiler or clean water system', 'waterdistiler.png', 'Reliable water management solutions for simple deionization with remote monitoring.', 'clinical', 'Evoqua', 'https://www.evoqua.com/en/evoqua/products--services/digital-water/water-one-services/water-one-sd-services/'),
(30, 'Elisa systems (reader, washer, shaker-incubators)', 'elisasystems.jpg', 'The EZ Read 400 is a simple and robust microplate reader that is an ideal choice for laboratories which require a workhorse instrument for their routine absorbance assays.', 'clinical', 'Biochrom', 'http://www.biochrom.co.uk/product/85/biochrom-ez-read-400-microplate-reader-.html	'),
(31, 'Washing machines for glassware', 'washingmachine.jpg', 'washing up to 95°C - antibacterical thermal disinfection', 'clinical', 'Smeg instruments', 'https://www.smeg-instruments.com/laboratory-division/glassware-washers-of-small-dimensions/products/gw1160sc/'),
(32, 'Sperm analyzers	', 'spermanalyzer.png', 'SCA® CASA System for semen analysis allows the accurate, repetitive and automatic assessment of the following sperm parameters: motility, concentration, morphology, DNA fragmentation, vitality, acrosome reaction and leukocytes.', 'clinical', 'Microptic', 'https://www.micropticsl.com/products/sperm-class-analyzer-casa-system/'),
(33, 'Microscope', 'microscope.jpg', 'All industrial inspection and measurement tasks are performed quickly and efficiently with the modular Leica DM ILM inverted microscope.', 'pathology', 'Leica microsystems', 'https://www.leica-microsystems.com/products/light-microscopes/p/leica-dm-ilm/'),
(34, 'Refrigerator', 'refrigator.jpg', 'retrofittable, connectivity application available as option', 'pathology', 'Liebherr/SMEG', 'https://home.liebherr.com/en/isr/products/commercial-appliances/research-and-laboratories/laboratory-refrigerators/details/lcexv-4010_90459.html	'),
(35, 'Centrifuge', 'centrifuge.jpg', 'Frontier 5000 Multi-Pro Centrifuges are designed for universal use in multiple applications in research, industrial, and clinical laboratories', 'pathology', 'Ohaus', 'https://us.ohaus.com/en-US/Frontier5000SeriesMultiPro	'),
(36, 'Microscope', 'microscope.jpg', 'All industrial inspection and measurement tasks are performed quickly and efficiently with the modular Leica DM ILM inverted microscope.', 'genetics', 'Leica microsystems', 'https://www.leica-microsystems.com/products/light-microscopes/p/leica-dm-ilm/	'),
(37, 'Laminar airflow cabinet or PCR cabinet	', 'laminar.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'genetics', 'Faster', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-classic'),
(38, 'Termostat (incubator)', 'incubator.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'gentics', 'Binder	', 'https://www.binder-world.com/us/products/co2-incubators/series-cb-s-solidline'),
(39, 'CO2 incubator	', 'incubator.jpg', 'Series CB-S incubators are suitable for routine cell cultivation applications: They are free from contamination due to 180 °C hot-air sterilization and reliable pH stability thanks to the drift-free infrared CO₂ measurement system.', 'genetics', 'Binder', 'https://www.binder-world.com/us/products/co2-incubators/series-cb-s-solidline	\r\n'),
(40, 'Drying oven (dryer) 	', 'dryer.jpg', 'The new products in the Solid.Line impress with their tried-and-tested BINDER quality and reliability. They are suited to drying and heating. The attributes of the Solid.', 'genetics', 'Binder', 'https://www.binder-world.com/us/products/drying-and-heating-chambers/series-ed-s-solidline	\r\n'),
(41, 'Freezer', 'freezer.jpg', 'retrofittable, connectivity application available as option', 'gentics', 'Liebherr', 'https://home.liebherr.com/en/isr/products/commercial-appliances/research-and-laboratories/laboratory-freezers/details/lcexv-4010_90459.html	\r\n'),
(42, 'Refrigerator', 'refrigator.jpg', 'retrofittable, connectivity application available as option', 'genetics', 'Liebherr', 'https://home.liebherr.com/en/isr/products/commercial-appliances/research-and-laboratories/laboratory-refrigerators/details/lcexv-4010_90459.html	\r\n'),
(43, 'Centrifuge', 'centrifuge.jpg', 'Frontier 5000 Multi-Pro Centrifuges are designed for universal use in multiple applications in research, industrial, and clinical laboratories', 'genetics', 'Ohaus', 'https://us.ohaus.com/en-US/Frontier5000SeriesMultiPro'),
(44, 'Balances - analytical and precise	', 'balances.jpg', 'When laboratory work and research requires accuracy to the hundred-thousandth, there is simply no room for error.', 'genetics', 'Ohaus', 'https://us.ohaus.com/en-US/ExplorerSemi-MicroBalances'),
(45, 'Water distiler or clean water system', 'waterdistiler.png', 'Reliable water management solutions for simple deionization with remote monitoring.', 'genetics', 'Evoqua', 'https://www.evoqua.com/en/evoqua/products--services/digital-water/water-one-services/water-one-sd-services/	\r\n'),
(46, 'Elisa systems	', 'elisasystems.jpg', 'The EZ Read 400 is a simple and robust microplate reader that is an ideal choice for laboratories which require a workhorse instrument for their routine absorbance assays.', 'genetics', 'Biochrom', 'http://www.biochrom.co.uk/product/85/biochrom-ez-read-400-microplate-reader-.html	\r\n'),
(47, 'Washing machines for glassware', 'washingmachine.jpg', 'washing up to 95°C - antibacterical thermal disinfection', 'genetics', 'Smeg instruments', 'https://www.smeg-instruments.com/laboratory-division/glassware-washers-of-small-dimensions/products/gw1160sc/	\r\n'),
(48, 'Heating magnetic stirrer	', 'heating.jpg', 'Reliable and Easy to use', 'genetics', 'VELP Scientifica', 'https://www.velp.com/en-ww/microstirrer-magnetic-stirrer.aspx	\r\n'),
(49, 'Microscopes', 'microscopeindustrial.jpg', 'Whether you are working in production or research, the Leica DCM8 delivers the accurate, repeatable metrological analysis results you need in order to optimize material performance.', 'pharma', 'Leica microsystems', 'https://www.leica-microsystems.com/products/digital-microscopes/p/leica-dcm8/'),
(50, 'Vis and UV/Vis spectrometers', 'libras80.jpeg', 'The Biochrom Libra S80 model is s robustly designed to deliver reliable, low maintenance UV/Visible spectrophotometry in environments with multiple users in a regulated environment such as method development. ', 'pharma', 'Biochrom', 'http://www.biochrom.co.uk/product/63/biochrom-libra-s80-double-beam-spectrophotometer.html'),
(51, 'Elisa systems', 'elisasystems.jpg', 'The EZ Read 800 is a fast and accurate microplate reader that is an ideal choice to keep up with a heavy workload in a busy high-throughput laboratory.', 'pharma', 'Biochrom', 'http://www.biochrom.co.uk/product/98/biochrom-ez-read-800-microplate-reader.html'),
(52, 'Densitometers', 'mettertoledo.png', 'Developed for a broad range of industries, METTLER TOLEDO\'s Excellence Density Meters can measure almost any sample with a very high accuracy – even detecting one drop of whisky in a bathtub full of water.', 'pharma', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/density-meter/densitometer.html'),
(53, 'Refractometers', 'mettertoledo.png', 'The Excellence R4 refractometer offers fast refractive index measurements in the range from 1.32 to 1.70, with automatic temperature control from 0 to 100°C.', 'pharma', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/refractometer/refractometers/R4.html'),
(54, 'Kjeldahl/Dumas/Soxhlet', 'distilation.jpg', 'Entry-level Kjeldahl distillation unit for your analyses concerning different applications such as determining ammoniacal nitrogen, protein determination, nitrogen content etc.', 'pharma', 'Velp', 'https://www.velp.com/en-ww/udk-129-kjeldahl-distillation-unit.aspx'),
(56, 'рН/ Ion/ DO/Cond метри', 'benchtop.png', 'Whether you are looking for stringent compliance requirements or routine measurements on a budget, we have the benchtop pH meter solution for you.', 'pharma', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/pH-meter/benchtop-pH-meter.html'),
(57, 'Balances - analytical, precise and technical', 'explorer.jpg', 'The OHAUS Explorer Series of precision balances combine modern features and design elements to offer unmatched functionality in a line of high-performance balances', 'pharma', 'Ohaus', 'https://mec.ohaus.com/en-MEC/ExplorerPrecision-6'),
(58, 'Water distiler or clean water system', 'waterdestiler.png', 'Evoqua\'s Water One® SD services deliver reliable water management solutions that ensure you will always have the deionized (DI) water quality and quantity you need to support your business.', 'pharma', 'Evoqua', 'https://www.evoqua.com/en/evoqua/products--services/digital-water/water-one-services/water-one-sd-services/'),
(59, 'Termostat (incubator)', 'incubator.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'pharma', 'Binder', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-classic'),
(60, 'CO2 incubator	', 'incubator.jpg', 'Series CB-S incubators are suitable for routine cell cultivation applications: They are free from contamination due to 180 °C hot-air sterilization and reliable pH stability thanks to the drift-free infrared CO₂ measurement system.', 'pharma', 'Binder', 'https://www.binder-world.com/us/products/co2-incubators/series-cb-s-solidline'),
(61, 'Drying oven (dryer) ', 'dryer.jpg', 'The new products in the Solid.Line impress with their tried-and-tested BINDER quality and reliability. They are suited to drying and heating. The attributes of the Solid.', 'pharma', 'Binder', 'https://www.binder-world.com/us/products/drying-and-heating-chambers/series-ed-s-solidline'),
(62, 'Freezers', 'freezers.jpg', 'PROFESSIONAL FREEZER -30 °C 160 LITERS', 'pharma', 'smeg instruments', 'https://www.smeg-instruments.com/medical-division/professional-freezers/products/c30s16c1a/'),
(63, 'Refrigerators', 'refrigerators.jpg', 'REFRIGERATOR +4 °C 306 LITERS', 'pharma', 'smeg instruments', 'smeg-instruments.com/laboratory-division/glassware-washers-of-high-capacity/products/gw7015/'),
(64, 'Centrifuges	', 'centrifuge.jpg', 'Frontier™ Multi Centrifuges are reliable compact low-speed general purpose centrifuges', 'pharma', 'Ohaus', 'https://mec.ohaus.com/en-MEC/Frontier5000SeriesMulti-11'),
(65, 'Laminar airflow cabinet class II	', 'laminar.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'pharma', 'Faster', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-premium	\r\n'),
(66, 'Chemical fume hoods', 'chemicalfume.jpg', 'ChemFAST belong to the latest generation of ductless fume cupboards using the most innovative molecular filtration technology manufactured by Faster,', 'pharma', 'Faster', 'https://www.faster-air.com/en/products/chemical-fume-hoods/recirculatory-filtration-fume-cupboards/chemfast-top'),
(67, 'Autoclave', 'autoclave.png', 'The Systec D-Series are front-loading, bench-top autoclaves available in 7 sizes with chamber capacities ranging from 23 to 200 l.', 'pharma', 'Systec', 'https://www.systec-lab.com/autoclaves/horizontal-bench-top-autoclaves-23-200-l/	\r\n'),
(68, 'Heating magnetic stirrer', 'heating.jpg', 'Reliable and Easy to use', 'pharma', 'VELP Scientifica', 'https://www.velp.com/en-ww/microstirrer-magnetic-stirrer.aspx'),
(69, 'Washing machines for glassware', 'washingmachines.jpg', 'HIGH CAPACITY LABORATORY GLASSWARE WASHER (405 LITRES)', 'pharma', 'smeg instruments', 'https://www.smeg-instruments.com/laboratory-division/glassware-washers-of-high-capacity/products/gw6010tm/'),
(70, 'Microscopes', 'microscopeindustrial.jpg', 'Whether you are working in production or research, the Leica DCM8 delivers the accurate, repeatable metrological analysis results you need in order to optimize material performance.', 'food', 'Leica microsystems', 'https://www.leica-microsystems.com/products/digital-microscopes/p/leica-dcm8/'),
(71, 'Vis and UV/Vis spectrometers', 'libras80.jpeg', 'The Biochrom Libra S80 model is s robustly designed to deliver reliable, low maintenance UV/Visible spectrophotometry in environments with multiple users in a regulated environment such as method development. ', 'food', 'Biochrom', 'http://www.biochrom.co.uk/product/63/biochrom-libra-s80-double-beam-spectrophotometer.html'),
(72, 'Elisa systems', 'elisasystems.jpg', 'The EZ Read 800 is a fast and accurate microplate reader that is an ideal choice to keep up with a heavy workload in a busy high-throughput laboratory.', 'food', 'Biochrom', 'http://www.biochrom.co.uk/product/98/biochrom-ez-read-800-microplate-reader.html'),
(73, 'Densitometers', 'mettertoledo.png', 'Developed for a broad range of industries, METTLER TOLEDO\'s Excellence Density Meters can measure almost any sample with a very high accuracy – even detecting one drop of whisky in a bathtub full of water.', 'food', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/density-meter/densitometer.html'),
(74, 'Refractometers', 'mettertoledo.png', 'The Excellence R4 refractometer offers fast refractive index measurements in the range from 1.32 to 1.70, with automatic temperature control from 0 to 100°C.', 'food', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/refractometer/refractometers/R4.html'),
(75, 'Kjeldahl/Dumas/Soxhlet', 'distilation.jpg', 'Entry-level Kjeldahl distillation unit for your analyses concerning different applications such as determining ammoniacal nitrogen, protein determination, nitrogen content etc.', 'food', 'Velp', 'https://www.velp.com/en-ww/udk-129-kjeldahl-distillation-unit.aspx'),
(76, 'рН/ Ion/ DO/Cond meters', 'benchtop.png', 'Whether you are looking for stringent compliance requirements or routine measurements on a budget, we have the benchtop pH meter solution for you.', 'food', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/pH-meter/benchtop-pH-meter.html'),
(77, 'Moisture analyzers', 'moistureanalyzers.jpg', 'oisture affects everything we use on a daily basis. Therefore, in many cases it is important to be able to accurately determine the moisture content of samples.', 'food', 'Ohaus', 'https://mec.ohaus.com/en-MEC/MB120-6'),
(78, 'Balances - analytical, precise and technical', 'explorer.jpg', 'The OHAUS Explorer Series of precision balances combine modern features and design elements to offer unmatched functionality in a line of high-performance balances', 'food', 'Ohaus', 'https://mec.ohaus.com/en-MEC/ExplorerPrecision-6'),
(79, 'Water distiler or clean water system', 'waterdestiler.png', 'Evoqua\'s Water One® SD services deliver reliable water management solutions that ensure you will always have the deionized (DI) water quality and quantity you need to support your business.', 'food', 'Evoqua', 'https://www.evoqua.com/en/evoqua/products--services/digital-water/water-one-services/water-one-sd-services/'),
(80, 'Termostat (incubator)', 'incubator.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'food', 'Binder', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-classic'),
(81, 'CO2 incubator	', 'incubator.jpg', 'Series CB-S incubators are suitable for routine cell cultivation applications: They are free from contamination due to 180 °C hot-air sterilization and reliable pH stability thanks to the drift-free infrared CO₂ measurement system.', 'food', 'Binder', 'https://www.binder-world.com/us/products/co2-incubators/series-cb-s-solidline'),
(82, 'Drying oven (dryer) ', 'dryer.jpg', 'The new products in the Solid.Line impress with their tried-and-tested BINDER quality and reliability. They are suited to drying and heating. The attributes of the Solid.', 'food', 'Binder', 'https://www.binder-world.com/us/products/drying-and-heating-chambers/series-ed-s-solidline'),
(83, 'Freezers', 'freezers.jpg', 'PROFESSIONAL FREEZER -30 °C 160 LITERS', 'food', 'smeg instruments', 'https://www.smeg-instruments.com/medical-division/professional-freezers/products/c30s16c1a/'),
(84, 'Refrigerators', 'refrigerators.jpg', 'REFRIGERATOR +4 °C 306 LITERS', 'food', 'smeg instruments', 'smeg-instruments.com/laboratory-division/glassware-washers-of-high-capacity/products/gw7015/'),
(85, 'Centrifuges	', 'centrifuge.jpg', 'Frontier™ Multi Centrifuges are reliable compact low-speed general purpose centrifuges', 'food', 'Ohaus', 'https://mec.ohaus.com/en-MEC/Frontier5000SeriesMulti-11'),
(86, 'Laminar airflow cabinet class II	', 'laminar.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'food', 'Faster', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-premium	\r\n'),
(87, 'Chemical fume hoods', 'chemicalfume.jpg', 'ChemFAST belong to the latest generation of ductless fume cupboards using the most innovative molecular filtration technology manufactured by Faster,', 'food', 'Faster', 'https://www.faster-air.com/en/products/chemical-fume-hoods/recirculatory-filtration-fume-cupboards/chemfast-top'),
(88, 'Autoclave', 'autoclave.png', 'The Systec D-Series are front-loading, bench-top autoclaves available in 7 sizes with chamber capacities ranging from 23 to 200 l.', 'food', 'Systec', 'https://www.systec-lab.com/autoclaves/horizontal-bench-top-autoclaves-23-200-l/	\r\n'),
(89, 'Heating magnetic stirrer', 'heating.jpg', 'Reliable and Easy to use', 'food', 'VELP Scientifica', 'https://www.velp.com/en-ww/microstirrer-magnetic-stirrer.aspx'),
(90, 'Washing machines for glassware', 'washingmachines.jpg', 'HIGH CAPACITY LABORATORY GLASSWARE WASHER (405 LITRES)', 'food', 'smeg instruments', 'https://www.smeg-instruments.com/laboratory-division/glassware-washers-of-high-capacity/products/gw6010tm/'),
(91, 'Microscopes', 'microscopeindustrial.jpg', 'Whether you are working in production or research, the Leica DCM8 delivers the accurate, repeatable metrological analysis results you need in order to optimize material performance.', 'ecology', 'Leica microsystems', 'https://www.leica-microsystems.com/products/digital-microscopes/p/leica-dcm8/'),
(92, 'Vis and UV/Vis spectrometers', 'libras80.jpeg', 'The Biochrom Libra S80 model is s robustly designed to deliver reliable, low maintenance UV/Visible spectrophotometry in environments with multiple users in a regulated environment such as method development. ', 'ecology', 'Biochrom', 'http://www.biochrom.co.uk/product/63/biochrom-libra-s80-double-beam-spectrophotometer.html'),
(93, 'Elisa systems', 'elisasystems.jpg', 'The EZ Read 800 is a fast and accurate microplate reader that is an ideal choice to keep up with a heavy workload in a busy high-throughput laboratory.', 'ecology', 'Biochrom', 'http://www.biochrom.co.uk/product/98/biochrom-ez-read-800-microplate-reader.html'),
(94, 'Densitometers', 'mettertoledo.png', 'Developed for a broad range of industries, METTLER TOLEDO\'s Excellence Density Meters can measure almost any sample with a very high accuracy – even detecting one drop of whisky in a bathtub full of water.', 'ecology', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/density-meter/densitometer.html'),
(95, 'Refractometers', 'mettertoledo.png', 'The Excellence R4 refractometer offers fast refractive index measurements in the range from 1.32 to 1.70, with automatic temperature control from 0 to 100°C.', 'ecology', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/refractometer/refractometers/R4.html'),
(96, 'Kjeldahl/Dumas/Soxhlet', 'distilation.jpg', 'Entry-level Kjeldahl distillation unit for your analyses concerning different applications such as determining ammoniacal nitrogen, protein determination, nitrogen content etc.', 'ecology', 'Velp', 'https://www.velp.com/en-ww/udk-129-kjeldahl-distillation-unit.aspx'),
(97, 'рН/ Ion/ DO/Cond meters', 'benchtop.png', 'Whether you are looking for stringent compliance requirements or routine measurements on a budget, we have the benchtop pH meter solution for you.', 'ecology', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/pH-meter/benchtop-pH-meter.html'),
(98, 'Balances - analytical, precise and technical', 'explorer.jpg', 'The OHAUS Explorer Series of precision balances combine modern features and design elements to offer unmatched functionality in a line of high-performance balances', 'ecology', 'Ohaus', 'https://mec.ohaus.com/en-MEC/ExplorerPrecision-6'),
(99, 'Water distiler or clean water system', 'waterdestiler.png', 'Evoqua\'s Water One® SD services deliver reliable water management solutions that ensure you will always have the deionized (DI) water quality and quantity you need to support your business.', 'ecology', 'Evoqua', 'https://www.evoqua.com/en/evoqua/products--services/digital-water/water-one-services/water-one-sd-services/'),
(100, 'Termostat (incubator)', 'incubator.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'ecology', 'Binder', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-classic'),
(101, 'Drying oven (dryer) ', 'dryer.jpg', 'The new products in the Solid.Line impress with their tried-and-tested BINDER quality and reliability. They are suited to drying and heating. The attributes of the Solid.', 'ecology', 'Binder', 'https://www.binder-world.com/us/products/drying-and-heating-chambers/series-ed-s-solidline'),
(102, 'Freezers', 'freezers.jpg', 'PROFESSIONAL FREEZER -30 °C 160 LITERS', 'ecology', 'smeg instruments', 'https://www.smeg-instruments.com/medical-division/professional-freezers/products/c30s16c1a/'),
(103, 'Refrigerators', 'refrigerators.jpg', 'REFRIGERATOR +4 °C 306 LITERS', 'ecology', 'smeg instruments', 'smeg-instruments.com/laboratory-division/glassware-washers-of-high-capacity/products/gw7015/'),
(104, 'Centrifuges	', 'centrifuge.jpg', 'Frontier™ Multi Centrifuges are reliable compact low-speed general purpose centrifuges', 'ecology', 'Ohaus', 'https://mec.ohaus.com/en-MEC/Frontier5000SeriesMulti-11'),
(105, 'Laminar airflow cabinet class II	', 'laminar.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'ecology', 'Faster', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-premium	\r\n'),
(106, 'Chemical fume hoods', 'chemicalfume.jpg', 'ChemFAST belong to the latest generation of ductless fume cupboards using the most innovative molecular filtration technology manufactured by Faster,', 'ecology', 'Faster', 'https://www.faster-air.com/en/products/chemical-fume-hoods/recirculatory-filtration-fume-cupboards/chemfast-top'),
(107, 'Autoclave', 'autoclave.png', 'The Systec D-Series are front-loading, bench-top autoclaves available in 7 sizes with chamber capacities ranging from 23 to 200 l.', 'ecology', 'Systec', 'https://www.systec-lab.com/autoclaves/horizontal-bench-top-autoclaves-23-200-l/	\r\n'),
(108, 'Heating magnetic stirrer', 'heating.jpg', 'Reliable and Easy to use', 'ecology', 'VELP Scientifica', 'https://www.velp.com/en-ww/microstirrer-magnetic-stirrer.aspx'),
(109, 'Washing machines for glassware', 'washingmachine.jpg', 'washing up to 95°C - antibacterical thermal disinfection', 'ecology', 'Smeg instruments', 'https://www.smeg-instruments.com/laboratory-division/glassware-washers-of-small-dimensions/products/gw1160sc/'),
(110, 'Equipment for Biochemical Oxigen', 'dk20.jpg', 'Kjeldahl Digestion Units with 20-position aluminum heating block that offers an excellent thermal homogeneity.', 'ecology', 'Velp Scientifica', 'https://www.velp.com/en-ww/dk-20-digestion-unit.aspx'),
(111, 'Vis and UV/Vis spectrometers', 'libras80.jpeg', 'The Biochrom Libra S80 model is s robustly designed to deliver reliable, low maintenance UV/Visible spectrophotometry in environments with multiple users in a regulated environment such as method development. ', 'chemical', 'Biochrom', 'http://www.biochrom.co.uk/product/63/biochrom-libra-s80-double-beam-spectrophotometer.html'),
(112, 'Densitometers', 'mettertoledo.png', 'Developed for a broad range of industries, METTLER TOLEDO\'s Excellence Density Meters can measure almost any sample with a very high accuracy – even detecting one drop of whisky in a bathtub full of water.', 'chemical', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/density-meter/densitometer.html'),
(113, 'Refractometers', 'mettertoledo.png', 'The Excellence R4 refractometer offers fast refractive index measurements in the range from 1.32 to 1.70, with automatic temperature control from 0 to 100°C.', 'chemical', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/refractometer/refractometers/R4.html'),
(114, 'Kjeldahl/Dumas/Soxhlet', 'distilation.jpg', 'Entry-level Kjeldahl distillation unit for your analyses concerning different applications such as determining ammoniacal nitrogen, protein determination, nitrogen content etc.', 'chemical', 'Velp', 'https://www.velp.com/en-ww/udk-129-kjeldahl-distillation-unit.aspx'),
(115, 'рН/ Ion/ DO/Cond meters', 'benchtop.png', 'Whether you are looking for stringent compliance requirements or routine measurements on a budget, we have the benchtop pH meter solution for you.', 'chemical', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/pH-meter/benchtop-pH-meter.html'),
(116, 'Balances - analytical, precise and technical', 'explorer.jpg', 'The OHAUS Explorer Series of precision balances combine modern features and design elements to offer unmatched functionality in a line of high-performance balances', 'chemical', 'Ohaus', 'https://mec.ohaus.com/en-MEC/ExplorerPrecision-6'),
(117, 'Water distiler or clean water system', 'waterdestiler.png', 'Reliable water management solutions for simple deionization with remote monitoring.', 'chemical', 'Evoqua', 'https://www.evoqua.com/en/evoqua/products--services/digital-water/water-one-services/water-one-sd-services/'),
(118, 'Termostat (incubator)', 'incubator.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'chemical', 'Binder', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-classic'),
(119, 'Drying oven (dryer) ', 'dryer.jpg', 'The new products in the Solid.Line impress with their tried-and-tested BINDER quality and reliability. They are suited to drying and heating. The attributes of the Solid.', 'chemical', 'Binder', 'https://www.binder-world.com/us/products/drying-and-heating-chambers/series-ed-s-solidline'),
(120, 'Freezers', 'freezers.jpg', 'PROFESSIONAL FREEZER -30 °C 160 LITERS', 'chemical', 'smeg instruments', 'https://www.smeg-instruments.com/medical-division/professional-freezers/products/c30s16c1a/'),
(121, 'Refrigerators', 'refrigerators.jpg', 'REFRIGERATOR +4 °C 306 LITERS', 'chemical', 'smeg instruments', 'smeg-instruments.com/laboratory-division/glassware-washers-of-high-capacity/products/gw7015/'),
(122, 'Centrifuges	', 'centrifuge.jpg', 'Frontier™ Multi Centrifuges are reliable compact low-speed general purpose centrifuges', 'chemical', 'Ohaus', 'https://mec.ohaus.com/en-MEC/Frontier5000SeriesMulti-11'),
(123, 'Chemical fume hoods', 'chemicalfume.jpg', 'ChemFAST belong to the latest generation of ductless fume cupboards using the most innovative molecular filtration technology manufactured by Faster,', 'chemical', 'Faster', 'https://www.faster-air.com/en/products/chemical-fume-hoods/recirculatory-filtration-fume-cupboards/chemfast-top'),
(124, 'Heating magnetic stirrers', 'heating.jpg', 'Reliable and Easy to use', 'chemical', 'VELP Scientifica', 'https://www.velp.com/en-ww/microstirrer-magnetic-stirrer.aspx'),
(125, 'Washing machines for glassware', 'washingmachine.jpg', 'washing up to 95°C - antibacterical thermal disinfection', 'chemical', 'Smeg instruments', 'https://www.smeg-instruments.com/laboratory-division/glassware-washers-of-small-dimensions/products/gw1160sc/'),
(126, 'Microscopes', 'microscopeindustrial.jpg', 'Whether you are working in production or research, the Leica DCM8 delivers the accurate, repeatable metrological analysis results you need in order to optimize material performance.', 'geology', 'Leica microsystems', 'https://www.leica-microsystems.com/products/digital-microscopes/p/leica-dcm8/'),
(127, 'Vis and UV/Vis spectrometers', 'libras80.jpeg', 'The Biochrom Libra S80 model is s robustly designed to deliver reliable, low maintenance UV/Visible spectrophotometry in environments with multiple users in a regulated environment such as method development. ', 'geology', 'Biochrom', 'http://www.biochrom.co.uk/product/63/biochrom-libra-s80-double-beam-spectrophotometer.html'),
(128, 'Densitometers', 'mettertoledo.png', 'Developed for a broad range of industries, METTLER TOLEDO\'s Excellence Density Meters can measure almost any sample with a very high accuracy – even detecting one drop of whisky in a bathtub full of water.', 'geology', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/density-meter/densitometer.html'),
(129, 'Refractometers', 'mettertoledo.png', 'The Excellence R4 refractometer offers fast refractive index measurements in the range from 1.32 to 1.70, with automatic temperature control from 0 to 100°C.', 'geology', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/refractometer/refractometers/R4.html'),
(130, 'Kjeldahl/Dumas/Soxhlet', 'distilation.jpg', 'Entry-level Kjeldahl distillation unit for your analyses concerning different applications such as determining ammoniacal nitrogen, protein determination, nitrogen content etc.', 'geology', 'Velp', 'https://www.velp.com/en-ww/udk-129-kjeldahl-distillation-unit.aspx'),
(131, 'рН/ Ion/ DO/Cond meters', 'benchtop.png', 'Whether you are looking for stringent compliance requirements or routine measurements on a budget, we have the benchtop pH meter solution for you.', 'geology', 'Mettler Toledo', 'https://www.mt.com/us/en/home/products/Laboratory_Analytics_Browse/pH-meter/benchtop-pH-meter.html'),
(132, 'Balances - analytical, precise and technical', 'explorer.jpg', 'The OHAUS Explorer Series of precision balances combine modern features and design elements to offer unmatched functionality in a line of high-performance balances', 'geology', 'Ohaus', 'https://mec.ohaus.com/en-MEC/ExplorerPrecision-6'),
(133, 'Water distiler or clean water system', 'waterdestiler.png', 'Reliable water management solutions for simple deionization with remote monitoring.', 'geology', 'Evoqua', 'https://www.evoqua.com/en/evoqua/products--services/digital-water/water-one-services/water-one-sd-services/'),
(134, 'Termostat (incubator)', 'incubator.jpg', 'SafeFAST Classic class II A1/A2 Microbiological Safety Cabinets belong to the latest generation of laminar airflow systems manufactured by Faster.', 'geology', 'Binder', 'https://www.faster-air.com/en/products/microbiological-safety-cabinets/class-ii-a1-a2/safefast-classic'),
(135, 'Drying oven (dryer) ', 'dryer.jpg', 'The new products in the Solid.Line impress with their tried-and-tested BINDER quality and reliability. They are suited to drying and heating. The attributes of the Solid.', 'geology', 'Binder', 'https://www.binder-world.com/us/products/drying-and-heating-chambers/series-ed-s-solidline'),
(136, 'Freezers', 'freezers.jpg', 'PROFESSIONAL FREEZER -30 °C 160 LITERS', 'geology', 'smeg instruments', 'https://www.smeg-instruments.com/medical-division/professional-freezers/products/c30s16c1a/'),
(137, 'Refrigerators', 'refrigerators.jpg', 'REFRIGERATOR +4 °C 306 LITERS', 'geology', 'smeg instruments', 'smeg-instruments.com/laboratory-division/glassware-washers-of-high-capacity/products/gw7015/'),
(138, 'Centrifuges	', 'centrifuge.jpg', 'Frontier™ Multi Centrifuges are reliable compact low-speed general purpose centrifuges', 'geology', 'Ohaus', 'https://mec.ohaus.com/en-MEC/Frontier5000SeriesMulti-11'),
(139, 'Chemical fume hoods', 'chemicalfume.jpg', 'ChemFAST belong to the latest generation of ductless fume cupboards using the most innovative molecular filtration technology manufactured by Faster,', 'geology', 'Faster', 'https://www.faster-air.com/en/products/chemical-fume-hoods/recirculatory-filtration-fume-cupboards/chemfast-top'),
(140, 'Heating magnetic stirrers', 'heating.jpg', 'Reliable and Easy to use', 'geology', 'VELP Scientifica', 'https://www.velp.com/en-ww/microstirrer-magnetic-stirrer.aspx'),
(141, 'Washing machines for glassware', 'washingmachine.jpg', 'washing up to 95°C - antibacterical thermal disinfection', 'geology', 'Smeg instruments', 'https://www.smeg-instruments.com/laboratory-division/glassware-washers-of-small-dimensions/products/gw1160sc/');

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

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `category` text NOT NULL,
  `category_short` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `image`, `category`, `category_short`) VALUES
(1, 'Microbiology', 'microbiology.png', 'Clinical', 'microbiology'),
(2, 'Clinical Chemistry', 'clinicalchemistry.png', 'Clinical', 'clinical'),
(3, 'Pathology', 'pathology.png', 'Clinical', 'pathology'),
(4, 'Genetics/Molecular biology', 'genetics.png', 'Clinical', 'genetics'),
(5, 'In-vitro fertilization', 'in-vitro.png', 'Clinical', 'fertilization'),
(6, 'Pharma and cosmetics', 'cosmetics.png', 'Industrial', 'pharma'),
(7, 'Food&Feed, beverages, mineral water manufacturers', 'foodfeed.png', 'Industrial', 'food'),
(8, 'Ecology, Municipality Drinking and Waste Water stations', 'ecology.png', 'Industrial', 'ecology'),
(9, 'Chemical Industry', 'chemical.png', 'Industrial', 'chemical'),
(10, 'Geology and mining industry', 'geology.png', 'Industrial', 'geology');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blogs-shq`
--
ALTER TABLE `blogs-shq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `products-shq`
--
ALTER TABLE `products-shq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
