CREATE TABLE IF NOT EXISTS user (
  id int NOT NULL AUTO_INCREMENT,
  username varchar(50) NOT NULL,
  passhash varchar(300) NOT NULL,
  PRIMARY KEY (id)
);


INSERT INTO `user` (`username`, `passhash`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');