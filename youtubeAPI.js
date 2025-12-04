fetch("https://youtube.googleapis.com/youtube/v3/search?part=snippet&channelId=UCY1iN9fT5gG7sG3oAAkkQtQ&key=AIzaSyAsm9WP4Ixdw6IQQqgiJiMt3eUm9Snil3E")
.then((info)=> {
    return info.json();
})
.then((data)=>{
    //store videos in a variable
    let videos = data.items;
//store the HTML element with chosen class
    let videoContainer = document.querySelector(".video-container");
for(video of videos){
        videoContainer.innerHTML += `<img src = "${video.snippet.thumbnails.default.url}"  alt = "Video Thumbnail">`
    }
});
