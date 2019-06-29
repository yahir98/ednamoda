CREATE SCHEMA `ednamodadb` ;
CREATE USER 'edna'@'%' IDENTIFIED WITH mysql_native_password BY 'ghost98';
GRANT ALL ON ednamodadb.* TO 'edna'@'%';
