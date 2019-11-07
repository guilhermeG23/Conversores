#!/bin/sh
gs -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -dPDFSETTINGS=/screen -sColorConversionStrategy=Gray -dProcessColorModel=/DeviceGray -dNOPAUSE -dQUIET -dBATCH -sOutputFile=/var/www/html/saida.pdf $1
