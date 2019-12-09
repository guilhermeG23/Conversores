#!/bin/sh

#Instalacoes
#apt update && apt install ffmpeg -y && apt install ghostscript -y && apt install php7.0 -y && apt install apache2 -y && apt install vim -y && apt install openssh -y

#Exemplo do GS
#gs -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -dPDFSETTINGS=/screen -sColorConversionStrategy=Gray -dProcessColorModel=/DeviceGray -dNOPAUSE -dQUIET -dBATCH -sOutputFile=/var/www/html/saida.pdf $1

#Criar diretorio no DVR
cd DVR
mkdir trabalho
mkdir arquivos
chmod 777 trabalho
chmod 777 arquivos
cp -r ../funcoes/index-dir.php trabalho/index.php
cp -r ../funcoes/index-dir.php arquivos/index.php
cd ..

#Criar diretorio no PDF 
cd PDF
mkdir trabalho
mkdir arquivos
chmod 777 trabalho
chmod 777 arquivos
cp -r ../funcoes/index-dir.php trabalho/index.php
cp -r ../funcoes/index-dir.php arquivos/index.php
cd ..
