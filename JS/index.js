'use strict';

// const headings = [
//     "Coder",
//     "Developer",
//     "Freelancer",
//     "Blogger",
//     "Designer",
//     "SEO_Expert"
// ]

// const headingele = document.getElementById("heading");
// const headingele2 = document.getElementById("logo");
// // console.log(headingele)
// let headingindex = 0;
// let charindex = 0;

// function type() {
//     if (headingindex < headings.length) {
//         if (charindex < headings[headingindex].length) {
//             headingele.innerHTML += headings[headingindex].charAt(charindex);
//             charindex++;
//             setTimeout(type, 100);
//         } else {
//             setTimeout(change, 1000);
//         }
//     }else{
//         headingindex = 0;
//         setTimeout(type, 1000);
//     }
// }

// function change() {
//     if (charindex >= 0) {
//         const currentheading = headings[headingindex];
//         headingele.innerHTML = currentheading.substring(0, charindex);
//         charindex--;
//         setTimeout(change, 50);
//     } else {
//         headingindex++;
//         setTimeout(type, 500);
//     }
// }

// type();


//   ------->     responsive navbar

// let ham = document.getElementsByClassName(".ham-nav");
function resnav() {
    let navbar2 = document.getElementById("icon-nav");
    let navbar = document.getElementById("navbar");
    let lis = document.getElementsByClassName("liclas");
    navbar2.classList.toggle('responsive-navbar');
    navbar.classList.toggle('responsive-lis');
    // lis.style.display = "block";
    // .toggle('responsive-lis');
    // console.log(lis);
};



"use strict";

// let searchblogs = [];

// let blogPosts = [
//     {
//         title: "blog posting",
//         date: "June 13 2023",
//         id: 1,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "web development",
//         date: "June 13 2023",
//         id: 2,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "disigning",
//         date: "June 13 2023",
//         id: 3,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "Tech industry",
//         date: "June 13 2023",
//         id: 4,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "Communication",
//         date: "June 13 2023",
//         id: 5,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "5 best ai tools",
//         date: "June 13 2023",
//         id: 6,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "Tech industry",
//         date: "June 13 2023",
//         id: 7,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "10 New Twchnolgys ?",
//         date: "June 15 2023",
//         id: 8,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "How to set a variable in CSS ?",
//         date: "June 15 2023",
//         id: 9,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "How to set a variable in HTML ?",
//         date: "June 15 2023",
//         id: 10,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "7 Facts About JS",
//         date: "June 15 2023",
//         id:11 ,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     },
//     {
//         title: "Tech industry",
//         date: "June 13 2023",
//         id: 12,
//         src: 'http://localhost/cwdportfolio/IMG/webdev.png',
//         content: "Welcome to my blog! Dive into a world of captivating stories insightful articles practical tips"
//     }
// ];

  
// function showblogposts(blogPost) {
//     document.getElementById('blog-postsc').innerHTML = "";
//     for (let i = 0; i < blogPost.length; i++) {
//         document.getElementById('blog-postsc').innerHTML += `
//         <div id="posts" class="posts">
//             <a id="blog-href" href="">
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




// function searchpost() {
//     document.getElementById('blog-search').addEventListener('keyup', function () {
//         let text = document.getElementById('blog-search').value.toUpperCase();
//         //    console.log(text)
//         searchblogs = blogPosts.filter(function (a) {
//             // if (a.title.toUpperCase().indexOf(text) > -1) {
//                 if(a.title.toUpperCase().includes(text)){
//                 return a.title;
//             }
//         });
//         if (this.title.toUpperCase().indexOf(text) < -1) {
//             // if(this.value == ""){
//             showblogposts(blogPosts);
//             // console.log(this)
//         }
//         else {
//             if (searchblogs == "") {
//                 document.getElementById('error-heading').style.display = "block";
//                 document.getElementById('blog-postsc').innerHTML = "";
//             }
//             else {
//                 showblogposts(searchblogs);
//                 document.getElementById('error-heading').style.display = "none";
//             }
//         }
//         // window.onload;
//     })

// }

// showrecentblogposts(blogPosts)
// function showrecentblogposts(blogPost) {
//     for (let i = 1; i < 5; i++) {
//         document.getElementById('recent-blog').innerHTML += `
//         <div class=" recent-blog-posts">
//             <a href="${blogPosts[i].link}">
//                 <div class="recent-blog-img">
//                     <img src="${blogPosts[i].src}" alt="">
//                 </div>
//                 <div class="recent-blog-text">
//                     <h3>${blogPosts[i].title}</h3>
//                     <p>${blogPosts[i].content}</p>
//                     <div class="recent-blog-date">
//                         <a href="" class="recent-blog-btn">Read-More</a>
//                         <span>Posted on ${blogPosts[i].date}</span>
//                     </div>
//                 </div>
//             </a>
//     </div>
//         `
// }
// }


// singleblogpost(blogPosts);

// function singleblogpost(blogPost) {
//     for (let i = 0; i < 1 ; i++) {
//         document.getElementById('single-post-page').innerHTML += `
//         <h2>${blogPosts[i].title}</h2>
//         <div class="date-author">
//             <span class="author-name">Posted by -- Govind-Gour</span><span class="blog-date">Published on ${blogPosts[i].date}</span>
//         </div>
//         <div class="single-page-img">
//             <img src="${blogPosts[i].src}" alt="">
//         </div>
//         <div class="single-page-content">
//             <p>${blogPosts[i].content}</p>
//         </div>
//         <div class="single-page-share">
//             <h4>Socialize with Social</h4>
//             <div class="single-page-icons">
//                 <a href=""><img src="" alt="Facebook.com"></a>
//                 <a href=""><img src="" alt="google.com"></a>
//                 <a href=""><img src="" alt="twitter.com"></a>
//                 <a href=""><img src="" alt="instagram.com"></a>
//                 <a href=""><img src="" alt="Linkedin.com"></a>
//             </div>
//         </div>
//         `
//     }
// }

