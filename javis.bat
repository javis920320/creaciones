@echo off
set mydate=%date:~6,4%%date:~3,2%%date:~0,2%

c:\xampp\mysql\bin\mysqldump.exe -u root -p --password='' creaciones > c:\xampp\htdocs\%mydate%.sql