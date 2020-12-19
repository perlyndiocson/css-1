<body>
    <div class="container centered">
        <div class="character__head centered-horizontally">
            <div class="character__hair">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="character__face">
                <div class="character__eyes"></div>
                <div class="character__eyebros"></div>
                <div class="character__mouth"></div>
            </div>
            <div class="character__neck"></div>
        </div>
        <div class="character__body centered-horizontally">
            <div class="character__chest"></div>
            <div class="character__hand hand--left">
                <span class="fingers"></span>
            </div>
            <div class="character__hand hand--right">
                <span class="fingers">
                      
                </span>
                <div class="phone"></div>
            </div>
            <div class="towel"></div>
            <div class="character__short"></div>
            <div class="character__legs">
                <span class="leg--right"></span>
                <span class="leg--left"></span>
            </div>
        </div>
        
        <div class="floor centered-horizontally"></div>
    </div>
    <div class="credits centered-horizontally">
            <p>Animated the  <a href="https://dribbble.com/shots/4707773-Summer-Character-Design" target="_blank">shot</a> by <a href="https://dribbble.com/gigantic_click">Gigantic</a></p>
        <p>Developed with ❤ and CSS by <a href="https://codepen.io/akhil_001/" target="_blank">Akhil Sai Ram</a> </p>
    
</body>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
:root {
    --var-border: 1px solid #111;
    --background-color: #fffad3;
    --skin-color: #f8c09d;
    --short-color: #723270;
    --towel-color: #f48c2f;
    --skin-dark-color: #ef937e;
    --spects-color: #06253b;
    --spects-reflect-color: #7b8e9d;
    --towel-dark-color: #e84432;
    --phone-color: #052337;
    --eyebro-color: #e64431;
    --hair-color: #f59d29;
    --hair-dark-color: #f27d35;
    --floor-color: #fbd7ab;
    --mouth-color: #fefbf9;
}

body {
    background: var(--background-color);
    font-size: 16vmax;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.centered-horizontally {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
}

.container {
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    width: 2em;
    height: 3em;
    /*border:var(--var-border);
    */
}

.floor {
    top: 91%;
    width: 45%;
    height: 2%;
    border-radius: 0.005em;
    -webkit-border-radius: 0.005em;
    -moz-border-radius: 0.005em;
    -ms-border-radius: 0.005em;
    -o-border-radius: 0.005em;
    background: var(--floor-color);
}

.character__head {
    left: 55%;
    top: 10%;
    width: 20%;
    height: 20%;
    /* border:var(--var-border); */
}

.character__hair {
    position: absolute;
    left: 50%;
    top: 0%;
    width: 120%;
    height: 45%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    /* border: var(--var-border);   */
}

.character__hair span {
    position: absolute;
    left: 5%;
    top: 0%;
    width: 90%;
    height: 55%;
    background: var(--hair-dark-color);
    border-bottom-left-radius: 20%;
    border-top-right-radius: 55%;
}

.character__hair span:nth-child(1) {
    position: absolute;
    left: 0%;
    top: -5%;
    width: 80%;
    height: 60%;
    background: var(--hair-color);
    border-radius: 10%;
    -webkit-border-radius: 10%;
    -moz-border-radius: 10%;
    -ms-border-radius: 10%;
    -o-border-radius: 10%;
}

.character__hair span:nth-child(3) {
    position: absolute;
    left: 80%;
    top: 0%;
    width: 25%;
    height: 130%;
    background: var(--hair-dark-color);
    border-bottom-left-radius: 20%;
    border-bottom-right-radius: 55%;
}

.character__face {
    position: absolute;
    left: 50%;
    top: 25%;
    width: 80%;
    height: 65%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    /* border: var(--var-border); */
    border-bottom-left-radius: 40%;
    background: var(--skin-color);
    z-index: 3;
}

.character__eyes {
    position: absolute;
    left: 50%;
    top: 30%;
    width: 110%;
    height: 35%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
}

.character__eyes::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0%;
    width: 50%;
    height: 80%;
    background: var(--spects-color);
    border-bottom-left-radius: 150%;
    border-bottom-right-radius: 150%;
    animation: reflect 5s infinite linear;
    -webkit-animation: reflect 5s infinite linear;
}

