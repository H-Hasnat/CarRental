<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent Mail</title>
</head>
<body>

    <!-- Email Template -->

<table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #f9f9f9; padding: 20px;">
    <tr>
      <td align="center">
        <table width="600" border="0" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border: 1px solid #ddd; padding: 20px;">
          <tr>
            <td>
              <h2>Rent Details</h2>
            </td>
          </tr>
          <tr>
            <td>
              <p>Dear {{ $cus_name }},</p>
              <p>We are pleased to confirm your car rental details as follows:</p>
            </td>
          </tr>
          <tr>
            <td>
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <th width="30%">Car Name:</th>
                  <td>{{ $car_name }}</td>
                </tr>
                <tr>
                  <th>Rent Start Date:</th>
                  <td>{{ $start_date }}</td>
                </tr>
                <tr>
                  <th>Rent End Date:</th>
                  <td>{{ $end_date }}</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td>
              <p>If you have any questions or concerns, please don't hesitate to contact us.</p>
              <p>Thank you for choosing our car rental service.</p>
            </td>
          </tr>
        
        </table>
      </td>
    </tr>
  </table>

  <!-- End Email Template -->

</body>
</html>
