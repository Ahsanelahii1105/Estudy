<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css link---------- -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css">
<!-- bootstrap link--------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- favicon---------------- -->
    <link rel="shortcut icon" href="img/chat1.png" type="image/x-icon" />
    <title>Chat Website TempletE</title>

    <style>

body
{
    margin: 0%;
    padding: 0%;
}
/* main section---------------- */
.main-section
{
    width:100%;
    height: auto;
}

/* left section start here-------------- */
/* header section start here-------------- */
 .header-section
{
    background-color: #680A83;
    clip-path: polygon(26% 17%,78% 17%,100% 17%,100% 72%,70% 72%,8% 72%,0% 100%,0% 17%);
    padding-top: 45px;
    padding-bottom: 60px;
    margin-top: -40px;
 
}
/* chat icon---------- */
.chat-icon
{
    font-size: 45px;
    color: white;
   
 
}
/* brand section--------------- */
.brand-section
{
    margin-left: 50px;
    margin-bottom: 25px;
   
   
}
/* brand name--------- */
.brand-name
{
    margin-left: 20px;
}
/* brand name1------------------- */
.brand-name1
{
    text-decoration: none;
    font-size: 25px;
    color: white;
    font-weight: 700;
    
}
/* dot section------------ */
.dot
{
    margin-left: 170px;
    font-size: 30px;
   margin-top: 10px;
   color: #F6A977;
}

/* brand link section ---------------- */
.brand-link-section
{
margin-left: 40px;
}

/* brand links start here-------------- */
.brand-links
{
    display: flex;
    list-style-type: none;
    gap: 30px;
}

/* brand link-------------------- */
.brand-link1
{
    text-decoration: none;
    font-size: 20px;
    color: white;
}
.brand-link2
{
    text-decoration: none;
    color:#F6A977;
    font-size: 20px;
}
.header-sub-section
{
    padding-top: 10px;
    padding-bottom: 10px;
    margin-top: -5px;
}
/* header section end here-------------- */



/* chat section start here----------------------- */
.chat-section
{
    background-color: #FBFBFB;
    overflow: hidden;
    box-sizing: border-box;
    margin-top: -70px;
    padding-top: 30px;
   
} 
.plus
{
    background-color: white;
    border-radius: 20px;
    margin-left: 5px;
}
.plus-icon
{
    font-size: 40px;
    color:#F6A977;
    
}
.search
{
    margin-left: 34px;
    border-radius: 25px;
    padding: 8px 210px 8px 10px;
    border: none;
    background-color: rgb(243, 243, 243);
}
.search:focus
{
  outline: none;
  border-color: #F6A977;
  box-shadow: 0 0 10px #F6A977;
}
.all-chats
{
    height: 550px;
    overflow: auto;
   
}

/* person------------------- */
.person
{
    background-color: white;
    box-shadow: 0 0.5em 1em -0.125em rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.02);
    border-radius: 10px;
    cursor: pointer;
}
.person:hover
{
    background-color: rgb(235, 235, 235);
}
span
{
    width: 13px;
    height: 13px;
    background-color: rgb(2, 208, 2);
    border-radius: 50%;
    border: 2px solid white;
    position: absolute;
    top: 0;
    left: 0;

}
/* person1--------------- */
.person-button1
{
    position: relative;
    width: 55px;
    height: 55px;
    background-image: url(../img/p1.jpg);
    background-size: cover;
    border-radius: 50%;
    cursor: pointer;
    border: none;
}
.span1
{
    width: 13px;
    height: 13px;
    background-color: rgb(2, 208, 2);
    border-radius: 50%;
    border: 2px solid white;
    position: absolute;
    top: 0;
    left: 0;

}


/* person2--------------- */
.person-button2
{
    position: relative;
    width: 55px;
    height: 55px;
    background-image: url(../img/p2.jpg);
    background-size: cover;
    border-radius: 50%;
    cursor: pointer;
    border: none;
}
.span2
{
    width: 13px;
    height: 13px;
    background-color: red;
    border-radius: 50%;
    border: 2px solid white;
    position: absolute;
    top: 0;
    left: 0;

}


