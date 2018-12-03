# Ylenpbaf test

### Prerequisites

**Docker**: https://docs.docker.com/install/

> After the installation run `docker version` to check the version.
> Run `docker run hello-world` to verify that Docker can pull and run images.

### Run
After that, build your image:
```bash
docker build -t ylenpbaf .
```
```bash
docker run -d -p 8080:80 ylenpbaf
```
Now, visit: http://localhost:8080
