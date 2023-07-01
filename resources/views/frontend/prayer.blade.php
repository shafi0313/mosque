@extends('frontend.layout.app')
@section('content')
    <style>
        table {
            background-color: transparent;
        }

        caption {
            padding-top: 8px;
            padding-bottom: 8px;
            color: #777;
            text-align: left;
        }

        th {
            text-align: left;
        }

        table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        table>thead>tr>th,
        table>tbody>tr>th,
        table>tfoot>tr>th,
        table>thead>tr>td,
        table>tbody>tr>td,
        table>tfoot>tr>td {
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd;
        }

        table>thead>tr>th {
            vertical-align: bottom;
            border-bottom: 2px solid #ddd;
        }

        table>caption+thead>tr:first-child>th,
        table>colgroup+thead>tr:first-child>th,
        table>thead:first-child>tr:first-child>th,
        table>caption+thead>tr:first-child>td,
        table>colgroup+thead>tr:first-child>td,
        table>thead:first-child>tr:first-child>td {
            border-top: 0;
        }

        table>tbody+tbody {
            border-top: 2px solid #ddd;
        }

        table table {
            background-color: #fff;
        }

        .table-condensed>thead>tr>th,
        .table-condensed>tbody>tr>th,
        .table-condensed>tfoot>tr>th,
        .table-condensed>thead>tr>td,
        .table-condensed>tbody>tr>td,
        .table-condensed>tfoot>tr>td {
            padding: 5px;
        }

        .table-bordered {
            border: 1px solid #ddd;
        }

        table>thead>tr>th,
        table>tbody>tr>th,
        table>tfoot>tr>th,
        table>thead>tr>td,
        table>tbody>tr>td,
        table>tfoot>tr>td {
            border: 1px solid #ddd;
        }

        table>thead>tr>th,
        table>thead>tr>td {
            border-bottom-width: 2px;
        }

        table>tbody>tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        table>tbody>tr:hover {
            background-color: #f5f5f5;
        }

        table col[class*="col-"] {
            position: static;
            display: table-column;
            float: none;
        }

        table td[class*="col-"],
        table th[class*="col-"] {
            position: static;
            display: table-cell;
            float: none;
        }

        .table>thead>tr>td.active,
        .table>tbody>tr>td.active,
        .table>tfoot>tr>td.active,
        .table>thead>tr>th.active,
        .table>tbody>tr>th.active,
        .table>tfoot>tr>th.active,
        .table>thead>tr.active>td,
        .table>tbody>tr.active>td,
        .table>tfoot>tr.active>td,
        .table>thead>tr.active>th,
        .table>tbody>tr.active>th,
        .table>tfoot>tr.active>th {
            background-color: #f5f5f5;
        }

        table>tbody>tr>td.active:hover,
        table>tbody>tr>th.active:hover,
        table>tbody>tr.active:hover>td,
        table>tbody>tr:hover>.active,
        table>tbody>tr.active:hover>th {
            background-color: #e8e8e8;
        }

        table {
            min-height: .01%;
            overflow-x: auto;
        }
    </style>
    <section id="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h2 class="geolocation"></h2>
                        <h2 class="country"></h2>
                        <h2 class="city"></h2>
                    </div>
                    <div class="prayer-times"></div>
                </div>
                <div class="col-md-6">
                    <div>
                        <h2 class="geolocation"></h2>
                        <h2 class="country"></h2>
                        <h2 class="city"></h2>
                    </div>
                    <div class="prayer-times-arabic"></div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            $(document).ready(function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var latitude = position.coords.latitude;
                        var longitude = position.coords.longitude;
                        // Send a request to reverse geocode the coordinates
                        var apiUrl = 'https://nominatim.openstreetmap.org/reverse?format=json&lat=' + latitude +
                            '&lon=' + longitude;
                        $.ajax({
                            url: apiUrl,
                            method: 'GET',
                            dataType: 'json',
                            success: function(response) {
                                var country = response.address.country;
                                var city = response.address.city || response.address.town ||
                                    response.address.village || response.address.hamlet;
                                $('.country').text('Country: ' + country);
                                $('.city').text('City: ' + city);
                                $('.prayer-times').prayerTimes({
                                    method: 4,
                                    school: 1,
                                    imsak: true,
                                    sunrise: true,
                                    sunset: true,
                                    midnight: true,
                                    militaryTime: false,
                                    country: country,
                                    city: city,
                                });
                                $('.prayer-times-arabic').prayerTimes({
                                    arabic: true,
                                    method: 4,
                                    school: 1,
                                    imsak: true,
                                    sunrise: true,
                                    sunset: true,
                                    midnight: true,
                                    militaryTime: false,
                                    country: country,
                                    city: city,
                                });
                            },
                            error: function(error) {
                                console.log('Error:', error);
                            }
                        });
                    });
                } else {
                    // console.log('Geolocation is not supported by this browser.');
                    $('.geolocation').text('Geolocation is not supported by this browser.');
                    $('.country').text('Default Country: Australia');
                    $('.city').text('');
                    $('.prayer-times').prayerTimes({
                        method: 4,
                        school: 1,
                        imsak: true,
                        sunrise: true,
                        sunset: true,
                        midnight: true,
                        militaryTime: false,
                        country: 'Australia',
                    });
                    $('.prayer-times-arabic').prayerTimes({
                        arabic: true,
                        method: 4,
                        school: 1,
                        imsak: true,
                        sunrise: true,
                        sunset: true,
                        midnight: true,
                        militaryTime: false,
                        country: 'Australia',
                    });
                }
                $('table').css('table table-bordered table-striped table-hover');
            });
        </script>
    @endpush
@endsection
