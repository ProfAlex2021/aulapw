CREATE TABLE `pw3`.`tb_carro` (
    `codigo` INT NOT NULL AUTO_INCREMENT,
    `marca` VARCHAR(50) NOT NULL,
    `modelo` VARCHAR(50) NOT NULL,
    `ano` INT NOT NULL,
    PRIMARY KEY (`codigo`)
) ENGINE = InnoDB;

INSERT INTO
    `tb_carro` (`codigo`, `marca`, `modelo`, `ano`)
VALUES
--    (NULL, 'chevrolet', 'celta', '2004'),
--    (NULL, 'ford', 'ka', '2002'),
    (NULL, 'fiat', 'uno', '2009'),
    (NULL, 'volkswagen', 'fusca', '1975');