.character__eyes::after {
    content: '';
    position: absolute;
    left: 0%;
    top: 0%;
    width: 50%;
    height: 80%;
    background: var(--spects-color);
    border-bottom-left-radius: 100%;
    border-bottom-right-radius: 100%;
    animation: reflect 5s infinite linear;
    -webkit-animation: reflect 5s infinite linear;
}

.character__eyebros {
    position: absolute;
    left: 50%;
    top: 5%;
    width: 110%;
    height: 15%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
}

.character__eyebros::before {
    content: '';
    position: absolute;
    left: 25%;
    width: 30%;
    height: 60%;
    top: 20%;
    /*border:var(--var-border);
    */background: var(--hair-color);
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    border-radius: 25%;
    -webkit-border-radius: 25%;
    -moz-border-radius: 25%;
    -ms-border-radius: 25%;
    -o-border-radius: 25%;
    /*box-shadow:0px 5px 0px #111;
    */animation:move-up 5s infinite linear ;
    -webkit-animation:move-up 5s infinite linear ;
}

.character__eyebros::after {
    content: '';
    position: absolute;
    left: 75%;
    width: 30%;
    height: 60%;
    top: 20%;
    /* border:var(--var-border); */
    background: var(--hair-color);
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    border-radius: 25%;
    -webkit-border-radius: 25%;
    -moz-border-radius: 25%;
    -ms-border-radius: 25%;
    -o-border-radius: 25%;
    /* box-shadow:0px 5px 0px #111; */
}

.character__mouth {
    position: absolute;
    left: 52%;
    top: 65%;
    background: var(--mouth-color);
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    animation: pout 5s linear infinite;
    -webkit-animation: pout 5s linear infinite;
}

.character__neck {
    position: absolute;
    left: 75%;
    top: 80%;
    width: 30%;
    height: 21%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    /* border: var(--var-border); */
    background: var(--skin-dark-color);
}

.character__body {
    top: 30%;
    width: 75%;
    height: 55%;
    /* border:var(--var-border); */
}

.character__chest {
    position: absolute;
    top: 0%;
    left: 38%;
    width: 30%;
    height: 45%;
    /* border: var(--var-border); */
    background: linear-gradient(to bottom, var(--skin-color), var(--skin-dark-color));
    border-radius: 5%;
    z-index: 30;
    -webkit-border-radius: 5%;
    -moz-border-radius: 5%;
    -ms-border-radius: 5%;
    -o-border-radius: 5%;
    border-top-left-radius: 40%;
    border-bottom-left-radius: 10px;
}

.character__chest::after,
.character__chest::before {
    position: absolute;
    content: '';
    left: 15%;
    top: 20%;
    width: 10px;
    height: 10px;
    border-radius: 100%;
    ;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    -o-border-radius: 100%;
    background: var(--skin-dark-color);
}

.character__chest::after {
    left: 65%;
}

.character__short {
    position: absolute;
    top: 45%;
    left: 42%;
    width: 26%;
    height: 10%;
    /* border:var(--var-border); */
    background: var(--short-color);
    border-bottom-left-radius: 15px;
}

.character__legs {
    position: absolute;
    top: 55%;
    left: 50%;
    width: 17%;
    height: 55%;
    /* border: var(--var-border); */
}

.leg--right {
    position: absolute;
    top: 0%;
    left: 0%;
    width: 50%;
    height: 100%;
    /* border: var(--var-border); */
    background: var(--skin-dark-color);
    z-index: 2;
}

.leg--left {
    position: absolute;
    top: 0%;
    left: 50%;
    width: 50%;
    height: 100%;
    z-index: 3;
    background: var(--skin-color);
}

.leg--left::before,
.leg--right::before {
    content: '';
    position: absolute;
    left: -50%;
    top: 95%;
    width: 150%;
    height: 10%;
    background: var(--skin-color);
}

.leg--right::before {
    background: var(--skin-dark-color);
}

.character__hand {
    position: absolute;
    left: 0%;
    width: 100%;
    top: 0%;
    height: 100%;
    z-index: 10;
}

.hand--left::after {
    content: '';
    position: absolute;
    top: 41%;
    width: 27.5%;
    height: 5%;
    left: 67%;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    background: var(--skin-color);
}

.hand--left::before {
    content: '';
    position: absolute;
    top: -2%;
    width: 56%;
    height: 5%;
    background: var(--skin-color);
    left: 65%;
    transform-origin: left center;
    transform: rotate(60deg);
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;

}

