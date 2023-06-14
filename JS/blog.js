"use strict";

let searchblogs = [];

let blogPosts = [
    {
        title: "blog posting",
        link: "/HTML/single-post.html",
        date: "June 13 2023",
        src: "/IMG/webdev.png",
        content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
    },
    {
        title: "web development",
        date: "June 13 2023",
        link: "/HTML/single-post.html",
        src: "/IMG/webdev.png",
        content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
    },
    {
        title: "disigning",
        date: "June 13 2023",
        link: "/HTML/single-post.html",
        src: "/IMG/webdev.png",
        content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
    },
    {
        title: "Tech industry",
        date: "June 13 2023",
        link: "/HTML/single-post.html",
        src: "/IMG/webdev.png",
        content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
    },
    {
        title: "Communication",
        date: "June 13 2023",
        link: "/HTML/single-post.html",
        src: "/IMG/webdev.png",
        content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
    },
    {
        title: "5 best ai tools",
        date: "June 13 2023",
        link: "/HTML/single-post.html",
        src: "/IMG/webdev.png",
        content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
    },
    {
        title: "Tech industry",
        date: "June 13 2023",
        link: "/HTML/single-post.html",
        src: "/IMG/webdev.png",
        content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
    },
    {
        title: "Tech industry",
        date: "June 13 2023",
        link: "/HTML/single-post.html",
        src: "/IMG/webdev.png",
        content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
    }
];

showblogposts(blogPosts);

function showblogposts(blogPost) {
    document.getElementById('blog-postsc').innerHTML = "";
    for (let i = 0; i < blogPost.length; i++) {
        document.getElementById('blog-postsc').innerHTML += `
        <div id="posts" class="posts">
            <a href="${blogPost[i].link}">
                <div class="blog-img">
                    <img src="${blogPost[i].src}" alt="">
                </div>
                <div class="blog-text">
                    <h3>${blogPost[i].title}</h3>
                    <p>${blogPost[i].content}</p>
                    <div class="post-date-blog">
                        <span>Posted on ${blogPost[i].date}</span>
                        <span>Posted by -- Govind-Gour</span>
                    </div>
                </div>
            </a>
        </div>
        `
    }
}

document.getElementById('blog-search').addEventListener('keyup', function () {
    let text = document.getElementById('blog-search').value.toUpperCase();
    //    console.log(text)
    searchblogs = blogPosts.filter(function (a) {
        if (a.title.toUpperCase().indexOf(text) > -1) {
            // if(a.title.toUpperCase().includes(text)){
            return a.title;
        }
    });
    if (this.title.toUpperCase().indexOf(text) < -1) {
        // if(this.value == ""){
        showblogposts(blogPosts);
        // console.log(this)
    }
    else {
        if (searchblogs == "") {
            document.getElementById('error-heading').style.display = "block";
            document.getElementById('blog-postsc').innerHTML = "";
        }
        else {
            showblogposts(searchblogs);
            document.getElementById('error-heading').style.display = "none";
        }
    }
    // window.onload;
})


// let blogPosts2 = [
//     {
//         title: "blog posting",
//         link: "/HTML/single-post.html",
//         date: "June 13 2023",
//         src: "/IMG/webdev.png",
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "web development",
//         date: "June 13 2023",
//         link: "/HTML/single-post.html",
//         src: "/IMG/webdev.png",
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "disigning",
//         date: "June 13 2023",
//         link: "/HTML/single-post.html",
//         src: "/IMG/webdev.png",
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
// ]


// recent posts fun ----> 
showrecentblogposts(blogPosts)
function showrecentblogposts(blogPost) {
    for (let i = 0; i < blogPosts[3]; i++) {
        document.getElementById('recent-blog').innerHTML += `
        <div class=" recent-blog-posts">
            <a href="${blogPost[i].link}">
                <div class="recent-blog-img">
                    <img src="${blogPost[i].src}" alt="">
                </div>
                <div class="recent-blog-text">
                    <h3>${blogPost[i].title}</h3>
                    <p>${blogPost[i].content}</p><a href="${blogPost[i].link}" class="services-card-btn">Read-More</a>
                    <span>Posted on ${blogPost[i].date}</span>
                </div>
            </a>
    </div>
        `
    }
}


// singleblogpost(blogPosts);

// function singleblogpost(blogPost) {
//     document.getElementById('blog-posts').innerHTML = "";
//     for (let i = 0; i < blogPost.length; i++) {
//         document.getElementById('blog-posts').innerHTML += `
//         <div id="posts" class="posts">
//             <a href="${blogPost[i].link}">
//                 <div class="blog-img">
//                     <img src="${blogPost[i].src}" alt="">
//                 </div>
//                 <div class="blog-text">
//                     <h3>${blogPost[i].title}</h3>
//                     <p>${blogPost[i].content}</p>
//                     <div class="post-date-blog">
//                         <span>Posted on ${blogPost[i].date}</span>
//                         <span>Posted by -- Govind-Gour</span>
//                     </div>
//                 </div>
//             </a>
//         </div>
//         `
//     }
// }