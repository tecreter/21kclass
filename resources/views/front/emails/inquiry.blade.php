@component('mail::message')
    <table style="border-collapse:collapse;width:100%;margin:0 auto;font-family:sans-serif;line-height:3em;">
        <tr>
            <th style="background-color:#dedede;border:1px solid #000;text-align:left;width:15%;padding-left:3px;">
                Name
            </th>
            <td style="border:1px solid #000;padding-left:3px !important;">
                {{ $inquiry->name }}
            </td>
        </tr>
        @if(!is_null($inquiry->city))
            <tr>
                <th style="background-color:#dedede;border:1px solid #000;text-align:left;width:15%;padding-left:3px;">
                    City
                </th>
                <td style="border:1px solid #000;padding-left:3px !important;">
                    {{ $inquiry->city }}
                </td>
            </tr>
        @endif
        <tr>
            <th style="background-color:#dedede;border:1px solid #000;text-align:left;width:15%;padding-left:3px;">
                Mobile
            </th>
            <td style="border:1px solid #000;padding-left:3px !important;">
                {{ $inquiry->phone }}
            </td>
        </tr>
        <tr>
            <th style="background-color:#dedede;border:1px solid #000;text-align:left;width:15%;padding-left:3px;">
                Email
            </th>
            <td style="border:1px solid #000;padding-left:3px !important;">
                {{ $inquiry->email }}
            </td>
        </tr>
        <tr>
            <th style="background-color:#dedede;border:1px solid #000;text-align:left;width:15%;padding-left:3px;">
                Message Title
            </th>
            <td style="border:1px solid #000;padding-left:3px !important;">
                {{ $inquiry->title }}
            </td>
        </tr>
        <tr>
            <th style="background-color:#dedede;border:1px solid #000;text-align:left;width:15%;padding-left:3px;">
                Message
            </th>
            <td style="border:1px solid #000;padding-left:3px !important;">
                {{ $inquiry->message }}
            </td>
        </tr>
    </table>
@endcomponent
