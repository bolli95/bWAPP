# bWAPP

Forked from raesene. The bug menu you are redirected to after filling out the login form has been replaced with simple html links to ease automated crawling of this site.

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

## Run the wepapp:
In order to run the container in docker execute the following command:

```
docker run -d -p 80:80 bwapp:1.0
```

Please note that you need to access `<ip>/install.php` to initialize the database before using the webapp for the first time.
