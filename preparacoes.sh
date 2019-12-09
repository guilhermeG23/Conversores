#!/bin/sh

#Instalacoes
#apt update && apt install ffmpeg -y && apt install ghostscript -y && apt install php7.0 -y && apt install apache2 -y && apt install vim -y && apt install openssh -y

#Criar diretorio 
mkdir trabalho
mkdir arquivos
chmod 777 trabalho
chmod 777 arquivos
cp -r funcoes/index-dir.php trabalho/index.php
cp -r funcoes/index-dir.php arquivos/index.php
