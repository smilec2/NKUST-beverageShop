<!-- 新增商品Modal -->
<div
	class="modal fade"
	id="addProductModal"
	tabindex="-1"
	aria-labelledby="addProductModalLabel"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addProductModalLabel">新增商品</h5>
				<button
					type="button"
					class="btn-close"
					data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="mb-3">
						<label for="product_name" class="form-label">商品名稱</label>
						<input
							type="text"
							class="form-control"
							id="product_name"
							name="product_name"
							required />
					</div>
					<div class="mb-3">
						<label for="description" class="form-label">商品描述</label>
						<input
							type="text"
							class="form-control"
							id="description"
							name="description"
							required />
					</div>
					<div class="mb-3">
						<label for="price" class="form-label">價格</label>
						<input
							type="number"
							class="form-control"
							id="price"
							name="price"
							required />
					</div>
					<div class="mb-3">
						<label for="image" class="form-label">圖片</label>
						<input
							type="file"
							class="form-control"
							id="image"
							name="image_url"
							required />
					</div>
					<div class="mb-3">
						<label for="category" class="form-label">分類</label>
						<select class="form-select" id="category" name="category_id" required>
							<option value="1">有料</option>
							<option value="2">茶類</option>
							<option value="3">奶類</option>
							<option value="4">其他</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="has_sugar" class="form-label">是否調整甜度</label>
						<select class="form-select" id="has_sugar" name="has_sugar" required>
							<option value="1">有</option>
							<option value="0">沒有</option>
						</select>
					</div>
					<button type="submit" class="btn btn-danger">送出</button>
					<button type="reset" class="btn btn-secondary">清除</button>
				</form>
			</div>
		</div>
	</div>
</div>