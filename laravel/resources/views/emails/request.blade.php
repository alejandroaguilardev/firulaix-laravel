@php
$pet = json_decode(base64_decode($param->pet));
$adopter = json_decode(base64_decode($param->adopter));

@endphp

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Firulaix - Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
          -ms-text-size-adjust: 100%; /* 1 */
          -webkit-text-size-adjust: 100%; /* 2 */
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
        </style>
      </head>
      <body style="background-color: #e9ecef;">
        <div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
        
        </div>
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td align="center" bgcolor="#e9ecef">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                  <td align="center" valign="top" style="padding: 2rem ;">
                    <a href="https://firulaixcoin.finance/" target="_blank" style="display: inline-block;">
                      <img src="https://firulaixcoin.finance/images/logo.png" alt="Logo" border="0" width="48" style="display: block; width: 15rem; max-width: 15rem; ">
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="center" bgcolor="#e9ecef">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                  <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
					          <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">
					          <center>Registration Request</center></h1>
                  </td>
                </tr>
              </table>
            </td>
          </tr> 
          <tr>
            <td align="center" bgcolor="#e9ecef">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                      <td align="left" bgcolor="#ffffff" style="padding: 15px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; ">
                        <h3 style="color:red"><b>Please note:</b> </h3>
                        <p>1-) First we will verify your data.</p>
                        <p>2-) Once registered you will receive another email notifying the registration.</p>
                        <p> In case of inconsistency with the data we will be writing you for the data provided.</p>
                        <br/>
                        <p>Status: <span style="color:red">{{$param->status}}</span></p>
                      </td>
                    </tr>
                  <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; ">
					<hr>
                    <h3 style="color:red"><b> <center>Data Adopter: </center></b></h3>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                          <tr>
                              <td>
                                <h4>{{$adopter->name}} {{$adopter->secondName}} {{$adopter->lastName}} {{$adopter->mLastName}}</h4>
                                <p><span class="bold">Country (ISO 3166‑1; alfa‑2):</span> {{$adopter->country}}</p>	
                                <p><span class="bold">Type:</span> {{$adopter->person}}</p>	
                                <p><span class="bold">Document:</span> {{$adopter->document}}</p>	
                                <p><span class="bold">Document Number:</span> {{$adopter->documentNumber}}</p>
                                <p><span class="bold">Public Address:</span> {{$adopter->address}}</p>
                                <p><span class="bold">Gender:</span> {{$adopter->gender}}</p>	
                                <p><span class="bold">Date of Birt:</span> {{$adopter->date}}</p>	
                                <p>E-<span class="bold">E-mail:</span> {{$adopter->email}}</p>	
                                <p><span class="bold">Phone:</span> {{$adopter->phone}}</p>	
                                @if($adopter->country =="PE")
                                  <p><span class="bold">Department:</span> {{$adopter->department}}</p>	
                                  <p><span class="bold">Province:</span> {{$adopter->province}}</p>	
                                  <p><span class="bold">District:</span> {{$adopter->district}}</p>	
                                @endif
                                Visible <span class="bold">Information:</span> @if($adopter->status) SI @else NO @endif
                              </td>
                          </tr>
                        </table>
                    </td>
                  </tr>
                   
                  <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; ">
					<hr>
                    <h3 style="color:red"><b> <center>Data Pet: </center></b></h3>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                          <tr>
                              <td>
                                @if($pet->chip !="")
                                <p><span class="bold">MicroChip:</span> {{$pet->chip}}</p>	
                                @endif
                                <p><span class="bold">Name:</span> {{$pet->name}}</p>	
                                <p><span class="bold">Race:</span> {{$pet->race}}</p>	
                                <p><span class="bold">Gender:</span> {{$pet->gender}}</p>	
                                <p><span class="bold">Color:</span> {{$pet->colour}}</p>
                                <p><span class="bold">Date:</span> {{$pet->date}}</p>	
                                <p><span class="bold">Date Adoption:</span> {{$pet->dateAdoption}}</p>
                                <p><span class="bold">Date Issue:</span> {{$pet->dateIssue}}</p>
                                <p><span class="bold">Sterilized:</span> {{$pet->sterilized}}</p>	

                              </td>
                          </tr>
                        </table>
                    </td>
                  </tr>

                  <tr>
                    <td  bgcolor="#e9ecef" style="padding: 24px;">
                        <div style="font-size:.9rem;padding:.5rem;border:1px solid #AAA;background:#EEE">

                          <p >At Firulaix we are committed to your safety and that of your pet, the entire process is transparent and decentralized.
                            .</p>
                            
                            <p style="margin: 0;">Para cualquier inquietud comunicarse a nuestro grupo de  <a href="https://t.me/firulaixcoin" target="_blank" ref ="noreferrer noopener ">TELEGRAM </a></p>
                            <p style="margin: 0;">For any support contact the following
                              <a href="mail:info@qolkrex.foundation" >E-MAIL </a></p>|<br/>
                              <p style="margin: 0;">Qolkrex Foundation,<br> Support</p>
                            </div>
                  </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                  <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                    <p style="margin: 0;">You received this email because you have just registered an application in firulaixcoin.finance</p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </body>
</html>  