.hand--right {
    content: '';
    position: absolute;
    left: -20%;
    top: 0%;
    width: 79%;
    height: 5%;
    background: var(--skin-dark-color);
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    transform-origin: 80% 20%;
    transform: rotate(30deg);
    -webkit-transform: rotate(3deg);
    -moz-transform: rotate(3deg);
    -ms-transform: rotate(3deg);
    -o-transform: rotate(3deg);
    animation: moveCamera 5s linear infinite;
    -webkit-animation: moveCamera 5s linear infinite;
}

.fingers {
    position: absolute;
    width: 10%;
    height: 10%;
    border-radius: 100%;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    -o-border-radius: 100%;
    /* border: var(--var-border); */
    background: var(--skin-color);
    z-index: 40;
}

.hand--left .fingers {
    left: 62%;
    top: 45%;
    background: var(--skin-dark-color);
    background-image: radial-gradient(var(--skin-dark-color) 0%, var(--skin-color) 95%);
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
}

.hand--right .fingers {
    left: -1%;
    top: 50%;
    width: 0.15em;
    height: 0.15em;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
}

.phone {
    position: absolute;
    left: 5%;
    top: -100%;
    width: 5%;
    height: 0.2em;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    background: var(--phone-color);
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
}

.phone::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 10%;
    width: 0.025em;
    height: 0.025em;
    border-radius: 100%;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    -o-border-radius: 100%;
    background: #fff;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
}

.phone::after {
    content: '';
    position: absolute;
    left: 100%;
    top: 90%;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    height: 1.0em;
    width: 1em;
    -webkit-clip-path: polygon(0 30%, 100% 0, 100% 100%, 0 50%);
    clip-path: polygon(0 30%, 100% 0, 100% 100%, 0 50%);
    animation: flash 5s infinite linear;
    -webkit-animation: flash 5s infinite linear;
}

.towel {
    position: absolute;
    left: 73%;
    top: 42%;
    width: 15%;
    height: 45%;
    z-index: 30;

}

.towel::before {
    content: '';
    position: absolute;
    left: -15%;
    top: 10%;
    width: 100%;
    height: 60%;
    /* border: var(--var-border); */
    z-index: 1;
    background: var(--towel-dark-color);
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
}

.towel::after {
    content: '';
    position: absolute;
    left: 0%;
    top: -1%;
    width: 100%;
    height: 100%;
    /* border: var(--var-border); */
    background: var(--towel-color);
    z-index: 2;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
}


@keyframes moveCamera {

    30%,
    50% {
        transform: rotate(15deg);
        -webkit-transform: rotate(15deg);
        -moz-transform: rotate(15deg);
        -ms-transform: rotate(15deg);
        -o-transform: rotate(15deg);
    }

    80%,
    100% {
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
    }
}

@keyframes flash {

    0%,
    48% {
        background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));
    }

    50%,
    55% {
        background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
    }

    55%,
    93% {
        background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));
    }

    95%,
    100% {
        background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
    }
}

@keyframes reflect {

    0%,
    48% {
        background: var(--spects-color);
    }

    50%,
    55% {
        background: var(--spects-reflect-color);
    }

    55%,
    93% {
        background: var(--spects-color);
    }

    95%,
    100% {
        background: var(--spects-reflect-color);
    }
}

@keyframes pout {

    0%,
    38% {
        left: 52%;
        top: 65%;
        width: 80%;
        height: 28%;
        border-bottom-left-radius: 100%;
        border-bottom-right-radius: 100%;
        border-top-left-radius: 25%;
        border-top-right-radius: 25%;
    }

    40%,
    83% {
        width: 0.110em;
        height: 0.110em;
        border-radius: 100%;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        -ms-border-radius: 100%;
        -o-border-radius: 100%;
    }

    85%,
    100% {
        left: 52%;
        top: 65%;
        width: 80%;
        height: 28%;
        border-bottom-left-radius: 100%;
        border-bottom-right-radius: 100%;
        border-top-left-radius: 25%;
        border-top-right-radius: 25%;
    }
}
@keyframes move-up {

    0%,
    38% {
        top: 20%;
    }

    40%,
    83% {
        top: 0%;
    }

    85%,
    100% {
        top: 20%;
    }
}
.credits
{
  font:'Roboto',sans-serif;
    top:91%;
    text-align: center;
    font-size:0.085em;
}
</style>
