<?php
/*------------------------------------------
フッター
------------------------------------------*/
?>
	<footer id="footer" class="l-footer u-color-bg__main">
		<div class="l-footer__content">
			<div class="l-footer__content__inner">
				<div class="items">
					<div class="logo">
						<picture>
							<source srcset="<?php echo GET_PATH()?>/footer/footerlogo_pc.png">
							<img src="<?php echo GET_PATH()?>/footer/footerlogo_pc.png" alt="Best Planner" width="229" height="119">
						</picture>
					</div>
					<div class="sns">
						<div class="followme">Follow Me</div>
						<ul class="icons">
							<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-line fa-inverse"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="contentmenus">
					<ul>
						<li><a href="#">プランナーを探す</a></li>
						<li><a href="#">シンデレラレポ</a></li>
						<li><a href="#">お気に入りレポート</a></li>
						<li><a href="#">ログイン</a></li>
					</ul>
					<ul>
						<li><a href="#">初めてご利用される方へ</a></li>
						<li><a href="#">よくあるご質問</a></li>
						<li><a href="#">お問い合わせ</a></li>
					</ul>
				</div>
			</div>
			<div class="company__menus">
				<div class="border"></div>
				<div class="company__links">
					<ul>
						<li><a href="#">運営会社</a></li>
						<li><a href="#">プライバシーポリシー</a></li>
						<li><a href="#">利用規約</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="l-footer__copyright">
			<span class="eng">&copy;Best Planner All rights reserced.</span>
			<span class="lead">本サイト内は株式会社ウィザード様のご協力のもと作成したコーディング用の練習課題<br class="u-display__sp">です。実在の人物・団体とは関係ありません。</span>
		</div>
	</footer><!-- /footer -->


    <?php wp_footer(); ?>
