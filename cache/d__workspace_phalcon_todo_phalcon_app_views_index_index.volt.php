<div class="my-3 d-flex justify-content-end">
	<a class="btn btn-primary" href="/index/form" role="button">Create</a>
</div>
<div>
	<?= $this->flash->output() ?>
</div>
<?php if (isset($todos)) { ?>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Title</th>
				<th scope="col">Status</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($todos as $item) { ?>
				<tr>
					<th scope="row"><?= $item->id ?></th>
					<td><?= $item->title ?></td>
					<td><?= $item->status ?></td>
					<td>
						<div class="d-flex gap-3">
							<a href="/index/delete/<?= $item->id ?>">
								<i class="bi bi-trash"></i>
							</a>
							<a href="/index/form/<?= $item->id ?>">
								<i class="bi bi-pencil"></i>
							</a>
						</div>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } ?>
