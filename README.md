# bWAPP

Merely a fork from raesene. The bug menu after the login form has been replaced by simple html links to simplify the automated crawling of this website. 

This is just an instance of the OWASP [bWAPP project](http://www.itsecgames.com/) as a docker container.

The container is based on [tutum/lamp](https://hub.docker.com/r/tutum/lamp/)

## Installation:

First clone this repo using the following command:

```
git clone git@github.com:bolli95/bWAPP.git
```

After that navigate to the cloned directory and build the dockerimage: 

```
cd bWAPP
docker build --tag bwapp:1.0 .
```

## Run docker image:
In order to run the container in docker execute the following command:

```
docker run -d -p 80:80 bwapp:1.0
```

Please note that before the first use you have to visit `<ip>/install.php` to initialize the database.
