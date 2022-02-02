<?php
    session_start();
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: intranet.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>INTRANET</title>
	<meta name="description" content="intranet" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <style>
    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }
     
    ::-webkit-scrollbar-thumb {
      background: #888; 
    }
    
    ::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }
    </style>
</head>
  <script>
    $(function() {
    $(document).ready(function() {
    $(".btn-k1").click(function() {
    $(".page-home").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".btn-k2").click(function() {
    $(".page-galery").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".btn-k3").click(function() {
    $(".page-events").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".btn-k4").click(function() {
    $(".page-files").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".btn-k5").click(function() {
    $(".page-users").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".btn-k6").click(function() {
    $(".page-latest-news").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".down").click(function() {
    $(".settings").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".btn-k7").click(function() {
    $(".page-computer").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".btn-k8").click(function() {
    $(".page-cars").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".btn-k9").click(function() {
    $(".page-coding").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".btn-k10").click(function() {
    $(".page-games").slideToggle(1);
    });
  });
});
    $(function() {
    $(document).ready(function() {
    $(".btn-k11").click(function() {
    $(".page-alcohol").slideToggle(1);
    });
  });
});
  </script>
<body>
  <div class="container" x-data="{ rightSide: false, leftSide: false}">
    <div class="left-side" :class="{ 'active': leftSide}">
      <div class="logo">INTRANET</div>
      <div class="menu">
        <button class="btn-k1"><i class="fa fa-home"></i> Home</button>
        <button class="btn-k2"><i class="fas fa-image"></i> Galery</button>
        <button class="btn-k3"><i class="fas fa-calendar-alt"></i> Events</button>
        <button class="btn-k4"><i class="fa fa-folder"></i> Files</button>
        <button class="btn-k5"><i class="fas fa-users"></i> Users</button>
        <button class="btn-k6"><i class="fas fa-newspaper"></i> Latest News</button>
      </div>
      <div class="news"> <h4>YOUR FAVOURITE:</h4>
        <button class="btn-k7"><i class="fas fa-laptop"></i> <i class="fas fa-angle-double-right"></i> Computer</button>
        <button class="btn-k8"><i class="fas fa-car"></i> <i class="fas fa-angle-double-right"></i> Cars</button>
        <button class="btn-k9"><i class="fas fa-code"></i> <i class="fas fa-angle-double-right"></i> Coding</button>
        <button class="btn-k10"><i class="fas fa-gamepad"></i> <i class="fas fa-angle-double-right"></i> Games</button>
        <button class="btn-k11"><i class="fas fa-wine-bottle"></i> <i class="fas fa-angle-double-right"></i> Alcohol</button>
      </div>
    </div>
    <div class="main">
      <div class="top-bar"></div>
      <div class="main-container">
        
      <div class="page-home">
        <div class="page-home-top">
          <i class="fas fa-home">  HOME</i>
        </div>
        <div class="page-home-content">
        </div>
        </div>
        
        <div class="page-galery">
          <div class="page-galery-top">
          <i class="fas fa-image">  GALERY</i>
        </div>
        <div class="page-galery-content">
          <div id="photogalery">
            <ul id="albumfotos">
              <li id="foto01"><span></span></li>
              <li id="foto02"><span></span></li>
              <li id="foto03"><span></span></li>
              <li id="foto04"><span></span></li>
              <li id="foto05"><span></span></li>
              <li id="foto06"><span></span></li>
              <li id="foto07"><span></span></li>
              <li id="foto08"><span></span></li>
              <li id="foto09"><span></span></li>
              <li id="foto10"><span></span></li>
              <li id="foto11"><span></span></li>
              <li id="foto12"><span></span></li>
            </ul>
            </div>
        </div>
        </div>
        
        <div class="page-files">
          <div class="page-files-top">
          <i class="fa fa-folder">  FILES</i>
        </div>
        <div class="page-files-content">
          <div class="filemanager">

            <div class="search">
              <input type="search" placeholder="Find a file..">
            </div>
            <ul class="data animated"><li class="folders"><a href="files/Archives" title="files/Archives" class="folders"><span class="icon folder full"></span><span class="name">Archives</span> <span class="details">3 items</span></a></li><li class="folders"><a href="files/Important Documents" title="files/Important Documents" class="folders"><span class="icon folder full"></span><span class="name">Important Documents</span> <span class="details">2 items</span></a></li><li class="folders"><a href="files/Movies" title="files/Movies" class="folders"><span class="icon folder full"></span><span class="name">Movies</span> <span class="details">1 item</span></a></li><li class="folders"><a href="files/Music" title="files/Music" class="folders"><span class="icon folder full"></span><span class="name">Music</span> <span class="details">3 items</span></a></li><li class="folders"><a href="files/Nothing here" title="files/Nothing here" class="folders"><span class="icon folder"></span><span class="name">Nothing here</span> <span class="details">Empty</span></a></li><li class="folders"><a href="files/Photos" title="files/Photos" class="folders"><span class="icon folder full"></span><span class="name">Photos</span> <span class="details">5 items</span></a></li><li class="files"><span class="icon file f-html">.html</span><span class="details">344 Bytes</span></a></li></ul>
        
            <div class="nothingfound" style="display: none;">
              <div class="nofiles"></div>
              <span>No files here.</span>
            </div>
        
          </div>
          <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="file-upload">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Files</button>

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select add File</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
        </div>
        </div>
        
        <div class="page-users">
          <div class="page-users-top">
          <i class="fas fa-users">  USERS</i>
        </div>
        <div class="page-users-content">
          <table>
            <caption>User List</caption>
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <?php
                    require_once "uzytkownicy.php";
                  ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
        
        <div class="page-latest-news">
          <div class="page-latest-news-top">
          <i class="fas fa-newspaper">  LATEST NEWS</i>
        </div>
        <div class="page-latest-news-content">
          <div class="page">
            <div class="archive">
              <article class="article">1
                <hr class="image">
                <hr>
              </article>
              <article class="article">2
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">3
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">4
                <hr class="image"><hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">5
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">6
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">7
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">8
                <hr>
                <hr>
              </article>
              <article class="article">9
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">10
                <hr>
                <hr>
              </article>
              <article class="article">11
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">12
                <hr class="image"><hr>
                <hr>
                <hr>
              </article>
              <article class="article">13
                <hr class="image"><hr>
                <hr>
              </article>
              <article class="article">14
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">15
                <hr class="image">
                <hr>
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">16
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
              </article>
              <article class="article">17<hr>
                <hr>
                <hr></article>
            </div>
        </div>
        </div>
        </div>
        
        <div class="page-events">
          <div class="page-events-top">
          <i class="fas fa-calendar-alt">  EVENTS</i>
        </div>
        <div class="page-events-content">
          <div class="pec-top">
            <div class="active-events">
              <button class="btn-k13"><i class="fas fa-calendar-alt"></i> #1 EVENT</button>
              <button class="btn-k14"><i class="fas fa-calendar-alt"></i> #2 EVENT</button>
              <button class="btn-k15"><i class="fas fa-calendar-alt"></i> #3 EVENT</button>
            </div>
          </div>
          <div class="pec-down">
            <div class="calendar-events">
              <div class="calendar">
  <table class="calendar-table">
    <caption class="calendar-months">
      <div class="month-wrapper">
        <span class="nav-arrow-prev"><i class="sprite sprite-Prev"></i></span>
        <i class="fas fa-chevron-left"></i><span class="cur-month">December 2021</span><i class="fas fa-chevron-right"></i>
        <span class="nav-arrow-next"><i class="sprite sprite-Next"></i></span>
      </div>
    </caption>
    <thead class="calendar-days">
      <tr>
        <th class="col">Sun</th>
        <th class="col">Mon</th>
        <th class="col">Tue</th>
        <th class="col">Wed</th>
        <th class="col">Thu</th>
        <th class="col">Fri</th>
        <th class="col">Sat</th>
      </tr>
    </thead>
    <tfoot class="button-event">
      <td colspan="7" class="col">
        <form action="#" method="get">
          <button type="submit" value="Submit" class="calendar-btn">ADD EVENT</button>
        </form>
      </td>
    </tfoot>
    <tbody class="calendar-dates">
      <tr>
        <td class="col disable-cell">29</td>
        <td class="col disable-cell">30</td>
        <td class="col">1</td>
        <td class="col">2</td>
        <td class="col">3</td>
        <td class="col">4</td>
        <td class="col">5</td>
      </tr>
      <tr>
        <td class="col">6</td>
        <td class="col event">7</td>
        <td class="col">8</td>
        <td class="col">9</td>
        <td class="col">10</td>
        <td class="col">11</td>
        <td class="col">12</td>
      </tr>
      <tr>
        <td class="col">13</td>
        <td class="col">14</td>
        <td class="col">15</td>
        <td class="col">16</td>
        <td class="col">17</td>
        <td class="col">18</td>
        <td class="col">19</td>
      </tr>
      <tr>
        <td class="col">20</td>
        <td class="col">21</td>
        <td class="col">22</td>
        <td class="col event">23</td>
        <td class="col">24</td>
        <td class="col">25</td>
        <td class="col">26</td>
      </tr>
      <tr>
        <td class="col">27</td>
        <td class="col">28</td>
        <td class="col">29</td>
        <td class="col">30</td>
        <td class="col disable-cell">1</td>
        <td class="col disable-cell">2</td>
        <td class="col disable-cell">3</td>
      </tr>
    </tbody>
  </table>
</div>
            </div>
          </div>
          </div>
        </div>
        
        <div class="page-computer">
          <div class="page-computer-top">
          <i class="fas fa-laptop">  COMPUTER</i>
        </div>
        <div class="page-computer-content"></div>
        </div>
        
        <div class="page-cars">
          <div class="page-cars-top">
          <i class="fas fa-car">  CARS</i>
        </div>
        <div class="page-cars-content"></div>
        </div>
        
        <div class="page-coding">
          <div class="page-coding-top">
          <i class="fas fa-code">  CODING</i>
        </div>
        <div class="page-coding-content"></div>
        </div>
        
        <div class="page-games">
          <div class="page-games-top">
          <i class="fas fa-gamepad">  GAMES</i>
        </div>
        <div class="page-games-content"></div>
        </div>
        
        <div class="page-alcohol">
          <div class="page-alcohol-top">
          <i class="fas fa-wine-bottle">  ALCOHOL</i>
        </div>
        <div class="page-alcohol-content"></div>
        </div>
        
        </div>
    </div>
    <div class="right-side" :class="{ 'active': rightSide }">
      <div class="account">
        <button class="account-button">
          <i class="far fa-envelope"></i>
        </button>
        <button class="account-button">
          <i class="far fa-bell"></i>
        </button>
        <span class="account-user">
          <?php
            echo "<h3>".$_SESSION['user'].'</h3>';
          ?>
          <img src="https://cdn.glitch.me/63515b78-4c54-4c27-a3db-633410fab25b%2Fprof.png?v=1638366097473" alt="" class="account-profile">
          <button class="down">▼</button>
        </span>
      </div>
      <div class="settings">
        <button class="text">My Account</button>
        <br>
        <button class="text">Settings</button>
        <br>
        <button class="text">History</button>
        <br>
        <button class="text">Statute</button>
        <br>
        <button class="text" onclick="window.location=('logout.php')">Log out </button>
      </div>
      <div class="stories"> <h4>NEW STATEMENTS:</h4>
        <button class="btn-k12"><i class="fas fa-file-invoice"></i> Statement</button>
        <button class="btn-k12"><i class="fas fa-file-invoice"></i> Statement</button>
      </div>
      <div class="contacts">
        <div class="user">
        <img src="https://cdn.glitch.me/63515b78-4c54-4c27-a3db-633410fab25b%2Fprof.png?v=1638366097473" class="user-img">
          <div class="info-user">ff</div>
          <div class="username">Kuba Kruger
        </div>
          <div class="user-status">🟢</div>
        </div>
        <div class="user">
        <img src="https://cdn.glitch.me/63515b78-4c54-4c27-a3db-633410fab25b%2Fprof.png?v=1638366097473" class="user-img">
        <div class="username">Jan Kowalski 
        </div>
          <div class="user-status">🟢</div>
        </div>
        <div class="user">
        <img src="https://cdn.glitch.me/63515b78-4c54-4c27-a3db-633410fab25b%2Fprof.png?v=1638366097473" class="user-img">
        <div class="username">Barbara Stok 
        </div>
          <div class="user-status">🔴</div>
        </div>
        <div class="user">
        <img src="https://cdn.glitch.me/63515b78-4c54-4c27-a3db-633410fab25b%2Fprof.png?v=1638366097473" class="user-img">
        <div class="username">BLA BLA 
        </div>
          <div class="user-status">🟢</div>
        </div>
        <div class="user">
        <img src="https://cdn.glitch.me/63515b78-4c54-4c27-a3db-633410fab25b%2Fprof.png?v=1638366097473" class="user-img">
        <div class="username">TIRU RIURI 
        </div>
          <div class="user-status">🔴</div>
        </div>
        <div class="user">
        <img src="https://cdn.glitch.me/63515b78-4c54-4c27-a3db-633410fab25b%2Fprof.png?v=1638366097473" class="user-img">
        <div class="username">Kowalski 
        </div>
          <div class="user-status">🟢</div>
        </div>
        <div class="user">
        <img src="https://cdn.glitch.me/63515b78-4c54-4c27-a3db-633410fab25b%2Fprof.png?v=1638366097473" class="user-img">
        <div class="username">Janek pak
        </div>
          <div class="user-status">🔴</div>
        </div>
      </div>
    </div>
    <div class="overlay" @click="rightSide = false; leftSide = false" :class="{ 'active': rightSide || leftSide}"></div>
  </div>
</body>
</html>