<div class="logo">
	<a href="#">
		<img src="images/icon/logo.png" alt="Cool Admin" />
	</a>
</div>
<div class="menu-sidebar__content js-scrollbar1">
	<nav class="navbar-sidebar">
		<ul class="list-unstyled navbar__list">
			<li>
				<a href="index.html">
					<i class="fas fa-tachometer-alt"></i>Dashboard</a>
			</li>
			<li class="has-sub">
				<a class="js-arrow" href="#">
					<i class="fas fa-tachometer-alt"></i>Sinh viên</a>
				<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
					<li>
						<a href="<?php echo admin_url('students/add'); ?>">Thêm sinh viên</a>
					</li>
					<li>
						<a href="<?php echo admin_url('students'); ?>">Danh sách sinh viên</a>
					</li>
					<li>
                    	<a href="<?php echo admin_url('news'); ?>">Danh sách chờ duyệt</a>
       				</li>
				</ul>
			</li>
			<li class="has-sub">
				<a class="js-arrow" href="#">
					<i class="fas fa-tachometer-alt"></i>Cán bộ / Cộng tác viên</a>
				<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
					<li>
						<a href="#">Thêm Cán bộ</a>
					</li>
					<li>
						<a href="#">Danh sách cán bộ</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</div>
