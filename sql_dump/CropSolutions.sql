-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 02:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crop`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `state_code` int(11) NOT NULL,
  `dist_code` int(11) NOT NULL,
  `dist_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`state_code`, `dist_code`, `dist_name`) VALUES
(1, 1, 'North and Middle Andama'),
(1, 2, 'South Andama'),
(1, 3, 'Nicobar'),
(2, 4, 'Anantapur'),
(2, 5, 'Chittoor'),
(2, 6, 'East Godavari'),
(2, 7, 'Guntur'),
(2, 8, 'Krishna'),
(2, 9, 'Kurnool'),
(2, 10, 'Prakasam'),
(2, 11, 'Srikakulam'),
(2, 12, 'Sri Potti Sri Ramulu Nellore'),
(2, 13, 'Vishakhapatnam'),
(2, 14, 'Vizianagaram'),
(2, 15, 'West Godavari'),
(2, 16, 'Cudappah'),
(3, 17, 'Anjaw'),
(3, 18, 'Changlang'),
(3, 19, 'East Siang'),
(3, 20, 'East Kameng'),
(3, 21, 'Kurung Kumey'),
(3, 22, 'Lohit'),
(3, 23, 'Lower Dibang Valley'),
(3, 24, 'Lower Subansiri'),
(3, 25, 'Papum Pare'),
(3, 26, 'Tawang'),
(3, 27, 'Tirap'),
(3, 28, 'Dibang Valley'),
(3, 29, 'Upper Siang'),
(3, 30, 'Upper Subansiri'),
(3, 31, 'West Kameng'),
(3, 32, 'West Siang'),
(4, 33, 'Baksa'),
(4, 34, 'Barpeta'),
(4, 35, 'Bongaigao'),
(4, 36, 'Cachar'),
(4, 37, 'Chirang'),
(4, 38, 'Darrang'),
(4, 39, 'Dhemaji'),
(4, 40, 'Dima Hasao'),
(4, 41, 'Dhubri'),
(4, 42, 'Dibrugarh'),
(4, 43, 'Goalpara'),
(4, 44, 'Golaghat'),
(4, 45, 'Hailakandi'),
(4, 46, 'Jorhat'),
(4, 47, 'Kamrup'),
(4, 48, 'Kamrup Metropolita'),
(4, 49, 'Karbi Anglong'),
(4, 50, 'Karimganj'),
(4, 51, 'Kokrajhar'),
(4, 52, 'Lakhimpur'),
(4, 53, 'Morigao'),
(4, 54, 'Nagao'),
(4, 55, 'Nalbari'),
(4, 56, 'Sivasagar'),
(4, 57, 'Sonitpur'),
(4, 58, 'Tinsukia'),
(4, 59, 'Udalguri'),
(5, 60, 'Araria'),
(5, 61, 'Arwal'),
(5, 62, 'Aurangabad'),
(5, 63, 'Banka'),
(5, 64, 'Begusarai'),
(5, 65, 'Bhagalpur'),
(5, 66, 'Bhojpur'),
(5, 67, 'Buxar'),
(5, 68, 'Darbhanga'),
(5, 69, 'East Champara'),
(5, 70, 'Gaya'),
(5, 71, 'Gopalganj'),
(5, 72, 'Jamui'),
(5, 73, 'Jehanabad'),
(5, 74, 'Kaimur'),
(5, 75, 'Katihar'),
(5, 76, 'Khagaria'),
(5, 77, 'Kishanganj'),
(5, 78, 'Lakhisarai'),
(5, 79, 'Madhepura'),
(5, 80, 'Madhubani'),
(5, 81, 'Munger'),
(5, 82, 'Muzaffarpur'),
(5, 83, 'Nalanda'),
(5, 84, 'Nawada'),
(5, 85, 'Patna'),
(5, 86, 'Purnia'),
(5, 87, 'Rohtas'),
(5, 88, 'Saharsa'),
(5, 89, 'Samastipur'),
(5, 90, 'Sara'),
(5, 91, 'Sheikhpura'),
(5, 92, 'Sheohar'),
(5, 93, 'Sitamarhi'),
(5, 94, 'Siwa'),
(5, 95, 'Supaul'),
(5, 96, 'Vaishali'),
(5, 97, 'West Champara'),
(6, 98, 'Chandigarh'),
(7, 99, 'Bastar'),
(7, 100, 'Bijapur'),
(7, 101, 'Bilaspur'),
(7, 102, 'Dantewada'),
(7, 103, 'Dhamtari'),
(7, 104, 'Durg'),
(7, 105, 'Jashpur'),
(7, 106, 'Janjgir-Champa'),
(7, 107, 'Korba'),
(7, 108, 'Koriya'),
(7, 109, 'Kanker'),
(7, 110, 'Kabirdham (formerly Kawardha);'),
(7, 111, 'Mahasamund'),
(7, 112, 'Narayanpur'),
(7, 113, 'Raigarh'),
(7, 114, 'Rajnandgao'),
(7, 115, 'Raipur'),
(7, 116, 'Surajpur'),
(8, 117, 'Dadra and Nagar Haveli'),
(9, 118, 'Dama'),
(9, 119, 'Diu'),
(10, 120, 'Central Delhi'),
(10, 121, 'East Delhi'),
(10, 122, 'New Delhi'),
(10, 123, 'North Delhi'),
(10, 124, 'North East Delhi'),
(10, 125, 'North West Delhi'),
(10, 126, 'South Delhi'),
(10, 127, 'South West Delhi'),
(10, 128, 'West Delhi'),
(11, 129, 'North Goa'),
(11, 130, 'South Goa'),
(12, 131, 'Ahmedabad'),
(12, 132, 'Amreli'),
(12, 133, 'Anand'),
(12, 134, 'Aravalli'),
(12, 135, 'Banaskantha'),
(12, 136, 'Bharuch'),
(12, 137, 'Bhavnagar'),
(12, 138, 'Dahod'),
(12, 139, 'Dang'),
(12, 140, 'Gandhinagar'),
(12, 141, 'Jamnagar'),
(12, 142, 'Junagadh'),
(12, 143, 'Kutch'),
(12, 144, 'Kheda'),
(12, 145, 'Mehsana'),
(12, 146, 'Narmada'),
(12, 147, 'Navsari'),
(12, 148, 'Pata'),
(12, 149, 'Panchmahal'),
(12, 150, 'Porbandar'),
(12, 151, 'Rajkot'),
(12, 152, 'Sabarkantha'),
(12, 153, 'Surendranagar'),
(12, 154, 'Surat'),
(12, 155, 'Tapi'),
(12, 156, 'Vadodara'),
(12, 157, 'Valsad'),
(13, 158, 'Ambala'),
(13, 159, 'Bhiwani'),
(13, 160, 'Faridabad'),
(13, 161, 'Fatehabad'),
(13, 162, 'Gurgao'),
(13, 163, 'Hissar'),
(13, 164, 'Jhajjar'),
(13, 165, 'Jind'),
(13, 166, 'Karnal'),
(13, 167, 'Kaithal'),
(13, 168, 'Kurukshetra'),
(13, 169, 'Mahendragarh'),
(13, 170, 'Mewat'),
(13, 171, 'Palwal'),
(13, 172, 'Panchkula'),
(13, 173, 'Panipat'),
(13, 174, 'Rewari'),
(13, 175, 'Rohtak'),
(13, 176, 'Sirsa'),
(13, 177, 'Sonipat'),
(13, 178, 'Yamuna Nagar'),
(14, 179, 'Bilaspur'),
(14, 180, 'Chamba'),
(14, 181, 'Hamirpur'),
(14, 182, 'Kangra'),
(14, 183, 'Kinnaur'),
(14, 184, 'Kullu'),
(14, 185, 'Lahaul and Spiti'),
(14, 186, 'Mandi'),
(14, 187, 'Shimla'),
(14, 188, 'Sirmaur'),
(14, 189, 'Sola'),
(14, 190, 'Una'),
(15, 191, 'Anantnag'),
(15, 192, 'Badgam'),
(15, 193, 'Bandipora'),
(15, 194, 'Baramulla'),
(15, 195, 'Doda'),
(15, 196, 'Ganderbal'),
(15, 197, 'Jammu'),
(15, 198, 'Kargil'),
(15, 199, 'Kathua'),
(15, 200, 'Kishtwar'),
(15, 202, 'Kupwara'),
(15, 203, 'Kulgam'),
(15, 204, 'Leh'),
(15, 205, 'Poonch'),
(15, 206, 'Pulwama'),
(15, 207, 'Rajouri'),
(15, 208, 'Ramba'),
(15, 209, 'Reasi'),
(15, 210, 'Samba'),
(15, 211, 'Shopia'),
(15, 212, 'Srinagar'),
(15, 213, 'Udhampur'),
(16, 214, 'Bokaro'),
(16, 215, 'Chatra'),
(16, 216, 'Deoghar'),
(16, 217, 'Dhanbad'),
(16, 218, 'Dumka'),
(16, 219, 'East Singhbhum'),
(16, 220, 'Garhwa'),
(16, 221, 'Giridih'),
(16, 222, 'Godda'),
(16, 223, 'Gumla'),
(16, 224, 'Hazaribag'),
(16, 225, 'Jamtara'),
(16, 226, 'Khunti'),
(16, 227, 'Koderma'),
(16, 228, 'Latehar'),
(16, 229, 'Lohardaga'),
(16, 230, 'Pakur'),
(16, 231, 'Palamu'),
(16, 232, 'Ramgarh'),
(16, 233, 'Ranchi'),
(16, 234, 'Sahibganj'),
(16, 235, 'Seraikela Kharsawa'),
(16, 236, 'Simdega'),
(16, 237, 'West Singhbhum'),
(17, 238, 'Bagalkot'),
(17, 239, 'Bengaluru'),
(17, 241, 'Belgaum'),
(17, 242, 'Bellary'),
(17, 243, 'Bidar'),
(17, 244, 'Bijapur'),
(17, 245, 'Chamrajnagar'),
(17, 246, 'Chikkamagaluru'),
(17, 247, 'Chikkaballapur'),
(17, 248, 'Chitradurga'),
(17, 249, 'Davangere'),
(17, 250, 'Dharwad'),
(17, 251, 'Mangalore'),
(17, 252, 'Gadag'),
(17, 253, 'Gulbarga'),
(17, 254, 'Hassan'),
(17, 255, 'Haveri'),
(17, 256, 'Kodagu'),
(17, 257, 'Kolar'),
(17, 258, 'Koppal'),
(17, 259, 'Mandya'),
(17, 260, 'Mysore'),
(17, 261, 'Raichur'),
(17, 262, 'Shimoga'),
(17, 263, 'Tumkur'),
(17, 264, 'Udupi'),
(17, 265, 'Uttara Kannada'),
(17, 266, 'Ramnagar'),
(17, 267, 'Yadgir'),
(18, 268, 'Alappuzha'),
(18, 269, 'Ernakulam'),
(18, 270, 'Idukki'),
(18, 271, 'Kannur'),
(18, 272, 'Kasaragod'),
(18, 273, 'Kollam'),
(18, 274, 'Kottayam'),
(18, 275, 'Kozhikode'),
(18, 276, 'Malappuram'),
(18, 277, 'Palakkad'),
(18, 278, 'Pathanamthitta'),
(18, 279, 'Thrissur'),
(18, 280, 'Thiruvananthapuram'),
(18, 281, 'Wayanad'),
(19, 282, 'Lakshadweep'),
(20, 283, 'Agar'),
(20, 284, 'Alirajpur'),
(20, 285, 'Anuppur'),
(20, 286, 'Ashok Nagar'),
(20, 287, 'Balaghat'),
(20, 288, 'Barwani'),
(20, 289, 'Betul'),
(20, 290, 'Bhind'),
(20, 291, 'Bhopal'),
(20, 292, 'Burhanpur'),
(20, 293, 'Chhatarpur'),
(20, 294, 'Chhindwara'),
(20, 295, 'Damoh'),
(20, 296, 'Datia'),
(20, 297, 'Dewas'),
(20, 298, 'Dhar'),
(20, 299, 'Dindori'),
(20, 300, 'Guna'),
(20, 301, 'Gwalior'),
(20, 302, 'Harda'),
(20, 303, 'Hoshangabad'),
(20, 304, 'Indore'),
(20, 305, 'Jabalpur'),
(20, 306, 'Jhabua'),
(20, 307, 'Katni'),
(20, 308, 'Khandwa (East Nimar);'),
(20, 309, 'Khargone (West Nimar);'),
(20, 310, 'Mandla'),
(20, 311, 'Mandsaur'),
(20, 312, 'Morena'),
(20, 313, 'Narsinghpur'),
(20, 314, 'Neemuch'),
(20, 315, 'Panna'),
(20, 316, 'Raise'),
(20, 317, 'Rajgarh'),
(20, 318, 'Ratlam'),
(20, 319, 'Rewa'),
(20, 320, 'Sagar'),
(20, 321, 'Satna'),
(20, 322, 'Sehore'),
(20, 323, 'Seoni'),
(20, 324, 'Shahdol'),
(20, 325, 'Shajapur'),
(20, 326, 'Sheopur'),
(20, 327, 'Shivpuri'),
(20, 328, 'Sidhi'),
(20, 329, 'Singrauli'),
(20, 330, 'Tikamgarh'),
(20, 331, 'Ujjai'),
(20, 332, 'Umaria'),
(20, 333, 'Vidisha'),
(21, 334, 'Ahmednagar'),
(21, 335, 'Akola'),
(21, 336, 'Amravati'),
(21, 337, 'Aurangabad'),
(21, 338, 'Beed'),
(21, 339, 'Bhandara'),
(21, 340, 'Buldhana'),
(21, 341, 'Chandrapur'),
(21, 342, 'Dhule'),
(21, 343, 'Gadchiroli'),
(21, 344, 'Gondia'),
(21, 345, 'Hingoli'),
(21, 346, 'Jalgao'),
(21, 347, 'Jalna'),
(21, 348, 'Kolhapur'),
(21, 349, 'Latur'),
(21, 350, 'Mumbai City'),
(21, 351, 'Mumbai suburba'),
(21, 352, 'Nanded'),
(21, 353, 'Nandurbar'),
(21, 354, 'Nagpur'),
(21, 355, 'Nashik'),
(21, 356, 'Osmanabad'),
(21, 357, 'Parbhani'),
(21, 358, 'Pune'),
(21, 359, 'Raigad'),
(21, 360, 'Ratnagiri'),
(21, 361, 'Sangli'),
(21, 362, 'Satara'),
(21, 363, 'Sindhudurg'),
(21, 364, 'Solapur'),
(21, 365, 'Thane'),
(21, 366, 'Wardha'),
(21, 367, 'Washim'),
(21, 368, 'Yavatmal'),
(22, 369, 'Bishnupur'),
(22, 370, 'Churachandpur'),
(22, 371, 'Chandel'),
(22, 372, 'Imphal East'),
(22, 373, 'Senapati'),
(22, 374, 'Tamenglong'),
(22, 375, 'Thoubal'),
(22, 376, 'Ukhrul'),
(22, 377, 'Imphal West'),
(23, 378, 'East Garo Hills'),
(23, 379, 'East Khasi Hills'),
(23, 380, 'Jaintia Hills'),
(23, 381, 'Ri Bhoi'),
(23, 382, 'South Garo Hills'),
(23, 383, 'West Garo Hills'),
(23, 384, 'West Khasi Hills'),
(24, 385, 'Aizawl'),
(24, 386, 'Champhai'),
(24, 387, 'Kolasib'),
(24, 388, 'Lawngtlai'),
(24, 389, 'Lunglei'),
(24, 390, 'Mamit'),
(24, 391, 'Saiha'),
(24, 392, 'Serchhip'),
(25, 393, 'Dimapur'),
(25, 394, 'Kiphire'),
(25, 395, 'Kohima'),
(25, 396, 'Longleng'),
(25, 397, 'Mokokchung'),
(25, 398, 'Mo'),
(25, 399, 'Pere'),
(25, 400, 'Phek'),
(25, 401, 'Tuensang'),
(25, 402, 'Wokha'),
(25, 403, 'Zunheboto'),
(26, 404, 'Angul'),
(26, 405, 'Boudh (Bauda);'),
(26, 406, 'Bhadrak'),
(26, 407, 'Balangir'),
(26, 408, 'Bargarh (Baragarh);'),
(26, 409, 'Balasore'),
(26, 410, 'Cuttack'),
(26, 411, 'Debagarh (Deogarh);'),
(26, 412, 'Dhenkanal'),
(26, 413, 'Ganjam'),
(26, 414, 'Gajapati'),
(26, 415, 'Jharsuguda'),
(26, 416, 'Jajpur'),
(26, 417, 'Jagatsinghpur'),
(26, 418, 'Khordha'),
(26, 419, 'Kendujhar (Keonjhar);'),
(26, 420, 'Kalahandi'),
(26, 421, 'Kandhamal'),
(26, 422, 'Koraput'),
(26, 423, 'Kendrapara'),
(26, 424, 'Malkangiri'),
(26, 425, 'Mayurbhanj'),
(26, 426, 'Nabarangpur'),
(26, 427, 'Nuapada'),
(26, 428, 'Nayagarh'),
(26, 429, 'Puri'),
(26, 430, 'Rayagada'),
(26, 431, 'Sambalpur'),
(26, 432, 'Subarnapur (Sonepur);'),
(26, 433, 'Sundergarh'),
(27, 434, 'Karaikal'),
(27, 435, 'Mahe'),
(27, 436, 'Pondicherry'),
(27, 437, 'Yanam'),
(28, 438, 'Amritsar'),
(28, 439, 'Barnala'),
(28, 440, 'Bathinda'),
(28, 441, 'Firozpur'),
(28, 442, 'Faridkot'),
(28, 443, 'Fatehgarh Sahib'),
(28, 444, 'Fazilka'),
(28, 445, 'Gurdaspur'),
(28, 446, 'Hoshiarpur'),
(28, 447, 'Jalandhar'),
(28, 448, 'Kapurthala'),
(28, 449, 'Ludhiana'),
(28, 450, 'Mansa'),
(28, 451, 'Moga'),
(28, 452, 'Sri Muktsar Sahib'),
(28, 453, 'Pathankot'),
(28, 454, 'Patiala'),
(28, 455, 'Rupnagar'),
(28, 456, 'Ajitgarh (Mohali);'),
(28, 457, 'Sangrur'),
(28, 458, 'Shahid Bhagat Singh Nagar'),
(28, 459, 'Tarn Tara'),
(29, 460, 'Ajmer'),
(29, 461, 'Alwar'),
(29, 462, 'Bikaner'),
(29, 463, 'Barmer'),
(29, 464, 'Banswara'),
(29, 465, 'Bharatpur'),
(29, 466, 'Bara'),
(29, 467, 'Bundi'),
(29, 468, 'Bhilwara'),
(29, 469, 'Churu'),
(29, 470, 'Chittorgarh'),
(29, 471, 'Dausa'),
(29, 472, 'Dholpur'),
(29, 473, 'Dungapur'),
(29, 474, 'Ganganagar'),
(29, 475, 'Hanumangarh'),
(29, 476, 'Jhunjhunu'),
(29, 477, 'Jalore'),
(29, 478, 'Jodhpur'),
(29, 479, 'Jaipur'),
(29, 480, 'Jaisalmer'),
(29, 481, 'Jhalawar'),
(29, 482, 'Karauli'),
(29, 483, 'Kota'),
(29, 484, 'Nagaur'),
(29, 485, 'Pali'),
(29, 486, 'Pratapgarh'),
(29, 487, 'Rajsamand'),
(29, 488, 'Sikar'),
(29, 489, 'Sawai Madhopur'),
(29, 490, 'Sirohi'),
(29, 491, 'Tonk'),
(29, 492, 'Udaipur'),
(30, 493, 'East Sikkim'),
(30, 494, 'North Sikkim'),
(30, 495, 'South Sikkim'),
(30, 496, 'West Sikkim'),
(31, 497, 'Ariyalur'),
(31, 498, 'Chennai'),
(31, 499, 'Coimbatore'),
(31, 500, 'Cuddalore'),
(31, 501, 'Dharmapuri'),
(31, 502, 'Dindigul'),
(31, 503, 'Erode'),
(31, 504, 'Kanchipuram'),
(31, 505, 'Kanyakumari'),
(31, 506, 'Karur'),
(31, 507, 'Krishnagiri'),
(31, 508, 'Madurai'),
(31, 509, 'Nagapattinam'),
(31, 510, 'Nilgiris'),
(31, 511, 'Namakkal'),
(31, 512, 'Perambalur'),
(31, 513, 'Pudukkottai'),
(31, 514, 'Ramanathapuram'),
(31, 515, 'Salem'),
(31, 516, 'Sivaganga'),
(31, 517, 'Tirupur'),
(31, 518, 'Tiruchirappalli'),
(31, 519, 'Theni'),
(31, 520, 'Tirunelveli'),
(31, 521, 'Thanjavur'),
(31, 522, 'Thoothukudi'),
(31, 523, 'Tiruvallur'),
(31, 524, 'Tiruvarur'),
(31, 525, 'Tiruvannamalai'),
(31, 526, 'Vellore'),
(31, 527, 'Viluppuram'),
(31, 528, 'Virudhunagar'),
(32, 529, 'Adilabad'),
(32, 530, 'Hyderabad'),
(32, 531, 'Karimnagar'),
(32, 532, 'Khammam'),
(32, 533, 'Mahbubnagar'),
(32, 534, 'Medak'),
(32, 535, 'Nalgonda'),
(32, 536, 'Nizamabad'),
(32, 537, 'Ranga Reddy'),
(32, 538, 'Warangal'),
(33, 539, 'Dhalai'),
(33, 540, 'North Tripura'),
(33, 541, 'South Tripura'),
(33, 542, 'Khowai'),
(33, 543, 'West Tripura'),
(35, 544, 'Agra'),
(35, 545, 'Aligarh'),
(35, 546, 'Allahabad'),
(35, 547, 'Ambedkar Nagar'),
(35, 548, 'Auraiya'),
(35, 549, 'Azamgarh'),
(35, 550, 'Bagpat'),
(35, 551, 'Bahraich'),
(35, 552, 'Ballia'),
(35, 553, 'Balrampur'),
(35, 554, 'Banda'),
(35, 555, 'Barabanki'),
(35, 556, 'Bareilly'),
(35, 557, 'Basti'),
(35, 558, 'Bijnor'),
(35, 559, 'Budau'),
(35, 560, 'Bulandshahr'),
(35, 561, 'Chandauli'),
(35, 562, 'Amethi (Chhatrapati Shahuji Maharaj Nagar)'),
(35, 563, 'Chitrakoot'),
(35, 564, 'Deoria'),
(35, 565, 'Etah'),
(35, 566, 'Etawah'),
(35, 567, 'Faizabad'),
(35, 568, 'Farrukhabad'),
(35, 569, 'Fatehpur'),
(35, 570, 'Firozabad'),
(35, 571, 'Gautam Buddh Nagar'),
(35, 572, 'Ghaziabad'),
(35, 573, 'Ghazipur'),
(35, 574, 'Gonda'),
(35, 575, 'Gorakhpur'),
(35, 576, 'Hamirpur'),
(35, 577, 'Hardoi'),
(35, 578, 'Hathras (Mahamaya Nagar);'),
(35, 579, 'Jalau'),
(35, 580, 'Jaunpur'),
(35, 581, 'Jhansi'),
(35, 582, 'Jyotiba Phule Nagar'),
(35, 583, 'Kannauj'),
(35, 584, 'Kanpur Dehat (Ramabai Nagar);'),
(35, 585, 'Kanpur Nagar'),
(35, 586, 'Kanshi Ram Nagar'),
(35, 587, 'Kaushambi'),
(35, 588, 'Kushinagar'),
(35, 589, 'Lakhimpur Kheri'),
(35, 590, 'Lalitpur'),
(35, 591, 'Lucknow'),
(35, 592, 'Maharajganj'),
(35, 593, 'Mahoba'),
(35, 594, 'Mainpuri'),
(35, 595, 'Mathura'),
(35, 596, 'Mau'),
(35, 597, 'Meerut'),
(35, 598, 'Mirzapur'),
(35, 599, 'Moradabad'),
(35, 600, 'Muzaffarnagar'),
(35, 601, 'Panchsheel Nagar (Hapur);'),
(35, 602, 'Pilibhit'),
(35, 603, 'Pratapgarh'),
(35, 604, 'Raebareli'),
(35, 605, 'Rampur'),
(35, 606, 'Saharanpur'),
(35, 607, 'Sambhal(Bheem Nagar);'),
(35, 608, 'Sant Kabir Nagar'),
(35, 609, 'Sant Ravidas Nagar'),
(35, 610, 'Shahjahanpur'),
(35, 611, 'Shamli'),
(35, 612, 'Shravasti'),
(35, 613, 'Siddharthnagar'),
(35, 614, 'Sitapur'),
(35, 615, 'Sonbhadra'),
(35, 616, 'Sultanpur'),
(35, 617, 'Unnao'),
(35, 618, 'Varanasi'),
(34, 619, 'Almora'),
(34, 620, 'Bageshwar'),
(34, 621, 'Chamoli'),
(34, 622, 'Champawat'),
(34, 623, 'Dehradu'),
(34, 624, 'Haridwar'),
(34, 625, 'Nainital'),
(34, 626, 'Pauri Garhwal'),
(34, 627, 'Pithoragarh'),
(34, 628, 'Rudraprayag'),
(34, 629, 'Tehri Garhwal'),
(34, 630, 'Udham Singh Nagar'),
(34, 631, 'Uttarkashi'),
(36, 632, 'Bankura'),
(36, 633, 'Bardhama'),
(36, 634, 'Birbhum'),
(36, 635, 'Cooch Behar'),
(36, 636, 'Dakshin Dinajpur'),
(36, 637, 'Darjeeling'),
(36, 638, 'Hooghly'),
(36, 639, 'Howrah'),
(36, 640, 'Jalpaiguri'),
(36, 641, 'Kolkata'),
(36, 642, 'Maldah'),
(36, 643, 'Murshidabad'),
(36, 644, 'Nadia'),
(36, 645, 'North 24 Parganas'),
(36, 646, 'Paschim Medinipur'),
(36, 647, 'Purba Medinipur'),
(36, 648, 'Purulia'),
(36, 649, 'South 24 Parganas'),
(36, 650, 'Uttar Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `rainfall_regions`
--

CREATE TABLE `rainfall_regions` (
  `region_code` int(11) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rainfall_regions`
--

INSERT INTO `rainfall_regions` (`region_code`, `region`) VALUES
(1, 'ANDAMAN & NICOBAR ISLANDS'),
(2, 'ARUNACHAL PRADESH'),
(3, 'ASSAM & MEGHALAYA'),
(4, 'NAGA MANI MIZO TRIPURA'),
(5, 'SUB HIMALAYAN WEST BENGAL & SIKKIM'),
(6, 'GANGETIC WEST BENGAL'),
(7, 'ORISSA'),
(8, 'JHARKHAND'),
(9, 'BIHAR'),
(10, 'EAST UTTAR PRADESH'),
(11, 'WEST UTTAR PRADESH'),
(12, 'UTTARAKHAND'),
(13, 'HARYANA DELHI & CHANDIGARH'),
(14, 'PUNJAB'),
(15, 'HIMACHAL PRADESH'),
(16, 'JAMMU & KASHMIR'),
(17, 'WEST RAJASTHAN'),
(18, 'EAST RAJASTHAN'),
(19, 'WEST MADHYA PRADESH'),
(20, 'EAST MADHYA PRADESH'),
(21, 'GUJARAT REGION'),
(22, 'SAURASHTRA & KUTCH'),
(23, 'KONKAN & GOA'),
(24, 'MADHYA MAHARASHTRA'),
(25, 'MATATHWADA'),
(26, 'VIDARBHA'),
(27, 'CHHATTISGARH'),
(28, 'COASTAL ANDHRA PRADESH'),
(29, 'TELANGANA'),
(30, 'RAYALSEEMA'),
(31, 'TAMIL NADU'),
(32, 'COASTAL KARNATAKA'),
(33, 'NORTH INTERIOR KARNATAKA'),
(34, 'SOUTH INTERIOR KARNATAKA'),
(35, 'KERALA'),
(36, 'LAKSHADWEEP');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_code` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_code`, `state_name`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`dist_code`),
  ADD KEY `dist_FK_1` (`state_code`);

--
-- Indexes for table `rainfall_regions`
--
ALTER TABLE `rainfall_regions`
  ADD PRIMARY KEY (`region_code`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rainfall_regions`
--
ALTER TABLE `rainfall_regions`
  MODIFY `region_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `dist_FK_1` FOREIGN KEY (`state_code`) REFERENCES `states` (`state_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
