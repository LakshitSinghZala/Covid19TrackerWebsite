<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>


<body  onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style p-3">
  <div class="container-fluid">
    <a class="navbar-brand pl-5" href="#">Covid-19 Tracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutid">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sympid">symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#preventionid">prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="WorldCoronaCases.php">WorldCoronaLive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="IndiaCoronaCases.php">indiaCoronaLive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="IndiaDayWise.php">indiaCoronaDaily</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactid">contact</a>
        </li>
        
      </ul>
    
    </div>
  </div>
</nav>


<!-- ************* corona lastest update *********/ -->
<br/>  <br/>  <br/>
  <section class="corona_update container-fluid">
       <div class="my-5">
          <h3 class="text-uppercase text-center">covid-19 LIVE UPDATES OF THE WORLD </h3>
       </div>

       <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
               <th>Country</th>
               <th>TotalConfirmed</th>
               <th>TotalRecovered</th>
               <th>TotalDeaths</th>
               <th>NewConfirmed</th>
               <th>NewRecovered</th>
               <th>NewDeaths</th>
            </tr>
          </table>
       </div>
  
  </section>

<!-- ***************top cursor********** -->
<button onclick="topFunction()" id="myBtn" title="Go to top">↑</button>

 <!-- *******************footer************ -->

 <footer class="mt-5">
       <div class="footer_style text-white text-center container-fuild">
          <p>Copyright by  Group-13</p>
       </div>
    </footer>



   <script>
     function fetch(){
         $.get("https://api.covid19api.com/summary",
            function (data){
            //    console.log(data['Countries'].length);

            var tbval = document.getElementById('tbval');
            
            for(var i=1; i<(data['Countries'].length); i++){
                var x = tbval.insertRow();
                x.insertCell(0);

                tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background = '#7a4a91';
                tbval.rows[i].cells[0].style.color = '#fff'; 

                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background = '#4bb7d8';

                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background = '#4bb7d8';

                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background = '#f36e23';

                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background = '#4bb7d8';

                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background = '#9cc850';

                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background = '#f36e23';
            }

            }
         )
     };

   </script>

<script type="text/javascript">

//Get the button:
 mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 

</script>

   

</body>
</html>