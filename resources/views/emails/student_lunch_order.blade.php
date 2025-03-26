<!DOCTYPE html>
<html>

<head>
    <title>Order Confirmation - Yum4Kids</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            color: #444;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #333;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 5px;
        }

        p {
            font-size: 14px;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 15px;
            font-size: 14px;
            text-decoration: none;
            color: #ffffff;
            background-color: #3490dc;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #e5e7eb;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f8fafc;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
            color: #6b7280;
        }
    </style>
</head>

<body>
    <div class="container">
        <p>Dear {{ $order->user->name }},</p>

        <p>Thank you for subscribing to our <b>Student Lunch Delivery Service!</b> We have received your order and are excited to
            provide <b>fresh, nutritious meals</b> for your child(ren).</p>

        <h3>Order Details</h3>
        <p><strong>Order Number:</strong> {{ $order->order_id }}</p>
        <p><strong>Meal Plan:</strong> {{ $order->plan->name . ' - ' . $order->plan->price . ' ' . config('app.currency_code') }}</p>
        <p><strong>Start Date:</strong> {{ $order->starts_from }}</p>
        <p><strong>Total Amount:</strong> {{ $order->total_price_after_discount .' '.config('app.currency_code') }}</p>

        <h3>Student Information</h3>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Child Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orderDetails as $ind => $std)
                    <tr>
                        <td>{{ ++$ind }}</td>
                        <td>{{ $std->student_name }}</td>
                        <td>{{ $std->student_class }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Next Steps</h3>
        <ul>
            <li><strong>Payment Verification:</strong> Our team will review and verify your payment. Once confirmed, you
                will receive a <b>final confirmation email</b>, and your child’s meal service will begin as scheduled.</li>
            <li><strong>Start Date:</strong> Once payment is confirmed, deliveries will begin on {{ $order->starts_from }},
                Monday-Friday, as per your selected plan.</li>
        </ul>

        <p>If you have any questions or need assistance, feel free to contact us at <a href="mailto:sales@Yum4Kids.pk">sales@Yum4Kids.pk</a></p>

        <p class="footer">Best regards,<br>
            <strong>Team Yum4Kids</strong></p>
        <p class="footer">📞 0330-3038184<br>
            📧 <a href="mailto:sales@Yum4Kids.pk">sales@Yum4Kids.pk</a><br>
            🌐 <a href="https://www.Yum4kids.pk">www.Yum4kids.pk</a></p>
    </div>
</body>

</html>
