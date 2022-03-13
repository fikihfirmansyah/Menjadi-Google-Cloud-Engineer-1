<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <title>Fikih Firmansyah</title>
    <style>
    /* global */
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    .grid-2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    body {
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
        background-color: #101214;
        color: #7A7C80;

    }

    h2,
    .white {
        color: #fff;
    }

    a {
        color: #7A7C80;
        text-decoration: none;
    }

    /* section 1 */
    .section-1 {
        padding-top: 40vh;
        text-align: center;
    }

    .section-1 p {
        font-size: 1.1rem;
        padding-bottom: 10px;
        margin: 0;
    }

    .section-1 h2 {
        font-size: 1.7rem;
        margin-bottom: 10px;
    }

    .section-1 a {
        font-size: 1.5rem;
        padding: 10px;
    }

    /* section 2 */
    .section-2 {
        padding-top: 10vh;
        width: 70%;
    }

    .section-2 h2 {
        font-size: 1.7rem;
        margin-bottom: 10px;
    }

    .section-2 p {
        font-size: 1.1rem;
        padding-bottom: 10px;
        margin: 0;
    }

    .section-2 a {
        display: block;
        padding: 5px;
        font-size: 1.2rem;
        padding-left: 0;
        width: 400px;
    }

    /* animations / utilities */
    .section-2 a:hover {
        font-size: 1.3rem;
        color: #fff;
        cursor: pointer;
        transition: 0.2s;
    }

    .section-1 a:hover {
        color: #fff;
        cursor: pointer;
        transition: 0.3s;
    }

    .white:hover {
        position: relative;
        padding-left: 10px;
    }

    /* media queres */
    @media(max-width:780px) {
        .grid-2 {
            grid-template-columns: 1fr;
        }

        .section-1 {
            padding: 0;
            padding-top: 5rem;
        }

        .section-2 {
            padding: 0;
            padding-left: 1.5rem;
            padding-top: 2rem;
        }
    }
    </style>

</head>

<body>
    <div class="grid-2">
        <div class="section-1">
            <img src="fikih-circle.png" width="200px">
            <h2>Fikih Firmansyah</h2>
            <p>Medan, Indonesia.</p>
            <a href="https://www.linkedin.com/in/fikih-firmansyah/"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/fikihfirmansyah"><i class="fab fa-github"></i></a>
        </div>
        <div class="section-2">
            <h2>About</h2>
            <p>Junior Back End Developer with experience designing, building, enhancing and maintaining API on AWS or
                Google Cloud Platform.</p>
            <h2>Experience</h2>
            <p>Back End Developer<br>
                <b>Xtend Integrasi Indonesia</b><br>
                Sep 2021 - Present (6 months +)<br><br>
                <b>● ERP (Enterprise Resource Planning) Projects</b><br>
                &nbsp;&nbsp;&nbsp;- Maintaining, optimizing, and continuing developing features such as Accounting
                (Journal, Cash In‑Out, etc), Sales (Quotation, Invoice, and Delivery Order), and Inventory (Stock In‑Out
                and Stock Data).<br><br>
                <b>SMS (Storage Management System) Projects</b><br>
                &nbsp;&nbsp;&nbsp;- Recreating Zend Framework base code for company architecture.<br>
                &nbsp;&nbsp;&nbsp;- Creating and maintaining features such as Inventory (Stock In‑Out and Stock Data)
                and Harmonized
                System with Royal Malaysian Customs Department based.<br><br>
                <b>Regional Innovation Mapping System Projects</b><br>
                &nbsp;&nbsp;&nbsp;- Creating and maintaining features such as questionnaire for every subdistrict area
                in Batubara District.
            </p>

            <h2>Projects</h2>
            <a href="https://sms.xtend.my.id/">Storage Management System</a>
            <a href="https://idn.xtend.my.id/">Enterprise Resource Planning</a>
            <a href="https://suarausu.or.id/">SUARA USU</a>
            <h2>Contact</h2>
            <p>fikihfirmansyah43@gmail.com</p>
        </div>
</body>

</html>