 <div class="container">
   <div class="celular">
     <div class="agua">
        <div class="bote">
        <div class="bote3"></div>
        <div class="cabina">
            <span class="cabina3"></span>
            <div class="salva"></div>
       </div>
      <div class="burbujas">
        <span class="b0"></span>
        <span class="b1"></span>
        <span class="b2"></span>
        <span class="b3"></span>
        <span class="b4"></span>
        <span class="b5"></span>
        <span class="b6"></span>
        <span class="b7"></span>
        <span class="b8"></span>
        <span class="b9"></span>
      </div>
    </div>  
    <div class="bird"><span class="alas"></span><span class="alas7"></span></div>
    <div class="bird3"><span class="alas3"></span><span class="alas9"></span></div>
   <div>
  </div>
         <style>
             body{
  background:black;
}
.container{
  position:relative;
  width:800px;
  height:600px;
  background:#ccc;
  margin:121px auto;
}
.celular{
  position:absolute;
  width: 350px;
  height:530px;
  border-radius:30px;
  background:#121212;
  margin: 35px 231px;
  transform:scale(.9)
 }
.celular::before{
  content:"";
  display:block;
  width: 21px;
  height:21px;
  border-radius:100%;
  background:#333;
  margin: 12px 162px;
}
.celular::after{
  content:"";
  display:block;
  width: 40px;
  height:40px;
  border-radius:100%;
  background:#333;
  margin: 434px 155px;
}
.agua{
  position:absolute;
  width:291px;
  height:400px;
  background:#7dd7cf;
  margin: 12px 30px;
  overflow:hidden;
  }
.bote{
    position:absolute;
    border-top: 172px solid white;
    border-left: 12px solid transparent;
    border-right: 12px solid transparent;
    height: 0;
    width: 162px;
    margin:152px 53px;
    animation: ani .50s linear infinite;
}
.bote::before{
    content:"";
    display:block;
    top: 0;
    left: 0;
    width: 172px;
    height: 173px;
    background:white;
    border-radius: 70px 70px 0 70px;
    transform: rotate(-135deg);
    margin:-253px -5px;
}
.bote3{
    position:absolute;
    border-top: 132px solid #d3b38e;
    border-left: 12px solid transparent;
    border-right: 11px solid transparent;
    height: 0;
    width: 133px;
    margin: 182px 3px;
}
.bote3::before{
    content:"";
    display:block;
    top: 0;
    left: 0;
    width: 151px;
    height: 152px;
    background:#d3b38e;
    border-radius: 70px 70px 0 70px;
    transform: rotate(-135deg);
    margin:-212px -9px;
}
.cabina{
  position:absolute;
  width:121px;
  height:90px;
  background: -webkit-gradient(left top, right top, color-stop(0%, rgba(226,226,226,1)), color-stop(50%, rgba(226,226,226,1)), color-stop(50%, rgba(209,209,209,1)), color-stop(100%, rgba(209,209,209,1)));
background: -webkit-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(226,226,226,1) 50%, rgba(209,209,209,1) 50%, rgba(209,209,209,1) 100%);
background: linear-gradient(to right, rgba(226,226,226,1) 0%, rgba(226,226,226,1) 50%, rgba(209,209,209,1) 50%, rgba(209,209,209,1) 100%);
  margin:192px 21px;
  box-shadow: -2px 21px 16px -8px rgba(179,131,100,1);
}
.cabina::before{
    content:"";
    display:block;
    width: 0;
    height: 0;
    border-bottom: 30px solid #d1d1d1;
    border-right: 60px solid transparent;
    margin: -30px 60px;
}
.cabina::after{
    content:"";
    display:block;
    width: 0;
    height: 0;
    border-bottom: 30px solid #e2e2e2;
    border-left:60px solid transparent;
    margin: -30px 0px;
}
.cabina3{
    position:absolute;
    width: 60px;
    height: 12px;
    transform: rotate(-12deg);
    background: #96dfdb;
    border:3px solid white;
    margin: 7px -3px;
  }
.cabina3::before{
    content:"";
    display:block;
    width: 60px;
    height: 12px;
    transform: rotate(21deg);
    background: #96dfdb;
    border:3px solid white;
    margin: 9px 58px
}
.salva{
  position:absolute;
  width:12px;
  height:12px;
  border-radius:100%;
  border-top:9px solid #db6671;
  border-right:9px solid white;
  border-bottom:9px solid #db6671;
  border-left:9px solid white;
  margin:-53px 45px;
}
.burbujas {
  position: absolute;
  z-index: 3;
  width: 0.1em;
  height: 16em;
  margin:373px 37px;
  transform: rotate(180deg);
}
.burbujas span {
  display: block;
  position: absolute;
  bottom: -3.5em;
  left: 50%;
  margin-left: -2em;
  height: 0;
  width: 0;
  border: 12px solid white;
  border-radius: 3.5em;
  left: -1.4em;
  opacity: 0;
  transform: scale(0.2);
}


