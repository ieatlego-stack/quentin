<script>
        var prevMsg='';
        window.onerror=function(message, source, lineno, colno, error) {
            let con = parent.parent.document.getElementById("consoleDisp");
            if (con.querySelectorAll("div").length > 100) con.removeChild(con.firstElementChild);
            
            const newDiv = document.createElement("div");
            if (lineno) { // python errors do not have a linenumber
              newDiv.innerHTML = "Error on line " + (lineno-31)+": "+message;
              con.appendChild(newDiv);
            }
            else if (prevMsg != message) {  // prevent duplicate messages
              prevMsg = message;
              newDiv.innerHTML = message
              con.appendChild(newDiv);
            }
            newDiv.style.color="red";
            con.scrollTop = con.scrollHeight;
        };
        console.log = function() {
            let con = parent.parent.document.getElementById("consoleDisp");
            if (con.querySelectorAll("div").length > 100) con.removeChild(con.firstElementChild);
            const newDiv = document.createElement("div");
            if (typeof arguments[0] === 'object') 
              newDiv.innerHTML = JSON.stringify(arguments[0], null, 4);
            else
              for (let i in arguments) newDiv.innerHTML += arguments[i];
            con.appendChild(newDiv);
            con.scrollTop = con.scrollHeight;     
        };
        </script>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="UTF-8">
  <title></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
  <style>
  body{
    background-color: blue;
    color: white;
    text-align:center;
    font-weight: bold;
    background-image:url("89f.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    background-attachment: fixed;
    font-family: 'Source Sans Pro', sans-serif;
    background-color: white;
  }
  h2{
    background-color: white;
    color: black;
  }
  p{
    color: gold;
    background-color: black;
  }
  ol{
    border: 5px solid black
    width: 50vw;
    text-align: center;
    border: 4px solid green;
    margin: auto;
    list-style-position: inside;
    background-color: black;
  }
  li{
    font-style: italic;
  }
  img{
    width:150px;
  }
  #fun {
    background-color: green;
    transition: background-color 10s;
  }
  #fun:hover{
    background-color: orange;
  }
  p.popup{
   display:none;
   }
   div:hover p.popup {
   display: block;
   position: absolute;
   background-color: orange;
   top: -20px;
   left: 40%;
   padding: 30px;
   border: 1px solid black;
   }
   img.popup{
     display:none;
   }
   div:hover img.popup{
     display:block;
      display: block;
   position: absolute;
   background-color: orange;
   top: -20px;
   left: 40%;
   padding: 30px;
   border: 1px solid black;
   }
  </style>
  
  <script>

  window.setTimeout(function() {
    window.location.href = 'https://quentinbona.com/jumpscare.html';
}, 60000);

  </script>
  
  
</head>
<img src="brogle.jpg" alt="broccili in the hot tub" title="https://i.kym-cdn.com/entries/icons/original/000/038/667/tco_-_2021-10-25T163043.660.jpg">

   <div id="fun">Hover over me
   <p class = "popup">whats good homie</p>
   <img class ="popup" src="x.gif">
   </div>
   
  <h2>Welcome to quentinbona.com, the last truthful media source in the world</h2>

  <p>This is my website. I am an amateur programmer. Here you can find things about me, some fun games and more.</p>

  <p></p>

  <p>Here are my games:</p>
  <ol>
    <li><a href="https://www.quentinbona.com/final.html">Worlds Hardest Game I Got Jumped In LA Edition</a> </li>
    
    <li><a href="https://www.quentinbona.com/aimtrainer.html">Minion Aim Trainer</a></li>
    <li><a href="https://www.quentinbona.com/chase.html">Albanian hunt</a></li>
    <li><a href="https://www.quentinbona.com/thrembodice.html">Thrembo Dice</a></li>
  </ol>

  <p>As much as this site may be a tad bit strange to most, I do hope you enjoy my site and the games available on it</p>
  <p>Article nor prepare chicken you him now. Shy merits say advice ten before lovers innate add. She cordially behaviour can attempted estimable. Trees delay fancy noise manor do as an small. Felicity now law securing breeding likewise extended and. Roused either who favour why ham.</p>
  <p>More stuff</p>
  <ol>
    <li><a href="https://www.quentinbona.com/about_the_author.html">More about me/biography</a> </li>
    <li><a href= https://linktr.ee/quentinbona>My Social Medias</a></li>
  </ol>
  
  <a href="https://www.quentinbona.com/easteregg.html" ><img src="Egg.PNG"> </a>
</body>

</html>