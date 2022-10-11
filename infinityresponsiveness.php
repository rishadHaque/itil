<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infinity Tech</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Calibri;
            background: radial-gradient(circle, rgba(23, 46, 45, 1) 0%, rgba(51, 25, 51, 1) 72%);
        }

        a {
            color: #dddddd;
            text-decoration: none;
            font-family: Calibri;
            outline:none;
        }

        a:hover {
            color: lightgreen;
        }

        /*Navbar Design*/

        .topnav {
            position: relative;
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: greenyellow;
        }



        .topnav a.active {
            color: white;
        }

        .topnav-right {
            float: right;
        }

        /* Responsive navigation menu (for mobile devices) */
        @media screen and (max-width: 600px) {
            .topnav a, .topnav-right {
                float: none;
                display: block;
            }
        }

        /*Navbar Design*/


        input[type=text]:focus {
            background-color: white;
            border: 1px solid cornflowerblue;
        }

        #x, #y, #z, #zx {
            display: inline-block;
            width: 90%;
            text-align: center;
        }

        #aerror {
            display: inline-block;
            width: 90%;
            text-align: center;
            color: lightgreen;
        }

        .buttonx {
            height: 50px;
            position: relative;
        }

        .x, .y {
            float: left;
        }

        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .one {
            float: left;
            width: 20%;
            color: white;
            font-family: Calibri;
            background: radial-gradient(circle, rgba(23, 46, 45, 1) 0%, rgba(51, 25, 51, 1) 72%);
        }

        .two {
            float: left;
            width: 60%;
            height: 535px;
            color: white;
            font-family: Calibri;
            background: radial-gradient(circle, rgba(23, 46, 45, 1) 0%, rgba(51, 25, 51, 1) 72%);
        }

        .three {
            float: left;
            width: 19%;
            color: white;
            font-family: Calibri;
            background: radial-gradient(circle, rgba(23, 46, 45, 1) 0%, rgba(51, 25, 51, 1) 72%);
        }

        table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        tr {
            border-radius: 10px;
        }

        td {

            background: rgb(23, 46, 45);
            background: radial-gradient(circle, rgba(23, 46, 45, 1) 0%, rgba(51, 25, 51, 1) 72%);
        }

        input{
            background: silver;
            width: 95%;
            margin: 5px;
            box-sizing: border-box;
            padding: 10px 10px;
            border-radius: 5px;
        }

        @media only screen and (max-width: 620px) {
            .one, .two, .three {
                width: 100%;
                height: auto;
            }
        }
    </style>
    <script defer src="script.js"></script>
</head>


