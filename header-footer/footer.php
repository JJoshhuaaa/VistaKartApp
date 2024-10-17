<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>VISTA Kart App</title>
</head>
<body>
    <footer class="footer">
        <div class="footer_content">
            <div class="footer_content_column">
                <div class="footer_content_column_text">
                    <h3><?php echo $languagePack['footer']['footer_1'];?></h3>
                    <ul>
                        <li><a href="inschrijf.php"><?php echo $languagePack['footer']['footer_2'];?></a></li>
                        <li><a href="contact.php"><?php echo $languagePack['footer']['footer_3'];?></a></li>
                    </ul>
                </div>
            </div>
    
            <div class="footer_content_column">
                <div class="footer_content_column_text">
                    <h3><?php echo $languagePack['footer']['footer_4'];?></h3>
                    <ul>
                        <li><a href="info.php"><?php echo $languagePack['footer']['footer_5'];?></a></li>
                        <li><a href="prijzen.php"><?php echo $languagePack['footer']['footer_6'];?></a></li>
                        <li><a href="teams.php"><?php echo $languagePack['footer']['footer_7'];?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="footer_content footer_content_column_icons">
            <a href="https://www.facebook.com/yourpage" target="_blank" rel="noopener noreferrer">
                <svg class="icon" width="55px" height="55px" viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                    <title>icon-x</title>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="icon-x" transform="translate(1, 1)">
                            <path d="M7.51432881,0 C3.3642796,0 0,3.3642796 0,7.51432881 L0,45.4856712 C0,49.6357204 3.3642796,53 7.51432881,53 L45.4856712,53 C49.6357204,53 53,49.6357204 53,45.4856712 L53,7.51432881 C53,3.3642796 49.6357204,0 45.4856712,0 L7.51432881,0 Z" id="Path" stroke="currentColor" stroke-width="1.25" fill="none"/>
                            <path d="M28.9735317,24.4654783 L38.6526166,13.214325 L36.3589833,13.214325 L27.9546349,22.9835433 L21.2421067,13.214325 L13.5,13.214325 L23.6506599,27.9871133 L13.5,39.785675 L15.7937633,39.785675 L24.6689717,29.4690483 L31.7578934,39.785675 L39.5,39.785675 L28.9729684,24.4654783 L28.9735317,24.4654783 Z M25.8319083,28.117265 L24.803435,26.6462283 L16.6202383,14.941037 L20.143325,14.941037 L26.74726,24.3875 L27.7757333,25.8585367 L36.3600666,38.1374917 L32.83698,38.1374917 L25.8319083,28.1178283 L25.8319083,28.117265 Z" id="Shape" fill="currentColor" fill-rule="nonzero"/>
                        </g>
                    </g>
                </svg>

            </a>
            <a href="https://www.linkedin.com/yourprofile" target="_blank" rel="noopener noreferrer">
                <svg class="icon" width="55px" height="55px" viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                    <title>icon-youtube</title>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Artboard" transform="translate(-196, 0)">
                            <g id="icon-youtube" transform="translate(197, 1)">
                                <path d="M7.51432881,0 C3.3642796,0 0,3.3642796 0,7.51432881 L0,45.4856712 C0,49.6357204 3.3642796,53 7.51432881,53 L45.4856712,53 C49.6357204,53 53,49.6357204 53,45.4856712 L53,7.51432881 C53,3.3642796 49.6357204,0 45.4856712,0 L7.51432881,0 Z" id="Rectangle-Copy-3" stroke="currentColor" stroke-width="1.25" fill="none"/>
                                <path d="M26.52,14.52 C22.828575,14.52 19.9721588,14.642075 17.9506638,14.8862125 C15.92917,15.13035 14.4399263,15.6528125 13.48289,16.4535875 C12.5258546,17.254375 11.959454,18.416475 11.7836719,19.939925 C11.6078898,21.4633625 11.52,23.5043625 11.52,26.0629688 C11.52,28.621575 11.6078898,30.66257 11.7836719,32.186015 C11.959454,33.7094613 12.5258546,34.8764413 13.48289,35.6869925 C14.4399263,36.4975431 15.92917,37.02 17.9506638,37.254375 C19.9721588,37.4887512 22.828575,37.6059375 26.52,37.6059375 C30.211425,37.6059375 33.0678375,37.4887512 35.0893375,37.254375 C37.110825,37.02 38.600075,36.4975431 39.5571125,35.6869925 C40.51415,34.8764413 41.08055,33.7094613 41.256325,32.186015 C41.4321125,30.66257 41.52,28.621575 41.52,26.0629688 C41.52,23.5043625 41.4321125,21.4633625 41.256325,19.939925 C41.08055,18.416475 40.51415,17.254375 39.5571125,16.4535875 C38.600075,15.6528125 37.110825,15.13035 35.0893375,14.8862125 C33.0678375,14.642075 30.211425,14.52 26.52,14.52 Z M31.3246875,26.561015 L24.5864,29.7250775 C24.2934375,29.8617975 24.0444125,29.8617975 23.8393363,29.7250775 C23.6342563,29.5883588 23.5317188,29.3539863 23.5317188,29.0219525 L23.5317188,23.1039875 C23.5317188,22.7914875 23.6342563,22.566875 23.8393363,22.4301625 C24.0444125,22.2934375 24.2934375,22.2934375 24.5864,22.4301625 L31.3246875,25.5649225 C31.6176625,25.7016413 31.7641375,25.867655 31.7641375,26.0629688 C31.7641375,26.2582825 31.6176625,26.4242963 31.3246875,26.561015 Z" id="Fill-1" fill="currentColor" fill-rule="nonzero"/>
                            </g>
                        </g>
                    </g>
                </svg>
                
            </a>
            <a href="https://www.youtube.com/yourprofile" target="_blank" rel="noopener noreferrer">
                <svg class="icon" width="55px" height="55px" viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                    <title>icon-linkedin</title>
                    <g fill="none" fill-rule="evenodd">
                        <g transform="translate(-259, 0)">
                            <g transform="translate(260, 1)">
                                <path d="M7.5143,0 C3.3643,0 0,3.3643 0,7.5143 L0,45.4857 C0,49.6357 3.3643,53 7.5143,53 L45.4857,53 C49.6357,53 53,49.6357 53,45.4857 L53,7.5143 C53,3.3643 49.6357,0 45.4857,0 L7.5143,0 Z" stroke="currentColor" stroke-width="1.25"/>
                                <path d="M38.1903,35.9738 L33.1384,35.9738 L33.1384,27.4654 C33.1384,26.7957 32.8331,26.2246 32.2226,25.7519 C31.6120,25.2792 30.9719,25.0428 30.3023,25.0428 C29.6326,25.0428 29.1008,25.2792 28.7069,25.7519 C28.3130,26.2246 28.1161,26.7957 28.1161,27.4654 L28.1161,35.9738 L23.0642,35.9738 L23.0642,20.8477 L28.1161,20.8477 L28.1161,23.3884 C28.5297,22.6991 29.1895,22.1575 30.0955,21.7636 C31.0014,21.3697 31.8090,21.1727 32.5180,21.1727 C34.0936,21.1727 35.4329,21.7291 36.5358,22.8419 C37.6388,23.9547 38.1903,25.2890 38.1903,26.8450 L38.1903,35.9738 Z M20.5530,35.9738 L15.5012,35.9738 L15.5012,20.8477 L20.5530,20.8477 L20.5530,35.9738 Z M18.0123,13.2847 C18.7214,13.2847 19.3221,13.5309 19.8145,14.0233 C20.3069,14.5157 20.5530,15.1164 20.5530,15.8254 C20.5530,16.5148 20.3069,17.1056 19.8145,17.5980 C19.3221,18.0904 18.7214,18.3366 18.0123,18.3366 C17.3230,18.3366 16.7321,18.0904 16.2398,17.5980 C15.7474,17.1056 15.5012,16.5148 15.5012,15.8254 C15.5012,15.1164 15.7474,14.5157 16.2398,14.0233 C16.7321,13.5309 17.3230,13.2847 18.0123,13.2847 Z" fill="currentColor" fill-rule="nonzero"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
            <a href="https://www.twitter.com/yourprofile" target="_blank" rel="noopener noreferrer">
                <svg class="icon" width="55px" height="55px" viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                    <title>icon-facebook</title>
                    <g fill="none" fill-rule="evenodd">
                        <g transform="translate(-67, 0)">
                            <g transform="translate(67.96, 1)">
                                <path d="M7.5143,0 C3.3643,0 0,3.3643 0,7.5143 L0,45.4857 C0,49.6357 3.3643,53 7.5143,53 L45.4857,53 C49.6357,53 53,49.6357 53,45.4857 L53,7.5143 C53,3.3643 49.6357,0 45.4857,0 L7.5143,0 Z" stroke="currentColor" stroke-width="1.25"/>
                                <path d="M28.1671,21.7553 L32.4024,21.7553 L31.8729,25.9906 L28.1671,25.9906 L28.1671,38.6965 L22.6744,38.6965 L22.6744,25.9906 L19.6965,25.9906 L19.6965,21.7553 L22.6744,21.7553 L22.6744,18.9097 C22.6744,17.0568 23.1376,15.6560 24.0641,14.7075 C24.9906,13.7590 26.5347,13.2847 28.6965,13.2847 L32.4024,13.2847 L32.4024,17.52 L30.1524,17.52 C29.3141,17.52 28.7737,17.6524 28.5310,17.9171 C28.2884,18.1818 28.1671,18.6229 28.1671,19.2406 L28.1671,21.7553 Z" fill="currentColor" fill-rule="nonzero"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    
        <div class="footer_bottom">
            <p class="timestamp">© 2024<br><?php echo $languagePack['footer']['footer_8'];?></p>
        </div>
    </footer>
    
    
</body>
</html>