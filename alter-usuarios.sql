ALTER TABLE `blog`.`usuarios` 
ADD COLUMN `codigo` VARCHAR(32) NULL AFTER `idade`;

UPDATE `blog`.`usuarios` SET `codigo`='rehwtnbbvmngfjtgjgf' WHERE `id`='1';
UPDATE `blog`.`usuarios` SET `codigo`='jhgfnbgfngf hngfjg' WHERE `id`='2';
UPDATE `blog`.`usuarios` SET `codigo`='fghdgfngfnbgf' WHERE `id`='3';
UPDATE `blog`.`usuarios` SET `codigo`='fdhsfmhgjtyjmjghjghj' WHERE `id`='4';
UPDATE `blog`.`usuarios` SET `codigo`='hftdrejutynghf' WHERE `id`='6';

