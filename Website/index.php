<?php
    // referensi:
    // http://coursesweb.net/php-mysql/
    // http://w3schools.com
    // http://www.indonesia-holidays.com/sumatra/medan.htm
    // https://en.wikipedia.org/wiki/Medan#Demographics

    // isi: homepage, profile, hometown, food, tourist

    $pgdata = array();

    $pgdata['index'] = array
    (
        'title'=>'Welcome!',
        'description'=>'Website Homepage',
        'keywords'=>'medan, wisata, makanan'
    );

    // $pgdata['profile'] = array
    // (
    //     'title'=>'Profile',
    //     'description'=>'About Me',
    //     'keywords'=>'about me, profile'
    // );

    // $pgdata['hometown'] = array
    // (
    //     'title'=>'Medan',
    //     'description'=>'All About Medan',
    //     'keywords'=>'medan, sumatera utara, sumatera'
    // );

    // $pgdata['food'] = array
    // (
    //     'title'=>'Kuliner Medan',
    //     'description'=>'Wisata Kuliner Medan',
    //     'keywords'=>'medan, makanan, jajanan, khas medan'
    // );

    // $pgdata['tourist'] = array
    // (
    //     'title'=>'Wisata Medan',
    //     'description'=>'Tempat wisata Medan',
    //     'keywords'=>'medan, wisata, turis, menarik'
    // );

    // set the page name
    $pgname = isset($_GET['pg']) ? trim(strip_tags($_GET['pg'])) : 'index';

    // get title, and meta data for current /accessed page
    $title = $pgdata[$pgname]['title'];
    $description = $pgdata[$pgname]['description'];
    $keywords = $pgdata[$pgname]['keywords'];

    // set header for utf-8 encode
    header('Content-type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> <?php echo $title; ?> </title>
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        
        <style>
            body
            {
                font-family: "open sans";
                margin:0;
                text-align:center;
                padding:0 0em;
                margin-bottom: 70px;
            }

            #posts
            {
                position:relative;
                width:100%;
                margin:0em auto;
                background:#fdfefe;
            }
            
            #article
            {
                background:#FDFEFE;
                padding:0em 0em;
            }

            #footer
            {
                position: fixed;
                width: 100%;
                /* margin-bottom: 0px; */
                height: 50px;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #212F3D;
                color: white;
                text-align: center;
            }

            ul
            {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #212F3D;
                position: fixed;
                top: 0;
                width: 100%;
            }

            li
            {
                float: left;
            }

            li a
            {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover:not(.active)
            {
                background-color: #148F77;
            }

            .active
            {
                background-color: #E67E22;
            }
        </style>
    </head>
    <body>

    <header id = "header">
        <div style="padding:20px;margin-top:30px;">  
            <h1> <?php echo $title; ?> </h1>
        </div>
    </header>

        <section id = "posts">
            <nav id = "menu">
                <ul> 
                    <li><a class="active" href="index.php" title = "Home">Home</a></li>
                    <li><a href="quiz1\profile.php?pg=profile" title = "Profile">Profile</a></li>
                    <li><a href="quiz1\hometown.php?pg=hometown" title = "Medan">Medan</a></li>
                    <li><a href="quiz1\food.php?pg=food" title = "Kuliner">Delicacies</a></li>
                    <li><a href="quiz1\tourist.php?pg=tourist" title = "Wisata">Tourist Spots</a></li>
                </ul>
            </nav>
            <article id="article"><?php echo file_get_contents('quiz1\homepage.html'); ?></article>
        </section>

        <footer id="footer">
            <p>Web Programming A</p>
        </footer>
    </body>
</html>
