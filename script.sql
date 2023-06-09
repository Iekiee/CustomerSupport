drop database if exists CustomerSupport;
use CustomerSupport;
 
create table CustomerSupportData (
    Id          INT             NOT NULL AUTO_INCREMENT,
    Name        VARCHAR(50)    
    ,Email      VARCHAR(300)    NOT NULL
    ,Message    VARCHAR(500)    NOT NULL
)