<body>
    <div class="topnav">

        <div class="topnav-centered">
            <a href="infinityresponsiveness.php" class="active">Home</a>
        </div>

        <a href="contact/contact.php">Contact</a>

        <div class="topnav-right">
            <button id="buttonnav" style="border-radius: 6px;"><a href="readdata/readdata.php">View Employee Information</a></button>

        </div>

    </div>

    <div class="company" style="text-align: center;font-family:Calibri;color:white;">
     <h1>Infinity Technology International Limited</h1>
    </div>

    <div style="overflow: auto;height: auto">
        <div class="one">
            <table style="">
                <h3 style="text-align: center">Product Details</h3>
                <tr>
                    <td><a href="infinityresponsiveness.php#about">About Company</a></td>
                </tr>
                <tr>
                    <td><a href="infinityresponsiveness.php#cbs">Infinity365 CBS</a></td>
                </tr>
                <tr>
                    <td><a href="infinityresponsiveness.php#erp">Enterprise Resource Planning (ERP)</a></td>
                </tr>
                <tr>
                    <td><a href="infinityresponsiveness.php#ris">Remit Infinity Software</a></td>
                </tr>
                <tr>
                    <td><a href="infinityresponsiveness.php#lms">LMS and EMIS</a></td>
                </tr>
                <tr>
                    <td><a href="infinityresponsiveness.php#sas">Smart Agriculture Solution</a></td>
                </tr>

                <tr>
                    <td><a href="infinityresponsiveness.php#iae">Infinity365 Agro - Ecommerce</a></td>
                </tr>

            </table>
        </div>
        <div class="two" style="overflow: scroll">
            <h3 id="about" style="padding-left: 15px;color: lightgreen;">Company Information</h3>
            <p style="padding-left: 15px;padding-right:15px;text-align: justify;text-justify: inter-word;">
                The best way to understand a company is by understanding their previous customer's
                experience. Reputedfirms is an exclusive platform to publish customer stories of businesses. We suggest
                best-performing businesses based on a company's previous customer experience.
                In this post-covid age, customers do the research mostly online before making their being decision.We
                calculate each and every metric of companies, like on what service the company is skilled with, which
                industry they serve most, how customers are rating each aspect of a company etc. So we are able to generate
                custom shortlisted companies based on each client's requirements. Deal with confidence before awarding your
                next project.
            </p>

            <h3 style="padding-left: 15px;color: lightgreen;">Vision & Goals</h3>
            <p style="padding-left: 15px;padding-right:15px;text-align: justify;text-justify: inter-word;">
                Our clients’ needs are constantly changing, so we continually seek new and better ways to serve them.
                To do this, we are bringing new talent into the firm, acquiring new companies, and developing new
                capabilities, for example, in design.We serve clients at every level of their organization, whether
                as a trusted advisor to top management or as a hands-on coach.
            </p>

            <p style="padding-left: 15px;padding-right:15px;text-align: justify;text-justify: inter-word;">
                We help you see the world differently, discover opportunities you may never have imagined and achieve
                results that bridge what is with what can be.
            </p>

            <h3 id="cbs" style="padding-left: 15px;color: lightgreen;">Infinity365 CBS</h3>
            <p style="padding-left: 15px;padding-right:15px;text-align: justify;text-justify: inter-word;">
                The primary objective of developing a Core Banking Solution is to improve the customer experience. The aim is to provide convenient banking to its customers where the customers are able to access banks anytime and from anywhere. Another objective of the Core Banking Solution is to make informed decisions with facts and figures. The different process of core banking will allow the storage of data in a proper format. All such data can be accessed by an authentication system and helps the customers to make informed decisions. Moreover, it will allow necessary data generation and provide statutory and regulatory reports to the regulators of the government. Banking and financial institutions have benefited immensely after the introduction of core banking in Bangladesh. It offers excellent support to the bank and is an integral part of their daily businesses. It has significantly reduced the burden of manual tasks which consumes time and money. It has made assessing, managing, and upgrading of data simple and has increased efficiency and productivity of the employee. In addition, CBS will enhance the productivity, improve the security of the banking system and 24/7 access to banking service which ultimately reduces the cost and hassle.
            </p>

            <h3 id="erp" style="padding-left: 15px;color: lightgreen;">Enterprise Resource Planning (ERP)</h3>
            <p style="padding-left: 15px;padding-right:15px;text-align: justify;text-justify: inter-word;">
                The modern business is more robust, faster, agile and competitive these days. It was possible only for technological advancement and the use of new technology in business. One of the technologies in modern business that has changed the whole business process dramatically from decision making to delivering its final product to the customers is Enterprise Resource Planning (ERP).
                ERP promotes the free flow of communication across an organization and results in increased synergies between different business areas, increased efficiencies as processes are streamlined and information is readily accessible to those that need it; and reduced costs associated with outdated and ineffective technology.
                From the very first development of the ERP, it is being upgraded, renovated, and enriched with new features and technology continuously. Infinity technology has also taken further step to contribute in the advancement of ERP.
                Infinity ERP is more powerful, rich with all modern features and uses latest technology and built according to modern needs.

            </p>

            <h3 id="ris" style="padding-left: 15px;color: lightgreen;">Remit Infinity Software</h3>
            <p style="padding-left: 15px;padding-right:15px;text-align: justify;text-justify: inter-word;">
                The goal of the project is to increase the net proceeds and smarter management of remittances, reducing the cost of transfer in a more competitive market. The purpose of the project is to procedures for the statistical measurement of remittances in CBS (Core Banking System). The specific objectives of the project are to improve the compilation of statistical information on formal and informal flows of remittances by the CBS, in an effort to promote the adoption of good international practices in remittances as the focal point of a harmonized regional methodology. The software handles USD 2036.93 annually and contributes to the country’s economy boldly. As a big portion of our national GDP comes from the Remittance so there is a high demand for a user-friendly Remittance Solution both for the National and Global usage.
            </p>

            <h3 id="lms" style="padding-left: 15px;color: lightgreen;">LMS and EMIS</h3>
            <p style="padding-left: 15px;padding-right:15px;text-align: justify;text-justify: inter-word;">
                The post COVID-19 situation created an emergence to fulfill the gap in learning for the secondary and higher secondary learners of Bangladesh and Government took visionary steps to train huge manpower of the county; and affiliating with the vision several donor organizations also attached with government or self-driven training programs which are being led by local training centers. The Main features of the LMS is it Supports Bangla and English,
                Built in Learning Content Management System (LCMS), Platform Independency, Live Class, Learner’s Portfolio, Hybrid classroom for blended learning, Open Educational Resource, Extracurricular activities using virtual conferencing, Application of Immersive Technology like Artificial Intelligence, Artificial Reality and Virtual Reality, Glossary of academic terms, Tutor, peer and self-assessment, Learning Tracking, Learner’s forum, Virtual Lab.
                Comparing the demand and supply of the services, new training centers with sophisticated training solution is highly demandable in capital. One of the prime goals is to train the manpower as they could meet the international market demand.  To enter into the international market an individual must have foreign vendor certification from the learning center. Apparently, the learning facility must possess online examination center also. ITIL Learning management system LMS and EMIS will propagate learning easy and participatory and will empower training and learning process easier, accessible to millions.
                ITIL has developed a team of Consultants and Advisors, who designed a world class learning facility and programs with the feature of online examination facility. ITIL has the highest focus to not only serve the government or donor program, but also give specialized trainings which are highly demandable in foreign market.

            </p>

            <h3 id="sas" style="padding-left: 15px;color: lightgreen;">Smart Agriculture Solution </h3>
            <p style="padding-left: 15px;padding-right:15px;text-align: justify;text-justify: inter-word;">
                Bangladesh is an agricultural country and most of the people in our country lives in village. They are using ancient farming models to cultivate their lands. Although there is a huge development going around the world but the farming sector is still struggling because of lack of information and impart of new technology. The imbuement of Immersive technologies (IOT Specifically) in agriculture will create boos in production and supply chain and minimize the production cost. A green revolution in response to the huge global demand and higher economic return. One of the prime goals in these programs is to develop a strong manpower as they could meet the international market demand. Through this they will introduce themselves with IOT based technology and will achieve better analysis methodology to increase their turnover. It is widely accepted that technology is the main driver of socioeconomic development in a country, region and cities. Adopting these 4IR technology will return huge advantages. Using IoT in farms will boost production, reduce production cost. Local language-based e-commerce system for farmers, buyers, logistics and stakeholders both in mobile and web. IoT adoption in Shrimp production farms will ensure extensive benefit for consumers. Lower price, product availability and quality of products will be extended by using IoT in farms. Product traceability with QR code compatibilities believes that the system will increase the production and decrease management costs through an IoT-based Smart Aquaculture solution.
            </p>

            <h3 id="iae" style="padding-left: 15px;color: lightgreen;">Infinity365 Agro-ecommerce </h3>
            <p style="padding-left: 15px;padding-right:15px;text-align: justify;text-justify: inter-word;">
                Application of the Infinity 365 Ago technology to the big boom of post Covid E- commerce industry has given it to a new face. Corporate web solutions are a comprehensive web services for corporate. ITIL will provide complete web solutions at one stop, whether customer requirements are of improvement or redesign of main corporate website, new product launch website site, content management services or content creations, graphic or illustration support, promotions and search engine presence improvements. ITIL's proficient team will help and guide customer in conceptualizing, planning, design and development of their entire corporate web requirements.

                When the portal is the business, there is no compromising on the performance, cost-efficiency and potential growth. ITIL has the skillset and the experience required to guarantee delivery of a reliable B2B (Business to Business) solution to win, serve and retain customers' portal business like E­Commerce, Social Network, Blogs, Business Network, E-Learning Solution etc. ITIL will deploy a team of experts to meet the standards and all requirements of customers' desired portals. ITIL is positioned to deliver portal solutions of a wide variety of types, scope and complexity. Besides serving customers, ITIL has designed two extensive Portal for its own to operate under the company banner. This product has been planned as B2C (Business to Customer) solution and having high focus of enormous technologies engagement with fusions of numerous services to customer.

            </p>
        </div>

        <div class="three">
            <h3 style="padding-left: 15px;text-align: center;margin-right: 16px">EMPLOYEE INFORMATION</h3>
            <form id="form" action="insert.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <label id="x" for="name">Name</label><br>
                <input type="text" id="name" name="name"><br>
                <label id="y" for="email">Email</label><br>
                <input type="text" id="email" name="email"><br>
                <label id="z" for="phone">Phone</label><br>
                <input type="text" id="phone" name="phone"><br>
                <label id="zx" for="address">Address</label><br>
                <input type="text" id="address" name="address"><br>
                <label id="z" for="phone">Designation</label><br>
                <input type="text" id="icomment" name="icomment"><br>
                <label id="z" for="img">Select Image</label>
                <label id="aerror" for="img"></label>
                <input type="file" id="avatar" name="image" accept="image/png, image/jpeg">
                <div class="buttonx">
                    <div class="center">
                        <button type="submit" name="submit" class="x" style="margin-right: 5px;background: white;
            border-radius: 6px;">ADD NEW EMPLOYEE</button>
                    </div>
                </div>

            </form>
            <div class="buttonx">
            <div class="center">

                <a style="text-decoration: none;" href="infinityresponsiveness.php">Cancel</a>
            </div>
            </div>


        </div>
    </div>

    <div style="text-align: center;padding: 2px;color: white;margin: 2px;background: rgb(23,46,45);
                background: radial-gradient(circle, rgba(23,46,45,1) 0%, rgba(51,25,51,1) 72%);">
        <h3>Contact Information</h3>
        <p>Address: Shamsuddin Mansion | Mobile: 01717607343</p>
    </div>


</body>
</html>