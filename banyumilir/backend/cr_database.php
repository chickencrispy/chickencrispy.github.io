<?php

include "mysql_connector.php";

// Membuat koneksi
$conn = new mysqli($serverhost, $dbuser, $dbpassword, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql="

CREATE TABLE `01_cfg_account` (
	`no` BIGINT(20) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`no`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;

CREATE TABLE `01_cfg_administration` (
	`no` INT(20) NOT NULL AUTO_INCREMENT,
	`company_id` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`account_email` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`bank` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`account_bank` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`payment_id` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`api_key` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`token_callback` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`no`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;

CREATE TABLE `01_cfg_cart` (
	`no` INT(20) NOT NULL AUTO_INCREMENT,
	`category_id` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`captain_select` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`captain_profile` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`additional_name` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`additional_price` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`no`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;

CREATE TABLE `01_cfg_category` (
	`category_id` INT(20) NOT NULL AUTO_INCREMENT,
	`company_id` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`category_name` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`image_category` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`background_category` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`index_category` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`category_id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=5
;

CREATE TABLE `01_cfg_company` (
	`id_company` INT(20) NOT NULL AUTO_INCREMENT,
	`compay_name` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`company_phone` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`company_address` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`company_latlong` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`company_video_display` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`id_company`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
;

CREATE TABLE `01_cfg_index_package` (
	`number_index` INT(20) NOT NULL AUTO_INCREMENT,
	`index_name` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`number_index`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=5
;

CREATE TABLE `01_cfg_package` (
	`number` BIGINT(20) NOT NULL AUTO_INCREMENT,
	`company_id` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`category_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`title_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`subtitle_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`price_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`additional_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`days_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`blacklist_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`ticket_perpackage` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`index_category` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`index_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`number`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=7
;

CREATE TABLE `01_payment` (
	`id_payment` INT(11) NOT NULL AUTO_INCREMENT,
	`name_payment` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`pos_name` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`id_payment`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=4
;

CREATE TABLE `02_captain` (
	`captain_id` INT(20) NOT NULL AUTO_INCREMENT,
	`captain_name` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`captain_phone` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`captain_image` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`captain_point` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`captain_rank` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`captain_index` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`captain_type` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`captain_desc` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`captain_id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
;

CREATE TABLE `02_member` (
	`number_access` INT(20) NOT NULL AUTO_INCREMENT,
	`guest_email` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`guest_phone` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`ticket_id` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`number_access`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;

CREATE TABLE `03_log_latlong` (
	`no` BIGINT(20) NOT NULL AUTO_INCREMENT,
	`captain_id` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`latlong` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`datetime` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`voucher_handle` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`no`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;

CREATE TABLE `03_ticket` (
	`no_reservation` BIGINT(20) NOT NULL AUTO_INCREMENT,
	`no_voucher` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`no_barcode` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`package_name` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`date_booking` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`date_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`price_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`type_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`additional_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`price_additional` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`price_total_package` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`payment_by` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`date_time_execution` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`captain_id` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`latlong_additional` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`status_confirm_admin` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`status_ticket` TEXT NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`no_reservation`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
;

";

// Menjalankan perintah SQL
if ($conn->multi_query($sql) === TRUE) {
    echo "Tabel berhasil dibuat.";
} else {
    echo "Kesalahan dalam membuat tabel: " . $conn->error;
}

// Menutup koneksi
$conn->close();


?>