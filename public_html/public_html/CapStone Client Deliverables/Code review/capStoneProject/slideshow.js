"use strict";
var $ = function (id) { return document.getElementById(id); };

var imageCache = [];
var imageCounter = 0;
var timer;

var runSlideShow = function() {
    imageCounter = (imageCounter + 1) % imageCache.length;
    var image = imageCache[imageCounter];
    $("image").src = image.src;
};

window.onload = function () {
    var listNode = $("image_list");    // the ul element
    var links = listNode.getElementsByTagName("a");


    var i, link, image;
    for ( i = 0; i < links.length; i++ ) {
        link = links[i];
        image = new Image();
        image.src = link.getAttribute("href");
        imageCache[imageCache.length] = image;
    }
    timer = setInterval(runSlideShow, 2000);
};