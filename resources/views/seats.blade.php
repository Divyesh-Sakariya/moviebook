<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Seats</title>
    <style>
        .seat {
            height: 20px;
            width: 20px;
            border: 1px solid gray;
            cursor:pointer;
            background-color:white;
        }
        .walk{
            padding-left:40px;
        }
        #screen {
            background-color:gray;          
            height: 80px;
            width: 240px;
        }     
    </style>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Movie App</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/view_movies">Back</a>
            </div>
        </div>
    </div>
    <div style="border:1px solid gray; width:280px;padding-left:18px;">
        <table>
            <tr>
                <input class="form-control" type="text"  id="screen" disabled>
            <tr>
                <td><div class="seat"></div> </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td class="walk">  </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
            </tr>
            <tr>
                <td><div class="seat"></div> </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td class="walk">  </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
            </tr>
            <tr>
                <td><div class="seat"></div> </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td class="walk">  </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
            </tr>
            <tr>
                <td><div class="seat"></div> </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td class="walk">  </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
            </tr>
            <tr>
                <td><div class="seat"></div> </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td class="walk">  </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
            </tr>
            <tr>
                <td><div class="seat"></div> </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td class="walk">  </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
            </tr>
            <tr>
                <td><div class="seat"></div> </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td class="walk">  </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
            </tr>
            <tr>
                <td><div class="seat"></div> </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td class="walk">  </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
            </tr>
            <tr>
                <td><div class="seat"></div> </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td class="walk">  </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
            </tr>
            <tr>
                <td><div class="seat"></div> </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td class="walk">  </td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
                <td><div class="seat"></div></td>
            </tr>
        </table>
    </div>
</div>
<script>
    allSeats = document.querySelectorAll('.seat');
    for (var i = 0; i < allSeats.length; i++) {
        var seat = allSeats[i];
        seat.addEventListener('click', function () {
            var bgclr = this.style.backgroundColor;
            if(bgclr =='red')
                this.style.backgroundColor = 'white'
            else
                this.style.backgroundColor = 'red'
            debugger
        }, false);
    }

    </script>


</body>
</html>