<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<title>Portfolio</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/Potfolio/icons8-user-100.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Adarsh Salve
          </a>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNav">
                <button type="button" class="btn btn-outline-danger" style="margin-right: 10px; color: white;  background-color: #4158D0;
                background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); ">Home</button>
                <button type="button" id="scroll-button1" class="btn btn-outline-danger"style="margin-right: 10px;  color: white;  background-color: #4158D0;
                background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);"> Skills</button>
                <button type="button" id="scroll-button2" class="btn btn-outline-danger"style="margin-right: 10px;  color: white;  background-color: #4158D0;
                background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);">Projects</button>
               <button  style="color: white;  background-color: #4158D0;
               background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Recommendation
              </button>
              </div>
            </div>
          </nav>
        </div>
      </nav>
      <div class="background-image">
        <div class="text-overlay">
          <h1> My name is Adarsh Salve<br>
          </h1>
          <p>I'm a Frontend Web Developer Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, qui s</p>
          <a href="#" class="cta-button">Projects</a>
        </div>
      </div>
    <section class="about"> 
       <div class="aboutinfo" id="target-position1" style="text-align: center;">
         <h1 style="margin-top: 60px;"> <u> <b> About me </b> </u></h1>
</div>
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light" style="height: 500px;  box-shadow: 0px 0px 10px rgb(232, 14, 14);">
      <Section class="get" style="font-size: 30px;"><b> Get to Know me!</b></Section>
      Hello, my name is Adarsh Salve and I am a frontend developer. 
I have been working in the field of front-end development for several years now, and I am passionate about creating beautiful and functional user interfaces. I specialize in HTML, CSS, and JavaScript and I am always looking to improve my skills and stay up-to-date with the latest technologies and trends in the field. <br>
I enjoy working in a team environment and I am always open to learning from others and collaborating on projects. <br> In my free time, I love to explore new technologies and experiment with different design and development techniques.
My resume is down below <br>
<br>
<br>
<button type="button" class="btn btn-info">Resume</button>
     </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light" style="height: 500px;  box-shadow: 0px 0px 10px rgb(231, 16, 16);">
        <Section class="get" style="font-size: 30px;"><b> Skills</b></Section>
        <b>HTML</b><br>
        <br>
        <div class="progress-bar">
          <div class="progress" style="width: 90%;"></div>
          
        </div>
        <b>CSS</b>
        <br>
        <div class="progress-bar">
          <div class="progress" style="width: 75%;"></div>
          
        </div>
        <b>JavaScript</b>
        <br>
        <div class="progress-bar">
          <div class="progress" style="width: 70%;"></div>
    
        </div>
        <b>React</b>
        <br>
        <div class="progress-bar">
          <div class="progress" style="width: 65%;"></div>
         
        </div>
        <b>SQL</b>
        <br>
        <div class="progress-bar">
          <div class="progress" style="width: 60%;"></div>
          
        </div>
        <b>PHP</b>
        <br>
        <div class="progress-bar">
          <div class="progress" style="width: 50%;"></div>
        
        </div>
      </div>

    </div>
  </div>
</div>
</div>
<div class="aboutinfo" id="target-position2" style="text-align: center;" >
  <h1 style="margin-top: 60px;"> <u> <b> Projects </b> </u></h1>
</div>
<div class="card-container">
  <div class="card">
    <img src="pro1.jpg" alt="Card 1">
    <div class="card-content">
      <h3>Online examination website</h3>
      <p>I have created a online examination system website with help of html5,css3,JavaScript and php.</p>
    </div>
  </div>
  <div class="card">
    <img src="pro2.png" alt="Card 2">
    <div class="card-content">
      <h3>Online Game store</h3>
      <p>I have created a online examination system website with help of html5,css3,JavaScript and php.</p>
    </div>
  </div>
  <div class="card">
    <img src="pro3.png" alt="Card 3">
    <div class="card-content">
      <h3>Typing Master Software </h3>
      <p>I have created a Speed Typing Test Python with help of Python .</p>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <p class="copyright">Copyright © 2023 Adarsh Company</p>
    <nav class="footer-nav">
      <ul>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
    </nav>
  </div>
</footer>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recommendations For me</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="Sub.php" method="post">
          <input type="text" name="name" placeholder="Name">
          <input type="email" name="email" placeholder="Email">
          <textarea name="message" placeholder="Message"></textarea>
          <input type="submit" name="submit" value="Submit">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
 
  
</body>
<script>
  document.getElementById("scroll-button1").addEventListener("click", function() {
  var targetPosition1 = document.getElementById("target-position1").offsetTop;
  window.scroll({
    top: targetPosition1,
    behavior: "smooth"
  });
});
document.getElementById("scroll-button2").addEventListener("click", function() {
  var targetPosition2 = document.getElementById("target-position2").offsetTop;
  window.scroll({
    top: targetPosition2,
    behavior: "smooth"
  });
});
</script>
</html>