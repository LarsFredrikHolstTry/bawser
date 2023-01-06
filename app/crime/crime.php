<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
			<i class="fi fi-sr-bank"></i>
		</div>
		<div class="main_content_header_text">
			Crime
		</div>
	</div>
	<div class="df fdc fg-10 main_content_context">
		<div class="innerDiv">
			<?php

			include '_crime.php';

			?>
			<div class="content_header df jcsb">
				<span>Crime</span>
			</div>
			<div class="content_context">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim, 
			eros at suscipit bibendum, elit lacus venenatis magna, quis molestie 
			lectus eros sit amet orci. Nam aliquet nibh quis ligula suscipit, ac 
			viverra tortor gravida. Nam ac sollicitudin augue. Suspendisse tempor 
			velit sit amet nulla placerat, nec congue tortor aliquam. Nulla a accumsan 
			velit. In sapien tellus, volutpat et neque ac, viverra congue orci. 
			Cras neque lacus, maximus nec gravida sed, faucibus sed ante.
			<form method="post" id="crimeForm" action="">
				<input name="cat" type="hidden"/>
				<table class="table mt-5">
					<tr class="table-header">
						<th>Handling</th>
						<th>Ventetid</th>
						<th>Sjanse</th>
						<th>Utbetaling</th>
					</tr>
					<tr value="hei" class="table-row-clickable">
						<td>Rob Lorem Ipsum</td>
						<td>15s</td>
						<td>80%</td>
						<td>10 kr - 50 kr</td>
					</tr>
					<tr class="table-row-clickable">
						<td>Rob Lorem Ipsum</td>
						<td>25s</td>
						<td>70%</td>
						<td>50 kr - 150 kr</td>
					</tr>
					<tr class="table-row-clickable">
						<td>Rob Lorem Ipsum</td>
						<td>45s</td>
						<td>60%</td>
						<td>110 kr - 250 kr</td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

	$(".table").on(
		'click',
		'.table-row-clickable',
		function(e){
			e.preventDefault();
			var id = $(this).attr('value');
			var $form = $('#crimeForm');
			$form.find('input').val(id);
			$form.submit();
		}
	);

</script>