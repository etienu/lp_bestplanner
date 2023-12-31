import './slide'; //  jQueryのtoggle再現
import './smoothscroll'; //  スムーススクロール
import buttonGotoTop from './content/btn_gototop'; //  トップに戻るボタン
import buttonHumburger from './content/btn_humburger'; //  ハンバーガー
import buttonModal from './content/btn_modal'; //  モーダル
import partsHeader from './content/header'; //  ヘッダー
//import displayLoader from './content/disp_loader'; //  ローディング画面
import contactForm from './content/contactform'; //  コンタクトフォーム
import pageBackGround from './content/pagebackground'; //  背景処理
import osCheck from './content/oscheck'; //  OSの判別
import adjustViewport from './adjustviewport'; //  ビューポート調整
import myExternalLinks from './myexternallinks'; //  外部リンク
import eeParallax from './eeparallax/eeparallax'; //  パララックス
import buttonCookie from './content/btn_cookie'; //  クッキークラス

//
//gsap
//import '../lib/gsap/gsap.min.js'; //  本体
//import '../lib/gsap/scrolltrigger.min.js'; //  スクロールトリガー
//swiper
//import '../lib/swiper/swiper-bundle.min.js'; //  本体

//
//  練習兼、見出し背景、
import './gsap/eegsap';
//  wowの真似事、up,upgroupなどふわっと出る演出
//  ヒーローのアニメーション
import './gsap/eegsap_surface';
//  ヒーローページのSCROLL
import './gsap/eegsap_scrollbutton';
//  パララックス
import './gsap/eegsap_parallax';
//  swiper設定
//  ページにswiperがなくてもエラーはないが、swiperがあって中身がないとエラー出る
//import './swiper-setting';
//  swiperより演出数は少ないがとても軽い
import './splide-setting';


// ブレイクポイント
const bp = {
    sm: 640,
    md: 768,
    lg: 1024,
    xl: 1280
};

//const btnGotoTop = new buttonGotoTop('.js-gotoTop', 80);
const btnHumburger = new buttonHumburger('.p-hamburger', ".p-spmenu__closebutton", ".l-header", ".p-spmenu");
const btnModalPlan = new buttonModal('.p-hero__buttonwrapper .plan', ".p-modal__plan", ".p-modal__plan .p-modal__background");
const btnModalArea = new buttonModal('.p-hero__buttonwrapper .area', ".p-modal__area", ".p-modal__area .p-modal__background");
//const pHeader = new partsHeader(".l-header");
//const dispLoader = new displayLoader();
const contactform = new contactForm();
const pbg = new pageBackGround();
const oscheck = new osCheck();
const adjustviewport = new adjustViewport();
//const myexternallinks = new myExternalLinks();
const eeparallax = new eeParallax();
const btncookie = new buttonCookie();


//----------------------------------------------------
//  ロード時初期化
//----------------------------------------------------
const init = function() {
    //console.log("[テンプレート確認]" + wp_template);

    //  トップに戻るの設定
    //btnGotoTop.eventRegistration();
    //  ヘッダーハンバーガーの設定
    btnHumburger.eventRegistration('.p-spmenu__inner', 'ul li a', '.l-header__buttonswrapper a');
    btnModalPlan.eventRegistration('.p-modal__plan .p-modal__inner', 'ul li a');
    btnModalArea.eventRegistration('.p-modal__area .p-modal__inner', 'ul li a');
    //  クッキー
    btncookie.eventRegistration();

    //  トップページのみローディング画面設定
    //dispLoader.init();
    if (wp_template == "front-page.php" ||
        wp_template == "home.php") {
        //dispLoader.eventRegistration();
    }
    //  コンタクトフォームのページのみ設定
    if (wp_template == "page-contact.php") {
        contactform.eventRegistration();
    }
    //  トップページ背景
    pbg.taskLoad();

    //  OSの判別
    //  oscheck.dispUserAgent('.disp__userAgent'); //  指定クラスに出力
    oscheck.markBody(); //  bodyにクラス付け(iOS Machintosh 等)

    //  ビューポートの調整
    adjustviewport.set();

    //  外部リンクの処理
    //myexternallinks.fixingExternalLinks();
    //  パララックス
    eeparallax.eventRegistration();
    eeparallax.task();
};

//----------------------------------------------------
//  イベント : ロード
//----------------------------------------------------
window.addEventListener('DOMContentLoaded', () => {
    init();
});

//----------------------------------------------------
//  イベント : スクロール
//----------------------------------------------------
window.addEventListener('scroll', () => {
    //    btnGotoTop.task(); //  トップに戻るのスクロール時処理
    //pHeader.scrollTask(); //  ヘッダーのスクロール時処理
    pbg.taskScroll(); //  トップページ背景スクロール処理
    eeparallax.task();
});

//----------------------------------------------------
//  イベント : リサイズ
//----------------------------------------------------
window.addEventListener("resize", () => {
    //    console.log("resize");
    eeparallax.task();
});