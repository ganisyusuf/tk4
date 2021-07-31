CREATE TABLE `user` (
  `id` varchar(10) UNIQUE,
  `name` varchar(50),
  `phone_number` varchar(15),
  `email` varchar(50),
  `password` varchar(32),
  `is_active` boolean
);

CREATE TABLE `role` (
  `role_id` varchar(10) UNIQUE,
  `user_id` varchar(10),
  `role_name` varchar(50)
);

ALTER TABLE `role` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
