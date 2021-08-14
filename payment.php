<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/lawstyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>PKB Legal Consult - Book a Lawyer</title>

    <style>
        .bigTile {
            padding: 20px;
            background: #dfdcdc;
            box-shadow: 2px 8px 15px;
            border-radius: 50px;
            height: 360px;
            width: 75%;
            margin: auto;
        }
        
        .space {
            padding-top: 20px;
            font-size: 23px;
            height: 80px;
            text-align: center;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: rgb(69, 69, 94);">
        <a class="navbar-brand" href="#">PKB Legal Consult</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="lawyers.html">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search Lawyer" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>

    <div class="space"></div>

    <div class="bigTile">

        <form class="needs-validation" action="payment.php">

            <?php include('errors.php'); ?>


            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Lawyer's Name</label>
                    <select class="custom-select" id="validationCustom04" name="fullname" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Shidaa Kotei</option>
                        <option>Emefa Bani</option>
                        <option>Jessica Asamoah</option>
                        <option>Clyde Ofosu</option>
                      </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Date</label>
                    <input type="text" class="form-control" id="validationCustom02" name="date" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Amount</label>
                    <input type="int" class="form-control" id="validationCustom03" value="1200" name="amount" disabled>
                    <div class="invalid-feedback">
                        Please enter right amount.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Bank</label>
                    <select class="custom-select" id="validationCustom04" name="bank" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Ghana Commercial Bank</option>
                </select>
                    <div class="invalid-feedback">
                        Please select a bank
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Acc No.</label>
                    <input type="int" class="form-control" id="validationCustom05" name="acc" required>
                    <div class="invalid-feedback">
                        Please provide a valid a/c.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="book">Submit form</button>
        </form>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                            alert("Successfully booked!")
                        }, false);
                    });
                }, false);
            })();
        </script>

    </div>

    <div class="space"></div>






    <footer>

        <div class="main-content">

            <div class="left box">

                <h2 id="about">About Us</h2>

                <div class="content">
                    <p>We offer the best law services in Ghana. Book a lawyer today and your problems are solved.</p>

                    <div class="social">
                        <a href="#"><span class="fab fa-pinterest"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-snapchat"></span></a>
                        <a href="#"><span class="fab fa-google"></span></a>
                    </div>
                </div>
            </div>

            <div class="center box">

                <h2>Address</h2>

                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Cocoa Avenue, Accra</span>
                    </div>

                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+233 548 752 542</span>
                    </div>

                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">pkb_consult@mail.com</span>
                    </div>

                    <div class="postmail">
                        <span class="far fa-envelope"></span>
                        <span class="text">PKB Legal Consult</span>
                        <span class="text">P. O. Box 419</span>
                        <span class="text">Accra</span>
                    </div>
                </div>

            </div>

            <div class="right box">

                <h2>Suggestions</h2>

                <div class="content">

                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea rows="2" cols="25" required></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Send</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </footer>


    <script src="js/java.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>