<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ulang Tahun</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            margin-top: 150px; /* Tambahkan margin atas pada body */
        }

        .jumbotron-image {
            padding-top: 50px; /* Tambahkan padding atas pada jumbotron */
            padding-bottom: 20px; /* Sesuaikan padding bawah jika diperlukan */
            background-size: cover;
            background-position: center;
            color: white;
        }
    </style>
</head>


<body>
    <!-- jumbotron -->
    <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(https://images.unsplash.com/photo-1464347601390-25e2842a37f7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1385&q=80);">
        <section class="cardview" id="cardview">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="thumbnail text-center">
                            <img src="sriwina.jpg" alt="Yolla Ananda" title="Yolla Ananda">
                            <div class="caption">
                                <h3><i class="glyphicon glyphicon-heart pink"></i><strong>Haii Cantik</strong><i class="glyphicon glyphicon-heart pink"></i></h3>
                                <h3>ciee,.. ada yang mau ultah niih</h3>
                                <p> aku ada sesuatu dihari ulang tahunmu nanti </p>
                                <p>Aku harap jadi orang pertama yang ngucapin ultah kekamu</p><a id="ucapanBtn" class="btn" style="  padding: 10px 20px;
    font-size: 1em;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    display: inline-block;
    " role="button">Buka Ucapan</a>
                                </p><br/>
                                <!-- Tombol Kirim -->

                                    <!-- Hitung Mundur -->
                                    <h3>Ga bisa dibuka? sabar ya tunggu hari-h nanti</h3>
                                    <strong>
                                        <p id="demo"></p>
                                        <script>
                                            // Set the date we're counting down to
                                            var countDownDate = new Date("augs 14, 2024 00:00:00").getTime();

                                            // Update the count down every 1 second
                                            var x = setInterval(function() {

                                                // Get today's date and time
                                                var now = new Date().getTime();

                                                // Find the distance between now and the count down date
                                                var distance = countDownDate - now;

                                                // Time calculations for days, hours, minutes and seconds
                                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                // Output the result in an element with id="demo"
                                                document.getElementById("demo").innerHTML = days + " Hari " + hours + " Jam " +
                                                    minutes + " Menit " + seconds + " Detik ";

                                                // If the count down is over, write some text 
                                                if (distance < 0) {
                                                    clearInterval(x);
                                                    document.getElementById("demo").innerHTML =  "SELAMAT ULANG TAHUN YANG KE 20 SAYANG ";
                                                    var btn = document.getElementById("ucapanBtn");
                                                        btn.classList.add("btn-active");
                                                        btn.setAttribute("href", "ucapanku.html");
                                                }
                                            }, 1000);

                                            document.getElementById("ucapanBtn").addEventListener("click", function(event) {
                                            if (this.hasAttribute("disabled")) {
                                                event.preventDefault();
                                                alert("Tombol belum bisa diklik sampai waktu hitung mundur selesai.");
                                            }
                                        });
                                        </script>
                                    </strong>
                                    <h3> Menjelang Ulang Tahumu
                                    </h3>
                                    <br />
                                </h3>
                            


                                <!-- Akhir rombol --><br />
                                <h3 class="text-center">
                                <!-- Akhir Hitung Mundur -->
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <!-- akhir jumbotron -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
</body>

</html>