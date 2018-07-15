<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" sizes="57x57" href="https://imageserver.eveonline.com/Corporation/98427311_64.png">
        <link rel="apple-touch-icon" sizes="60x60" href="https://imageserver.eveonline.com/Corporation/98427311_64.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://imageserver.eveonline.com/Corporation/98427311_128.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://imageserver.eveonline.com/Corporation/98427311_128.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://imageserver.eveonline.com/Corporation/98427311_128.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://imageserver.eveonline.com/Corporation/98427311_128.png">
        <link rel="apple-touch-icon" sizes="144x144" href="https://imageserver.eveonline.com/Corporation/98427311_256.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://imageserver.eveonline.com/Corporation/98427311_256.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://imageserver.eveonline.com/Corporation/98427311_256.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="https://imageserver.eveonline.com/Corporation/98427311_256.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://imageserver.eveonline.com/Corporation/98427311_256.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://imageserver.eveonline.com/Corporation/98427311_256.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://imageserver.eveonline.com/Corporation/98427311_256.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="https://imageserver.eveonline.com/Corporation/98427311_256.png">
        <meta name="theme-color" content="#ffffff">

        <title>Trade Hubs | ExDominion</title>
        <meta name="description" content="A simple tool to view the nearest trade hub to a system in EVE Online.">
        <meta name="author" content="Yipcool - ExDominion">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/fh-3.1.4/r-2.2.2/datatables.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-69129860-3', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <div class="col-sm-12" style="width:100vw; height:100vh;" id="loading">
            <div class="row h-100 justify-content-center align-items-center flex-column">
                <img src="/img/francis-imicus.png" class="img-fluid"/>
                <h3 class="mt-3"><strong>LOADING</strong></h3>
            </div>

        </div>


        <div class="container">
            <div class="row">
                <div class="col-sm-12 my-5" style="display:none;" id="table-container">
                    <table id="systems" class="table-striped table-hover table-dark" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="py-1 px-3" colspan="2">System Details</th>
                                <th class="py-1 px-3" colspan="5">Distance To</th>
                            </tr>
                            <tr>
                                <th class="py-1 px-3">Name</th>
                                <th class="py-1 px-3">Security</th>
                                <th class="py-1 px-3">Jita</th>
                                <th class="py-1 px-3">Amarr</th>
                                <th class="py-1 px-3">Hek</th>
                                <th class="py-1 px-3">Rens</th>
                                <th class="py-1 px-3">Dodixie</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($systems as $system)
                            <tr>
                                <td class="py-1 px-3">{{$system->name}}</td>
                                <td class="py-1 px-3">{{$system->secStatus()}}</td>
                                <td class="py-1 px-3">{{$system->jita}}</td>
                                <td class="py-1 px-3">{{$system->amarr}}</td>
                                <td class="py-1 px-3">{{$system->hek}}</td>
                                <td class="py-1 px-3">{{$system->rens}}</td>
                                <td class="py-1 px-3">{{$system->dodixie}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="py-1 px-3">Name</th>
                                <th class="py-1 px-3">Security</th>
                                <th class="py-1 px-3">Jita</th>
                                <th class="py-1 px-3">Amarr</th>
                                <th class="py-1 px-3">Hek</th>
                                <th class="py-1 px-3">Rens</th>
                                <th class="py-1 px-3">Dodixie</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row py-3">
                    <div class="col-sm-12 text-center">
                        <p>Made sloppily by <a target="_blank" href="https://evewho.com/pilot/yipcool">yipcool</a> - <a target="_blank" href="https://github.com/revenantal"><i class="fab fa-github"></i></a> - <a target="_blank" href="exdominion.com">ExDominion.com</a><br>
                        Jump Data kindly provided by <a target="_blank" href="https://github.com/itshouldntdothis">berylslanjava</a> on <a href="https://www.fuzzwork.co.uk/tweetfleet-slack-invites/" target="_blank">Tweetfleet Slack</a><br>
                            Background Image from <a href="https://imgur.com/gallery/jOfk1" target="_blank">Infinint on Imgur</a></p>
                        <p class="text-muted"><small style="line-height: 1.2; display: block;">EVE Online and the EVE logo are the registered trademarks of CCP hf. All rights are reserved worldwide. All other trademarks are the property of their respective owners. EVE Online, the EVE logo, EVE and all associated logos and designs are the intellectual property of CCP hf. All artwork, screenshots, characters, vehicles, storylines, world facts or other recognizable features of the intellectual property relating to these trademarks are likewise the intellectual property of CCP hf. CCP hf. has granted permission to fuzzwork.co.uk to use EVE Online and all associated logos and designs for promotional and information purposes on its website but does not endorse, and is not in any way affiliated with, fuzzwork.co.uk. CCP is in no way responsible for the content on or functioning of this website, nor can it be liable for any damage arising from the use of this website.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/fh-3.1.4/r-2.2.2/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#systems').dataTable({
                "lengthMenu": [[100, 500, 2500, -1 ], [100, 500, 2500, "All"]],
                fixedHeader: {
                    header: true,
                    footer: true
                },
                order: [[ 1, 'desc' ], [ 0, 'asc' ]],
                "columns": [
                    { "width": "20%" },
                    { "width": "30%" },
                    { "width": "10%" },
                    { "width": "10%" },
                    { "width": "10%" },
                    { "width": "10%" },
                    { "width": "10%" },
                ],
                "createdRow": function ( row, data ) {
                    var columns = [2, 3, 4, 5, 6];
                    var sortedColumns = [];

                    $.each( columns, function( index, columnIndex ){
                        sortedColumns.push( {index:columnIndex, value:data[columnIndex] });
                    });
                    sortedColumns.sort(function(a, b){return a.value - b.value});

                    $('td', row).eq(sortedColumns[1].index).addClass('bg-light-warning');
                    $('td', row).eq(sortedColumns[0].index).addClass('bg-light-success');

                },
                "initComplete": function() {
                    $("#loading").hide();
                    $("#table-container").show();
                    $("#systems_filter input").focus();
                }
            });
        });
    </script>
</html>
