<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />
    <title>Document</title>
    <style>
        .breadcrumb__overlay {
            background-size: cover;
            background-repeat: no-repeat;
        }

        .wrapper {
            border: 1px solid #ddd;
            color: #555;
            font-size: 20px;
            padding: 15px 20px;
            position: relative;
            text-align: center;
            width: 100%;
            cursor: pointer;
            -webkit-transform: translateZ(0);
            /* webkit flicker fix */
            -webkit-font-smoothing: antialiased;
            /* webkit text rendering fix */
        }

        .wrapper .tooltip {
            background: #fff;
            bottom: 100%;
            color: #000;
            display: block;
            left: -20px;
            margin-bottom: 15px;
            opacity: 0;
            padding: 20px;
            pointer-events: none;
            position: absolute;
            width: 100%;
            -webkit-transform: translateY(10px);
            -moz-transform: translateY(10px);
            -ms-transform: translateY(10px);
            -o-transform: translateY(10px);
            transform: translateY(10px);
            -webkit-transition: all .25s ease-out;
            -moz-transition: all .25s ease-out;
            -ms-transition: all .25s ease-out;
            -o-transition: all .25s ease-out;
            transition: all .25s ease-out;
            -webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
            -moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
            -ms-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
            -o-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
            z-index: 999;
            border-radius: 5px;
        }

        /* This bridges the gap so you can mouse into the tooltip without it disappearing */
        .wrapper .tooltip:before {
            bottom: -20px;
            content: " ";
            display: block;
            height: 20px;
            left: 0;
            position: absolute;
            width: 100%;
        }

        /* CSS Triangles - see Trevor's post */
        .wrapper .tooltip:after {
            border-left: solid transparent 10px;
            border-right: solid transparent 10px;
            border-top: solid #fff 10px;
            bottom: -10px;
            content: " ";
            height: 0;
            left: 50%;
            position: absolute;
            width: 0;
        }

        .wrapper:hover .tooltip {
            opacity: 1;
            pointer-events: auto;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
            z-index: 999;
        }

        /* IE can just show/hide with no transition */
        .lte8 .wrapper .tooltip {
            display: none;
        }

        .lte8 .wrapper:hover .tooltip {
            display: block;
        }

        @media screen and (max-width:992px) {
            .wrapper {
                font-size: 15px;
            }
        }

        .schedule-item-wrapper {
            text-align: center;
            vertical-align: middle;
        }

        .table-bordered tbody tr td {
            vertical-align: middle;
        }

        tbody tr td {
            border: 1px solid rgba(0, 0, 0, 0.28) !important;
        }


        /* Table Css */

        tr:nth-child(odd) {
            background-color: #cfe8ff80;
        }

        /* Table Css */
    </style>
</head>

<body>
    <div class="class-schedule-wrap1"
        style="background-image: url('/images/blog/indian-map.png');background-repeat:no-repeat;background-size: contain;background-position: center;z-index: 999;">
        <div class="table-responsive">
            <table class="table" style="border:1px solid black;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-section text-center">
                            <h3 class="tp-section__title mb-35">PCD Pharma Franchise Opportunity</h3>
                        </div>
                    </div>
                </div>
                <tbody>
                    <tr class="first">
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-andhra-pradesh">PCD Pharma Franchise In Andhra
                                        Pradesh</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-Jammu-and-kashmir">PCD Pharma Franchise In Jammu
                                        and Kashmir</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-odisha">PCD Pharma Franchise In Odisha(Orissa)</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="second">
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-bihar">PCD Pharma Franchise In Bihar</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-jharkhand">PCD Pharma Franchise In Jharkhand</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-punjab">PCD Pharma Franchise In Punjab</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="first">
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-arunachal-pradesh">PCD Pharma Franchise In
                                        Arunachal Pradesh</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-karnataka">PCD Pharma Franchise In Karnataka</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-tamil-nadu">PCD Pharma Franchise In Tamil Nadu</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="second">
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-pranchise-in-chhattisgarh">PCD Pharma Franchise In
                                        Chhattisgarh</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-kerala">PCD Pharma Franchise In Kerala</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <div class="item-ctg">
                                    <a href="/pcd-pharma-franchise-in-rajasthan">PCD Pharma Franchise In Rajasthan</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="first">
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-goa">PCD Pharma Franchise In Goa</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-madhya-pradesh">PCD Pharma Franchise In Madhya
                                    Pradesh</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-uttar-pradesh">PCD Pharma Franchise In Uttar
                                    Pradesh</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="second">
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-haryana">PCD Pharma Franchise In Haryana</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-maharashtra">PCD Pharma Franchise In Maharashtra</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-telangana">PCD Pharma Franchise In Telangana</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="first">
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-assam">PCD Pharma Franchise In Assam</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-meghalaya">PCD Pharma Franchise In Meghalaya</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-west-bengal">PCD Pharma Franchise In West Bengal</a>
                            </div>
                        </td>
                    </tr>

                    <tr class="second">
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-gujarat">PCD Pharma Franchise In Gujarat</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-himachal-pradesh">PCD Pharma Franchise In Himachal
                                    Pradesh</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-delhi">PCD Pharma Franchise In Delhi</a>
                            </div>
                        </td>
                    </tr>

                    <tr class="first">
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-lakshadweep">PCD Pharma Franchise In Lakshadweep</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-ladakh">PCD Pharma Franchise In Ladakh</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-sikkim">PCD Pharma Franchise In Sikkim</a>
                            </div>
                        </td>
                    </tr>

                    <tr class="second">
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-chandigarh">PCD Pharma Franchise In Chandigarh</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-puducherry">PCD Pharma Franchise In Puducherry</a>
                            </div>
                        </td>
                        <td>
                            <div class="schedule-item-wrapper">
                                <a href="/pcd-pharma-franchise-in-andaman-nicobar">PCD Pharma Franchise In Andaman
                                    Nicobar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>