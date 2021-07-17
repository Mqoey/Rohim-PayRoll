@extends('app')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Navigation</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">DASHBOARD</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-lg-6 col-xl-4">
                    <div class="card">
                        <a href="employees">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Employees
                                        </h5>
                                        <h3 class="my-2 py-1">{{ $employees }}</h3>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card-body -->
                        </a>
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-lg-6 col-xl-4">
                    <div class="card">
                        <a href="users">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Administators
                                        </h5>
                                        <h3 class="my-2 py-1">{{ $users }}</h3>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card-body -->
                        </a>
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-lg-6 col-xl-4">
                    <div class="card">
                        <a href="reports">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Total Pay Cost
                                        </h5>
                                        <h3 class="my-2 py-1">$657,890.00 </h3>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card-body -->
                        </a>
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-1">Campaigns</h4>

                            <div id="dash-campaigns-chart" class="apex-charts" data-colors="#f9c851,#536de6,#10c469"
                                style="min-height: 282.7px;">
                                <div id="apexchartsiwzasyq3"
                                    class="apexcharts-canvas apexchartsiwzasyq3 apexcharts-theme-light"
                                    style="width: 268px; height: 282.7px;"><svg id="SvgjsSvg1758" width="268" height="282.7"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1760" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(-5, 0)">
                                            <defs id="SvgjsDefs1759">
                                                <clipPath id="gridRectMaskiwzasyq3">
                                                    <rect id="SvgjsRect1762" width="286" height="304" x="-3" y="-1" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskiwzasyq3">
                                                    <rect id="SvgjsRect1763" width="284" height="306" x="-2" y="-2" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1764" class="apexcharts-radialbar">
                                                <g id="SvgjsG1765">
                                                    <g id="SvgjsG1766" class="apexcharts-tracks">
                                                        <g id="SvgjsG1767"
                                                            class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 140 29.89939024390243 A 110.10060975609757 110.10060975609757 0 1 1 139.98078381861058 29.89939192083061"
                                                                fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="8.073475609756098" stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 140 29.89939024390243 A 110.10060975609757 110.10060975609757 0 1 1 139.98078381861058 29.89939192083061">
                                                            </path>
                                                        </g>
                                                        <g id="SvgjsG1769"
                                                            class="apexcharts-radialbar-track apexcharts-track" rel="2">
                                                            <path id="apexcharts-radialbarTrack-1"
                                                                d="M 140 46.22256097560975 A 93.77743902439025 93.77743902439025 0 1 1 139.98363274933243 46.22256240392181"
                                                                fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="8.073475609756098" stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 140 46.22256097560975 A 93.77743902439025 93.77743902439025 0 1 1 139.98363274933243 46.22256240392181">
                                                            </path>
                                                        </g>
                                                        <g id="SvgjsG1771"
                                                            class="apexcharts-radialbar-track apexcharts-track" rel="3">
                                                            <path id="apexcharts-radialbarTrack-2"
                                                                d="M 140 62.545731707317074 A 77.45426829268293 77.45426829268293 0 1 1 139.9864816800543 62.54573288701303"
                                                                fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="8.073475609756098" stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 140 62.545731707317074 A 77.45426829268293 77.45426829268293 0 1 1 139.9864816800543 62.54573288701303">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1773">
                                                        <g id="SvgjsG1778"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="TotalxSent" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1779"
                                                                d="M 140 29.89939024390243 A 110.10060975609757 110.10060975609757 0 1 1 55.65803971233031 69.22869222984758"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(249,200,81,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="8.323170731707318"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="310" data:value="86" index="0" j="0"
                                                                data:pathOrig="M 140 29.89939024390243 A 110.10060975609757 110.10060975609757 0 1 1 55.65803971233031 69.22869222984758">
                                                            </path>
                                                        </g>
                                                        <g id="SvgjsG1780"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Reached" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1781"
                                                                d="M 140 46.22256097560975 A 93.77743902439025 93.77743902439025 0 0 1 211.83768605456294 200.278975873013"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(83,109,230,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="8.323170731707318"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-1"
                                                                data:angle="130" data:value="36" index="0" j="1"
                                                                data:pathOrig="M 140 46.22256097560975 A 93.77743902439025 93.77743902439025 0 0 1 211.83768605456294 200.278975873013">
                                                            </path>
                                                        </g>
                                                        <g id="SvgjsG1782"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Opened" rel="3" data:realIndex="2">
                                                            <path id="SvgjsPath1783"
                                                                d="M 140 62.545731707317074 A 77.45426829268293 77.45426829268293 0 0 1 140 217.4542682926829"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(16,196,105,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="8.323170731707318"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-2"
                                                                data:angle="180" data:value="50" index="0" j="2"
                                                                data:pathOrig="M 140 62.545731707317074 A 77.45426829268293 77.45426829268293 0 0 1 140 217.4542682926829">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle1774" r="68.4175304878049" cx="140" cy="140"
                                                            class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                        <g id="SvgjsG1775" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 0;"><text
                                                                id="SvgjsText1776"
                                                                font-family="Helvetica, Arial, sans-serif" x="140" y="140"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="16px" font-weight="400" fill="#f9c851"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: Helvetica, Arial, sans-serif;"></text><text
                                                                id="SvgjsText1777"
                                                                font-family="Helvetica, Arial, sans-serif" x="140" y="172"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="14px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: Helvetica, Arial, sans-serif;"></text>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1784" x1="0" y1="0" x2="280" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1785" x1="0" y1="0" x2="280" y2="0" stroke-dasharray="0"
                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1761" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>

                            <div class="row text-center mt-2">
                                <div class="col-md-4">
                                    <i class="mdi mdi-send widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                    <h3 class="fw-normal mt-3">
                                        <span>6,510</span>
                                    </h3>
                                    <p class="text-muted mb-0 mb-2"><i
                                            class="mdi mdi-checkbox-blank-circle text-warning"></i> Total Sent</p>
                                </div>
                                <div class="col-md-4">
                                    <i
                                        class="mdi mdi-flag-variant widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                    <h3 class="fw-normal mt-3">
                                        <span>3,487</span>
                                    </h3>
                                    <p class="text-muted mb-0 mb-2"><i
                                            class="mdi mdi-checkbox-blank-circle text-primary"></i> Reached</p>
                                </div>
                                <div class="col-md-4">
                                    <i
                                        class="mdi mdi-email-open widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                    <h3 class="fw-normal mt-3">
                                        <span>1,568</span>
                                    </h3>
                                    <p class="text-muted mb-0 mb-2"><i
                                            class="mdi mdi-checkbox-blank-circle text-success"></i> Opened</p>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 317px; height: 758px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->

                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-3">Revenue</h4>

                            <div class="chart-content-bg">
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        <p class="text-muted mb-0 mt-3">Current Month</p>
                                        <h2 class="fw-normal mb-3">
                                            <span>$42,025</span>
                                        </h2>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-muted mb-0 mt-3">Previous Month</p>
                                        <h2 class="fw-normal mb-3">
                                            <span>$74,651</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div dir="ltr" style="position: relative;">
                                <div id="dash-revenue-chart" class="apex-charts" data-colors="#10c469,#ff5b5b"
                                    style="min-height: 336px;">
                                    <div id="apexchartsikmmwuslj"
                                        class="apexcharts-canvas apexchartsikmmwuslj apexcharts-theme-light"
                                        style="width: 268px; height: 321px;"><svg id="SvgjsSvg1664" width="268" height="321"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1666" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(12, 30)">
                                                <defs id="SvgjsDefs1665">
                                                    <clipPath id="gridRectMaskikmmwuslj">
                                                        <rect id="SvgjsRect1672" width="252" height="237.55240511067706"
                                                            x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskikmmwuslj">
                                                        <rect id="SvgjsRect1673" width="250" height="239.55240511067706"
                                                            x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine1671" x1="0" y1="0" x2="0" y2="235.55240511067706"
                                                    stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                    x="0" y="0" width="1" height="235.55240511067706" fill="#b1b9c4"
                                                    filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1685" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1686" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -10)"><text id="SvgjsText1688"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 0.828125 253.71875)">
                                                            <tspan id="SvgjsTspan1689">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText1691"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="22.363636363636367" y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 23.3671875 253.71875)">
                                                            <tspan id="SvgjsTspan1692">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText1694"
                                                            font-family="Helvetica, Arial, sans-serif" x="44.72727272727273"
                                                            y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 45.9453125 253.71875)">
                                                            <tspan id="SvgjsTspan1695">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText1697"
                                                            font-family="Helvetica, Arial, sans-serif" x="67.09090909090908"
                                                            y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 68.3046875 253.71875)">
                                                            <tspan id="SvgjsTspan1698">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText1700"
                                                            font-family="Helvetica, Arial, sans-serif" x="89.45454545454544"
                                                            y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 90.5390625 253.71875)">
                                                            <tspan id="SvgjsTspan1701">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText1703"
                                                            font-family="Helvetica, Arial, sans-serif" x="111.8181818181818"
                                                            y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 112.65625 253.71875)">
                                                            <tspan id="SvgjsTspan1704">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText1706"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="134.18181818181816" y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 135.015625 253.71875)">
                                                            <tspan id="SvgjsTspan1707">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text><text id="SvgjsText1709"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="156.54545454545453" y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 157.546875 253.71875)">
                                                            <tspan id="SvgjsTspan1710">Aug</tspan>
                                                            <title>Aug</title>
                                                        </text><text id="SvgjsText1712"
                                                            font-family="Helvetica, Arial, sans-serif" x="178.9090909090909"
                                                            y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 179.90625 253.71875)">
                                                            <tspan id="SvgjsTspan1713">Sep</tspan>
                                                            <title>Sep</title>
                                                        </text><text id="SvgjsText1715"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="201.27272727272728" y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 202.3984375 253.71875)">
                                                            <tspan id="SvgjsTspan1716">Oct</tspan>
                                                            <title>Oct</title>
                                                        </text><text id="SvgjsText1718"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="223.63636363636365" y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 224.71875 253.71875)">
                                                            <tspan id="SvgjsTspan1719">Nov</tspan>
                                                            <title>Nov</title>
                                                        </text><text id="SvgjsText1721"
                                                            font-family="Helvetica, Arial, sans-serif" x="246"
                                                            y="258.55240511067706" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-45 247 253.71875)">
                                                            <tspan id="SvgjsTspan1722">Dec</tspan>
                                                            <title>Dec</title>
                                                        </text></g>
                                                    <line id="SvgjsLine1723" x1="0" y1="236.55240511067706" x2="246"
                                                        y2="236.55240511067706" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-width="1"></line>
                                                </g>
                                                <g id="SvgjsG1725" class="apexcharts-grid">
                                                    <g id="SvgjsG1726" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1740" x1="0" y1="0" x2="246" y2="0"
                                                            stroke="#f1f3fa" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1741" x1="0" y1="39.25873418511284" x2="246"
                                                            y2="39.25873418511284" stroke="#f1f3fa" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1742" x1="0" y1="78.51746837022569" x2="246"
                                                            y2="78.51746837022569" stroke="#f1f3fa" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1743" x1="0" y1="117.77620255533853" x2="246"
                                                            y2="117.77620255533853" stroke="#f1f3fa" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1744" x1="0" y1="157.03493674045137" x2="246"
                                                            y2="157.03493674045137" stroke="#f1f3fa" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1745" x1="0" y1="196.29367092556421" x2="246"
                                                            y2="196.29367092556421" stroke="#f1f3fa" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1746" x1="0" y1="235.55240511067706" x2="246"
                                                            y2="235.55240511067706" stroke="#f1f3fa" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1727" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1728" x1="0" y1="236.55240511067706" x2="0"
                                                        y2="242.55240511067706" stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1729" x1="22.363636363636363" y1="236.55240511067706"
                                                        x2="22.363636363636363" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1730" x1="44.72727272727273" y1="236.55240511067706"
                                                        x2="44.72727272727273" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1731" x1="67.0909090909091" y1="236.55240511067706"
                                                        x2="67.0909090909091" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1732" x1="89.45454545454545" y1="236.55240511067706"
                                                        x2="89.45454545454545" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1733" x1="111.81818181818181" y1="236.55240511067706"
                                                        x2="111.81818181818181" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1734" x1="134.1818181818182" y1="236.55240511067706"
                                                        x2="134.1818181818182" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1735" x1="156.54545454545456" y1="236.55240511067706"
                                                        x2="156.54545454545456" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1736" x1="178.90909090909093" y1="236.55240511067706"
                                                        x2="178.90909090909093" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1737" x1="201.2727272727273" y1="236.55240511067706"
                                                        x2="201.2727272727273" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1738" x1="223.63636363636368" y1="236.55240511067706"
                                                        x2="223.63636363636368" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1739" x1="246.00000000000006" y1="236.55240511067706"
                                                        x2="246.00000000000006" y2="242.55240511067706" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1748" x1="0" y1="235.55240511067706" x2="246"
                                                        y2="235.55240511067706" stroke="transparent" stroke-dasharray="0">
                                                    </line>
                                                    <line id="SvgjsLine1747" x1="0" y1="1" x2="0" y2="235.55240511067706"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1674" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1675" class="apexcharts-series" seriesName="TotalxRevenue"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1678"
                                                            d="M 0 235.55240511067706L 0 141.33144306640622C 7.827272727272726 141.33144306640622 14.536363636363637 98.1468354627821 22.363636363636363 98.1468354627821C 30.190909090909088 98.1468354627821 36.9 192.36779750705293 44.72727272727273 192.36779750705293C 52.554545454545455 192.36779750705293 59.263636363636365 129.55382281087236 67.0909090909091 129.55382281087236C 74.91818181818182 129.55382281087236 81.62727272727273 192.36779750705293 89.45454545454545 192.36779750705293C 97.28181818181818 192.36779750705293 103.99090909090908 145.2573164849175 111.81818181818181 145.2573164849175C 119.64545454545454 145.2573164849175 126.35454545454546 211.99716459960933 134.1818181818182 211.99716459960933C 142.0090909090909 211.99716459960933 148.71818181818182 153.10906332194008 156.54545454545453 153.10906332194008C 164.37272727272727 153.10906332194008 171.08181818181816 192.36779750705293 178.9090909090909 192.36779750705293C 186.73636363636365 192.36779750705293 193.44545454545454 129.55382281087236 201.27272727272728 129.55382281087236C 209.1 129.55382281087236 215.8090909090909 184.51605067003035 223.63636363636363 184.51605067003035C 231.46363636363637 184.51605067003035 238.17272727272726 145.2573164849175 246 145.2573164849175C 246 145.2573164849175 246 145.2573164849175 246 235.55240511067706M 246 145.2573164849175z"
                                                            fill="rgba(16,196,105,0.35)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskikmmwuslj)"
                                                            pathTo="M 0 235.55240511067706L 0 141.33144306640622C 7.827272727272726 141.33144306640622 14.536363636363637 98.1468354627821 22.363636363636363 98.1468354627821C 30.190909090909088 98.1468354627821 36.9 192.36779750705293 44.72727272727273 192.36779750705293C 52.554545454545455 192.36779750705293 59.263636363636365 129.55382281087236 67.0909090909091 129.55382281087236C 74.91818181818182 129.55382281087236 81.62727272727273 192.36779750705293 89.45454545454545 192.36779750705293C 97.28181818181818 192.36779750705293 103.99090909090908 145.2573164849175 111.81818181818181 145.2573164849175C 119.64545454545454 145.2573164849175 126.35454545454546 211.99716459960933 134.1818181818182 211.99716459960933C 142.0090909090909 211.99716459960933 148.71818181818182 153.10906332194008 156.54545454545453 153.10906332194008C 164.37272727272727 153.10906332194008 171.08181818181816 192.36779750705293 178.9090909090909 192.36779750705293C 186.73636363636365 192.36779750705293 193.44545454545454 129.55382281087236 201.27272727272728 129.55382281087236C 209.1 129.55382281087236 215.8090909090909 184.51605067003035 223.63636363636363 184.51605067003035C 231.46363636363637 184.51605067003035 238.17272727272726 145.2573164849175 246 145.2573164849175C 246 145.2573164849175 246 145.2573164849175 246 235.55240511067706M 246 145.2573164849175z"
                                                            pathFrom="M -1 314.06987348090274L -1 314.06987348090274L 22.363636363636363 314.06987348090274L 44.72727272727273 314.06987348090274L 67.0909090909091 314.06987348090274L 89.45454545454545 314.06987348090274L 111.81818181818181 314.06987348090274L 134.1818181818182 314.06987348090274L 156.54545454545453 314.06987348090274L 178.9090909090909 314.06987348090274L 201.27272727272728 314.06987348090274L 223.63636363636363 314.06987348090274L 246 314.06987348090274">
                                                        </path>
                                                        <path id="SvgjsPath1679"
                                                            d="M 0 141.33144306640622C 7.827272727272726 141.33144306640622 14.536363636363637 98.1468354627821 22.363636363636363 98.1468354627821C 30.190909090909088 98.1468354627821 36.9 192.36779750705293 44.72727272727273 192.36779750705293C 52.554545454545455 192.36779750705293 59.263636363636365 129.55382281087236 67.0909090909091 129.55382281087236C 74.91818181818182 129.55382281087236 81.62727272727273 192.36779750705293 89.45454545454545 192.36779750705293C 97.28181818181818 192.36779750705293 103.99090909090908 145.2573164849175 111.81818181818181 145.2573164849175C 119.64545454545454 145.2573164849175 126.35454545454546 211.99716459960933 134.1818181818182 211.99716459960933C 142.0090909090909 211.99716459960933 148.71818181818182 153.10906332194008 156.54545454545453 153.10906332194008C 164.37272727272727 153.10906332194008 171.08181818181816 192.36779750705293 178.9090909090909 192.36779750705293C 186.73636363636365 192.36779750705293 193.44545454545454 129.55382281087236 201.27272727272728 129.55382281087236C 209.1 129.55382281087236 215.8090909090909 184.51605067003035 223.63636363636363 184.51605067003035C 231.46363636363637 184.51605067003035 238.17272727272726 145.2573164849175 246 145.2573164849175"
                                                            fill="none" fill-opacity="1" stroke="#10c469" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskikmmwuslj)"
                                                            pathTo="M 0 141.33144306640622C 7.827272727272726 141.33144306640622 14.536363636363637 98.1468354627821 22.363636363636363 98.1468354627821C 30.190909090909088 98.1468354627821 36.9 192.36779750705293 44.72727272727273 192.36779750705293C 52.554545454545455 192.36779750705293 59.263636363636365 129.55382281087236 67.0909090909091 129.55382281087236C 74.91818181818182 129.55382281087236 81.62727272727273 192.36779750705293 89.45454545454545 192.36779750705293C 97.28181818181818 192.36779750705293 103.99090909090908 145.2573164849175 111.81818181818181 145.2573164849175C 119.64545454545454 145.2573164849175 126.35454545454546 211.99716459960933 134.1818181818182 211.99716459960933C 142.0090909090909 211.99716459960933 148.71818181818182 153.10906332194008 156.54545454545453 153.10906332194008C 164.37272727272727 153.10906332194008 171.08181818181816 192.36779750705293 178.9090909090909 192.36779750705293C 186.73636363636365 192.36779750705293 193.44545454545454 129.55382281087236 201.27272727272728 129.55382281087236C 209.1 129.55382281087236 215.8090909090909 184.51605067003035 223.63636363636363 184.51605067003035C 231.46363636363637 184.51605067003035 238.17272727272726 145.2573164849175 246 145.2573164849175"
                                                            pathFrom="M -1 314.06987348090274L -1 314.06987348090274L 22.363636363636363 314.06987348090274L 44.72727272727273 314.06987348090274L 67.0909090909091 314.06987348090274L 89.45454545454545 314.06987348090274L 111.81818181818181 314.06987348090274L 134.1818181818182 314.06987348090274L 156.54545454545453 314.06987348090274L 178.9090909090909 314.06987348090274L 201.27272727272728 314.06987348090274L 223.63636363636363 314.06987348090274L 246 314.06987348090274">
                                                        </path>
                                                        <g id="SvgjsG1676" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1754" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wehcvf7vt" stroke="#ffffff"
                                                                    fill="#10c469" fill-opacity="1" stroke-width="2"
                                                                    stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1680" class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1681" class="apexcharts-series" seriesName="TotalxPipeline"
                                                        data:longestSeries="true" rel="1" data:realIndex="1">
                                                        <path id="SvgjsPath1684"
                                                            d="M 0 98.1468354627821C 7.827272727272726 98.1468354627821 14.536363636363637 43.1846076036241 22.363636363636363 43.1846076036241C 30.190909090909088 43.1846076036241 36.9 137.40556964789494 44.72727272727273 137.40556964789494C 52.554545454545455 137.40556964789494 59.263636363636365 74.5915949517144 67.0909090909091 74.5915949517144C 74.91818181818182 74.5915949517144 81.62727272727273 145.2573164849175 89.45454545454545 145.2573164849175C 97.28181818181818 145.2573164849175 103.99090909090908 102.07270888129338 111.81818181818181 102.07270888129338C 119.64545454545454 102.07270888129338 126.35454545454546 168.81255699598523 134.1818181818182 168.81255699598523C 142.0090909090909 168.81255699598523 148.71818181818182 109.92445571831595 156.54545454545453 109.92445571831595C 164.37272727272727 109.92445571831595 171.08181818181816 141.33144306640622 178.9090909090909 141.33144306640622C 186.73636363636365 141.33144306640622 193.44545454545454 74.5915949517144 201.27272727272728 74.5915949517144C 209.1 74.5915949517144 215.8090909090909 145.2573164849175 223.63636363636363 145.2573164849175C 231.46363636363637 145.2573164849175 238.17272727272726 94.2209620442708 246 94.2209620442708"
                                                            fill="none" fill-opacity="1" stroke="rgba(255,91,91,1)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-line" index="1"
                                                            clip-path="url(#gridRectMaskikmmwuslj)"
                                                            pathTo="M 0 98.1468354627821C 7.827272727272726 98.1468354627821 14.536363636363637 43.1846076036241 22.363636363636363 43.1846076036241C 30.190909090909088 43.1846076036241 36.9 137.40556964789494 44.72727272727273 137.40556964789494C 52.554545454545455 137.40556964789494 59.263636363636365 74.5915949517144 67.0909090909091 74.5915949517144C 74.91818181818182 74.5915949517144 81.62727272727273 145.2573164849175 89.45454545454545 145.2573164849175C 97.28181818181818 145.2573164849175 103.99090909090908 102.07270888129338 111.81818181818181 102.07270888129338C 119.64545454545454 102.07270888129338 126.35454545454546 168.81255699598523 134.1818181818182 168.81255699598523C 142.0090909090909 168.81255699598523 148.71818181818182 109.92445571831595 156.54545454545453 109.92445571831595C 164.37272727272727 109.92445571831595 171.08181818181816 141.33144306640622 178.9090909090909 141.33144306640622C 186.73636363636365 141.33144306640622 193.44545454545454 74.5915949517144 201.27272727272728 74.5915949517144C 209.1 74.5915949517144 215.8090909090909 145.2573164849175 223.63636363636363 145.2573164849175C 231.46363636363637 145.2573164849175 238.17272727272726 94.2209620442708 246 94.2209620442708"
                                                            pathFrom="M -1 314.06987348090274L -1 314.06987348090274L 22.363636363636363 314.06987348090274L 44.72727272727273 314.06987348090274L 67.0909090909091 314.06987348090274L 89.45454545454545 314.06987348090274L 111.81818181818181 314.06987348090274L 134.1818181818182 314.06987348090274L 156.54545454545453 314.06987348090274L 178.9090909090909 314.06987348090274L 201.27272727272728 314.06987348090274L 223.63636363636363 314.06987348090274L 246 314.06987348090274">
                                                        </path>
                                                        <g id="SvgjsG1682" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="1">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1755" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wcxu3ieou" stroke="#ffffff"
                                                                    fill="#ff5b5b" fill-opacity="1" stroke-width="2"
                                                                    stroke-opacity="0.9" default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1677" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                    <g id="SvgjsG1683" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                </g>
                                                <line id="SvgjsLine1749" x1="0" y1="0" x2="246" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
                                                </line>
                                                <line id="SvgjsLine1750" x1="0" y1="0" x2="246" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1751" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1752" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1753" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1756" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect1757" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect1670" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1724" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1667" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(16, 196, 105);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 91, 91);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 269px; height: 322px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>

                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- End Content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> x.developers
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-md-block">
                            <a href="https://rohimsystemsint.co.zw">About</a>
                            <a href="https://mqographics.co.zw">Support</a>
                            <a href="/contact_us">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
