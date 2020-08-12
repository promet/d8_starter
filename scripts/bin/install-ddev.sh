#!/bin/bash

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu bionic stable"
sudo apt update
sudo apt install docker-ce
sudo curl -L "https://github.com/docker/compose/releases/download/1.25.4/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
docker-compose --version
wget https://github.com/drud/ddev/releases/download/v1.15.1/ddev_linux.v1.15.1.tar.gz
tar vxzf ddev_linux.v1.15.1.tar.gz
sudo chmod +x ddev
sudo chmod +x mkcert
./mkcert -install
