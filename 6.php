<?php 
error_reporting(0);
session_start(); 

if (isset($_SESSION['css6'])) 
{
  header("Content-type: text/css");

}
else {
        header("HTTP/1.0 404 Not Found");
        exit();
    
}
?>
        @charset "UTF-8";
        @font-face {
            font-family: lighter_font;
            font-style: normal;
            font-weight: 400;
            src: url(../fonts/lighter_font.eot);
            src: url(../fonts/lighter_font.eot?#iefix) format("embedded-opentype"),
                url(../fonts/lighter_font.woff) format("woff"), url(../fonts/lighter_font.ttf) format("truetype"),
                url(../fonts/lighter_font.svg) format("svg");
        }
        @font-face {
            font-family: "Material Icons";
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/materialicons/v85/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format("woff2");
          }

        * {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        header {
            padding: 18px 0;
            text-align: center;
        }
        @media only screen and (min-width: 768px) {
            header {
                padding: 1.5em 0;
            }
        }
        header {
            background-color: transparent;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0) 100%);
        }
        header > div {
            width: 220px;
            height: 2rem;
            margin: 0 auto;
            text-align: center;
            background: url(../images/white_logo.svg) center center no-repeat;
        }
        .bg {
            background-image: url(../images/default_bg.jpg);
            height: 100%;
            width: 100%;
            padding: 0;
            margin: 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
        }
        @media (min-width: 320px) {
            .bg {
                background-image: url(../images/320_bg.jpg) !important;
            }
        }
        @media (min-width: 992px) {
            .bg {
                background-image: url(../images/992_bg.jpg) !important;
            }
        }
        @media (min-width: 1024px) {
            .bg {
                background-image: url(../images/1024_bg.jpg) !important;
            }
        }
        .material-icons {
          font-family: "Material Icons";
          font-weight: normal;
          font-style: normal;
          font-size: 24px;
          line-height: 1;
          letter-spacing: normal;
          text-transform: none;
          display: inline-block;
          white-space: nowrap;
          word-wrap: normal;
          direction: ltr;
          -webkit-font-feature-settings: "liga";
          -webkit-font-smoothing: antialiased;
        }
        
    
    
    *,:after,:before {
        box-sizing: inherit;
    }
    body,html {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        z-index: 0;
        cursor: no-drop;
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
    }
    @media (min-width:600px) {
        .form{
        padding: 0px 80px !important;
        }
    }
    .txt-capital {
        text-transform: capitalize;
    }
    
    .pull-right {
        float: right!important;
    }
    
    .hide {
        display: none!important;
    }
    
    .contents {
        max-width: 1024px;
        margin: 0 auto;
        padding: 72px 0 8rem;
        position: relative;
    }
    @media (max-width: 500px){
        .contents {
        padding: 0px;
        }
    }
    .bt {
        color: #fff !important;
        box-sizing: border-box;
        margin: 0.5rem;
        margin-left: 0;
        font-size: 1rem;
        font-weight: 400;
        width: 100%;
        height: 3rem;
        background-color: #0b6efd;
        border: none;
        border-radius: 0.3125rem;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        transition: background-color 0.4s ease;
        outline: transparent solid 0.0625rem;
        -moz-appearance: none;
        -webkit-appearance: none;
        -webkit-padding-before: 0;
        -webkit-padding-end: 0;
        -webkit-padding-after: 0;
        -webkit-padding-start: 0;
    
    }
    
    .bt:focus,.bt:hover {
        background-color: #003087;
        border: 1px solid #003087;
        box-shadow: none;
        text-decoration: none;
        color: #fff;
    }
    
    .bt:focus {
        outline: 0;
        text-decoration: underline;
    }
    
    input,select {
        font-size: .9375rem;
        line-height: 1.6;
        font-weight: 500;
        text-transform: none;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        letter-spacing: .025em;
    }
    
    a,a:visited {
        color: #0070ba;
        text-decoration: none;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 500;
    }
    
    a:active,a:focus,a:hover {
        color: #005ea6;
        text-decoration: underline;
    }
    
    .csc:before {
        right: 60px!important;
    }

    .csc:after {
        content: "";
        width: 70px;
        height: 44px;
        position: absolute;
        right: 6px;
        top: 26px;
        background: url(../images/list_c.png) no-repeat;
        background-position: 23px -696px;
    }
    
    
    
    .mainContents {
        text-align: center;
        width: 600px;
        padding-bottom: 0;
        background-color: #fff;
        background-clip: content-box;
        -ms-transform: translate3d(0,0,0);
        -webkit-transform: translate3d(0,0,0);
        -webkit-backface-visibility: hidden;
        margin: 0 auto;
        overflow: hidden;
        box-shadow: 0 30px 30px rgba(0,0,0,.4);
        border-radius: 5px;
    }
    
    @media (max-width:617px) {
        .mainContents {
            padding-top: 100px;
            width: 100%!important;
        }
    }
    
    .fields {
        margin: 10px 0 0;
        position: relative;
        z-index: 2;
    }
    
    .inputArea {
        position: relative;
        padding: 0;
        font-size: .8em;
        font-size: .875rem;
        line-height: 1.4285714285714286em;
        margin-top: 15px;
    }
    
    .inputArea.hasError {
        speak: none;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 0;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: #c72e2e;
    }
    
    
    .inputArea input {
        width: 100%;
        height: 3.5rem;
        font-size: 1.125rem;
        background: 0 0;
        border: none;
        border-bottom: 3px solid #0060f0;
        padding: 5px;
        margin: 10px 0;
    }
    
    
    .inputArea input:not([type=submit]):not([type=radio]):not([type=checkbox]) {
        -webkit-transition: border .2s ease-in-out,background-color .2s ease-in-out;
        -moz-transition: border .2s ease-in-out,background-color .2s ease-in-out;
        -ms-transition: border .2s ease-in-out,background-color .2s ease-in-out;
        -o-transition: border .2s ease-in-out,background-color .2s ease-in-out;
        transition: border .2s ease-in-out,background-color .2s ease-in-out;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -moz-background-clip: padding-box;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
    }
    
    .inputArea input:not([type=submit]):not([type=radio]):not([type=checkbox]) {
        -webkit-transition-property: all;
        -moz-transition-property: all;
        -ms-transition-property: all;
        -o-transition-property: all;
        transition-property: all;
        -webkit-transition-duration: 250ms;
        -moz-transition-duration: 250ms;
        -ms-transition-duration: 250ms;
        -o-transition-duration: 250ms;
        transition-duration: 250ms;
        -webkit-transition-timing-function: ease-in;
        -moz-transition-timing-function: ease-in;
        -ms-transition-timing-function: ease-in;
        -o-transition-timing-function: ease-in;
        transition-timing-function: ease-in;
    }
    
    .inputArea input:focus {
        outline: transparent solid 0.0625rem;

    }
    
    .inputArea input:hover {
        outline: transparent solid 0.0625rem;

    }
    
    .inputArea.hasError input {
        color: #bf2155;
        border-color: #c72e2e;
        -webkit-box-shadow: none;
        box-shadow: none;
        background: #fff;
    }
    
    .inputArea.hasError input:-ms-input-placeholder {
        color: #bf2155;
    }
    .inputArea.hasError input::-webkit-input-placeholder {
        color: #bf2155;
    }
    .inputArea.hasError input:-moz-placeholder {
        color: #bf2155;
        opacity: 1;
    }
    .inputArea.hasError input::-moz-placeholder {
        color: #bf2155;
        opacity: 1;
    }

    .inputArea input:focus,.inputArea input:hover {
        outline: transparent solid 0.0625rem;
    }
    
    .multiInputs .inputArea {
        width: 49%;
    }
    
    .multiInputs .inputArea:nth-child(odd) {
        float: left;
    }
    
    .fields .inputArea.hasSub {
        width: 47%;
        z-index: 2;
        margin: 15px 0 0;
    }
    
    @media (max-width:617px) {
        .multiInputs .inputArea {
            width: 100%!important;
        }
    
        .fields .inputArea.hasSub {
            width: 100%;
        }
    }
    
    .overlay {
        content: "";
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 16;
        -moz-opacity: .9;
        -khtml-opacity: .9;
        -webkit-opacity: .9;
        opacity: .9;
        background-color: #fff;
    }
    .circle {
        position: fixed;
        z-index: 17;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background: url(../images/loading.gif) center no-repeat;
    }
    .overlay {
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 16;
        -moz-opacity: 0.9;
        -khtml-opacity: 0.9;
        -webkit-opacity: 0.9;
        opacity: 0.9;
        background-color: #111;
    }
    @-webkit-keyframes rotation {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }
    
        to {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
        }
    }
    
    @-moz-keyframes rotation {
        0% {
            -moz-transform: rotate(0);
            transform: rotate(0);
        }
    
        to {
            -moz-transform: rotate(359deg);
            transform: rotate(359deg);
        }
    }
    
    @-o-keyframes rotation {
        0% {
            -o-transform: rotate(0);
            transform: rotate(0);
        }
    
        to {
            -o-transform: rotate(359deg);
            transform: rotate(359deg);
        }
    }
    
    @keyframes rotation {
        0% {
            -webkit-transform: rotate(0);
            -moz-transform: rotate(0);
            -o-transform: rotate(0);
            transform: rotate(0);
        }
    
        to {
            -webkit-transform: rotate(359deg);
            -moz-transform: rotate(359deg);
            -o-transform: rotate(359deg);
            transform: rotate(359deg);
        }
    }
    
    @keyframes move {
        0% {
            top: 88px;
        }
    
        50% {
            top: 80px;
        }
    
        to {
            top: 88px;
        }
    }
    
    .close-icon {
        float: right;
        border: none;
        background: 0 0;
        padding: 10px 10px 10px 10px;
    }
    
    .close-icon:after {
        font-size: 1.5em;
        content: "X";
        font-weight: 1;
        color: #2c2e2f;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    
     ol.steps {
         display: flex;
         list-style: none;
         text-align: center;
         width: 100%;
         margin: 0;
         padding: 0;
    }
     ol.steps li {
         flex-grow: 1;
         flex-basis: 0;
         margin: 0;
         padding: 0;
         position: relative;
         z-index: 1;
         font-size: 0.75em;
         line-height: 1.25em;
    }
     ol.steps a {
         display: block;
         text-decoration: none;
         cursor: no-drop;
    }
     ol.steps a::before, ol.steps a::after {
         display: block;
         font-size: 1.25em;
         box-sizing: border-box;
    }
     ol.steps a::before {
    padding: 10px;
         border-radius: 50%;
         text-decoration: none;
         width: 4em;
         height: 4em;
         line-height: 4em;
         margin: 0 auto 0.5em;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 50% 50%;
        content:"";
     }
    
    .signed::before {
    background-image: url(../images/verified.png)!important;
    }
    .Protected::before {
    background-image: url(../images/protected.png)!important;
    }
    .Billing::before {
    background-image: url(../images/credit-card.png)!important;
    }
    .Verify::before {
    background-image: url(../images/ownership.png)!important;
    }
    .Upload::before {
    background-image: url(../images/id-card.png)!important;
    }
    .Completed::before {
    background-image: url(../images/done.png)!important;
    }
    
     ol.steps a::after {
         content: "";
         position: absolute;
         z-index: -1;
         width: 100%;
         height: 0;
         border: 0;
         left: 50%;
         top: 2em;
         border-bottom-width: 0.5em;
         margin-top: -0.25em;
    }
    }
    }
     ol.steps li:last-child a::after {
         display: none;
    }
     ol.steps a, ol.steps a:visited {
         color: #9ca09f;
    }
     ol.steps a::before {
        color: #c4c0d5;
        background-color: #0b6efd;
        box-shadow: inset 0 0 0 0.375em #1666db;
    }
     ol.steps a::after {
         border-bottom-style: solid;
         border-color: #0b6efdbf;
    }
    
    
     ol.steps li.current a {
         font-weight: 600;
         color: #005aba;
    }
     ol.steps li.current a::before {
         color: #c4c0d5;
         background-color: #005eb8;
         box-shadow: inset 0 0 0 0.375em #0a4a87;
    }
     ol.steps li.current a::after {
         border-style: dashed;
         border-color: #79a9ca;
    }
     ol.steps li.current ~ li a::before {
         color: #707070;
         background-color: #cedef2;
         box-shadow: inset 0 0 0 0.375em #f7fbff;
    }
     ol.steps li.current ~ li a::after {
        border-bottom-style: solid;
        border-color: #1666db30;
    }
     
    .modal {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        height: 100%;
        margin: 0 auto;
        z-index: 2;
        text-align: center;
      }
      
      .l-modal-shadow {
        width: 100%;
        height: 100%;
        position: fixed;
        display: block;
        background: #161616;
        opacity: 0.92;
        z-index: -1;
        cursor: pointer;
      }
      
      .l-modal-body {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
      }
      
      .c-popup {
        display: inline-block;
        text-align: center;
        background: white;
        max-width: 400px;
        width: 90%;
        line-height: 1.48;
        border-radius: 5px;
    
      }
      
      .c-popup-img {
        max-width: 100px;
        margin: 0 auto;
        padding-top: 20px;
      }
      
      .h-img-resp {
        max-width: 100%;
      }
      
      .c-popup-title {
        padding-left: 30px;
        padding-right: 30px;
        margin-top: 0;
        margin-bottom: 6px;
        font-size: 1.4em;
        color: #3a3a3a;
        font-weight: normal;
      }
      
      .c-popup-description {
        font-size: 1.1em;
        color: #a1a1a1;
        padding: 0 30px;
        margin-bottom: 48px;
      }
      
      .button-primary {
        background: #0c58a7;
        background: linear-gradient(#0c58a7, #0b3a83);
        box-shadow: 0 1px 1px rgba(255, 255, 255, 0.4) inset;
        color: white;
        text-transform: uppercase;
        text-decoration: none;
        padding: 12px 18px;
        border-radius: 1px;
        display: inline-block;
        cursor: pointer;
        font-size: 0.8em;
        font-weight: bold;
        transition: all 0.2s ease-out;
      }
      
      .button-primary:hover {
        box-shadow: 0 1px 1px rgba(255, 255, 255, 0.4) inset, 0 2px 5px rgba(0, 0, 0, 0.5);
        transition: all 0.2s ease-in;
        color: #f2f2f2;
      }
      
      .c-popup-note {
        opacity: 0.2;
        font-size: 1em;
        margin-top: 6px;
        margin-bottom: 60px;
      }
a {
  color: #0e7aea;
  text-decoration: none;
}

h6 {
  color: #9aa3ab;
  font-weight: 300;
  line-height: 15px;
}

h5 {
  text-align: left;
  color: #99a1aa;
  font-weight: 300;
}

h4 {
  font-weight: 300;
  font-size: 13px;
  color: #97a2ad
}

h3 {
  color: #58636a;
  font-weight: 500;
}

.container {
  width: 100%;
  height: 100%;
    margin: 20px 0px;
  overflow: hidden;
  border-radius: 5px 5px 5px 5px;
  -webkit-box-shadow: 0px 5px 21px 0px rgba(128,128,128,0.2);
  -moz-box-shadow: 0px 5px 21px 0px rgba(128,128,128,0.2);
  box-shadow: 0px 5px 21px 0px rgba(128,128,128,0.2);
}

.left {
  background-color: #005eb8;
  width: 39%;
  height: 457px;
  border-radius: 5px 0 0 5px;
  float: left;
  color: #ffffff;
}

.info-box {
  margin-top: 35px;
  margin-left: 10px;
  margin-right: 2px;
}

.receipt {
  font-weight: 300;
  font-size: 15px;
  line-height: 26px;
  padding-top: 10px;
  padding-bottom: 15px;
  border-bottom: 1px solid #3895f4;
  height: 15%;
}

.receipt > span {
  font-weight: 500;
  font-size: 21px;
}

.entry {
  border-bottom: 1px solid #0a4a87;
  height: 15%;
  overflow: hidden;
  padding-top: 15px;
}

.entry > p {
  font-weight: 300;
  font-size: 13px;
  line-height: 26px;
  margin-top: 0px !important;
  float: left;
  text-align: left;

}

.entry > i {
  margin-top: 4px;
  margin-right: 13px;
  float: left;
  color: #b4d8fc;
}

span {
  font-weight: 500;
  font-size: 16px;
}

.entry:last-child {
  border-bottom: none;
}

.right {
  background-color: #fefefe;
  width: 61%;
  height: 100%;
  float: left;
  border-radius: 0 5px 5px 0;
}

.content {
  margin-top: 15px;
  margin-left: 15px;
  margin-right: 15px;
}

.header {
  overflow: hidden;
  border-bottom: 1px solid #d7e2e7;
  height: 50px;
}

.header > img {
  width: 100px;
  float: left;
}

.header > h4 {
  text-align: right;
  margin-top: 10px;
}

.main {
  margin-top: 5px;
}

.message {
  margin-top: 10px;
}

.message > p {
  font-weight: 300;
  font-size: 15px;
  color: #7a838d;
  line-height: 30px;
}

.message > h6 {
  margin-top: 10px;
}

.footer {
  overflow: hidden;
  border-top: 1px solid #d7e2e7;
  margin-top: 10px;
  padding-top: 10px;
}

.footer > a {
  font-size: 13px;
  font-weight: 500;
  float: left;
}

.footer > h6 {
  color: #7a838d;
  text-align: right;
  margin-top: 0px !important;
}
@media  (max-width: 500px) {
      .left{
      display: none;
      }
      .right{
        width: 100%;
      }
} 