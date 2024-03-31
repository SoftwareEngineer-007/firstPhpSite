First steps in PHP

My first project

************************************************
Simplest Docker compose (finished image)

version: '3'

services:
  php:
    image: php:8-cli
    volumes:
      - ./:/app
    ports:
      - 8000:8000
    command: php -S 0.0.0.0:8000 -t /app

*************************************************