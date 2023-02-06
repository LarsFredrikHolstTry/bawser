<div class="df fdc">
	<div class="mobile_header">
		<div class="mobile_top_header">
			<div class="mobile_logo">
				<img style="max-height: 35px;" src="images/small_logo.png" />
			</div>
			<div class="mobile_top_menu_items df fg-20">
				<div class="mobil_top_item">
					<a class="secondary-link" href="?page=notifications">
						<iconify-icon class="medium_icon" icon="mdi:bell"></iconify-icon>
					</a>
				</div>
				<div class="mobil_top_item">
					<a class="secondary-link" href="?page=messages">
						<iconify-icon class="medium_icon" icon="vaadin:envelope"></iconify-icon>
					</a>
				</div>
				<div class="mobil_top_item">
					<a class="secondary-link" href="?page=profile&user=?">
						<div class="circle_mobile_profile_picture" style="background: url('https://mafioso.no/img/avatar/avatar1663353793-WyjbVa8.png');" ></div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile_info_header">
		<div class="df jcsb">
			<div class="secondary-link df aic fdc fg-5">
				<iconify-icon class="semi_medium_icon" style="color: <?= $user_rank_colors[$account['ACC_status']] ?>" icon="mdi:user"></iconify-icon>
				<div>Gudfar • 71%</div>
				<div class="progress-bar-rank">
					<span class="progress-bar-rank-fill" style="width: 70%;"></span>
				</div>
			</div>
			<div class="secondary-link df aic fdc fg-5">
				<iconify-icon class="semi_medium_icon text-green" icon="mdi:cards-heart"></iconify-icon>
				<div>Helse • 100%</div>
				<div class="progress-bar-health">
					<span class="progress-bar-health-fill" style="width: 100%;"></span>
				</div>
			</div>
			<div class="secondary-link df aic fdc fg-5">
				<iconify-icon class="semi_medium_icon" icon="ri:shield-check-fill"></iconify-icon>
				<div>Ekstra beskyttelse</div>
				<div class="text-secondary">Gå i safehouse</div>
			</div>
			<div class="secondary-link df aic fdc fg-5">
				<iconify-icon class="semi_medium_icon text-blue" icon="material-symbols:family-history"></iconify-icon>
				<div>CobrazArme</div>
				<div class="text-secondary">Gjengboss</div>
			</div>
			<div class="secondary-link df aic fdc fg-5">
				<iconify-icon class="semi_medium_icon text-red" icon="ic:baseline-place"></iconify-icon>
				<div>Norge</div>
				<div class="text-secondary">10% skatt</div>
			</div>
		</div>
	</div>
	<div class="mobile_navigation_header">
		<div class="mobile-nav-left-btn shadow">
			<i class="fi fi-rr-menu-burger"></i>
			</div>
		<div class="mobile-nav-item df fg-5 shadow">
			<iconify-icon class="semi_medium_icon user-icon text-yellow" icon="mdi:dollar"></iconify-icon>
			133,2 m kr
		</div>
		<div class="mobile-nav-item df fg-5 shadow">
			<iconify-icon class="semi_medium_icon user-icon text-orange" icon="fluent-mdl2:flame-solid"></iconify-icon>
			14,2k kuler
		</div>
		<div class="mobile-nav-item df fg-5 shadow">
			<iconify-icon class="semi_medium_icon user-icon text-light-blue" icon="ion:diamond"></iconify-icon>
			260 poeng
		</div>
		<div class="mobile-nav-right-btn shadow">
			<i class="fi fi-rr-menu-burger"></i>
		</div>
	</div>
</div>