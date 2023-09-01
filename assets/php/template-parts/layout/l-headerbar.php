<?php
//----------------------------------------
//  ヘッダーバー
//----------------------------------------
?>
<?php
  $homeurl = esc_url(home_url());
  //  トップページの場合はスムーススクロールさせる為URLを入れない
  if( is_home() || is_front_page() ) :
    $homeurl = "";
  endif;
?>

<header class="l-header">

<div class="l-header__bar">
  <picture>
    <source srcset="<?php echo GET_PATH()?>/header/logo.png">
    <img src="<?php echo GET_PATH()?>/header/logo.png" alt="Best Planner" width="132" height="42">
  </picture>
</div>

<div class="l-header-buttons">
  <div class="p-hamburger__wrapper">
    <div class="p-hamburger" id="js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <button class="p-button__iconbox begginer">
    <div class="icon">
      <picture>
        <source srcset="<?php echo GET_PATH()?>/common/icon-begginer.png">
        <img src="<?php echo GET_PATH()?>/common/icon-begginer.png" alt="" width="40" height="40">
      </picture>
    </div>
    <p>始めて<br>ご利用の方へ</p>
  </button>
  <button class="p-button__iconbox login">
    <div class="icon">
      <picture>
        <source srcset="<?php echo GET_PATH()?>/common/icon-login.png">
        <img src="<?php echo GET_PATH()?>/common/icon-begginer.png" alt="" width="40" height="40">
      </picture>
    </div>
    <p>ログイン</p>
  </button>
  <button class="p-button__iconbox heart">
    <div class="icon">
      <picture>
        <source srcset="<?php echo GET_PATH()?>/common/icon-heart.png">
        <img src="<?php echo GET_PATH()?>/common/icon-begginer.png" alt="" width="40" height="40">
      </picture>
    </div>
    <p>お気に入り<br>レポート</p>
  </button>

</div>
</header>

<?php
//----------------------------------------
//  SPメニュー
//----------------------------------------
?>

<div class="p-spmenu">
  <div class="p-spmenu__inner">
    <div class="p-spmenu__closebutton"></div>
    <div class="p-spmenu__header">
      <picture>
        <source srcset="<?php echo GET_PATH()?>/footer/footerlogo_pc.png">
        <img src="<?php echo GET_PATH()?>/footer/footerlogo_pc.png" alt="Best Planner" width="229" height="119">
      </picture>
    </div>
    <div class="p-spmenu__list__wrapper">
      <ul>
        <li><a href="<?php echo $homeurl; ?>#planner">プランナーを探す</a></li>
        <li><a href="<?php echo $homeurl; ?>#report">シンデレラレポ</a></li>
        <li><a href="<?php echo $homeurl; ?>#favreport">お気に入りレポート</a></li>
        <li class="button__wrapper u-hidden__sp">
            <a href="<?php echo $homeurl; ?>#login" class="p-button gray arrow hover__reverse">
              ログイン
            </a>
        </li>
      </ul>
      <div class="border u-hidden__sp"></div>
      <ul class="list--right">
        <li><a href="<?php echo $homeurl; ?>#begginer">初めてご利用される方へ</a></li>
        <li><a href="<?php echo $homeurl; ?>#question">よくあるご質問</a></li>
        <li><a href="<?php echo $homeurl; ?>#profile">お問い合わせ</a></li>
        <li class="button__wrapper u-hidden__tab-pc">
            <a href="<?php echo $homeurl; ?>#login" class="p-button gray arrow hover__reverse">
              ログイン
            </a>
        </li>
      </ul>
    </div>

    <div class="p-spmenu__footer">
      <div class="arrow-wrapper u-hidden__sp">
        <div class="arrow-up"></div>
      </div>
      <ul>
        <li><a href="<?php echo $homeurl; ?>">運営会社</a></li>
        <li><a href="<?php echo $homeurl; ?>">プライバシーポリシー</a></li>
        <li><a href="<?php echo $homeurl; ?>">利用規約</a></li>
      </ul>
    </div>
  </div>
</div>

<?php
//----------------------------------------
//  モーダル : おすすめのプランからプランナーを探す
//----------------------------------------
?>
<div class="p-modal p-modal__plan">
  <div class="p-modal__background"></div>
    <div class="p-modal__inner plan">
      <!--
        <picture>
          <source srcset="<?php echo GET_PATH()?>/footer/footerlogo_pc.png">
          <img src="<?php echo GET_PATH()?>/footer/footerlogo_pc.png" alt="Best Planner" width="229" height="119">
        </picture>
  -->
    <div class="p-modal__list__wrapper">
      <ul>
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__image">
              <picture>
                <source srcset="<?php echo GET_PATH()?>/hero/modal_plan_01.png">
                <img src="<?php echo GET_PATH()?>/hero/modal_plan_01.png" alt="plan01" width="64" height="64">
              </picture>
            </div>
            <div class="btn__text">
              国内挙式・披露宴
            </div>
          </a>
        </li>
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__image">
              <picture>
                <source srcset="<?php echo GET_PATH()?>/hero/modal_plan_02.png">
                <img src="<?php echo GET_PATH()?>/hero/modal_plan_02.png" alt="plan02" width="64" height="64">
              </picture>
            </div>
            <div class="btn__text">
              海外ウェディング
            </div>
          </a>
        </li>
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__image">
              <picture>
                <source srcset="<?php echo GET_PATH()?>/hero/modal_plan_03.png">
                <img src="<?php echo GET_PATH()?>/hero/modal_plan_03.png" alt="plan03" width="64" height="64">
              </picture>
            </div>
            <div class="btn__text">
              フォトウェディング
            </div>
          </a>
        </li>
      </ul>
      <ul class="second">
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__image">
              <picture>
                <source srcset="<?php echo GET_PATH()?>/hero/modal_plan_04.png">
                <img src="<?php echo GET_PATH()?>/hero/modal_plan_04.png" alt="plan04" width="64" height="64">
              </picture>
            </div>
            <div class="btn__text">
              家族・少人数<br>ウェディング
            </div>
          </a>
        </li>
        <li>
          <a href="<?php echo $homeurl; ?>">
          <div class="btn__image">
            <picture>
              <source srcset="<?php echo GET_PATH()?>/hero/modal_plan_05.png">
              <img src="<?php echo GET_PATH()?>/hero/modal_plan_05.png" alt="plan05" width="64" height="64">
            </picture>
          </div>
          <div class="btn__text">
            リゾート・ビーチ<br>アウトドア<br>ウェディング
          </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>


<?php
//----------------------------------------
//  モーダル : 希望のエリアからプランナーを探す
//----------------------------------------
?>
<div class="p-modal p-modal__area">
  <div class="p-modal__background"></div>
    <div class="p-modal__inner area">
    <div class="p-modal__list__wrapper">
      <ul>
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__text">北海道・東北 (15)</div>
          </a>
        </li>
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__text">関東・甲信越 (35)</div>
          </a>
        </li>
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__text">北陸・東海 (25)</div>
          </a>
        </li>
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__text">関西・中国 (18)</div>
          </a>
        </li>
      </ul>
      <ul class="second">
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__text">四国・九州 (16)</div>
          </a>
        </li>
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__text">沖縄 (19)</div>
          </a>
        </li>
        <li>
          <a href="<?php echo $homeurl; ?>">
            <div class="btn__text">海外 (10)</div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
