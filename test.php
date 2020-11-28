<?php include __DIR__ . '/parts/config.php'; ?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<!-- css連結 -->
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/share.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/animate.min.css">
<link rel="stylesheet" href="<?= WEB_ROOT ?>CSS/test.css">

<!-- include __DIR__ . '/parts/nav.php'; -->
<!-- 貼上html -->
<div class="hero">
    <div class="container-fluid img-scope position-relative">
        <div class="delete">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50" height="50">
                        <defs>
                            <style>
                                .cls-1,
                                .cls-2 {
                                    fill: none;
                                }

                                .cls-2 {
                                    stroke: #FFFEFC;
                                    stroke-width: 2px;
                                }

                                .cls-3 {
                                    fill: #FFFEFC;
                                }
                            </style>
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <g id="Ellipse_219" data-name="Ellipse 219">
                                    <circle class="cls-1" cx="25" cy="25" r="25" />
                                    <circle class="cls-2" cx="25" cy="25" r="24" />
                                </g>
                                <g id="Group_1139" data-name="Group 1139">
                                    <rect id="Rectangle_1104" data-name="Rectangle 1104" class="cls-3" x="23" y="13" width="4" height="24" transform="translate(-10.36 25) rotate(-45)" />
                                    <rect id="Rectangle_1106" data-name="Rectangle 1106" class="cls-3" x="13" y="23" width="24" height="4" transform="translate(-10.36 25) rotate(-45)" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </span>
            </button>
        </div>
        <div class="animation position-absolute animate__animated animate__fadeInUp">
            <img class="" src="<?= WEB_ROOT ?>img/test/test-rotate.svg" alt="">
        </div>
        <div class="content position-absolute">
            <h2 class="animate__animated animate__fadeInUp">瑜珈墊測驗</h2>
            <div class="last-sec-thermo position-relative ml-2 animate__animated animate__fadeInUp" style="animation-delay: .8s;"></div>
            <div class="d-flex justify-content-center w-100 animate__animated animate__fadeInUp">
                <div class="text">大多數人不知道如何挑選好的瑜珈商品，對於材質也較沒有概念、更不知道怎麼買適合的輔具，因此對於瑜珈有了距離感，我們希望讓瑜珈更有溫度、更生活
                    化，讓每個人都能夠輕鬆接觸瑜珈，找到適合他們的瑜珈產品，讓瑜珈的美好融入日常！</div>
            </div>

            <div class="">
                <div class="btn_f btn animate__animated animate__fadeInUp test-btn">開始測驗</div>
            </div>


        </div>
    </div>

    <div class="logo position-absolute">

        <svg xmlns="http://www.w3.org/2000/svg" width="190.003" height="44.449" viewBox="0 0 190.003 44.449">
            <g id="Group_1702" data-name="Group 1702" transform="translate(11544 -18970)">
                <g id="Group_402" data-name="Group 402" transform="translate(-11538.53 18970)">
                    <g id="Group_400" data-name="Group 400">
                        <path id="Path_286" data-name="Path 286" d="M82.485,54.957a22.432,22.432,0,0,0-7.194-1.8,21.681,21.681,0,0,0-3.7.03,21.084,21.084,0,0,0-3.636.642,21.63,21.63,0,0,0-11.937,8.088,22.23,22.23,0,0,0-3.27,6.492,21.534,21.534,0,0,0-.909,7.193A21.468,21.468,0,0,0,69.617,95.823,21.632,21.632,0,0,0,93.352,82.714a21.993,21.993,0,0,0,.776-14.52,22,22,0,0,1,.9,3.624,21.4,21.4,0,0,1,.245,3.737,22.782,22.782,0,0,1-.379,3.737,22.108,22.108,0,0,1-1.025,3.626,21.816,21.816,0,0,1-3.858,6.472A22.321,22.321,0,0,1,50.766,75.644,22.566,22.566,0,0,1,51.8,68.117,22.155,22.155,0,0,1,55.32,61.4a22.7,22.7,0,0,1,5.561-5.132,21.878,21.878,0,0,1,21.6-1.31Z" transform="translate(-50.752 -52.728)" fill="#fffefc" />
                    </g>
                    <g id="Group_401" data-name="Group 401" transform="translate(37.321 6.581)">
                        <path id="Path_287" data-name="Path 287" d="M151.164,73.006a1.115,1.115,0,0,0,.892-.469,1.732,1.732,0,0,0,.33-.892,1.214,1.214,0,0,0-.29-.932,1.12,1.12,0,0,0-.932-.344,1.382,1.382,0,0,0-.85.426,1.283,1.283,0,0,0-.328.85,1.494,1.494,0,0,0,.29.888A1.114,1.114,0,0,0,151.164,73.006Zm0,.038a1.732,1.732,0,0,1-1.063-.335,1.352,1.352,0,0,1-.518-1.063,1.5,1.5,0,0,1,.48-1.1,1.406,1.406,0,0,1,1.1-.382,1.718,1.718,0,0,1,1.019.464,1.549,1.549,0,0,1,.518,1.019,1.249,1.249,0,0,1-.478,1.059A1.732,1.732,0,0,1,151.164,73.043Z" transform="translate(-149.583 -70.155)" fill="#fffefc" />
                    </g>
                </g>
                <g id="Group_404" data-name="Group 404" transform="translate(-11544 18984.85)">
                    <g id="Group_403" data-name="Group 403">
                        <path id="Path_288" data-name="Path 288" d="M36.313,108.877v-.011h0l.2-.077h0l0,0,.011.013.019.025a.386.386,0,0,1,.033.067.816.816,0,0,1,0,.5c-.013.033-.026.029-.044-.036a1.013,1.013,0,0,0-.133-.348.236.236,0,0,0-.027-.03.119.119,0,0,0-.019-.016l-.009-.006h0l.2-.077h0v.011c.011.218.013.435.042.649a3.1,3.1,0,0,0,.043.32c.02.105.032.212.059.315l.077.309.1.3c.03.1.08.194.118.29a2.422,2.422,0,0,0,.139.278,3.248,3.248,0,0,0,1.046,1.174,3.72,3.72,0,0,0,1.455.565,6.633,6.633,0,0,0,3.2-.287,18.989,18.989,0,0,0,5.823-3.265c.44-.356.863-.706,1.281-1.1s.844-.76,1.229-1.163a14.575,14.575,0,0,0,1.089-1.239,6.107,6.107,0,0,0,.806-1.3.984.984,0,0,0,.056-.931c-.037-.043-.086-.088-.262-.1a1.865,1.865,0,0,0-.621.1,7.636,7.636,0,0,0-2.655,1.722,7.416,7.416,0,0,0-1.047,1.234,2.858,2.858,0,0,0-.53,1.376,1.092,1.092,0,0,0,.657,1.047,4.1,4.1,0,0,0,1.542.4,11.981,11.981,0,0,0,6.563-1.446,31.4,31.4,0,0,0,3-1.7c.488-.308.971-.624,1.453-.944s.96-.634,1.423-.977a49.835,49.835,0,0,0,5.38-4.282,18.292,18.292,0,0,0,2.222-2.5,6.613,6.613,0,0,0,1.325-2.752,1.061,1.061,0,0,0,0-.295c-.007-.045-.008-.092-.015-.135s-.029-.076-.041-.114a.215.215,0,0,0-.047-.1.941.941,0,0,1-.054-.1c-.065-.046-.087-.119-.167-.157a1.892,1.892,0,0,0-1.162-.291,5.218,5.218,0,0,0-2.79,1.032A13.106,13.106,0,0,0,64.871,97a23.7,23.7,0,0,0-2.013,2.668,29.108,29.108,0,0,0-1.679,2.919c-.251.5-.485,1.018-.708,1.528s-.409,1.026-.575,1.551a10.058,10.058,0,0,0-.523,3.158,3.217,3.217,0,0,0,1.071,2.558,3.943,3.943,0,0,0,2.823.812,10.806,10.806,0,0,0,3.2-.765l.394-.157.283-.118.088-.038.175-.076.349-.158c.234-.1.463-.22.694-.332,0,0,.549-.246,1.276-.62s1.629-.88,2.359-1.321a15.951,15.951,0,0,1,1.48-.9l-1.413,1.1c.077-.053-.775.6-1.671,1.248-.447.323-.91.638-1.261.873l-.594.384c-.223.133-.449.262-.677.388-.113.065-.23.123-.345.185l-.086.046-.228.117-.392.193a14.948,14.948,0,0,1-1.637.662,7.485,7.485,0,0,1-3.64.395,4.7,4.7,0,0,1-1.816-.725,4.263,4.263,0,0,1-1.362-1.506,5.693,5.693,0,0,1-.54-1.893,9.137,9.137,0,0,1,.03-1.868,14.857,14.857,0,0,1,.885-3.489,27.192,27.192,0,0,1,3.351-6.178A19.509,19.509,0,0,1,64.5,94.947a11.5,11.5,0,0,1,2.993-2.117c.293-.128.6-.243.905-.354a7.382,7.382,0,0,1,.965-.188,4.406,4.406,0,0,1,2.052.191,3.646,3.646,0,0,1,.521.257,2.54,2.54,0,0,1,.471.4c.07.08.139.16.2.243s.106.184.156.278a2.44,2.44,0,0,1,.206.584,3.607,3.607,0,0,1-.3,2.091,10,10,0,0,1-.921,1.6c-.171.248-.346.492-.538.72s-.376.463-.578.679a20.875,20.875,0,0,1-2.584,2.376c-1.829,1.437-3.78,2.626-5.708,3.855a60,60,0,0,1-6.014,3.32,16.48,16.48,0,0,1-3.287,1.1,10.154,10.154,0,0,1-1.736.22,9.545,9.545,0,0,1-1.762-.038,3.319,3.319,0,0,1-1.765-.679,1.767,1.767,0,0,1-.563-.915,2.313,2.313,0,0,1-.007-1.034,5.049,5.049,0,0,1,.762-1.717,9.185,9.185,0,0,1,1.15-1.4,9.62,9.62,0,0,1,1.4-1.164,5.508,5.508,0,0,1,1.747-.822,2.232,2.232,0,0,1,1.207.021,1.537,1.537,0,0,1,.633.394,1.714,1.714,0,0,1,.374.594,2.248,2.248,0,0,1,.088,1.231,4.07,4.07,0,0,1-.351.978,11.426,11.426,0,0,1-2.256,2.852c-.211.206-.43.405-.652.6-.212.179-.427.377-.642.568-.443.383-.9.752-1.375,1.1a22.158,22.158,0,0,1-2.983,1.854,14.894,14.894,0,0,1-3.312,1.261c-.286.083-.591.113-.885.168s-.6.057-.906.079a6.957,6.957,0,0,1-1.819-.217,4.37,4.37,0,0,1-1.661-.834,3.854,3.854,0,0,1-1.085-1.485,2.636,2.636,0,0,1-.123-.33c-.032-.113-.075-.222-.1-.336l-.073-.34-.045-.342c-.016-.114-.015-.229-.024-.343a3.016,3.016,0,0,1,0-.341C36.269,109.326,36.293,109.1,36.313,108.877Z" transform="translate(-36.268 -92.246)" fill="#fffefc" />
                    </g>
                </g>
                <g id="Group_406" data-name="Group 406" transform="translate(-11480.051 18984.723)">
                    <path id="Path_289" data-name="Path 289" d="M214.369,102.346a6.107,6.107,0,0,1,2.911,2.209,6.143,6.143,0,0,1-5,9.7,5.853,5.853,0,0,1-4.717-2.239l.612-.508a5.331,5.331,0,1,0,4.1-8.732v-.791a4.388,4.388,0,1,0,0-8.777,4.156,4.156,0,0,0-3.747,2.09l-.672-.418A5.133,5.133,0,0,1,212.28,92.4a5.189,5.189,0,0,1,2.09,9.941Z" transform="translate(-207.297 -92.216)" fill="#fffefc" />
                    <path id="Path_290" data-name="Path 290" d="M211.842,114.135a6.058,6.058,0,0,1-4.862-2.308l-.12-.145.9-.748.121.145a5.142,5.142,0,1,0,3.959-8.423h-.189v-1.168h.189a4.2,4.2,0,1,0,0-8.4,3.947,3.947,0,0,0-3.586,2l-.1.16-.992-.617.1-.16a5.32,5.32,0,0,1,4.579-2.568,5.379,5.379,0,0,1,2.556,10.114,6.309,6.309,0,0,1,2.6,2.114,6.332,6.332,0,0,1-5.154,10Zm-4.449-2.4a5.675,5.675,0,0,0,4.449,2.026,5.956,5.956,0,0,0,4.847-9.4,5.948,5.948,0,0,0-2.822-2.141l-.441-.162.431-.188a5.041,5.041,0,0,0,3.006-4.574,5.035,5.035,0,0,0-5.021-5.005,4.937,4.937,0,0,0-4.156,2.23l.352.219a4.331,4.331,0,0,1,3.8-2.02,4.577,4.577,0,0,1,.189,9.151v.42a5.525,5.525,0,0,1-.189,11.047,5.286,5.286,0,0,1-4.127-1.865Z" transform="translate(-206.86 -91.905)" fill="#fffefc" />
                </g>
                <g id="Group_407" data-name="Group 407" transform="translate(-11465.035 18984.617)">
                    <path id="Path_291" data-name="Path 291" d="M253.332,101.873a6.175,6.175,0,1,1-6.15,6.18,17.9,17.9,0,0,1,.687-6.433q1.925-6.941,8.165-9.12l.388-.134-.12.9q-5.836,2.045-7.657,8.568a19.451,19.451,0,0,0-.582,3.03,6.135,6.135,0,0,1,2.209-2.164A6,6,0,0,1,253.332,101.873Zm0,11.538a5.372,5.372,0,1,0-5.343-5.388l.015.373a5.365,5.365,0,0,0,5.329,5.015Z" transform="translate(-246.935 -92.087)" fill="#fffefc" />
                    <path id="Path_292" data-name="Path 292" d="M253.021,113.947a6.355,6.355,0,0,1-6.339-6.353,18.132,18.132,0,0,1,.694-6.484c1.295-4.669,4.082-7.78,8.284-9.248l.678-.234-.175,1.314-.109.038c-3.811,1.336-6.346,4.176-7.537,8.441a19.041,19.041,0,0,0-.475,2.23,6.324,6.324,0,0,1,1.825-1.578,6.214,6.214,0,0,1,3.154-.847,6.361,6.361,0,0,1,0,12.722Zm2.862-21.762-.1.034c-4.078,1.424-6.785,4.45-8.044,8.992a17.793,17.793,0,0,0-.681,6.366,5.977,5.977,0,1,0,3-5.178,5.981,5.981,0,0,0-2.143,2.1l-.445.732.1-.851a19.735,19.735,0,0,1,.588-3.059c1.214-4.35,3.793-7.262,7.667-8.656Zm-2.862,20.956a5.553,5.553,0,0,1-5.517-5.192l-.015-.378a5.529,5.529,0,1,1,5.532,5.569Zm0-10.732a5.162,5.162,0,0,0-5.155,5.155l.015.366a5.16,5.16,0,1,0,5.14-5.52Z" transform="translate(-246.624 -91.628)" fill="#fffefc" />
                </g>
                <g id="Group_408" data-name="Group 408" transform="translate(-11448.416 18985.15)">
                    <path id="Path_293" data-name="Path 293" d="M291.293,96.819a2.169,2.169,0,1,1,1.56.662A2.083,2.083,0,0,1,291.293,96.819Zm.9-2.222a.859.859,0,0,0-.284.662.907.907,0,0,0,.284.662.858.858,0,0,0,.662.284.97.97,0,0,0,.945-.946.859.859,0,0,0-.284-.662.907.907,0,0,0-.662-.283A.859.859,0,0,0,292.191,94.6Z" transform="translate(-290.631 -93.038)" fill="#fffefc" />
                </g>
                <g id="Group_409" data-name="Group 409" transform="translate(-11431.185 18984.93)">
                    <path id="Path_294" data-name="Path 294" d="M350.945,92.958,344.452,104v10.389h-.806V104l-6.508-11.046h.925l5.836,9.911h.284l5.836-9.911Z" transform="translate(-336.808 -92.769)" fill="#fffefc" />
                    <path id="Path_295" data-name="Path 295" d="M344.1,114.27h-1.183V103.744l-6.65-11.286h1.364l5.837,9.911h.067l5.836-9.911h1.364L344.1,103.744Zm-.806-.378h.428V103.642l.026-.045,6.325-10.761h-.487l-5.836,9.911h-.5l-5.836-9.911h-.487l6.366,10.805Z" transform="translate(-336.263 -92.458)" fill="#fffefc" />
                </g>
                <g id="Group_410" data-name="Group 410" transform="translate(-11415.791 18984.723)">
                    <path id="Path_296" data-name="Path 296" d="M380.735,111.048a10.884,10.884,0,1,1,7.717,3.209A10.491,10.491,0,0,1,380.735,111.048Zm.567-14.867a10.09,10.09,0,1,0,7.15-2.97A9.715,9.715,0,0,0,381.3,96.181Z" transform="translate(-377.337 -92.216)" fill="#fffefc" />
                    <path id="Path_297" data-name="Path 297" d="M388.141,114.135a10.717,10.717,0,0,1-7.85-3.264h0a11.073,11.073,0,1,1,7.85,3.264Zm0-21.852a10.725,10.725,0,0,0-7.584,18.32h0a10.725,10.725,0,1,0,7.583-18.321Zm0,21.046a10.33,10.33,0,1,1,7.283-3.026A9.938,9.938,0,0,1,388.141,113.329Zm0-20.24A9.574,9.574,0,0,0,381.125,96h0a9.9,9.9,0,1,0,7.016-2.915Z" transform="translate(-377.026 -91.905)" fill="#fffefc" />
                </g>
                <g id="Group_411" data-name="Group 411" transform="translate(-11389.837 18984.723)">
                    <path id="Path_298" data-name="Path 298" d="M449.464,111.048A10.926,10.926,0,0,1,457.18,92.4a10.743,10.743,0,0,1,4.254.866l-.314.731a10.064,10.064,0,0,0-3.94-.791,10.12,10.12,0,0,0,0,20.24,10.026,10.026,0,0,0,3.717-.7v-9.09h-5.374v-.806h6.18v10.434l-.254.1a10.77,10.77,0,0,1-4.269.866A10.487,10.487,0,0,1,449.464,111.048Z" transform="translate(-446.065 -92.216)" fill="#fffefc" />
                    <path id="Path_299" data-name="Path 299" d="M456.869,114.135a11.115,11.115,0,0,1,0-22.23,10.973,10.973,0,0,1,4.328.881l.174.074-.462,1.077-.173-.073a9.921,9.921,0,0,0-3.867-.776,9.931,9.931,0,0,0,0,19.863,9.9,9.9,0,0,0,3.528-.642v-8.772h-5.374v-1.184h6.557V113.1l-.371.153A11,11,0,0,1,456.869,114.135Zm0-21.852a10.724,10.724,0,0,0-7.584,18.32h0a10.352,10.352,0,0,0,7.583,3.153,10.633,10.633,0,0,0,4.195-.85l.139-.057V102.731h-5.8v.429h5.374v9.407l-.12.047a10.262,10.262,0,0,1-3.786.715,10.309,10.309,0,0,1,0-20.618,10.3,10.3,0,0,1,3.84.735l.165-.385A10.6,10.6,0,0,0,456.869,92.283Z" transform="translate(-445.754 -91.905)" fill="#fffefc" />
                </g>
                <g id="Group_412" data-name="Group 412" transform="translate(-11369.574 18984.871)">
                    <path id="Path_300" data-name="Path 300" d="M515.364,92.958v21.434h-.791V108.72h-9.717l-3.583,5.672h-.955l4.015-6.344v-.134h.075l9.463-14.956Zm-10,14.956h9.209V93.361Z" transform="translate(-499.976 -92.71)" fill="#fffefc" />
                    <path id="Path_301" data-name="Path 301" d="M514.988,114.172H513.82V108.5H504.4l-3.583,5.672h-1.4l4.169-6.587v-.268h.159L513.2,92.36h.957l.038-.06v.06h.791Zm-.791-.378h.414V92.737H514.2v14.956h-9.741l9.464-14.956h-.51l-9.453,14.941v.016l-.03.046-3.831,6.054h.508l3.582-5.672H514.2Zm-9.056-6.478h8.678V93.6Z" transform="translate(-499.411 -92.3)" fill="#fffefc" />
                </g>
            </g>
        </svg>

    </div>

</div>


<!-- include __DIR__ . '/parts/html-footer.php';  -->
<?php include __DIR__ . '/parts/script.php'; ?>
<script src="<?= WEB_ROOT ?>lib/content.js"></script>
<!-- js連結 -->

<?php include __DIR__ . '/parts/html-end.php'; ?>