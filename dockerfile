FROM ubuntu:latest

RUN apt-get update && apt-get install -y ftp

RUN mkdir /ftp_data

WORKDIR /ftp_data

ENV FTP_USER "diferencialanda1@ftp.diferencialandaimes.com.br"
ENV FTP_PASSWORD "Dif181204#"

CMD 
