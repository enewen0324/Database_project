<style>
    a{
        color: grey;
    }
    a:hover{
        color: white;
    }
    li {
        margin-left: 50px;
    }
    .nav-link{
        width: 30px;
    }
    .navbar-brand{
        width: 40%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 30%;
    }
    .navbar1{
        height: 80px;
        display: flex;
        align-items: center;
    }
    .navbar2{
        height: 150px;
        display: none;
        position: relative;
        background-color: lightgrey;
    }
    .navbarBtn{
        transform: rotate(90deg);
        font-size: 30px;
        height: 50%;
        width: 4%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 20px;
        color: white;
        /* border: solid white; */
        border-radius: 30%;
    }
    .btn{
        margin-right: 10px;
    }
</style>

<div class="dropdown">
    <nav class="navbar1 navbar-expand-lg navbar-dark bg-dark">
        <span class="navbarBtn">⏏︎</span>
        <a class="navbar-brand" href="/index">
            <span class="h3 mx-1"> 人生終點站 </span>
        </a>
    </nav>

    <nav class="navbar2 navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/index">首頁<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/customizedSearch"> 預定／查詢 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/etiquette/all"> 禮儀社 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/public_cem/all"> 公墓 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/undertaker/all"> 殯儀館 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/fireplace/all"> 火化場 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pagoda/all"> 墓園寶塔 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contract/all"> 生前契約 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/greenburial/all"> 自然葬 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/test"> 測驗 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/calender/search"> 農民曆查詢 </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Search </button>
            </form>
        </div>
    </nav>
    
</div>


<script>
let dropdownBtn = document.querySelector('.navbarBtn');
let menuContent = document.querySelector('.navbar2');
var rotate = false;
dropdownBtn.addEventListener('click',()=>{
    if(menuContent.style.display===""){
        menuContent.style.display="block";
    } 
    else{
        menuContent.style.display="";
    }
    
})
var rocket = document.querySelector('.navbarBtn');
var btn = document.querySelector('.navbarBtn');
var rotate = false;
var runner;
var degrees = 90;
var goal = 0;

function flip1(){
    goal = degrees-90;
    runner = setInterval(function(){
        if(degrees > goal){
            degrees-=2.5;
        }
        else{
            clearInterval(runner);
        }
        rocket.style.webkitTransform = 'rotate(' + degrees + 'deg)';
    },0.5)
}

function flip2(){
    goal = degrees+90;
    runner = setInterval(function(){
        if(degrees < goal){
            degrees+=2.5;
        }
        else{
            clearInterval(runner);
        }
        rocket.style.webkitTransform = 'rotate(' + degrees + 'deg)';
    },0.5)
}

btn.addEventListener('click', function(){
    if (!rotate){
        rotate = true;
        flip2();
    } else {
        rotate = false;
        flip1();
    }
})

</script>