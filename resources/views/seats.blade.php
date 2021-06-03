<!DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" class="rel">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Movie Seat Booking</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
  <body onload="onLoaderFunc()">

    <a class="btn btn-primary" href="/theatreshow">Back</a>
    
      <div class="inputForm">
        <center>
          Name *: <input type="text" id="Username" required>
          Number of Seats *: <input type="number" id="Numseats" required>
          <br /><br />
          <button onclick="takeData()">Start Selecting</button>
        </center>
      </div>
    
      <div class="seatStructure">
        <center>
    
          <table id="seatsBlock">
            <p id="notification"></p>
            <tr>
              <td colspan="14">
                <div class="screen">SCREEN</div>
              </td>
              <td rowspan="20">
                <div class="smallBox greenBox">Selected Seat</div> <br />
                <div class="smallBox redBox">Reserved Seat</div><br />
                <div class="smallBox emptyBox">Empty Seat</div><br />
              </td>
    
              <br />
            </tr>
    
            <tr>
              <td></td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td></td>
              <td>6</td>
              <td>7</td>
              <td>8</td>
              <td>9</td>
              <td>10</td>
              <td>11</td>
              <td>12</td>
            </tr>
    
            <tr>
              <td>A</td>
              <td><input type="checkbox" class="seats" value="A1"></td>
              <td><input type="checkbox" class="seats" value="A2"></td>
              <td><input type="checkbox" class="seats" value="A3"></td>
              <td><input type="checkbox" class="seats" value="A4"></td>
              <td><input type="checkbox" class="seats" value="A5"></td>
              <td class="seatGap"></td>
              <td><input type="checkbox" class="seats" value="A6"></td>
              <td><input type="checkbox" class="seats" value="A7"></td>
              <td><input type="checkbox" class="seats" value="A8"></td>
              <td><input type="checkbox" class="seats" value="A9"></td>
              <td><input type="checkbox" class="seats" value="A10"></td>
              <td><input type="checkbox" class="seats" value="A11"></td>
              <td><input type="checkbox" class="seats" value="A12"></td>
            </tr>
    
            <tr>
              <td>B</td>
              <td><input type="checkbox" class="seats" value="B1"></td>
              <td><input type="checkbox" class="seats" value="B2"></td>
              <td><input type="checkbox" class="seats" value="B3"></td>
              <td><input type="checkbox" class="seats" value="B4"></td>
              <td><input type="checkbox" class="seats" value="B5"></td>
              <td></td>
              <td><input type="checkbox" class="seats" value="B6"></td>
              <td><input type="checkbox" class="seats" value="B7"></td>
              <td><input type="checkbox" class="seats" value="B8"></td>
              <td><input type="checkbox" class="seats" value="B9"></td>
              <td><input type="checkbox" class="seats" value="B10"></td>
              <td><input type="checkbox" class="seats" value="B11"></td>
              <td><input type="checkbox" class="seats" value="B12"></td>
            </tr>
    
            <tr>
              <td>C</td>
              <td><input type="checkbox" class="seats" value="C1"></td>
              <td><input type="checkbox" class="seats" value="C2"></td>
              <td><input type="checkbox" class="seats" value="C3"></td>
              <td><input type="checkbox" class="seats" value="C4"></td>
              <td><input type="checkbox" class="seats" value="C5"></td>
              <td></td>
              <td><input type="checkbox" class="seats" value="C6"></td>
              <td><input type="checkbox" class="seats" value="C7"></td>
              <td><input type="checkbox" class="seats" value="C8"></td>
              <td><input type="checkbox" class="seats" value="C9"></td>
              <td><input type="checkbox" class="seats" value="C10"></td>
              <td><input type="checkbox" class="seats" value="C11"></td>
              <td><input type="checkbox" class="seats" value="C12"></td>
            </tr>
    
            <tr>
              <td>D</td>
              <td><input type="checkbox" class="seats" value="D1"></td>
              <td><input type="checkbox" class="seats" value="D2"></td>
              <td><input type="checkbox" class="seats" value="D3"></td>
              <td><input type="checkbox" class="seats" value="D4"></td>
              <td><input type="checkbox" class="seats" value="D5"></td>
              <td></td>
              <td><input type="checkbox" class="seats" value="D6"></td>
              <td><input type="checkbox" class="seats" value="D7"></td>
              <td><input type="checkbox" class="seats" value="D8"></td>
              <td><input type="checkbox" class="seats" value="D9"></td>
              <td><input type="checkbox" class="seats" value="D10"></td>
              <td><input type="checkbox" class="seats" value="D11"></td>
              <td><input type="checkbox" class="seats" value="D12"></td>
            </tr>
    
            <tr>
              <td>E</td>
              <td><input type="checkbox" class="seats" value="E1"></td>
              <td><input type="checkbox" class="seats" value="E2"></td>
              <td><input type="checkbox" class="seats" value="E3"></td>
              <td><input type="checkbox" class="seats" value="E4"></td>
              <td><input type="checkbox" class="seats" value="E5"></td>
              <td></td>
              <td><input type="checkbox" class="seats" value="E6"></td>
              <td><input type="checkbox" class="seats" value="E7"></td>
              <td><input type="checkbox" class="seats" value="E8"></td>
              <td><input type="checkbox" class="seats" value="E9"></td>
              <td><input type="checkbox" class="seats" value="E10"></td>
              <td><input type="checkbox" class="seats" value="E11"></td>
              <td><input type="checkbox" class="seats" value="E12"></td>
            </tr>
                    
          </table>
    
          <br /><button onclick="updateTextArea()">Confirm Selection</button>
        </center>
      </div>
    
      <br /><br />
    
     
        <center>
          <table>
            <tr>
              <th>Name</th>
              <th>Number of Seats</th>
              <th>Seats</th>
             
            </tr>
            <tr>
              <form action="{{ url('seats') }}" method="POST">
               @csrf
               
              <td><input type="text" id="nameDisplay" name="name" required></td>
              <td><input type="text" id="NumberDisplay" name="number" required></td>
              <td><input type="text" id="seatsDisplay" name="seats" required></td>
            </tr> 
          </table><br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>        
         
        </center>
          
