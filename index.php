<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/fontawesome-free-6.0.0-beta2-web/css/fontawesome.css">
    <link rel="stylesheet" href="style/fontawesome-free-6.0.0-beta2-web/css/all.min.css">
    <link rel="stylesheet" href="style/fontawesome-free-6.0.0-beta2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="style/fontawesome-free-6.0.0-beta2-web/css/solid.min.css">
    <link rel="stylesheet" href="style/fontawesome-free-6.0.0-beta2-web/css/fontawesome.min.css">
    <title>Mapathi Sarl</title>

</head>
<body>
    <!---heade section-->
    <header class="header">
        <div>
            <a href="#" class="logo navbar-brand">
                <img src="images/logoapp.png" style="border-radius:30px" class="imgLogo" alt="">
            </a>
        </div>
        <nav class="navbar ">
            <a href="#home">Home</a>
            <a href="#about">A propos</a>
            <a href="#menu">Menu</a>
            <a href="#products">Produits</a>
            <a href="#contact">Contact</a>
        </nav>
        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
        <div class="search-form">
            <input type="search" id="search-box" placeholder="search...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/pic3.webp" alt="">
                <div class="content">
                    <h3>Article 1</h3>
                    <div class="price">18$</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/pic2.jpg" alt="">
                <div class="content">
                    <h3>Article 1</h3>
                    <div class="price">18$</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/pic1.jpg" alt="">
                <div class="content">
                    <h3>Article 1</h3>
                    <div class="price">18$</div>
                </div>
            </div>
            <a href="#" class="btn">Payer Cash</a>
        </div>
    </header>
    <!---header section end -->
    <!--section start-->
    <section class="home" id="home">
        <div style="background: rgba(0, 0, 0, 0.5);width: 100%;height: 100%; backdrop-filter: blur(30px);padding: 20px;border-radius: 15px;">
            <div class="content" >
                <h3>Mapathi-Sarl</h3>
                <p style="font-size: 200%;">“La civilisation n'est pas un entassement, mais une construction, une architecture.”</p>
                <a href="apk/map-custums.apk" class="btn">Telecharger application mobile</a>
            </div>
        </div>
    </section>
    <!--section end-->

    <!--about section start-->
    <section class="about" id="about">
        <h1 class="heading">
            <span>A propos</span> de nous
        </h1>
        <div class="row">
            <div class="image">
                <img src="images/support-header-img.png" alt="">
            </div>

            <div class="content">
                <h3>A quoi notre maison est-elle spéciale?</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium beatae nihil illo dolor in repellendus maiores nam provident hic non.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis excepturi voluptate impedit neque voluptas consequuntur obcaecati totam cum repellendus aspernatur.</p>
                <a href="#" class="btn">Plus</a>
            </div>
        </div>
    </section>
    <!--about section end-->

    <!--menu section start-->
    <section class="menu" id="menu">
        <h1 class="heading"> notre <span>menu</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="images/ciment.jpg" alt="">
                <h3>ciment et lorem</h3>
                <div class="price">19$ <span>20.00</span></div>
                <a href="#" class="btn">ajouter au pannier</a>
            </div>
    
            <div class="box">
                <img src="images/images (2).jpg" alt="">
                <h3>ciment et lorem</h3>
                <div class="price">19$ <span>20.00</span></div>
                <a href="#" class="btn">ajouter au pannier</a>
            </div>
    
            <div class="box">
                <img src="images/images (4).jpg" alt="">
                <h3>ciment et lorem</h3>
                <div class="price">19$ <span>20.00</span></div>
                <a href="#" class="btn">ajouter au pannier</a>
            </div>
    
            <div class="box">
                <img src="images/images (4).jpg" alt="">
                <h3>ciment et lorem</h3>
                <div class="price">19$ <span>20.00</span></div>
                <a href="#" class="btn">ajouter au pannier</a>
            </div>
    
            <div class="box">
                <img src="images/images (4).jpg" alt="">
                <h3>ciment et lorem</h3>
                <div class="price">19$ <span>20.00</span></div>
                <a href="#" class="btn">ajouter au pannier</a>
            </div>
    
            <div class="box">
                <img src="images/images (4).jpg" alt="">
                <h3>ciment et lorem</h3>
                <div class="price">19$ <span>20.00</span></div>
                <a href="#" class="btn">ajouter au pannier</a>
            </div>
        </div>
    </section>
    <!--menu section end-->

    <!--products section start-->
    <section class="products" id="products">
        <h1 class="heading"> nos <span>produits</span> </h1>

        <div class="box-container">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart "></a>
                    <a href="#" class="fas fa-heart "></a>
                    <a href="#" class="fas fa-eye "></a>
                </div>
                <div class="image">
                    <img src="images/images1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cool Ciment</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">15$ <span>16.99</span></div>
                </div>
            </div>
    
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart "></a>
                    <a href="#" class="fas fa-heart "></a>
                    <a href="#" class="fas fa-eye "></a>
                </div>
                <div class="image">
                    <img src="images/images1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cool Ciment</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">15$ <span>16.99</span></div>
                </div>
            </div>
    
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart "></a>
                    <a href="#" class="fas fa-heart "></a>
                    <a href="#" class="fas fa-eye "></a>
                </div>
                <div class="image">
                    <img src="images/images1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cool Ciment</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">15$ <span>16.99</span></div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart "></a>
                    <a href="#" class="fas fa-heart "></a>
                    <a href="#" class="fas fa-eye "></a>
                </div>
                <div class="image">
                    <img src="images/pic3.webp" alt="">
                </div>
                <div class="content">
                    <h3>Cool Ciment</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">15$ <span>16.99</span></div>
                </div>
            </div>
    
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart "></a>
                    <a href="#" class="fas fa-heart "></a>
                    <a href="#" class="fas fa-eye "></a>
                </div>
                <div class="image">
                    <img src="images/pic2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cool Ciment</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">15$ <span>16.99</span></div>
                </div>
            </div>
    
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart "></a>
                    <a href="#" class="fas fa-heart "></a>
                    <a href="#" class="fas fa-eye "></a>
                </div>
                <div class="image">
                    <img src="images/pic1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cool Ciment</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">15$ <span>16.99</span></div>
                </div>
            </div>
        </div>
    </section>
    <!--products section end-->

    <!--products contact start-->
    <section class="contact" id="contact">
        <h1 class="heading">contactez-<span>nous</span></h1>
        <div class="row">
            <!--Iframe de google map-->
            <div class="map" style="background: url('https://www.google.com/maps/vt/data=DR-LWaoAYVKwPdyn6kXsukB8IZsV99SpNkMOLyqF1s7okpts-BpfzmLjwpITAdldxjl5L7nEo-7AiRbfFeMvt2tYI-hles1NUGkGkF3vvNpDoHljzxUalvbGeFgollOGtbHucfiiFId5LnzxARNdDaEJUNJ7brbF_ep3ejIbQxMBpXnXK4UYvXsofoAa3SUNLlVJDTTZEzgqlcatbJTP-hlb8-2YxSnRL0Szq1SmK86VqXv-BNZT');background-size: cover;height: 500px;background-position: center;">

            </div>
            <form action="">
                <h3>Prendre contact</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="nom">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <div class="inputBox">
                    <span class="fas fa-pen"></span>
                    <textarea name="message" id="chat"  cols="30" rows="3" placeholder="message" ></textarea>
                </div>
                <input type="submit" class="btn" value="contact now">
            </form>
        </div>
    </section>
    <!--products contact end-->

    <!--products footer begin-->
    <section class="footer">
        <div class="share">
            <a href="" class="fab fa-facebook"></a></a>
            <a href="" class="fab fa-instagram"></a>
            <a href="" class="fab fa-whatsapp"></a>
        </div>

        <div class="links">
            <a href="" >home</a>
            <a href="" >Apropos</a>
            <a href="" >menu</a>
            <a href="" >produits</a>
        </div>

        <div class="credit">created by <span>nunua-store community.</span>| All rights reserved</div>
    </section>
    <!--products footer end-->

    <script src="style/js/jquery-3.6.0.min.js"></script>
    <script src="style/js/jquery-3.6.0.js"></script>
    <script src="style/js/bootstrap.bundle.min.js"></script>
    <script src="style/script/script.js"></script>
</body>
</html>