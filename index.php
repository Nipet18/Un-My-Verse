<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Home Page</title>

    <meta name="author" content="Nickolai Petersen & Michelle Weber">
    <meta name="description" content="Example description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--Michelle test af git->
<!--->
    <header>
        <h1>UN-MI-VERSE</h1>
        <h3>Welcome Every Galaxy Travler</h3>
    </header>

    <!--------------------NavBar---------------------------->

    <div class="topnav">
        <a href="#home" class="active">NewsFeed</a>
        <a href="#news">Profile</a>
        <a href="#contact">Contact</a>
        <a href="#contact">FAQ</a>
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>



    <!--------------------Asides---------------------------->

    <aside id="Left">
        <form action="signup.php" method="post">
            <div class="imgcontainer">
                <img src="pictures/ProfilePics/rocket-removebg-preview.png" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Alien Alias" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container">
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>

    </aside>

    <aside id="Right">
        <section>
            <h2><b><i>Sign up here and meet like-minded intergalatic live forms from acros the universe</i></b></h2>

            <p>Explore the unnown of the universe with just one click... </p>
            <img src="pictures/ProfilePics/rocket-removebg-preview.png" class="miniAvatar">
            <button class="suBtn" id="canFile" onclick="loadHome()">
                Signup Here</button>

        </section>

        <hr>

        <h1>Planetarian Scrapple</h1>
        <hr>
        <h3>LEADS</h3>

        <p>1. MagnusTheConquer</p>
        <p>2. DulleBoblesTheFirst</p>
        <p>3. ZazKasusSUS</p>

        <hr>

        <table>
            <tr>
                <th>Power League</th>
            </tr>
            <tr>
                <td>skd: 196345</td>
            </tr>
            <tr>
                <td>egs: 166785</td>
            </tr>
            <tr>
                <td>gse: 145345</td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <th>With Astroits</th>
            </tr>
            <tr>
                <td>brs: 999999</td>
            </tr>
            <tr>
                <td>frg: 999999</td>
            </tr>
            <tr>
                <td>wrt: 999999</td>
            </tr>
        </table>
    </aside>

    <!------------------MainContent---------------------------->
    -
    <div class="wrapper" id="content">
        <div class="contentBlock">
            <img src="pictures/ProfilePics/astronauta-lancando-no-espaco-e-acenando-a-ilustracao-dos-desenhos-animados-de-mao-conceito-de-tecnologia-da-ciencia-isolado-estilo-flat-cartoon_138676-3446.jpg">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque maximus dictum euismod. Aliquam convallis lacus et tincidunt ornare. Ut vitae lacinia felis. Fusce vehicula rutrum cursus. Quisque odio augue, ultricies nec interdum quis, bibendum eget nisl. Morbi quis orci sem. Etiam varius malesuada massa.</p>

            <p class="date"><strong>Date:</strong> 10/09-22</p>

            <div class="btn-group">
                <input type="text" placeholder="Coment here">
                <button>Like</button>
                <button>Comment</button>
                <button>Share</button>
            </div>

        </div>
        <div class="contentBlock">
            <img src="pictures/ProfilePics/cute-astronaut-dance-cartoon-vector-icon-illustration-technology-science-icon-concept-isolated-premium-v.jpg">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque maximus dictum euismod. Aliquam convallis lacus et tincidunt ornare. Ut vitae lacinia felis. Etiam varius malesuada massa.</p>
            <p class="date"><strong>Date:</strong> 10/09-22</p>

            <div class="btn-group">
                <input type="text" placeholder="Coment here">
                <button>Like</button>
                <button>Comment</button>
                <button>Share</button>
            </div>

        </div>
        <div class="contentBlock">
            <img src="pictures/ProfilePics/cute-astronaut-meditation-moon-illustration_138676-3351.jpg">
            <p>Lorem ipsum aliquam convallis lacus et tincidunt ornare. Ut vitae lacinia felis. Fusce vehicula rutrum cursus. Quisque odio augue, ultricies nec interdum quis, bibendum eget nisl. Morbi quis orci sem. </p>
            <p class="date"><strong>Date:</strong> 09/09-22</p>

            <div class="btn-group">
                <input type="text" placeholder="Coment here">
                <button>Like</button>
                <button>Comment</button>
                <button>Share</button>
            </div>

        </div>
        <div class="contentBlock">
            <img src="pictures/ProfilePics/cute-astronaut-playing-skateboard-moon-cartoon-vector-icon-illustration-science-sport-isolated_138676-4546.jpg">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis orci sem. Etiam varius malesuada massa.Aliquam convallis lacus et tincidunt ornare. Ut vitae lacinia felis. Fusce vehicula rutrum cursus. Quisque odio augue, ultricies nec interdum quis, bibendum eget nisl.</p>
            <p class="date"><strong>Date:</strong> 07/09-22</p>

            <div class="btn-group">
                <input type="text" placeholder="Coment here">
                <button>Like</button>
                <button>Comment</button>
                <button>Share</button>
            </div>

        </div>
        <div class="contentBlock">
            <img src="pictures/ProfilePics/images.png">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae lacinia felis. Fusce vehicula rutrum cursus. Quisque odio augue, ultricies nec interdum quis, bibendum eget nisl. Morbi quis orci sem. Etiam varius malesuada massa.</p>
            <p class="date"><strong>Date:</strong> 05/09-22</p>

            <div class="btn-group">

                <div class="btn-group">
                    <input type="text" placeholder="Coment here">
                    <button>Like</button>
                    <button>Comment</button>
                    <button>Share</button>
                </div>

            </div>
        </div>
    </div>

    <!---------------------Footer---------------------------->

    <footer>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque maximus dictum euismod. Aliquam convallis lacus et tincidunt ornare. Ut vitae lacinia felis. Fusce vehicula rutrum cursus. Quisque odio augue, ultricies nec interdum quis, bibendum eget nisl. Morbi quis orci sem. Etiam varius malesuada massa.</p>
        <p>Fusce vehicula rutrum cursus. Quisque odio augue, ultricies nec interdum quis, bibendum eget nisl. Morbi quis orci sem. Etiam varius malesuada massa.</p>
    </footer>
    <script src="main.js" defer></script>
</body>

</html>