/* person3--------------- */
.person-button3
{
    position: relative;
    width: 55px;
    height: 55px;
    background-image: url(../img/p3.jpg);
    background-size: cover;
    border-radius: 50%;
    cursor: pointer;
    border: none;
}
.span3
{
    width: 13px;
    height: 13px;
    background-color: red;
    border-radius: 50%;
    border: 2px solid white;
    position: absolute;
    top: 0;
    left: 0;

}


/* person4--------------- */
.person-button4
{
    position: relative;
    width: 55px;
    height: 55px;
    background-image: url(../img/p4.jpg);
    background-size: cover;
    border-radius: 50%;
    cursor: pointer;
    border: none;
}

/* person5--------------- */
.person-button5
{
    position: relative;
    width: 55px;
    height: 55px;
    background-image: url(../img/p5.jpg);
    background-size: cover;
    border-radius: 50%;
    cursor: pointer;
    border: none;
}
.span4
{
    width: 13px;
    height: 13px;
    background-color: rgb(207, 207, 207);
    border-radius: 50%;
    border: 2px solid white;
    position: absolute;
    top: 0;
    left: 0;

}


/* person6--------------- */
.person-button6
{
    position: relative;
    width: 55px;
    height: 55px;
    background-image: url(../img/p6.jpg);
    background-size: cover;
    border-radius: 50%;
    cursor: pointer;
    border: none;
}

/* person7--------------- */
.person-button7
{
    position: relative;
    width: 55px;
    height: 55px;
    background-image: url(../img/p2.jpg);
    background-size: cover;
    border-radius: 50%;
    cursor: pointer;
    border: none;
}

/* person8--------------- */
.person-button8
{
    position: relative;
    width: 55px;
    height: 55px;
    background-image: url(../img/p1.jpg);
    background-size: cover;
    border-radius: 50%;
    cursor: pointer;
    border: none;
}
.span5
{
    width: 13px;
    height: 13px;
    background-color: rgb(207, 207, 207);
    border-radius: 50%;
    border: 2px solid white;
    position: absolute;
    top: 0;
    left: 0;

}
/* person------------------- */

/* chat section end here----------------------- */
/* left section end here-------------- */

/* middle section start here-------------------- */
.about-person
{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 15px;
}
.about-person-img
{
    height: 55px;
    width: 55px;
    border-radius: 50%;
}
.name-img
{
    display: flex;
    gap: 18px;
}
.call-system
{
    display: flex;
    gap: 7px;
    margin-top: 10px;
}

