#
# TABLE STRUCTURE FOR: invoices_table
#

DROP TABLE IF EXISTS `invoices_table`;

CREATE TABLE `invoices_table` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`invoice_id`),
  CONSTRAINT `chk_status` CHECK (`status` in (1,2,3,4))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

