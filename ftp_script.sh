#!/bin/bash

# Define as variáveis de ambiente (pode ser feito usando argumentos ou variáveis de ambiente)
FTP_SERVER="ftp.diferencialandaimes.com.br"
FTP_USER="diferencialandai@web137.f1.k8.com.br"
FTP_PASSWORD="Dif181204#"

# Realiza a conexão FTP e executa os comandos
ftp -n $FTP_SERVER <<EOF
user $FTP_USER $FTP_PASSWORD
cd /caboataneassociados.com.br
ls