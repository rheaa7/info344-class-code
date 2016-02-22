#!/usr/bin/env bash

# use noninteractive mode since this is automated
# this will suppress prompts like the root password prompt
# that normally comes up when installing MySQL
export DEBIAN_FRONTEND=noninteractive

# suppress erroneous error messages from dpkg-preconfigure
rm /etc/apt/apt.conf.d/70debconf

# update the package index 
apt-get update

# install software-properties-common
# (gets us add-apt-repository command)
sudo apt-get install -y software-properties-common

# install Node.js v5.x
curl -sL https://deb.nodesource.com/setup_5.x | sudo bash -
apt-get install -y nodejs

# install build-essential for Node modules w/native code
sudo apt-get install -y build-essential

# allow Node.js servers to bind to low ports
sudo apt-get install -y chase libcap2-bin
sudo setcap cap_net_bind_service=+ep $(chase $(which node))

# install recent version of redis
sudo add-apt-repository -y ppa:rwky/redis
sudo apt-get update
sudo apt-get install -y redis-server

# set the loglevel for npm to show errors only
sudo npm config set loglevel error -g

# install the tsd utility for installing
# Visual Studio Code typings files
# gives statement completion and parameter hinting
sudo npm install -g tsd

#install mongo
sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 7F0CEB10
echo 'deb http://downloads-distro.mongodb.org/repo/ubuntu-upstart dist 10gen' | sudo tee /etc/apt/sources.list.d/mongodb.list
sudo -E apt-get update
sudo -E apt-get install -y mongodb-org

sudo apt-get install -y libkrb5-dev