.option-all
{
color: rgb(173, 173, 173);
border: 2px solid rgb(234, 234, 234);
padding: 6px 12px 6px 12px;
border-radius: 5px;
font-size: 16px;
}
.option-all:hover
{
    background-color: rgb(244, 244, 244);
}
.messings
{
    height: 550px;
    overflow: auto;
}
.messing-lists1
{
    display: flex;
    justify-content: start;
}
.messing-lists2
{
    display: flex;
    justify-content: end;
   
}
.first-msg
{
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    border-radius: 17px;
    padding: 8px 12px 8px 12px;
}
.first-msg1
{
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    border-radius: 17px;
    padding: 8px 12px 8px 12px;
    background-color: #F6A977;
}
.last-time
{
    font-size: 13px;
     font-weight: 400;
}
.double-check
{
    color: rgb(5, 198, 5);
}
.type-section
{
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    padding: 7px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.type-box-search
{
    padding: 5px 360px 5px 10px;
    border-radius: 20px;
    border: 1px solid rgb(174, 174, 174);
    margin-right: 8px;
}
.send-file-icon
{
    font-size: 25px;
    color: rgb(196, 196, 196);
    margin: 4px;
}
.send-file-icon1
{
    font-size: 16px;
    color:#ffffff;
    background-color: #F6A977;
    border-radius: 50%;
    padding: 10px;
}

/* modal start here--------------- */
.main-modal 
{
    background: #03001e;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #fdeff9, #ec38bc, #7303c0, #03001e);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #fdeff9, #ec38bc, #7303c0, #03001e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
padding: 40px!important;
border-radius: 15px;

}
.modal-img
{
    height: 150px;
    width: 150px;
    border-radius: 50%;
    border: 5px solid white;
}
.modal-icon1
{
    font-size: 30px;
    border-radius: 50%;
    background-color: green;
    color: white;
    margin: 20px;
    padding: 20px;
}
.modal-icon2
{
    font-size: 30px;
    border-radius: 50%;
    background-color: red;
    color: white;
    margin: 20px;
    padding: 20px;
}
/* modal end here--------------- */
/* middle section end here-------------------- */


/* right section start hree----------------- */
.cross1
{
    border: 1px solid rgb(190, 190, 190);
    padding: 5px 15px 5px 15px;
    border-radius: 5px;
    font-size: 20px;
    cursor: pointer;
    margin-left: 195px;

    
}
.cross1:hover
{
    background-color: rgb(239, 239, 239) ;
}
.setting-img1
{
    height: 100px;
    width: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
}
.media-img
{
    gap: 10px;
}
.block-icon
{
    color: rgb(152, 152, 152);
   
}
.reprt-del
{
    color: red;
}
.rd
{
    color: red;
}
/* right section end hree----------------- */


        
        @media(max-width:576px)
{

  
    .brand-name1
    {
        text-decoration: none;
        font-size: 20px;
        color: white;
        font-weight: 700;
        
    }

    .dot
{
    margin-left: 150px;
    font-size: 30px;
   margin-top: 10px;
   color: #F6A977;
}


.search
{
    margin-left: 34px;
    border-radius: 25px;
    padding: 8px 120px 8px 10px;
    border: none;
    background-color: rgb(243, 243, 243);
}


    .chat-icon
{
    font-size: 35px;
    color: white;
   
 
}
.brand-section
{
    margin-left: 50px;
    margin-bottom: 25px;
    padding-top:20px;
   
}
    .header-section
    {
        background-color: #680A83;
        clip-path: polygon(26% 17%,78% 17%,100% 17%,100% 72%,70% 72%,8% 72%,0% 100%,0% 17%);
        padding-top: 50px;
        padding-bottom: 60px;
        margin-top: -46px;
        margin-right: -25px;
     
    }

    .type-box-search
{
    padding: 5px 30px 5px 10px;
    border-radius: 20px;
    border: 1px solid rgb(174, 174, 174);
    margin-right: 8px;
}
.name-img
{
   margin-left: 10px;
}
.cross1
{
    margin-left: 325px;

    
}
.accordion
{
    margin-left: 17px;
}
}
    </style>

  </head>
  <body>


    <!-- main section start here--------------------->
    <div class="row main-section">

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->


        <!-- left section start here---------------->
      <div class="col-md-4 col-sm-12 left-section">
        <!-- header section start here-------------- -->
        <div class="header-section">
            <div class="header-sub-section ">
                <!-- brand section start here------------ -->
                <div class="brand-section d-flex ">
                    <div class="brand-name">
                        <div class=" d-flex">
                            <div><i class="fa-sharp fa-solid fa-comment  chat-icon me-3"></i></div>
                            <div>
                                <a class="brand-name1" href="#"> ChatWithUs</a>
                            </div>
                        </div>
                      
                    </div>
                    <div class="three-dot">
                            <a href="#"><i class="fa-sharp fa-solid fa-ellipsis dot"></i></a>
                    </div>
                </div>
                <!-- brand section end here------------ -->

                <!-- link section start here------------ -->
                <div class="brand-link-section">
                    <ul class="brand-links">
                        <li><a class="brand-link2" href="#">Chat</a</li>
                        <li><a class="brand-link1" href="#">Group</a</li>
                        <li><a class="brand-link1" href="#">Status</a></li>
                        <li><a class="brand-link1" href="#">Call</a></li>
                    </ul>
                </div>
                <!-- link section end here-------------->

            </div>
        </div>
        <!-- header section end here-------------- -->

        <!-- chat section start-------------- -->
        <div class="chat-section">
          <div class="chatheader-section">
            <div class="search-plus mb-3 d-flex">
              <div class="search-bar">
             <input class="search" type="search" placeholder="Search">
              </div>
              <div class="plus">
                <a href="#"><i class="fa-solid fa-circle-plus plus-icon"></i></a>
              </div>
            </div>

            <!-- all chats start here------------>
            <div class="all-chats p-3">
              <!-- first person--------- -->
              <div class="person mb-3 p-3 d-flex">
                <div class="person-img">
                  <button class="person-button1">
                  <span class="span1"></span>
                </button>
                </div>
                <div class="person-msg ps-3">
                  <p><b>Regina Dickerson</b><br>
                  It seems logical that the strategy....</p>
                </div>
                <div class="person-time ps-3">
                  <p>18:15 AM</p>
                </div>
              </div>
              <!-- first person end here----------->
              <!-- first person--------- -->
              <div class="person mb-3 p-3 d-flex">
                <div class="person-img">
                  <button class="person-button2">
                  <span class="span2"></span>
                </button>
                </div>
                <div class="person-msg ps-3">
                  <p><b>Regina Dickerson</b><br>
                  It seems logical that the strategy....</p>
                </div>
                <div class="person-time ps-3">
                  <p>18:15 AM</p>
                </div>
              </div>
              <!-- first person end here----------->
              <!-- first person--------- -->
              <div class="person mb-3 p-3 d-flex">
                <div class="person-img">
                  <button class="person-button3">
                  <span class="span3"></span>
                </button>
                </div>
                <div class="person-msg ps-3">
                  <p><b>Regina Dickerson</b><br>
                  It seems logical that the strategy....</p>
                </div>
                <div class="person-time ps-3">
                  <p>18:15 AM</p>
                </div>
              </div>
              <!-- first person end here----------->
              <!-- first person--------- -->
              <div class="person mb-3 p-3 d-flex">
                <div class="person-img">
                  <button class="person-button4">
                  <span></span>
                </button>
                </div>
                <div class="person-msg ps-3">
                  <p><b>Regina Dickerson</b><br>
                  It seems logical that the strategy....</p>
                </div>
                <div class="person-time ps-3">
                  <p>18:15 AM</p>
                </div>
              </div>
              <!-- first person end here----------->
              <!-- first person--------- -->
              <div class="person mb-3 p-3 d-flex">
                <div class="person-img">
                  <button class="person-button5">
                  <span class="span4"></span>
                </button>
                </div>
                <div class="person-msg ps-3">
                  <p><b>Regina Dickerson</b><br>
                  It seems logical that the strategy....</p>
                </div>
                <div class="person-time ps-3">
                  <p>18:15 AM</p>
                </div>
              </div>
              <!-- first person end here----------->
              <!-- first person--------- -->
              <div class="person mb-3 p-3 d-flex">
                <div class="person-img">
                  <button class="person-button6">
                  <span class="span5"></span>
                </button>
                </div>
                <div class="person-msg ps-3">
                  <p><b>Regina Dickerson</b><br>
                  It seems logical that the strategy....</p>
                </div>
                <div class="person-time ps-3">
                  <p>18:15 AM</p>
                </div>
              </div>
              <!-- first person end here----------->
              <!-- first person--------- -->
              <div class="person mb-3 p-3 d-flex">
                <div class="person-img">
                  <button class="person-button7">
                    <span></span>
                  </button>
                </div>
                <div class="person-msg ps-3">
                  <p><b>Regina Dickerson</b><br>
                  It seems logical that the strategy....</p>
                </div>
                <div class="person-time ps-3">
                  <p>18:15 AM</p>
                </div>
              </div>
              <!-- first person end here----------->
              <!-- first person--------- -->
              <div class="person mb-3 p-3 d-flex">
                <div class="person-img">
                <button class="person-button8">
                  <span></span>
                </button>
                </div>
                <div class="person-msg ps-3">
                  <p><b>Regina Dickerson</b><br>
                  It seems logical that the strategy....</p>
                </div>
                <div class="person-time ps-3">
                  <p>18:15 AM</p>
                </div>
              </div>
              <!-- first person end here----------->
             
         
            </div>
            <!-- all chats end here--------------->
          </div>
        </div>
        <!-- chat section end---------------->
      </div>
        <!-- left section end here---------------->

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->


        <!-- middle section start here ---------------->
      <div class="col-md-6 col-sm-12 middle-section">
        <!-- about person start here----------------- -->
       <div class="about-person">
        <div class="name-img">
          <div class="image">
            <img class="about-person-img" src="img/p1.jpg" alt="">
          </div>
          <div class="image">
            <p><b style="font-size: 20px;font-weight: 500;">Scott Albright</b><br>
           <b style="font-size: 13px;font-weight: 400;">Active 35m ago</b>  </p>
          </div>
        </div>
        <!-- call system------------- -->
        <div class="call-system">


          <!-- audio---------------- -->
          <div class="options" data-bs-toggle="modal" data-bs-target="#mymodal">
            <a href="#"><i class="fa-solid fa-phone option-all"></i></a>
          </div>
          <!-- modal------------ -->
          <div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="mymodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body main-modal text-center ">
                  <!-- img-------------- -->
                  <div class="modal-all mb-5"> 
                    <img class="modal-img" src="img/p1.jpg" alt="">
                  </div>
                  <!-- name-------------- -->
                  <div class="modal-all mb-5"> 
                    <p><b style="font-size: 30px;font-weight: 500;">Scott Albright</b><br>
                    <b style="font-size: 22px; font-weight: 400;">calling..</b></p>
                  </div>
                  <!-- logo-------------- -->
                  <div class="modal-all mb-5">
                   <a href="#"> <i class="fa-solid fa-phone modal-icon1" data-bs-dismiss="modal"></i></a>
               <a href="#"> <i class="fa-solid fa-phone modal-icon2" data-bs-dismiss="modal"></i></a>
                  </div>             
                </div>
              </div>
            </div>
          </div>
          <!-- modal------------ -->
          <!-- audio---------------- -->



          <!-- vedio---------------- -->
          <div class="options" data-bs-toggle="modal" data-bs-target="#mymodal1">
           <a href="#"> <i class="fa-sharp fa-solid fa-video option-all"></i></a>
          </div>
             <!-- modal------------ -->
             <div class="modal fade" id="mymodal1" tabindex="-1" aria-labelledby="mymodal1Labe1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body main-modal text-center ">
                    <!-- img-------------- -->
                    <div class="modal-all mb-5"> 
                      <img class="modal-img" src="img/p1.jpg" alt="">
                    </div>
                    <!-- name-------------- -->
                    <div class="modal-all mb-5"> 
                      <p><b style="font-size: 30px;font-weight: 500;">Scott Albright</b><br>
                      <b style="font-size: 22px; font-weight: 400;">calling..</b></p>
                    </div>
                    <!-- logo-------------- -->
                    <div class="modal-all mb-5">
                     <a href="#"><i class="fa-sharp fa-solid fa-video modal-icon1" data-bs-dismiss="modal"></i></a> 
                 <a href="#"> <i class="fa-solid fa-phone modal-icon2" data-bs-dismiss="modal"></i></a>
                    </div>             
                  </div>
                </div>
              </div>
            </div>
            <!-- modal------------ -->
          <!-- vedio---------------- -->


          <!-- three dot---------------- -->
          <div class="options"  data-bs-toggle="dropdown">
            <a href="#"><i class="fa-sharp fa-solid fa-ellipsis option-all"></i></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Delete</a></li>
            </ul>
          </div>
          <!-- three dot---------------- -->

        </div>
        <!-- call system------------- -->

       </div>
       <hr>
        <!-- about person end here----------------- -->

        <!-- messing start here------------- -->
       <div class="messings mt-4 p-3">
        <!-- first messege start here------------ -->
        <div class="messing-lists1 mb-4">
          <div class="main-messege d-flex">
              <div class="person-img">
             <img style="height: 50px;width:50px;border-radius:50%;" src="img/p1.jpg" alt="">
              </div>
              <div class="person-msg ps-3">
                <div class="first-msg">
                  Hi James! Whats Up?
                </div>
                <div class="first-msg-date">
                 <b class="last-time">yesterday 14:12 am</b> 
                </div>
              </div>
          </div>
        </div> 
        <!-- first messege end here------------ -->
        
        <!-- first messege start here------------ -->
        <div class="messing-lists2 mb-4">
          <div class="main-messege">
            <div class="person-msg ps-3">
              <div class="first-msg1">
               good u?
              </div>
              <div class="first-msg-date">
               <b class="last-time">
                yesterday 14:12 am</b>
               <i class="fa-solid fa-check-double double-check"></i> 
              </div>
            </div>
        </div>
        </div> 
        <!-- first messege end here------------ -->
        <!-- first messege start here------------ -->
        <div class="messing-lists1 mb-4">
          <div class="main-messege d-flex">
              <div class="person-img">
             <img style="height: 50px;width:50px;border-radius:50%;" src="img/p1.jpg" alt="">
              </div>
              <div class="person-msg ps-3">
                <div class="first-msg">
                  also fine.
                </div>
                <div class="last-time">yesterday 14:12 am</div>
              </div>
          </div>
        </div> 
        <!-- first messege end here------------ -->
        <!-- first messege start here------------ -->
        <div class="messing-lists2 mb-4">
          <div class="main-messege">
            <div class="person-msg ps-3">
              <div class="first-msg1">
                lets meet tonight
              </div>
              <div class="first-msg-date">
               <b class="last-time">yesterday 14:12 am</b> 
               <i class="fa-solid fa-check-double double-check"></i>
              </div>
            </div>
        </div>
        </div> 
        <!-- first messege end here------------ -->
        <div class="text-center"><b style="font-size: 13px;font-weight: 400;">Today</b></div>
        <!-- first messege start here------------ -->
        <div class="messing-lists1 mb-4">
          <div class="main-messege d-flex">
              <div class="person-img">
             <img style="height: 50px;width:50px;border-radius:50%;" src="img/p1.jpg" alt="">
              </div>
              <div class="person-msg ps-3">
                <div class="first-msg">ok.10 o clock?</div>
                <div class="last-time">yesterday 14:12 am</div>
              </div>
          </div>
        </div> 
        <!-- first messege end here------------ -->
        <!-- first messege start here------------ -->
        <div class="messing-lists2 mb-4">
          <div class="main-messege">
            <div class="person-msg ps-3">
              <div class="first-msg1">
               alright.see u there
              </div>
              <div class="first-msg-date">
               <b class="last-time">yesterday 14:12 am</b> 
               <i class="fa-solid fa-check-double double-check"></i>
              </div>
            </div>
        </div>
        </div> 
        <!-- first messege end here------------ -->
       
        <!-- first messege start here------------ -->
        <div class="messing-lists1 mb-4">
          <div class="main-messege d-flex">
              <div class="person-img">
             <img style="height: 50px;width:50px;border-radius:50%;" src="img/p1.jpg" alt="">
              </div>
              <div class="person-msg ps-3">
                <div class="first-msg">ok.bye</div>
                <div class="last-time">yesterday 14:12 am</div>
              </div>
          </div>
        </div> 
        <!-- first messege end here------------ -->
        <div class="text-center"><b style="font-size: 13px;font-weight: 400;">1 messege read</b></div>
        <!-- first messege start here------------ -->
        <div class="messing-lists2 mb-4">
          <div class="main-messege">
            <div class="person-msg ps-3">
              <div class="first-msg1">
                Hi James! Whats Up?
              </div>
              <div class="first-msg-date">
               <b class="last-time">yesterday 14:12 am</b> 
               <i class="fa-solid fa-check-double double-check"></i>
              </div>
            </div>
        </div>
        </div> 
        <!-- first messege end here------------ -->
        <!-- first messege start here------------ -->
        <div class="messing-lists1 mb-4">
          <div class="main-messege d-flex">
              <div class="person-img">
             <img style="height: 50px;width:50px;border-radius:50%;" src="img/p1.jpg" alt="">
              </div>
              <div class="person-msg ps-3">
                <div class="first-msg">bye then</div>
                <div class="last-time">yesterday 14:12 am</div>
              </div>
          </div>
        </div> 
        <!-- first messege end here------------ -->
        <!-- first messege start here------------ -->
        <div class="messing-lists2 mb-4">
          <div class="main-messege">
            <div class="person-msg ps-3">
              <div class="first-msg1">
                take care
              </div>
              <div class="first-msg-date">
               <b class="last-time">yesterday 14:12 am</b> 
               <i class="fa-solid fa-check-double double-check"></i>
              </div>
            </div>
        </div>
        </div> 
        <!-- first messege end here------------ -->
       </div>
        <!-- messing start here------------- -->

        <!-- type section start here----------- -->
       <div class="type-section d-flex mt-3">
        <div class="type-box">
          <input class="type-box-search" type="search" placeholder="Search">
        </div>
        <div class="send-files">
          <a href="#"><i class="fa-regular fa-face-smile send-file-icon"></i></a>
            <a href=""><i class="fa-solid fa-paperclip send-file-icon"></i></a>
            <a href=""><i class="fa-solid fa-microphone send-file-icon"></i></a>
            <a href=""><i class="fa-solid fa-paper-plane send-file-icon1"></i></a>
        </div>
       </div>
        <!-- type section end here----------- -->
      </div>
        <!-- middle section end here ---------------->

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->


        <!-- right section start here ---------------->
      <div class="col-md-2 col-sm-12 right-section">
 <!-- cross logo------------------- -->
        <div class="cross mt-4 mb-3">  
            <i class="fa-solid fa-xmark cross1"></i>
        </div>
<!-- setting image------------------ -->
        <div class="setting-img text-center">
          <img class="setting-img1" src="img/p1.jpg" alt="img-1">
          <p style="font-size: 20px;font-weight: 500;">Scott Albright</p>
        </div>

<!-- setting menu start here--------------------- -->
        <div class="setting-menu">

          <!-- main accordion--------------- -->
          <div class="accordion" id="accordionExample">
            <!-- itean one------------- -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button " data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Media (31)
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body text-center">
                  <div class="media-img d-flex">
                    <div>
                      <img style="height: 60px;width: 60px;" src="img/img-1.jpg" alt="">
                    </div>
                    <div>
                      <img style="height: 60px;width: 60px;" src="img/img-1.jpg" alt="">
                    </div>
                    <div>
                      <img style="height:60px ;width: 60px;" src="img/img-1.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- itean two------------- -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  About and phone number
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body text-center">
                  <p style="font-size: 13px;">Help people to build websites and apps + grow awareness in social media 🔥
                    Phone: +(33 1) 45 55 01 10</p> 
                </div>
              </div>
            </div>
            <!-- itean two------------- -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Settings
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body ">
                <a href="#"><i class="fa-solid fa-ban block-icon me-2 mb-3"></i></a> <b class="block">Block</b> <br>
                <a href="#"><i class="fa-solid fa-thumbs-down reprt-del me-2  mb-3"></i></a><b class="rd">Report Contact</b> <br>
                <a href="#"><i class="fa-solid fa-trash reprt-del me-2  mb-3"></i></a> <b class="rd">Delete Chat</b> <br>
                </div>
              </div>
            </div>
          </div>
          <!-- main accordion--------------- -->

        </div>
<!-- setting menu end here-------------------- -->



      </div>
        <!-- right section end here ---------------->

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    </div>
    <!-- main container end here--------------------->




        <!-- link kit code...................... -->
 <script src="https://kit.fontawesome.com/a5fff4c5b6.js" crossorigin="anonymous"></script>
 <!-- link kit code...................... -->

      <!-- bootstrap link cdn---------------- -->
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap link cdn---------------- -->
  </body>
</html>
