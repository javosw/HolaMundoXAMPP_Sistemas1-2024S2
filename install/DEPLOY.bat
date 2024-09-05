@echo off
set DEV_DIR=C:\Users\Javier_Oswaldo\Desktop\SISTEMAS-1\HOLA-MUNDO\app
set XAMPP_DIR=C:\xampp\htdocs\holaMundo
robocopy %DEV_DIR% %XAMPP_DIR% /mir /z /xd .git
set MEDIA_DIR=C:\Users\Javier_Oswaldo\Desktop\SISTEMAS-1\HOLA-MUNDO\media
set MEDIA_XAMPP_DIR=C:\xampp\htdocs\media
robocopy %MEDIA_DIR% %MEDIA_XAMPP_DIR% /mir /z /xd .git