<script>

function onLoaderFunc() {
  $(".seatStructure *").prop("disabled", true);
  $(".displayerBoxes *").prop("disabled", true);
}
function takeData() {
  if ($("#Username").val().length == 0 || $("#Numseats").val().length == 0) {
    alert("Please Enter your Name and Number of Seats");
  } else {
    $(".inputForm *").prop("disabled", true);
    $(".seatStructure *").prop("disabled", false);
    document.getElementById("notification").innerHTML =
      "<b style='margin-bottom:0px;background:yellow;'>Please Select your Seats NOW!</b>";
  }
}

function updateTextArea() {
  if ($("input:checked").length == $("#Numseats").val()) {
    $(".seatStructure *").prop("disabled", true);

    var allNameVals = [];
    var allNumberVals = [];
    var allSeatsVals = [];

    //Storing in Array
    allNameVals.push($("#Username").val());
    allNumberVals.push($("#Numseats").val());
    $("#seatsBlock :checked").each(function () {
      allSeatsVals.push($(this).val());
    });

    //Displaying
    $("#nameDisplay").val(allNameVals);
    $("#NumberDisplay").val(allNumberVals);
    $("#seatsDisplay").val(allSeatsVals);
  } else {
    alert("Please select " + $("#Numseats").val() + " seats");
  }
}

function myFunction() {
  alert($("input:checked").length);
}

$(":checkbox").click(function () {
  if ($("input:checked").length == $("#Numseats").val()) {
    $(":checkbox").prop("disabled", true);
    $(":checked").prop("disabled", false);
  } else {
    $(":checkbox").prop("disabled", false);
  }
});


  
    </script>
     <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  </body>
</html>