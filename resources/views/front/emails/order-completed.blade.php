@component('mail::message')
    <table style="border-collapse:collapse;width:100%;margin:0 auto;font-family:sans-serif;line-height:2rem;">
        <tr>
            <td style="padding-left:3px !important;">
                Hi {{ $customer->name }}
            </td>
        </tr>
        <tr>
            <td style="padding-left:3px !important;">
                Thank you for the recent payment you have made to us the sum of ₹{{ number_format($customer->amount) }}. We hereby acknowledge receipt of payment for your registered course with us.
            </td>
        </tr>
        <tr>
            <td style="padding-left:3px !important;">
                Your order number is {{ $customer->order_no }}
            </td>
        </tr>
        <tr>
            <td style="padding-left:3px !important;">
                <div style="display:block;">&nbsp;</div>
            </td>
        </tr>
        <tr>
            <td style="padding-left:3px !important;">
                <div style="display:block">Thanks</div>
                <div style="display:block">Team 21K Class</div>
            </td>
        </tr>
    </table>
@endcomponent
