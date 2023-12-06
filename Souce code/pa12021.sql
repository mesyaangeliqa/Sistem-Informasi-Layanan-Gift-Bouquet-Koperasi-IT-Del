/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : pa12021

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 10/06/2022 11:29:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for carts
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `carts_id_product_foreign`(`id_product`) USING BTREE,
  INDEX `carts_id_user_foreign`(`id_user`) USING BTREE,
  CONSTRAINT `carts_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `carts_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carts
-- ----------------------------

-- ----------------------------
-- Table structure for critics
-- ----------------------------
DROP TABLE IF EXISTS `critics`;
CREATE TABLE `critics`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `critic` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `critics_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `critics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of critics
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2022_04_28_173100_create_product_categories_table', 1);
INSERT INTO `migrations` VALUES (4, '2022_04_28_173147_create_products_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_05_10_083219_create_profiles_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_05_11_140733_create_critics_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_05_16_061942_create_cart_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_05_16_062719_create_order_table', 1);
INSERT INTO `migrations` VALUES (9, '2022_05_16_062743_create_orders_detail_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_05_16_062803_create_review_table', 1);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `orders_order_number_unique`(`order_number`) USING BTREE,
  INDEX `orders_id_user_foreign`(`id_user`) USING BTREE,
  CONSTRAINT `orders_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for orders_details
-- ----------------------------
DROP TABLE IF EXISTS `orders_details`;
CREATE TABLE `orders_details`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_order` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `orders_details_id_order_foreign`(`id_order`) USING BTREE,
  INDEX `orders_details_id_product_foreign`(`id_product`) USING BTREE,
  CONSTRAINT `orders_details_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_details_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders_details
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for product_categories
-- ----------------------------
DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE `product_categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_product_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_categories
-- ----------------------------
INSERT INTO `product_categories` VALUES (1, 'Doll Bouquet', '2022-06-10 03:13:54', '2022-06-10 03:13:54');
INSERT INTO `product_categories` VALUES (2, 'Snack Bouquet', '2022-06-10 03:14:48', '2022-06-10 03:14:48');
INSERT INTO `product_categories` VALUES (3, 'Money Bouquet', '2022-06-10 03:35:03', '2022-06-10 03:35:03');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_product_category` bigint(20) UNSIGNED NOT NULL,
  `image_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_product` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `products_id_product_category_foreign`(`id_product_category`) USING BTREE,
  CONSTRAINT `products_id_product_category_foreign` FOREIGN KEY (`id_product_category`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Polcie Doll', 1, 'product/AGuhrgZvwF4C7Mk5jIgD4VUJcm5nSCQQJlHrRkVN.jpg', '200000', '<p>Bouquet ini bisa request kapan pun selama barang masih ready. Komponen yang digunakan yakni boneka teddy bear, mawar putih, kertas coklat</p>', 'Published', '2022-06-10 03:14:31', '2022-06-10 03:14:31');
INSERT INTO `products` VALUES (2, 'ChiGodti', 2, 'product/VhktNDgGWMtjYl2VQPLc9w5ohAcPBIIQrocrEWa3.jpg', '30000', '<p>Bouquet ini bisa request kapan pun selama barang masih ready. Komponen yang digunakan yakni boneka teddy bear, mawar putih, kertas coklat</p>', 'Published', '2022-06-10 03:15:43', '2022-06-10 03:15:43');
INSERT INTO `products` VALUES (3, 'Stitch Doll', 1, 'product/X2yPQB1FwYtuQVfg9ry9jm9bvJOQpCqvYhzVG1uR.jpg', '50000', '<p>Cocok untuk hadiah wisuda, valentine, ulang tahun, anniversary.&nbsp;</p><p>Rincian :</p><ol><li>Tinggi 50 cm</li><li>Boneka bisa direquest</li><li>Pengerjaan satu hari&nbsp;</li></ol><p>Free kartu ucapan</p>', 'Published', '2022-06-10 03:16:14', '2022-06-10 03:16:14');
INSERT INTO `products` VALUES (4, 'Bear Couple Doll', 1, 'product/GlfZTcUmo6Rn5goDLV8NChnMytN4XkoARW1bbNvQ.jpg', '40000', '<p>Komponen antara lain boneka teddy bear, planel bunga matahari</p>', 'Published', '2022-06-10 03:16:43', '2022-06-10 03:16:43');
INSERT INTO `products` VALUES (5, 'Snack Blue', 2, 'product/puXA83DYEXUTZVSbN0MYOGWoUV4fRlemacHgNxEr.jpg', '20000', '<p>Komponen terdiri dari beberapa snack seperti susu kotak ultramilk, pillows, keju cake. Waktu pengerjaan 2 jam langsung kirim setelah dipesan</p>', 'Published', '2022-06-10 03:18:07', '2022-06-10 03:19:41');
INSERT INTO `products` VALUES (6, 'CiCheetos', 2, 'product/lYnPnVPRKtGUTBzMKaZH3oGUZIj6MZXp1qCd5r9T.jpg', '33000', '<p>Item yang di dalam bouquet ini adalah chiki ball, chitato, Cheetos</p>', 'Published', '2022-06-10 03:20:53', '2022-06-10 03:20:53');
INSERT INTO `products` VALUES (7, 'Crazy Rich Money Bouquet', 3, 'product/xMa5HzwZebAZLJSuocMukjrOVzYozDJvceTJhGgr.jpg', '500000', '<p>Berisi uang kertas yang dihias dengan bunga baby’s breath</p>', 'Published', '2022-06-10 03:36:02', '2022-06-10 03:36:02');
INSERT INTO `products` VALUES (8, 'Billionaire Money Boquet', 3, 'product/l7K7RviKoMhzGe7LUVjSFUrVyMZyn3Y9fpfsNfaH.jpg', '1000000', '<p>Berisi uang kertas dihias dengan bunga baby breath dapat diisi dengan 20 lembar, 25 lembar, 50 lembar, maupun 75 lembar uang</p>', 'Published', '2022-06-10 03:51:18', '2022-06-10 03:51:18');
INSERT INTO `products` VALUES (9, 'ChoCho', 2, 'product/WLUQSATykQpgzsEBUqIHDLYeU9MdgsPDFtdqSWfi.jpg', '30000', '<p>Item terdiri dari silver queen, French fries, better, good time, nabati beng-beng, pocky. Anda berikan kepada orang yang anda cintai</p>', 'Published', '2022-06-10 04:28:19', '2022-06-10 04:28:19');

-- ----------------------------
-- Table structure for profiles
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key_meta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `profiles_phone_unique`(`phone`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of profiles
-- ----------------------------

-- ----------------------------
-- Table structure for reviews
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `review` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `reviews_id_user_foreign`(`id_user`) USING BTREE,
  INDEX `reviews_id_product_foreign`(`id_product`) USING BTREE,
  CONSTRAINT `reviews_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `reviews_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reviews
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Administrator', 'admin@giftbouquet.com', 'admin', 'admin', '081361432123', NULL, '$2y$10$Jw17ANl/f93cgX9ZdMsTFOZIDj6Lha53KdnajjswiASBYCiOF5DSa', NULL, '2022-06-10 03:13:00', '2022-06-10 03:13:00');
INSERT INTO `users` VALUES (2, 'SamuelSiahaan', 'samuel@admin.com', 'SamuelSiahaan', 'admin', '082272944107', NULL, '$2y$10$VyYjjX.MNEjQZccdfDucru2IozYjn.AF42KbzA3uVYLnp8IrEpcPy', NULL, '2022-06-10 03:13:00', '2022-06-10 03:13:00');
INSERT INTO `users` VALUES (3, 'user', 'user@user.com', 'user', 'user', '082161782942', NULL, '$2y$10$5XkI3NepWDCS54FbXornsuDiDKi2p9RPftw4KF4hRbR8UK1mhY476', NULL, '2022-06-10 03:13:00', '2022-06-10 03:13:00');

SET FOREIGN_KEY_CHECKS = 1;
