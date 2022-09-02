<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <style>
    .admin-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-left: 20px;
        padding-right: 20px;
    }

    .admin-heading h1 {
        text-transform: capitalize;
        color: #fff;
    }

    .logout-btn a {
        background-image: linear-gradient(to bottom, #006B5E, #000000);
        color: #fff;
        padding: 10px 20px;
        transition: all 0.3s;
        font-size: 20px;
        border-radius: 8px;
    }

    .logout-btn a:hover {
        background-image: linear-gradient(to top, #006B5E, #000000);

    }

    .discripition input {
        display: flex;
        flex-direction: column;
        padding: 10px 50px;
        border-radius: 12px;
        width: max-content;
        margin: auto;
        align-items: center;
        color: #fff;
        text-align: center;
        background-color: #0068fe;
        cursor: pointer;

    }

    .btns.vol {
        display: flex;
        width: 100%;

    }

    .btns.vol .btn1 {
        background: #f49800;
        margin: 0 10px;
        cursor: pointer;
    }

    .vol .btn2 {
        background: #be1200;
        margin: 0 10px;
        cursor: pointer;

    }

    /* video page */
    .main-video {
        padding: 0 25px;
        flex-wrap: wrap;
        justify-content: space-between
    }

    .main-video .video1 {
        width: calc(50% - 40px);
        align-items: start;
    }

    .main-video .video1 video {
        padding: 10px;
        max-width: 400px;
        width: 100%;
    }

    .main-video .video1>div {
        width: 50%;
    }

    .video-content {
        padding: 0 15px;
    }

    .other-videos .video {
        width: calc(25% - 20px);
        margin: 15px 0
    }

    .other-videos {
        display: flex;
        flex-wrap: wrap;
    }

    .other-videos video {
        width: 100%;
    }

    .other-videos {
        padding: 0 10px;
    }

    /* ----latest news--------- */
    .latest-news-f .covid-19 .covid-img {
        position: relative;
    }

    .latest-news-f .covid-19 .covid-content {
        top: auto;
        bottom: 10px;

    }

    .latest-news-f .covid-19 {
        position: static;
    }

    .latest-news-f .covid-19 .covid-content p {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    .latest-news-f .covid-19 .out-of-school {
        margin-top: 15px;
        overflow: hidden;
        overflow: hidden;
    }

    .latest-news-f .out-of-school {
        margin-bottom: 0;
        justify-content: start;
    }

    .latest-news-f .out-of-school p {
        margin-left: 15px;

    }

    .latest-news-f .supply-things .supply-1 img {
        height: 100%;
        width: 100%;
    }

    .latest-news-f .supply-things .supply-1 {
        overflow: hidden;
        height: 180px;
        margin-bottom: 20px
    }

    .latest-news-f .supply-things .supply-img {
        width: 200px;
        height: 100%;
    }


    .latest-news-f .supply-things .supply-img-content {
        width: calc(100% - 230px)
    }

    .latest-news-f .weekly-news-content {
        justify-content: start;
        flex-wrap: wrap;
    }

    .latest-news-f .weekly-news-content>div {
        width: calc(25% - 20px);
        margin: 10px 10px;
    }

    .latest-news-f .trending-news {
        padding: 20px 0 50px;
    }

    .latest-news-f .covid-19 .covid-content p {
        padding: 0 15px;
    }

    .weekly-news-content {
        padding: 0 25px 35px;
    }

    .covid-19 {
        height: 100%;
    }

    /* -------founder----- */
    .main-founder {
        display: flex;
        justify-content: space-between;
        max-width: 1150px;
        width: 100%;
        margin: 0 auto;
    }

    .main-founder>div {
        width: calc(50% - 20px);
    }

    .founder-img {
        margin-top: 10px
    }

    .our-founder {
        position: static;
    }

    .founder {
        position: relative;
    }

    .founder-content {
        max-width: 400px;
        top: auto;
        bottom: -60px;
        height: 150px;
        left: auto;
        right: 10px;
        display: flex;
        flex-direction: column;
    }

    .founder-content a {
        margin-top: auto;
    }

    .founder-content p {
        overflow: hidden;
        margin-top: 7px;
        height: 65px
    }

    /* --------homepage------- */
    /* nav {
        height: 100%;
        min-height: 750px;
    } */

    .mang-person img {
        min-width: 100px;
        width: 100px;
        height: 100px;
        max-width: 100%;
    }

    .content-imgs img {
        margin: 20px 0
    }

    /* -------vol form----- */
    .main-div .pic input {
        border: 5px solid #fff;
        padding: 10px
    }

    .v-form-det p{
    font-size: 24px;
}

.v-form-det h1{
    font-size: 27px;
}

    .v-form-det {
        position: relative;
    }

    .v-form-det img {
        position: absolute;
        right: 20px;
        width: 100%;
        max-width: 200px;
    }

    .r-content-main {
        width: 100%;
    }

    .admin-home {
        margin-bottom: 20px;
    }

    .admin-home h1 {
        font-size: 40px;
    }

    .nav-pic {
        height: 350px
    }

    .nav-pic::after {
        height: 350px
    }

    .nav-pic img {
        height: 350px
    }

    .nav-content.nav-for-hero {
        position: relative;
    }

    /* ---founder------ */
    .main-founder {
        padding: 20px 15px
    }

    /* ----heading--- */
    .heading {
        top: 20%;
        font-size: 50px;
    }

    /* ------admin---- */
    .logout-btn {
        display: flex
    }

    .admin-heading {
        height: 70px;
        padding: 0 20px;
    }

    input[type=file] {
        font-size: 12px
    }

    input {
        font-size: 14px
    }

    .feedback-input {
        margin-bottom: 0
    }

    #button-blue {
        border: 2px solid #00ff62;
        font-size: 18px !important;
    }

    #button-blue:hover {
        color: #00ff62;
    }

    #button-blue1 {
        border: 2px solid #000;
    }

    #button-blue1:hover {
        background: #000;
    }

    textarea {
        resize: none
    }

    .r-content-main {
        border: none;
    }

    /* ----blog-home--- */
    .blog-home .blog-img1 {
        width: calc(33.33% - 20px);
        margin-right: 20px;
    }

    .blog-home .blog-img1:last-child {
        margin-right: 0px;
        width: calc(33.33% - 20px);
    }

    .blog-home .blog-img {
        padding: 0 15px;
        flex-wrap: wrap;
    }

    .blog-home .blog-img img {
        width: 100%;
        height: 100%;
        border-radius: 20px;
    }

    .blog-home .blog-img-content-a {
        top: auto;
        bottom: 10px;
        left: auto;
        right: 15px;
    }

    .blog {
        margin: 55px 0px;
    }

    /* -------full-blog------ */
    .f-blog-m {
        padding: 0 20px;
    }

    .f-blog-m .nav-pic {
        height: 368px;
    }

    .f-blog-m .nav-pic img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 0;

    }


    .f-blog-m .full-blog-writer {
        display: flex;
        align-items: center
    }

    .f-blog-m .p-by img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50px;
        object-position: top
    }

    .f-blog-m .p-by:last-child {
        width: 70px;
        height: 70px;
        margin-left: 10px
    }

    .f-blog-m .exercise-blog-content {
        padding: 0
    }


    .f-blog-m .exercise-blog1-img img {
        max-width: 100%;
        width: 100%;

    }

    .f-blog-m .exercise-blog1-img {
        width: 100%;
        padding: 0 15px;
    }

    .about-m .about-content h1 {
        background: rgba(203, 203, 203, 0.4);
        padding: 4px 20px;
    }

    .about-m .about-content p {
        padding: 10px 10px;
    }

    .about-m .about {
        max-width: 1200px;
        margin: 0 auto;
    }

    .about-m .about1 {
        margin: 0;
    }

    .about-m .about-content {
        width: calc(100% - 300px);
        max-width: 600px;
        height: 100%;
    }

    .about-m .about-img {
        max-width: 250px;
        height: 250px;
    }

    .about-m .about-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .nav-index {
        height: 100%;
        min-height: 100vh;
    }

    nav {
        padding: 0 15px;
    }

    .index-main-navbar {
        position: relative
    }

    .index-main-navbar .content-data {
        top: auto;
        bottom: 50%;
    }

    .index-main-navbar .content-icons {
        bottom: 2%;
        top: auto;
        left: auto;
        right: 2%;
    }

    nav ul {
        margin-right: 0
    }

    label.logo {
        padding: 0
    }

    /* ----------responsive dashboard-------- */
    aside {
        height: 100%;
    }

    aside .overflow-y-auto {
        height: 100%;
        min-height: 100vh
    }

    .mbl-aside {
        display: none;
    }

    /* ---------cross-btn--  */
    .desk-aside .cross {
        display: none;
        position: absolute;
        width: 22px;
        height: 22px;
        right: 15px;
        top: 20px;
    }

    .desk-aside .cross img {
        width: 100%;
        cursor: pointer;
        transition: all 0.3s;
    }

    .desk-aside .cross img:hover {
        opacity: 0.9;
    }

    /* ---------toggler---- */
    .mbl-aside .toggler {
        width: 40px;
        height: 40px;
    }

    .mbl-aside .toggler img {
        width: 100%;
        cursor: pointer;
        transition: all 0.3s;
    }

    .mbl-aside .toggler img:hover {
        opacity: 0.9;
    }

    /* ----mbl-sidebar-styling--- */


    .mbl-aside ul {
        margin-top: 5px;
    }

    .mbl-aside li {
        margin: 0px auto 30px;
    }

    .mbl-aside li a {
        padding: 12px 0;
        display: flex;
        justify-content: center;
    }

    .mbl-aside svg {
        width: 34px !important;
        height: 34px !important;
    }

    /* -==============================
    -----google translator styling--
    ================================= */
    /* #google_element select {
        padding: 3px 0 !important;
    } */

    #google_element select:focus {
        outline: none;
    }

    .main-p-translate #google_element {
        visibility: hidden;
        position: absolute;
    }

    .head-info {
        position: relative;
    }

    #google_element {
        /* position: absolute; */
        top: 0px;
        right: 40px;
    }

    /* ---------language-options-------- */
    #google_element select option[value=ur],
    #google_element select option[value=en] {
        display: block;
    }

    #google_element select option {
        display: none;
    }

    /* --------to remove automatic top frame of google translator------ */
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    body {
        top: 0px !important;
    }

    @media print {
        #google_translate_element {
            display: none;
        }
    }

    /* ---------to hide-powered by google--- */
    .goog-logo-link {
        display: none !important;
    }

    .goog-te-gadget {
        height: 28px !important;
        overflow: hidden;
    }

    /* To hide the suggestion box */
    #goog-gt-tt,
    .goog-te-balloon-frame {
        display: none !important;
    }

    .goog-text-highlight {
        background: none !important;
        box-shadow: none !important;
    }

    /* ----------for tbl-overflow---------- */
    .tbl-main {
        width: 100%;
        overflow-x: auto;
        padding: 0 15px
    }

    .tbl-main th,
    .tbl-main td {
        padding: 20px 15px
    }

    /* -------admin-table------- */
    .tbl-main thead.bg-gray-50 {
        background-color: none !important;
        --tw-bg-opacity: 0 !important;
    }

    .tbl-main thead th {
        background: none;
    }

    .tbl-main td,
    th {
        background: #F2F2F2;
    }

    .tbl-main tr {
        margin: 10px
    }

    .tbl-main table {
        border-collapse: separate !important;
        border-spacing: 0 10px;
    }

    /* ----partner---page------ */
    .partner-style #form-div {
        position: static;
        margin-left: 0;
    }

    .partner-style #form-main {
        display: flex;
        justify-content: center
    }

    .add-partner-admin #form-div {
        max-width: 500px;
        width: 100%;
    }

    .add-partner-admin #button-blue1 {
        font-size: 14px
    }

    .add-partner-admin {
        padding: 0 15px;
    }

    .add-partner-admin #button-blue1 {
        padding: 10px 25px;
    }

    .panel-main {
        padding: 0 15px;
    }

    .panel-welcome {
        width: 100%;
        max-width: 500px;
        padding:
    }

    .panel-welcome p {
        margin-top: 7px
    }

    /* ----------home admin--- */
    .home-option2 ul li,
    .home-option1 ul li,
    .admin-home li {
        padding: 0
    }

    .home-option2 ul li a,
    .home-option1 ul li a,
    .admin-home li a {
        display: block;
        padding: 6px 10px;
    }

    .home-option2 ul li:hover,
    .home-option1 ul li:hover,
    .admin-home li:hover {
        opacity: 0.9;
    }

    /* ----------add-btn-admin---- */
    .add-btn {
        background-image: linear-gradient(to bottom, #006B5E, #000000);
        max-width: 140px;
        width: 100%;
        color: #fff;
        text-transform: capitalize;
        font-size: 16px;
        font-weight: 500;
        padding: 10px 20px;
        border-radius: 8px;
        border: none;
    }

    .add-btn:hover {
        background-image: linear-gradient(to top, #006B5E, #000000);
    }

    .admin-about-btn2:hover,
    .admin-about-btn1:hover {
        opacity: 0.8
    }

    /* -------admin-form------ */

    .discripition,
    .about-changes {
        width: 100%;
        max-width: 1200px;
        margin: 30px auto;
    }

    form .header {
        max-width: 500px;
        width: 100%;
    }

    form .imgss {
        flex-wrap: wrap
    }

    form .img {
        margin-top: 10px;
        width: calc(50% - 10px)
    }

    form textarea {
        margin-top: 5px
    }

    form .header,
    form .img {
        height: 100%;
    }

    form .header textarea {
        height: 60px
    }

    .discripition input {
        border-radius: 6px;
        transition: all 0.3s;
    }

    .discripition input:hover {
        opacity: 0.8;
    }

    .heading form {
        padding: 0 50px
    }

    .founder-form form{
    width: 100%;
}
    /* ----------activity-------- */
    .ration {
        height: 100%;
        margin: 0 15px 100px;
        width: calc(33.33% - 30px);
    }

    .ration .ration-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
    }

    .ration-img {
        height: 200px;
    }

    .ration-content p {
        height: 110px;
        overflow: hidden;
    }

    .ration-content h1 {
        text-transform: uppercase;
    }

    .activity {
        align-items: stretch;
        justify-content: flex-start;
        padding: 0 15px;
    }

    .ration-content a {
        margin: 20px 0 20px;
        transition: all 0.3s;
    }

    .ration-content a:hover {
        text-decoration: underline;
    }

    /* ------shadow--- */
    .shadow-md {
        --tw-shadow: none !important;
    }

    .about-m .about-content h1 {
        text-transform: capitalize;
    }

    /* ----------partner-slider------- */
    .my-partner-sec {
        background: url("f/pic no.1.jpg") no-repeat;
        background-size: cover;
        padding: 50px 15px 100px;
        position: relative;
        margin-bottom: 80px
    }

    .my-partner-sec:before {
        position: absolute;
        content: '';
        background: rgba(0, 0, 0, 0.7);
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    .my-p-sec-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .my-p-sec-content h3 {
        color: #E49C17;
        font-size: 40px;
    }

    .my-p-sec-content p {
        color: #fff;
        margin-top: 30px;
        font-size: 22px
    }

    .myslider {
        margin-top: 50px;
    }

    .myslider-img .slider-data {
        display: flex;
        flex-direction: column;
        align-items: center
    }

    .myslider-img .slider-data h1 {
        color: #fff;
        font-weight: 600;
        margin-top: 30px
    }

    .myslider-img .slider-data p {
        margin-top: 0px;
        font-size: 18px;
        color: #CBCBCB
    }

    .myslider-img .slider-data img {
        width: 110px;
        height: 110px;
        border-radius: 50px;
    }

    .myslider .slick-dots li.slick-active button:before {
        color: #00a999;
        opacity: 1;
    }

    .myslider .slick-dots li button:before {
        font-size: 20px;
        color: #00a999;
        opacity: 0.5
    }

    .myslider .slick-dots {
        bottom: -80px
    }

    .myslider ul.slick-dots {
        background: none;
        height: 20px;
        top: auto;
        bottom: -80px;
        left: auto;
    }

    /* --------other-------- */
    .nav-for-hero .heading {
        top: auto;
        bottom: 50%;
    }

    .content-icon1:hover {
        zoom: 0%;
        opacity: 0.8
    }

    .content-data a {
        transition: all 0.3s;
        padding: 10px 15px 13px;
    }

    .content-data a:hover {
        opacity: 0.8
    }

    .btns.vol .btn1 {
        margin: 0 10px 0 0;
    }

    .btns.vol .btn2 {
        margin: 0 0 0 10px;
    }

    .btns.vol .btn1,
    .btns.vol .btn2 {
        transition: all 0.3s;
        max-width: 400px;
    }

    .btns.vol .btn1:hover,
    .btns.vol .btn2:hover {
        opacity: 0.8;
    }

    @media (max-width:1150px) {
        /* video page */

        .main-video .video1 {
            justify-content: center;
            flex-wrap: wrap;
        }

        .main-video .video1>div {
            width: 100%;
            text-align: center;
        }

        .main-video {
            flex-direction: row;
            align-items: start;
        }

        .video1 p {
            font-size: 15px;
        }

        .video1 h1 {
            font-size: 25px;
        }


        .other-videos .video {
            width: calc(50% - 20px);
        }

        .other-videos {
            flex-direction: row;
            align-items: start;
        }

        /* latest news */
        .latest-news-f .covid-19 {
            display: flex;
            height: 100%;
            flex-direction: row;
            width: 100%;
            justify-content: space-between;
            padding: 10px 0;
            align-items: start;
            padding: 0 20px;
            margin-bottom: 20px
        }

        .latest-news-f .covid-img {
            height: 100%
        }

        .latest-news-f .covid-19 .out-of-school {
            margin-top: 0px;
            height: 100%;
        }

        .latest-news-f .covid-img img,
        .latest-news-f .covid-content {
            width: 100%;
        }

        .latest-news-f .out-of-school img {
            width: 100%;
            height: 100%;
            margin-bottom: 15px;
        }

        .latest-news-f .out-of-school p {
            margin-top: auto;
            font-size: 20px;
            font-weight: 400;
        }

        .latest-news-f .supply-img-content p {
            font-size: 20px;
        }

        .latest-news-f .covid-content {
            position: static;
            height: 100px;

        }

        .latest-news-f .covid-19>div {
            width: calc(50% - 10px)
        }

        .latest-news-f .supply-things {
            width: 100%;
            display: flex;
        }

        .latest-news-f .supply-things .supply-1 {
            height: 100%
        }

        .latest-news-f .supply-things>div {
            width: calc(50% - 20px);
            margin: 0 20px
        }

        .latest-news-f .supply-things .supply-img {
            width: 100%;
        }

        .latest-news-f .supply-img {
            margin: 20px 0
        }

        .latest-news-f .supply-img img {
            margin: 0;
        }

        .latest-news-f .supply-things .supply-img-content {
            width: 100%;
        }

        .latest-news-f .covid-19 .covid-content p {
            color: #000
        }


        .latest-news-f .weekly-news-content {
            flex-direction: row;
            align-items: start
        }

        .latest-news-f .weekly-news-img img {
            width: 100%;
            height: 100%;
        }

        .latest-news-f .weekly-news-content>div {
            width: calc(50% - 20px);
        }

        .content-icons {
            top: 75%;
        }

        /* ------partner----- */
        .partner-m .mySlides img[src="f/Group 16239.png"] {
            min-height: 337px;
            padding: 20px 0
        }

        /* ------about--- */
        .about-content {
            height: 100%;
            min-height: 110px
        }

        /* ---------footer--- */
        .footer-main>div {
            width: calc(50% - 20px);
        }

        .footer-btn {
            order: 3;
        }

        .footer-main {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between
        }

        .map iframe {
            width: 100%
        }

        .footer-btn a.btn1 {
            margin-top: 50px
        }

        /* ----------about------- */
        .about-img img {
            max-width: 400px;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .about-img {
            max-width: 350px;
            width: 100%;
            height: 350px;
        }

        .about {
            padding: 0 15px
        }

        .about-m .about1 {
            display: flex;
        }

        .about-m .about-content {
            text-align: left
        }

        /* ----------blog----- */
        .most-viewed-blog h1.main-blog-heading {
            margin: 50px auto 0;
        }

        .most-viewed-blogs {
            margin: 0;
        }

        .heading {
            top: 20%;
            font-size: 40px;
        }

        /* ---admin-form------ */
        form .header {
            max-width: 100%;
        }

        form .header textarea {
            width: 100%;
        }

        form .about-changes.temp {
            flex-direction: column-reverse;
        }

        form .about-changes {
            flex-direction: column-reverse;
        }

        form .imgss {
            justify-content: flex-start;
            width: 100%;
        }

        form .img {
            justify-content: flex-start;
            width: 100%;
            margin-bottom: 30px
        }

        form .imgss img {
            width: 100%;
        }

        .r-content-main form {
            /* max-width:800px; */
            margin: 0 auto
        }

        form .about-changes {
            flex-wrap: wrap
        }

    }


    @media (max-width:998px) {

        .our-founder,
        .management {
            padding: 10px 15px
        }

        .management {
            margin-left: auto;
        }

        .blog-img img {
            max-width: 400px;
            width: 100%;
        }

        .ration {
            margin: 50px 0 30px;
        }

        .orphan,
        .zakat {
            margin: 30px 0
        }

        .founder-content {
            left: 0
        }

        .content-data {
            width: 100%;
        }

        .about-img {
            margin: 16px auto;
        }

        /* --------footer--- */
        .footer-main>div {
            width: calc(100% - 0px);
            text-align: center;
        }

        .footer-main .icons {
            margin: 0 auto;
        }

        .footer-btn {
            order: 2
        }

        .footer-main .map {
            order: 3;
        }

        .footer-btn a.btn1 {
            margin-top: 10px
        }

        .footer-content p {
            font-size: 17px;
        }

        .footer-logo {
            min-height: 320px;
            height: 100%;
            padding: 20px 0;
        }

        /* ------blog-home--- */
        .blog-home .blog-img {
            flex-direction: row;
        }

        .blog-home .blog-img img {
            max-width: 100%;
        }

        /* -------------navbar------- */
        nav {
            justify-content: space-between;
        }

        .index-main-navbar .content-data h1 {
            font-size: 60px
        }

        .index-main-navbar .content-data {
            bottom: 53%;
        }

        /* --------activity-------- */
        .activity {
            flex-wrap: wrap;
            flex-direction: row;
        }

        .ration {
            width: calc(50% - 30px);
            margin: 0 15px 60px
        }

        /* --otehr---- */
        .btns.vol {
            flex-direction: row;
        }
    }

    @media (max-width:768px) {

        /* video page */
        .main-video .video1 {
            width: calc(100% - 0px);
        }

        .other-videos .video {
            width: calc(100% - 0px);
        }

        .other-videos {
            padding: 0 20px;
        }

        /* latest-news */


        .latest-news-f .weekly-news-content>div {
            width: calc(100% - 0px);
        }

        /* -------index.html---- */
        .main-founder>div {
            width: calc(100% - 0px);
            margin: auto;
        }

        .main-founder>div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* ------partner----- */
        .partner-m .mySlides img[src="f/Group 16239.png"] {
            min-height: 380px;
            padding: 20px 0
        }

        .v-form-det img {
            position: relative;
            margin-left: auto;
            margin-top: 10px
        }

        .heading {
            top: 19%;
            font-size: 45px
        }

        /* --------latest-news---- */
        .latest-news-f .supply-things {
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 20px
        }

        .latest-news-f .supply-things .supply-1 {
            width: calc(50% - 20px);
            margin: 0;
        }

        .heading {
            top: 26%;
            font-size: 30px;
        }

        /* --------blog-home------ */
        .blog-home .blog-img1 {
            width: calc(50% - 20px);
            margin-right: 20px;
            margin-top: 15px;
        }

        .blog-home .blog-img1:last-child {
            width: calc(50% - 20px);
        }

        .fullblog-heading {
            height: 100%
        }

        .fullblog-heading h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        /* --------about------ */
        .about-m .about1 {
            flex-wrap: wrap;
            padding: 30px 0 30px
        }

        .about-m .about-content {
            width: calc(100% - 0px);
            max-width: 100%;
        }

        .about-m .about-img {
            max-width: 400px;
            height: 300px;
        }

        .about-m .about-content h1 {
            font-size: 30px
        }

        /* -------navbar------ */
        .index-main-navbar .content-data h1 {
            font-size: 50px;
        }

        .index-main-navbar .content-data {
            bottom: 58%;
        }

        /* ---------------admin-panel---------- */
        .admin-heading {
            flex-wrap: wrap;
        }

        .admin-heading h1 {
            font-size: 25px;
        }

        .logout-btn a {
            font-size: 16px;
            padding: 10px 15px;
        }

        .heading form {
            padding: 0 20px
        }

        /* ----------responsive dashboard-------- */

        .desk-aside {
            display: none;
            position: absolute;
            width: 170px;
        }

        .desk-aside .cross {
            display: block;
        }

        .mbl-aside {
            display: block;
            position: absolute;
            z-index: 999999;
            width: 75px
        }

        .r-content-main {
            width: calc(100% - 75px);
            position: relative;
            left: 75px;
        }


        .desk-aside ul {
            margin-top: 40px;
        }

        img.img {
            width: 120px;
            height: 120px;
        }

        /* ---partner----- */
        .panel-welcome h1 {
            font-size: 35px
        }

        .panel-welcome p {
            font-size: 22px;
        }

        form .imgss .img {
            width: calc(100% - 0px)
        }

        .img input {
            margin-top: 15px;
        }

        /* -----activity--- */
        .ration {
            width: calc(100% - 0px);
            max-width: 500px;
            margin: 0 auto 60px;
        }

        /* --------other---- */
        .btns.vol {
            flex-direction: column;
        }

        .btns.vol .btn1,
        .btns.vol .btn2 {
            max-width: 200px;
            margin: 10px auto;
            padding: 12px;
        }
    }

    @media (max-width:550px) {
        .blog-home .blog-img1 {
            width: calc(100% - 0px);
            margin-right: 0px;
        }

        .blog-home .blog-img1:last-child {
            width: calc(100% - 0px);
        }

        .ration,
        .orphan,
        .zakat {
            width: 100%;
            height: 100%
        }

        .ration .ration-img img,
        .orphan .orphan-img img,
        .zakat .zakat-img img {
            width: 100%;
        }

        .activity {
            padding: 0 15px;
        }

        .index-main-navbar .content-data {
            padding: 0 15px
        }


        /* --------management----- */
        .mang-person-content {
            margin-left: 30px
        }

        /* ------latest-news----- */
        .latest-news-f .covid-19>div {
            width: calc(100% - 0px);
        }

        .latest-news-f .covid-19 {
            flex-wrap: wrap;
        }

        .latest-news-f .supply-things .supply-1 {
            width: calc(100% - 0px);
        }

        /* -------admin------- */
        .admin-heading {
            height: 100%;
            padding: 10px 20px;
            justify-content: center
        }

        .logout-btn a {
            font-size: 14px;
            padding: 10px 13px;
            margin: 0 20px
        }

        .admin-heading h1 {
            font-size: 20px;
        }

        .tbl-main .admin-about-btn1,
        .tbl-main .admin-about-btn2,
        .tbl-main .add-btn {
            display: block;
            text-align: center;
        }

        .tbl-main .add-btn {
            padding: 10px 15px;
        }

        .home-option {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .home-option2 ul li {
            width: 100%;
        }

        .admin-home li {
            width: 100%
        }

        .add-partner-admin #form-div {
            padding: 25px 20px
        }

        .panel-welcome h1 {
            font-size: 32px
        }

        .panel-welcome p {
            font-size: 20px;
        }

        /* --------vol-form--- */
        .form.v-form,
        .form.v-form h1.main-heading,
        .form.v-form form {
            width: 100%;
        }

        .form.v-form {
            padding: 0 15px;
        }

        .form.v-form .main-div {
            flex-direction: column-reverse;
        }

        /* ----other-- */
        .btns.vol .btn1,
        .btns.vol .btn2 {
            max-width: 100%;
            margin: 10px auto;
            padding: 12px;
            display: block
        }
    }

    @media (max-width:430px) {
        .our-founder .founder-content {
            width: 100%;
        }

        footer {
            padding: 20px 20px
        }

        /* --------management----- */
        .mang-person {
            flex-direction: column;
            text-align: center;
            align-items: center;
        }

        .mang-person-content {
            margin-left: 0
        }

    }

    @media (min-width:768px) {
        .desk-aside {
            display: block !important;
            width: 200px !important;
            position: absolute !important;
        }

        .r-content-main {
            width: calc(100% - 200px) !important;
            position: relative;
            left: 200px !important;
        }

        .mbl-aside {
            display: none !important;
        }
    }
    </style>
</body>

</html>