<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="Logo\logo.png" alt="LOGO" style="max-width:22%;" class="center"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="aboutUs.html">About</a></li>
                    <li><a href="#">Collection</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>

                </ul>
            </div>
            <div>
              <p style="font-size: 30px;margin-top: 220px; color:#fff;">
                An application designed to help users to access the library resources in a very efficient manner.
                 To maintain all records systematically so that no paper work is required and one of our main feature
                  is the chatbot through which some of the general information can be directly accessed by speech so
                  that less searching and clicking of buttons is needed.

              </p>

            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
    </section>
    <div style="height: 300px">
        <!-- just to make scrolling effect possible -->
			<h2 class="myH2">What is this ?</h2>
			<p class="myP">This is a responsive fixed navbar animated on scroll</p>
				<p class="myP">
          <p style="font-size: 30px">
            Proposed system is an automated Library Management System. Through our software user can issue books,
            buy books, search for availability of books , filter the books based on genres, and do chat  for getting
             general  information . Admin’s job is to add books in database and also maintain the dashboard for every
              user that shows their orders, issued books, fines and provide  recommendations of books to the user based
               on their interests. Our proposed system has the following advantages:
             User friendly interface
            Fast access to database
            Search facility
            Filter the books based on their genres
            Chatbot
            Look and Feel Environment
            Quick issue , renewal and buying of books

          </p>
			  </p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
  </body>
</html>
