<head>

    <style>
        .copyright {
            margin: auto;
            padding: 30px 1px;
            text-align: center;
            /* Center text */
        }

        .fa-whatsapp {
            position: relative;
            font-size: 30px;
            color: white;
            left: 33px;
        }

        .floating-icons {
            position: fixed;
            bottom: 20%;
            right: 20px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            /* Stack icons vertically */
        }

        .floating-icon {
            position: relative;
            width: 40px;
            height: 40px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 24px;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }

        /* Add responsiveness */
        @media (max-width: 768px) {
            .floating-icons {
                right: 10px;
                /* Adjust position for smaller screens */
            }

            .copyright {
                font-size: 14px;
                /* Smaller font size on mobile */
                padding: 15px 5px;
                /* Adjust padding */
            }

            .fa-whatsapp {
                font-size: 20px;
                /* Adjust icon size for smaller screens */
            }
        }
    </style>

</head>


<footer>
    <div class="container footer-sec">
        <div class="footer-logo">
            <img src="./images/logo.png" alt="Logo">
            <p class="mt-3">16/A New P&T Layout, <br> Manjunath Nagar,
            Horamavu, <br> Kalkere Main Road, Bangalore - 560043</p>



        </div>

        <div class="quick">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index">Home</a></li>
                <li><a href="index#about">About</a></li>
                <li><a href="index#solutions">Solutions</a></li>
                <li><a href="index#contactus">Contact us</a></li>
            </ul>
        </div>
    </div>
</footer>

<div class="container ">
    <h6 class="text-center copyright" style="color: #000;">COPYRIGHT @ 2024 PLANET CONSCIOUS , ALL RIGHTS RESERVED. Designed by
        <span><a style="text-decoration: none; color: #000; font-weight: 700;" href="https://www.rpinfocare.com/">RP INFOCARE</a></span>
    </h6>

</div>



<script src="./js/script.js"></script>