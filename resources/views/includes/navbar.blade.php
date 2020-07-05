<style>
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
        height: 60px;
        display: flex;
        align-items: center;
    }
    .navbar2{
        height: 150px;
        display: none;
    }
    .navbarBtn{
        height: 80%;
        width: 50px;
    }
    /* .dropdown:hover .navbar2 {
        display: block;
    } */
</style>

<div class="dropdown">
    <nav class="navbar1 navbar-expand-lg navbar-dark bg-dark">
        <img class="navbarBtn" src="https://cutcodedown.com/images/burgerIcon.png">
        <a class="navbar-brand" href="/index">
            <span class="h3 mx-1"> 人生終點站 </span>
        </a>
    </nav>

    <nav class="navbar2 navbar-expand-lg navbar-dark bg-dark">
        <!-- <a class="navbar-brand" href="/index">
            <span class="h3 mx-1"> 人生終點站 </span>
        </a> -->

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
                    <a class="nav-link" href="#"> 聯絡我們 </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Search </button>
            </form>
        </div>
    </nav>
    
</div>

<!-- <nav class="navbar2 navbar-expand-lg navbar-dark bg-dark">

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
                    <a class="nav-link" href="#"> 最新消息 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/etiquette/all"> 禮儀社 </a>
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
                    <a class="nav-link" href="#"> 生前契約 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/greenburial/all"> 自然葬 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> F A Q </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> 聯絡我們 </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Search </button>
            </form>
        </div>
</nav> -->

<script>
let dropdownBtn = document.querySelector('.navbarBtn');
let menuContent = document.querySelector('.navbar2');
dropdownBtn.addEventListener('click',()=>{
   if(menuContent.style.display===""){
      menuContent.style.display="block";
   } else {
      menuContent.style.display="";
   }
})
</script>