<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" />
</head>
<body>
    
<div class="uk-child-width-1-2 uk-child-width-1-3@s uk-grid-match uk-grid-small" uk-grid>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="img/126.jpg" alt="">
            <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                <p class="uk-h4 uk-margin-remove">Fade</p>
            </div>
        </div>
        <p class="uk-margin-small-top">Fade</p>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="img/127.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                <p class="uk-h4 uk-margin-remove">Bottom
                   <button>click</button>
                   <button>click</button>
                </p>
            </div>
        </div>
        <p class="uk-margin-small-top">
        Bottom</p>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
            <img src="img/125.jpg" alt="">
            <div class="uk-position-center">
                <span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>
            </div>
        </div>
        <p class="uk-margin-small-top">Icon</p>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="img/124.jpg" alt="">
            <img class="uk-transition-scale-up uk-position-cover" src="img/user-icon.png" alt="">
        </div>
        <p class="uk-margin-small-top">2 Images</p>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img class="uk-transition-scale-up uk-transition-opaque" src="img/124.jpg" alt="">
        </div>
        <p class="uk-margin-small-top">Scale Up Image</p>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
            <img src="img/123.jpg" alt="">
            <div class="uk-position-center">
                <div class="uk-transition-slide-top-small"><h4 class="uk-margin-remove">Headline</h4></div>
                <div class="uk-transition-slide-bottom-small"><h4 class="uk-margin-remove">Subheadline</h4></div>
            </div>
        </div>
        <p class="uk-margin-small-top">Small Top + Bottom</p>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit-icons.min.js"></script>
</body>
</html>