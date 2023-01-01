<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
			<iconify-icon class="iconify-for-header" icon="fluent:news-16-regular"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			Nyheter
		</div>
	</div>

	<div class="df fdc fg-10 main_content_context">
		<?php

			$newsSql = $db->run("SELECT * FROM news ORDER BY NEWS_published ASC")->fetchAll();
			if(!$newsSql){

			?>
				<div>
					<div class="content_header df jcsb">
						<span>Ingen nyheter</span>
					</div>
					<div class="content_context">
						Det er ingen nyheter å vise.
					</div>
				</div>
			<?php

			} else {
				foreach($newsSql as $news){
	
					$author = $db->run("SELECT ACC_name FROM account WHERE ACC_id = ".$news['NEWS_author'])->fetchColumn();

				?>
					<div>
						<div class="content_header df jcsb">
							<span><?= $news['NEWS_title'] ?></span>
						</div>
						<div class="content_context df fdc fg-10">
							<div>
								<?= $news['NEWS_text'] ?>
							</div>
							<span class="text-secondary">
								<?= 'av: '. $author. ' - '. $news['NEWS_published'] ?>
							</span>
						</div>
					</div>
				<?php
				}
			}

		?>
	</div>
</div>
