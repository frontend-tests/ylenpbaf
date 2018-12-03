# Ylenpbaf test

## To Do list:

 - [x] ~~Make a mockup of the attachment "boceto_frontend.jpg" using an html file and another css file.~~
 - [x] ~~Add to the menu of the previous exercise a drop-down menu in "Productos" with the sub-items "Pantalones, Remeras, Camperas" (without using Javascript).~~
 - [x] ~~**Add Javascript to the previous exercise to make the following happen:**~~
 - [x] ~~By clicking on the "Start" button, all content items disappear~~
 - [x] ~~When hovering in the "Compras" button, change the color of the sidebar, and when doing mouseleave, return to the original color.~~
 - [x] ~~By clicking on the "Nosotros" button the text "Hola Mundo!" Will be added to the sidebar.~~
 - [x] ~~Generate the submenus for the "Productos" button by iterating the data of the attached arrays, both in php and in js.~~

### Prerequisites

**Git**:
 > After the installation run `git version` to check the version.

**Docker**: https://docs.docker.com/install/

> After the installation run `docker version` to check the version.
> Run `docker run hello-world` to verify that Docker can pull and run images.

### RunM
After that, build your image:
```bash
docker build -t ylenpbaf .
```
```bash
docker run -d -p 8080:80 ylenpbaf
```
Now, visit: http://localhost:8080

If everything goes well you should see something like this:

![https://media.giphy.com/media/9r8MeQCezlQaHnhZ59/giphy.gif](https://media.giphy.com/media/9r8MeQCezlQaHnhZ59/giphy.gif)
