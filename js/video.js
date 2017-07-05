'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

console.clear();

var VideoController = function () {
    function VideoController() {
        _classCallCheck(this, VideoController);

        this.cacheSelectors();
        this.bindEvents();
    }

    VideoController.prototype.cacheSelectors = function cacheSelectors() {
        this.selectors = {};
        this.selectors.bodyElement = document.querySelector('body');
        this.selectors.videoWrapElement = document.querySelector('.js-video-wrap');
        this.selectors.videoElement = this.selectors.videoWrapElement.querySelector('.js-video');
        this.selectors.playButtonElement = document.querySelector('.js-play-video');
        this.selectors.closeButtonElement = document.querySelector('.js-close-video');
    };

    VideoController.prototype.bindEvents = function bindEvents() {
        this.selectors.playButtonElement.addEventListener('click', this.onPlayClick.bind(this));
        this.selectors.closeButtonElement.addEventListener('click', this.onCloseClick.bind(this));
        this.selectors.videoElement.addEventListener('ended', this.onVideoEnded.bind(this));

        if (this.selectors.videoElement.readyState === 4) {
            this.onVideoCanPlayThrough();
        } else {
            this.selectors.videoElement.addEventListener('canplaythrough', this.onVideoCanPlayThrough.bind(this));
        }
    };

    VideoController.prototype.onPlayClick = function onPlayClick(event) {
        event.preventDefault();
        this.showVideo();
    };

    VideoController.prototype.onCloseClick = function onCloseClick(event) {
        event.preventDefault();
        this.hideVideo();
    };

    VideoController.prototype.onVideoCanPlayThrough = function onVideoCanPlayThrough() {
        this.selectors.bodyElement.classList.add('video-loaded');
    };

    VideoController.prototype.onVideoEnded = function onVideoEnded() {
        this.hideVideo();
    };

    VideoController.prototype.showVideo = function showVideo() {
        var _this = this;

        this.selectors.videoElement.currentTime = 0;
        this.selectors.videoWrapElement.classList.remove('video-wrap--hide');
        this.selectors.videoWrapElement.classList.add('video-wrap--show');
        setTimeout(function () {
            return _this.selectors.videoElement.play();
        }, 600);
    };

    VideoController.prototype.hideVideo = function hideVideo() {
        this.selectors.videoWrapElement.classList.remove('video-wrap--show');
        this.selectors.videoWrapElement.classList.add('video-wrap--hide');
        this.selectors.videoElement.pause();
    };

    return VideoController;
}();

new VideoController();