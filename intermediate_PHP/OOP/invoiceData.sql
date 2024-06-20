#
# TABLE STRUCTURE FOR: invoices
#

DROP TABLE IF EXISTS `invoices`;

CREATE TABLE `invoices` (
  `invoice_id` int(10) unsigned NOT NULL,
  `amount` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 134398, 8, 'Dr. Alize Jakubowski II');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (6, 281200925, 5, 'Dr. Monica Stehr I');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (2, 109, 8, 'Shannon Becker');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (9, 451, 6, 'Zakary Terry');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (7, 5, 5, 'Prof. Garnett Harvey Jr.');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 0, 2, 'Elliot Cassin');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (6, 49347648, 7, 'Aleen Frami');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 8, 8, 'Nakia Casper');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 10133830, 8, 'Nikko Armstrong V');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 253216348, 9, 'Otis Muller');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 1900, 3, 'Marjolaine Quitzon');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 57503, 5, 'Dudley Jerde Sr.');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 4163202, 1, 'Dr. Marianna Erdman');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 0, 1, 'Lyric Hand');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 227409, 1, 'Prof. Johan Wintheiser DVM');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (6, 59004962, 5, 'Jonathon Feeney Jr.');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 1651, 1, 'Gabriel Osinski');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 4, 4, 'Cade Sipes IV');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 162156939, 9, 'Grayce Terry');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 488115078, 1, 'Dolores Heathcote');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (4, 1, 9, 'Ford Kiehn');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (6, 0, 2, 'Ed Mraz');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (6, 4679451, 8, 'Dr. Kaylah Ziemann V');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (6, 10498050, 5, 'Spencer Funk II');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 15, 4, 'Angelina Oberbrunner');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 528134, 2, 'Berry Dickinson');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (4, 3, 9, 'Dr. Sienna Roberts');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (9, 4, 6, 'Prof. Lauretta Wuckert');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 0, 8, 'Floyd Durgan');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 1534, 7, 'Velva Durgan');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (2, 553129437, 4, 'Prof. Zetta Monahan II');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (4, 0, 9, 'Gilbert Schulist');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 4799134, 5, 'Dr. Omer Kessler');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (9, 26, 3, 'Juvenal Hintz III');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 3, 1, 'Vidal Macejkovic');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 190296994, 3, 'Claire Kohler');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 16, 9, 'Theodora Cummings');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 1079297, 2, 'Bernice Weimann II');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (9, 3086817, 4, 'Consuelo Swaniawski');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (7, 0, 6, 'Imogene Zulauf');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (2, 114, 9, 'Prof. Lesly DuBuque');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 3, 5, 'Jaren Padberg');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (4, 13, 8, 'Prof. Margaretta McLaughlin');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 4, 7, 'Gretchen Leffler');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 2853, 5, 'Aimee Blick');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 15564530, 4, 'Beau Hammes');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 7, 1, 'Miss Loyce Carroll');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 0, 7, 'Tremayne Nicolas I');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (2, 0, 1, 'Mr. Green Schoen');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (9, 12, 7, 'Julia Langworth');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 61067, 3, 'Mr. Friedrich Cole');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 6403490, 6, 'Prof. Charles Carroll');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 70327, 5, 'Dr. Josephine Herzog IV');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 192, 8, 'Lucile Dooley II');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 20, 5, 'Karlee Ward');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (4, 311, 6, 'Jerad Champlin');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (2, 56398, 9, 'Elsie Ziemann');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (6, 376, 4, 'Mr. Deonte Lubowitz I');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 445929783, 7, 'Ms. Kacie Hamill DVM');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 6, 1, 'Maryam Pagac Sr.');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (6, 218198545, 1, 'Dr. Josefa Shanahan');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (4, 1135506, 5, 'Mrs. Norma Corkery Jr.');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 0, 7, 'Aniyah Lindgren PhD');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (7, 239, 9, 'Ellie Heaney');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 0, 2, 'Prof. Dedric Rosenbaum');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 2, 5, 'Ms. Katharina Leuschke DVM');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (6, 8, 9, 'Alexandro Nolan MD');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 84, 3, 'Adela Funk III');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (2, 75668, 6, 'Dr. Toney Leffler');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (7, 1915731, 9, 'Shanie Smitham Jr.');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (4, 218434653, 7, 'Abagail Zulauf');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 283, 9, 'Bill Trantow');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 2296616, 2, 'Prof. Ross Mills III');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (2, 4183140, 4, 'Elta DuBuque');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (7, 214021, 6, 'Mrs. Ethelyn Sanford II');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (9, 1046, 1, 'Halle Predovic');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 130, 6, 'Prof. Alek Leannon');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (4, 10544881, 5, 'Shaun Bradtke');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (7, 245, 9, 'Juvenal Armstrong');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 0, 8, 'Melissa Bailey');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (1, 35386, 5, 'Prof. Narciso Reilly');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (2, 6561, 5, 'Lillie Stamm');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (2, 0, 7, 'Uriel Goodwin');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (7, 92103308, 6, 'Dr. Deontae Gusikowski PhD');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (4, 754052, 8, 'Ms. Bria Stoltenberg');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 123, 4, 'Haley Spencer');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 34647702, 1, 'Prof. Kaitlin Parker II');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 2800, 4, 'Gladyce Lebsack');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 0, 5, 'Barbara Krajcik');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (2, 49452280, 1, 'Nora Kreiger II');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 438649, 8, 'Mrs. Angelica Witting PhD');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 2176672, 4, 'Sterling Hagenes');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (3, 11, 8, 'Evert Wolf');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (4, 246862575, 5, 'Mr. Cicero Bosco IV');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (7, 0, 9, 'Allene Nader');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (9, 252103640, 8, 'Kendra Von I');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (9, 1925119, 9, 'Prof. Kiara Zieme IV');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (5, 231362784, 1, 'Trinity Carter');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 165677734, 3, 'Mr. Hillard Armstrong');
INSERT INTO `invoices` (`invoice_id`, `amount`, `user_id`, `full_name`) VALUES (8, 55076980, 8, 'Enos Adams MD');


