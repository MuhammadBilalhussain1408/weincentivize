<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
    <title>Booking Appointment</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            background-color: #eceff1;
            font-family: Montserrat, sans-serif;
        }
        .email-container {
            width: 100%;
            max-width: 800px;
            margin: auto;
            background-color: #ffffff;
            padding: 48px;
            border-radius: 4px;
        }
        .header {
            text-align: center;
        }
        .header img {
            border: 0;
            max-width: 100%;
            vertical-align: middle;
        }
        .content {
            text-align: left;
        }
        .content p {
            font-size: 14px;
            line-height: 24px;
            color: black;
        }
        .form-group {
            padding-top: 18px;
        }
        .form-group label {
            font-size: 18px;
        }
        .form-group input,
        .form-group span {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: black;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            margin-top: 8px;
        }
        .form-group span {
            background-color: #efefef;
            min-height: 40px;
            line-height: 20px;
            pointer-events: none;
            text-align: justify;
            padding: .375rem .75rem;
        }
        .footer {
            font-size: 12px;
            color: #eceff1;
            text-align: center;
            padding: 48px 0;
        }
        .footer a {
            color: #7367f0;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div role="article" aria-roledescription="email" aria-label="Booking Appointment" lang="en">
        <table style="width: 100%;" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td align="center" class="header">
                    <a href="https://weincentivize.com/">
                        <img src="https://weincentivize.com/assets/images/lo.png" width="250" alt="We Incentivize">
                    </a>
                </td>
            </tr>
            <tr>
                <td class="content">
                    <div class="email-container">
                        <p style="font-weight: 700; font-size: 20px; margin-top: 0; color: #ff5850; text-align: center;">
                            BOOKING APPOINTMENT
                        </p>
                        <div class="form-group">
                            <label>Booking ID</label>
                            <input type="text" value="{{ $bookingId }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Service Name</label>
                            <input type="text" value="{{ $serviceName }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Date & Time</label>
                            <input type="text" value="{{ $dateTime }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" value="{{ $location }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Contact Person</label>
                            <input type="text" value="{{ $contactPerson }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" value="{{ $contactNumber }}" disabled>
                        </div>
                       
                        <p style="margin: 0 0 16px; padding-top: 18px; font-size: 15px;">
                            Thanks, <br>The We Incentivize Team
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="footer">
                    <p>
                        Use of our service and website is subject to our 
                        <a href="https://pixinvent.com/" class="hover-underline">Terms of Use</a> and 
                        <a href="https://pixinvent.com/" class="hover-underline">Privacy Policy</a>.
                    </p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
