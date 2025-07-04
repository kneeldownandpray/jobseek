<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <style type="text/css">
        .table-class {
            width: 100%;
            max-width: 570px;
            margin: auto;
            box-shadow: 0 2px 0 rgb(0 0 150 / 3%), 2px 4px 0 rgb(0 0 150 / 2%);
            padding: 30px;
        }

        .main-logo {
            width: 100px;
            height: auto;
            margin: 10px auto 20px;
            display: block;
        }

        .text-blue-color {
            color: #ee1e59;
        }

        .table-class a {
            background: #ee1e59;
            color: #FFF;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            vertical-align: middle;
            width: auto;
            min-width: 110px;
            text-align: center;
            margin-top: 10px;
            border: 0;
        }

        .table-class button {
            background-color: #ee1e59;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .company-name {
            background: none !important;
            text-decoration: underline !important;
            padding: 0 !important;
            margin-top: -5px !important;
            min-width: unset !important;
            color: #ee1e59 !important;
        }
    </style>
</head>
<body style="background-color: #edf2f7">
<div style=" border-radius: 5px; padding: 15px; margin: 50px auto; width: 100%;">
    <table class="table-class" style="background-color: #fff;">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td>
                            <img style="text-align: center;" src='{{ getLogoUrl() }}'
                                 alt="company logo"
                                 class="img-fluid main-logo">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td>
                            {!! $body !!}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td>
                            <p style="margin-bottom: 0;text-align: center; font-size: 13px;font-family: Circular Std, sans-serif !important;">
                                <strong>&copy;2021 <a href="{{ config('app.url') }}"
                                                      class="company-name">{{ getAppName() }}</a>.</strong>
                                {{__('messages.all_rights_reserved')}}.
                            </p>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
