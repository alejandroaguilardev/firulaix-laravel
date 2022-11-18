@php $pet = json_decode(base64_decode($param->pet));
$adopter = json_decode(base64_decode($param->adopter)); @endphp

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Firulaix - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: "Source Sans Pro";
                font-style: normal;
                font-weight: 400;
            }

            @font-face {
                font-family: "Source Sans Pro";
                font-style: normal;
                font-weight: 700;
            }
        }

        body,
        table,
        td,
        a {
            -ms-text-size-adjust: 100%;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
        }

        table,
        td {
            mso-table-rspace: 0pt;
            mso-table-lspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        a[x-apple-data-detectors] {
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            color: inherit !important;
            text-decoration: none !important;
        }

        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }

        p {
            margin: 0;
        }

        .bold {
            font-weight: bold;
        }

        body {
            width: 100% !important;
            height: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        table {
            border-collapse: collapse !important;
        }

        a {
            color: #1a82e2;
        }

        img {
            height: auto;
            line-height: 100%;
            text-decoration: none;
            border: 0;
            outline: none;
        }

        .flex-item {
            display: flex;
            gap: 5px;
            margin-bottom: 10px;
        }

        .center {
            justify-content: center;
        }

        .mobile_toolbar__Bo3ir {
            background-image: linear-gradient(270deg, #bd6628, #903c14);
            box-shadow: 2px 2px 1px #903c14;
            margin: auto;
            width: 100%;
        }

        h1 {
            color: #111;
        }

        .text-color {
            color: #444;
        }

        .text-line {
            line-height: 1.7;
        }

        p {
            text-align: justify;
        }

        .process {
            box-sizing: border-box;
            background-color: #ffc094;
            box-shadow: 3px 3px 5px #555;
            font-size: 13px;
            gap: 20px;
            height: 150px;
            margin: 0 auto;
            text-align: center;
            padding: 10px;
            width: 150px;
        }

        .realized {
            background-color: #8bff67;
        }

        .danger {
            background-color: #ff5656;
        }

        .square {
            border: 2px solid #000;
            box-sizing: border-box;
            height: 48px;
            width: 48px;
            margin: 20px auto 0;
        }

        .icons {
            display: flex;
            margin: auto;
            width: 70%;

        }

        .icons a {
            border-radius: 20px;
            margin: 0 0.5rem;
            transition: 0.5s transform, 0.5s background-color;
        }

        .icons img {
            width: 40px;
        }

        .facebook:hover {
            background-color: #4274c0;
            transform: rotate(360deg);
        }

        .youtube:hover {
            background-color: #ff0000;
            transform: rotate(360deg);
        }

        .telegram:hover {
            background-color: #039be5;
            transform: rotate(360deg);
        }

        .reddit:hover {
            background-color: #e84a1b;
            transform: rotate(360deg);
        }

        .twitter:hover {
            background-color: #03a9f4;
            transform: rotate(360deg);
        }

        .instagram:hover {
            background-image: linear-gradient(to right bottom, #fbca2d, #831cc3);
            transform: rotate(360deg);
        }

        .discord:hover {
            background-color: #5c6bc0;
            transform: rotate(360deg);
        }
    </style>
</head>

<body style="background-color: #e9ecef">
    <div class="preheader"
        style="
				display: none;
				max-width: 0;
				max-height: 0;
				overflow: hidden;
				font-size: 1px;
				line-height: 1px;
				color: #fff;
				opacity: 0;
			">
    </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" bgcolor="#e9ecef">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px">
                    <tr>
                        <td class="mobile_toolbar__Bo3ir" align="center" valign="top" style="padding: 15px 0">
                            <a href="https://firulaixcoin.finance/" target="_blank" style="display: inline-block">
                                <img src="https://firulaixcoin.finance/images/logo.png" alt="Logo" border="0"
                                    style="display: block; width: 200px; max-width: 200px" />
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#e9ecef">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px">
                    <tr>
                        <td align="left" bgcolor="#ffffff"
                            style="
									padding: 20px 50px 0;
									font-family: Source Sans Pro, Helvetica, Arial, sans-serif;
									border-top: 3px solid #d4dadf;
								">
                            <h1
                                style="
										margin: 0;
										font-size: 32px;
										font-weight: 700;
										letter-spacing: -1px;
										line-height: 48px;
									">
                                <center>
                                    Thank You For Submitting Your Registration Request
                                </center>
                            </h1>
                            <p class="text-line text-color" style="padding: 20px 10px">
                                Your registration was successful e! Please review your
                                registration information below. We will send you another email
                                when the data is verified.
                            </p>
                            <div class="flex-item center">
                                <div class="process realized">
                                    <img src="https://firulaixcoin.finance/images/email/checked.png" alt="checked"
                                        border="0" style="display: block; width: 50px; height: 50px;margin: 20px auto 0" />
                                    Registration request successful
                                </div>
                                <div
                                    @if ($param->status == 'waiting') class="process" 
                                    @else 
                                      class="process realized" @endif>
                                    @if ($param->status == 'waiting')
                                        <div class="square"></div>
                                    @else
                                        <img src="https://firulaixcoin.finance/images/email/checked.png" alt="checked"
										border="0" style="display: block; width: 50px; height: 50px;margin: 20px auto 0" />

                                    @endif
                                    Processing Registration Request
                                </div>
                                <div
                                    @if ($param->status == 'waiting') class="process" 
                                    @elseif($param->status == 'approved') 
                                      class="process realized"
                                    @elseif($param->status == 'rejected') 
                                      class="process danger" @endif>


                                    @if ($param->status == 'waiting')
                                        <div class="square"></div>
                                    @else
                                        <img src="https://firulaixcoin.finance/images/email/checked.png" alt="checked"
										border="0" style="display: block; width: 50px; height: 50px;margin: 20px auto 0" />

                                    @endif
                                    @if ($param->status == 'waiting')
                                        Your Registration Request is pending
                                    @elseif($param->status == 'approved')
                                        Your Registration Request was approved
                                    @elseif($param->status == 'rejected')
                                        Your Registration Request was denied
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#e9ecef">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px">
                    <tr>
                        <td align="left" bgcolor="#ffffff"
                            style="
									padding: 20px 50px 0;
									font-family: Source Sans Pro, Helvetica, Arial, sans-serif;
								">
                            <div class="flex-item text-color">
                                <img src="https://firulaixcoin.finance/images/email/checked.png" alt="checked"
                                    border="0" style="display: block; width: 20px; height: 20px" />
                                <p>First we will verify your data.</p>
                            </div>
                            <div class="flex-item text-color">
                                <img src="https://firulaixcoin.finance/images/email/checked.png" alt="checked"
                                    border="0" style="display: block; width: 20px; height: 20px" />
                                <p>
                                    Once registered you will receive another email notifying the
                                    registration.
                                </p>
                            </div>
                            <div class="flex-item text-color">
                                <img src="https://firulaixcoin.finance/images/email/checked.png" alt="checked"
                                    border="0" style="display: block; width: 20px; height: 20px" />
                                <p>
                                    In case of inconsistency with the data we will be writing
                                    you for the data provided.
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" bgcolor="#ffffff"
                            style="
									padding: 24px;
									font-family: Source Sans Pro, Helvetica, Arial, sans-serif;
									font-size: 16px;
								">
                            <hr />

                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                style="max-width: 600px">
                                <tr>
                                    <td class="text-color text-line">
                                        <h4>
                                            {{ $adopter->name }} {{ $adopter->secondName }}
                                            {{ $adopter->lastName }} {{ $adopter->mLastName }}
                                        </h4>
                                        <p>
                                            <span class="bold">Country (ISO 3166‑1; alfa‑2):</span>
                                            {{ $adopter->country }}
                                        </p>
                                        <p>
                                            <span class="bold">Type:</span> {{ $adopter->person }}
                                        </p>
                                        <p>
                                            <span class="bold">Document:</span>
                                            {{ $adopter->document }}
                                        </p>
                                        <p>
                                            <span class="bold">Document Number:</span>
                                            {{ $adopter->documentNumber }}
                                        </p>
                                        <p>
                                            <span class="bold">Public Address:</span>
                                            {{ $adopter->address }}
                                        </p>

                                        <br />

                                        <p>
                                            <span class="bold">Sex:</span> {{ $adopter->gender }}
                                        </p>
                                        <p>
                                            <span class="bold">Date of Birt:</span>
                                            {{ $adopter->date }}
                                        </p>
                                        <p>
                                            E-<span class="bold">mail:</span> {{ $adopter->email }}
                                        </p>
                                        <p>
                                            <span class="bold">Phone:</span> {{ $adopter->phone }}
                                        </p>
                                        <br />
                                        @if ($adopter->country == 'PE')
                                            <p>
                                                <span class="bold">Department:</span>
                                                {{ $adopter->department }}
                                            </p>
                                            <p>
                                                <span class="bold">Province:</span>
                                                {{ $adopter->province }}
                                            </p>
                                            <p>
                                                <span class="bold">District:</span>
                                                {{ $adopter->district }}
                                            </p>
                                        @endif 
                                        <span class="bold">Visible Information:</span>
                                        @if ($adopter->status)
                                            SI
                                        @else
                                            NO
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="left" bgcolor="#ffffff"
                            style="
									padding: 24px;
									font-family: Source Sans Pro, Helvetica, Arial, sans-serif;
									font-size: 16px;
								">
                            <hr />

                            <table border="0" cellpadding="0" cellspacing="0" style="max-width: 600px">
                                <tr>
                                    <td class="text-color text-line">
                                        <h4>
                                            {{ $pet->name }} @if ($pet->chip != '')
                                                -{{ $pet->chip }}
                                            @else
                                                I don't have a microchip
                                            @endif
                                        </h4>
                                        <p>
                                            <span class="bold">Country (ISO 3166‑1; alfa‑2):</span>
                                            {{ $pet->country }}
                                        </p>
                                        <p><span class="bold">Type:</span> {{ $pet->type }}</p>
                                        <p><span class="bold">Race:</span> {{ $pet->race }}</p>
                                        <br />
                                        <p><span class="bold">Date:</span> {{ $pet->date }}</p>
                                                                                <p><span class="bold">Date Adoption:</span> {{ $pet->dateAdoption }}</p>
                                                                                
                                         <p><span class="bold">Sex:</span> {{ $pet->gender }}</p>
                                                                                
                                                                                
                                        <p><span class="bold">Color:</span> {{ $pet->colour }}</p>
                                        <p>
                                            <span class="bold">Sterilized:</span>
                                            {{ $pet->sterilized }}
                                        </p>
                                        
                                        @if ($pet->chipFather)
                                        <br />
										    <p>
                                                <span class="bold">chipFather:</span>
                                                {{ $pet->chipFather }}
                                            </p>
                                            @endif @if ($pet->chipMother)
                                                <p>
                                                    <span class="bold">chipMother:</span>
                                                    {{ $pet->chipMother }}
                                                </p>
                                            @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td bgcolor="#e9ecef" style="padding: 24px">
                            <div
                                style="
										font-size: 10px;
										padding: 10px;
										border: 1px solid #aaa;
										background: #eee;
									">
                                <p>
                                    At Firulaix we are committed to your safety and that of your
                                    pet, the entire process is transparent and decentralized. .
                                </p>

                                <p style="margin: 0">
                                    Para cualquier inquietud comunicarse a nuestro grupo de
                                    <a href="https://t.me/firulaixcoin" target="_blank"
                                        ref="noreferrer noopener ">TELEGRAM
                                    </a>
                                </p>
                                <p style="margin: 0">
                                    For any support contact the following
                                    <a href="mail:info@qolkrex.foundation">E-MAIL </a>
                                </p>
                                <br />
                                <p style="margin: 0">
                                    Qolkrex Foundation,<br />
                                    Support
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 24px">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px">
                    <tr>
                        <td align="center" bgcolor="#e9ecef"
                            style="
									padding: 12px 24px;
									font-family: Source Sans Pro, Helvetica, Arial, sans-serif;
									font-size: 14px;
									line-height: 20px;
									color: #666;
								">
                            <p style="margin: 0">
                                You received this email because you have just registered an
                                application in firulaixcoin.finance
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="icons">
                                <a href="https://www.facebook.com/firulaixfinance" class="icons facebook"
                                    target="_blank" rel="noreferrer noopener">
                                    <img src="https://firulaixcoin.finance/images/email/facebook.png"
                                        alt="facebook" />
                                </a>
                                <a href="https://www.youtube.com/channel/UCrOJRzI105YKDHa9zwABAqQ"
                                    class="icons youtube" target="_blank" rel="noreferrer noopener">
                                    <img src="https://firulaixcoin.finance/images/email/youtube.png" alt="youtube" />
                                </a>
                                <a href="https://twitter.com/firulaixcoin" target="_blank" class="icons twitter"
                                    rel="noreferrer noopener">
                                    <img src="https://firulaixcoin.finance/images/email/twitter.png" alt="twitter" />
                                </a>
                                <a href="https://www.instagram.com/firulaixcoin/" target="_blank"
                                    class="icons instagram" rel="noreferrer noopener">
                                    <img src="https://firulaixcoin.finance/images/email/instagram.png"
                                        alt="instagram" />
                                </a>

                                <a href="https://discord.gg/3YYpSKw7m8" target="_blank" class="icons discord"
                                    rel="noreferrer noopener">
                                    <img src="https://firulaixcoin.finance/images/email/discord.png" alt="discord" />
                                </a>
                                <a href="https://t.me/firulaixcoin" class="icons telegram" target="_blank"
                                    rel="noreferrer noopener">
                                    <img src="https://firulaixcoin.finance/images/email/telegram.png"
                                        alt="telegram" />
                                </a>

                                <a href="https://www.reddit.com/user/firulaix" class="icons reddit" target="_blank"
                                    rel="noreferrer noopener">
                                    <img src="https://firulaixcoin.finance/images/email/reddit.png" alt="reddit" />
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
