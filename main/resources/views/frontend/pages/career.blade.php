@extends('layouts.app')
@section('content')
<style>
    .sortingHeader cellHeader{
        border: 1px;
        padding-right: 5px;

    }
    .sortingColumn{
        border: 1px;
        padding-right: 5px;
    }
    .sortingColumn{
        border: 1px;
        padding-right: 5px;
    }
    a:hover, a:focus {
        text-decoration: none;
    }
</style>

<body class="ltr">
    <!-- MBC Pasted from Glance Header -->
    <section  class="properties-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="section-heading-v1 text-center">
                        <h3><span>Career</span>Opportunities</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="wrapper">

        <!-- End Pasted -->
        <div id="main">
            <header class="">
                <div class="container">
                    <h4>Career Opportunities at <a class="name">ARMA GROUP</a></h4>
                </div>
            </header>

            <article class="content-block">
                <div class="container">
                    <br style="clear: both;"/>
                    <div id="jobListingsContent">
                        <table id="jobListings" border='1'>
                            <tbody>
                                <tr>
                                    <th class="sortingHeader cellHeader">
                                        <span class="sortingColumn">Sl. No.</span>
                                    </th>
                                    <th class="sortingHeader cellHeader">
                                        <a href="">Post Name</a>
                                        <span style="display: none;">images/datagrid/sortDesc.gif</span>
                                    </th>
                                    <th class="sortingHeader cellHeader">
                                        <span class="sortingColumn">Last Date Of Apply</span>
                                    </th>
                                </tr>
                                <tr class="rowEven">
                                    <td class="">
                                        01.
                                    </td>
                                    <td class="">
                                        <a target="__blank" href="career/circular/Advertising-2018-Add.pdf">Project Engineer</a>
                                    </td>
                                    <td class="">
                                        16.08.20018
                                    </td>
                                    <td class="">
                                        <a target="__blank" href="career/circular/Advertising-2018-Add.pdf">View Details</a>
                                    </td>
                                </tr>
                                <tr class="rowOdd">
                                    <td class="">
                                        02.
                                    </td>
                                    <td class="">
                                        <a target="__blank" href="career/circular/Advertising-2018-Add.pdf">Site Engineer</a>
                                    </td>
                                    <td class="">
                                        16.08.20018
                                    </td>
                                    <td class="">
                                        <a target="__blank" href="career/circular/Advertising-2018-Add.pdf">View Details</a>
                                    </td>
                                </tr>
                                <tr class="rowEven">
                                    <td class="">
                                        03.
                                    </td>
                                    <td class="">
                                        <a target="__blank" href="career/circular/Advertising-2018-Add.pdf">Accountant</a>
                                    </td>
                                    <td class="">
                                        16.08.20018
                                    </td>
                                    <td class="">
                                        <a target="__blank" href="career/circular/Advertising-2018-Add.pdf">View Details</a>
                                    </td>
                                </tr>
                                <tr class="rowOdd">
                                    <td class="">
                                        04.
                                    </td>
                                    <td class="">
                                        <a target="__blank" href="career/circular/Advertising-2018-Add.pdf">Executive (Commercial)</a>
                                    </td>
                                    <td class="">
                                        16.08.20018
                                    </td>
                                    <td class="">
                                        <a target="__blank" href="career/circular/Advertising-2018-Add.pdf">View Details</a>
                                    </td>
                                </tr>
                                <tr class="rowEven">
                                    <td class="">
                                        05.
                                    </td>
                                    <td class="">
                                        <a target="__blank" href="career/circular/Advertising-2018-Add.pdf">Assistant Store Officer</a>
                                    </td>
                                    <td class="">
                                        16.08.20018
                                    </td>
                                    <td class="">
                                        <a target="__blank" href="career/circular/Advertising-2018-Add.pdf">View Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="pagination">
                            <ul class="pager">
                                <li class="pagerDisable">Prev</li>
                                <li class="active pageSelector"><a href="javascript:void(0);">1</a></li>
                                <li><a class="pageSelector" href="{{ route('Career') }}">2</a></li>
                                <li><a class="pageSelector" href="{{ route('Career') }}">Next</a></li>
                            </ul>
                        </div>
                    </div>

                    <input type="hidden" id="portalID" value="22997"/>
                    <input type="hidden" id="testMode" value="no"/>
                </div>
            </article>
        </div>



        <script>
            // Add Bootstrap table class to jobListing table that's generated into this page.
            $("#jobListings").addClass("table")
            // Search doesn't seem to be working "out of the box", and needs styling work to make it look non-ugly.
            $("#searchFilter").hide()
        </script>
    </div> <!-- end div id=main -->
    <script>(function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-55817066-1', 'auto');
        ga('send', 'pageview');</script>
    <div id="poweredBy" style="display: inline; visibility: visible;">

    </div>
    <script type="text/javascript">
        var clicky_site_ids = clicky_site_ids || [];
        clicky_site_ids.push(66466644);

        (function () {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'http://static.getclicky.com/js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(s);
        })();
    </script>


    <script type='text/javascript' src='../recruitingsocial.com/wp-content/themes/recruitingsocial/js/breakpoints.min68b3.html?ver=1'></script>
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=true&amp;ver=3'></script>
    <script type='text/javascript' src='../recruitingsocial.com/wp-content/themes/recruitingsocial/js/gmaps.min70b1.html?ver=0.4.9'></script>
    <script type='text/javascript' src='../recruitingsocial.com/wp-content/themes/recruitingsocial/js/mailchimp68b3.js?ver=1'></script>
    <script type='text/javascript' src='../recruitingsocial.com/wp-content/themes/recruitingsocial/js/skrollr.min68b3.js?ver=1'></script>
    <script type='text/javascript' src='../recruitingsocial.com/wp-content/themes/recruitingsocial/js/rs.min77ae.js?ver=2'></script>
    <script>
        $("#poweredBy").hide()
    </script>
</body>

@endsection