@keyframes burbujasL {
  0% {transform: scale(0.2) translate(0, 0);}
  10% {
    opacity: 1;
    transform: scale(0.2) translate(0, -5px);}
  100% {
    opacity: 0;
    transform: scale(1) translate(-20px, -130px);}
}

@keyframes burbujasR {
  0% {transform: scale(0.2) translate(0, 0);}
  10% {
    opacity: 1;
    transform: scale(0.2) translate(0, -5px);}
  100% {
    opacity: 0;
    transform: scale(1) translate(20px, -130px);}
}
.burbujas .b0 {animation: burbujasL 10s 0s infinite;}

.burbujas .b1 {animation: burbujasR 10s 1s infinite;}

.burbujas .b2 {animation: burbujasL 10s 2s infinite;}

.burbujas .b3 {animation: burbujasR 10s 3s infinite;}

.burbujas .b4 {animation: burbujasL 10s 4s infinite;}

.burbujas .b5 {animation: burbujasR 10s 5s infinite;}

.burbujas .b6 {animation: burbujasL 10s 6s infinite;}

.burbujas .b7 {animation: burbujasR 10s 7s infinite;}

.burbujas .b8 {animation: burbujasR 10s 8s infinite;}

.burbujas .b9 {animation: burbujasR 10s 9s infinite;}

.bird{
  position:absolute;
  width:16px;
  height:27px;
  background:white;
  border-radius:100%;
  margin:21px 50px;
  animation:volar3 5s alternate infinite;
  }
.bird::before{
    content:"";
    display:block;
    width: 0;
    height: 0;
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    border-bottom: 7px solid orange;
    margin:-7px 5px;
}
.bird::after{
    content:"";
    display:block;
    width: 0;
    height: 0;
    border-left: 12px solid transparent;
    border-right: 12px solid transparent;
    border-bottom: 12px solid white;
    margin:30px -4px;
}
.alas{
  position:absolute;
  width:21px;
  height:12px;
  border-radius:12px 12px 0 0 ;
  background: white;
  margin:12px -17px;
  animation:ala 5s alternate infinite;
}
.alas7{
  position:absolute;
  width:21px;
  height:12px;
  border-radius:12px 12px 0 0 ;
  background: white;
  margin:12px 12px;
 animation:ala3 5s alternate infinite;
 }
.alas7::after{
    content:"";
    position:absolute;
    width: 0;
    height: 0;
    border-bottom: 9px solid gray;
    border-right: 9px solid transparent;
    margin: 3px 3px;
}
.bird3{
  position:absolute;
  width:16px;
  height:27px;
  background:white;
  border-radius:100%;
  margin:50px 221px;
  animation:volar5 5s alternate infinite;
}
.bird3::before{
    content:"";
    display:block;
    width: 0;
    height: 0;
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    border-bottom: 7px solid orange;
    margin:-7px 5px;
}
.bird3::after{
    content:"";
    display:block;
    width: 0;
    height: 0;
    border-left: 12px solid transparent;
    border-right: 12px solid transparent;
    border-bottom: 12px solid white;
    margin:30px -4px;
}
.alas3{
  position:absolute;
  width:21px;
  height:12px;
  border-radius:12px 12px 0 0 ;
  background: white;
  margin:12px -17px;
  animation:ala 5s alternate infinite;
}
.alas9{
  position:absolute;
  width:21px;
  height:12px;
  border-radius:12px 12px 0 0 ;
  background: white;
  margin:12px 12px;
  animation:ala3 5s alternate infinite;
}
.alas9::after{
    content:"";
    position:absolute;
    width: 0;
    height: 0;
    border-bottom: 9px solid gray;
    border-right: 9px solid transparent;
    margin: 3px 3px;
}
@keyframes ani{
  0% {transform:translatey(0px)}
  100% {transform:translatey(-3px)}
}

@keyframes volar3 {
   0% {transform:translatey(30px); }
  100% {transform:translatey(40px); }}

@keyframes volar5  {
  0% {transform:translatey(-12px); }
  100% {transform:translatey(-21px); }}

@keyframes ala {
  0% {transform: rotate(0deg);}
  50% {transform: rotate(-12deg);}
  100% {transform: rotate(0deg);}}

@keyframes ala3 {
  0% {transform: rotate(0deg);}
  50% {transform: rotate(12deg);} 
  100% {transform: rotate(0deg);}
}
         </style>
