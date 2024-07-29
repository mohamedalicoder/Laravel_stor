@extends('layout.front_template')
@section('content')

<style>

@media (max-width: 1200px) {
.first-div-section-1 {
    flex-direction: column;
}
.section-2 {
    height: 100rem;
    padding: 60px;
    margin-top: -120px;
}
}
@media (max-width: 992px) {
.section-1 {
    height: 40rem;
}
.section-2 {
    height: 100rem;
    padding: 60px;
    margin-top: -120px;
}
}
@media (max-width: 768px) {
.section-1 {
    height: 35rem;
}
.section-2 {
    height: 100rem;
    padding: 60px;
    margin-top: -120px;
}
}
@media (max-width: 576px) {
.section-1 {
    height: 30rem;
}

.section-2 {
    height: 100rem;
    padding: 60px;
    margin-top: -120px;
}
}

.first-div-section-1 {
    display: flex;
    justify-content: space-between;
    padding: 100px;
}

.section-1 {
    background-image: url(https://avada.website/caterer/wp-content/uploads/sites/163/2021/11/catering-hero-image.jpg);
    background-position: center;
    background-size: cover;
    height: 46.5rem;
}



.main-section-2 {
    /*    background-image: url(./assets/img/meat-1);*/
    border-radius: 20px;
    margin-top: -70px;
    margin-bottom: 40px;

    padding-top: 50px;
    /*background-image: url(https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/home-background-hero-scaled.jpg);*/
    background-size: cover;
    background-position: center;
}

.pop-dish {
    cursor: pointer;
    transition: all ease 0.5s;
    margin:100px 0px 100px 0px;
    color: bisque;
}

.pop-dish:hover {
    color: #CE1A26;
}

.icons {
    justify-content: center;
}

.icons ul li {
    display: inline-block;
    color: bisque;
    font-size: 25px;
    transition: all ease 0.5s;
    cursor: pointer;


}

.icons ul li:hover {
    color: #CE1A26;
}

.photo {
    display: flex;
    justify-content: space-between;
    margin: 60px;
    transition: all ease 0.5s;
}

.photo-1:hover {
    filter: brightness(60%);
}

.photo-2:hover {
    filter: brightness(60%);
}

.photo-3:hover {
    filter: brightness(60%);
}






.text {
    display: flex;
    justify-content: space-around;
    margin-top: 30px;

}

.text a:hover {

    color: red;
}

.text a {
    margin-left: 50px;
    transition: all ease 0.5s;
    text-decoration: none;
    color:bisque;
    font-size: 35px;
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
}

.pp {
    display: flex;
    justify-content: space-around;
    margin-top: 25px;
    cursor: pointer;

}

.pp p {
    margin-left: -50px;
    font-size: 20px;
    color:bisque;
}

.pp p:hover {
    color: #CE1A26
}



.section-three {
    height: 50vh;
    background-image: url(https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/first-order-background-scaled.jpg);
    background-position: center;
    background-size: cover;
}

.section-four {
    display: flex;
    justify-content: space-between;
    padding: 150px;

}

.section-four h2 {
    font-size: 50px;
    font-weight: bolder;
}

.section-four button {
    width: 300px;
    border-radius: 30px;
    background-color: #CE1A26;
    color: bisque;
    font-size: 20px;
    transition: all ease 0.5s;
}

.section-four button:hover {
    transform: scale(1.2);

}





.dawen-photo {
    display: flex;
    justify-content: space-around;
}

.photo-2 > img {
    transition: all ease 0.5s;
    padding: 0px;
    width: 38vh;

}

.photo p {
    text-align: center;
    position: relative;
    top: -200px;
    color: bisque;
    font-size: 30px;
    font-weight: bolder;
}

.photo-2 p {
    text-align: center;
    position: relative;
    top: -150px;
    color: bisque;
    font-size: 30px;
    font-weight: bolder;
}

.photo-2 img:hover {
    filter: brightness(70%);
}

.dawen-photo {
    margin: 0px 200px;
}

.ordering-app {
    background-image: url(https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/app-ordering-scaled.jpg);
    background-position: center;
    background-size: cover;
    height: 70vh;
    margin-top: 100px;
    margin-bottom: 100px;
}

.ordering-app h2 {
    padding: 150px 0px 0px 50px;
    color: bisque;
    font-size: 50px;
    font-weight: bold;


}

.order-img {
    display: flex;

}

.order-img img {
    cursor: pointer;
    margin: 100px 0px 0px 50px;
    width: 300px;
}



.top-last button:hover {
    transform: scale(1.2);
}

.last-photo img {
    height: 60vh;
    width: 70vh;
    margin: 50px 0px 50px 50px;
    transition: all ease 0.5s;
    cursor: pointer;
}

.last-photo img:hover {
    filter: brightness(80%);
}

.last-photo h2 {
    transition: all ease 0.5s;
}

.last-photo h2:hover {
    color: #CE1A26;
}
a{
text-decoration: none;
}
p{
    color: bisque;
}


    </style>

    <section class="section-1">

        <div class="content">
            <div class="first-div-section-1">
                <h2 style="font-size: 50px; color: white;">Hungry? <br> <span
                        style="color: yellow; font-size: 80px;">Great Food</span><br>
                    <span style="font-size: 70px;">Delivered</span>
                </h2>
            </div>
            <div style="margin-left: 100px;">
                <a class="btn btn-success" href="{{URL('menu')}}"
                    >Veiw
                    Our Menu</a>

            </div>

        </div>

    </section>

        <div class="container">
        <section class="section-2  ">
        <div class="main-section-2">
            <div class="row ">
            <nav class="icons" style="text-align: center; padding-top:25px; ">
                <ul>
                    <a href="{{URL('menu')}}" class="btn btn-success col-2">APPETIZERS</a>
                    <a href="{{URL('menu')}}" class="btn btn-success col-2 ">BURGERS</a>
                    <a href="{{URL('menu')}}" class="btn btn-success col-2">PIZZAS</a>
                    <a href="{{URL('menu')}}" class="btn btn-success col-2">DESSERTS</a>
                </ul>
            </nav>
            </div>
            <div style="display: flex; justify-content: center;">
                <h1 class="pop-dish"  style="font-size: 50px; ">Our Most Popular Dishes</h1>
            </div>

                <div class="row justify-content-between">


                    <img class="photo-3 col-3" style="height: 35rem;" src="https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/choco-cookie-frappe-500x714.jpg"
                        alt="ice cream">

                    <img class="photo-3 col-3" style="height: 35rem;" src="https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/donut-burger-500x714.jpg"
                        alt="burger">

                    <img class="photo-3 col-3" style="height: 35rem;" src="https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/skin-on-fries-500x714.jpg"
                        alt="fries">






            <div class="text" >
                <a href=""> Skin On Fries </a>
                <a href=""> Choco Cookie Frappe </a>
                <a href=""> The Donut Burger </a>
            </div>
            <div class="pp">
                <p>$3.00</p>
                <p>$4.99</p>
                <p>$6.99</p>
        </div>
        </div>

    </section>
    </div>

    <section class="section-three">

    </section>



        <section class="section-four">
            <h2 style="color: bisque;">
                Menu Categories
            </h2>
            <a class="btn btn-success" href="{{URL('full_menu')}}">
                VIEW THE FULL MENU
            </a>

        </section>
        <div class="dawen-photo row justify-content-between">
            <div class="photo-2 col-3">
                <img
                    src="https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/appetizers-menu-background.jpg">
                <p>
                    APPETIZERS

                </p>
            </div>
            <div class="photo-2 col-3">
                <img
                    src="https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/burgers-menu-background.jpg">
                <p>
                    BURGERS
                </p>
            </div>
            <div class="photo-2 col-3">
                <img
                    src="	https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/pizza-menu-background.jpg">
                <p>
                    PIZZAS
                </p>
            </div>
            <div class="photo-2 col-3" >
                <img
                    src="	https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/fries-menu-background.jpg">
                <p>
                    FRIES
                </p>
            </div>



        </div>
        <section class="dawen-photo row justify-content-between">
            <div class="photo-2 col-3">
                <img
                    src="	https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/sides-menu-background.jpg">
                <p>
                    SIDES
                </p>
            </div>
            <div class="photo-2 col-3">
                <img
                    src="https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/desserts-menu-background.jpg">
                <p>
                    DESSERTS
                </p>
            </div>
            <div class="photo-2 col-3">
                <img
                    src="	https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/beverages-menu-background.jpg">
                <p>
                    BERAGES
                </p>
            </div>
            <div class="photo-2 col-3">
                <img
                    src="	https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/specials-menu-background.jpg">
                <p>
                    SPECIALS
                </p>
            </div>
        </section>
        <section class="ordering-app">
            <h2>
                Download Our<br />
                <span style= "color: #FCDC31;  font-Size: 100px;  font-Weight: bold;" >Ordering App</span>
            </h2>
            <div class="order-img">
            <a href="https://www.apple.com/eg/app-store/"><img src="https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/app-store-badge.png"></a>
                <a href="https://play.google.com/store/games?hl=en&gl=US"><img src="https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/play-store-badge.png"></a>
            </div>
        </section>
        <section class="the-last-section" style=" padding: 100px 200px 100px 200px" >
            <div class="top-last row justify-content-around" style="">
                <h2 class="card col-6" style= "font-Size: 70px;  font-Weight: bolder; color:bisque; background:black;">
                    Latest News
                </h2>

                <a  class="btn btn-success col-6" style="font-size: 25px" href="{{URL('news')}}" >
                    READ MORE NEWS
                </a>

            </div>
            <div class="last-photo row justify-content-around" style=" display:inline-block; text-Align: center;">
                <div class="last-photo">
                    <img
                        src="https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/pancake-burger-1200x900.jpg">
                    <a href="{{URL('pancake')}}" style="font-Size: 55px;" >
                        The Pancake Burger
                    </a>
                    <p style=" font-Size: 25px; ">
                        It features a buttermilk pancake sandwiched between two burger patties<br> cheddar cheese, American cheese<br> hickory smoked bacon and sauce.
                    </p>
                </div>
                <div class="last-photo">
                    <img
                        src="https://avada.website/takeout/wp-content/uploads/sites/136/2020/04/new-milkshake-menu-1200x900.jpg">
                    <a href="{{URL('milkshake')}}" style=" font-Size: 55px ;">
                        New Milkshake Menu
                    </a>
                    <p style="text-Align: center;  font-Size: 25px ;">
                        The term “milkshake” was first seen in print in the Atlanta Journal-Consitution in 1886 and it referred to an alcoholic whiskey drink made with cream and eggs, similar to an eggnog. Before the rise of the electric blender, these drinks were shaken by hand, giving the name “milk shake” a bit more context
                    </p>
                </div>
            </div>
        </section>

@endsection
