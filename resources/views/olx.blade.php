<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Olx Crawler</title>

        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen items-center py-4 pt-0">
            <div class="max-w-6xl mx-auto px-6 lg:px-8">
                <div class="flex justify-center justify-start items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 40 40">
                        <g fill="none" fill-rule="evenodd">
                            <path fill="#6E0AD6" d="M7.579 26.294c-2.282 0-3.855-1.89-3.855-4.683 0-2.82 1.573-4.709 3.855-4.709 2.28 0 3.855 1.889 3.855 4.682 0 2.82-1.574 4.71-3.855 4.71m0 3.538c4.222 0 7.578-3.512 7.578-8.248 0-4.682-3.173-8.22-7.578-8.22C3.357 13.363 0 16.874 0 21.61c0 4.763 3.173 8.221 7.579 8.221"></path>
                            <path fill="#8CE563" d="M18.278 23.553h7.237c.499 0 .787-.292.787-.798V20.44c0-.505-.288-.798-.787-.798h-4.851V9.798c0-.505-.288-.798-.787-.798h-2.386c-.498 0-.787.293-.787.798v12.159c0 1.038.551 1.596 1.574 1.596"></path>
                            <path fill="#F28000" d="M28.112 29.593l4.353-5.082 4.222 5.082c.367.452.839.452 1.258.08l1.705-1.517c.42-.373.472-.851.079-1.277l-4.694-5.321 4.274-4.869c.367-.426.34-.878-.078-1.277l-1.6-1.463c-.42-.4-.892-.373-1.259.08l-3.907 4.602-3.986-4.603c-.367-.425-.84-.479-1.259-.08l-1.652 1.49c-.42.4-.446.825-.053 1.278l4.354 4.868-4.747 5.348c-.393.452-.34.905.079 1.277l1.652 1.464c.42.372.891.345 1.259-.08"></path>
                        </g>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="100" height="50" viewBox="0 0 1280 640" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                            <path fill="#6E0AD6" d="M3565 5336 c-106 -30 -101 -26 -108 -111 -4 -42 -9 -80 -12 -85 -6 -10 -246 -105 -590 -234 -448 -167 -1052 -415 -1173 -483 -78 -43 -193 -91 -250 -104 -23 -5 -98 -14 -165 -19 -67 -6 -167 -19 -222 -30 -154 -31 -340 -49 -563 -57 l-203 -6 -43 -66 c-59 -91 -60 -95 -26 -130 37 -37 38 -65 3 -150 -25 -62 -27 -78 -31 -256 l-4 -190 -38 -32 c-91 -78 -133 -209 -134 -418 0 -194 11 -396 26 -482 13 -71 14 -74 72 -122 69 -58 130 -129 158 -184 64 -126 534 -211 1384 -250 l92 -4 -6 119 c-6 142 8 256 49 383 112 352 394 622 756 722 90 26 112 28 278 28 165 0 188 -2 278 -27 201 -56 361 -152 504 -302 140 -145 222 -293 274 -492 21 -79 24 -109 23 -279 -1 -127 -6 -214 -16 -263 l-15 -73 3006 7 c1653 4 3007 8 3009 9 1 1 -8 37 -20 81 -19 67 -22 105 -22 259 -1 166 1 187 27 279 117 421 467 736 885 797 119 17 325 7 432 -21 239 -63 453 -205 601 -399 70 -92 154 -267 185 -386 24 -88 27 -119 27 -260 1 -116 -4 -181 -16 -234 -10 -41 -16 -75 -15 -76 2 -1 62 2 133 6 266 16 458 45 525 79 48 24 97 81 127 146 l24 52 -16 157 c-15 152 -15 163 4 284 63 388 50 680 -35 802 -134 193 -526 336 -1429 519 -737 149 -1322 209 -2033 210 -228 0 -226 0 -347 85 -187 131 -1045 607 -1471 815 -383 187 -788 281 -1439 332 -208 17 -1106 16 -1400 0 -121 -7 -314 -19 -430 -27 -302 -22 -286 -22 -341 10 -140 81 -187 94 -269 71z m1885 -333 c6 -37 38 -238 71 -446 32 -209 66 -422 75 -474 9 -52 15 -96 13 -97 -11 -9 -1699 29 -1951 44 -206 13 -417 36 -485 54 -98 26 -198 119 -249 231 -35 75 -36 172 -5 255 17 45 30 61 68 86 83 54 135 80 253 127 341 136 858 230 1460 267 269 16 270 16 511 18 l227 2 12 -67z m630 47 c264 -18 777 -110 1029 -186 186 -56 445 -188 756 -387 211 -134 274 -181 250 -185 -75 -12 -133 -50 -162 -106 -19 -35 -21 -136 -4 -179 l11 -27 -907 2 -906 3 -59 160 c-110 302 -298 878 -298 916 0 6 95 2 290 -11z"/>
                            <path fill="#F28000" d="M2633 3125 c-223 -40 -410 -141 -568 -306 -132 -138 -213 -283 -262 -467 -22 -83 -26 -119 -26 -247 -1 -169 10 -236 65 -382 87 -230 271 -436 493 -551 85 -44 178 -78 271 -98 107 -23 312 -23 419 1 392 84 699 375 802 761 23 86 26 120 27 254 1 158 -5 199 -46 330 -98 310 -355 567 -668 669 -150 50 -354 64 -507 36z m350 -301 c249 -56 457 -247 543 -499 25 -72 28 -95 28 -220 1 -153 -15 -228 -74 -345 -94 -186 -283 -337 -485 -386 -96 -24 -268 -24 -360 0 -320 84 -544 355 -562 681 -20 359 209 673 558 765 94 24 253 26 352 4z"/>
                            <path fill="#F28000" d="M10700 3119 c-390 -84 -696 -376 -797 -759 -31 -117 -41 -292 -24 -411 33 -227 150 -453 318 -609 267 -250 643 -344 993 -249 117 32 283 118 380 196 487 396 518 1128 67 1560 -97 93 -166 140 -290 198 -137 64 -235 86 -407 91 -120 3 -162 0 -240 -17z m445 -313 c238 -81 409 -258 486 -506 30 -96 33 -289 5 -388 -110 -400 -513 -637 -911 -536 -149 38 -313 147 -402 267 -176 238 -203 533 -71 797 34 69 60 103 138 180 77 78 111 104 181 139 129 65 207 81 364 77 109 -3 143 -7 210 -30z"/>
                        </g>
                    </svg>
                </div>

                <div class="flex justify-center items-center justify-between">
                    <div class="text-center text-sm text-gray-500 text-left">
                        <div class="flex items-center">
                            <form id="form">
                                <input type="text" placeholder="Estou proucurando por...">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="results"></div>
        <script src="/js/api.js"></script>
    </body>
</html>