<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from lema.frontted.com/student-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 02:45:52 GMT -->
<?php
require_once "head.php";
?>

<body class="layout-default">












    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

          <?php
          require_once "navbar_expand.php";
          ?>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">







                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center justify-content-between">
                            <div>

                                <h1 class="m-0"><?php echo $student_name; ?></h1>
                            </div>
                        </div>
                    </div>






                    <div class="container-fluid page__container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="border-bottom">

                                        <div class="card-body text-center">
                                            <div class="mb-3">
                                                <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="About Adrian" width="100" class="rounded-circle">
                                            </div>


                                            <p> <?php echo $student_description?>.</p>


                                            <a href="#" class="btn btn-facebook btn-sm"><i class="fab fa-facebook"></i></a>
                                            <a href="#" class="btn btn-twitter btn-sm"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="btn btn-light btn-sm"><i class="fab fa-github"></i></a>

                                        </div>
                                    </div>



                                    <div class="border-bottom">
                                        <div class="card-header bg-light">
                                            <h4 class="card-header__title text-center">Achievements</h4>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="avatar avatar-xs mr-1" data-toggle="tooltip" data-placement="top" title="Senior Developer">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="20" height="20">
                                                        <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                            <path d="M22,3.071c0.276,0,0.5-0.224,0.5-0.5v-0.5c0-1.105-0.895-2-2-2h-17c-1.105,0-2,0.895-2,2v0.5c0,0.276,0.224,0.5,0.5,0.5H22 z M2,4.571c-0.276,0-0.5,0.224-0.5,0.5v2.265c0.006,6.758,3.638,12.994,9.513,16.334c0.613,0.345,1.362,0.345,1.975,0 c5.875-3.341,9.506-9.576,9.512-16.334V5.071c0-0.276-0.224-0.5-0.5-0.5H2z M6.64,10.093c0.063-0.165,0.223-0.274,0.4-0.272h2.737 c0.199,0,0.379-0.118,0.459-0.3l1.377-3.193c0.092-0.214,0.341-0.313,0.555-0.22c0.099,0.043,0.178,0.121,0.22,0.22l1.377,3.193 c0.08,0.182,0.26,0.3,0.459,0.3h2.742c0.233,0,0.422,0.189,0.422,0.422c0,0.12-0.051,0.235-0.141,0.315l-2.311,2.06 c-0.161,0.144-0.212,0.375-0.126,0.573l1.352,3.109c0.093,0.213-0.003,0.461-0.216,0.555c-0.122,0.054-0.262,0.046-0.378-0.02 l-3.322-1.871c-0.152-0.086-0.339-0.086-0.491,0l-3.322,1.874c-0.203,0.114-0.46,0.042-0.575-0.161 c-0.065-0.115-0.072-0.254-0.019-0.375l1.352-3.111c0.086-0.198,0.035-0.429-0.126-0.573l-2.311-2.06 C6.623,10.442,6.578,10.257,6.64,10.093z" stroke="none" fill="#ffffff" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="avatar avatar-xs mr-1" data-toggle="tooltip" data-placement="top" title="100 Lessons Learned">
                                                <span class="avatar-title rounded-circle bg-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="20" height="20">
                                                        <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                            <path d="M23.366,19.266l-2.4-4.138c-0.043-0.075-0.12-0.123-0.206-0.128c-0.086-0.003-0.168,0.039-0.216,0.111 c-1.22,1.84-3,3.239-5.077,3.989c-0.13,0.046-0.198,0.189-0.151,0.319c0.005,0.015,0.012,0.03,0.02,0.044l1.975,3.343 c0.282,0.475,0.896,0.63,1.371,0.348c0.199-0.118,0.351-0.302,0.429-0.52l0.832-2.287l2.392,0.405 c0.382,0.059,0.765-0.103,0.988-0.418C23.54,20.016,23.557,19.601,23.366,19.266z M3.471,15.09 c-0.076-0.115-0.231-0.147-0.346-0.071c-0.032,0.021-0.059,0.05-0.079,0.083l-2.412,4.165c-0.277,0.478-0.113,1.09,0.365,1.366 c0.202,0.117,0.438,0.159,0.667,0.121l2.391-0.405l0.833,2.288c0.189,0.519,0.763,0.787,1.282,0.598 c0.217-0.079,0.4-0.231,0.518-0.43l1.98-3.351c0.038-0.064,0.045-0.142,0.02-0.212c-0.025-0.07-0.08-0.125-0.15-0.15 C6.464,18.337,4.687,16.934,3.471,15.09z M12,8.206c-0.552,0-1,0.448-1,1v1c0,0.552,0.448,1,1,1s1-0.448,1-1v-1 C13,8.654,12.552,8.206,12,8.206z M18,10.206v-1c0-0.552-0.448-1-1-1s-1,0.448-1,1v1c0,0.552,0.448,1,1,1S18,10.758,18,10.206z M20.766,9.456c0-4.832-3.918-8.75-8.75-8.75s-8.75,3.918-8.75,8.75s3.918,8.75,8.75,8.75C16.846,18.2,20.76,14.286,20.766,9.456z M6,11.706c0-0.276,0.224-0.5,0.5-0.5H7v-3l-0.64,0.48c-0.221,0.166-0.534,0.121-0.7-0.1c-0.166-0.221-0.121-0.534,0.1-0.7 l0.64-0.48C6.703,7.177,7.11,7.14,7.449,7.312C7.787,7.482,8,7.828,8,8.206v3h0.5c0.276,0,0.5,0.224,0.5,0.5s-0.224,0.5-0.5,0.5h-2 C6.224,12.206,6,11.982,6,11.706z M19,10.206c0,1.105-0.895,2-2,2s-2-0.895-2-2v-1c0-1.105,0.895-2,2-2s2,0.895,2,2V10.206z M12,12.206c-1.105,0-2-0.895-2-2v-1c0-1.105,0.895-2,2-2s2,0.895,2,2v1C14,11.311,13.105,12.206,12,12.206z" stroke="none" fill="#ffffff" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="avatar avatar-xs mr-1" data-toggle="tooltip" data-placement="top" title="First Course Completed">
                                                <span class="avatar-title rounded-circle bg-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="20" height="20">
                                                        <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                            <path d="M22.593,1.394c-1.5-1.5-4.683,0.077-7.52,2.065c-0.066,0.047-0.151,0.058-0.228,0.031C10.17,1.803,5.012,4.225,3.324,8.901 c-0.719,1.994-0.712,4.177,0.021,6.166c0.028,0.076,0.017,0.161-0.029,0.228C1.464,18-0.085,21.142,1.38,22.607 c0.427,0.41,1.003,0.627,1.594,0.6c1.57,0,3.712-1.112,5.876-2.633c0.064-0.045,0.145-0.058,0.22-0.034 c4.737,1.505,9.798-1.116,11.302-5.853c0.559-1.76,0.563-3.649,0.012-5.412c-0.023-0.075-0.01-0.156,0.035-0.22 c0.436-0.615,0.83-1.214,1.175-1.79C23.328,4.375,23.655,2.454,22.593,1.394z M12.807,9.582c0,0.414-0.336,0.75-0.75,0.75 s-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75C12.471,8.833,12.806,9.168,12.807,9.582z M9.807,7.956 C8.869,7.974,7.999,7.468,7.552,6.643C7.499,6.535,7.531,6.405,7.628,6.334c1.276-0.95,2.839-1.435,4.428-1.372 c0.124,0.004,0.226,0.099,0.239,0.222c0.147,1.376-0.85,2.611-2.226,2.758C9.983,7.951,9.897,7.956,9.811,7.956H9.807z M5.807,11.582c0-0.966,0.784-1.75,1.75-1.75s1.75,0.784,1.75,1.75s-0.784,1.75-1.75,1.75S5.807,12.548,5.807,11.582z M5.559,18.441c0.083,0.081,0.212,0.093,0.309,0.03c2.516-1.677,4.851-3.611,6.967-5.771c2.053-2.017,3.905-4.227,5.533-6.6 c0.065-0.097,0.054-0.225-0.026-0.31c-0.335-0.356-0.697-0.683-1.085-0.98c-0.11-0.085-0.129-0.243-0.044-0.352 c0.018-0.023,0.039-0.042,0.063-0.058c0.875-0.574,1.811-1.052,2.79-1.423c0.286-0.11,0.585-0.181,0.89-0.211 C21.092,2.76,21.208,2.864,21.217,3c0.076,1.206-2.163,5.469-7.462,10.768s-9.544,7.524-10.729,7.5 c-0.135-0.004-0.243-0.114-0.244-0.249c0.024-0.363,0.107-0.72,0.245-1.056c0.334-0.86,0.753-1.685,1.249-2.463 c0.072-0.118,0.226-0.154,0.344-0.082c0.025,0.016,0.048,0.036,0.066,0.059C4.953,17.819,5.245,18.141,5.559,18.441z" stroke="none" fill="#ffffff" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="avatar avatar-xs mr-1" data-toggle="tooltip" data-placement="top" title="1 Series Completed">
                                                <span class="avatar-title rounded-circle bg-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="20" height="20">
                                                        <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                            <path d="M5,11h14c1.105,0,2-0.895,2-2V7c0-0.552-0.448-1-1-1h-1c-0.276,0-0.5,0.224-0.5,0.5V7c0,0.552-0.448,1-1,1s-1-0.448-1-1 V6.5C16.5,6.224,16.276,6,16,6h-2c-0.276,0-0.5,0.224-0.5,0.5c0.001,0.323-0.105,0.636-0.3,0.893 c-0.084,0.11-0.24,0.131-0.35,0.048c-0.062-0.047-0.099-0.121-0.099-0.199V4.5c0-0.276,0.224-0.5,0.5-0.5h3.5 c0.276,0,0.5-0.223,0.501-0.499c0-0.133-0.053-0.261-0.147-0.355l-0.793-0.792c-0.196-0.195-0.196-0.512-0.001-0.707 c0,0,0.001-0.001,0.001-0.001L17.1,0.854c0.196-0.195,0.196-0.512,0.001-0.707C17.008,0.054,16.882,0.001,16.75,0h-4.5 c-0.552,0-1,0.448-1,1v6.242c0,0.138-0.112,0.25-0.25,0.25c-0.078,0-0.151-0.037-0.199-0.099c-0.195-0.257-0.301-0.57-0.3-0.893 c0-0.276-0.224-0.5-0.5-0.5C10.001,6,10,6,10,6H8C7.724,6,7.5,6.224,7.5,6.5V7c0,0.552-0.448,1-1,1s-1-0.448-1-1V6.5 C5.5,6.224,5.276,6,5,6H4C3.448,6,3,6.448,3,7v2C3,10.105,3.895,11,5,11z M23,22h-2.735c-0.287-0.01-0.531-0.211-0.595-0.491 l-1.679-8.592c-0.045-0.236-0.251-0.407-0.491-0.407h-11c-0.24,0-0.446,0.171-0.491,0.407L4.33,21.509 C4.266,21.791,4.019,21.993,3.73,22H1c-0.552,0-1,0.448-1,1s0.448,1,1,1h8.5c0.276,0,0.5-0.224,0.5-0.5v-3c0-1.105,0.895-2,2-2 s2,0.895,2,2v3c0,0.276,0.224,0.5,0.5,0.5H23c0.552,0,1-0.448,1-1S23.552,22,23,22z M13,16c0,0.552-0.448,1-1,1s-1-0.448-1-1v-1 c0-0.552,0.448-1,1-1s1,0.448,1,1V16z" stroke="none" fill="#ffffff" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="VIP Pass">
                                                <span class="avatar-title rounded-circle bg-purple">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="20" height="20">
                                                        <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                            <path d="M23,9c0.552,0,1-0.448,1-1V5.5C24,4.119,22.881,3,21.5,3h-19C1.119,3,0,4.119,0,5.5V8c0,0.552,0.448,1,1,1 c1.657,0,3,1.343,3,3s-1.343,3-3,3c-0.552,0-1,0.448-1,1v2.5C0,19.881,1.119,21,2.5,21h19c1.381,0,2.5-1.119,2.5-2.5V16 c0-0.552-0.448-1-1-1c-1.657,0-3-1.343-3-3S21.343,9,23,9z M12,5c0.552,0,1,0.448,1,1s-0.448,1-1,1s-1-0.448-1-1S11.448,5,12,5z M6,19c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S6.552,19,6,19z M6,7C5.448,7,5,6.552,5,6s0.448-1,1-1s1,0.448,1,1 S6.552,7,6,7z M12,19c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S12.552,19,12,19z M15.21,11.565l-1.349,1.09 c-0.084,0.067-0.115,0.181-0.077,0.282l0.656,1.749c0.097,0.259-0.034,0.547-0.293,0.644c-0.156,0.058-0.33,0.036-0.465-0.061 l-1.542-1.1c-0.087-0.062-0.203-0.062-0.29,0l-1.541,1.1c-0.225,0.161-0.537,0.109-0.698-0.116c-0.097-0.135-0.12-0.31-0.061-0.466 l0.656-1.749c0.038-0.101,0.007-0.215-0.077-0.282L8.78,11.565c-0.215-0.173-0.248-0.488-0.075-0.703 c0.095-0.118,0.238-0.186,0.389-0.186h1.441c0.1,0,0.191-0.06,0.23-0.153l0.773-1.832c0.107-0.255,0.4-0.374,0.655-0.267 c0.121,0.051,0.217,0.147,0.267,0.267l0.765,1.831c0.039,0.093,0.13,0.153,0.231,0.153H14.9c0.276,0,0.5,0.224,0.5,0.5 c0,0.151-0.068,0.294-0.186,0.389L15.21,11.565z M18,19c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.552,19,18,19z M18,7 c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.552,7,18,7z" stroke="none" fill="#ffffff" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>





                                    <!-- START SKILLS -->

                                    <div class="">
                                        <div class="card-header">
                                            <h4 class="card-header__title text-center">Skills</h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled list-skills">
                                                <li>
                                                    <div>HTML</div>
                                                    <div class="flex">
                                                        <div class="progress" style="height: 4px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-dark-gray"><strong>61%</strong></div>
                                                </li>
                                                <li>
                                                    <div>CSS/SCSS</div>
                                                    <div class="flex">
                                                        <div class="progress" style="height: 4px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-dark-gray"><strong>39%</strong></div>
                                                </li>
                                                <li>
                                                    <div>JAVASCRIPT</div>
                                                    <div class="flex">
                                                        <div class="progress" style="height: 4px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-dark-gray"><strong>76%</strong></div>
                                                </li>
                                                <li>
                                                    <div>RUBY ON RAILS</div>
                                                    <div class="flex">
                                                        <div class="progress" style="height: 4px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-dark-gray"><strong>28%</strong></div>
                                                </li>
                                                <li>
                                                    <div>VUEJS</div>
                                                    <div class="flex">
                                                        <div class="progress" style="height: 4px;">
                                                            <div class="progress-bar bg-vuejs" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-dark-gray"><strong>50%</strong></div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- END SKILLS -->


                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <div class="d-flex align-items-center">

                                                <div class="avatar avatar-lg mr-3">
                                                    <span class="bg-soft-primary avatar-title rounded-circle text-center text-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30" height="30">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M6.354,8.984C5.64,8.853,4.854,8.75,3.909,8.659C3.497,8.619,3.195,8.252,3.235,7.84c0.04-0.412,0.407-0.714,0.819-0.674 C5.362,7.274,6.66,7.486,7.935,7.8c0.161,0.042,0.332,0.001,0.456-0.109c0.813-0.716,1.755-1.27,2.776-1.633 c0.2-0.071,0.333-0.26,0.333-0.472V2.517c0-0.171-0.088-0.33-0.232-0.422C9.235,0.8,5.417,0.11,1.789,0 C1.32-0.018,0.866,0.16,0.534,0.492C0.193,0.823,0.001,1.278,0,1.753v12.833c0,0.952,0.761,1.729,1.713,1.748 c1.156,0.031,2.309,0.124,3.454,0.279c0.273,0.039,0.526-0.152,0.565-0.425C5.741,16.125,5.738,16.062,5.723,16 C5.575,15.367,5.5,14.72,5.5,14.07c0-0.349,0.021-0.698,0.064-1.045c0.034-0.273-0.159-0.522-0.432-0.557 c-0.379-0.049-0.784-0.094-1.223-0.137c-0.412-0.04-0.714-0.407-0.674-0.819c0.04-0.412,0.407-0.714,0.819-0.674 c0.58,0.056,1.109,0.118,1.6,0.188c0.224,0.031,0.441-0.092,0.529-0.3c0.147-0.344,0.317-0.678,0.508-1 C6.833,9.489,6.755,9.182,6.518,9.04C6.467,9.01,6.411,8.989,6.352,8.978L6.354,8.984z M4.054,3.493 c1.763,0.129,3.504,0.471,5.185,1.02c0.393,0.132,0.604,0.557,0.472,0.95s-0.557,0.604-0.95,0.472 C7.189,5.422,5.559,5.103,3.909,4.986c-0.412-0.04-0.714-0.407-0.674-0.819S3.642,3.453,4.054,3.493z M23.466,0.492 C23.132,0.164,22.679-0.013,22.211,0c-3.628,0.11-7.446,0.8-9.479,2.1C12.588,2.192,12.5,2.351,12.5,2.522v2.603 c-0.002,0.276,0.221,0.501,0.497,0.503c0.019,0,0.039-0.001,0.058-0.003C13.369,5.59,13.684,5.571,14,5.57 c0.165,0,0.329,0,0.492,0.014c0.073,0.004,0.145-0.024,0.195-0.078c0.051-0.053,0.076-0.127,0.067-0.2 c-0.039-0.351,0.173-0.682,0.508-0.794c1.677-0.593,3.416-0.992,5.184-1.19c0.412-0.04,0.779,0.262,0.819,0.674 s-0.262,0.779-0.674,0.819c-1.269,0.135-2.523,0.391-3.743,0.766c-0.132,0.04-0.207,0.179-0.168,0.311 c0.023,0.076,0.081,0.137,0.156,0.164c0.707,0.252,1.378,0.596,1.994,1.024c0.107,0.074,0.239,0.103,0.367,0.082 C19.599,7.094,20.015,7.04,20.446,7c0.411-0.036,0.775,0.264,0.819,0.674c0.046,0.336-0.159,0.655-0.483,0.754 c-0.129,0.049-0.194,0.194-0.145,0.323c0.009,0.024,0.022,0.046,0.038,0.066c1.598,2.025,2.188,4.667,1.605,7.18 c-0.03,0.135,0.054,0.268,0.189,0.299c0.034,0.008,0.07,0.008,0.104,0.001c0.83-0.144,1.434-0.868,1.427-1.711V1.753 C23.999,1.278,23.807,0.823,23.466,0.492z M16,10.751h-4c-0.69,0.001-1.248,0.559-1.25,1.249v0.445 c-0.011,0.414,0.315,0.759,0.729,0.771s0.759-0.315,0.771-0.729c0.007-0.132,0.117-0.236,0.249-0.236H13 c0.138,0,0.25,0.112,0.25,0.25V16c0.001,0.138-0.11,0.249-0.248,0.25c-0.001,0-0.001,0-0.002,0c-0.414,0-0.75,0.336-0.75,0.75 s0.336,0.75,0.75,0.75h2c0.414,0,0.75-0.336,0.75-0.75s-0.336-0.75-0.75-0.75c-0.138,0.001-0.249-0.11-0.25-0.248 c0-0.001,0-0.001,0-0.002v-3.5c0-0.138,0.112-0.25,0.25-0.25h0.5c0.132,0,0.241,0.103,0.249,0.234 c0.011,0.414,0.355,0.741,0.769,0.731c0.414-0.011,0.741-0.355,0.731-0.769V12C17.247,11.311,16.689,10.753,16,10.751z M19.9,18.489c-0.168-0.168-0.195-0.431-0.064-0.629c2.132-3.225,1.245-7.568-1.98-9.699s-7.568-1.245-9.699,1.98 s-1.245,7.568,1.98,9.699c2.341,1.547,5.379,1.547,7.719,0c0.198-0.131,0.461-0.105,0.629,0.063l3.806,3.806 c0.391,0.39,1.024,0.39,1.415,0c0.39-0.391,0.39-1.024-0.001-1.415l0,0L19.9,18.489z M14,19c-2.761,0-5-2.239-5-5s2.239-5,5-5 s5,2.239,5,5C18.997,16.76,16.76,18.997,14,19z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-muted mb-2">Courses Taken</a>
                                                    <h4 class="m-0 bold">14</h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <div class="d-flex align-items-center">

                                                <div class="avatar avatar-lg mr-3">
                                                    <span class="bg-soft-warning avatar-title rounded-circle text-center text-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30" height="30">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M11.75,4.5C11.888,4.5,12,4.612,12,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75c0-0.138,0.112-0.25,0.25-0.25h1 c0.138,0,0.25,0.112,0.25,0.25v4.7c0,0.135,0.11,0.245,0.246,0.244c0.018,0,0.036-0.002,0.054-0.006 c0.48-0.108,0.969-0.171,1.46-0.188c0.133-0.002,0.239-0.11,0.24-0.243V4.5c0-1.105-0.895-2-2-2h-1.25C14.112,2.5,14,2.388,14,2.25 V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v1.25c0,0.138-0.112,0.25-0.25,0.25h-1.5C10.112,2.5,10,2.388,10,2.25V1c0-0.552-0.448-1-1-1 S8,0.448,8,1v1.25C8,2.388,7.888,2.5,7.75,2.5h-1.5C6.112,2.5,6,2.388,6,2.25V1c0-0.552-0.448-1-1-1S4,0.448,4,1v1.25 C4,2.388,3.888,2.5,3.75,2.5H2c-1.105,0-2,0.895-2,2v13c0,1.105,0.895,2,2,2h7.453c0.135,0,0.244-0.109,0.245-0.243 c0-0.019-0.002-0.038-0.007-0.057c-0.109-0.48-0.173-0.968-0.191-1.46c-0.002-0.133-0.11-0.239-0.243-0.24H2.25 C2.112,17.5,2,17.388,2,17.25V4.75C2,4.612,2.112,4.5,2.25,4.5h1.5C3.888,4.5,4,4.612,4,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1 V4.75C6,4.612,6.112,4.5,6.25,4.5h1.5C7.888,4.5,8,4.612,8,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75 c0-0.138,0.112-0.25,0.25-0.25H11.75z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5 C23.996,13.912,21.088,11.004,17.5,11z M17.5,22.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.052,22.5,17.5,22.5z M18.439,18.327c-0.118,0.037-0.196,0.15-0.189,0.273v0.15c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V18.2 c0.003-0.588,0.413-1.096,0.988-1.222c0.607-0.131,0.993-0.73,0.862-1.338c-0.131-0.607-0.73-0.993-1.338-0.862 c-0.517,0.112-0.887,0.57-0.887,1.099c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75c0-1.45,1.176-2.625,2.626-2.624 c1.45,0,2.625,1.176,2.624,2.626c0,1.087-0.671,2.062-1.686,2.451V18.327z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-muted mb-2">Overall Score</a>
                                                    <h4 class="m-0 bold">592</h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <div class="d-flex align-items-center">

                                                <div class="avatar avatar-lg mr-3">
                                                    <span class="bg-soft-success avatar-title rounded-circle text-center text-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="30" height="30">
                                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                <path d="M11.75,4.5C11.888,4.5,12,4.612,12,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75c0-0.138,0.112-0.25,0.25-0.25h1 c0.138,0,0.25,0.112,0.25,0.25v4.7c0,0.135,0.11,0.245,0.246,0.244c0.018,0,0.036-0.002,0.054-0.006 c0.48-0.108,0.969-0.171,1.46-0.188c0.133-0.002,0.239-0.11,0.24-0.243V4.5c0-1.105-0.895-2-2-2h-1.25C14.112,2.5,14,2.388,14,2.25 V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v1.25c0,0.138-0.112,0.25-0.25,0.25h-1.5C10.112,2.5,10,2.388,10,2.25V1c0-0.552-0.448-1-1-1 S8,0.448,8,1v1.25C8,2.388,7.888,2.5,7.75,2.5h-1.5C6.112,2.5,6,2.388,6,2.25V1c0-0.552-0.448-1-1-1S4,0.448,4,1v1.25 C4,2.388,3.888,2.5,3.75,2.5H2c-1.105,0-2,0.895-2,2v13c0,1.105,0.895,2,2,2h7.453c0.135,0,0.244-0.109,0.245-0.243 c0-0.019-0.002-0.038-0.007-0.057c-0.109-0.48-0.173-0.968-0.191-1.46c-0.002-0.133-0.11-0.239-0.243-0.24H2.25 C2.112,17.5,2,17.388,2,17.25V4.75C2,4.612,2.112,4.5,2.25,4.5h1.5C3.888,4.5,4,4.612,4,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1 V4.75C6,4.612,6.112,4.5,6.25,4.5h1.5C7.888,4.5,8,4.612,8,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75 c0-0.138,0.112-0.25,0.25-0.25H11.75z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5 C23.996,13.912,21.088,11.004,17.5,11z M17.5,22.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.052,22.5,17.5,22.5z M18.439,18.327c-0.118,0.037-0.196,0.15-0.189,0.273v0.15c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V18.2 c0.003-0.588,0.413-1.096,0.988-1.222c0.607-0.131,0.993-0.73,0.862-1.338c-0.131-0.607-0.73-0.993-1.338-0.862 c-0.517,0.112-0.887,0.57-0.887,1.099c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75c0-1.45,1.176-2.625,2.626-2.624 c1.45,0,2.625,1.176,2.624,2.626c0,1.087-0.671,2.062-1.686,2.451V18.327z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-muted mb-2">Quizzes Taken</a>
                                                    <h4 class="m-0 bold"><?php echo $quiz_taken ?></h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ACTIVITY -->

                                <div class="card">
                                    <div class="px-4 py-3">
                                        <div class="d-flex mb-1">
                                            <div class="avatar avatar-sm mr-3">
                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                            </div>
                                            <div class="flex">
                                                <div class="d-flex align-items-center mb-1">
                                                    <strong class="text-15pt">Sherri J. Cardenas</strong>
                                                    <small class="ml-2 text-muted">3 days ago</small>
                                                </div>
                                                <div>
                                                    <p>Thanks for contributing to the release of FREE Admin Vision - PRO Admin Dashboard Theme <a href="https://www.frontted.com/">https://www.frontted.com</a> 🔥</p>
                                                    <p><a href="#">#themeforest</a> <a href="#">#EnvatoMarket</a></p>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="text-muted d-flex align-items-center decoration-0"><i class="material-icons mr-1" style="font-size: inherit;">favorite_border</i> 38</a>
                                                    <a href="#" class="text-muted d-flex align-items-center decoration-0 ml-3"><i class="material-icons mr-1" style="font-size: inherit;">thumb_up</i> 71</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="px-4 py-3">
                                        <div class="d-flex mb-1">
                                            <div class="avatar avatar-sm mr-3">
                                                <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                            </div>
                                            <div class="flex">
                                                <div class="d-flex align-items-center mb-1">
                                                    <strong class="text-15pt">Jenell D. Matney</strong>
                                                    <small class="ml-2 text-muted">4 days ago</small>
                                                </div>
                                                <div>
                                                    <p>Rails 5 Bootstrap 4 Boilerplate Admin Dashboard on <a href="#">https://t.co/Wh7jE0yz4t</a> 😉
                                                </div>

                                                <a href="https://www.frontted.com/" class="card my-3 text-body decoration-0">
                                                    <img src="assets/images/course_lms.jpg" alt="image" class="rounded card-img-top">
                                                    <span class="card-footer d-flex flex-column">
                                                        <strong>Admin Dashboard Template</strong>
                                                        <span>Made with Rails 5 and Bootstrap 4</span>
                                                        <i class="material-icons">link</i> frontted.com
                                                    </span>
                                                </a>

                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="text-muted d-flex align-items-center decoration-0"><i class="material-icons mr-1" style="font-size: inherit;">favorite_border</i> 156</a>
                                                    <a href="#" class="text-muted d-flex align-items-center decoration-0 ml-3"><i class="material-icons mr-1" style="font-size: inherit;">thumb_up</i> 351</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>






                </div>
                <!-- // END drawer-layout__content -->

                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content">
                        <div class="sidebar sidebar-light sidebar-left bg-white" data-perfect-scrollbar>


            <?php
            require_once "sidebar-head.php";
            ?>
                  <?php
                   require_once "sidebar.php"; ?>


                        </div>
                    </div>
                </div>
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->


    <div class="mdk-drawer js-mdk-drawer" id="events-drawer" data-align="end">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left" data-perfect-scrollbar>




                <small class="text-dark-gray px-3 py-1">
                    <strong>Thursday, 28 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Marketing Team Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Wednesday, 27 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>07:48 PM</small>
                                <small class="text-dark-gray">30 min</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call Alex</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>



                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Tuesday, 26 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>03:13 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Design Team Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/stories/256_rsz_clem-onojeghuo-193397-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Monday, 25 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col d-flex">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call Wendy</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>


                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'student-profile.html',
      'fixed': 'fixed-student-profile.html',
      'fluid': 'fluid-student-profile.html',
      'mini': 'mini-student-profile.html'
    }"></app-settings>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="assets/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>




</body>


<!-- Mirrored from lema.frontted.com/student-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 02:45:52 GMT -->
</html>