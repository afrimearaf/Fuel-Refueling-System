<div class="frame">
   <div class="probox">
     <div class="promain">

       <div class="picture">
         <div class="circle1"></div>
         <div class="circle2"></div>
         <img class="pic" src="https://avatars1.githubusercontent.com/u/14000194?s=400&u=d0b06c3e202340b80b5ce6a75073644a3f2393a6&v=4" alt="">
       </div>

       <p class="name">>Mahak Narayan</p>
       <p class="bio">Developer</p>
       <div class="bt">
         <p>Follow</p>
       </div>
       <div class="bt">
         <p>Message</p>
       </div>
     </div>

     <div class="posts"> 523 <p class="small">Posts</p>
     </div>

     <div class="likes"> 1387 <p class="small">Likes</p>
     </div>

     <div class="followers"> 146<p class="small">Follower</p>
     </div>

   </div>
 </div>





 @import url('https://fonts.googleapis.com/css?family=Tajawal:300,400');

body{
    font-family: 'Tajawal', sans-serif;
}

.frame{
    width: 400px;
    height:400px;
    background: linear-gradient(to right, #eb3349, #f45c43);
    font-family: 'Tajawal', sans-serif;
    box-shadow: 1px 2px 10px grey;
    /* center itself */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    /* center its children */
    display: flex;
    align-items: center;
    justify-content: center;
}

.probox{
    width: 300px;
    height: 300px;
    box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
    display: grid;
    grid-template-columns: 5fr 3fr;
    grid-template-rows: repeat(3, 1fr);
    grid-row-gap: 2px;
}

.promain{
    background: white;
    grid-row: 1 / -1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

    .picture{
        position: relative;
    }

    .circle1, .circle2{
        border: 1px solid grey;
        border-radius: 50%;
        box-sizing: border-box;
        transition: all 1.5s;
        position: absolute;
    }

    .circle1{
        height: 80px;
        width: 80px;
        border-color: grey transparent grey grey;
        left: -5px;
        top: -5px;
    }

    .circle2{
        height: 76px;
        width:76px;
        border-color:grey grey grey transparent;
        top: -3px;
        left: -3px;
    }

    .picture:hover .circle1, .picture:hover .circle2{
        transform: rotate(360deg);
        cursor: pointer;
    }

    .pic{
        height: 70px;
        width: 70px;
        border-radius: 50%;
        z-index: 1;
    }

    .bio{
        font-weight: 20;
        font-size: 12px;
        position: relative;
        top: -28px;
    }

    .bt{
        width: 100px;
        height: 22px;
        border: black solid;
        border-radius: 40px;
        margin: 3.4px;
        text-align: center;
        font-size: 12px;
    }

    .bt p{
        position: relative;
        top: -6px;
        font-weight: bold;
    }

.posts, .likes, .followers{
    background: #ff6347;
    color: #010101;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-size: 20px;
}

.posts:hover, .likes:hover, .followers:hover{
    cursor: pointer;
    background: #e5593f;
}

    .small {
        font-size: 12px;
        font-weight: lighter;
        margin-top: -5px;
    }
