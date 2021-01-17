Blood Bank
Users-> Hospitals and Recievers
Pages-> 1.Registration for Hospitals and Recievers
        2.Login For Hospitals and Recievers
        3.Blood Info Page By Hospitals
        4.Available blood sample page
        5.view requests page

    1. Registration Page for Hospitals
        Name, Address, Email, Phone Number, State, Country, Password
    
    2. Registration Page for Recievers
        Name, Address, Email, Phone Number, State, Country, Password, Blood Group, Age, Gender, Date Of Birth, Height, Weight
    
    3. Login (for Hospitals and Recievers)
        Select Login, Email, Password

    4. Blood Info By Hospitals
        Blood Group, Availablity, Donor info, Quantity

    5. Available Blood Sample Page
        Blood Group, Bl


        Hospital table
        create table hospital(id int auto_increment primary key,hospname varchar(30),hospcont int(10),hospaddr varchar(30),hospemail varchar(30),hosppass varchar(30));
        
        Add Blood table
        create table addblood(bid int auto_increment primary key,a_hospname varchar(30),a_hospcont int(10),a_hospaddr varchar(30),a_bldgrp varchar(5),a_cap int,a_date date,hospid int,foreign key(hospid) references hospital(id));

        Receiver table
        create table receiver(rid int auto_increment primary key,rec_name varchar(30),rec_cont int(10),rec_addr varchar(30),rec_age int,rec_bldgrp varchar(5),rec_bdate date,rec_gender varchar(10),rec_email varchar(30),rec_pass varchar(30));

        